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
    <link href="{{ asset('css/line/reader.css') }}" type="text/css" rel="stylesheet">
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


    <!-- 试玩列表列表 -->
    <div id="tabTryPlayList" class="classCopy">
        <div id="tryPlayList" class="bc-wh pdl"></div>
    </div>


    <!--1215版本菜单-->
    <div style="height: 3.6em;"></div>
    <div class="footer">
        <div class="ub footer-inner clearfloat">
            <a href="/" onclick="_czc.push(['_trackEvent','底部','试玩赚钱']);" class="ub ub-pc ub-ac ub-f1 ub-ver item">
                <figure>
                    <img src="{{ asset('uploads/images/icon/index.png') }}" alt="">
                </figure>
                <div>苹果赚钱</div>
            </a>
            <a href="{{ route('line.anzhuo')}}" onclick="_czc.push(['_trackEvent','底部','推荐']);" class="ub ub-pc ub-ac ub-f1 ub-ver item ">
                <figure>
                    <img src="{{ asset('uploads/images/icon/recommend.png') }}" alt="">
                </figure> 
                <div>安卓</div>
            </a>
            <a class="ub ub-pc ub-ac ub-f1 ub-ver item actived" href="javascript:;" onclick="_czc.push(['_trackEvent','底部','阅读赚钱']);">
                <figure>
                    <img src="{{ asset('uploads/images/icon/reading.png') }}" alt="">

                </figure>
                <div>阅读赚钱</div>
            </a>
        </div>
    </div>
</div>




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


<!-- 试玩列表模板 -->
<script type="text/html" id="t:tryPlayList">
    <div style="padding: 0 0;">
        @foreach($readerApps as $key => $app)
        <a href="{{ $app->url }}"
           class="ub  ub-ver platform platform-a">
            <div class="ub ub-ac">
            <div class="ub-img7 platform-icon" style="background-image: url({{ asset('uploads/' . $app->logo) }});"></div>
            <div class="ub ub-ac ub-f1 read-con">
                <div class="ub ub-f1 ub-ver ub-pj" style="padding: 0.4em 0 0.6em;">
                    <div class="ub ub-f1">
                        <div class="font-title ut-s ub-f1">
                            {{ $app->name }}
                        </div>
                    </div>
                </div>
                <div class="ub earnBtn ub-pc">
                    立即下载
                </div>
            </div>
        </div>
        <div class="ub">
            <div class="font-desc ut-s ub-f1">
                {{$app->keywords}}
            </div>
        </div>
        </a>
        @endforeach
    </div>
</script>

<!-- end 试玩列表模板 -->
</body>
</html>