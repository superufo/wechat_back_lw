<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:74:"F:\wxapplication\back\cwlw\application/../template/backend\company\add.php";i:1510326049;s:30:"../template/backend/header.php";i:1509894012;s:28:"../template/backend/menu.php";i:1510914950;s:34:"../template/backend/navigation.php";i:1509929596;s:30:"../template/backend/footer.php";i:1509897623;}*/ ?>
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
    <link href="/static/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="/static/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen">

    <link href="/static/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/static/assets/uniform/css/uniform.default.css" />
    <link rel="stylesheet" type="text/css" href="/static/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />

    <!--<link rel="stylesheet" type="text/css" href="/static/assets/uploadify/uploadify.css">-->
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
    <div class="container-fluid">

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
                        <h4><i class="icon-reorder"></i> 添加企业信息</h4>
                        <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <!--<a href="javascript:;" class="icon-remove"></a>-->
                            </span>
                    </div>
                    <div class="widget-body">
                        <!-- BEGIN FORM-->
                        <form action="/index.php/backend/company/Add" class="form-horizontal" id="company_submit" method="post">
                            <div class="control-group">
                                <div class="span6">
                                    <label class="control-label">企业code</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" class="input-xlarge"  value="<?php echo $code; ?>"  name="code" id="code" readonly />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                                <div class="span6">
                                    <label class="control-label">企业类型</label>
                                    <div class="controls">
                                        <select class="input-xlarge m-wrap" tabindex="1" name="type" id="type">
                                            <option value="国企">国企</option>
                                            <option value="港资">港资</option>
                                            <option value="台资">台资</option>
                                            <option value="欧美">欧美</option>
                                            <option value="民营">民营</option>
                                            <option value="上市公司">上市公司</option>
                                            <option value="民营">民营</option>
                                            <option value="其他">其他</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="span6">
                                    <label class="control-label">企业名称</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" class="input-xlarge"  name="name" id="name" />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                                <div class="span6">
                                    <label class="control-label">企业简称</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" class="input-xlarge" name="short_name" id="short_name"  />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="span12">
                                    <label class="control-label">地区</label>
                                    <div class="controls">
                                        <select  class="input-xlarge m-wrap"  name="province" id="province" onchange="loadRegion('province',2,'city','getRegion');">
                                            <option value="0" selected>省份/直辖市</option>
                                            <?php if(is_array($province) || $province instanceof \think\Collection || $province instanceof \think\Paginator): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                <option value="<?php echo $vo['name']; ?>" ><?php echo $vo['name']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                        <select  class="input-xlarge m-wrap" name="city" id="city"  onchange="loadRegion('city',3,'town','getRegion');">
                                            <option value="0">市/县</option>
                                        </select>
                                        <select  class="input-xlarge m-wrap" name="town" id="town">
                                            <option value="0">镇/区</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">街道</label>
                                <div class="controls">
                                    <input type="text" placeholder="" class="input-xxlarge"  id="street"  name="street"  />
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="span6">
                                    <label class="control-label">企业网站</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" class="input-xlarge"  id="url" name="url"  />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                                <div class="span6">
                                    <label class="control-label">微信</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" class="input-xlarge" id="weixin" name="weixin" />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="span6">
                                    <label class="control-label">联系人</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" class="input-xlarge"  id="contact"  name="contact" />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                                <div class="span6">
                                    <label class="control-label">联系电话</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" class="input-xlarge" id="contact_phone" name="contact_phone"  />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden"  id="introduce" name="introduce" value="11111"  />
                            <!--<input type="text"  id="introduce" name="introduce" value="11111"  style="display:none" />-->

                            <div class="control-group">
                                <div class="span12">
                                    <label class="control-label">企业介绍</label>
                                    <div class="controls">
                                        <textarea class="span12 wysihtmleditor5" rows="20"  id="show_introduce" name="show_introduce"  ></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="span6">
                                    <label class="control-label">营业执照</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" class="input-xlarge"  id="certno"  name="certno"  />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>

                                <div class="span6">
                                    <label class="control-label">企业规模</label>
                                    <div class="controls">
                                        <select class="input-xlarge m-wrap" tabindex="1"  id="scale"  name="scale">
                                            <option value="50以下">50以下</option>
                                            <option value="50-100">50-100</option>
                                            <option value="100-500">100-500</option>
                                            <option value="500-1000">500-1000</option>
                                            <option value="1000-5000">1000-5000</option>
                                            <option value="5000-10000">5000-10000</option>
                                            <option value="10000">10000以上</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="span6">
                                    <label class="control-label">营业执照照片</label>
                                    <form action="/index.php/backend/company/Add" class="form-horizontal" id="file_submit" method="post" enctype="multipart/form-data">
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
                                    <input type="hidden" value=' ' id="cert_img" name="cert_img"  >
                                </div>

                                <div class="span6">
                                    <label class="control-label">公司logo</label>
                                    <form action="/index.php/backend/company/Add" class="form-horizontal" id="file1_submit" method="post" enctype="multipart/form-data">
                                        <div class="controls">
                                            <div>
                                                <p>
                                                    <input type="file" name="logofile" id="logofile" />
                                                    <a href="javascript:" id='logoupload'  >上传</a>
                                                </p>
                                            </div>
                                            <div style="width: 100px; height:50px;">
                                                <img alt="" src="" id="show_logo" name="show_logo"  >
                                            </div>
                                        </div>
                                    </form>
                                    <input type="hidden" value=' ' id="logo" name="logo"  >
                                </div>

                            </div>


                            <!--<form action="#" class="form-horizontal">

                                <div class="control-group">
                                    <div class="span12">
                                        <label class="control-label">企业介绍</label>
                                        <div class="controls">
                                            <textarea class="span12 wysihtmleditor5" rows="20"  id="show_introduce" name="show_introduce"  ></textarea>
                                        </div>
                                    </div>
                                </div>-->
                            <!--</form>-->

                            <div class="form-actions">
                                <button type="submit" class="btn blue" id="Dsubmit"><i class="icon-ok"></i> Save</button>
                                <button type="button" class="btn"><i class=" icon-remove"></i> Cancel</button>
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
<!-- END PAGE CONTENT-->
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

    $('#company_new').click(function () {
        location.href = "/index.php/backend/company/Add";
    });

    $('#company_del').click(function () {
        location.href = "backend/company/Del";
    });

    $('#upload').click(function () {
        //ajax上传
    });

