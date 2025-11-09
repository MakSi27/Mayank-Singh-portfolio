<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.meta')
    @yield('head_scripts')
</head>

<body>
    @include('components.header_hero')

    <main>
        @yield('main_content')
    </main>

    @include('components.footer_hero')

    @yield('footer_scripts')
</body>

</html>
