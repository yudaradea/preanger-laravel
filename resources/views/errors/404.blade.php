<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Forbiden</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-gray-200">
        <div class="w-full h-[100vh] flex justify-center items-center">
            <div>
                <div class="flex justify-center">
                    <img src="{{ asset('assets/img/404.webp') }}" alt="" class="w-96 md:w-[400px] object-cover" />
                </div>

                <div class="mt-4 text-center">
                    <div class="w-5/6 mx-auto sm:w-4/5">
                        <h1 class="text-2xl font-bold md:text-4xl lg:text-6xl text-text-primary font-font-jakart">
                            Ooops...
                        </h1>
                        <p class="mt-5 text-lg font-semibold text-gray-600 md:text-2xl">
                            This page you are looking for could not be found.
                        </p>
                    </div>
                    <div class="mt-8 md:mt-10">
                        <a href="{{ route('home') }}" class="px-8 py-3 text-white bg-blue-500 rounded-full">
                            Go Back to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
