<?php
    session_start();
    require '../model/user.php';
    require '../../common/kint/Kint.class.php';
    //retrieve the username and password values from the view
    $username = $_POST['username']; 
    $password = md5($_POST['password']);
	
    //KINT::dump($username);
    
    $obj=new User(); 
    //create obj object of the user
    
    $result = $obj->login($username,$password);
    //call to the function login
    //KINT::dump($num);
    $num=mysql_num_rows($result); 
    // checks whether user exists
    //KINT::dump($username);
    //KINT::dump($password);
    //if the user is not available redirect to the login page
    if($num==0){
        header("location:../view/index.php?er=4");  
    }
    else{
        // if the user is available 
        $value=mysql_fetch_assoc($result);
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
		$_SESSION['active']=1;
        //KINT::dump($_SESSION['username'], $_SESSION['password']);
        header("Location:../view/index.php");
    }
  ?>
    

