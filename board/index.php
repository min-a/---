<!DOCTYPE html>
<html lang="ko">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JANUBER Admin 메인화면</title>
 
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
	<!-- Custom CSS -->
    <link href="css/admin_custom.css" rel="stylesheet">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
    
	<!--공통:header-->
 	<?php include_once('head.php'); ?>
		
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
								관리자 페이지
							</h1>
							<!--경로-->
							<p class="admin_route">
								<i class="fa fa-home"></i> 관리자 홈
							</p>
						</div>
                    </div>
                </div>
                <!-- /.row -->
				
				<!--상단에 4개 col(글알림)-->
                <div class="row">
				
					<!--1.새로운 댓글-->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">26</div>
                                        <div>새로운 댓글</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">자세히 보기</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div><!--/댓글-->
					
					<!--2.새로운 뉴스-->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-blue">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-newspaper-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">12</div>
                                        <div>새로운 뉴스</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">자세히 보기</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div><!--/뉴스-->
					
					<!--3.새로운 공지-->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-plus-circle fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="panelcon huge">5</div>
                                        <div class="panelcon">새로운 공지</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">자세히 보기</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div><!--/공지-->
					
					<!--4.채용문의-->
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-question-circle fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">3</div>
                                        <div>채용문의 NEW</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <div class="panel-footer">
                                    <span class="pull-left">자세히 보기</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div><!--/채용문의-->
                </div>
                <!-- /.row -->
				
				<!--미리보기들 2col-->
                <div class="row">
				
                    <!--1: 최근 글 목록-->
                    <div class="col-lg-6">
                        <div class="panel panel-default">
							<!--타이틀-->
                            <div class="panel-heading">
                                <h3 class="panel-title">
								<i class="fa fa-clock-o fa-fw"></i>&#160; 최근 글 목록</h3>
                            </div>
							<!--패널-->
                            <div class="panel-body">
                                <div class="list-group">
                                    <a href="januber_admin_popup.html" class="list-group-item">
                                        <span class="badge">00-00-00</span>
										<i class="admin_panel_category">팝업관리</i>
										팝업관리 예시 보기
										
                                    </a>
                                    <a href="januber_admin_notice.html" class="list-group-item">
                                        <span class="badge">00-00-00</span>
										<i class="admin_panel_category">공지사항</i>
										공지사항 예시 보기
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">00-00-00</span>
										<i class="admin_panel_category">카테고리</i>
										Order 392 shipped
                                    </a>
                                    <a href="#" class="list-group-item">
                                        <span class="badge">00-00-00</span>
										<i class="admin_panel_category">카테고리</i>
										Invoice 653 has been paid
                                    </a>
                                    <a href="#" class="list-group-item">
                                         <span class="badge">00-00-00</span>
										<i class="admin_panel_category">카테고리</i>
										A new user has been added
                                    </a>
                                    <a href="#" class="list-group-item">
                                         <span class="badge">00-00-00</span>
										<i class="admin_panel_category">카테고리</i>
										Completed task: "pick up dry cleaning"
                                    </a>
                                    <a href="#" class="list-group-item">
                                         <span class="badge">00-00-00</span>
										<i class="admin_panel_category">카테고리</i>
										Saved the world
                                    </a>
                                    <a href="#" class="list-group-item">
                                         <span class="badge">00-00-00</span>
										<i class="admin_panel_category">카테고리</i>
										Completed task: "fix error on sales page"
                                    </a>
									<a href="#" class="list-group-item">
                                         <span class="badge">00-00-00</span>
										<i class="admin_panel_category">카테고리</i>
										Completed task: "fix err on sales page"
                                    </a>
									<a href="#" class="list-group-item">
                                         <span class="badge">00-00-00</span>
										<i class="admin_panel_category">카테고리</i>
										Completed task:  error on sales page"
                                    </a>
									<a href="#" class="list-group-item">
                                         <span class="badge">00-00-00</span>
										<i class="admin_panel_category">카테고리</i>
										Completed task:e"
                                    </a>
                                </div>
                            </div>
						</div><!--/패널-->
                    </div><!--/1.최근 글 목록-->
					
					<!--2.자료실 현황-->
                    <div class="col-lg-6">
                        <div class="panel panel-default">
							<!--타이틀-->
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-floppy-o fa-fw"></i>&#160; 자료실 현황</h3>
                            </div>
							<!--패널-->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table id="panel_table" class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>조회수</th>
                                                <th>제목</th>
                                                <th>날짜</th>
                                                <th>첨부파일</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>20</td>
                                                <td>3:29 PM3:29 PM3:29 PM</td>
                                                <td>10/21/2013</td>
                                                <td><i class="fa fa-file-o"></i></td>
                                            </tr>
                                            <tr>
                                                <td>32</td>
                                                <td>게시판 목록게시판 목록게시판 목록</td>
                                                <td>10/21/2013</td>
                                                <td><i class="fa fa-file-text-o"></i></td>
                                            </tr>
                                            <tr>
                                                <td>34</td>
                                                <td>게시판 목록3:03 PM</td>
                                                <td>10/21/2013</td>
                                                <td><i class="fa fa-file-text-o"></i></td>
                                            </tr>
                                            <tr>
                                                <td>23</td>
                                                <td>3:00 PM게시판 목록</td>
                                                <td>10/21/2013</td>
                                                <td><i class="fa fa-file-o"></i></td>
                                            </tr>
                                            <tr>
                                                <td>32</td>
                                                <td>게시판 목록2:49 PM</td>
                                                <td>10/21/2013</td>
                                                <td><i class="fa fa-file-text-o"></i></td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>2:23 PM게시판 목록</td>
                                                <td>10/21/2013</td>
                                                <td><i class="fa fa-file-o"></i></td>
                                            </tr>
                                            <tr>
                                                <td>0</td>
                                                <td>2:15 PM</td>
                                                <td>10/21/2013</td>
                                                <td><i class="fa fa-file-o"></i></td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>2:13 PM게시판 목록</td>
                                                <td>10/21/2013</td>
                                                <td><i class="fa fa-file-o"></i></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="admin_panel_link text-right">
                                    <a href="#">자료실 게시판 관리 &#160; <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div><!--/2.자료실 현황-->
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid-->
        </div>
        <!-- /#page-wrapper -->
	
	<!--공통:tail-->
 	<?php include_once('tail.php'); ?>
		
    </div>
    <!-- /#wrapper -->


</body>

</html>
