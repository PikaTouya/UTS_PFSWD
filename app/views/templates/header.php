<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman <?=$data['judul']?></title>
    <link href="<?= BASEURL; ?>/css/bootstrap.css" rel="stylesheet">
    <style>
      *{
        box-sizing: content-box;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom position-fixed w-100 fixed-top" data-bs-theme="">
        <div class="container">
          <a class="navbar-brand" href="<?=BASEURL?>"><b>Vilinux</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?=BASEURL?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?=BASEURL?>/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?=BASEURL?>/blog">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?=BASEURL?>/services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?=BASEURL?>/contact">Contact</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>