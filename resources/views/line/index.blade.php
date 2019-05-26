<!DOCTYPE html>
<html>
<head>
    <title>饭宝赚</title>
    <meta name="keywords" content="试客小兵,应用试客,多点应用号,应用试客官网,北京多点科技股份有限公司,北京多点科技官网,广告激励平台,App试玩,手机赚钱,积米">
    <!--<meta name="description" content="网站描述">-->
    <meta charset="utf-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!--    <script src="static/js/rem.js"></script>-->
    <link rel="apple-touch-icon-precomposed" href="{{ asset('uploads/images/icon/logo.jpg') }}">
    <link rel="bookmark"  type="image/x-icon"  href="{{ asset('uploads/images/icon/fan_logo.ico') }}"/>
    <link rel="shortcut icon" href="{{ asset('uploads/images/icon/fan_logo.ico') }}">
    <link href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css" rel="stylesheet">
    <link href="https://cdn.bootcss.com/animate.css/3.5.2/animate.min.css" rel="stylesheet">
    <link href="{{ asset('css/line/index.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/line/common.css') }}" type="text/css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <style type="text/css">
        
    </style>

    <script>
        var u = navigator.userAgent;
        var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1;
        if (isAndroid) {
            // window.location.href = 'readearn.html';
        }

    </script>
    <script>
        //声明_czc对象:
        var _czc = _czc || [];
        //绑定siteid，请用您的siteid替换下方"XXXXXXXX"部分
        window._czc.push(["_setAccount", "1271319646"]);
    </script>
    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " //");
    document.write(unescape("%3Cspan style='display:none;' id='cnzz_stat_icon_1271319646'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1271319646' type='text/javascript'%3E%3C/script%3E"));
    document.getElementById("cnzz_stat_icon_1271319646").style.display = "none";</script>
</head>
<body style="background-color: #ffffff;">
<div>


    <!-- 广告banner -->
    <div id="bannerList" class="swiper-container" style="width: 100%;"></div>

    <!-- 滚动公告 -->
    <div class="scroll-notice-wrap">
        <div class="scroll-notice">
            <div class="t_news">
                <b><img src="{{ asset('images/line/gonggaon.png') }}" alt="" style="width: 18px;display: inline;float: left;margin-left: 6%;
    margin-top: 10px;"></b>
                <!--<ul class="line news_li" id="scroll_notice">-->

                <!--</ul>-->
                <div class="scroll-text" id="scroll-text">
                    <!--<marquee direction="up" truespeed="truespeed" height="36px" behavior="scroll" scrollamount="3" scrolldelay="100">-->
                        <div class="scroll-auto scroll-text1"></div>
                        <div class="scroll-auto scroll-text2"></div>
                    <!--</marquee>-->
                </div>
            </div>
        </div>
        <!-- http://static.jimivip.com/static/images/index/kefu.png onclick="kefu()"-->
        <a href="{{ route('line.gonglue')}}"><img  class="gotofonglue" src="uploads/images/icon/gonglue.png"></a>
        
    </div>


    <div class="ub ub-pj ub-ac ub-pc" style="padding: 0.6em 1.3em 0;">
        <div class="ub ub-ac">
            <div class="ub ub-ac ub-pc t-line">

            </div>
            <div class="ub ub-ac ub-pc" style="color: #333333;font-size: 1em;font-weight: 500">
                赚钱优选
            </div>
        </div>
        <div class="ub ub-ac" style="font-size: 0.8675em;color: #8e8e93;">
            <span id="checkPeopleNum"></span>人正在试玩中
        </div>
    </div>

    <!-- 试玩列表列表 -->
    <div id="tabTryPlayList" class="classCopy">
        <div id="tryPlayList" class="bc-wh pdl"></div>
    </div>

    <div class="fheight"></div>
    <!---底部添加主窗口提示栏-->
    <div class="bottom-tip-wrap">
        <div class="bottom-tip">
            添加永久赚钱入口
        </div>
        <div class="close-entry">

        </div>
    </div>
   <!--  <div class="index-bottom-guide">
        <img src="static/images/index/icon-youbei1.png"/>
        <div class="index-bottom-guide-text">
            <div class="index-bottom-guide-text1">友贝永久访问入口</div>
            <div class="index-bottom-guide-text2">让赚钱变得更简单</div>
        </div>
        <div class="index-button-down">立即安装</div>
        <div class="index-button-close">以后再说</div>
    </div>
    <div class="down-yb-mask">
        <div class="down-youbei">
            <div class="down-yb-close"></div>
            <div class="down-yb-title">安装入口</div>
            <div class="down-yb-intro">让您更加便捷的使用友贝</div>
            <div class="down-yb-bg">
                <div class="down-yb-tip">输入锁屏密码即可安装</div>
                <div class="down-yb-button">立即安装</div>
            </div>
        </div>
    </div> -->

    <!--1215版本菜单-->
    <div style="height: 3.6em;"></div>
    <div class="footer">
        <div class="ub footer-inner clearfloat">
            <a href="javascript:;" onclick="_czc.push(['_trackEvent','底部','试玩赚钱']);" class="ub ub-pc ub-ac ub-f1 ub-ver item actived">
                <figure>
                    <img src="http://static.jimivip.com/static/images/index/index.png" alt="">
                </figure>
                <div>试玩赚钱</div>
            </a>
            <a href="{{ route('line.recommend')}}" onclick="_czc.push(['_trackEvent','底部','推荐']);" class="ub ub-pc ub-ac ub-f1 ub-ver item">
                <figure>
                    <img src="http://static.jimivip.com/static/images/index/recommend.png" alt="">
                </figure>
                <div>推荐</div>
            </a>
            <a class="ub ub-pc ub-ac ub-f1 ub-ver item" href="{{ route('line.reader')}}" onclick="_czc.push(['_trackEvent','底部','阅读赚钱']);">
                <figure>
                    <img src="http://static.jimivip.com/static/images/index/reading.png" alt="">

                </figure>
                <div>阅读赚钱</div>
            </a>
            <!--<a onclick="_czc.push(['_trackEvent','底部','早期赚钱']);" href="http://m.bohexg.com/index.html?channel=channel" class="ub ub-pc ub-ac ub-f1 ub-ver item">
                <figure>
                    <img src="http://static.jimivip.com/static/images/index/bohexiguan.png" alt="">
                </figure>
                <div>早起赚钱</div>
            </a>-->
        </div>
    </div>
