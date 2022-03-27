<?php
include "connect.php"
if(isset($_GET['d']))
{
  $id=$_GET['id'];
  $res=pg_query($connect"delete from product where productid='&id'");
  if(res)
    echo "deleted";
  else
    echo"not deleted";
  header('referesh:3,url=productview.php');  

}