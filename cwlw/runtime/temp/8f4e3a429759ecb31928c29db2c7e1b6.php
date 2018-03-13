<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:72:"F:\wxapplication\back\cwlw\application/../template/backend\topic\add.php";i:1511764215;s:30:"../template/backend/header.php";i:1509894012;s:28:"../template/backend/menu.php";i:1510914950;s:34:"../template/backend/navigation.php";i:1509929596;s:30:"../template/backend/footer.php";i:1509897623;}*/ ?>
<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>晨鸟劳务</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="Mosaddek" name="author"/>
    <link href="/static/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/static/assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="/static/assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet"/>
    <link href="/static/assets/font-awesome/css/font-awesome.css" rel="stylesheet"/>
    <link href="/static/css/style.css" rel="stylesheet"/>
    <link href="/static/css/style-responsive.css" rel="stylesheet" />
    <link href="/static/css/style-default.css" rel="stylesheet" id="style_color" />

    <link rel="stylesheet" type="text/css" href="/static/assets/uniform/css/uniform.default.css" />

    <link rel="stylesheet" type="text/css" href="/static/assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="/static/assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="/static/assets/bootstrap-daterangepicker/daterangepicker.css" />

    <link rel="stylesheet" href="/static/assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />

    <link href="/static/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/static/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<!-- BEGIN HEADER -->
<div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!--BEGIN SIDEBAR TOGGLE-->
               <div class="sidebar-toggle-box hidden-phone">
                   <div class="icon-reorder tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
               </div>
               <!--END SIDEBAR TOGGLE-->
               <!-- BEGIN LOGO -->
               <a class="brand" href="index.html">
                   <img src="/static/img/logo.png" alt="Metro Lab" />
               </a>
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER -->
               <div id="top_menu" class="nav notify-row">
                   <!-- BEGIN NOTIFICATION -->
                   <ul class="nav top-menu">
                       <!-- BEGIN SETTINGS -->
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <i class="icon-tasks"></i>
                               <span class="badge badge-important">6</span>
                           </a>
                           <ul class="dropdown-menu extended tasks-bar">
                               <li>
                                   <p>你有6条任务</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                         <div class="desc">控制台</div>
                                         <div class="percent">44%</div>
                                       </div>
                                       <div class="progress progress-striped active no-margin-bot">
                                           <div class="bar" style="width: 44%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">数据库更新</div>
                                           <div class="percent">65%</div>
                                       </div>
                                       <div class="progress progress-striped progress-success active no-margin-bot">
                                           <div class="bar" style="width: 65%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">手机开发进度</div>
                                           <div class="percent">87%</div>
                                       </div>
                                       <div class="progress progress-striped progress-info active no-margin-bot">
                                           <div class="bar" style="width: 87%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">手机App进度</div>
                                           <div class="percent">33%</div>
                                       </div>
                                       <div class="progress progress-striped progress-warning active no-margin-bot">
                                           <div class="bar" style="width: 33%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <div class="task-info">
                                           <div class="desc">控制台</div>
                                           <div class="percent">90%</div>
                                       </div>
                                       <div class="progress progress-striped progress-danger active no-margin-bot">
                                           <div class="bar" style="width: 90%;"></div>
                                       </div>
                                   </a>
                               </li>
                               <li class="external">
                                   <a href="#">查看所有任务</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END SETTINGS -->
                       <!-- BEGIN INBOX DROPDOWN -->
                       <li class="dropdown" id="header_inbox_bar">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <i class="icon-envelope-alt"></i>
                               <span class="badge badge-important">5</span>
                           </a>
                           <ul class="dropdown-menu extended inbox">
                               <li>
                                   <p>你有5条消息</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="/static/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jonathan Smith</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, 这是个消息列子.
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="/static/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jhon Doe</span>
									<span class="time">10 mins</span>
									</span>
									<span class="message">
									 Hi, 最近咋样?
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="/static/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jason Stathum</span>
									<span class="time">3 hrs</span>
									</span>
									<span class="message">
									    This is awesome dashboard.
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="photo"><img src="/static/img/avatar-mini.png" alt="avatar" /></span>
									<span class="subject">
									<span class="from">Jondi Rose</span>
									<span class="time">Just now</span>
									</span>
									<span class="message">
									    Hello, this is metrolab
									</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">See all messages</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END INBOX DROPDOWN -->
                       <!-- BEGIN NOTIFICATION DROPDOWN -->
                       <li class="dropdown" id="header_notification_bar">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                               <i class="icon-bell-alt"></i>
                               <span class="badge badge-warning">7</span>
                           </a>
                           <ul class="dropdown-menu extended notification">
                               <li>
                                   <p>你有7条提示信息</p>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Server #3 overloaded.
                                       <span class="small italic">34 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-warning"><i class="icon-bell"></i></span>
                                       Server #10 not respoding.
                                       <span class="small italic">1 Hours</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-important"><i class="icon-bolt"></i></span>
                                       Database overloaded 24%.
                                       <span class="small italic">4 hrs</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-success"><i class="icon-plus"></i></span>
                                       New user registered.
                                       <span class="small italic">Just now</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">
                                       <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                       Application error.
                                       <span class="small italic">10 mins</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="#">See all notifications</a>
                               </li>
                           </ul>
                       </li>
                       <!-- END NOTIFICATION DROPDOWN -->

                   </ul>
               </div>
               <!-- END  NOTIFICATION -->
               <div class="top-nav ">
                   <ul class="nav pull-right top-menu" >
                       <!-- BEGIN SUPPORT -->
                       <li class="dropdown mtop5">

                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
                               <i class="icon-comments-alt"></i>
                           </a>
                       </li>
                       <li class="dropdown mtop5">
                           <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help">
                               <i class="icon-headphones"></i>
                           </a>
                       </li>
                       <!-- END SUPPORT -->
                       <!-- BEGIN USER LOGIN DROPDOWN -->
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <img src="/static/img/avatar1_small.jpg" alt="">
                               <span class="username">Jhon Doe</span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu extended logout">
                               <li><a href="#"><i class="icon-user"></i>我的资料</a></li>
                               <li><a href="#"><i class="icon-cog"></i>我的设置</a></li>
                               <li><a href="login.html"><i class="icon-key"></i>退出</a></li>
                           </ul>
                       </li>
                       <!-- END USER LOGIN DROPDOWN -->
                   </ul>
                   <!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
