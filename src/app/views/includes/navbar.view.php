<nav class="relative w-full flex flex-wrap items-center justify-between py-3 bg-gray-100 text-gray-200 shadow-lg navbar navbar-expand-lg navbar-light z-10">
    <ul class="navbar-nav flex flex-row pl-0 list-style-none mr-auto">
        <li class="nav-item p-2"><a class="text-xl text-lime-500 font-bold" href="/">HIKES</a></li>
        <?php if ($_SESSION['user']['loggedIn']) { ?>
            <li class="nav-item p-2"><a class="nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0" href="/logout">Logout</a></li>
        <?php } else { ?>
            <li class="nav-item p-2"><a class="nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0" href="/login">Login</a></li>
            <li class="nav-item p-2"><a class="nav-link text-gray-500 hover:text-gray-700 focus:text-gray-700 p-0" href="/registration">Registration</a></li>
        <?php } ?>
    </ul>
</nav>