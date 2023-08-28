<html lang="en"><script src="chrome-extension://mjnbclmflcpookeapghfhapeffmpodij/injected_content.js"></script><head>
        <!-- Base Meta -->
        <title>Yakwetu| Yakwetu ChatBot</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="A full-stack framework for Laravel that takes the pain out of building dynamic UIs.">
        <link rel="home" href="https://livewire.laravel.com">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Social Meta -->
        <meta property="og:site_name" content="Laravel">
        <meta property="og:title" content="Livewire | Laravel">
        <meta property="og:description" content="A full-stack framework for Laravel that takes the pain out of building dynamic UIs.">
        <meta property="og:url" content="https://livewire.laravel.com">
        <meta property="og:image" content="https://livewire.laravel.com/meta.png">
        <meta property="og:type" content="website">
        <meta name="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://livewire.laravel.com">
        <meta property="twitter:title" content="Livewire | Laravel">
        <meta property="twitter:description" content="A full-stack framework for Laravel that takes the pain out of building dynamic UIs.">
        <meta property="twitter:image" content="https://livewire.laravel.com/meta.png">
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">

        <!-- Fathom Analytics -->
                    <script src="https://cdn.usefathom.com/script.js" data-site="UGOOHZKF" defer=""></script>
        
        <!-- Algolia Docsearch -->
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css">
        
        <!-- Assets -->
        <link rel="preload" as="style" href="https://livewire.laravel.com/build/assets/app-4111fff0.css"><link rel="modulepreload" href="https://livewire.laravel.com/build/assets/app-5d522f16.js"><link rel="stylesheet" href="https://livewire.laravel.com/build/assets/app-4111fff0.css" data-navigate-track="reload"><script type="module" src="https://livewire.laravel.com/build/assets/app-5d522f16.js" data-navigate-track="reload"></script>    <style>/* Make clicks pass-through */
    #nprogress {
      pointer-events: none;
    }

    #nprogress .bar {
    //   background: #FC70A9;
      background: #29d;

      position: fixed;
      z-index: 1031;
      top: 0;
      left: 0;

      width: 100%;
      height: 2px;
    }

    /* Fancy blur effect */
    #nprogress .peg {
      display: block;
      position: absolute;
      right: 0px;
      width: 100px;
      height: 100%;
      box-shadow: 0 0 10px #29d, 0 0 5px #29d;
      opacity: 1.0;

      -webkit-transform: rotate(3deg) translate(0px, -4px);
          -ms-transform: rotate(3deg) translate(0px, -4px);
              transform: rotate(3deg) translate(0px, -4px);
    }

    /* Remove these to get rid of the spinner */
    #nprogress .spinner {
      display: block;
      position: fixed;
      z-index: 1031;
      top: 15px;
      right: 15px;
    }

    #nprogress .spinner-icon {
      width: 18px;
      height: 18px;
      box-sizing: border-box;

      border: solid 2px transparent;
      border-top-color: #29d;
      border-left-color: #29d;
      border-radius: 50%;

      -webkit-animation: nprogress-spinner 400ms linear infinite;
              animation: nprogress-spinner 400ms linear infinite;
    }

    .nprogress-custom-parent {
      overflow: hidden;
      position: relative;
    }

    .nprogress-custom-parent #nprogress .spinner,
    .nprogress-custom-parent #nprogress .bar {
      position: absolute;
    }

    @-webkit-keyframes nprogress-spinner {
      0%   { -webkit-transform: rotate(0deg); }
      100% { -webkit-transform: rotate(360deg); }
    }
    @keyframes nprogress-spinner {
      0%   { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
    </style></head>

    <body class="min-h-screen bg-gray-900 font-sans text-gray-100 antialiased" data-new-gr-c-s-check-loaded="14.1120.0" data-gr-ext-installed="" cz-shortcut-listen="true">
        <div x-data="{ navIsOpen: false }" class="sticky top-0 z-10">
    <header class="bg-gray-900/50 backdrop-blur-2xl border-gray-800 border-b">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between gap-6">
            <div class="-mx-2 flex items-center gap-10 xl:w-full xl:max-w-xs xl:shrink-0">
       

                            </div>

            <div class="flex items-center justify-end gap-6 lg:w-full lg:max-w-xs lg:shrink-0">
                <div id="js-search-input" class="docsearch-input__wrapper relative hidden md:block" x-data="{
            init() {
                docsearch({
                    appId: '418WMK58D6',
                    apiKey: '4c5d415abd4c0c167f4368e679076c09',
                    indexName: 'livewire-framework-3',
                    inputSelector: '#docsearch-input',
                    debug: true, // Set debug to true if you want to inspect the dropdown
                })
            },
            handleKeydown(e) {
                // '/'
                if (e.keyCode == 191) {
                    document.getElementById('docsearch-input').focus();
                    e.preventDefault()
                }

                // 'cmd+k'
                if (e.keyCode == 75 &amp;&amp; (e.metaKey == true || e.ctrlKey == true)) {
                    document.getElementById('docsearch-input').focus();
                    e.preventDefault()
                }

                // 'esc'
                if (e.keyCode == 27) {
                    document.getElementById('docsearch-input').blur();
                    e.preventDefault()
                }
            },
        }">
        <label for="search" class="sr-only">Search</label>

        <span class="algolia-autocomplete" style="position: relative; display: inline-block; direction: ltr;"><input id="docsearch-input" class="docsearch-input border-gray-900 block w-full rounded-[10px] border bg-gray-850 pl-10 pr-4 py-2.5 text-sm text-gray-300 placeholder-gray-600 outline-none transition-color focus-visible:border-gray-900 focus-visible:ring-1 focus-visible:ring-pink-400/50 ds-input" name="docsearch" type="text" placeholder="Search" @keydown.window="handleKeydown" autocomplete="off" spellcheck="false" role="combobox" aria-autocomplete="list" aria-expanded="false" aria-label="search input" aria-owns="algolia-autocomplete-listbox-0" dir="auto" style="position: relative; vertical-align: top;"><pre aria-hidden="true" style="position: absolute; visibility: hidden; white-space: pre; font-family: Graphik, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 14px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: normal; text-indent: 0px; text-rendering: auto; text-transform: none;"><div class="open_grepper_editor" title="Edit &amp; Save To Grepper"></div></pre><span class="ds-dropdown-menu" role="listbox" id="algolia-autocomplete-listbox-0" style="position: absolute; top: 100%; z-index: 100; display: none; left: 0px; right: auto;"><div class="ds-dataset-1"></div></span></span>

        <div class="pointer-events-none absolute inset-0 left-3 flex items-center" aria-hidden="true">
            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 9.167a5.917 5.917 0 1 1 11.833 0 5.917 5.917 0 0 1-11.833 0ZM9.167 1.75a7.417 7.417 0 1 0 4.687 13.165l2.282 2.282a.75.75 0 0 0 1.061-1.06l-2.282-2.283A7.417 7.417 0 0 0 9.167 1.75Z" fill="#475569" opacity=".8"></path></svg>
        </div>
    </div>

    
                

                <a href="https://github.com/livewire/livewire" class="rounded-md p-1 text-gray-400 transition-colors hover:text-gray-300 focus:outline-none focus-visible:ring focus-visible:ring-pink-400/50">
                    <svg class="w-6" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C7.16 0 0 7.16 0 16c0 7.08 4.58 13.06 10.94 15.18.8.14 1.1-.34 1.1-.76 0-.38-.02-1.64-.02-2.98-4.02.74-5.06-.98-5.38-1.88-.18-.46-.96-1.88-1.64-2.26-.56-.3-1.36-1.04-.02-1.06 1.26-.02 2.16 1.16 2.46 1.64 1.44 2.42 3.74 1.74 4.66 1.32.14-1.04.56-1.74 1.02-2.14-3.56-.4-7.28-1.78-7.28-7.9 0-1.74.62-3.18 1.64-4.3-.16-.4-.72-2.04.16-4.24 0 0 1.34-.42 4.4 1.64 1.28-.36 2.64-.54 4-.54 1.36 0 2.72.18 4 .54 3.06-2.08 4.4-1.64 4.4-1.64.88 2.2.32 3.84.16 4.24 1.02 1.12 1.64 2.54 1.64 4.3 0 6.14-3.74 7.5-7.3 7.9.58.5 1.08 1.46 1.08 2.96 0 2.14-.02 3.86-.02 4.4 0 .42.3.92 1.1.76A16.026 16.026 0 0 0 32 16c0-8.84-7.16-16-16-16Z" fill="currentColor"></path></svg>
                </a>

                <button class="inline-flex rounded-md p-1 text-gray-400 transition-colors hover:text-gray-300 focus:outline-none focus-visible:ring focus-visible:ring-pink-400/50 lg:hidden" @click.prevent="navIsOpen = ! navIsOpen">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10zm0 5.25a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75a.75.75 0 01-.75-.75z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>
    </header>

    <nav x-dialog="" x-model="navIsOpen" style="display: none" class="fixed inset-0 z-20 overflow-hidden lg:hidden" aria-labelledby="alpine-dialog-title-1" aria-describedby="alpine-dialog-description-1" role="dialog" aria-modal="true">
        <div x-dialog:overlay="" x-transition.opacity="" class="fixed inset-0 bg-gray-900/50" style="display: none;"></div>

        <div class="fixed inset-y-0 right-0 w-full max-w-sm">
            <div x-dialog:panel="" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full" class="h-full w-full" style="display: none;">
                <div class="bg-gray-850 flex h-full flex-col justify-between overflow-y-auto shadow-lg">
                    <!-- Close Button -->
                    <div class="absolute top-0 right-0 pt-4 pr-4">
                        <button type="button" @click="$dialog.close()" class="rounded-md p-2 text-gray-400 transition hover:text-gray-200 focus:outline-none focus-visible:ring-2 focus-visible:ring-pink-400/50">
                            <span class="sr-only">Close nav</span>

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-6 w-6">
                                <path fill-rule="evenodd" d="M5.47 5.47a.75.75 0 011.06 0L12 10.94l5.47-5.47a.75.75 0 111.06 1.06L13.06 12l5.47 5.47a.75.75 0 11-1.06 1.06L12 13.06l-5.47 5.47a.75.75 0 01-1.06-1.06L10.94 12 5.47 6.53a.75.75 0 010-1.06z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>

                    <!-- Body -->
                    <div class="flex flex-col gap-3 py-16 px-12">
                        <a class="flex items-center gap-3 rounded-md p-2 text-gray-400 transition-colors hover:text-gray-300 focus:outline-none focus-visible:ring focus-visible:ring-pink-400/50" href="/docs">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"></path></svg>
                            <span>Documentation</span>
                        </a>

                                            </div>
                </div>
            </div>
        </div>
    </nav>
</div>
<script defer async>
  document.addEventListener('DOMContentLoaded', function() {
    // setting global variables
    window.botId = 2007
    
    // create div with id = sarufi-chatbox
    const div = document.createElement("div")
    div.id = "sarufi-chatbox"
    document.body.appendChild(div)

    // create and attach script tag
    const script = document.createElement("script")
    script.crossOrigin = true
    script.type = "module"
    script.src = "https://cdn.jsdelivr.net/gh/flexcodelabs/sarufi-chatbox/example/vanilla-js/script.js"
    document.head.appendChild(script)

    // create and attach css
    const style = document.createElement("link")
    style.crossOrigin = true
    style.rel = "stylesheet"
    style.href = "https://cdn.jsdelivr.net/gh/flexcodelabs/sarufi-chatbox/example/vanilla-js/style.css"
    document.head.appendChild(style)
  });
</script>
        <main role="main" class="1 lg:flex lg:flex-1 lg:flex-col">

            <div class="pointer-events-none absolute inset-0 h-[2400px] w-full overflow-hidden pb-64">
        <script>
            // Every 150ms we'll generate a new "woosh" vertical line, place it randomly, and animate it.
            setInterval(() => {
                let el = document.querySelector('#woosh').content.cloneNode(true).firstElementChild;
                document.querySelector('#woosh').after(el)

                setTimeout(() => woosh(el), 10)
            }, 150)

            function woosh(el) {
                let random = max => Math.floor(Math.random() * max);
                let parent = el; let child = el.firstElementChild

                parent.style.setProperty('left', random(100)+'%')
                parent.style.setProperty('top', (random(1000)-500)+'px')
                parent.classList.remove('translate-y-0')
                setTimeout(() => parent.classList.add('translate-y-[500px]'), 50)

                child.classList.remove('opacity-0')
                setTimeout(() => {
                    child.classList.add('opacity-0')

                    setTimeout(() => {
                        el.remove()
                    }, 1000);
                }, 650)
            }
        </script>

        
               
            </div>
            </div>
    </div>

    <div class="relative">
        <div class="pt-12 text-center sm:pt-20">
            <h1 class="mx-auto max-w-4xl px-16 text-center text-5xl font-semibold leading-tight sm:text-6xl">Yakwetu Doc Summarizer</h1>
            
            <div wire:snapshot="{&quot;data&quot;:{&quot;term&quot;:null},&quot;memo&quot;:{&quot;id&quot;:&quot;AaaFaeB1yW6eHyvnMHk4&quot;,&quot;name&quot;:&quot;home-example&quot;,&quot;path&quot;:&quot;\/&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;e40b97c21cfefbd29e7f48d01b0033372ea7a12fa6b8ae8b510995fdc92d7ac4&quot;}" wire:effects="[]" wire:id="AaaFaeB1yW6eHyvnMHk4" class="mx-auto mt-20 max-w-xl px-6 lg:max-w-4xl">
    <div class="w-full bg-gray-850 rounded-xl overflow-hidden grid lg:grid-cols-5" style="box-shadow: inset 0px -1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.1)">
    <div class="border-r border-gray-800 p-8 pb-12 lg:col-span-2">
            <div class="relative w-full">
                <div class="pointer-events-none absolute inset-0 left-3 flex items-center" aria-hidden="true">
                 
                </div>
            </div>

        </div>
</div>
</div>

<form id="imageForm" enctype="multipart/form-data">
        <input type="file"  id="fileInput" name="image">
    </form>

            <button class="mt-8 inline-flex px-8 py-2.5 rounded-[10px] bg-pink-400 text-white uppercase font-medium transition hover:opacity-90  focus-visible:outline-none focus-visible:!ring-1 focus-visible:!ring-white" style="
                    background: linear-gradient(109.48deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.1) 100%), #EE5D99;
                    box-shadow: inset 0px -1px 0px rgba(0, 0, 0, 0.5), inset 0px 1px 0px rgba(255, 255, 255, 0.1);
                ">
                Summarize
            </button>
            <button onclick="test()" class="send-btn">Send</button>
            <div id="uploadedImages"></div>
            <button id="uploadButton">Upload and Update</button>
        </div>    
                </div>
            </div>
        </div>
        </main>

