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

        <!-- BEGIN PAGE info-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN BASIC PORTLET-->
                <div class="widget blue">
                    <div class="widget-title">
                        <h4><i class="icon-reorder"></i> 话题列表</h4>
                        <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                            <!--<a href="javascript:;" class="icon-remove"></a>-->
                            </span>
                    </div>
                    <div class="widget-body">
                        <div class="span12">
                            <form class="form-horizontal" method="get" action="<?php url('backend/topic/index'); ?>"
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
                                    <label class="control-label">话题类型:</label>
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
                                            <input type="text" class="input" placeholder="" name="name" id="name"
                                                   value="{$Request.param.name}">
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
                                <button class="btn btn-warning" id="topic_new"><i class="icon-plus icon-white"></i> 新增
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
                                    <th><i class="icon-bullhorn"></i> 话题标题</th>
                                    <th><i class="icon-plus"></i> 话题id</th>
                                    <th><i class="icon-plus"></i> 话题文章</th>
                                    <th><i class="icon-plus"></i> 标签</th>
                                    <th><i class="icon-plus"></i> 配图</th>
                                    <th><i class="icon-plus"></i> 添加时间</th>
                                    <th><i class=" icon-edit"></i> 操作</th>
                                </tr>
                                </thead>

                                <tbody>
                                {volist name="data" id="item"}
                                <tr>
                                    <td><input type="checkbox" class="checkboxes" value="{$item.id}"/></td>
                                    <td><a href="#">{$item.title|mb_substr=0,15}</a></td>
                                    <td>{$item.id}</td>
                                    <td>{$item.info|mb_substr=0,15}</td>
                                    <td>{$item.topic_label}</td>
                                    <td>{$item.commnet_ids}</td>
                                    <td><img width="50" height="50" src="{$serverDddr}{$item.img}"></td>
                                    <td>
                                        <button class="btn btn-primary"><i class="icon-pencil"></i></button>
                                        <button class="btn btn-danger" onclick="deleteItem('{$item.id}')"><i
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
        <!-- END PAGE info-->
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
    $('#topic_new').click(function () {
        location.href = "/index.php/backend/topic/add";
    });

    $('#topic_del').click(function () {
        location.href = "backend/topic/Del";
    });

    $('#search').click(function () {
        $query = $('#search_form').serialize();
        location.href = "/backend/topic/index.html?".$query;
        //$('#search_form').submit();
    });

    function deleteItem(id) {
        $.ajax({
            url: '/index.php/backend/topic/del',// 跳转到 action
            data: {
                'id': id,
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
                                location.href = "<?php url('backend/topic/index'); ?>";
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