<!-- END HEADER -->


<!-- BEGIN CONTAINER -->
<div id="container" class="row-fluid">
    <!-- BEGIN SIDEBAR -->
    <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
          <ul class="sidebar-menu">
              <li class="sub-menu active">
                  <a class="" href="/index.php/backend/index/index">
                      <i class="icon-dashboard"></i>
                      <span>控制台</span>
                  </a>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-book"></i>
                      <span>信息管理</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="/index.php/backend/position/Index">职位管理</a></li>
                      <li><a class="" href="/index.php/backend/company/Index">公司管理</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-cogs"></i>
                      <span>系统设置</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="grids.html">网格</a></li>
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-tasks"></i>
                      <span>表单</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                  </ul>
              </li>
              <li class="sub-menu">
                  <a href="javascript:;" class="">
                      <i class="icon-th"></i>
                      <span>CMS</span>
                      <span class="arrow"></span>
                  </a>
                  <ul class="sub">
                      <li><a class="" href="/index.php/backend/topiclabel/Index">话题标签</a></li>
                      <li><a class="" href="/index.php/backend/topic/Index">话题管理</a></li>
                  </ul>
              </li>
              <li>
                  <a class="" href="/index.php/backend/Login/Index">
                    <i class="icon-user"></i>
                    <span>登录页面</span>
                  </a>
              </li>
          </ul>
    <!-- END SIDEBAR MENU -->
</div>
</div>
<!-- END SIDEBAR -->
<!-- BEGIN PAGE -->
<div id="main-content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid" >

        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
   <div class="span12">
	   <!-- BEGIN THEME CUSTOMIZER-->
	   <!--<div id="theme-change" class="hidden-phone">
		   <i class="icon-cogs"></i>
			<span class="settings">
				<span class="text">主题颜色:</span>
				<span class="colors">
					<span class="color-default" data-style="default"></span>
					<span class="color-green" data-style="green"></span>
					<span class="color-gray" data-style="gray"></span>
					<span class="color-purple" data-style="purple"></span>
					<span class="color-red" data-style="red"></span>
				</span>
			</span>
	   </div>-->
	   <!-- END THEME CUSTOMIZER-->
	  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
	   <h3 class="page-title">
           <?php echo $menutitle; ?>
	   </h3>
	   <ul class="breadcrumb">
		   <li>
			   <a href="#"> <?php echo $pmenutitle; ?></a>
			   <span class="divider">/</span>
		   </li>                      
		   <li class="active">
               <?php echo $menutitle; ?>
		   </li>
		   <li class="pull-right search-wrap">
			   <form action="search_result.html" class="hidden-phone">
				   <div class="input-append search-input-area">
					   <input class="" id="appendedInputButton" type="text">
					   <button class="btn" type="button"><i class="icon-search"></i> </button>
				   </div>
			   </form>
		   </li>
	   </ul>
	   <!-- END PAGE TITLE & BREADCRUMB-->
   </div>
