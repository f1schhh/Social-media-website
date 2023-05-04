<?php require_once('inc/main.inc.php'); ?>
<!doctype html>
<html lang="sv">
  <head>
    <?php echo $wconf->metatags; ?>
    <title><?php echo $wconf->websitename; ?></title>
    <?php echo $wconf->cssfiles; ?>
</head>
<body>
<?php echo $wconf->incsvgs; ?>
<!----- MENYBAR ------>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <img src="img/icons/favicon-32x32.png" style="float:left;" /> 
    <a class="navbar-brand ml-2" href="home.php"><?php echo $wconf->websitename; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php echo $wconf->navbar; ?>
  </div>
</nav>

<!-- Container -->
<div class="container-xxl d-flex flex-column min-vh-100">
  <div class="profile-banner" style="background-image:url('https://orig00.deviantart.net/aa5f/f/2015/001/f/6/leicester_city_2015_wallpaper_by_shangeeth_sugumar_by_shangeeths-d8c4rz7.jpg')"></div>
    <div class="row">
      <div class="col-md-3 profile-picture-container">
  <img src="https://foxesofleicester.com/wp-content/uploads/getty-images/2017/07/1196389614.jpeg" class="rounded-circle mb-3" alt="Profile picture" style="width: 12rem; height: 12rem;">
  <h2>@yoshe</h2>
  <h4>Adam Fischer</h4>
  <h6>Member since: January 1, 2020</h6>
  <button class="btn btn-primary">Follow</button>
  <button class="btn btn-primary ">Send message</button>
  <div class="one-vr"></div>
   <ul class="list-group list-group-horizontal social-media-icons">
    <li class="list-group-item"><a href="https://twitter.com/yoshe"><i class="fab fa-twitter"></i></a></li>
    <li class="list-group-item"><a href="https://www.facebook.com/yoshe"><i class="fab fa-facebook-square"></i></a></li>
    <li class="list-group-item"><a href="https://www.instagram.com/yoshe"><i class="fab fa-instagram"></i></a></li>
    <li class="list-group-item"><a href="https://www.linkedin.com/in/yoshe"><i class="fab fa-linkedin"></i></a></li>
  </ul>
</div>
      <div class="col-md-9 mt-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">About</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in pretium ligula. Duis ac molestie nulla. Nunc quis diam eu metus euismod dapibus. Ut congue condimentum sem, a pulvinar urna sollicitudin vel. Fusce velit est, sagittis vel felis eu, consectetur dictum nunc. Nunc ultricies, elit at vestibulum elementum, orci nisi consequat lectus, a luctus est mauris eu massa. Cras a ullamcorper erat, eu sollicitudin dolor. Morbi in dui quis neque tincidunt luctus.</p>
          </div>
        </div>
        <br />
        <div class="card mt-3">
          <div class="card-body">
            <h5 class="card-title">Recent Activity</h5>
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action">
                <h5 class="mb-1">Post 1</h5>
                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <small>January 1, 2020</small>
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                <h5 class="mb-1">Post 2</h5>
                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <small>January 2, 2020</small>
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                <h5 class="mb-1">Post 3</h5>
                <p class="mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <small>January 3, 2020</small>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="one-vr"></div>
<!-----------FOOTER----------->
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top mt-auto">
    <div class="col-md-4 d-flex align-items-center">
      <span class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
         <img src="img/icons/favicon-32x32.png" />
      </span>
      <span class="mb-3 mb-md-0 text-muted">© 2023 <?php echo $wconf->websitename; ?></span>
    </div>

  </footer>
<!-----------End of FOOTER----------->
</body>
</html>