<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Style --}}
    @stack('prpend-style')
    @include('includes.style')
    @stack('addon-style')

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}

    {!! JsonLdMulti::generate() !!}


    {!! SEO::generate() !!}
</head>
<body>
    {{-- Navbar --}}
    @include('includes.navbar')

    {{-- Page Content --}}
    @yield('content')

    {{-- Footer --}}
    @include('includes.footer')

    {{-- Script --}}
    @stack('prpend-script')
    @include('includes.script')
    @stack('addon-script')
</body>
</html>
