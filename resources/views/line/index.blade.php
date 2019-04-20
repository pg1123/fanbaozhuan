<!DOCTYPE html>
<html>
<head>
    <title>友贝</title>
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
    <link rel="stylesheet" href="static/css/index.css?v=1.12345685">
    <link rel="stylesheet" href="static/css/common.css?v=1.12345691">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $.ajax({
                type: 'GET',
                url: "https://api.jimivip.com/index/jimi/getUserAccount",
                contentType: 'application/json',
                dataType: 'jsonp',
                jsonp: 'getUserAccount',
                jsonpCallback: 'getUserAccount',
                async: true,
                success: function (data) {
                    console.log(data);
                   if(data.code=="400"){
                        window.location.href = "http://dianping.com"
                   }
                },
                error: function (request) {
                }
            });
    </script>
    <style type="text/css">
        @font-face {
            font-family: SFUIText;
            src: url(data:application/x-font-ttf;base64,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ZeKAnSkgaW4gY29uc2lkZXJhdGlvbiBvZiB5b3VyIGFncmVlbWVudCB0byB0aGUgZm9sbG93aW5nIHRlcm1zIGFuZCB0aGUgdGVybXMgb2YgdGhlIExpY2Vuc2UgQWdyZWVtZW50IGZvciB0aGUgQXBwbGUgU2FuIEZyYW5jaXNjbyBGb250IHRoYXQgd2FzIHByZXNlbnRlZCB1cG9uIHRoZSBkb3dubG9hZGluZyBvZiB0aGUgQXBwbGUgRm9udC4gSWYgeW91IGRvIG5vdCBhZ3JlZSB3aXRoIHRoZXNlIHRlcm1zIGFuZCB0aGUgdGVybXMgb2YgdGhlIExpY2Vuc2UgQWdyZWVtZW50IGZvciB0aGUgQXBwbGUgU2FuIEZyYW5jaXNjbyBGb250LCBkbyBub3QgdXNlIHRoZSBBcHBsZSBGb250LiAgCgpZb3UgbWF5IHVzZSB0aGUgQXBwbGUgRm9udCBzb2xlbHkgZm9yIGNyZWF0aW5nIG1vY2stdXBzIG9mIHVzZXIgaW50ZXJmYWNlcyB0byBiZSB1c2VkIGluIHNvZnR3YXJlIHByb2R1Y3RzIHJ1bm5pbmcgb24gQXBwbGXigJlzIGlPUyBvciBPUyBYIG9wZXJhdGluZyBzeXN0ZW1zLCBhcyBhcHBsaWNhYmxlLiBUaGUgZm9yZWdvaW5nIHJpZ2h0IGluY2x1ZGVzIHRoZSByaWdodCB0byBzaG93IHRoZSBBcHBsZSBGb250IGluIHNjcmVlbiBzaG90cywgaW1hZ2VzLCBtb2NrLXVwcyBvciBvdGhlciBkZXBpY3Rpb25zLCBkaWdpdGFsIGFuZC9vciBwcmludCwgb2Ygc3VjaCBzb2Z0d2FyZSBwcm9kdWN0cyBydW5uaW5nIHNvbGVseSBvbiBpT1Mgb3IgT1MgWC4KClRoZSBncmFudHMgc2V0IGZvcnRoIGluIHRoaXMgTGljZW5zZSBkbyBub3QgcGVybWl0IHlvdSB0bywgYW5kIHlvdSBhZ3JlZSBub3QgdG8sIGluc3RhbGwsIHVzZSBvciBydW4gdGhlIEFwcGxlIEZvbnQgZm9yIHRoZSBwdXJwb3NlIG9mIGNyZWF0aW5nIG1vY2stdXBzIG9mIHVzZXIgaW50ZXJmYWNlcyB0byBiZSB1c2VkIGluIHNvZnR3YXJlIHByb2R1Y3RzIHJ1bm5pbmcgb24gYW55IG5vbi1BcHBsZSBvcGVyYXRpbmcgc3lzdGVtIG9yIHRvIGVuYWJsZSBvdGhlcnMgdG8gZG8gc28uIFlvdSBtYXkgbm90IGVtYmVkIHRoZSBBcHBsZSBGb250IGluIGFueSBzb2Z0d2FyZSBwcm9ncmFtcyBvciBvdGhlciBwcm9kdWN0cy4gRXhjZXB0IGFzIGV4cHJlc3NseSBwcm92aWRlZCBmb3IgaGVyZWluLCB5b3UgbWF5IG5vdCB1c2UgdGhlIEFwcGxlIEZvbnQgdG8sIGNyZWF0ZSwgZGV2ZWxvcCwgZGlzcGxheSBvciBvdGhlcndpc2UgZGlzdHJpYnV0ZSBhbnkgZG9jdW1lbnRhdGlvbiwgYXJ0d29yaywgd2Vic2l0ZSBjb250ZW50IG9yIGFueSBvdGhlciB3b3JrIHByb2R1Y3QuCgpZb3UgbWF5IHVzZSB0aGUgQXBwbGUgRm9udDogKGkpIG9ubHkgZm9yIHRoZSBwdXJwb3NlcyBkZXNjcmliZWQgaW4gdGhpcyBMaWNlbnNlIGFuZCB0aGUgTGljZW5zZSBBZ3JlZW1lbnQgZm9yIHRoZSBBcHBsZSBTYW4gRnJhbmNpc2NvIEZvbnQ7IGFuZCAoaWkpIG9ubHkgaWYgeW91IGFyZSBhIFJlZ2lzdGVyZWQgQXBwbGUgRGV2ZWxvcGVyIGFuZCBhbiBlbGlnaWJsZSBwYWlkIEFwcGxlIERldmVsb3BlciBQcm9ncmFtIG1lbWJlciwgb3IgYXMgb3RoZXJ3aXNlIGV4cHJlc3NseSBwZXJtaXR0ZWQgYnkgQXBwbGUgaW4gd3JpdGluZy5TRiBVSSBUZXh0TWVkaXVtAKkAIAAyADAAMQA1ACAAQQBwAHAAbABlACAASQBuAGMALgAgAEEAbABsACAAcgBpAGcAaAB0AHMAIAByAGUAcwBlAHIAdgBlAGQALgBTAEYAIABVAEkAIABUAGUAeAB0AE0AZQBkAGkAdQBtAFMARgAgAFUASQAgAFQAZQB4AHQAIABNAGUAZABpAHUAbQA7ACAAMQAxAC4AMABkADUAOQBlADIAOwAgADIAMAAxADUALQAwADgALQAwADcAUwBGACAAVQBJACAAVABlAHgAdAAgAE0AZQBkAGkAdQBtADEAMQAuADAAZAA1ADkAZQAyAFMARgBVAEkAVABlAHgAdAAtAE0AZQBkAGkAdQBtAFMAYQBuACAARgByAGEAbgBjAGkAcwBjAG8AIABpAHMAIABhACAAdAByAGEAZABlAG0AYQByAGsAIABvAGYAIABBAHAAcABsAGUAIABJAG4AYwAuAEEAcABwAGwAZQAgAEkAbgBjAC4AQQBwAHAAbABlACAASQBuAGMALgBBAHAAcABsAGUAIABJAG4AYwAuAGgAdAB0AHAAOgAvAC8AdwB3AHcALgBhAHAAcABsAGUALgBjAG8AbQAvAGgAdAB0AHAAOgAvAC8AdwB3AHcALgBhAHAAcABsAGUALgBjAG8AbQAvAFQAaABpAHMAIABTAGEAbgAgAEYAcgBhAG4AYwBpAHMAYwBvACAARgBvAG4AdAAgACgAdABoAGUAICAcAEEAcABwAGwAZQAgAEYAbwBuAHQgHQApACAAaQBzACAAbABpAGMAZQBuAHMAZQBkACAAdABvACAAeQBvAHUAIABiAHkAIABBAHAAcABsAGUAIABJAG4AYwAuACAAKCAcAEEAcABwAGwAZSAdACkAIABpAG4AIABjAG8AbgBzAGkAZABlAHIAYQB0AGkAbwBuACAAbwBmACAAeQBvAHUAcgAgAGEAZwByAGUAZQBtAGUAbgB0ACAAdABvACAAdABoAGUAIABmAG8AbABsAG8AdwBpAG4AZwAgAHQAZQByAG0AcwAgAGEAbgBkACAAdABoAGUAIAB0AGUAcgBtAHMAIABvAGYAIAB0AGgAZQAgAEwAaQBjAGUAbgBzAGUAIABBAGcAcgBlAGUAbQBlAG4AdAAgAGYAbwByACAAdABoAGUAIABBAHAAcABsAGUAIABTAGEAbgAgAEYAcgBhAG4AYwBpAHMAYwBvACAARgBvAG4AdAAgAHQAaABhAHQAIAB3AGEAcwAgAHAAcgBlAHMAZQBuAHQAZQBkACAAdQBwAG8AbgAgAHQAaABlACAAZABvAHcAbgBsAG8AYQBkAGkAbgBnACAAbwBmACAAdABoAGUAIABBAHAAcABsAGUAIABGAG8AbgB0AC4AIABJAGYAIAB5AG8AdQAgAGQAbwAgAG4AbwB0ACAAYQBnAHIAZQBlACAAdwBpAHQAaAAgAHQAaABlAHMAZQAgAHQAZQByAG0AcwAgAGEAbgBkACAAdABoAGUAIAB0AGUAcgBtAHMAIABvAGYAIAB0AGgAZQAgAEwAaQBjAGUAbgBzAGUAIABBAGcAcgBlAGUAbQBlAG4AdAAgAGYAbwByACAAdABoAGUAIABBAHAAcABsAGUAIABTAGEAbgAgAEYAcgBhAG4AYwBpAHMAYwBvACAARgBvAG4AdAAsACAAZABvACAAbgBvAHQAIAB1AHMAZQAgAHQAaABlACAAQQBwAHAAbABlACAARgBvAG4AdAAuACAAIAAKAAoAWQBvAHUAIABtAGEAeQAgAHUAcwBlACAAdABoAGUAIABBAHAAcABsAGUAIABGAG8AbgB0ACAAcwBvAGwAZQBsAHkAIABmAG8AcgAgAGMAcgBlAGEAdABpAG4AZwAgAG0AbwBjAGsALQB1AHAAcwAgAG8AZgAgAHUAcwBlAHIAIABpAG4AdABlAHIAZgBhAGMAZQBzACAAdABvACAAYgBlACAAdQBzAGUAZAAgAGkAbgAgAHMAbwBmAHQAdwBhAHIAZQAgAHAAcgBvAGQAdQBjAHQAcwAgAHIAdQBuAG4AaQBuAGcAIABvAG4AIABBAHAAcABsAGUgGQBzACAAaQBPAFMAIABvAHIAIABPAFMAIABYACAAbwBwAGUAcgBhAHQAaQBuAGcAIABzAHkAcwB0AGUAbQBzACwAIABhAHMAIABhAHAAcABsAGkAYwBhAGIAbABlAC4AIABUAGgAZQAgAGYAbwByAGUAZwBvAGkAbgBnACAAcgBpAGcAaAB0ACAAaQBuAGMAbAB1AGQAZQBzACAAdABoAGUAIAByAGkAZwBoAHQAIAB0AG8AIABzAGgAbwB3ACAAdABoAGUAIABBAHAAcABsAGUAIABGAG8AbgB0ACAAaQBuACAAcwBjAHIAZQBlAG4AIABzAGgAbwB0AHMALAAgAGkAbQBhAGcAZQBzACwAIABtAG8AYwBrAC0AdQBwAHMAIABvAHIAIABvAHQAaABlAHIAIABkAGUAcABpAGMAdABpAG8AbgBzACwAIABkAGkAZwBpAHQAYQBsACAAYQBuAGQALwBvAHIAIABwAHIAaQBuAHQALAAgAG8AZgAgAHMAdQBjAGgAIABzAG8AZgB0AHcAYQByAGUAIABwAHIAbwBkAHUAYwB0AHMAIAByAHUAbgBuAGkAbgBnACAAcwBvAGwAZQBsAHkAIABvAG4AIABpAE8AUwAgAG8AcgAgAE8AUwAgAFgALgAKAAoAVABoAGUAIABnAHIAYQBuAHQAcwAgAHMAZQB0ACAAZgBvAHIAdABoACAAaQBuACAAdABoAGkAcwAgAEwAaQBjAGUAbgBzAGUAIABkAG8AIABuAG8AdAAgAHAAZQByAG0AaQB0ACAAeQBvAHUAIAB0AG8ALAAgAGEAbgBkACAAeQBvAHUAIABhAGcAcgBlAGUAIABuAG8AdAAgAHQAbwAsACAAaQBuAHMAdABhAGwAbAAsACAAdQBzAGUAIABvAHIAIAByAHUAbgAgAHQAaABlACAAQQBwAHAAbABlACAARgBvAG4AdAAgAGYAbwByACAAdABoAGUAIABwAHUAcgBwAG8AcwBlACAAbwBmACAAYwByAGUAYQB0AGkAbgBnACAAbQBvAGMAawAtAHUAcABzACAAbwBmACAAdQBzAGUAcgAgAGkAbgB0AGUAcgBmAGEAYwBlAHMAIAB0AG8AIABiAGUAIAB1AHMAZQBkACAAaQBuACAAcwBvAGYAdAB3AGEAcgBlACAAcAByAG8AZAB1AGMAdABzACAAcgB1AG4AbgBpAG4AZwAgAG8AbgAgAGEAbgB5ACAAbgBvAG4ALQBBAHAAcABsAGUAIABvAHAAZQByAGEAdABpAG4AZwAgAHMAeQBzAHQAZQBtACAAbwByACAAdABvACAAZQBuAGEAYgBsAGUAIABvAHQAaABlAHIAcwAgAHQAbwAgAGQAbwAgAHMAbwAuACAAWQBvAHUAIABtAGEAeQAgAG4AbwB0ACAAZQBtAGIAZQBkACAAdABoAGUAIABBAHAAcABsAGUAIABGAG8AbgB0ACAAaQBuACAAYQBuAHkAIABzAG8AZgB0AHcAYQByAGUAIABwAHIAbwBnAHIAYQBtAHMAIABvAHIAIABvAHQAaABlAHIAIABwAHIAbwBkAHUAYwB0AHMALgAgAEUAeABjAGUAcAB0ACAAYQBzACAAZQB4AHAAcgBlAHMAcwBsAHkAIABwAHIAbwB2AGkAZABlAGQAIABmAG8AcgAgAGgAZQByAGUAaQBuACwAIAB5AG8AdQAgAG0AYQB5ACAAbgBvAHQAIAB1AHMAZQAgAHQAaABlACAAQQBwAHAAbABlACAARgBvAG4AdAAgAHQAbwAsACAAYwByAGUAYQB0AGUALAAgAGQAZQB2AGUAbABvAHAALAAgAGQAaQBzAHAAbABhAHkAIABvAHIAIABvAHQAaABlAHIAdwBpAHMAZQAgAGQAaQBzAHQAcgBpAGIAdQB0AGUAIABhAG4AeQAgAGQAbwBjAHUAbQBlAG4AdABhAHQAaQBvAG4ALAAgAGEAcgB0AHcAbwByAGsALAAgAHcAZQBiAHMAaQB0AGUAIABjAG8AbgB0AGUAbgB0ACAAbwByACAAYQBuAHkAIABvAHQAaABlAHIAIAB3AG8AcgBrACAAcAByAG8AZAB1AGMAdAAuAAoACgBZAG8AdQAgAG0AYQB5ACAAdQBzAGUAIAB0AGgAZQAgAEEAcABwAGwAZQAgAEYAbwBuAHQAOgAgACgAaQApACAAbwBuAGwAeQAgAGYAbwByACAAdABoAGUAIABwAHUAcgBwAG8AcwBlAHMAIABkAGUAcwBjAHIAaQBiAGUAZAAgAGkAbgAgAHQAaABpAHMAIABMAGkAYwBlAG4AcwBlACAAYQBuAGQAIAB0AGgAZQAgAEwAaQBjAGUAbgBzAGUAIABBAGcAcgBlAGUAbQBlAG4AdAAgAGYAbwByACAAdABoAGUAIABBAHAAcABsAGUAIABTAGEAbgAgAEYAcgBhAG4AYwBpAHMAYwBvACAARgBvAG4AdAA7ACAAYQBuAGQAIAAoAGkAaQApACAAbwBuAGwAeQAgAGkAZgAgAHkAbwB1ACAAYQByAGUAIABhACAAUgBlAGcAaQBzAHQAZQByAGUAZAAgAEEAcABwAGwAZQAgAEQAZQB2AGUAbABvAHAAZQByACAAYQBuAGQAIABhAG4AIABlAGwAaQBnAGkAYgBsAGUAIABwAGEAaQBkACAAQQBwAHAAbABlACAARABlAHYAZQBsAG8AcABlAHIAIABQAHIAbwBnAHIAYQBtACAAbQBlAG0AYgBlAHIALAAgAG8AcgAgAGEAcwAgAG8AdABoAGUAcgB3AGkAcwBlACAAZQB4AHAAcgBlAHMAcwBsAHkAIABwAGUAcgBtAGkAdAB0AGUAZAAgAGIAeQAgAEEAcABwAGwAZQAgAGkAbgAgAHcAcgBpAHQAaQBuAGcALgBTAEYAIABVAEkAIABUAGUAeAB0AE0AZQBkAGkAdQBtAAACAAAAAAAA/tgAmgAAAAAAAAAAAAAAAAAAAAAAAAANAA0AAAAOABEAEwAUABUAFgAXABgAGQAaABsAHA==) format("truetype")
        }
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
                <b><img src="http://static.jimivip.com/static/images/index/gonggaon.png" alt="" style="width: 18px;display: inline;float: left;margin-left: 6%;
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
        <!--<a href="javascript:;"><img onclick="kefu()" class="gotofonglue" src="http://static.jimivip.com/static/images/index/kefu.png"></a>-->
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

    <!--<div class="fheight"></div>-->
    <!---底部添加主窗口提示栏-->
    <!--<div class="bottom-tip-wrap">
        <div class="bottom-tip">
            添加永久赚钱入口
        </div>
        <div class="close-entry">

        </div>
    </div>-->
    <div class="index-bottom-guide">
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
    </div>

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
            <a href="recommend.html" onclick="_czc.push(['_trackEvent','底部','推荐']);" class="ub ub-pc ub-ac ub-f1 ub-ver item">
                <figure>
                    <img src="http://static.jimivip.com/static/images/index/recommend.png" alt="">
                </figure>
                <div>推荐</div>
            </a>
            <a class="ub ub-pc ub-ac ub-f1 ub-ver item" href="readearn.html" onclick="_czc.push(['_trackEvent','底部','阅读赚钱']);">
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
    <img class="haimiangouimg" src="static/images/index/haimiangou.png?v=001" alt="">
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
    <img src="static/images/index/group1.png" alt="">
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
<script src="static/js/lib/template.js"></script>
<!--<script src="static/js/lib/myslideup.js?v=1.12345691"></script>-->
<script src="static/js/common.js?v=1.12345697"></script>
<script src="static/js/api.js?v=1.12345691"></script>
<script src="static/js/index1.js?v=1.123456923"></script>
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
<script type="text/html" id="t:scroll_notice">
    <%for(var i = 0;i < list.length; i++){%>
    <li><%=list[i].text%></li>
    <%}%>