</div>
<!-- 右下角分享按钮 -->
<!--<div class="totanrice ">
    <img class="totanriceimg" src="static/images/index/totanrice.png" alt="">
</div>-->

<!--<div class="wxzqian trans">
    <a href="https://ap688.applinzi.com/plus/view.php?aid=213" target="_blank">
    <img class="wxzqianimg" src="static/images/index/red-pack-flixd.png" alt="">
    </a>
</div>-->

<div class="haimiangou trans">
    <img class="haimiangouimg" src="{{asset('images/line/hongbao.png')}}" alt="">
</div>

<!--<div class="openShare uhide"></div>-->
<!--<div class="openAnswer  uhide" onclick="openAnswer()" >
    <div class="answer_w uhide">
        <div class="answer_dot">

        </div>
    </div>
    <img src="http://static.jimivip.com/static/images/index/fixedanswer2.png" alt="">
</div>-->

<!-- 右下角分享按钮 -->
<!--<div class="openbohe trans" onclick="openBohe()"></div>-->

<!--弹框-复制分享链接-->
<div class="mengban1" id="mengban1"></div>
<div class="copydiv" id="copydiv">
    <div style="padding: 10% 7% 8% 7%;">
        <p class="shareToText">复制链接分享至你想发布的任何地方，
            让好友和你一起赚钱！</p>
        <p class="shareToLink">
            https://itunes.apple.com/us/app/id1263820457
        </p>
        <input class="copytext" id="copytext" value="">
        <button onclick="_czc.push(['_trackEvent','分享','按钮','首页']);" id="shareBtn" type="button" class="btn shareBtn"
                data-clipboard-target="#copytext" aria-label="复制成功！">
            复制
        </button>
    </div>
</div>


<!-- 第一次进入 -->
<div class="popup1">
    <img class="raiders1" src="http://static.jimivip.com/static/images/index/gonglue.png" alt="">
