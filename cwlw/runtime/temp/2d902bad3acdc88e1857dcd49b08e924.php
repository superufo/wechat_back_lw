<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:76:"F:\wxapplication\back\cwlw\application/../template/backend\company\index.php";i:1510223758;s:30:"../template/backend/header.php";i:1509894012;s:28:"../template/backend/menu.php";i:1510914950;s:34:"../template/backend/navigation.php";i:1509929596;s:30:"../template/backend/footer.php";i:1509897623;}*/ ?>
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
    <link href="/static/css/style-responsive.css" rel="stylesheet"/>
    <link href="/static/css/style-default.css" rel="stylesheet" id="style_color"/>

    <!--<link href="/static/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="/static/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen">
     <link href="/static/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
     <link rel="stylesheet" type="text/css" href="/static/assets/uniform/css/uniform.default.css" />
     <script src="/static/assets/layer/theme/default/layer.css"></script>-->
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
                <!-- BEGIN BASIC PORTLET-->
                <div class="widget blue">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i> 企业列表</h4>
                        <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                            <!--<a href="javascript:;" class="icon-remove"></a>-->
                            </span>
                    </div>
                    <div class="widget-body">
                        <div class="span12">
                            <form class="form-horizontal" method="get" action="<?php url('backend/company/index'); ?>"
                                  id="search_form">
                                <div class="span3">
                                    <div class="control-group">
                                        <label class="control-label">公司名:</label>
                                        <div class="controls controls-row">
                                            <input type="text" class="input" placeholder="" name="name" id="name"
                                                   value="<?php echo \think\Request::instance()->param('name'); ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="span3">
                                    <label class="control-label">企业类型:</label>
                                    <div class="controls controls-row">
                                        <select class="input" tabindex="1" name="type" id="type"
                                                value="<?php echo \think\Request::instance()->param('type'); ?>">
                                            <option value=""></option>
                                            <option value="国企">国企</option>
                                            <option value="外资">港资</option>
                                            <option value="外资">台资</option>
                                            <option value="外资">欧美</option>
                                            <option value="民营">民营</option>
                                            <option value="其他">其他</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="span4">
                                    <div class="control-group">
                                        <label class="control-label">地区:</label>
                                        <div class="controls controls-row">
                                            <select class="input-small" name="province" id="province"
                                                    onchange="loadRegion('province',2,'city','getRegion');"
                                                    value="<?php echo \think\Request::instance()->param('province'); ?>">
                                                <option value="0" selected>省份</option>
                                                <?php if(is_array($province) || $province instanceof \think\Collection || $province instanceof \think\Paginator): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                                <option value="<?php echo $vo['name']; ?>"><?php echo $vo['name']; ?></option>
                                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                            <select class="input-small" name="city" id="city"
                                                    onchange="loadRegion('city',3,'town','getRegion');"
                                                    value="<?php echo \think\Request::instance()->param('city'); ?>">
                                                <option value="0">市/县</option>
                                            </select>
                                            <select class="input-small" name="town" id="town"
                                                    value="<?php echo \think\Request::instance()->param('town'); ?>">
                                                <option value="0">镇/区</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="span2">
                                    <button id="search" class="btn btn-info"><i class="icon-search"></i> 搜索</button>
                                </div>
                            </form>
                        </div>


                        <div class="clearfix">
                            <div class="btn-group">
                                <button class="btn"><i class="icon-eye-open"></i> 显示</button>
                                <button class="btn btn-warning" id="company_new"><i class="icon-plus icon-white"></i> 新增
                                </button>
                                <button class="btn btn-inverse"><i class="icon-refresh icon-white"></i> 刷新</button>
                                <button class="btn btn-danger"><i class="icon-remove icon-white"></i> 删除</button>
                                <!--<button class="btn btn-primary"><i class="icon-pencil icon-white"></i> 编辑</button>
                                <button class="btn btn-info"><i class="icon-ban-circle icon-white"></i> 取消</button>
                                <button class="btn btn-success"><i class="icon-ok icon-white"></i> 批准</button>-->
                            </div>
                            <div class="btn-group pull-right">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i
                                            class="icon-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Print</a></li>
                                    <li><a href="#">Save as PDF</a></li>
                                    <li><a href="#">Export to Excel</a></li>
                                </ul>
                            </div>


                            <!--hidden-phone icon-bookmark icon-edit   table-striped table-bordered -->
                            <table class="table table-striped table-bordered table-advance table-hover">
                                <thead>
                                <tr>
                                    <th style="width:8px;"><input type="checkbox" class="group-checkable"
                                                                  data-set="#sample_1 .checkboxes"/></th>
                                    <th><i class="icon-bullhorn"></i> 公司名称</th>
                                    <th><i class="icon-plus"></i> 公司code</th>
                                    　
                                    <th><i class="icon-plus"></i> 公司简称</th>
                                    <th><i class="icon-plus"></i> 公司类型</th>
                                    <th><i class="icon-plus"></i> 所在省市镇</th>
                                    <th><i class="icon-plus"></i> 所在街道</th>
                                    <th><i class="icon-plus"></i> 营业证号</th>
                                    <th><i class="icon-plus"></i> 营业证书</th>
                                    <th><i class="icon-plus"></i> 公司网址</th>
                                    <th><i class="icon-plus"></i> 公司微信</th>
                                    <th><i class="icon-plus"></i> 联系人</th>
                                    <th><i class="icon-plus"></i> 联系电话</th>
                                    <th><i class="icon-plus"></i> 介绍</th>
                                    <th><i class=" icon-edit"></i> 操作</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                                <tr>
                                    <td><input type="checkbox" class="checkboxes" value="<?php echo $item['code']; ?>"/></td>
                                    <td><a href="#"><?php echo $item['name']; ?></a></td>
                                    <td><?php echo $item['code']; ?></td>
                                    <td><?php echo $item['short_name']; ?></td>
                                    <td><?php echo $item['type']; ?></td>
                                    <td><?php echo $item['province']; ?><?php echo $item['city']; ?><?php echo $item['town']; ?></td>
                                    <td><?php echo mb_substr($item['street'],0,15); ?></td>
                                    <td><?php echo $item['certno']; ?></td>
                                    <td><img width="50" height="50" src="<?php echo $serverDddr; ?><?php echo $item['cert_img']; ?>"></td>
                                    <td><?php echo $item['url']; ?></td>
                                    <td><?php echo $item['weixin']; ?></td>
                                    <td><?php echo $item['contact']; ?></td>
                                    <td><?php echo $item['contact_phone']; ?></td>
                                    <td>
                                        <span class="label label-important label-mini"><?php echo mb_substr($item['introduce'],0,15); ?></span>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                                        <button class="btn btn-danger" onclick="deleteItem('<?php echo $item['code']; ?>')"><i
                                                    class="icon-trash "></i></button>
                                    </td>
                                </tr>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span6">
                            <?php echo $pageHint; ?>
                        </div>

                        <div class="span6">
                            <?php echo $pageHtml; ?>
                        </div>
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
<script src="/static/js/jquery.nicescroll.js" type="text/javascript"></script>
<script type="text/javascript" src="/static/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js"></script>
<script type="text/javascript" src="/static/assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="/static/assets/fullcalendar/fullcalendar/fullcalendar.min.js"></script>
<script src="/static/assets/bootstrap/js/bootstrap.min.js"></script>

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
    $('#company_new').click(function () {
        location.href = "/index.php/backend/company/add";
    });

    $('#company_del').click(function () {
        location.href = "backend/company/Del";
    });

    $('#search').click(function () {
        $query = $('#search_form').serialize();
        location.href = "/backend/company/index.html?".$query;
        //$('#search_form').submit();
    });

    function deleteItem(code) {
        $.ajax({
            url: '/index.php/backend/company/del',// 跳转到 action
            data: {
                'code': code,
            },
            type: 'post',
            cache: false,
            dataType: 'json',
            success: function (res) {
                if (res.success == true) {
                    layer.alert('删除成功',
                        {
                            icon: 1,
                            end: function () {
                                location.href = "<?php url('backend/company/index'); ?>";
                            }
                        });
                } else {
                    layer.alert('删除失败', {icon: 2});
                }
            },
            error: function () {
                layer.alert('删除异常', {icon: 3});
            }
        });
    }

    //       //2.$.ajax序列化表格内容为字符串的异步请求
    //       function noTips(){
    //           var formParam = $("#form1").serialize();//序列化表格内容为字符串
    //           $.ajax({
    //               type:'post',
    //               url:'Notice_noTipsNotice',
    //               data:formParam,
    //               cache:false,
    //               dataType:'json',
    //               success:function(data){
    //               }
    //           });
    //       }
    //
    //
    //       //3.$.ajax拼接url的异步请求
    //       var yz=$.ajax({
    //           type:'post',
    //           url:'validatePwd2_checkPwd2?password2='+password2,
    //           data:{},
    //           cache:false,
    //           dataType:'json',
    //           success:function(data){
    //               if( data.msg =="false" ) //服务器返回false，就将validatePassword2的值改为pwd2Error，这是异步，需要考虑返回时间
    //               {
    //                   textPassword2.html("<font color='red'>业务密码不正确！</font>");
    //                   $("#validatePassword2").val("pwd2Error");
    //                   checkPassword2 = false;
    //                   return;
    //               }
    //           },
    //           error:function(){}
    //       });
    //
    //
    //       //4.$.ajax拼接data的异步请求
    //       $.ajax({
    //           url:'<%=request.getContextPath()%>/kc/kc_checkMerNameUnique.action',
    //           type:'post',
    //           data:'merName='+values,
    //           async : false, //默认为true 异步
    //           error:function(){
    //               alert('error');
    //           },
    //           success:function(data){
    //               $("#"+divs).html(data);
    //           }
    //       });
</script>


<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
