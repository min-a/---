<?php
include_once('./common.php');

$query = "delete from product_list where category_code='{$_POST['CATEGORY_CODE']}' and product_idx={$_POST['PRODUCT_IDX']}";
$row = sql_query($query);

echo "<meta http-equiv='refresh' content='0; url=product_List.php?category_code={$_POST[CATEGORY_CODE]}'>";
?>