<?php
include_once 'db.php';

class productDAO extends db
{
    public function GetAllPro()
    {
        $all = parent::$connect -> prepare("SELECT * FROM product");
        $all ->execute();
        $ar = array();
        $ar = $all ->get_result()->fetch_all(MYSQLI_ASSOC);
        return $ar;
    }
    public function Add($maproduct,$ten,$gia,$mota , $madanhmuc){
        $add = "INSERT INTO product('maproduct','ten','gia', 'mota' ,'madanhmuc')
         VALUES (null ,'$ten','$gia','$mota','$madanhmuc')";
        parent::$connect ->query($add);  
    }
    public function Del($maproduct){
        $del = "DELETE FROM product where maproduct = $maproduct";
        parent::$connect->query($del);
    }
    public function Sua($ten,$gia,$mota , $madanhmuc){
        $sua = "UPDATE product SET ten = '$ten' , gia ='$gia' ,
        'mota = '$mota','madanhmuc = '$madanhmuc'";
        parent::$connect->query($sua);
    }
}