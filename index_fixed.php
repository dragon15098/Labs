<!DOCTYPE html>
<html>

<body>

    <form action="./upload_fixed.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" accept=".png, .jpg, .jpeg" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>
    <a href="/index_fixed.php?file=/about.php">About us</a>
    <br>
</body>

</html>

<?php
$f = $_GET['file'];
$location = './Page/' . $f . '.php';
$whiteList = array('./Page/about.php');
if (in_array($location, $whiteList)) {
    include($location);
} else {
    echo ('Not this time');
}
?>