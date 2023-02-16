<?php
function logout(){
    if(isset($_SESSION['username'])){
	    session_destroy();
	    header('Location: index.php');
    }
}

function sortorder($fieldname){
    $sorturl = "?order_by=".$fieldname."&sort=";
    $sorttype = "asc";
    if(isset($_GET['order_by']) && $_GET['order_by'] == $fieldname){
        if(isset($_GET['sort']) && $_GET['sort'] == "asc"){
            $sorttype = "desc";
        }
    }
    $sorturl .= $sorttype;
    return $sorturl;
}
function delete_contact($getid){
    include './php/db.php';

    $getid = $_GET['deleteid'];
    $query = "DELETE FROM list WHERE Id = '$getid'";
    mysqli_query($dbcon,$query);
    header('Location:index.php');
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);  
  return $data;
}

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = mysqli_query($dbcon,"SELECT * FROM logins WHERE userName = '$username' AND password = '$password'");

    if(mysqli_num_rows($sql) == 1) {
        $member = mysqli_fetch_assoc($sql);
        $_SESSION['username'] = $username;
        $_SESSION['contact_id'] = $member['userId'];
        header('Location: index.php');
        }else{
            $_SESSION['error'] = 'log_error';
            header('Location:index.php');
        }
}

if(isset($_GET['logout'])){
    logout();
}

if(isset($_GET['deleteid'])){
    delete_contact($_GET['deleteid']);
}


if(!empty($_POST)){
    if(isset($_POST['add'])){
        $school =  test_input($_POST['school']);
        $address = test_input($_POST['address']);
        $email = test_input($_POST['email']);
        $web = test_input($_POST["web"]);
        $name = test_input($_POST['name']);
        $role = test_input($_POST['role']);
        $phone = test_input($_POST['phone']);
        if(filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/^.{2,100}\.(info|ua|com|org)(\/.*)?/', $web) && preg_match('/^([0-9]{2}[-]){2}[0-9]{2}$/', $phone)){
        $sql_ins = "INSERT INTO `list` (`Заклад`, `Адреса`, `Email`, `Веб-сторінка`, `ПІБ`, `Посада`, `Телефон`)
        VALUES ('$school',
                '$address',  
                '$email',
                '$web',
                '$name',
                '$role',
                '$phone')";
        mysqli_query($dbcon, $sql_ins);
        header('Location: index.php');            
        }else {
            $_SESSION['error'] = 'cont_error';
            header('Location: index.php');
        }
    }
    if(isset($_POST['update']) && isset($_GET['updateid'])){
        // (Condition)?(thing's to do if condition true):(thing's to do if condition false);
        ($_POST['school'] == '')? $school = test_input($_GET['school']): $school = test_input($_POST['school']);
        ($_POST['address'] == '')? $address = test_input($_GET['address']): $address = test_input($_POST['address']);
        ($_POST['email'] == '')? $email = test_input($_GET['email']): $email = test_input($_POST['email']);
        ($_POST['web'] == '')? $web = test_input($_GET['web']): $web = test_input($_POST['web']);
        ($_POST['name'] == '')? $name = test_input($_GET['name']): $name = test_input($_POST['name']);
        ($_POST['role'] == '')? $role = test_input($_GET['role']): $role = test_input($_POST['role']);
        ($_POST['phone'] == '')? $phone = test_input($_GET['phone']): $phone = test_input($_POST['phone']);
        if(filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/^.{2,100}\.(info|ua|com|org)(\/.*)?/', $web) && preg_match('/^([0-9]{2}[-]){2}[0-9]{2}$/', $phone)){
            $getid = $_GET['updateid'];
            $query = "UPDATE `list` SET `Заклад` = '$school', `Адреса` = '$address', `Email` = '$email', `Веб-сторінка` = '$web', `ПІБ` = '$name', `Посада` = '$role', `Телефон` = '$phone' WHERE `Id` = '$getid'";
            mysqli_query($dbcon,$query);
            header('Location: index.php');
        }else {
            $_SESSION['error'] = 'cont_error';
            header('Location: index.php');
        }
        }
    
    if(isset($_POST['find'])){
        $_SESSION['search'] =  $_POST['find'];
    }
}

$orderby = " ORDER BY `ПІБ`";
if(isset($_GET['order_by']) && isset($_GET['sort'])){
    $orderby = ' order by '.$_GET['order_by'].' '.$_GET['sort'];
}else{
    unset($_SESSION['search']);
}

$search = $_SESSION['search'];

if(isset($_POST['search']) || isset($_SESSION['search'])){
    $query = "SELECT * FROM list WHERE 
        lower(`Заклад`) LIKE lower('%$search%') OR 
        lower(`Адреса`) LIKE lower('%$search%') OR 
        lower(`Email`) LIKE lower('%$search%') OR 
        lower(`Веб-сторінка`) LIKE lower('%$search%') OR 
        lower(`ПІБ`) LIKE lower('%$search%') OR 
        lower(`Посада`) LIKE lower('%$search%') OR
        lower(`Телефон`) LIKE lower('%$search%')
        $orderby ";
}else{
    $query = "SELECT * FROM list $orderby";
}

$result = mysqli_query($dbcon,$query);
$count = mysqli_num_rows($result);