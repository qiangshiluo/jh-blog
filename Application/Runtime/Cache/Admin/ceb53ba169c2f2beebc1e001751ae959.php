<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--360浏览器优先以webkit内核解析-->


    <title>H+ 后台主题UI框架 - 主页示例</title>

    <link rel="shortcut icon" href="favicon.ico"> <link href="/Public/Admin/css/bootstrap.min.css?v=3.3.5" rel="stylesheet">
    <link href="/Public/Admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">

    <link href="/Public/Admin/css/animate.min.css" rel="stylesheet">
    <link href="/Public/Admin/css/style.min.css?v=4.0.0" rel="stylesheet">
    <base target="_blank">

</head>

<body class="gray-bg">
    <div class="row  border-bottom white-bg dashboard-header">
       <div class="col-sm-12">
            <blockquote class="text-warning" style="font-size:14px">您是否需要自己做一个博客web站，但是又缺乏html，PHP等知识…
                <br>您是否一直在苦苦寻找一款适合自己的博客系统…
                <br>您是否想做一款自己的web博客系统…
                <br>…………
                <h4 class="text-danger">那么，现在 J.H & Blog 来了</h4>
            </blockquote>
            <hr>
        </div>
        <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-4">

                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>关于 J.H & Blog</h5>
                    </div>
                    <div class="ibox-content">
                        <p>我们提供基于TinkPHP的开发服务，具体费用请联系作者。</p>
                        <ul>
                            <li>勤奋有余，天资不足，没有传奇的履历，也没有惊人天赋，只有对自由渴望。 命由天生，运由自转，中国就这么大，但总有些人不经意间成为上位者，看似荒诞不羁，但终究是有迹可循。</li>
                        </ul>
                    </div>
                </div>
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>作者信息</h5>

                    </div>
                    <div class="ibox-content">
                        <p><i class="fa fa-send-o"></i> 博客：<a href="http://jh12.cn" target="_blank">http://jh12.cn</a>
                        </p>
                        <p><i class="fa fa-qq"></i> Q Q  ：<a href="http://wpa.qq.com/msgrd?v=3&uin=852952656&site=qq&menu=yes" target="_blank">852952656</a>
                        </p>
                        <p><i class="fa fa-weixin"></i> 微信：<a href="javascript:;">we-chat521（A | 张某某）</a>
                        </p>
                    </div>
                </div>
            </div>
        <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>更新日志</h5>
                    </div>
                    <div class="ibox-content no-padding">
                        <div class="panel-body">
                            <div class="panel-group" id="version">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#version" href="#v40">v1.0.0</a><code class="pull-right">2016.10.16</code>
                                            </h5>
                                    </div>
                                    <div id="v40" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <ol>
                                                <li>作者开发 J.H & Blog 博客系统</li>
                                                <li>增加前台注册、登录等功能</li>
                                                <li>增加标签等功能</li>
                                                <li>增加后台</li>
                                                <li>增加后台RBAC权限管理系统</li>
                                                <li>增加TinkPHP 分页样式</li>
                                                <li>增加验证码功能</li>
                                                <li>增加邮箱注册功能</li>
                                                <li>增加微信找回密码功能</li>
                                                <li>增加点赞功能</li>
                                                <li>增加文章阅读+1功能</li>
                                                <li>增加百度UI功能</li>
                                                <li>其余正在完善 </li>
                                                
                                                <li>欢迎支持 J.H & Blog ，谢谢大家</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          <div class="col-sm-4">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5 >系统信息</h5>
                    </div>
                    <div class="ibox-content no-padding">
                        <div class="panel-body">
                            <div class="panel-group" id="version">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                       <h5 class="panel-title">系统</h5>
                                    </div>
                                    <div id="v40" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <ul>
                                                <li>框架信息 :  <a href="http://www.thinkphp.cn/">TinkPHP 3.2.2 </a></li>
                                                <br>
                                                <li>当前日期 : <?php echo ($newtime); ?></li>
                                                <br>
                                                <li>本 机 IP :  127.0.0.1</li>
                                                <br>
                                                <li>欢迎支持 J.H & Blog ，谢谢大家</li>
                                                <br>
                                                <li>如果您喜欢我们的博客开源系统,随意金额 打赏支付宝 : <a href="https://fu.alipay.com/transfer/index.htm">852952656@qq.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </script>
    <script src="/Public/Admin/js/jquery.min.js?v=2.1.4"></script>
    <script src="/Public/Admin/js/bootstrap.min.js?v=3.3.5"></script>
    <script src="/Public/Admin/js/plugins/layer/layer.min.js"></script>
    <script src="/Public/Admin/js/content.min.js"></script>
    <script src="/Public/Admin/js/welcome.min.js"></script>
</body>

</html>