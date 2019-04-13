<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>饭宝赚</title>
<link href="css/mobilecss.css" type="text/css" rel="stylesheet">
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
      <li class="mbactive"><a href="{{ route('index.index') }}">首页</a></li>
      <li><a href="{{ route('index.apple') }}">苹果赚钱</a></li>
      <li><a href="#">安卓赚钱</a></li>
      <li><a href="#">综合赚钱</a></li>
    </ul>
  </div>
  <div class="appmain">
      <div class="wrap">
    <div class="tabs tabsapp"> <a href="#" hidefocus="true" class="active">精品必备</a> <a href="#" hidefocus="true"></a></div>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="content-slide">
            <ul class="tabul clearfix">
              @foreach($bibeiApps as $app)
                  <li><a href="{{ action('IndexController@appInfo', ['cat_id' => $app->cat_id, 'id' => $app->id]) }}"> 
                <!-- <strong>1</strong> -->
                <img src="{{ asset('uploads/' . $app->logo) }}">
                <h2>{{ $app->name }}</h2>
                <p>{{ $app->keywords }}</p>
                <button>去赚钱</button>
                </a></li>
              @endforeach
              </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
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
