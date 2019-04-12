<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>饭宝赚</title>
<link href="{{ asset('css/mobilecss.css') }}" type="text/css" rel="stylesheet">
</head>

<body>
<div class="mbfbz">
  <div id="mbheader">
    <div class="mbheader clearfix">
      <h1>饭宝赚</h1>
      <div class="clearfix">
        <input type="text" placeholder="搜索您想要的内容">
        <button>搜索</button>
      </div>
    </div>
    <ul class="clearfix">
      <li><a href="/">首页</a></li>
      <li class="mbactive"><a href="apple.htnl">苹果赚钱</a></li>
      <li><a href="#">安卓赚钱</a></li>
      <li><a href="#">综合赚钱</a></li>
    </ul>
  </div>
  <div class="demain">
      <div class="demain1">
         <img src="{{ asset('uploads/' . $app->logo) }}">
         <h2> 试客小兵</h2>
         <p>240372次下载&nbsp;丨&nbsp;北京爱普优邦科技有限公司</p>
         <p>任务更新时间集中在15:00~18:00</p>
         <button data-url = "{{ $app->url }}">开始赚钱</button>
      </div>
      <div class="demain2">
      <div class="title clearfix">
      <h2>应用介绍</h2>
    </div>
    <p>
一款可以赚钱的手机试玩软件，每天大量试玩任务，零投入收益远超XX宝，赶快加入吧~ 
</p>
<div class="clearfix"><img src="images/pic.jpg" /><img src="images/pic.jpg" /><img src="images/pic.jpg" /></div>
      </div>
      <div class="demain3">
      <div class="title clearfix">
      <h2>特别注意</h2>
    </div>
      <p>特别注意：该平台任务助手下载安装后需要在“设置-通用-设备管理”中添加信任方可使用</p>
      <div class="clearfix">
      <img src="images/1.png" /><img src="images/2.png" /><img src="images/1.png" /><img src="images/2.png" />
      </div>
      </div>
      <div class="demain4">
       <div class="title clearfix">
      <h2>下载此平台的人也下载了</h2>
    </div>
    <ul class="clearfix">
       <li> <a href="#"> <img src=" images/logo/logo1.jpg">
                <h2>试客小兵</h2>
                </a> </li>
              <li> <a href="#"> <img src=" images/logo/logo2.jpg">
                <h2>小鱼赚钱</h2>
                </a> </li>
              <li> <a href="#"> <img src=" images/logo/logo3.png">
                <h2>蝉试客</h2>
                </a> </li>
              <li> <a href="#"> <img src=" images/logo/logo4.png">
                <h2>熊猫赚钱</h2>
                </a> </li>
    </ul>
      </div>
  </div>
  <div class="footer"> @饭宝赚，版权归饭宝赚所有 </div>
</div>
<script src="js/jquery-1.11.3.min.js"></script> 
<script src="js/mbslider.js"></script> 
<script type="text/javascript" src="js/idangerous.swiper.min.js"></script> 
<script type="text/javascript">
<!--移动端js-->
  
$(function() {
    var index = 0;
    var adtimer;
    var _wrap = $("#container ol"); //
    var len = $("#container ol li").length;
    //len=1;
    if (len > 1) {
        $("#container").hover(function() {
            clearInterval(adtimer);
        },
        function() {
            adtimer = setInterval(function() {

                var _field = _wrap.find('li:first'); //此变量不可放置于函数起始处,li:first取值是变化的
                var _h = _field.height(); //取得每次滚动高度(多行滚动情况下,此变量不可置于开始处,否则会有间隔时长延时)
                _field.animate({
                    marginTop: -_h + 'px'
                },
                500,
                function() { //通过取负margin值,隐藏第一行
                    _field.css('marginTop', 0).appendTo(_wrap); //隐藏后,将该行的margin值置零,并插入到最后,实现无缝滚动
                })

            },
            2000);
        }).trigger("mouseleave");
        function showImg(index) {
            var Height = $("#container").height();
            $("#container ol").stop().animate({
                marginTop: -_h + 'px'
            },
            1000);
        }

        $("#container").mouseover(function() {
            $("#container .mouse_direction").css("display", "block");
        });
        $("#container").mouseout(function() {
            $("#container .mouse_direction").css("display", "none");
        });
    }

    $("#container").find(".mouse_top").click(function() {
        var _field = _wrap.find('li:first'); //此变量不可放置于函数起始处,li:first取值是变化的
        var last = _wrap.find('li:last'); //此变量不可放置于函数起始处,li:last取值是变化的
        //last.prependTo(_wrap);
        var _h = last.height();
        $("#container ol").css('marginTop', -_h + "px");
        last.prependTo(_wrap); 
        $("#container ol").animate({
            marginTop: 0
        },
        500,
        function() { //通过取负margin值,隐藏第一行
            //$("#container ol").css('marginTop',0).prependTo(_wrap);//隐藏后,将该行的margin值置零,并插入到最后,实现无缝滚动
        })
    });
    $("#container").find(".mouse_bottom").click(function() {
        var _field = _wrap.find('li:first'); //此变量不可放置于函数起始处,li:first取值是变化的
        var _h = _field.height();
        _field.animate({
            marginTop: -_h + 'px'
        },
        500,
        function() { //通过取负margin值,隐藏第一行
            _field.css('marginTop', 0).appendTo(_wrap); //隐藏后,将该行的margin值置零,并插入到最后,实现无缝滚动
        })
    });
});
 
 
 
 
var tabsSwiper = new Swiper('.swiper-container',{
    speed:500,
    onSlideChangeStart: function(){
        $(".tabs .active").removeClass('active');
        $(".tabs a").eq(tabsSwiper.activeIndex).addClass('active');
    }
});

$(".tabs a").on('touchstart mousedown',function(e){
    e.preventDefault()
    $(".tabs .active").removeClass('active');
    $(this).addClass('active');
    tabsSwiper.swipeTo($(this).index());
});

$(".tabs a").click(function(e){
    e.preventDefault();
});  
</script>
</body>
</html>
