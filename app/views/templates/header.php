<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['judul'] ?></title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <style>
      html::-webkit-scrollbar {
        display: none;
      }
      
      body {
        background-color: #1a1a1a;
        color: #e0e0e0;
      }
      
      .navbar {
        background: linear-gradient(135deg, #1e1e1e 0%, #2d2d2d 100%) !important;
        box-shadow: 0 2px 10px rgba(0,0,0,0.3);
      }
      
      .navbar-brand {
        font-weight: 600;
        font-size: 1.4rem;
        transition: color 0.3s ease;
      }
      
      .navbar-brand:hover {
        color: #17a2b8 !important;
      }
      
      .nav-link {
        position: relative;
        transition: color 0.3s ease;
        margin: 0 0.5rem;
      }
      
      .nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        width: 0;
        height: 2px;
        background: #17a2b8;
        transition: all 0.3s ease;
        transform: translateX(-50%);
      }
      
      .nav-link:hover::after,
      .nav-link.active::after {
        width: 80%;
      }
      
      .nav-link:hover {
        color: #17a2b8 !important;
      }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center" href="<?= BASEURL; ?>">
      <img src="<?= BASEURL; ?>/asset/icon/bird.png" alt="Logo" width="40" height="40" class="d-inline-block me-2">
      <span>Roni Kurnia</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= BASEURL; ?>/project">Project</a>
        </li>
      </ul>
    </div>
  </div>
</nav>