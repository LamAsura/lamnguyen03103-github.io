<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=""method="post">
    Ten: <input type="text" name="ten">
    Ghichu: <input type="text" name="ghichu">
    <input type="submit" value="Submit" name=submit>
    </form>
    <?php
    if (isset($_POST['submit']))
    {
        include_once 'danhmucDAO.php';
        $sua = new danhmucDAO();
        $sua ->Sua($_POST['ten'],$_POST['ghichu']);
        header("location:trangchu.php");
    }
    ?>
</body>
</html>