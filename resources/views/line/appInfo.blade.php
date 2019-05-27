<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>饭宝赚</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('uploads/images/icon/logo.jpg') }}">
    <link rel="bookmark"  type="image/x-icon"  href="{{ asset('uploads/images/icon/fan_logo.ico') }}"/>
    <link rel="shortcut icon" href="{{ asset('uploads/images/icon/fan_logo.ico') }}">
    <link href="//cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css" rel="stylesheet">
    <link href="{{ asset('css/line/common.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('css/line/appInfo.css') }}" type="text/css" rel="stylesheet">

    <style type="text/css">
        
    </style>
    <script>
        //声明_czc对象:
        var _czc = _czc || [];
        //绑定siteid，请用您的siteid替换下方"XXXXXXXX"部分
        _czc.push(["_setAccount", "1271319646"]);
    </script>
    <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " //");
    document.write(unescape("%3Cspan style='display:none;' id='cnzz_stat_icon_1271319646'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1271319646' type='text/javascript'%3E%3C/script%3E"));
    document.getElementById("cnzz_stat_icon_1271319646").style.display = "none";</script>
</head>
<body>
<!--平台介绍图-->
<div class="popup_box photobig" id="photobig">
    <div class="swiper-container photobigGallary">
        <div id="platPhoto" class="swiper-wrapper">
            @foreach($app->picture as $pic)
            <div class="swiper-slide">
                <img src="{{ asset('uploads/' . $pic) }}"
                     alt="">
            </div>
            @endforeach
        </div>
    </div>
</div>
<!--弹框-复制分享链接-->
<div class="mengban1" id="mengban1"></div>
<div class="copydiv" id="copydiv">
    <div style="padding: 10% 7% 8% 7%;">
        <p class="shareToText">复制链接分享至你想发布的任何地方，
            让好友和你一起赚钱！</p>
        <p class="shareToLink">
            {{ $app->url_2 ? $app->url_2 : $app->url}}
        </p>
        <input class="copytext" id="copytext" value="">
        <button onclick="_czc.push(['_trackEvent','分享','按钮','详情']);" id="shareBtn" type="button" class="btn shareBtn"
                data-clipboard-target="#copytext" aria-label="复制成功！">
            复制
        </button>
    </div>
</div>
<div id="nav-left">
    <div id="back"></div>
</div>

<div class="d-title">
    平台详情
</div>
<img class="sharetopBtn uhide" src="{{ asset('images/line/shareBtn.png') }}" alt="">
<img class="plat_bg" src="{{ asset('images/line/plat_1.jpg') }}" alt="">
<div id="detailCon" class="detailCon">

    <div class="price_part">
        <span class="price_cash">{{ $app->reward }}</span>元起
    </div>
    <div class="profile">
        试玩任务奖励
    </div>
    <div class="ub reward_part">

        <div class="ub ub-f1 ub-ac ub-pc">
            <img class="ub p_img" src="https://www.youbeiapp.com/static/images/platform/palipay.png" alt="">
            <div class="ub">支付宝</div>
        </div>
        

        <div class="ub ub-f1 ub-ac ub-pc">
            <img class="ub p_img" src="https://www.youbeiapp.com/static/images/platform/pwechat.png" alt="">
            <div class="ub">微信</div>
        </div>
        

        <div class="ub ub-f1 ub-ac ub-pc">
            <img class="ub p_img" src="https://www.youbeiapp.com/static/images/platform/pwidthdraw.png" alt="">
            <div class="ub">10元提现</div>
        </div>
    </div>
    <div class="plat_part">
        <div class="plat_tt">
            下载安装试玩平台
        </div>
        <div>
            <img class="plat_img" src="{{ asset('uploads/' . $app->logo) }}" alt="">
        </div>

        <p class="plat_dd">{{ $app->name }}</p>

        <div class="plat_btn" data-url="{{ $app->url }}" data-url2="{{ $app->url_2 }}">
            开始赚钱
        </div>
        <div class="plat_time">
            任务更新时间集中在15:00~18:00
        </div>
    </div>
    @if( 1 == 1)
    <div class="manage-part">
        <p class="manTip">
            特别注意：该平台任务助手下载安装后需要在"设置-通用-设备管理"中添加信任方可使用
        </p>
        <div class="managePhoto clearfloat">
            @if( 1 == 0)
                <div class="manItem">
                    <img src="https://www.youbeiapp.com/static/images/platform/shike1.png" alt="">
                </div>
                <div class="manItem">
                    <img src="https://www.youbeiapp.com/static/images/platform/shike2.png" alt="">
                </div>
                <div class="manItem">
                    <img src="https://www.youbeiapp.com/static/images/platform/shike3.png" alt="">
                </div>
                <div class="manItem">
                    <img src="https://www.youbeiapp.com/static/images/platform/man4.png" alt="">
                </div>
            @else
                <div class="manItem">
                    <img src="{{ asset('uploads/images/icon/set1.png') }}" alt="">
                </div>
                <div class="manItem">
                    <img src="{{ asset('uploads/images/icon/set2.png') }}" alt="">
                </div>
                <div class="manItem">
                    <img src="{{ asset('uploads/images/icon/set3.png') }}" alt="">
                </div>
                <div class="manItem">
                    <img src="{{ asset('uploads/images/icon/set4.png') }}" alt="">
                </div>
            @endif
        </div>
    </div>
    @endif
    <div class="plat_desc">
        <div class="ub ub-pc profile_tt">
            <!--<div class="ub ub-ac line_t">-->

            <!--</div>-->
            <div class="ub ub-ac">
                平台介绍

            </div>
        </div>

        <div class="profile_dd">
            {{ $app->keywords }}
        </div>
        <ul class="photoList clearfloat">
            @foreach($app->picture as $pic)
            <li class="photoListItem">
                <img src="{{ asset('uploads/' . $pic) }}" alt="">
            </li>
            @endforeach
        </ul>

    </div>

    <div class="download-part">
        <p class="downtt">
            - 下载此平台的人也下载了 -
        </p>
        <div class="downList clearfloat">
            @foreach($jpApps as $app)
            <a class="downItem" href="{{ $app->picture ? route('line.appInfo', ['cat_id' => $app->cat_id, 'id' => $app->id]) : $app->url}}">
                <img src="{{ asset('uploads/' . $app->logo) }}" alt="">
                <p class="downdd">{{ $app->name }}</p>
            </a>
             @endforeach
        </div>
    </div>


