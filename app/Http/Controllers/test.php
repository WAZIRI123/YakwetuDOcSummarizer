<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public const BASE_URL = "https://developers.sarufi.io/";

    protected string $token;
    protected GuzzleHttpClient $httpClient;



    public function updateBot(
        $id,
        string $name,
        string $industry,
        string $description,
        array $intents = [],
        array $flows = [],
        bool $visibleOnCommunity = false,
    ) {
        $data = [
            "name" => $name,
            "description" => $description,
            "intents" => $intents,
            "flows" => $flows,
            "industry" => $industry,
            "visible_on_community" => $visibleOnCommunity,
        ];
        $res = $this->httpClient->put("chatbot/{$id}", ["json" => $data]);

        return json_decode((string) $res->getBody(), true);
    }
    
    public static function readFile(string $path)
    {
        if (! file_exists($path)) {
            throw new FileNotFoundException(path: $path);
        }

        if (str_ends_with($path, '.json')) {
            try {
                $fileStringContent = file_get_contents($path);

                return json_decode($fileStringContent, true);
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        if (str_ends_with($path, '.yml') || str_ends_with($path, '.yaml')) {
            if (! class_exists(Yaml::class)) {
                throw new \RuntimeException(
                    sprintf("Yaml parser not found, install symfony/yaml package")
                );
            }

            try {
                $data = Yaml::parseFile($path);

                return $data;
            } catch (ParseException $exception) {
                // printf('Unable to parse the YAML string: %s', $exception->getMessage());
                throw $exception;
            }
        }

        if (str_ends_with($path, '.php')) {
            try {
                $data = include $path;

                return $data;
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        throw new \RuntimeException(
            sprintf("Unable to read file: %s", $path)
        );
    }


    public function __construct(string $token = null)
    {
        $token = empty(trim($token));
        if ($token) {
            throw new \RuntimeException("Invalid credentials, token is empty");
        }
        $this->token = $token;
        $this->httpClient = new GuzzleHttpClient([
            'base_uri' => self::BASE_URL,
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Bearer ' . $this->token,
            ],
        ]);
    }

    public function updateFromFile(
        string $id,
        string $intents,
        string $flows,
        string $metadata,
    ) {

        $_intents = $this->readFile($intents);
        $_flow = $this->readFile($flows);
        $_metadata = $this->readFile($metadata);

        $res = $this->updateBot(
            id: $id,
            name: $_metadata["name"],
            description: $_metadata["description"],
            industry: $_metadata["industry"],
            visibleOnCommunity: $_metadata["visible_on_community"],
            intents: $_intents,
            flows: $_flow,
        );

        return $res;
    }
}
