<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Panel Login</title>
  <!-- Bootstrap core CSS -->
<link href="<?php echo base_url(); ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">

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
    <link href="<?php echo base_url(); ?>assets/dist/css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

<main class="form-signin">
  <form action="<?php echo base_url().'Welcome/login_cek' ?>" method="post">
    <h1 class="h3 mb-3 fw-normal">Panel Login</h1>
    <label for="inputEmail" class="visually-hidden">Nomor Induk Pegawai (NIP)</label>
    <input type="text" name="nip" id="inputNip" class="form-control" placeholder="Nomor Induk Pegawai" required autofocus autocomplete="off">
    <label for="inputPassword" class="visually-hidden">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
  </form>
</main>

  </body>
</html>
