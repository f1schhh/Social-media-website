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
<div class="one-vr"></div>
<!-------- FIRST CONTAINER ------>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-2 biguserbox">
    	<div class="card">
      	<div class="card-body userinfobox">
      <img src="https://vignette.wikia.nocookie.net/great-characters/images/8/8a/8481862A-EC6E-41F8-A573-CCA2C5BC1B80.png" class="rounded-circle homepagepimg img-fluid"> <p class="fs-6 homepusername"> Adam Fischer<br />
        @adamfischeer
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
    <div class="col-md-10 content-center">
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#postmodal" onclick="$('#postmodal').modal('show');" style="float:right;">Posta ett inlägg</button>
      <h4>Inlägg</h4>
      <div class="card">
      	<div class="card-body">
      <img src="https://vignette.wikia.nocookie.net/great-characters/images/8/8a/8481862A-EC6E-41F8-A573-CCA2C5BC1B80.png" alt="mdo" class="rounded-circle" style="float:left;" width="32" height="32"> <p class="fst-italic fw-bold text-sm-start">Kungen JOhansson - 16 April 19:28</p>

      <p class="text-start">    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      <div class="mb-6">
      <label for="exampleFormControlTextarea1" class="form-label"></label>
       <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="1" cols="2" placeholder="Kommentera..."></textarea>
       <input type="submit" class="btn btn-primary btn-sm" style="margin-top: 5px;" value="Kommentera" />
      </div>
  </div>
</div>
<br />
<div class="card">
      	<div class="card-body">
      <img src="https://vignette.wikia.nocookie.net/great-characters/images/8/8a/8481862A-EC6E-41F8-A573-CCA2C5BC1B80.png" alt="mdo" class="rounded-circle" style="float:left;" width="32" height="32"> <p class="fst-italic fw-bold text-sm-start">@king</p>
      <p class="text-start">kapapapow</p>
      <div class="embed-responsive embed-responsive-16by9">  
          <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/D-UmfqFjpl0" allowfullscreen></iframe>
      </div>
      <div class="mb-6">
      <label for="exampleFormControlTextarea1" class="form-label"></label>
       <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="1" cols="2" placeholder="Kommentera..."></textarea>
       <input type="submit" class="btn btn-primary btn-sm" style="margin-top: 5px;" value="Kommentera" />
      </div>
  </div>
</div>
<br />

<!----- Post 3 -------------> 
<div class="card" style="width:auto;">
      	<div class="card-body">
      <img src="https://vignette.wikia.nocookie.net/great-characters/images/8/8a/8481862A-EC6E-41F8-A573-CCA2C5BC1B80.png" alt="mdo" class="rounded-circle" style="float:left;" width="32" height="32"> <p class="fst-italic fw-bold text-sm-start">aa - 16 April 19:28</p>

      <p class="text-start">
      	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      	<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Ja
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
  <label class="form-check-label" for="exampleRadios3">
    Nej
  </label>
</div>
<input type="submit" class="btn btn-primary btn-sm" style="margin-top: 5px;" value="Svara" />

  <div class="mb-6">
      <label for="exampleFormControlTextarea1" class="form-label"></label>
       <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="1" cols="2" placeholder="Kommentera..."></textarea>
       <input type="submit" class="btn btn-primary btn-sm" style="margin-top: 5px;" value="Kommentera" />
   </p>
</div>

      </div>
</div>

<div class="one-vr"></div>
  

<!----- Post 4 -------------> 
<div class="card">
        <div class="card-body">
      <img src="https://vignette.wikia.nocookie.net/great-characters/images/8/8a/8481862A-EC6E-41F8-A573-CCA2C5BC1B80.png" alt="mdo" class="rounded-circle" style="float:left;" width="32" height="32"> <p class="fst-italic fw-bold text-sm-start">Hej hej - 16 April 19:28</p>

      <p class="text-start">

        KLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br />
        <img src="https://media4.giphy.com/media/11z1Exkm83QWt2/giphy.gif?cid=ecf05e47n9xkxwizsmbw2pthpwn55v38nv7au1ov8uobni87&rid=giphy.gif&ct=g" class="img-fluid n" /> 
      </p>

      <div class="mb-6">
      <label for="example" class="form-label"></label>
       <textarea class="form-control form-control-sm" id="example" rows="1" cols="2" placeholder="Kommentera..."></textarea>
       <input type="submit" class="btn btn-primary btn-sm" style="margin-top: 5px;" value="Kommentera" />
</div>
</div>
</div>
<div class="one-vr"></div>
<!----- Post 4 end ---------->

