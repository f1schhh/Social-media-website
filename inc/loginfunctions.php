<?php
ob_start();
class Login extends DB{

	private $db;

	public function __construct(){

		$this->db = new DB();

	}

	private $uname;
	private $pswd;

	public function loginUser($username, $password1){

		// Ansluter til databasen
		$this->db->connect();

		$this->uname = $this->db->secret($username);
		$this->pswd = $this->db->secret($password1);



		$checkuser = $this->db->prepare("SELECT password FROM users WHERE username = ? OR email = ?");
		$checkuser->bind_Param("ss", $this->uname,$this->uname);
		$checkuser->execute();
		$checkuser->store_result();

		if($checkuser->num_rows == 1){

			$checkuser->bind_result($password);
			$checkuser->fetch();

			if(password_verify($this->pswd, $password)){

			$_SESSION['useractive'] = $this->uname;

			header("location:home.php");

			}else{
			echo "<font color='red'>Felaktigt inloggningsinformation...</font>";
			echo $password;
			echo $this->pswd;	
			echo password_verify($this->pswd, $password);
			}

		}else{
			echo "<font color='red'>Felaktigt inloggningsinformation...</font>";
		}

	}

	private $fname;
	private $lname;
	private $unamer;
	private $pswd1;
	private $emailer;

	public function createUser($firstname, $lastname, $username, $email, $password1){

		// Ansluter til databasen

		 $this->db->connect();


		$id = null;
		$this->fname = $this->db->secret($firstname);
		$this->lname = $this->db->secret($lastname);
		$this->unamer = $this->db->secret($username);
		$this->emailer = $this->db->secret($email);
		$this->pswd1 = $this->db->secret($password1);
		$regdatum = date("Y-m-d");
		$last_datum = date("Y-m-d H:i:s");
		$profileimg = "";
		$profilebanner = "";
		$about = "";

		$ifuserexist = $this->db->prepare("SELECT * FROM users WHERE username = ? OR email = ?");
		$ifuserexist->bind_Param("ss", $this->unamer,$this->emailer);
		$ifuserexist->execute();
		$ifuserexist->store_result();

		if($ifuserexist->num_rows == 1){

			echo "<font color='red'>Användarnamnet eller emailen är redan registerad...</font>";

		}else{

			$passhash = password_hash($this->pswd1, PASSWORD_DEFAULT);

			$adduser = $this->db->prepare("INSERT INTO users(id,first_name,last_name,username,password,email,about_me,profile_img,profile_header,reg_stamp,last_login) VALUES(?,?,?,?,?,?,?,?,?,?,?)");

			$adduser->bind_Param("issssssssss", $id,$this->fname,$this->lname,$this->unamer,$passhash,$this->emailer,$about,$profileimg,$profilebanner,$regdatum,$last_datum);

			if($adduser->execute()){

				$_SESSION['useractive'] = $this->emailer;

				header("location: home.php");

			}

		}


	}

}
?>