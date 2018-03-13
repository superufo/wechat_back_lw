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
    <div class="container-fluid" >

        <!-- BEGIN PAGE HEADER-->
        {include file="../template/backend/navigation.php" /}
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
                                        <input type="text" placeholder="" class="input-xlarge"  value="{$code}"  name="code" id="code" readonly />
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
                                            {volist name="customer" id="row"}
                                                <option value="{$row.code}">{$row.name}</option>
                                            {/volist}
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
                                            {volist name="province" id="vo"}
                                                <option value="{$vo.name}" >{$vo.name}</option>
                                            {/volist}
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
{include file="../template/backend/footer.php" /}
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
