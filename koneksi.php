<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbnm = "ulangan_zul";
$conn = mysqli_connect ($host, $user, $pass, $dbnm);

if (!$conn) {
die ("Database tidak dapat dibuka");
}