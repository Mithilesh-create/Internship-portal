<?php
$title = "Login";
include_once("../../components/head.php");
?>
<body class="text-center">

    <main class="form-signin w-100 m-auto">
        <form>
            <img class="mb-4" src="../../assets/logo.jpeg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">PCE Internship Portal</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>

            <a href="#" class="w-100 btn btn-lg btn-warning mb-3" type="submit">Sign in</a>
            <a href="../student/" class="w-100 btn btn-lg btn-primary text-light">
                <i class="bi bi-google text-green"></i>
                Google Sign in
            </a>
            <p class="mt-5 mb-3 text-muted">&copy; 2022-2023</p>
        </form>
    </main>
</body>

</html>


