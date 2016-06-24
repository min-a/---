<?php
include_once('./common.php');
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JANUBER Admin 제품관리</title>
    
<!-- Bootstrap CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

<!-- Custom CSS -->
<link href="css/common.css" rel="stylesheet">
<link href="css/admin_custom.css" rel="stylesheet">

<script type="text/javascript">
	//페이지 뒤로가기
	function page_back(){
		history.go(-1);
	}

	//엔터클릭 submit방지
	function enter(e){
		if(e.keyCode==13 && e.srcElement.type!='input')
			return false;
	}//end enter	
</script>

</head>

<body>
	<div id="wrapper" style="padding-top:30px;">
	<!-- 공통:header -->
	<?php include_once('head.php');?> 

	<!--메인 컨텐츠-->
	<?php
	    //데이터베이스에서 선택한 제품의 상세내용 가져온다.
	    $query = "select * from product_category where category_code={$_POST['CATEGORY_CODE']}";
	    $row = sql_fetch_array($query);
    ?>
	<!--글 수정 -->
		<form role="form" method="POST" action="category_edit_ok.php" onkeydown="return enter(event)">
          <div class="col-lg-6">
              <div class="panel panel-default">
				  <!--타이틀-->
                  <div class="panel-heading">
                      <h3 class="panel-title">
					  <i class="fa fa-pencil fa-fw"></i>&#160; 카테고리 수정</h3>
                  </div>
				  <!--패널-->
                  <div class="panel-body">
                      <div class="panel_editor list-group">
				  		<!--패널 폼-->
                        
							<!--제품명-->
							<div class="input-group">
								<span class="input-group-addon">카테고리코드</span>
								<input type="text" id="CATEGORY_CODE" readonly name="CATEGORY_CODE" class="form-control" value="<?=$_POST[CATEGORY_CODE]?>">
							</div>
							<!--카테고리 상단 타이틀-->
							<div class="input-group">
								<span class="input-group-addon">카테고리 상단 타이틀</span>
								<input type="text" id="CATEGORY_TITLE" name="CATEGORY_TITLE"  class="form-control" value="<?=$_POST[CATEGORY_TITLE]?>">
							</div>
							<!--카테고리 메모-->
							<div class="input-group">
								<span class="input-group-addon">카테고리 메모</span>
								<input type="text" id="CATEGORY_MEMO" name="CATEGORY_MEMO"  class="form-control" value="<?=$_POST[CATEGORY_MEMO]?>">
							</div>
							<!--카테고리 사용유무-->
							<div class="input-group">
								<span class="input-group-addon">사용유무</span>
								<span class="form-control">
									<label>사용<input type="radio" name="onOff" value="Y"></label>
									<label>미사용<input type="radio" name="onOff" value="N"></label>
								</span>
							</div>
							<!--카테고리 내용부분-->
							<div class="form-group">
								<span class="panel_editor_con_tit form-control">카테고리 내용</span>
								<span class="panel_editor_con form-control">
									<input type="text" id="CATEGORY_CONTENT" name="CATEGORY_CONTENT" class="form-control" value="<?=$_POST[CATEGORY_CONTENT]?>" >
								</span>
							</div>
								
					<!--패널 에디터버튼-->
					<div class="admin_editor form-group">
						<button type="submit" class="admin_modify btn">저장</button>
						<button type="button" class="admin_delete btn" onclick="page_back();">취소</button>
					</div> 

                      </div>                        
                  </div><!--/.panel_editor-->
								
              	</div>
			</div><!--/panel-->
		</form>
		         
	<!-- 공통:tail -->
	<?php include_once('tail.php'); ?>
	
         </div>	
</body>
</html>

 	 