</div>

<!--添加到主屏幕 -->
<div class="popup-screen">
    <div class="screen-main">
        <div class="s-title">添加到主屏幕</div>
        <div class="step">
            <p class="ub ub-ac">
                <span>步骤一：点击屏幕下方</span> <span class="add-screen"></span> <span>按钮</span>
            </p>
            <p>步骤二：添加到主屏幕即可</p>
        </div>
        <div class="photo-part">
            <img src="http://static.jimivip.com/static/images/index/screen.png" alt="">

        </div>
        <div class="know-btn">
            知道了
        </div>
    </div>
</div>

<div class="popup-sa">
<div class="sa-tip">
    <img src="{{ asset('images/line/group.png') }}" alt="">
</div>
</div>

<!-- 红包广告-->
<div class="mask"></div>
<div class="wxzq-red-pack-open">
    <div class="wxzq-red-pack-open-bg">
        <div class="wxzq-red-pack-open-button">Yang20030107</div>
        <div class="wxzq-red-pack-open-intro">长按上方按钮复制微信号添加好友</div>
        <a class="wxzq-red-pack-open-gl" href="http://www.itbyx.cn/1/index.html">点击查看赚钱攻略</a>
    </div>
    <div class="wxzq-red-pack-open-close"></div>
</div>

<!-- 天天领红包 最高100元-->
<div class="more100">
    <div class="more100-body">
        <div class="more100-link"></div>
    </div>
    <!--<div class="more100-close"></div>-->
</div>
<div class="more100-alert">
    <div class="more100-alert-body">
        <div class="more100-alert-wx"></div>
        <div class="more100-alert-close"></div>
        <div class="more100-alert-title">加微信赚现金</div>
        <div class="more100-alert-lianjie"><span >微信号：</span><span id="more100wx">bhbt5991</span></div>
        <div class="more100-alert-button">长按虚线框复制邀请链接</div>
    </div>
</div>

<!-- 加导师QQ弹窗-->
<!--<div class="addqq">
    <div class="addqq-body">
        <div class="addqq-close"></div>
        <div class="addqq-title">导师QQ号</div>
        <div class="addqq-value"></div>
        <button class="addqq-button" id="addQQButton" onclick="_czc.push(['_trackEvent','seo8','复制按钮']);" data-clipboard-target="#copytext" aria-label="复制成功！">点击复制QQ号</button>
        <input id="addQQ" style="opacity: 0;"/>
    </div>
</div>-->

<script src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
<script src="https://cdn.bootcss.com/clipboard.js/1.7.1/clipboard.min.js"></script>
<script>
    var clipboard1 = new Clipboard('.openAnswer');
</script>

<script type="text/javascript" src="{{ asset('js/line/template.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/line/common.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/line/api.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/line/index1.js') }}"></script>

<!-- 滚动公告列表 -->
<script type="text/javascript">
    function autoScroll(obj) {
        $(obj).find("#scroll-text").animate({
            marginTop: "-36px"
        }, 500, function() {
            $(this).css({
                marginTop: "0px"
            }).find(".scroll-auto:first").appendTo(this);
        })
    }
    $(function() {
        setInterval('autoScroll(".t_news")', 3000);
    })
</script>

<!-- 滚动公告列表模板 -->
<!-- <script type="text/html" id="t:scroll_notice">
    <%for(var i = 0;i < list.length; i++){%>
    <li><%=list[i].text%></li>
    <%}%>
</script> -->
<!-- end 滚动公告列表模板 -->

