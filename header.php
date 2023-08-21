<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;500;800&display=swap"
      rel="stylesheet"
    />
  <?php
    wp_head();
  ?>

  </head>
  <body>
    <header class="p-3 bg-dark text-white">
      <div class="d-flex flex-wrap align-items-center justify-content-start">
        <a
          href="/"
          class="d-flex align-items-center ms-5 mb-2 mb-lg-0 text-white text-decoration-none"
        >
          <img src="./mr.png" height="50" width="100" />
        </a>
        <div class="container">
          <ul
            class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0"
          >
            <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
            <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
            <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
            <li><a href="#" class="nav-link px-2 text-white">About</a></li>
          </ul>
        </div>
      </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#"
                        >Home <i class="fas fa-arrow-right"></i
                        ></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"
                        >About <i class="fas fa-arrow-right"></i
                        ></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"
                        >Services <i class="fas fa-arrow-right"></i
                        ></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"
                        >Portfolio <i class="fas fa-arrow-right"></i
                        ></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"
                        >Contact <i class="fas fa-arrow-right"></i
                        ></a>
                    </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content Area -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">