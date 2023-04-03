<?php require('inc/main.inc.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
      <title><?php echo $wconf->websitename; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="css/mainstyle.css" rel="stylesheet" />
      <!-- Dark mode styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/darkly/bootstrap.min.css">
  </head>
  <body class="bg">

  	<!------ SVGS------->

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="bootstrap" viewBox="0 0 118 94">
    <title>Bootstrap</title>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z"></path>
  </symbol>
  <symbol id="facebook" viewBox="0 0 16 16">
    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
  </symbol>
  <symbol id="instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
  </symbol>
  <symbol id="twitter" viewBox="0 0 16 16">
    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
  </symbol>
</svg>
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
<br />

<!-------- FIRST CONTAINER ------>
<div class="container-fluid">
  <div class="row">
    <div class="col-2">
    	<div class="card">
      	<div class="card-body">
      <img src="https://vignette.wikia.nocookie.net/great-characters/images/8/8a/8481862A-EC6E-41F8-A573-CCA2C5BC1B80.png" alt="mdo" class="rounded-circle" style="float:left;" width="48" height="48"> <p class="fs-5" style="padding-top: 10px; padding-right: 10px;">Yoshi Yoshisson</p>
</div>
<div class="list-group list-group-flush">
  <a href="#" class="list-group-item list-group-item-action">Inkorg</a>
  <a href="#" class="list-group-item list-group-item-action">Inställningar</a>
  <a href="profile.php" class="list-group-item list-group-item-action"> Min profil</a>
  <a href="#" class="list-group-item list-group-item-action">Mina grupper</a>
</div>


</div>
    </div>
    <div class="col-6 content-center">
    <button class="btn btn-primary btn-sm" style="float:right;">Posta ett inlägg</button>
      <h4>Inlägg</h4>
      <div class="card">
      	<div class="card-body">
      <img src="https://vignette.wikia.nocookie.net/great-characters/images/8/8a/8481862A-EC6E-41F8-A573-CCA2C5BC1B80.png" alt="mdo" class="rounded-circle" style="float:left;" width="32" height="32"> <p class="fst-italic fw-bold text-sm-start">Kungen JOhansson - 24 Januari 19:28</p>

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
<div class="card">
      	<div class="card-body">
      <img src="https://vignette.wikia.nocookie.net/great-characters/images/8/8a/8481862A-EC6E-41F8-A573-CCA2C5BC1B80.png" alt="mdo" class="rounded-circle" style="float:left;" width="32" height="32"> <p class="fst-italic fw-bold text-sm-start">Ichibans bajstoa - 24 Januari 19:28</p>

      <p class="text-start">
      	Är du helt ichad?
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
      <img src="https://vignette.wikia.nocookie.net/great-characters/images/8/8a/8481862A-EC6E-41F8-A573-CCA2C5BC1B80.png" alt="mdo" class="rounded-circle" style="float:left;" width="32" height="32"> <p class="fst-italic fw-bold text-sm-start">Ichibans bajstoa - 24 Januari 19:28</p>

      <p class="text-start">

        Kolla detta lol <br />
        <img src="https://media4.giphy.com/media/11z1Exkm83QWt2/giphy.gif?cid=ecf05e47n9xkxwizsmbw2pthpwn55v38nv7au1ov8uobni87&rid=giphy.gif&ct=g" class="img-fluid n" /> 
      </p>

      <div class="mb-6">
      <label for="exampleFormControlTextarea1" class="form-label"></label>
       <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="1" cols="2" placeholder="Kommentera..."></textarea>
       <input type="submit" class="btn btn-primary btn-sm" style="margin-top: 5px;" value="Kommentera" />
   </p>
</div>
</div>
</div>
<div class="one-vr"></div>
<!----- Post 4 end ---------->

<!--------- Post 5 start -------> 
<div class="card">
        <div class="card-body">
      <img src="https://lh3.googleusercontent.com/proxy/N0F6XUjCOGlaGH6_fnWIP8EQN4R_tlklwQFYd03zY3IuUS6y9pe-pEO75tyXSsQximo8hlsFU_nIv6K2CixoG2wPYqYWoy3D7c6fubIv7aPpx-Km1X2w3Ua1OZgJWuEVk-mv22wqgMm1CKwQkYmlS5bNanBVFGaJ=w1200-h630-p-k-no-nu" alt="mdo" class="rounded-circle" style="float:left;" width="32" height="32"> <p class="fst-italic fw-bold text-sm-start">Adam Fischer - 24 Januari 19:28</p>

      <p class="text-start">

        Vad tror ni om matchen på lördag mot Crystal palace? Själv ska jag ta mig 2 bärs och kolla med några kompisar och hoppas självklart på en go jävla vinst. Men först blir det att kolla Manchester City mot Liverpool <br />
        <br />
        <img src="https://media0.giphy.com/media/DGBhsKsgz6UUUVaHQR/giphy.gif?cid=ecf05e4738p33obn71pw0fpoappl0nv31i63awwqtsfm6qav&rid=giphy.gif&ct=g" class="img-fluid n" /> 
      </p>
      <div class="one-divider"></div>
      <div class="one-vr"></div>
      <!---Kommentar---->
      <div class="mb-6">
        <img src="https://lh3.googleusercontent.com/proxy/N0F6XUjCOGlaGH6_fnWIP8EQN4R_tlklwQFYd03zY3IuUS6y9pe-pEO75tyXSsQximo8hlsFU_nIv6K2CixoG2wPYqYWoy3D7c6fubIv7aPpx-Km1X2w3Ua1OZgJWuEVk-mv22wqgMm1CKwQkYmlS5bNanBVFGaJ=w1200-h630-p-k-no-nu" alt="mdo" class="rounded-circle" style="float:left;" width="32" height="32"> <p class="fst-italic fw-bold text-sm-start">Adam Fischer - 24 Januari 19:29</p>
        <p class="text-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <button class="btn btn-primary btn-sm" style="float:right;" value="Svara">Svara</button>
      </div>
      <div class="one-vr"></div>
      <!-- Slut på kommentar 1 ----->

      <!---Kommentar---->
      <div class="mb-6">
        <img src="https://lh3.googleusercontent.com/proxy/N0F6XUjCOGlaGH6_fnWIP8EQN4R_tlklwQFYd03zY3IuUS6y9pe-pEO75tyXSsQximo8hlsFU_nIv6K2CixoG2wPYqYWoy3D7c6fubIv7aPpx-Km1X2w3Ua1OZgJWuEVk-mv22wqgMm1CKwQkYmlS5bNanBVFGaJ=w1200-h630-p-k-no-nu" alt="mdo" class="rounded-circle" style="float:left;" width="32" height="32"> <p class="fst-italic fw-bold text-sm-start">Adam Fischer - 24 Januari 19:29</p>
        <p class="text-comment">xd</p>
        
      </div>
      <div class="mb-6" style="margin-left: 20px;">
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fd.newsweek.com%2Fen%2Ffull%2F458491%2Fjamie-vardy.jpg&f=1&nofb=1&ipt=a21bbd4f546ef0f767f2dacce1bf49c42b035f862d7e49d463af1e900d38130f&ipo=images" alt="mdo" class="rounded-circle" style="float:left;" width="32" height="32"> <p class="fst-italic fw-bold text-sm-start">Adam Fischer - 24 Januari 19:29</p>
        <p class="text-comment">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      
      <!-- Slut på kommentar 1 ----->

      <div class="mb-6">
      <label for="exampleFormControlTextarea1" class="form-label"></label>
       <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="1" cols="2" placeholder="Kommentera..."></textarea>
       <input type="submit" class="btn btn-primary btn-sm" style="margin-top: 5px;" value="Kommentera" />
   </p>
</div>
</div>
</div>
<!----- Post 5 end ---------->

</div>
<!--------Third sections --------->
 <div class="col-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Live matcher just nu</h5>
        <hr />
      <p class="card-text">Manchester City vs Liverpool <strong><font color="green">2</font>-<font color="red">1</font></strong></p>
      <p class="card-text">Number of posts: <strong>20</strong></p>
      <p class="card-text">Number of comments: <strong>50</strong></p>
      <p class="card-text">Number of Groups: <strong>50</strong></p>
     </div>
  </div>
</div>
<!----------End of third section------->
<div class="one-vr"></div>
<div class="one-divider"></div>

<!-----------FOOTER----------->
<div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
      </a>
      <span class="mb-3 mb-md-0 text-muted">© 2022 Company, Inc</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
    </ul>
  </footer>
</div>
    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
