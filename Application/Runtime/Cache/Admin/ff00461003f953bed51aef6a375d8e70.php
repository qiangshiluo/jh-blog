<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title></title>
    <link rel="shortcut icon" href="favicon.ico"> <link href="/Public/Admin/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/Public/Admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">

    <link href="/Public/Admin/css/animate.min.css" rel="stylesheet">
    <link href="/Public/Admin/css/style.min.css?v=4.0.0" rel="stylesheet"><base target="_blank">

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox">
                    <div class="ibox-content">
                        <h2>评 论  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-sm btn-default">评论申请</button></h2>
                      
                        <div class="input-group">
                            <input type="text" placeholder="查找评论" class="input form-control">
                            <span class="input-group-btn">
                                        <button type="button" class="btn btn btn-primary"> <i class="fa fa-search"></i> 搜索</button>
                                </span>
                        </div>
                        <div class="clients-list">
                            <ul class="nav nav-tabs">
                                <span class="pull-right small text-muted"> 6 个评论</span>
                                <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i> 评 论</a>
                                </li>

                                </li>

                              
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="full-height-scroll">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-hover">
                                                <tbody>
                                                    <tr>
                                                        <th>&nbsp;&nbsp;&nbsp;文章标题</th>
                                                        <th>评论内容</th>
                                                        <th>查看详情</th>
                                                        <th>状态</th>
                                                        <th>删除</th>
                                                    </tr>  
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
    <script src="/Public/Admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="/Public/Admin/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/Public/Admin/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="/Public/Admin/js/content.min.js?v=1.0.0"></script>
    <script>
        $(function(){$(".full-height-scroll").slimScroll({height:"100%"})});
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>