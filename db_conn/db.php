
<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2/1/2018
 * Time: 9:47 AM
 */
//session_start();
//connection to database

session_start();
$con = mysqli_connect('localhost', 'root', '', 'online_shopping');
if(!$con){
    die("connection fail:".mysqli_connect_error());
}
//echo 'ok';