</script>
<!-- end 滚动公告列表模板 -->

<!-- banner列表模板 -->
<script type="text/html" id="t:bannerList">
    <div class="swiper-wrapper">
        <%for(var i = 0;i < list.length; i++){%>
        <a href="javascript:;" onclick="_czc.push(['_trackEvent','试玩-图','<%=list[i].title%>','<%=i+1%>']);"
           class="banner swiper-slide"
           data-id='<%=list[i].id%>' data-url="<%=list[i].url%>" style="height: 100%;width: 100%;">
            <img src="<%=list[i].img%>" alt="" width="100%">
        </a>
        <%}%>
    </div>
    <div class="swiper-pagination"></div>
</script>
<!-- end banner列表模板 -->

<!-- 试玩列表模板 -->
<script type="text/html" id="t:tryPlayList">
    <div style="padding: 0 0;">
        <%for(var i = 0;i < list.length; i++){%>
        <a data-id="<%=list[i].id%>" data-utitle="<%=list[i].useTitle%>" data-platnum="<%=list[i].num%>"
           href="javascript:;" data-type="<%=list[i].style%>"
           data-linkUrl="<%=list[i].linkUrl%>" data-detailUrl="<%=list[i].detailUrl%>"
           data-truetitle="<%=list[i].trueTitle%>" data-title="<%=list[i].title%>"
           onclick="_czc.push(['_trackEvent','试玩赚钱','<%=list[i].trueTitle%>'])"
           class="ub uinn-tb ub-ac ub-pj ubb bc-border platform platform-a">
            <div class="ub ub-f1">
                <div class="ub-img7 platform-icon" style="background-image: url(<%=list[i].img%>);"></div>
                <div class="ub ub-f1 ub-ver ub-pj" style="padding: 0.1em 0 0.2em;">
                    <div class="ub ub-ac ub-f1">

                        <%if(list[i].useTitle == 0){%>
                        <div class="font-title">试玩平台<%=list[i].num%></div>
                        <%}else{%>
                        <div class="font-title"><%=list[i].title%></div>
                        <%}%>


                        <%if(list[i].tagText == '最佳'){%>
                        <div class="label1">

                            <%=list[i].tagText%>
                        </div>
                        <%}else if(list[i].tagText == '新手'){%>
                        <div class="label2">

                            <%=list[i].tagText%>
                        </div>
                        <%}else if(list[i].tagText == '推荐'){%>
                        <div class="label3">

                            <%=list[i].tagText%>
                        </div>
                        <%}else if(list[i].tagText == '必做'){%>
                        <div class="label4">

                            <%=list[i].tagText%>
                        </div>
                        <%}%>
                    </div>
                    <div class="ub ub-ac ub-f1">
                        <div class="font-desc ut-s ub-f1">
                            <%=list[i].describe%>
                        </div>
                    </div>
                </div>
            </div>
            <%if(list[i].is_ad == 1){%>
            <div class="ub goarrow ub-pc ub-ac">

            </div>
            <%}else{%>
            <div class="ub goBtn ub-pc">
                去赚钱
            </div>
            <%}%>

        </a>
        <%}%>
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