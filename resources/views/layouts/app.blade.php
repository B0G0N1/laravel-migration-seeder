<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Migration Seeder</title>

    @vite('resources/js/app.js')
    {{-- Collegamento ai file JS e CSS tramite Vite --}}
</head>

<body>
    <div class="layout">
        @include('partials.header')
        {{-- Include il file header --}}

        <main>
            @yield('content')
            {{-- Sezione per inserire il contenuto specifico delle pagine --}}
        </main>

        @include('partials.footer')
        {{-- Include il file footer --}}
    </div>
</body>

</html>
