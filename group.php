<?php require_once('inc/main.inc.php'); ?>
<!doctype html>
<html lang="sv">
  <head>
    <?php echo $wconf->metatags; ?>
    <title><?php echo $wconf->websitename; ?></title>
    <?php echo $wconf->cssfiles; ?>

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

      .b-example-divider {
        height: 0rem;
        border-top: 1px solid lightgrey;
      }

      .b-example-vr {
        height: 3rem;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
      .banner-container {
  position: relative;
  height: 300px; /* Adjust as needed */
}

.banner-text {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white; /* Make the text color visible against the banner image */
  font-size: 3em; /* Adjust as needed */
}
    </style>
</head>
<body>
<?php echo $wconf->incsvgs; ?>
<!----- MENYBAR ------>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Poggers</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Hem</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Evenemang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Grupper</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Sök" aria-label="Search">
        <button class="btn bg-primary text-white" type="submit">Sök</button>
      </form>
    </div>
  </div>
</nav>
<!-- Group banner -->
<div class="jumbotron jumbotron-fluid bg-dark text-white text-center bg-image" style="background-image: url(https://images.unsplash.com/photo-1681572028201-0e13e0810714); background-size: cover; background-position:center;min-height: 40vh;">
  <div class="container">
    <h1 class="display-4">Grupp</h1>
  </div>
</div>

<div class="container mt-5">
  <div class="row">
    <!-- Group members -->
    <div class="col-md-3">
      <h2>Group Members</h2>
      <div class="card mb-4">
        <img src="https://images.unsplash.com/photo-1681572028201-0e13e0810714" class="card-img-left" alt="Profile 1">
        <div class="card-body">
          <h5 class="card-title">Member 1</h5>
        </div>
      </div>
      <div class="card mb-4">
        <img src="profile2.jpg" class="card-img-top" alt="Profile 2">
        <div class="card-body">
          <h5 class="card-title">Member 2</h5>
        </div>
      </div>
      <div class="card mb-4">
        <img src="profile3.jpg" class="card-img-top" alt="Profile 3">
        <div class="card-body">
          <h5 class="card-title">Member 3</h5>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <h2>Group Posts</h2>
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Post 1</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget dui quis diam lobortis vestibulum. Nunc pellentesque justo nec ligula venenatis, a iaculis velit volutpat.</p>
        </div>
      </div>
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title">Post 2</h5>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eget dui quis diam lobortis vestibulum. Nunc pellentesque justo nec ligula venenatis, a iaculis velit volutpat.</p>
        </div>
      </div>

</body>
</html>