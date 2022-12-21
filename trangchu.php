<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table boder="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>Madanhmuc</th>
            <th>Ten</th>
            <th>Ghichu</th>
            <th>Xoa</th>
            <th>Sua</th>
        </tr>
        <?php
        include_once 'danhmucDAO.php';
        $danhmuc = new danhmucDAO();
        $hienthi = $danhmuc->GetAll();
        foreach($hienthi as $value):
        ?>
        <tr>
            <td><?php echo $value['madanhmuc']?></td>
            <td><?php echo $value['ten']?></td>
            <td><?php echo $value['ghichu']?></td>
             <td><?php echo "<a href='deldanhmuc.php?madanhmuc={$value['madanhmuc']}'>Xoa</a>"?></td>
            <td><?php echo "<a href='suadanhmuc.php?madanhmuc={$value['madanhmuc']}'>Sua</a>"?></td> 
        </tr>
        <?php endforeach; ?>
        </table>
        <br>

        <a href="adddanhmuc.php">Them</a>
</body>
</html>