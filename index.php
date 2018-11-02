<?php

class User {
    var $username; 
    var $password; 
    function set($new_username,$new_password) { 
        $this->username = $new_username;  
        $this->password = $new_password;  
     }

       function getname() {
        
        return $this->username;
    }
    function getpass() {
        
        return $this->password;
    }
} 
$userrr = new User();
$userrr -> set('admin','admin');

if(isset($_GET['check']))
{
   if($_POST['username']== $userrr -> getname() && $_POST['password']== $userrr -> getpass()){
  
    echo "Tebrikler" ;
   }
   else{
       echo "username ve ya parol yalnisdir" ;
   }
}

?>
<!DOCTYPE html>
<html>
<head>
<head>
<body>
<?php

?>
<form action="index.php?check" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <Br>
    <Br>
   <input type="submit"  value="Enter">
</form>

</body>
</html>
