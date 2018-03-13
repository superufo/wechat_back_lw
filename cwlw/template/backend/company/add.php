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
                                        <input type="text" placeholder="" class="input-xlarge"  value="{$code}"  name="code" id="code" readonly />
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
{include file="../template/backend/footer.php" /}
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
