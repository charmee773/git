<?php include('partials/menu.php'); ?>

<div class = "main-content">
    <div class="wrapper"></div>
    <h1>Add Admin</h1>
</br>
    <form action="" method = "POST" ></form>
    <table class ="tbl-30">
        <tr>
            <td>Full name:</td>
            <td><input type ="text" name="full_name" placeholder = "Enter your name"></td>
        </tr>
         <tr>
            <td>Username:</td>
            <td><input type ="text" name="Username" placeholder = "Your username"></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type ="password" name="password" placeholder = "Your Password"></td>
        </tr>
        <tr>
            <td colspan ="2">
                <input type ="submit" name ="submit" value ="Add admin" class = "btn-secondary">
            </td>
        </tr>
    </table>
    </div


<?php include('partials/footer.php'); ?>
<?php 
 if(isset($_POST['submit']))
  {
    $full_name = $POST['full_name'];
    $username = $POST['username'];
    $password=md5( $POST['password']);

    $sql = "INSERT INTO tbl_admin SET
    full_name= '$full_name',
    username= '$username',
    password= '$password'
    ";
         
      $res = mysqli_query($conn, $sql) or die(mysqli_error());

  }
  ?>