</div>
        <!-- END PAGE HEADER-->

        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN SAMPLE FORMPORTLET-->
                <div class="widget green">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i> 添加话题</h4>
                        <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <!--<a href="javascript:;" class="icon-remove"></a>-->
                            </span>
                    </div>
                    <div class="widget-body">
                        <!-- BEGIN FORM-->
                        <form action="/index.php/backend/topic/Add" class="form-horizontal" id="topic_submit" method="post">
                            <div class="control-group">
                                <div class="span6">
                                    <label class="control-label">话题title</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" class="input-xlarge"  name="title" id="title" />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                                <div class="span6">
                                    <label class="control-label">话题便签</label>
                                    <input type="text" placeholder="职业 Hr 面经 职场规则  " class="input-xlarge"    name="topic_label" id="topic_label"  />
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="span6">
                                    <label class="control-label">栏位</label>
                                    <div class="controls">
                                        <select class="input"  name="tab" id="tab"
                                                value=""  >
                                            <option value="1">牢骚</option>
                                            <option value="2">职场</option>
                                            <option value="3">政策</option>
                                            <option value="4">笑话</option>
                                            <option value="5">热点</option>
                                            <option value="0">视频</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="span12">
                                    <label class="control-label">话题文章</label>
                                    <div class="controls">
                                        <textarea class="span12 wysihtmleditor5" rows="25"  id="info" name="info"  ></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="span6">
                                    <label class="control-label">配图外链</label>
                                    <input type="text"  class="input-xlarge"    name="img_url" id="img_url"  />
                                </div>

                                <div class="span6" id="vidio_url_div" style="display:none">
                                    <label class="control-label">视频外链</label>
                                    <input type="text"  class="input-xlarge"    name="vidio_url" id="vidio_url"  />
                                </div>
                            </div>

                            <div class="control-group"  >
                                <div class="span6" >
                                    <label class="control-label">配图</label>
                                    <form action="/index.php/backend/topic/Add" class="form-horizontal" id="file_submit" method="post" enctype="multipart/form-data">
                                        <div class="controls">
                                            <div>
                                                <p>
                                                    <input type="file" name="file" id="file" />
                                                    <a href="javascript:" id='cpupload'  >上传</a>
                                                </p>
                                            </div>
                                            <div style="width: 100px; height:50px;">
                                                <img alt="" src="" id="show_img" name="show_img"  >
                                            </div>
                                        </div>
                                    </form>
                                    <input type="hidden" value=' ' id="img" name="img"  >
                                </div>


                                <div class="span6" id="vidio_div" style="display:none"  >
                                    <label class="control-label">视频</label>
                                    <form action="/index.php/backend/topic/Add" class="form-horizontal" id="vidio_submit" method="post" enctype="multipart/form-data">
                                        <div class="controls">
                                            <div>
                                                <p>
                                                    <input type="file" name="file1" id="file1" />
                                                    <a href="javascript:" id='vpupload'  >上传</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div style="margin-top:-10px;">
                                            <video src=""   controls="controls"   width="40px" height="30px"  id="show_vidio" name="show_vidio" >
                                            </video>
                                        </div>
                                    </form>
                                    <input type="hidden" value=' ' id="vidio" name="vidio"  >
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn blue" id="Dsubmit"><i class="icon-ok"></i> 保存</button>
                                <button type="button" class="btn"><i class=" icon-remove"></i> 退出</button>
                            </div>
                        </form>
                        <!-- END FORM-->
                    </div>
                </div>
                <!-- END SAMPLE FORM PORTLET-->
            </div>
        </div>
        <!-- END BASIC PORTLET-->
    </div>
