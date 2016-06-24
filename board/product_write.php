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

<script type="text/javascript"
	src="http://code.jquery.com/jquery-1.10.2.js"></script>
	
<script type="text/javascript">
	//페이지 뒤로가기
	function page_back(){
		history.go(-1);
	}//end page_back()

 	//제이쿼리를 이용한 데이터확인
	$(document).ready(function(){
		$("form#writeForm").bind("submit",function(){
			//제품명 빈값 체크
			if($("input#PRODUCT_NAME").val().trim()==""){
				alert("제품명을 입력해 주세요.");
				$("input#PRODUCT_NAME").focus();
				return false;
			}
			//제품내용 빈값 체크
			if($("input#PRODUCT_CONTENT").val().trim()==""){
				alert("제품내용을 입력해 주세요.");
				$("input#PRODUCT_CONTENT").focus();
				return false;
			}

			//
		});
	}); 


</script>

</head>

<body>
	<div id="wrapper" style="padding-top:30px;">
	<!-- 공통:header -->
	<?php include_once('head.php');?> 

	<!--메인 컨텐츠-->

	                        	
	<!--글 수정 -->

		<form name="writeForm" id="writeForm" role="form" method="POST" action="product_write_ok.php">
 			<input type="hidden" id="CATEGORY_CODE" name="CATEGORY_CODE" value="<?=$_GET['CATEGORY_CODE']?>">
          <div class="col-lg-6">
              <div class="panel panel-default">
				  <!--타이틀-->
                  <div class="panel-heading">
                      <h3 class="panel-title">
					  <i class="fa fa-pencil fa-fw"></i>&#160; 제품 추가</h3>
                  </div>
				  <!--패널-->
                  <div class="panel-body">
                      <div class="panel_editor list-group">
				  		<!--패널 폼-->
                        
							<!--제품명-->
							<div class="input-group">
								<span class="input-group-addon">제품명</span>
								<input type="text" id="PRODUCT_NAME" name="PRODUCT_NAME" class="form-control">
							</div>
							<!--사용유무-->
							<div class="input-group">
								<span class="input-group-addon">사용유무</span>
								<span class="form-control">
									<label>사용<input type="radio" name="IS_USE" value="Y"></label>
									<label>미사용<input type="radio" name="IS_USE" value="N" checked></label>
								</span>
							</div>
							<!--서브사용유무-->
							<div class="input-group">
								<span class="input-group-addon">서브사용유무</span>
								<span class="form-control">
									<label>사용<input type="radio" name="SUB_USE" value="Y"></label>
									<label>미사용<input type="radio" name="SUB_USE" value="N" checked></label>
								</span>
							</div>
							<!--제품내용부분-->
							<div class="form-group">
								<span class="panel_editor_con_tit form-control">제품내용</span>
								<span class="panel_editor_con form-control">
									<input type="text" id="PRODUCT_CONTENT" name="PRODUCT_CONTENT" class="form-control">
								</span>
							</div>

						<!--파일첨부-->
						<div class="input-group">
							<span class="input-group-addon">파일</span>
							<span class="form-control" >
								<label for="admin_file" class="sr-only">파일첨부</label>
								<input type="file" id="admin_file" multiple value="file...">
							</span>
						</div>
								
					<!--패널 에디터버튼-->
					<div class="admin_editor form-group">
						<button type="submit" class="admin_modify btn">저장</button>
						<button type="button" class="admin_delete btn" onclick="javascript:page_back();">취소</button>
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