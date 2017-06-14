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
<!--banner start-->
<?php $slides=sp_getslide('slide'); ?>
<div class="banner">

    <div class="slider" id="slider1">
        <?php if(is_array($slides)): foreach($slides as $key=>$vo): ?><a href="<?php echo ($vo["slide_url"]); ?>" class="slide" style="background-image:url('/data/upload/<?php echo ($vo["slide_pic"]); ?>');display: block;"></a><?php endforeach; endif; ?>
    </div>

</div>
<!--banner end-->

<div class="content ">
    <!--业务范围-->
    <div class="business">
        <div class="floor w1000 center">
            <h2>SCOPE OF BUSINESS</h2>
            <h3>业务范围</h3>
            <!--slider start-->
            <div class="slider" id='slider2'>
                <a href="/index.php?g=portal&m=index&a=area" style="display:block;" class='slide item1'>
                    <p class="item_img center"></p>
                    <p class="item_title">驰名商标</p>
                    <p class="item_title2">The urgent problems</p>
                </a>

                <a href="/index.php?g=portal&m=index&a=area&cat=加急疑难" style="display: block" class='slide item2'>
                    <p class="item_img center"></p>
                    <p class="item_title">加急疑难</p>
                    <p class="item_title2"> Commercial franchise record </p>
                </a>
                <a href="/index.php?g=portal&m=index&a=area&cat=商业特许备案" style="display: block" class='slide item3'>
                    <p class="item_img center"></p>
                    <p class="item_title">商业特许备案</p>
                    <p class="item_title2"> Commercial franchise record</p>
                </a>
                <a href="/index.php?g=portal&m=index&a=area&cat=商标注册" style="display: block" class='slide item4'>
                    <p class="item_img center"></p>
                    <p class="item_title">商标注册</p>
                    <p class="item_title2">Trademark registration</p>
                </a>
                <a href="/index.php?g=portal&m=index&a=area&cat=商标转让" style="display: block" class='slide item5'>
                    <p class="item_img center"></p>
                    <p class="item_title">商标转让/变更</p>
                    <p class="item_title2">Trademark transfer / change</p>
                </a>
            </div>
            <!--slider end-->
        </div>
    </div>

    <!--关于我们-->
    <div class="about">
        <div class="floor w1000 center">
            <h2>ABOUT US</h2>
            <h3>关于我们</h3>

            <section>
                北京智汇九诚国际知识产权代理有限公司是一家为客户提供全方位知识产权服务的专业法律机构，热忱致力于在知识产权领域，为公众及企业界提供全面的法律与技术支持。经过持续、稳定的发展，“智汇九诚” 的主营业务范围遍及商标、专利、版权、国际知识产权及相关法律事务等领域，如商标交易，国际国内商标注册查询、申请，驰名商标认定；国际国内专利申请、专利复审、行政诉讼、维权；版权登记与维权；海关备案；知识产权托管等综合型的国际公司
            </section>

            <a class="more center" href="/index.php?g=portal&m=index&a=about">查看更多</a>
        </div>
    </div>

    <!--成功案例-->
    <?php $tag = 'cid:3;order:post_date desc'; $posts = sp_sql_posts_paged($tag,8); ?>
    <div class="case h685">
        <div class="floor w1000 center">
            <h2>SUCCESSFUL CASE</h2>
            <h3>成功案例</h3>
            <div class="cases-wrapper clearfix">
                <ul class="cases">
                    <?php if(is_array($posts['posts'])): foreach($posts['posts'] as $key=>$vo): $smeta=json_decode($vo['smeta'],true); ?>
                        <li>
                            <a href="/index.php?g=portal&m=index&a=detail&pid=<?php echo ($vo["object_id"]); ?>" class="case-img">
                                <img src="/data/upload/<?php echo ($smeta["thumb"]); ?>" alt="">
                            </a>
                            <a class="case-name" href="/index.php?g=portal&m=index&a=detail&pid=<?php echo ($vo["object_id"]); ?>"><?php echo ($vo["post_title"]); ?></a>
                        </li><?php endforeach; endif; ?>
                </ul>
            </div>

            <a class="more center" href="/index.php?g=portal&m=index&a=succ">查看更多</a>

        </div>
    </div>

    <!--企业动态-->
    <div class="state">
        <div class="floor w1000 center">
            <h2>BUSINESS MOVEMENT</h2>
            <h3>企业动态</h3>
            <section>
                <div class="item item1">
                    <p>2017-10-10</p>
                    <p>
                        我司代理“特化苏”家具类商标三成功驰名商标“九里诱惑”
                    </p>
                </div>
                <div class="item item2">
                    <p>2017-10-10</p>
                    <p>
                        我司代理“特化苏”家具类商标三成功驰名商标“九里诱惑”
                    </p>
                </div>
                <div class="item item3">
                    <p>2017-10-10</p>
                    <p>
                        我司代理“特化苏”家具类商标三成功驰名商标“九里诱惑”
                    </p>
                </div>
                <div class="item item4">
                    <p>2017-10-10</p>
                    <p>
                        我司代理“特化苏”家具类商标三成功驰名商标“九里诱惑”
                    </p>
                </div>
                <div class="item item5">
                    <p>2017-10-10</p>
                    <p>
                        我司代理“特化苏”家具类商标三成功驰名商标“九里诱惑”
                    </p>
                </div>
            </section>
            <a class='more center' href="#">查看更多</a>
        </div>
    </div>


    <!--联系我们-->
    <div class="address h470">
        <div class="floor w1000 center">
            <h2>CONTACT US</h2>
            <h3>联系我们</h3>
            <section>
                <div class="left fl">
                    <p>公司地址：北京市西城区华睦大厦608</p>
                    <p class="p1">服务热线：010-52693075/13520232384</p>
                    <p class="p2">公司邮箱：zhihuijiucheng@126.com</p>
                    <p class="p3">QQ： 26930752</p>
                </div>
                <div class="right fr">
                    <div style="width:597px;height:256px;border:#ccc solid 1px;" id="dituContent"></div>
                    <!--百度地图容器-->
                    <script type="text/javascript">
                        //创建和初始化地图函数：
                        function initMap(){
                            createMap();//创建地图
                            setMapEvent();//设置地图事件
                            addMapControl();//向地图添加控件
                            addMarker();//向地图中添加marker
                        }

                        //创建地图函数：
                        function createMap(){
                            var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
                            var point = new BMap.Point(116.331249,39.889262);//定义一个中心点坐标
                            map.centerAndZoom(point,17);//设定地图的中心点和坐标并将地图显示在地图容器中
                            window.map = map;//将map变量存储在全局
                        }

                        //地图事件设置函数：
                        function setMapEvent(){
                            map.disableDragging();//禁用地图拖拽事件
                            map.disableScrollWheelZoom();//禁用地图滚轮放大缩小，默认禁用(可不写)
                            map.disableDoubleClickZoom();//禁用鼠标双击放大
                            map.disableKeyboard();//禁用键盘上下左右键移动地图，默认禁用(可不写)
                        }

                        //地图控件添加函数：
                        function addMapControl(){
                        }

                        //标注点数组
                        var markerArr = [{title:"北京智汇九诚国际知识产权代理有限公司",content:"我的备注",point:"116.331276|39.889304",isOpen:0,icon:{w:23,h:25,l:46,t:21,x:9,lb:12}}
                        ];
                        //创建marker
                        function addMarker(){
                            for(var i=0;i<markerArr.length;i++){
                                var json = markerArr[i];
                                var p0 = json.point.split("|")[0];
                                var p1 = json.point.split("|")[1];
                                var point = new BMap.Point(p0,p1);
                                var iconImg = createIcon(json.icon);
                                var marker = new BMap.Marker(point,{icon:iconImg});
                                var iw = createInfoWindow(i);
                                var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
                                marker.setLabel(label);
                                map.addOverlay(marker);
                                label.setStyle({
                                    borderColor:"#808080",
                                    color:"#333",
                                    cursor:"pointer"
                                });

                                (function(){
                                    var index = i;
                                    var _iw = createInfoWindow(i);
                                    var _marker = marker;
                                    _marker.addEventListener("click",function(){
                                        this.openInfoWindow(_iw);
                                    });
                                    _iw.addEventListener("open",function(){
                                        _marker.getLabel().hide();
                                    })
                                    _iw.addEventListener("close",function(){
                                        _marker.getLabel().show();
                                    })
                                    label.addEventListener("click",function(){
                                        _marker.openInfoWindow(_iw);
                                    })
                                    if(!!json.isOpen){
                                        label.hide();
                                        _marker.openInfoWindow(_iw);
                                    }
                                })()
                            }
                        }
                        //创建InfoWindow
                        function createInfoWindow(i){
                            var json = markerArr[i];
                            var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
                            return iw;
                        }
                        //创建一个Icon
                        function createIcon(json){
                            var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
                            return icon;
                        }

                        initMap();//创建和初始化地图
                    </script>
                </div>
            </section>
        </div>
    </div>
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