<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.meta')
    @include('components.head_scripts')
    @yield('head_scripts')
</head>

<body>
    @include('components.header')

    <main>
        @yield('main_content')
    </main>

    @yield('footer')

    @include('components.footer_scripts')
    @yield('footer_scripts')
</body>

</html>
