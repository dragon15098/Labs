<!DOCTYPE html>
<html>

<body>

  <form action="./Page/upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" accept=".png, .jpg, .jpeg" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
  </form>
<a href="/index.php?file=./Page/about.php">About us</a>
</body>

</html>

<?php
include($_GET['file']);
?>