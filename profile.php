<?php 

session_start();

if(isset($_SESSION['name']) 
&& isset($_SESSION['email'])
&& isset($_SESSION['password'])
&& isset($_SESSION['address'])
&& isset($_SESSION['url']) ){


 echo  $_SESSION['name'].'<br>';
 echo  $_SESSION['email'].'<br>';
 echo  $_SESSION['password'].'<br>';
 echo  $_SESSION['address'].'<br>';
 echo  $_SESSION['url'].'<br>';

}else{
    echo 'Session Deleted <br>';
}




?>