<?php
$message = "Godmorgon grabs :D \r\n\r\nHej!";
if(strpos($message, "\r\n\r\n") !== false){

                    	$activemsg = nl2br($message);
                    	echo $activemsg;

                    }else{
                    	$activemsg = $message;
                    	echo $activemsg;
                    }

?>