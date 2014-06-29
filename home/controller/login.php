<?php
    session_start();
    require '../model/user.php';
    require '../../common/kint/Kint.class.php';
    //retrieve the username and password values from the view
    $username = $_POST['username']; 
    $password = md5($_POST['password']);
    $active = 0;
    
    //create obj object of the user
    $obj=new User(); 
    
    //call to the function login
    $result = $obj->login($username,$password);
    // checks whether user exists
    $num=mysql_num_rows($result); 
    
    //if the user is not available redirect to the login page
    if($num==0){
        header("location:../view/index.php?er=4");  
    }
    else{
        
        while($row=mysql_fetch_array($result)){
            $active=$row['active'];
        }

        if($active == 1){
            // if the user is available 
            $value=mysql_fetch_assoc($result);
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['active']=1;
            header("location:../view/index.php");
        }
        else{
            $_SESSION['active']=0;
            header("location:../view/index.php?er=8");
        }
    }
  ?>
    

