<h1>
<?php
    //var_dump($_GET);
    //dei;
    $username = $_GET['userName'];
    $pwd = $_GET['password'];
    $region = $_GET['region'];
    
    //echo 'Your name is ',$username,
    //', and pass is ', $pwd;
    
    if($username == 'Saheer Babu' && $pwd == 'admin123'){
        echo 'Login Success';
        echo 'Your Name is ', $username;
        echo 'Passwor is ', $pwd;
        echo 'Region is ', $region;
    }else{
        echo 'login Feliled';
    };
    ?>
     </h1>