//    $('#show_introduce').on("blur",function () {
//        $('#introduce').val($("iframe.wysihtml5-sandbox").contents().find('body').text() );
//        alert($('#introduce').val());
//    });

    $('#Dsubmit').click(function () {
        console.log( $("iframe.wysihtml5-sandbox").contents().find('body').html() );
        $('#introduce').val($("iframe.wysihtml5-sandbox").contents().find('body').html() );
        $('#company_submit').submit();
    });


    $("#cpupload").click(function() {
        $.ajaxFileUpload({
            url: "/index.php/backend/company/ajax_uploader",      //默认为当前页面url
            type: 'post',
            secureuri: false, //一般设置为false
            fileElementId: 'file', // 上传文件的id、name属性名
            dataType: 'JSON', //返回值类型，一般设置为json、application/json  这里要用大写  不然会取不到返回的数据
            success: function(datastr, status){
                var data = eval('(' + datastr + ')');
                $("#show_img").attr("src", data.data.addr);
                $("#cert_img").val(data.data.id);
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


    $("#logoupload").click(function() {
        $.ajaxFileUpload({
            url: "/index.php/backend/company/ajax_uploader.html?dir=logo",      //默认为当前页面url
            type: 'post',
            secureuri: false, //一般设置为false
            fileElementId: 'logofile', // 上传文件的id、name属性名
            dataType: 'JSON', //返回值类型，一般设置为json、application/json  这里要用大写  不然会取不到返回的数据
            success: function(datastr, status){
                var data = eval('(' + datastr + ')');
                $("#show_logo").attr("src", data.data.addr);
                $("#logo").val(data.data.id);
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
