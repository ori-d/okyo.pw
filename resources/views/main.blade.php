<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{{ str_replace('_', '-', app()->getLocale()) }}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
@stack('meta-tags')
@stack('styles')
@stack('scripts-start')
</head>
<body class="bg-white dark:bg-slate-800 text-black dark:text-white">
@yield('content')
@stack('scripts-end')
</body>
</html>