<script>

const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
// Now, you can use this `csrfToken` value in your POST requests

const apiUrl = 'https://developers.sarufi.io/chatbot/2012';
                const authToken = 'e92cfc338c7c289366cea18cca0285c011a671b4565efd46e7cfd0bec36e1306';
                const headers = {
   "Content-Type": "multipart/form-data",
    "X-CSRF-TOKEN": csrfToken // Include the CSRF token in the headers
  };
              
document.getElementById("uploadButton").addEventListener("click", uploadAndUpdateBot);

function uploadAndUpdateBot() {

  const fileInput = document.getElementById("fileInput");
  const uploadedImagesDiv = document.getElementById("uploadedImages");
  const image=fileInput.files[0]

 
  if (image) {

  const formData = new FormData();
  formData.append("image", image);
  axios.post("http://127.0.0.1:8000/upload-images", formData, {
            headers:  headers
        })
  .then(response=> {

    axios.get(apiUrl, {
    headers: {
        'Authorization': `Bearer ${authToken}`
    }
})
.then(response => {
    const existingPayload = response.data;
    console.log(response.data)
    // This is the existing payload
    axios.put(`https://developers.sarufi.io/chatbot/2007`, updatedPayload,  {headers: {
                            'Content-Type': 'application/json',
                            'Authorization': `Bearer ${authToken}`
                        }},)
    .then(response => {
        console.log(response.data);
    })
    .catch(error => {
        console.error("Error:", error);
    });
            })

})
.catch(error => {
    console.error('Error:', error);
});
    

  }
   
   
}



  

   
    


</script>
        <script data-navigate-once="true">window.livewireScriptConfig = {"csrf":"vWwQEh4epZSWGS9OotreIv4GwinLJG2Ylh14GoX1","uri":"\/livewire\/update","progressBar":true};</script>
                <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.js"></script>
        

</body><script>document.documentElement.style.display = '' </script><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>