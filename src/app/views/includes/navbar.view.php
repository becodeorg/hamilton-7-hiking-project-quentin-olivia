<<<<<<< HEAD
<nav>
    <ul>
        <a href="/"><li>Home</li></a>
        <?php if ($_SESSION['user']['loggedIn']) { ?>
            <a href="/logout"><li>Logout</li></a>
        <?php } else { ?>
            <a href="/login"><li>Login</li></a>
            <a href="/registration"><li>Registration</li></a>
        <?php } ?>
    </ul>
</nav>
=======
<ul>
  <li><a href="#">Home</a></li>
  <li><a href="#">Hikes per tag</a></li>
  <li><a href="#">Login</a></li>
  <li><a href="#">registration</a></li>
</ul> 
>>>>>>> 3bdd97487725c02d4b4eeff66900ca202ccb2785
