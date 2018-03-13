<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:75:"H:\wxapplication\back\cwlw\application/../template/backend\position\add.php";i:1510382193;s:30:"../template/backend/header.php";i:1509894012;s:28:"../template/backend/menu.php";i:1510914950;s:34:"../template/backend/navigation.php";i:1509929596;s:30:"../template/backend/footer.php";i:1509897623;}*/ ?>
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
                        <h4><i class="icon-reorder"></i> 添加职位信息</h4>
                        <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <!--<a href="javascript:;" class="icon-remove"></a>-->
                            </span>
                    </div>
                    <div class="widget-body" height="800px">
                        <!-- BEGIN FORM-->
                        <form action="/index.php/backend/position/Add" class="form-horizontal" id="position_submit" method="post">
                            <div class="control-group">
                                <div class="span6">
                                    <label class="control-label">职位code</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" class="input-xlarge"  value="<?php echo $code; ?>"  name="code" id="code" readonly />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                                <div class="span6">
                                    <label class="control-label">职位名称</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" class="input-xlarge"    name="name" id="name"  />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                            </div>


                            <div class="control-group">
                                <div class="span6">
                                    <label class="control-label">公司名称</label>
                                    <div class="controls">
                                        <input type="hidden"  name="customer_code" id="customer_code"  />
                                        <input type="hidden"  name="customer_name" id="customer_name"  />
                                        <select class="input-xlarge" tabindex="1" name="customer_show_name" id="customer_show_name">
                                            <option value=""></option>
                                            <?php if(is_array($customer) || $customer instanceof \think\Collection || $customer instanceof \think\Paginator): $i = 0; $__LIST__ = $customer;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?>
                                                <option value="<?php echo $row['code']; ?>"><?php echo $row['name']; ?></option>
                                            <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="span6">
                                    <input type="hidden"  name="department_code" id="department_code"  />
                                    <label class="control-label">部门名称</label>
                                    <div class="controls">
                                        <select class="input-xlarge m-wrap" tabindex="1" name="department_name" id="department_name">
                                            <option value=""></option>

                                        </select>
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
                                <div class="span6">
                                    <label class="control-label">街道</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" class="input-xxlarge"  id="street"  name="street"  />
                                    </div>
                                </div>

                                <div class="span6">
                                    <label class="control-label">是否启用</label>
                                    <div class="controls">
                                        <input type="hidden"  name="enabled" id="enabled"  />
                                        <div id="success-toggle-button">
                                            <input type="checkbox" class="toggle" checked="checked" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="span6">
                                    <label class="control-label">开始日期</label>
                                    <div class="controls">
                                        <input id="start_date"　name="start_date"　 type="text" value="" size="16" class="m-ctrl-medium input-xlarge" readonly >
                                    </div>
                                </div>
                                <div class="span6">
                                    <label class="control-label">结束日期</label>
                                    <div class="controls">
                                        <input id="end_date"　name="end_date"　 type="text" value="" size="16" class="m-ctrl-medium input-xlarge" readonly >
                                    </div>
                                </div>
                            </div>
                            <!--<input type="hidden"  id="start_date"　name="start_date"  />
                            <input type="hidden"  id="end_date"　name="end_date"　  />-->

                            <div class="control-group">
                                <div class="span6">
                                    <label class="control-label">行业</label>
                                    <div class="controls">
                                        <select class="input-xlarge m-wrap" tabindex="1" name="mode" id="mode">
                                            <option value=""></option>
                                            <option value="工厂">工厂</option>
                                            <option value="IT行业">IT行业</option>
                                            <option value="其他">其他</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="span6">
                                    <label class="control-label">需求人数</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" class="input-xlarge" id="need_num" name="need_num"  />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="span6">
                                    <label class="control-label">工作经验</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" class="input-xlarge" id="work_year" name="work_year"  />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                                <div class="span6">
                                    <label class="control-label">学历</label>
                                    <div class="controls">
                                        <select class="input-xlarge m-wrap" tabindex="1" name="education" id="education">
                                            <option value="无要求">无要求</option>
                                            <option value="初中">初中</option>
                                            <option value="高中">高中</option>
                                            <option value="专科">专科</option>
                                            <option value="本科">本科</option>
                                            <option value="研究生">研究生</option>
                                            <option value="博士">博士</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="span6">
                                    <label class="control-label">工资范畴(最低)</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" class="input-xlarge" id="min_money" name="min_money"  />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                                <div class="span6">
                                    <label class="control-label">工资范畴(最高)</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" class="input-xlarge" id="max_money" name="max_money"  />
                                        <span class="help-inline"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="span6">
                                    <label class="control-label">全职</label>
                                    <div class="controls">
                                        <select class="input-xlarge m-wrap" tabindex="1" name="fulljob" id="fulljob">
                                            <option value="无要求">无要求</option>
                                            <option value="全职">全职</option>
                                            <option value="兼职">兼职</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="control-group">
                                <div class="span6">
                                    <label class="control-label">人员要求</label>
                                    <div class="controls">
                                        <textarea class="span12 wysihtmleditor5" rows="8"  id="request" name="request"  ></textarea>
                                    </div>
                                </div>
                                <div class="span6">
                                    <label class="control-label">工作职责</label>
                                    <div class="controls">
                                        <textarea class="span12 wysihtmleditor5" rows="8"  id="duty" name="duty"  ></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions">
                                <button type="submit" class="btn blue" id="Dsubmit"><i class="icon-ok"></i> 保存</button>
                                <button type="button" class="btn"><i class=" icon-remove"></i> 取消</button>
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
<script src="/static/assets/bootstrap/js/bootstrap.min.js"></script>

