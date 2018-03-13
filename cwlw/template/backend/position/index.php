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

    <link href="/static/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
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
                        <h4><i class="icon-reorder"></i> 职位列表</h4>
                        <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                        </span>
                    </div>
                    <div class="widget-body">
                        <div class="span12">
                            <form class="form-horizontal" method="get" action="<?php url('backend/position/index'); ?>"
                                  id="search_form">
                                <div class="span3">
                                    <div class="control-group">
                                        <label class="control-label">职位名:</label>
                                        <div class="controls controls-row">
                                            <input type="text" class="input" placeholder="" name="name" id="name"
                                                   value="{$Request.param.name}">
                                        </div>
                                    </div>
                                </div>
                                <div class="span3">
                                    <label class="control-label">行业类型:</label>
                                    <div class="controls controls-row">
                                        <select class="input" tabindex="1" name="mode" id="mode"
                                                value="{$Request.param.mode}">
                                            <option value=""></option>
                                            <option value="工厂">工厂</option>
                                            <option value="IT行业">IT行业</option>
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
                                <button class="btn btn-warning" id="position_new"><i class="icon-plus icon-white"></i> 新增
                                </button>
                                <button class="btn btn-inverse"><i class="icon-refresh icon-white"></i> 刷新</button>
                                <button class="btn btn-danger"><i class="icon-remove icon-white"></i> 删除</button>
                            </div>
                            <div class="btn-group pull-right">
                                <button class="btn dropdown-toggle" data-toggle="dropdown">工具 <i
                                            class="icon-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#">Print</a></li>
                                    <li><a href="#">Save as PDF</a></li>
                                    <li><a href="#">Export to Excel</a></li>
                                </ul>
                            </div>
                            
                            <table class="table table-striped table-bordered table-advance table-hover">
                                <thead>
                                <tr>
                                    <th style="width:8px;"><input type="checkbox" class="group-checkable"
                                                                  data-set="#sample_1 .checkboxes"/></th>
                                    <th><i class="icon-bullhorn"></i> 职位名称</th>
                                    <th><i class="icon-plus"></i> 职位code</th>
                                    <th><i class="icon-plus"></i> 招聘企业</th>
                                    <th><i class="icon-plus"></i> 所属部门</th>
                                    <!--<th><i class="icon-plus"></i> 招聘起始时间</th>
                                    <th><i class="icon-plus"></i> 招聘结束时间</th>-->
                                    <th><i class="icon-plus"></i> 招聘人数</th>
                                    <th><i class="icon-plus"></i> 应聘人数</th>
                                    <th><i class="icon-plus"></i> 工作地点</th>
                                    <th><i class="icon-plus"></i> 最低薪资</th>
                                    <th><i class="icon-plus"></i> 最高薪资</th>
                                    <th><i class="icon-plus"></i> 工作经验</th>
                                    <th><i class="icon-plus"></i> 要求学历</th>
                                    <th><i class="icon-plus"></i> 行业</th>
                                    <th><i class=" icon-edit"></i> 操作</th>
                                </tr>
                                </thead>

                                <tbody>
                                <!--{empty name="data"}
                                <tr>
                                    <td　style="colspan:16" > 没有可以显示的记录 </td>
                                </tr>
                                {/empty}-->

                                {volist name="data" id="item"}
                                <tr>
                                    <td><input type="checkbox" class="checkboxes" value="{$item.code}"/></td>
                                    <td><a href="#">{$item.name}</a></td>
                                    <td>{$item.code}</td>
                                    <td>{$item.customer_name}</td>
                                    <td>{$item.department_name}</td>
                                    <!--<td>{$item.start_date}</td>
                                    <td>{$item.end_date}</td>-->
                                    <td>{$item.need_num}</td>
                                    <td>{$item.finish_num}</td>
                                    <td>{$item.province}{$item.city}{$item.town}{$item.street|mb_substr=0,15}</td>
                                    <td>{$item.min_money}</td>
                                    <td>{$item.max_money}</td>
                                    <td>{$item.work_year}</td>
                                    <td>{$item.education}</td>
                                    <td>{$item.mode}</td>
                                    <td>
                                        <button class="btn btn-primary"><i class="icon-eye-open"></i>详情</button>
                                        <button class="btn btn-primary"><i class="icon-user"></i>查看简历</button>
                                        <button class="btn btn-primary"><i class="icon-pencil"></i>编辑</button>
                                        <button class="btn btn-danger" onclick="deleteItem('{$item.code}')"><i
                                                    class="icon-trash "></i>删除</button>
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
    $('#position_new').click(function () {
        location.href = "/index.php/backend/position/add";
    });

    $('#position_del').click(function () {
        location.href = "backend/position/Del";
    });

    $('#search').click(function () {
        $query = $('#search_form').serialize();
        location.href = "/backend/position/index.html?".$query;
        //$('#search_form').submit();
    });

    function deleteItem(code) {
        $.ajax({
            url: '/index.php/backend/position/del',// 跳转到 action
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
                                location.href = "<?php url('backend/position/index'); ?>";
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
</script>


<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
