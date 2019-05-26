<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>支付宝领红包</title>
    <meta content="" name="keywords" />
    <meta content="" name="description" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="/themes/fanbao/public/assets/css/style_fanbao.css" type="text/css" rel="stylesheet">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('uploads/images/icon/logo.jpg') }}">
    <link rel="bookmark"  type="image/x-icon"  href="{{ asset('uploads/images/icon/fan_logo.ico') }}"/>
    <link rel="shortcut icon" href="{{ asset('uploads/images/icon/fan_logo.ico') }}">
    <link href="{{ asset('css/mui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/redpacket.css') }}" rel="stylesheet">
    <style type="text/css">
        .xax{
            display: inline-block;
            margin-top: 10px;
            width: 24px;
            height: 24px;
            background: url(/templets/moban/images/jt.png) center center no-repeat ;
            background-size: 20px 20px;
        }
    </style>
    <header class="mui-bar mui-bar-nav">
        <a class="xax" href="javascript:history.back(-1)">
            <
        </a>
        <h1 class="mui-title">
            支付宝领红包
        </h1>
    </header>
    <!-- 主内容区域 start-->
    <div class="mui-content mui-scroll-wrapper">
        <!-- <div class="mui-scroll"> -->
        <div id="main" style="display: block">
            <div class="ali-con max-w-750">
                <div class="head-info">
                    <p style="font-size: 18px;color: #FF5649;">您的领取码已生成</p>
                    <p style="font-size: 18px;color: #952E20;"><span class="head-info-code">580587007</span></p>
                    <p style="font-size: 12px;color: #952E20;">打开支付宝搜索“580587007”即可领取红包</p>
                    <!--<p class="head-info-sub">(每天付款前都可以领取一次哦)</p>-->
                </div>
                <div class="head-img-con">
                    <img class="head-img" src="https://yt-cdn.saasv.com/youtiao/images/alipay/luckyhb_head.png">
                </div>
                    <div class="form-con">
                        <div class="ali-code-con">
                            <p>红包线下付款可用</p>
                            <p>余额宝支付补贴</p>
                        </div>
                        <div class="ali-form">
                            <div class="ali-input btn-input">
                                <button class="ali-copy-btn">一键复制</button>
                            </div>
                            <div class="ali-input btn-input">
                                <button class="ali-input-btn">去支付宝领取</button>
                            </div>
                        </div>
                    </div>
                    <div class="info-title"><span class="line"></span>活动规则<span class="line"></span></div>
                    <div class="info-con">
    <p>
        1.通用红包支持下实体店、水电煤缴费、淘宝购买部分商品时选择花呗或余额宝进行支付</p>
    <p>
        2.每个支付宝账户每天仅能领取成功一次</p>
    <p>
        3.红包有效期3天，过期作废</p>
    <p>
        4.本活动最终解释归支付宝所有</p>
</div>
<br />


                    <div class="tail-img-con">
                        <img class="tail-img" src="https://yt-cdn.saasv.com/youtiao/images/alipay/ali_bottom_png.png">
                    </div>
                    </div>
                </div>
                <!-- </div> -->
            </div>
            <div class="mui-off-canvas-backdrop"></div>
            <!-- 主内容区域 end -->
            <script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
            <script src="{{ asset('js/clipboard.js') }}"></script>
            <script src="{{ asset('js/mui.min.js') }}"></script>
            <script type="text/javascript" src="{{ asset('js/line/common.js') }}"></script>
            <script type="text/javascript">
            jQuery(document).ready(function() {
                $('.ali-copy-btn').click(function() {
                    var clipboard = new Clipboard('.ali-copy-btn');
                    $(this).attr('data-clipboard-text', "580587007");
                    $(this).text('已复制');
                    $(this).css('background', '#D9D9D9');
                    $(this).css('color', '#999999');
                });

                $('.ali-input-btn').click(function() {
                    window.location.href = 'https://ds.alipay.com/?from=mobileweb';
                });
                //setTimeout(function(){
                //   maintool.getMsgUnreadNum() 
                //},1000);
            });
            </script>
            <!-- <script type="text/javascript">
            var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
            document.write(unescape("%3Cspan style='display:none;' id='cnzz_stat_icon_1274989384'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1274989384' type='text/javascript'%3E%3C/script%3E"));
            </script> -->
            </body>

</html>