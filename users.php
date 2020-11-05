<?php
session_start();
class users
{
public $host="localhost";
public $username="root";
public $pass="";
public $db_name="md5";
public $conn;
public $data;
public $cat;
public $qus;
public function __construct()
{
$this->conn=new mysqli($this->host,$this->username,$this->pass,$this->db_name);
if($this->conn->connect_errno)
{
die("Database connection failed ".$this->conn->connect_errno);
}
}
public function sign($data)
{
$this->conn->query($data);
return true;
}
public function signin($email,$password)
{
$query=$this->conn->query("select eid,pass from sign_up where eid='$email' and pass='$password'");
$query->fetch_array(MYSQLI_ASSOC);
if($query->num_rows>0)
{
$_SESSION['email']=$email;
return true;
}
else
return false;
}
public function pass($email)
{
$query=$this->conn->query("select pass from sign_up where eid='$email'");
while($row=$query->fetch_array(MYSQLI_ASSOC))
return $row['pass'];
}
public function url($url)
{
header("location:".$url);
}
}
new users;
?>
