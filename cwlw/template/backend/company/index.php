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
{include file="../template/backend/header.php" /}
<!-- END HEADER -->


<!-- BEGIN CONTAINER -->
<div id="container" class="row-fluid">
    <!-- BEGIN SIDEBAR -->
    {include file="../template/backend/menu.php" /}
    <!-- END SIDEBAR MENU -->
</div>
</div>
<!-- END SIDEBAR -->
<!-- BEGIN PAGE -->
<div id="main-content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">

        <!-- BEGIN PAGE HEADER-->
        {include file="../template/backend/navigation.php" /}
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
                                                   value="{$Request.param.name}">
                                        </div>
                                    </div>
                                </div>
                                <div class="span3">
                                    <label class="control-label">企业类型:</label>
                                    <div class="controls controls-row">
                                        <select class="input" tabindex="1" name="type" id="type"
                                                value="{$Request.param.type}">
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
                                                    value="{$Request.param.province}">
                                                <option value="0" selected>省份</option>
                                                {volist name="province" id="vo"}
                                                <option value="{$vo.name}">{$vo.name}</option>
                                                {/volist}
                                            </select>
                                            <select class="input-small" name="city" id="city"
                                                    onchange="loadRegion('city',3,'town','getRegion');"
                                                    value="{$Request.param.city}">
                                                <option value="0">市/县</option>
                                            </select>
                                            <select class="input-small" name="town" id="town"
                                                    value="{$Request.param.town}">
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
                                {volist name="data" id="item"}
                                <tr>
                                    <td><input type="checkbox" class="checkboxes" value="{$item.code}"/></td>
                                    <td><a href="#">{$item.name}</a></td>
                                    <td>{$item.code}</td>
                                    <td>{$item.short_name}</td>
                                    <td>{$item.type}</td>
                                    <td>{$item.province}{$item.city}{$item.town}</td>
                                    <td>{$item.street|mb_substr=0,15}</td>
                                    <td>{$item.certno}</td>
                                    <td><img width="50" height="50" src="{$serverDddr}{$item.cert_img}"></td>
                                    <td>{$item.url}</td>
                                    <td>{$item.weixin}</td>
                                    <td>{$item.contact}</td>
                                    <td>{$item.contact_phone}</td>
                                    <td>
                                        <span class="label label-important label-mini">{$item.introduce|mb_substr=0,15}</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                                        <button class="btn btn-danger" onclick="deleteItem('{$item.code}')"><i
                                                    class="icon-trash "></i></button>
                                    </td>
                                </tr>
                                {/volist}
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="row-fluid">
                        <div class="span6">
                            {$pageHint}
                        </div>

                        <div class="span6">
                            {$pageHtml}
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
{include file="../template/backend/footer.php" /}
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
