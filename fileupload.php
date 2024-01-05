<?php
if(isset($_POST['submit']))
{
    foreach($_FILES['image']['tmp_name'] as $key => $value) {
        echo $filename=$_FILEs['image']['name'][$key];
        $filename_tmp=$_FILEs['image']['tmp_name'][$key];
        echo '<br>';
    }
}
?>