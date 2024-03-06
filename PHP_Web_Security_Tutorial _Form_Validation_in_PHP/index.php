<?php

  if(isset( $_POST['username'])){
    // ay function kaj hocca sokol search bar maje kno link dila ta ar kaj korbe na.ata kaj hocca ja kno text ka normal text hisabe convat kora.
      $data = htmlspecialchars($_POST['username']);
// extra space newline etc removed kore.
       $data = trim($data);

      //  ay functiion dara sokol slashes removed kora hoya thaki.
     echo stripslashes($data);
  }

?>
<!-- GET method dila url data gula show kore, ar POST method dila url data gula show kore na -->

<!--$_SERVER dara action kota hoyasa -->

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">

Username:<br>
<input type="text" name="username"><br><br>
Password:<br>
<input type="password" name="password"><br><br>

<input type="submit" value="submit">

</form>