<!--------- Post 5 start -------> 
<div class="card">
        <div class="card-body">
      <img src="https://lh3.googleusercontent.com/proxy/N0F6XUjCOGlaGH6_fnWIP8EQN4R_tlklwQFYd03zY3IuUS6y9pe-pEO75tyXSsQximo8hlsFU_nIv6K2CixoG2wPYqYWoy3D7c6fubIv7aPpx-Km1X2w3Ua1OZgJWuEVk-mv22wqgMm1CKwQkYmlS5bNanBVFGaJ=w1200-h630-p-k-no-nu" alt="mdo" class="rounded-circle" style="float:left;" width="32" height="32"> <p class="fst-italic fw-bold text-sm-start">Adam Fischer - 16 April 19:28</p>

      <p class="text-start">

       Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br />
        <br />
        <img src="https://media0.giphy.com/media/DGBhsKsgz6UUUVaHQR/giphy.gif?cid=ecf05e4738p33obn71pw0fpoappl0nv31i63awwqtsfm6qav&rid=giphy.gif&ct=g" class="img-fluid n" /> 
      </p>
      <div class="one-divider"></div>
      <div class="one-vr"></div>
      <!---Kommentar---->
      <div class="mb-6">
        <img src="https://lh3.googleusercontent.com/proxy/N0F6XUjCOGlaGH6_fnWIP8EQN4R_tlklwQFYd03zY3IuUS6y9pe-pEO75tyXSsQximo8hlsFU_nIv6K2CixoG2wPYqYWoy3D7c6fubIv7aPpx-Km1X2w3Ua1OZgJWuEVk-mv22wqgMm1CKwQkYmlS5bNanBVFGaJ=w1200-h630-p-k-no-nu" alt="mdo" class="rounded-circle" style="float:left;" width="32" height="32"> <p class="fst-italic fw-bold text-sm-start">Adam Fischer - 16 April 19:29</p>
        <p class="text-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button class="btn btn-primary btn-sm" style="float:right;" value="Svara">Svara</button>
      </div>
      <div class="one-vr"></div>
      <!-- Slut på kommentar 1 ----->

      <!---Kommentar---->
      <div class="mb-6">
        <img src="https://lh3.googleusercontent.com/proxy/N0F6XUjCOGlaGH6_fnWIP8EQN4R_tlklwQFYd03zY3IuUS6y9pe-pEO75tyXSsQximo8hlsFU_nIv6K2CixoG2wPYqYWoy3D7c6fubIv7aPpx-Km1X2w3Ua1OZgJWuEVk-mv22wqgMm1CKwQkYmlS5bNanBVFGaJ=w1200-h630-p-k-no-nu" alt="mdo" class="rounded-circle" style="float:left;" width="32" height="32"> <p class="fst-italic fw-bold text-sm-start">Adam Fischer - 16 April 19:29</p>
        <p class="text-comment">xd</p>
        
      </div>
      <div class="mb-6" style="margin-left: 20px;">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fd.newsweek.com%2Fen%2Ffull%2F458491%2Fjamie-vardy.jpg&f=1&nofb=1&ipt=a21bbd4f546ef0f767f2dacce1bf49c42b035f862d7e49d463af1e900d38130f&ipo=images" alt="mdo" class="rounded-circle" style="float:left;" width="32" height="32"> <p class="fst-italic fw-bold text-sm-start">Adam Fischer - 16 April 19:29</p>
        <p class="text-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      
      <!-- Slut på kommentar 1 ----->

      <div class="mb-6">
      <label for="exampleFormControlTextarea1" class="form-label"></label>
       <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="1" cols="2" placeholder="Kommentera..."></textarea>
       <input type="submit" class="btn btn-primary btn-sm" style="margin-top: 5px;" value="Kommentera" />
</div>
</div>
</div>
<!----- Post 5 end ---------->

</div>
<div class="one-vr"></div>
<!-----------FOOTER----------->
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top mt-auto">
    <div class="col-md-4 d-flex align-items-center">
      <span class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
         <img src="img/icons/favicon-32x32.png" />
      </span>
      <span class="mb-3 mb-md-0 text-muted">© <?php echo $wconf->websitename; ?> </span>
    </div>
  </footer>
<!-----------End of FOOTER----------->

<!----Modals---->

<!---- Post ------>
<div class="modal fade" tabindex="-1" id="postmodal" >
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Posta ett inlägg</h5>
        <button type="button" class="btn-close bg-light color-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
  <div class="mb-3">
    <label for="textforpost" class="form-label">Text*</label>
    <textarea class="form-control form-control-sm" id="posttext" rows="13" cols="3" placeholder="Text..."></textarea>
  </div>
  <div class="mb-3">
  <label class="form-label">Bild/GIF(Alternativt)</label>
  <input type="file" class="form-control" id="inputGroupFile01">
</div>
  <div class="mb-3">
    <label for="Youtubevideo" class="form-label">Youtube video(alternativt)</label>
    <input type="text" class="form-control" id="Youtubevideo" placeholder="Länk...">
  </div>
  <button type="submit" class="btn btn-primary">Lägg upp</button>
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
    <label for="Youtubevideo" class="form-label">Profil banner</label>
    <input type="file" class="form-control" id="inputGroupFile01">
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