</div>


<!-- 平台详情 -->
<div id="platformDetail"></div>

<!--弹出分享-->
<!--<div id="myModal" class="reveal-modal"></div>-->



<script type="text/html" id="t:platPhoto">
    <%for(var c = 0;c < data.length ; c++){%>
    <div class="swiper-slide">
        <img src="<%=data[c]%>"
             alt="">
    </div>
    <%}%>
</script>

<!--设备图-->
<div class="popup_box manphoto" id="manphoto">
    <div class="swiper-container manphotos">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://www.youbeiapp.com/static/images/platform/WechatIMG182.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="https://www.youbeiapp.com/static/images/platform/WechatIMG183.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="https://www.youbeiapp.com/static/images/platform/WechatIMG184.png" alt="">
            </div>
            <div class="swiper-slide">
                <img src="https://www.youbeiapp.com/static/images/platform/WechatIMG186.png" alt="">
            </div>
        </div>
        <!--<div class="swiper-pagination"></div>-->
    </div>
</div>
<!--设备图,只针对试客的样式-->
<div class="popup_box manphotoshike" id="manphotoshike">
    <div class="swiper-container manphotosshike">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://www.youbeiapp.com/static/images/platform/shikebig1.jpg" style="width: 100%;" alt="">
            </div>
            <div class="swiper-slide">
                <img src="https://www.youbeiapp.com/static/images/platform/shikebig2.jpg" style="width: 100%;" alt="">
            </div>
            <div class="swiper-slide">
                <img src="https://www.youbeiapp.com/static/images/platform/shikebig3.jpg" style="width: 100%;" alt="">
            </div>
            <div class="swiper-slide">
                <img src="https://www.youbeiapp.com/static/images/platform/WechatIMG186.png" style="width: 100%;" alt="">
            </div>
        </div>
        <!--<div class="swiper-pagination"></div>-->
    </div>
</div>

<!-- 第一次进入详情页 -->
<div class="popup1 raider_step1">
    <img class="raiders2" src="https://www.youbeiapp.com/static/images/platform/raiders-2.png" alt="">
    <img class="startBtn" src="https://www.youbeiapp.com/static/images/platform/startBtns.png" alt="">
    <img class="okBtn" src="https://www.youbeiapp.com/static/images/platform/okbtn.png" alt="">
</div>

<!-- 第二次进入详情页 -->
<div class="popup1 raider_step2">
    <!--<img class="popupShare" src="https://www.youbeiapp.com/static/images/platform/pshare.png" alt="">-->
    <img class="raiders4" src="https://www.youbeiapp.com/static/images/platform/kuang.png" alt=""  onclick="_czc.push(['_trackEvent','详情','早起赚钱']);">
</div>
<!--2018年01月16日17:31:05 by-cj-->
<!-- 第三次进入详情页 -->
<div class="popup1 raider_step3">
    <img class="popupShare" src="https://www.youbeiapp.com/static/images/platform/pshare.png" alt="">
    <img class="raiders3" src="https://www.youbeiapp.com/static/images/platform/raiders_3.png" alt="">
</div>
<!-- 第四次进入详情页 -->
<!-- 红包广告-->
<!--<div class="mask"></div>
<div class="wxzq-red-pack-open">
    <div class="wxzq-red-pack-open-bg">
        <div class="wxzq-red-pack-open-button">Yang20030107</div>
        <div class="wxzq-red-pack-open-intro">长按上方按钮复制微信号添加好友</div>
        <a class="wxzq-red-pack-open-gl" href="http://www.itbyx.cn/1/index.html">点击查看赚钱攻略</a>
    </div>
    <div class="wxzq-red-pack-open-close"></div>
</div>-->



<script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="static/js/lib/jquery.reveal.js"></script>
 -->
 <script type="text/javascript" src="{{ asset('js/line/lib/jquery.reveal.js') }}"></script>

<script src="//cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
 <script src="{{ asset('js/clipboard.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/line/common.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/line/template.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/line/appInfo.js') }}"></script>

<!-- 平台详情模板 -->

<script type="text/html" id="t:detailCon">
    
</script>


<script>
    // $(function(){
    //     $('.shareToLink').html(window.location.href);
    // });
    
</script>

</body>
</html>
