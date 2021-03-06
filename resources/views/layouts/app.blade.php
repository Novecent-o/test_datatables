<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include("partials.head")

<body>

    @include("partials.header")

    <main class="py-4">
        @yield('content')
    </main>

    @include("partials.footer")

</body>
</html>
