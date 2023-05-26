<?php
$sname= "localhost";
$unmae= "root";
$password = "";
$db_name = "test";
$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}

session_start(); 
if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    }
    else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }
    else{
        $sql = "SELECT * FROM login WHERE userName='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass){
                echo "Logged in!";
                $_SESSION['userName'] = $row['user_name'];
                $_SESSION['id'] = $row['id'];
                header("Location: login.php");
                exit();
            }
            else{
                header("Location: home.php");
                exit();
            }
        }
        else{
            header("Location: index.php?error=Incorect User name or password");
            exit();
        }
    }

}
else{

    hader("Location: index.php");
    exit();
}