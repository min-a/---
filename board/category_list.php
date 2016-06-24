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
</head>

<body>
	<div id="wrapper">
	<!-- 공통:header -->
	<?php include_once('head.php');?> 

	<!--메인 컨텐츠-->
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- 컨텐츠 헤더 -->
                <div class="row">
                    <div class="ad_c_header col-lg-12">
						<span></span>
						<!--타이틀-->
						<div class="admin_title">
							<h1 class="page-header">
								카테고리 정보 관리
							</h1>
							<!--경로-->
							<p class="admin_route">
								<i class="fa fa-home"></i> 관리자 홈 &#62; 제품관리 &#62; 카테고리 정보 관리
							</p>
						</div>
                    </div>
                </div>
                <!-- /.row -->
            
				<!--컨텐츠 2col-->
                <div class="row">
					<!--1. 공지 목록-->
                    <div class="col-lg-6">
                        <div class="panel panel-default">         
							<!--패널-->
                            <div class="panel-body">
								<!--패널 내용-->
                                <div class="table-responsive">
                                    <table id="panel_table" class="panel_table_pop table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
												<th>카테고리코드</th>
                                                <th>노출순서</th>
                                                <th>사용유무</th>
                                                <th>수정일</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                             <?php 
                                             //데이터베이스에서 제품리스트를 가져온다.
                                             $query = "select * from product_category order by category_view_no";
                                             $result = sql_query($query);
	                                            while($row=sql_fetch_array($result)){
	                                         ?>
												<td><a href="category_read.php?category_code=<?=$row[CATEGORY_CODE]?>"><?=$row[CATEGORY_CODE] ?></a></td>
                                                <td><?=$row[CATEGORY_VIEW_NO] ?></td>
                                                <td><?=$row[IS_USE] ?></td>                                                
                                                <td><?=$row[MODIFY_DATE] ?></td>      
                                            </tr>                          
                                            <?php
												 }	//END WHILE
									    	?> 
                                        </tbody>
                                    </table>
                                </div>
								<!--패널 페이징-->
                                <div class="admin_paging text-center">
                                    <i class="fa fa-arrow-circle-left"></i> 
									<a>1</a> <a>2</a> <a>3</a> <a>4</a> <a>5</a>
									<i class="fa fa-arrow-circle-right"></i>
                                </div>
								
                            </div>
                        </div>
                    </div>
          
            </div>
        </div>
	</div>
	<!-- 공통:tail -->
	<?php include_once('tail.php'); ?>
	</div>
</body>
</html>
