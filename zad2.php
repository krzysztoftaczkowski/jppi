<form method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload" name="submit">
</form>

<?php
$plik = $_GET["fileToUpload"]; 
$fp = fopen($plik, 'r'); 

?>