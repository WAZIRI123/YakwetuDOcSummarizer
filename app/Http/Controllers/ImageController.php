<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ImageController extends Controller
{
    public function uploadImages(Request $request)
    {
       

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');

            // Store the image in the public disk
            $imagePath = $imageFile->store('images', 'public');

            // Build the full URL to the stored image
            $imageUrl = asset('storage/' . $imagePath);

            return response()->json(['message' => 'File uploaded and stored successfully', 'image_url' => $imageUrl]);
        }

        return response()->json(['message' => 'Files not provided'], 400);
    }
    
}