</div>
<!-- END PAGE info-->
</div>
<!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
</div>
<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
<div id="footer">
       2017 &copy; 晨鸟劳务.
</div>
<!-- END FOOTER -->

<!-- BEGIN JAVASCRIPTS -->
<!-- Load javascripts at bottom, this will reduce page load time -->
<script src="/static/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="/static/assets/ajaxfileupload.js"></script>

<script src="/static/js/jquery.nicescroll.js" type="text/javascript"></script>

<script type="text/javascript" src="/static/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="/static/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="/static/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
<script src="/static/assets/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript" src="/static/assets/ckeditor/ckeditor.js"></script>
<!--<script type="text/javascript" src="/static/assets/bootstrap/js/bootstrap-fileupload.js"></script>-->
<script type="text/javascript" src="/static/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="/static/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>


<!-- ie8 fixes -->
<!--[if lt IE 9]>
<script src="/static/js/excanvas.js"></script>
<script src="/static/js/respond.js"></script>
<![endif]-->

<script src="/static/js/jquery.scrollTo.min.js"></script>

<!--common script for all pages-->
<script src="/static/js/common-scripts.js"></script>

<!--script for this page only-->
<script src="/static/js/area.js"></script>
<script src="/static/assets/layer/layer.js"></script>


<script>
    $('.wysihtmleditor5').wysihtml5();

    $('#topic_new').click(function () {
        location.href = "/index.php/backend/topic/Add";
    });

    $('#topic_del').click(function () {
        location.href = "backend/topic/Del";
    });

    $('#upload').click(function () {
        //ajax上传
    });

//    $('#show_introduce').on("blur",function () {
//        $('#introduce').val($("iframe.wysihtml5-sandbox").infos().find('body').text() );
//        alert($('#introduce').val());
//    });

    $('#Dsubmit').click(function () {
        console.log( $("iframe.wysihtml5-sandbox").infos().find('body').html() );
        $('#info').val($("iframe.wysihtml5-sandbox").infos().find('body').html() );
        $('#topic_submit').submit();
    });


    $('#tab').change(function(){
        var  tval =   $('#tab').find("option:selected").val();
        if(tval==0) {
            $('#vidio_div').css("display", 'block');
            $('#vidio_url_div').css("display", 'block');
        }else{
            $('#vidio_div').css("display",'none');
            $('#vidio_url_div').css("display",'none');
        }
    });

    $("#cpupload").click(function() {
        $.ajaxFileUpload({
            url: "/index.php/backend/topic/ajax_uploader",      //默认为当前页面url
            type: 'post',
            secureuri: false, //一般设置为false
            fileElementId: 'file', // 上传文件的id、name属性名
            dataType: 'JSON', //返回值类型，一般设置为json、application/json  这里要用大写  不然会取不到返回的数据
            success: function(datastr, status){
                var data = eval('(' + datastr + ')');
                $("#show_img").attr("src", data.data.addr);
                $("#img").val(data.data.id);
                if (typeof (data.error) != 'undefined') {
                    if (data.error != '') {
                        layer.alert(data.error, {icon: 2});
                    } else {
                        layer.alert(data.msg, {icon: 2});
                    }
                }
            },
            error: function(data, status, e){
                layer.alert(e, {icon: 2});
            }
        });
     });

    $("#vpupload").click(function() {
        $.ajaxFileUpload({
            url: "/index.php/backend/topic/ajax_vidioUploader/dir/vidio",      //默认为当前页面url
            type: 'post',
            secureuri: false, //一般设置为false
            fileElementId: 'file1', // 上传文件的id、name属性名
            dataType: 'JSON', //返回值类型，一般设置为json、application/json  这里要用大写  不然会取不到返回的数据
            success: function(datastr, status){
                var data = eval('(' + datastr + ')');
                $("#show_vidio").attr("src", data.data.addr);
                $("#vidio").val(data.data.id);
                if (typeof (data.error) != 'undefined') {
                    if (data.error != '') {
                        layer.alert(data.error, {icon: 2});
                    } else {
                        layer.alert(data.msg, {icon: 2});
                    }
                }
            },
            error: function(data, status, e){
                layer.alert(e, {icon: 2});
            }
        });
    });

</script>


<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
