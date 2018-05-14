<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <form action=<?php echo base_url("Welcome/tambah_user"); ?> method="post">
    <tr>
      <td>Username <input type="text" name="username"></td>
    </tr>
    <tr>
      <td>Fullname <input type="text" name="fullname"></td>
    </tr>
    <tr>
      <td>Password <input type="password" name="pass"></td>
    </tr>
    <tr>
      <td><input type="hidden" name="level" value="2"></td>
    </tr>
  
  <button type="submit" name="kirim">Kirim</button>
  </form>
</body>
</html>