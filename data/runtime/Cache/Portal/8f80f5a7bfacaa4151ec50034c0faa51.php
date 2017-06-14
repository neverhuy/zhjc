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
<?php $slides=sp_getslide('slide'); ?>
<div class="banner">

    <div class="slider" id="slider1">
        <?php if(is_array($slides)): foreach($slides as $key=>$vo): ?><a href="<?php echo ($vo["slide_url"]); ?>" class="slide" style="background-image:url('/data/upload/<?php echo ($vo["slide_pic"]); ?>');display: block;"></a><?php endforeach; endif; ?>
    </div>

</div>

<div class="content ">
    <!--公司简介-->
    <div class="intro">
        <div class="floor w1000 center">
            <h2>Company profile</h2>
            <h3>公司简介</h3>
            <section>
                <p>
                    北京智汇九诚国际知识产权代理有限公司是一家能够为客户提供全方位的知识产权服务的法律机构。我公司专注于知识产权法律服务领域，致力于为客户量身打造专属知识产权管理和保护策略。自成立以降，经过多年的稳定和健康发展完善，我公司的主营业务范围已涵盖：国内外商标、版权、植物新品种权、技术秘密以及反不正当竞争等多个知识产权相关法律领域。特别是在驰名、著名商标的认定，商标的授权疑难案件的处理，以及知识产权诉讼等领域积累了丰富的实践经验，并与相关部门建立起了的良好沟通和反馈渠道。</p>
            </section>
            <section>
                <p>
                    我公司拥有一支由资深律师、商标代理人、涉外知识产权专员、客户顾问、版权商标流程管理人员等专业人士组成的攻坚队伍，能够为客户提供稳定可靠、专业务实的知识产权服务。各专业团队紧密合作、相互配合，擅于将知识产权的保护与企业的发展规划相结合，协助企业评估自身知识产权法律风险，增强企业将知识产权管理保护与生产经营活动相协调的战略意识，并结合为企业定制的知识产权保护策略，积极促进企业实施知识产权战略，提升企业核心竞争力。</p>
            </section>
            <section>
                <p>
                    我公司的客户遍及工商业的各个领域，既有刚刚起步、发展势头强劲的新兴企业也有上市公司、驰名商标企业、行业十强、中国百强等行业领军企业。诸如：北京大学、中国农业科学院、仁和药业集团、鸿星尔克、中国东方演艺集团、中国家用电器研究院、北京倍舒特集团、北京中软华泰集团、巨人教育集团等。截至目前
                    ，我们已经成功地帮助客户申请获得了大量商标权，并帮助数以百计的商标权利人行使权利。凭借丰富的法律经验和技术专长，我们能够满足客户在知识产权保护各个方面的需求。</p>
            </section>
        </div>
    </div>
    <div class="advantage h590">
        <div class="floor w1000 center advantage-bg"></div>
    </div>
    <!--企业文化-->
    <div class="culture">
        <div class="floor w1000 center">
            <h2>corporate culture</h2>
            <h3>企业文化</h3>
            <section>
                <p>智者：智慧也，即知识产权。</p>
                <p>汇者：汇集，融合，积累之意，彰显我司脚踏实地，不断积累进取的精神。</p>
                <p>九者：九州华夏，泛指中华大地，延及全球。</p>
                <p>诚者：诚信也，诚信为本的经营理念是我司的核心价值要素与安身立命之本。</p>
                <p>智汇九诚：谐音意为，知识产权汇集积累就会成功。体现知识产权的重要性，以及从事知识产权服务需要全球法域思维的观念</p>
            </section>
            <section>
                <p>
                    我司以知识产权法律服务为自己的核心业务领域，通过诚信经营，不断为企业提供创造性的法律服务。以企业的市场为导向，强化“市场未动，知产先行”的保护战略，不断增强对市场的预防性保护，突出知识产权在企业发展规划中的作用，从而确立并扩大企业在本行业内的领先优势，增强企业的竞争优势，最终帮助企业达到“市场”与“知产”良性互动的状态。</p>
            </section>
            <section>
                <p>
                    “智汇九诚”的全体员工，秉承诚实信用的服务理念，以为企业提供全方位的知识产权服务为使命，深度把控市场导向，强化全球法域思维，着眼于创造性的为企业提供专业化、细节化、前瞻性的知识产权保护策略，定会为您企业的发展、繁荣提供强大助力。</p>
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