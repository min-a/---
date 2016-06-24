<?php
include_once('./common.php');
$content_str = nl2br(get_text(stripslashes($_POST['PRODUCT_CONTENT'])));
echo $_POST['IS_USE'];
$query = "insert into product_list (category_code,product_view_no,product_name,is_use,sub_use,product_content,modify_date) 
						VALUES ('{$_POST['CATEGORY_CODE']}',(SELECT MAX(PRODUCT_VIEW_NO)+1 FROM PRODUCT_LIST list WHERE CATEGORY_CODE='{$_POST['CATEGORY_CODE']}'),'{$_POST['PRODUCT_NAME']}','{$_POST['IS_USE']}','{$_POST['SUB_USE']}','{$content_str}',NOW())";
$row = sql_query($query);

//echo "<meta http-equiv='refresh' content='0; url=product_List.php?category_code={$_POST[CATEGORY_CODE]}'>";
?>


