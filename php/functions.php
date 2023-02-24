<?php
require './php/db.php';
$dbcon = dbcon();
$form = form();
$orderby = " ORDER BY `ПІБ`";

function logout(){
    if(isset($_SESSION['username'])){
	    session_destroy();
	    header('Location: index.php');
    }
}
function deleteid($getid){
    $query = "DELETE FROM list WHERE Id = '$getid'";
    mysqli_query($GLOBALS['dbcon'],$query);
    header('Location:index.php');
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
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data); 
  $data = htmlentities($data, ENT_QUOTES);
  return $data;
}
function isget(){
    if(!empty($_GET)){
        if(isset($_GET['logout'])){
            logout();
        }
        if(isset($_GET['deleteid'])){
            $getid = $_GET['deleteid'];
            deleteid($getid);
        }
        if(isset($_GET['order_by']) && isset($_GET['sort'])){
            $GLOBALS['orderby'] = ' order by '.$_GET['order_by'].' '.$_GET['sort'];
        }    
    }else{
        unset($_SESSION['search']);
    }    
}
function ispost(){
    if(!empty($_POST)){
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $sql = mysqli_query($GLOBALS['dbcon'],"SELECT * FROM logins WHERE userName = '$username' AND password = '$password'");
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
        if(isset($_POST['add'])){
            foreach ($GLOBALS['form'] as $outerKey => $outerValue){
                $$outerValue = test_input($_POST["$outerValue"]);
            }
            if(filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/^.{2,100}\.(info|ua|com|org)(\/.*)?/', $web) && preg_match('/^([0-9]{2}[-]){2}[0-9]{2}$/', $phone)){
                foreach ($GLOBALS['form'] as $outerKey => $outerValue){
                    if ($outerKey !== array_key_last($GLOBALS['form'])) {
                        $q_add_title .= "`$outerKey`, ";
                        $q_add_value .= "'".$$outerValue."', ";
                    }
                    if ($outerKey === array_key_last($GLOBALS['form'])) {
                        $q_add_title .= "`$outerKey` ";
                        $q_add_value .= "'".$$outerValue."' ";
                    }
                }
                $query = "INSERT INTO `list` ($q_add_title) VALUES ($q_add_value)";
                echo $query;
                mysqli_query($GLOBALS['dbcon'], $query);
                header('Location: index.php');            
            }else {
                $_SESSION['error'] = 'cont_error';
                header('Location: index.php');
            }
        }
        if(isset($_POST['update']) && isset($_GET['updateid'])){
            foreach ($GLOBALS['form'] as $outerKey => $outerValue){
                ($_POST["$outerValue"] == '')? $$outerValue = test_input($_GET["$outerValue"]): $$outerValue = test_input($_POST["$outerValue"]);
            }
            if(filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/^.{2,100}\.(info|ua|com|org)(\/.*)?/', $web) && preg_match('/^([0-9]{2}[-]){2}[0-9]{2}$/', $phone)){
                $getid = $_GET['updateid'];
                foreach ($GLOBALS['form'] as $outerKey => $outerValue){
                    if ($outerKey !== array_key_last($GLOBALS['form'])) $q_update .= "`$outerKey` = '".$$outerValue."', ";
                    if ($outerKey === array_key_last($GLOBALS['form'])) $q_update .= "`$outerKey` = '".$$outerValue."' ";  
                }
                $query = "UPDATE `list` SET ".$q_update." WHERE `Id` = '$getid'";
                mysqli_query($GLOBALS['dbcon'],$query);
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
}
function issearch(){
    $q_search = "";
    $orderby = $GLOBALS['orderby'];
    if(isset($_SESSION['search'])){
        foreach ($GLOBALS['form'] as $outerKey => $outerValue){
            if ($outerKey !== array_key_last($GLOBALS['form'])) $q_search .= "lower(`$outerKey`) LIKE lower('%".$_SESSION['search']."%') OR ";
            if ($outerKey === array_key_last($GLOBALS['form'])) $q_search .= "lower(`$outerKey`) LIKE lower('%".$_SESSION['search']."%') ";
        }
        echo $q_search;
        $query = "SELECT * FROM list WHERE ".$q_search."  $orderby";
    }else{
        $query = "SELECT * FROM list $orderby";
    }
    return $query;
}

isget();
ispost();
$query = issearch();
$result = mysqli_query($dbcon, $query);
$count = mysqli_num_rows($result);