<!--<script src="/static/js/jquery-ui.js"></script>-->
<script type="text/javascript" src="/static/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>


<script type="text/javascript" src="/static/assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/static/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="/static/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

<script type="text/javascript" src="/static/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/static/assets/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="/static/assets/bootstrap-daterangepicker/daterangepicker.js"></script>
<script type="text/javascript" src="/static/assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="/static/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>


<!-- ie8 fixes -->
<!--[if lt IE 9]>
<script src="/static/js/excanvas.js"></script>
<script src="/static/js/respond.js"></script>
<![endif]-->

<!--<script src="/static/js/jquery.scrollTo.min.js"></script>-->

<!--common script for all pages-->
<script src="/static/js/common-scripts.js"></script>

<!--script for this page only-->
<script src="/static/js/area.js"></script>
<script src="/static/assets/layer/layer.js"></script>

<script>
    $(document).ready(function () {

    });

    $('#customer_show_name').change(function () {
        $('#customer_code').val(this.value);
        $('#customer_name').val($(this).find("option:selected").text());

        $.ajax({
            url: '/index.php/backend/position/getLocation',//"<?php url('/backend/position/getLocation'); ?>",//// 跳转到 action
            data: {
                'customer_code': this.value,
            },
            type: 'post',
            cache: false,
            dataType: 'json',
            success: function (res) {
                if (res.success == true) {
                    $('#province').val(res.province);
                    $('#province').trigger('change');
                    $('#city').val(res.city);
                    $('#city').trigger('change');
                    $('#city').val(res.city);
                    $('#town').val(res.town);
                    $('#street').val(res.street);
                } else {
                    layer.alert('获取失败', {icon: 2});
                }
            },
            error: function () {
                layer.alert('获取异常', {icon: 3});
            }
        });
    });
    
    
    $('#request').wysihtml5();
    $('#duty').wysihtml5();

    $(function(){
        window.prettyPrint && prettyPrint();
        $('#start_date').datepicker({
            format: 'yyyy-mm-dd'
        });
        $('#end_date').datepicker({
            format: 'yyyy-mm-dd'
        });
    });

    $('#success-toggle-button').toggleButtons({
        style: {
            // Accepted values ["primary", "danger", "info", "success", "warning"] or nothing
            enabled: "success",
            disabled: "info"
        }
    });

    $('#position_new').click(function () {
        location.href = "/index.php/backend/position/Add";
    });

    $('#position_del').click(function () {
        location.href = "backend/position/Del";
    });

    $('#Dsubmit').click(function () {  //alert($('#start_date').val());
        $('#position_submit').submit();
    });
</script>


<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
