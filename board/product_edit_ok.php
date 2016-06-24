<?php
include_once('./common.php');
$content_str = nl2br(get_text(stripslashes($_POST['PRODUCT_CONTENT'])));

$query = "update product_list set category_code='{$_POST['CATEGORY_CODE']}', product_name='{$_POST['PRODUCT_NAME']}', product_content='{$content_str}',
		  modify_date=now() where product_idx={$_POST['PRODUCT_IDX']}";
$row = sql_query($query);

echo "<meta http-equiv='refresh' content='0; url=product_List.php?category_code={$_POST[CATEGORY_CODE]}'>";
?>
