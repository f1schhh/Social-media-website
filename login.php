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
<div class="container-xxl d-flex flex-column min-vh-100">
  <div class="row">
  <div class="col-md-5">
  <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="https://thumbs.dreamstime.com/b/asocial-english-word-mean-behavior-relationship-words-art-handwritten-176626237.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"> title</h5>
      <p class="card-text">Text text text</p>
    </div>
  </div>
</div>
</div>
<div class="col-md-6">
<div class="card-group">
  <div class="card">
<form class="px-3 p-3">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>

</div>
</div>


<!-----------FOOTER----------->
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top mt-auto sticky-bottom">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="mb-3 mb-md-0 text-muted">© <?php echo $wconf->websitename; ?> </span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
    </ul>
  </footer>
<!-----------End of FOOTER----------->

<!---- Javascript filer ----->
<?php echo $wconf->jsfiles; ?>
</body>
</html>
