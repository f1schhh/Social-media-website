<?php
class User extends DB{
	private $db;

	public function __construct(){

		$this->db = new DB();

	}

	private $username1;
	public $id;
	public $firstname;
	public $lastname; 
	public $username;
	public $profile_img; 

	public function getUserHomePage($username1){

		$this->username = $this->db->secret($username1);
		$getUserInfo = $this->db->prepare("SELECT id, first_name,last_name,username,profile_img FROM users WHERE username = ? OR email = ?");
		$getUserInfo->bind_Param("ss", $this->username, $this->username);
		$getUserInfo->execute();
		$getUserInfo->store_result();

		if($getUserInfo->num_rows == 1){

			$getUserInfo->bind_result($id, $first_name,$last_name,$username,$profile_img);

			while ($getUserInfo->fetch()) {
				$this->id = $id;
				$this->firstname = $first_name;
				$this->lastname = $last_name;
				$this->username = $username;
				$this->profile_img = $profile_img;

			}

		}

	}
	public function getUserId(){
    	return $this->id;
    }

	public function getFirstName(){
    	return $this->firstname;
    }
    public function getLastName(){
		return $this->lastname;
	}
	  public function getUsername(){
    	return $this->username;
    }
    public function getProfileImg(){
    	return $this->profile_img;
	}

	public function getAllPosts(){

		$getPosts = $this->db->prepare("SELECT * FROM posts ORDER BY post_day DESC");
		$getPosts->execute();
		$getPosts->store_result();

		if($getPosts->num_rows == 0){

			echo '<font color="red">Finns inga inlägg...</font>';


		}else{


			$getPosts->bind_result($id,$posted_by,$message,$image_link, $youtube_link, $post_day);

			while ($getPosts->fetch()) {

				$postid = $id;

				$getUserInfoByPost = $this->db->prepare("SELECT id,username,profile_img FROM users WHERE id = ?");
				$getUserInfoByPost->bind_Param("i", $posted_by);
				$getUserInfoByPost->execute();
				$getUserInfoByPost->store_result();

				if($getUserInfoByPost->num_rows == 1){

					$getUserInfoByPost->bind_result($id,$username,$profile_img);

					while ($getUserInfoByPost->fetch()){
						$userid = $id;
						$username = $username;
						$profile_img = $profile_img;
					}


                    $activemsg = str_replace('\n', "\n", $message);
                    $activemsg = str_replace('\r', "\r", $message);
                    $after = str_replace('\n', "", $activemsg);

                    $now = nl2br($after);

                    $activedate = $this->converthetime($post_day);
					echo '

			    <div class="card" id="postcard'.$postid.'">
                   <div class="card-body">
                    <a href="profile.php?id='.$userid.'"><img src="'.$profile_img.'" alt="Post" class="rounded-circle" style="float:left;" width="32" height="32"></a> <p class="fst-italic fw-bold text-sm-start ml-4">@'.$username.' - '.$activedate.'</p>
                     <p class="text-start">'.$now.' ';
                     if($image_link == "none"){

                     }else{
                     	echo '<br> <br><a href="uploads/'.$image_link.'" data-lightbox="'.$image_link.'"><img src="uploads/'.$image_link.'" class="img-fluid n" style="width:50%;" alt="PostImg"></a> ';
                     }

                     if($youtube_link == "none"){

                     }else{
                     	echo '<div class="embed-responsive embed-responsive-16by9">  
                                <iframe class="embed-responsive-item" src="'.$youtube_link.'" allowfullscreen></iframe>
                              </div>';
                     }

                     echo '
                            </p>
                     <div class="one-divider"></div>
      <div class="one-vr"></div>

                  ';

                  $getComments = $this->db->prepare("SELECT posted_by,message,post_day FROM comments WHERE post_id = ? ");
                  $getComments->bind_Param("i", $postid);
                  $getComments->execute();
                  $getComments->store_result();

                  if($getComments->num_rows == 0){

                  }else{
                  	$getComments->bind_Result($posted_by, $message, $post_day);

                  	while($getComments->fetch()){
                  		$userpost = $posted_by;
                  		$commentmsg = $message;
                  		$daypost = $post_day;

                  		$activecommentmsg = str_replace('\n', "\n", $commentmsg);
                        $activecommentmsg = str_replace('\r', "\r", $commentmsg);
                        $aftermsg = str_replace('\n', "", $activecommentmsg);

                        $nowmsg = nl2br($aftermsg);

                  		$commentUserInfo = $this->getUserInfoById($userpost);
                  		$converts = $this->converthetime($daypost);

                  		echo '

                  		 <div class="mb-6">
        <a href="profile.php?id='.$commentUserInfo['id'].'"><img src="'.$commentUserInfo['profile_img'].'" alt="mdo" class="rounded-circle" style="float:left;" width="32" height="32"></a> <p class="fst-italic fw-bold text-sm-start">@'.$commentUserInfo['username'].' - '.$converts.'</p>
        <p class="text-comment">'.$nowmsg.'</p>
        <button class="btn btn-primary btn-sm" style="float:right;" value="Svara">Svara</button>
      </div>
      <div class="one-vr"></div>
                  		';
                  	}
                  }


                  echo '
                  <div class="mb-6">
                     <form action="home.php?#postcard'.$postid.'" method="POST">
                    <label for="exampleFormControlTextarea1" class="form-label"></label>
                    <input type="text" hidden value="'.$postid.'" name="postid">
                    <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="1" cols="2" name="commentmsg" placeholder="Kommentera..."></textarea>
                    <input type="submit" class="btn btn-primary btn-sm" style="margin-top: 5px;" name="commentbtn" value="Kommentera" />
                    </form>
                  </div>
                </div>
               </div>
               <br>

				';



				}else{
					
				}

			}

		}

	}

