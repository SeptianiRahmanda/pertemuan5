<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload image file</title>
</head>
<body>
    <form action="target.php" method="POST" enctype="multipart/form-data">
        <label>Browse Image File</label>
        <input type="file" name="IMGFILE" accept=".jpg,*.png">
        <button type="submit" name="KIRIMFILE">Upload Image File</button>
    </form>
</body>
</html> 