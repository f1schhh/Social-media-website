<?php require_once('inc/main.inc.php'); 
$login->NotLoggedIn($_SESSION['useractive']);
$user->getUserHomePage($_SESSION['useractive']);
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
<!--- MENYBAR --->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <img src="img/icons/favicon-32x32.png" style="float:left;" alt="Logo"> 
    <a class="navbar-brand ml-2" href="home.php"><?php echo $wconf->websitename; ?></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php echo $wconf->navbar; ?>
  </div>
</nav>
<div class="one-vr"></div>
<!--- FIRST CONTAINER --->
<div class="container-fluid" id="fullbox">
  <div class="row allthepost">
    <div class="col-md-2 biguserbox">
    	<div class="card">
      	<div class="card-body userinfobox">
      <img src="<?php echo $user->getProfileImg(); ?>" class="rounded-circle homepagepimg img-fluid" alt="ProfileImg"> <p class="fs-6 homepusername"> <?php echo $user->getFirstName(); ?> <?php echo $user->getLastName(); ?><br>
        @<?php echo $user->getUsername(); ?>
      </p>
   </div>
<div class="list-group list-group-flush">
  <a href="#" class="list-group-item list-group-item-action">Inkorg</a>
  <a href="#" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#settingsmodal" onclick="$('#settingsmodal').modal('show');">Inställningar</a>
  <a href="profile.php" class="list-group-item list-group-item-action"> Min profil</a>
  <a href="#" class="list-group-item list-group-item-action">Mina grupper</a>
</div>
</div>
    </div>
    <div class="col-md-10 content-center allposts">
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#postmodal" onclick="$('#postmodal').modal('show');" style="float:right;">Posta ett inlägg</button>
      <h4>Inlägg</h4>
      <?php
      $user->getAllPosts();
      @$commentbtn = $_POST['commentbtn'];
      @$postid = $_POST['postid'];
      @$commentmsg = $_POST['commentmsg'];

      if(isset($commentbtn)){
        if($postid && $commentmsg){
          header("location: home.php#postcard$postid");
          $user->AddComment($user->getUserId(), $postid, $commentmsg);
        }
      }
      ?>
</div>
</div>
</div>
<div class="one-vr"></div>
<!-----------FOOTER----------->
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top mt-auto sticky-bottom">
    <div class="col-md-4 d-flex align-items-center">
      <span class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
         <img src="img/icons/favicon-32x32.png" alt="logo">
      </span>
      <span class="mb-3 mb-md-0 text-muted">© <?php echo $wconf->websitename; ?> </span>
    </div>

  </footer>
<!---End of FOOTER --->

<!----Modals---->

<!--- Post --->
<div class="modal fade" tabindex="-1" id="postmodal" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <span class="results">
          <?php
          if(isset($_POST['msgtext'])) {
    $msgtext = $_POST['msgtext'];
    $youtubelink = $_POST['youtubelink'];
  
  if(isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) {
        $tmpName = $_FILES['fileToUpload']['tmp_name'];
        $imgName = basename($_FILES['fileToUpload']['name']);
        $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
        
        $allowedExts = ['jpg', 'jpeg', 'png', 'gif'];
        if(in_array($imgExt, $allowedExts)) {
            $randomhash = md5(uniqid(rand(), true));
            $image = $randomhash . '.' . $imgExt;

            move_uploaded_file($tmpName, 'uploads/' . $image);
        }
    }
    header("location:home.php");
    $user->AddPost($user->getUserId(), $msgtext, $image, $youtubelink);
}

?>
        </span>
        <h5 class="modal-title">Posta ett inlägg</h5>
        <button type="button" class="btn-close bg-light color-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="home.php" id="post-form" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="posttext" class="form-label">Text*</label>
    <textarea class="form-control form-control-sm" id="posttext" name="msgtext" rows="13" cols="3" placeholder="Text..." required></textarea>
  </div>
  <div class="mb-3">
  <label class="filetoupload">Bild/GIF(Alternativt)</label>
  <input type="file" class="form-control" id="filetoupload" name="fileToUpload">
</div>
  <div class="mb-3">
    <label for="Youtubevideo" class="form-label">Youtube video(alternativt)</label>
    <input type="text" class="form-control" id="Youtubevideo" name="youtubelink" placeholder="Länk...">
  </div>
  <button type="submit" class="btn btn-primary" id="addbtn">Lägg upp</button>
</form>
      </div>
    </div>
  </div>
</div>

<!---- Settings modal ----->
<div class="modal fade" tabindex="-1" id="settingsmodal" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Inställningar</h5>
        <button type="button" class="btn-close bg-light color-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
  <div class="mb-3">
    <label for="textforpost" class="form-label">Om dig</label>
    <textarea class="form-control form-control-sm" id="posttext" rows="13" cols="3" placeholder="Text..."></textarea>
  </div>
  <div class="mb-3">
  <label class="form-label">Profil bild</label>
  <input type="file" class="form-control" id="inputGroupFile01">
</div>
  <div class="mb-3">
    <label for="profilebanner" class="form-label">Profil banner</label>
    <input type="file" class="form-control" id="profilebanner">
  </div>
  <button type="submit" class="btn btn-primary">Spara</button>
</form>
      </div>
    </div>
  </div>
</div>
<!---- Javascript filer ----->
<?php echo $wconf->jsfiles; ?>
</body>
</html>
