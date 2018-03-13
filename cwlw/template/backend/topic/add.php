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
