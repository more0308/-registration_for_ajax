
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/assets/img/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/assets/img/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/assets/img/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/assets/img/manifest.json">
    <link rel="mask-icon" href="/assets/img/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/assets/img/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="/dist/css/signin.css" rel="stylesheet">
</head>
<body class="text-center">

<main class="form-signin">
    <form class="my-form">
        <img class="mb-4" src="/assets/img/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Registration</h1>

        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="Name" name="name">
            <label for="floatingInput">Name</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="Last Name" name="lastname">
            <label for="floatingInput">Last Name</label>
        </div>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Confirm password" name="confirm_password">
            <label for="floatingPassword">Confirm password</label>
        </div>
        <div class="mess"></div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Confirm</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
    </form>

</main>



</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
    $('.my-form').submit(function (e) {
        e.preventDefault();
        let th = $(this);
        let mess = $('.mess');
        $.ajax({
            url: 'scripts/script.php',
            type: 'POST',
            data: th.serialize(),
            success: function (data) {
                if (data.length > 0) {
                    mess.html('<div class="alert alert-success">'+data+'</div>')
                }
                else{
                    $('body').html('<div style="text-align: center;border: 10px solid #20c997;padding: 100px;margin: 400px auto; background-color: #198754; color: darkorange;">Registration successfully completed</div>')
                }
            }
        })
    })
</script>
</html>
