<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo ($title); ?></title>
    <link rel="stylesheet" href="/themes/zhjc/Public/assets/css/Normalize.css">
    <link rel="stylesheet" href="/themes/zhjc/Public/assets/css/common.css">
    <link rel="stylesheet" href="/themes/zhjc/Public/assets/css/slider.css">
    <script src="/themes/zhjc/Public/assets/js/jquery.js"></script>
    <script src="/themes/zhjc/Public/assets/js/slider.js"></script>
    <script src="/themes/zhjc/Public/assets/js/common.js"></script>
    <!--引用百度地图API-->
    <style type="text/css">
        html,body{margin:0;padding:0;}
        .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
        .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
    </style>
    <script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
</head>
<body>
<div id="header">
    <div class="top">
        <div class="w1000 center clearfix">
            <div class="logo fl">
                <a href="#">
                    <img src="/themes/zhjc/Public/assets/img/logo.png" alt="logo">
                </a>
            </div>
            <div class="other fr">
                <a href="#" id="setHome">设为首页</a>
                <a href="#" id="addFavorite">加入收藏</a>
                <a class="no-border">联系电话：010-52693075</a>
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="w1000 center clearfix">
            <a href="/">首页</a>
            <a href="/index.php?g=portal&m=index&a=area">业务范围</a>
            <a href="/index.php?g=portal&m=index&a=about">关于我们</a>
            <a href="/index.php?g=portal&m=index&a=share">案例分享</a>
            <a href="/index.php?g=portal&m=index&a=law">法律法规</a>
            <a href="/index.php?g=portal&m=index&a=trade">知识产权交易</a>
            <a href="/index.php?g=portal&m=index&a=about">联系我们</a>
        </div>
    </div>

</div>

<div class="top-banner">
    <img src="/public/images/case_share.png" alt="">
</div>
<div class="bg p30">

    <div class='w1000 center route'>
        <span>您的位置：</span><a href="/">首页</a> <span> > </span><a href="#">法律法规</a>
    </div>

    <?php
 $tag = 'cid:6;order:post_date desc'; $posts = sp_sql_posts_paged($tag,2); ?>
    <div class="case-content w1000 center ">
        <?php if(is_array($posts['posts'])): foreach($posts['posts'] as $key=>$vo): ?><div class="case-item clearfix">
                <?php $smeta=json_decode($vo['smeta'],true); ?>
                <div class="fl thumb">
                    <img src="/data/upload/<?php echo ($smeta["thumb"]); ?>" alt="">
                </div>
                <div class="fr item">
                    <div class="title"><a href="#"><?php echo ($vo["post_title"]); ?></a></div>
                    <div class="summary">
                        <?php echo ($vo["post_excerpt"]); ?>
                    </div>
                    <div>
                        <a class="detail" href="#">详细>></a>
                    </div>
                </div>
            </div><?php endforeach; endif; ?>
    </div>

    <div class="case-pages-wrapper w1000 center"><ul class="pager"> <?php echo ($posts["page"]); ?></ul></div>
</div>
<div id=footer>
    <!--<dl>-->
    <!--<dd></dd>-->
    <!--<dd>以视觉方式显示信息的装置 ... ...</dd>-->
    <!--</dl>-->
    <!---->
    <div class="w1000 center clearfix">
        <div class="leftContent fl">
            <div class="c1 clearfix">
                <a href="/">
                    首页
                </a>
                <a href="/index.php?g=portal&m=index&a=area">
                    业务范围
                </a>
                <a href="/index.php?g=portal&m=index&a=about">
                    关于我们
                </a>
                <a href="/index.php?g=portal&m=index&a=share">
                    案例分享
                </a>
                <a href="/index.php?g=portal&m=index&a=law">
                    法律法规
                </a>
                <a href="/index.php?g=portal&m=index&a=contact">
                    联系我们
                </a>
            </div>
            <div class="c2 clearfix">
                <p class="fl"><span class="phone"></span>010-52693075/13520232384</p>
                <p class="fl"><span class="qq"></span>811099</p>
            </div>
            <div class="c3">
                <p>Copyright ©2017 北京智汇九诚国际知识产权代理有限公司版权所有</p>
                <p>
                    地址：北京市西城区华睦大厦608
                </p>
            </div>

        </div>
        <div class="fl">
            <img src="/themes/zhjc/Public/assets/img/qr.png" class="qr" alt="微信">
        </div>
    </div>

</div>
<script>
    $(function () {
        $('#slider1').bxSlider({
            mode: 'fade',
            auto: true
        });
        $('#slider2').bxSlider({

            slideWidth: 180,

            minSlides: 5,

            maxSlides: 5,

            moveSlides: 1,

            slideMargin: 25,

            pager: false

        });

    });

</script>
</body>
</html>