	private $userid;
	private $message; 
	private $image_link;
	private $youtube_link;


	public function AddPost($userid, $message, $image_link, $youtube_link){

		$this->userid = $this->db->secret($userid);
		$this->message = $this->db->secret($message);
		$this->image_link = $this->db->secret($image_link);
		$this->youtube_link = $this->db->secret($youtube_link);
		$id = null;
		$post_day = new DateTime();
        $post_day = $post_day->format('Y-m-d H:i:s');

		if($this->image_link == null){
			$this->image_link = "none";
		}
		if($this->youtube_link == null){
			$embed_link = "none";
		}else{

            if (strpos($this->youtube_link, 'youtube.com') !== false) {
               preg_match('/v=([a-zA-Z0-9]+)/', $this->youtube_link, $matches);
                $link = $matches[1];

                // Create the embed link with the video ID
                $embed_link = "https://www.youtube.com/embed/$link";
            } else {
               $embed_link = "none";
            }
		}


		$addPost = $this->db->prepare("INSERT INTO posts (id,posted_by,message,image_link,youtube_link,post_day) VALUES(?,?,?,?,?,?)");
		$addPost->bind_Param("iissss", $id,$this->userid,$this->message,$this->image_link,$embed_link,$post_day);

		if($addPost->execute()){

		}else{
			echo "FEL!";
		}

	}
	private $commentuserid;
	private $commentmsg; 
	private $postidc;


	public function AddComment($userid, $postid, $commentmsg){

		$this->commentuserid = $this->db->secret($userid);
		$this->commentmsg = $this->db->secret($commentmsg);
		$this->postidc = $this->db->secret($postid);
		$id = null;
		$post_day = new DateTime();
        $post_day = $post_day->format('Y-m-d H:i:s');


		$AddComment = $this->db->prepare("INSERT INTO comments (id,post_id,posted_by,message,post_day) VALUES(?,?,?,?,?)");
		$AddComment->bind_Param("iiiss", $id,$this->postidc,$this->commentuserid,$this->commentmsg,$post_day);

		if($AddComment->execute()){

		}else{
			echo "FEL!";
		}

	}

private function getUserInfoById($userId) {
    $getUserInfo = $this->db->prepare("SELECT id, username, profile_img FROM users WHERE id = ?");
    $getUserInfo->bind_Param("i", $userId);
    $getUserInfo->execute();
    $getUserInfo->store_result();

    if ($getUserInfo->num_rows == 1) {
        $getUserInfo->bind_result($id, $username, $profile_img);
        $getUserInfo->fetch();
        return ['id' => $id, 'username' => $username, 'profile_img' => $profile_img];
    } else {
        return null;
    }
}

private function converthetime($thetime){

    $date = new DateTime($thetime);
    $now = new DateTime();

    $interval = $now->diff($date);

    $activedate = "";

    if ($interval->days > 6) {
        $activedate = $date->format('Y-m-d H:i');
    } elseif ($interval->days > 0) {
        $activedate = $interval->format('%a dagar sedan');
    } elseif ($interval->h > 0) {
        $activedate = $interval->format('%h timmar sedan');
    } elseif ($interval->i > 0) {
        $activedate = $interval->format('%i minuter sedan');
    } else {
        $activedate = 'just nu';
    }

    return $activedate;
}



}
?>