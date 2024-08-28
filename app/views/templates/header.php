<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?php echo $data['judul'] ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo BASEURL ?>/css/bootsrap.css">

    <!-- <link rel="stylesheet" href="http://localhost/mvc/public/css/bootsrap.css"> -->
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container">
            <a class="navbar-brand" href="<?php echo BASEURL; ?>">Belajar MVC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="" href="<?php echo BASEURL; ?>">Home</a>
                    <a class="nav-link" href="<?php echo BASEURL; ?>/about">About</a>
                    <a class="nav-link" href="<?php echo BASEURL; ?>/page">Page</a>
                    <a class="nav-link" href="<?php echo BASEURL; ?>/web">Web Development</a>

                   
                    
                </div>
            </div>
        </div>
    </nav>