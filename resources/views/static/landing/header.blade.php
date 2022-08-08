<header class="flex bg-gradient-to-r from-purple-500 to-pink-500 shadow-lg">
    <nav class="container flex items-center py-2">
        <div class="box-border">
            <a href="{{ route('home') }}">
                <img class="w-9" alt="Home" src="{{ asset('img/logo/default.png') }}" />
            </a>
        </div>
        <ul class="hidden items-center sm:flex flex-1 justify-end gap-12 text-white dark:text-white">
            <li >
                <a class="block hover:text-sky-800 py-1 cursor-pointer" href="#top">Главная</a>
            </li>
            <li>
                <a class="block hover:text-sky-800 py-1 cursor-pointer" href="#portfolio">Портфолио</a>
            </li>
            <li>
                <a class="block hover:text-sky-800 py-1 cursor-pointer" href="#contacts">Контакты</a>
            </li>
            <li>
                <a class="block hover:text-sky-800 py-1 cursor-pointer" href="#about">Информация</a>
            </li>
        </ul>
    </nav>
</header>