<!-- banner列表模板 -->
<script type="text/html" id="t:bannerList">
    <!-- <div class="swiper-wrapper">
        @foreach($ads as $ad)
        <a href="javascript:;" onclick="_czc.push(['_trackEvent','试玩-图',$ad->name,'<%=i+1%>']);"
           class="banner swiper-slide"
           data-id="{{$ad->id}}" data-url="{{$ad->url}}" style="height: 100%;width: 100%;">
            <img src="{{ asset('uploads/' . $ad->picture) }}" alt="" width="100%">
        </a>
        @endforeach
    </div> -->

    <div class="swiper-wrapper">
                <a href="javascript:;" onclick="_czc.push(['_trackEvent','试玩-图',$ad->name,'<%=i+1%>']);"
           class="banner swiper-slide"
           data-id="1" data-url="http://fanbaozhuan.com/line/gonglue" style="height: 100%;width: 100%;">
            <img src="http://www.fanbaozhuan.local/uploads/images/0ab1c0ee7afe6c5d0aa97855af20c802.png" alt="" width="100%">
        </a>
                <a href="javascript:;" onclick="_czc.push(['_trackEvent','试玩-图',$ad->name,'<%=i+1%>']);"
           class="banner swiper-slide"
           data-id="2" data-url="http://integral.xckoo.com/invite?uid=173259" style="height: 100%;width: 100%;">
            <img src="http://www.fanbaozhuan.local/uploads/images/e5fdcae2bb4d2b1b517fe68dcb647f32.png" alt="" width="100%">
        </a>
                <a href="javascript:;" onclick="_czc.push(['_trackEvent','试玩-图',$ad->name,'<%=i+1%>']);"
           class="banner swiper-slide"
           data-id="3" data-url="https://www.eimoney.com/diamonds/mobile/WmfiJovvLXBCnKGMFPZq/4223666/link2" style="height: 100%;width: 100%;">
            <img src="http://www.fanbaozhuan.local/uploads/images/7a06e2d0af460e25ade349c27f30a716.png" alt="" width="100%">
        </a>

            <a href="javascript:;" onclick="_czc.push(['_trackEvent','试玩-图',$ad->name,'<%=i+1%>']);"
           class="banner swiper-slide"
           data-id="4" data-url="http://pphongbao.com/?random=1122&r=824767506&from=singlemessage&isappinstalled=0" style="height: 100%;width: 100%;">
            <img src="http://fanbaozhuan.com/uploads/images/55acbb1864aee836a72b18de6ced7068.jpg" alt="" width="100%">
        </a>
                <a href="javascript:;" onclick="_czc.push(['_trackEvent','试玩-图',$ad->name,'<%=i+1%>']);"
           class="banner swiper-slide"
           data-id="5" data-url="http://tanrice.com/i/?19069" style="height: 100%;width: 100%;">
            <img src="http://www.fanbaozhuan.local/uploads/images/419fdf654c9a72cd60e2ba07d29327dd.jpg" alt="" width="100%">
        </a>
            </div>


    <div class="swiper-pagination"></div>
</script>
<!-- end banner列表模板 -->

<!-- 试玩列表模板 -->
<script type="text/html" id="t:tryPlayList">
    <div style="padding: 0 0;">
        @foreach($appleApps as $key => $app)
        <a href="{{ $app->picture ? route('line.appInfo', ['cat_id' => $app->cat_id, 'id' => $app->id]) : $app->url}}"
           class="ub uinn-tb ub-ac ub-pj ubb bc-border platform platform-a">
            <div class="ub ub-f1">
                <div class="ub-img7 platform-icon" style="background-image: url({{ asset('uploads/' . $app->logo) }});"></div>
                <div class="ub ub-f1 ub-ver ub-pj" style="padding: 0.1em 0 0.2em;">
                    <div class="ub ub-ac ub-f1">
                        <div class="font-title">试玩平台{{ $key+1 }}</div>
                        <!-- 推荐 -->
                    </div>
                    <div class="ub ub-ac ub-f1">
                        <div class="font-desc ut-s ub-f1">
                            每单试玩奖励{{ $app->reward }}元
                            <!-- {{ $app->keywords }} -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="ub goBtn ub-pc">
                去赚钱
            </div>
        </a>
        @endforeach
    </div>
    <!--<div class="bdphoto" onclick="_czc.push(['_trackEvent','淘宝机器人','试玩']);">
        <img class="bdphoto-img" src="static/images/nindex/bds.png" alt="">
    </div>-->
    <!--<div class="index-bottom-advert" id="index-bottom-advert" onclick="goadvert()"></div>-->
    <div class="new-tip-one">更多试玩平台正在准备中...</div>
    <br />
    <!--<div class="new-tip">*精选试玩平台，每个都做收益更高</div>-->
</script>
<!-- end 试玩列表模板 -->
</body>
</html>