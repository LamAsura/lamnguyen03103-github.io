<?php
include_once 'db.php';

class danhmucDAO extends db
{
    public function GetAll()
    {
        $all = parent::$connect -> prepare("SELECT * FROM danhmuc");
        $all ->execute();
        $ar = array();
        $ar = $all ->get_result()->fetch_all(MYSQLI_ASSOC);
        return $ar;
    }
    public function Add($madanhmuc,$ten,$ghichu){
        $add = "INSERT INTO danhmuc('madanhmuc','ten', 'ghichu') VALUES (null,'$ten','$ghichu')";
        parent::$connect ->query($add);  
    }
    public function Del($madanhmuc){
        $del = "DELETE FROM danhmuc where madanhmuc = $madanhmuc";
        parent::$connect->query($del);
    }
    public function Sua($ten,$ghichu){
        $sua = "UPDATE danhmuc SET ten = '$ten' , ghichu ='$ghichu'";
        parent::$connect->query($sua);
    }
}