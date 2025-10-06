<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('elements.head')

<body class="fade-in">
    <header>
        @include('elements.defaultBar')
        @include('elements.nav')
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="footer-pmar-transparencia">
        @include('elements.modal')
        @include('elements.defaultFooter')
    </footer>
</body>

</html>