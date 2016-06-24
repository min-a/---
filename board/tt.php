<?php
include_once('./common.php');

//데이터베이스에서 제품리스트를 가져온다.
$query = "select * from product_list where category_code = '서버보안'";

$result = sql_query($query);

     while ($row = sql_fetch_array($result))
     {
?>
<?=$row['PRODUCT_IDX'] ?>::<br/>
<?=$row['CATEGORY_CODE'] ?><br/>
<?=$row['PRODUCT_VIEW_NO'] ?><br/>
<?=$row['PRODUCT_NAME'] ?><br/>
<?=$row['PRODUCT_TITLE'] ?><br/>
<?=$row['PRODUCT_CONTENT'] ?><br/>
<?=$row['SUB_USE'] ?><br/>
<?=$row['IS_USE'] ?><br/>
<?=$row['MODIFY_DATE'] ?><br/>
<?php
 }
?>