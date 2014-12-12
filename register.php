<? include('header-login.php') ?>

    <h1>Register a new account!</h1>
    <form action="process_register.php" method="POST">

        <input type="text" name="first_name" placeholder="First Name"> <br />
        <input type="text" name="image" placeholder="Image URL"> <br />
        <input type="text" name="username" placeholder="Username"> <br />
        <input type="text" name="password" placeholder="Password"> <br />

        <input type="submit" value="Register!">

    </form>

<? include('footer.php') ?>
