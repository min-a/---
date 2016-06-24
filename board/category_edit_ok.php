<?php
include_once('./common.php');
$content_str = nl2br(get_text(stripslashes($_POST['CATEGORY_CONTENT'])));

$query = "update product_category set category_title='{$_POST['CATEGORY_TITLE']}',category_content='{$content_str}',
		  category_memo='{$_POST['CATEGORY_MEMO']}',is_use='{$_POST['is_use']}',modify_date=now() where category_code='{$_POST['CATEGORY_CODE']}'";
$row = sql_query($query);
echo "<meta http-equiv='refresh' content='0; url=category_list.php?category_code={$_POST[CATEGORY_CODE]}'>";
?>
