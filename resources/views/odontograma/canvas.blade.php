<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @viteReactRefresh
    @vite('resources/js/root.jsx')
</head>
<body>
    <div id="root"></div>
</body>
</html>
