<?php require_once('inc/main.inc.php'); 
@$login->DefaultCheckOnline($_SESSION['useractive']);
?>
<!doctype html>
<html lang="sv">
  <head>
    <?php echo $wconf->metatags; ?>
    <title><?php echo $wconf->websitename; ?></title>
    <?php echo $wconf->cssfiles; ?>
</head>
<body>
<?php echo $wconf->incsvgs; ?>
<div class="container-xxl d-flex flex-column min-vh-100 mb-3">
  <div class="row mt-3">
  <div class="col-md-5">
  <div class="card-group">
  <div class="card">
    <img class="card-img-top" src="<?php echo $wconf->websiteurl; ?>/v1/img/launchimg.jpg" alt="Login image">
    <div class="card-body">
      <h5 class="card-title">Information och regler</h5>
      <p class="card-text">Innan du loggar in på vår plattform, vänligen läs igenom följande information och regler:<br /><br />

    Användarvillkor: Genom att logga in på vår plattform godkänner du våra användarvillkor. Dessa villkor innehåller viktiga uppgifter om dina rättigheter och skyldigheter på vår plattform. Det är viktigt att du läser och förstår dessa villkor innan du använder vår plattform.<br /><br />

    Sekretesspolicy: Vi värnar om din personliga integritet och skyddar dina personuppgifter. Vänligen läs igenom vår sekretesspolicy för att förstå hur vi hanterar din information på vår plattform.<br /><br />

    Användarprofil: När du skapar en användarprofil på vår plattform, vänligen se till att din information är korrekt och uppdaterad. Vi förbehåller oss rätten att ta bort profiler som innehåller falsk eller stötande information.<br /><br />

    Innehåll: Du ansvarar för allt innehåll som du delar på vår plattform. Vänligen se till att allt innehåll du delar är lagligt, inte kränker någon annans rättigheter och inte innehåller stötande material.<br /><br />

    Uppförande: Vi förväntar oss att alla användare uppträder på ett respektfullt och lämpligt sätt på vår plattform. Stötande eller olämpligt beteende kan leda till avstängning eller permanent avstängning från vår plattform.<br /><br />

Vi tackar dig för att du valt att använda vår plattform och hoppas att du kommer att ha en trevlig och positiv upplevelse på vår sida!</p>
    </div>
  </div>
</div>
</div>
<div class="col-md-6">
<div class="card-group mt-3">
  <div class="card">
    <?php
  @$username = $_POST['username'];
  @$firstname = $_POST['first_name'];
  @$lastname = $_POST['last_name'];
  @$email = $_POST['email'];
  @$password = $_POST['password'];
  @$regbtn = $_POST['regbtn'];

  if(isset($regbtn)){
    if($email && $username && $password){
      echo '<span class="p-3">';
      $login->createUser($firstname,$lastname, $username, $email, $password);
      echo '</span>';
    }
  }
  ?>
<form class="px-3 p-3" action="register.php" method="POST">
  <div class="form-group">
    <label for="first_nameid">Förnamn(alternativt)</label>
    <input type="text" class="form-control" id="first_nameid" aria-describedby="" name="first_name" placeholder="Ange förnamn">
  </div>
  <div class="form-group">
    <label for="last_nameid">Efternamn(alternativt)</label>
    <input type="text" class="form-control" id="last_nameid" aria-describedby="" name="last_name" placeholder="Ange efternamn">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Användarnamn*</label>
    <input type="username" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp" placeholder="Ange användarnamn">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email*</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Ange email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Lösenord*</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Lösenord">
  </div>
  <input type="submit" class="btn btn-primary" name="regbtn" value="Registrera" />
  <br /><br />
  <p>Har du redan ett konto? Klicka <a href="login.php">här</a> för att logga in</p>
</form>
</div>
</div>
</div>

</div>
</div>


<!-----------FOOTER----------->
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top mt-auto sticky-bottom">
    <div class="col-md-4 d-flex align-items-center">
      <span class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
         <img src="img/icons/favicon-32x32.png" />
      </span>
      <span class="mb-3 mb-md-0 text-muted">© <?php echo $wconf->websitename; ?> </span>
    </div>

  </footer>
<!-----------End of FOOTER----------->


<!---- Javascript filer ----->
<?php echo $wconf->jsfiles; ?>
</body>
</html>
