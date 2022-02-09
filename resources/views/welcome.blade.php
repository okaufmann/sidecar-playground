<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <script src="https://cdn.tailwindcss.com"></script>

        <script>
            tailwind.config = {
                theme: {
                    fontFamily: {
                        roboto: ['Nunito', 'sans-serif'],
                    },
                }
            }
        </script>

    </head>
    <body class="antialiased font-sans text-white">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="flex flex-col space-y-5">
                <h1 class="text-3xl">Sidecar Examples</h1>
                <div >
                    I'd played around with <a href="https://github.com/hammerstonedev/sidecar">Sidecar for Laravel</a> and created some examples in NodeJS, Python, Go and .NET Core to show how it works.
                </div>
                <div>
                    Feel free to run all the examples:
                    <ul class="mt-5 list-disc list-inside">
                        <li><a class="italic text-gray-300 hover:not-italic" href="{{ url('/nodejs') }}" target="_blank">NodeJS Example</a></li>
                        <li><a class="italic text-gray-300 hover:not-italic" href="{{ url('/python') }}" target="_blank">Python Example</a></li>
                        <li><a class="italic text-gray-300 hover:not-italic" href="{{ url('/go') }}" target="_blank">Go Example</a></li>
                        <li><a class="italic text-gray-300 hover:not-italic" href="{{ url('/dotnet') }}" target="_blank">.NET Core Example</a></li>
                    </ul>
                    </div>
            </div>
        </div>
    </body>
</html>
