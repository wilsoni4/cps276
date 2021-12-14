<?php

$path = "index.php?page=addContact";

$nav=<<<HTML
    
    <nav>
        <ul>
            <li><a href="index.php?page=login">Login</a></li>
            <li><a href="index.php?page=addContact">Add Contacts</a></li>
            <li><a href="index.php?page=deleteContact">Delete contact(s)</a></li>
            <li><a href="index.php?page=addAdmin">Add Admin</a></li>
            <li><a href="index.php?page=deleteAdmin">Delete Admin</a></li>
        </ul>
    </nav>
HTML;

if(isset($_GET)){
    if($_GET['page'] === "login"){
        require_once('pages/login.php');
        $result = init();
    }

    else if($_GET['page'] === "addContact"){
        require_once('pages/addContact.php');
        $result = init();
    }
    
    else if($_GET['page'] === "deleteContact"){
        require_once('pages/deleteContact.php');
        $result = init();
    }


    else if($_GET['page'] === "addAdmin"){
        require_once('pages/addAdmin.php');
        $result = init();
    }

    else if($_GET['page'] === "deleteAdmin"){
        require_once('pages/deleteAdmin.php');
        $result = init();
    }

    else {
        header('location: '.$path);
    }
}

else {
    header('location: '.$path);
}



?>