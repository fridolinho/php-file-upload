<?php
if(isset($_POST['upload'])) {
    $filename = $_FILES['file']['name'];
    $file_tmp = $_FILES['file']['tmp_name'];
    if (move_uploaded_file($file_tmp, "images/" . $filename)) {
        echo 'file uploaded';
    } else {
        echo 'something went wrong';
    }
}

?>

<html>
<head>
    <style>
        body {
            padding: 30px;
        }
        .file_input {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file" class="file_input"><br />
        <input type="submit" name="upload" value="Upload image">
    </form>
</body>
</html>