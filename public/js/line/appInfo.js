var skm;
var platDetail;
var act = sessionStorage.getItem('act');
var fromApp = sessionStorage.getItem('fromapp');//浠庡摢涓猘pp璺宠繃鏉ョ殑
$(function () {
    $('#nav-left').on('click', function () {
        //window.location.href = 'index.html?act='+act;
        history.back();
    });
    $('body').removeClass('no-scroll');

    platDetail = localStorage.getItem('platDetail');

//  if (act != 'act') {
//      if (!platDetail) {
//          if(sessionStorage.getItem("fromrukou")==1){
//              $('.raider_step1').hide();
//              $('.index-bottom-guide').hide();
//              $('body').removeClass('no-scroll');
//          }else{
//              $('.index-bottom-guide').show();
//              $('.raider_step1').show();
//              $('body').addClass('no-scroll');
//          }
//      }
//  }
    if (!platDetail) {
        if(sessionStorage.getItem("fromrukou")==1){
            $('.raider_step1').hide();
            $('.index-bottom-guide').hide();
            $('body').removeClass('no-scroll');
        }else{
            $('.index-bottom-guide').show();
            $('.raider_step1').show();
            $('body').addClass('no-scroll');
        }
    }
    
    if (platDetail == 1) {
        if(!is_wechat()){
//          $('.raider_step2').show();
            $('.raider_step3').show();
            $('body').addClass('no-scroll');
        }
    }
    if (platDetail == 2) {
        if(!is_wechat()){
//          $('.raider_step3').show();
//          $(".mask,.wxzq-red-pack-open").show();
//          $('body').addClass('no-scroll');
        }
    }
//  if (platDetail == 3) {
//      if(!is_wechat()){
//          $(".mask,.wxzq-red-pack-open").show();
////          $('body').addClass('no-scroll');
//      }
//  }

    var platformid = get_query_val('platformid');
    var platnum = get_query_val('platnum');

    $.ajax({
        type: 'GET',
        url: staticurl + '/index/jimi/platformDetail?id=' + platformid+'&fromapp='+fromApp,
        contentType: 'application/json',
        dataType: 'jsonp',
        jsonp: 'platformDetail',
        jsonpCallback: 'platformDetail',
        async: true,
        success: function (data) {
            skm = data.skm;
            data.platnum = platnum;
            $('#detailCon').html(template('t:detailCon', {list: data}));
            aboutPhoto(platformid);
            $('#platPhoto').append(template('t:platPhoto', {data: data.detailImages}));

            $('.shareToLink').html(data.link_url);
            $('#copytext').val('鏈€闈犺氨鐨勬墜鏈鸿禋閽卞钩鍙帮紝姣忎釜鏈堣交杞绘澗鏉句笂鍗冨厓闆惰姳閽憋紝浣犱篃蹇潵璇曡瘯鍚э紒 ' + data.link_url);

            $('.plat_btn').on('click',function () {
                window._czc.push(['_trackEvent','璇曠帺-璇︽儏',data.trueTitle,data.title]);
                window.location.href = data.link_url;
            })

        },
        error: function (request) {

        }
    });

    sharePopup();//鐐瑰嚮鍙充笂瑙掑垎浜寜閽�

    raidersOne()//绗竴娆¤繘鍏ヨ鎯呴〉鏀荤暐
    raidersTwo()//绗簩娆¤繘鍏ヨ鎯呴〉鏀荤暐
    raidersThree()//绗笁娆¤繘鍏ヨ鎯呴〉鏀荤暐
    raidersFour()//绗洓娆¤繘鍏ヨ鎯呴〉鏀荤暐

    if (!is_wechat()) {
        $(".sharetopBtn").removeClass("uhide");
    }


    $('.plat_btn').on('click',function (event) {
        event.preventDefault();
        window.location.href = $(this).data('url');
        // if ($(this).data('url2'))
        // {
        //     window.location.href = $(this).data('url2');
        // } else {
        //     window.location.href = $(this).data('url');
        // }
    })

    aboutPhoto(platformid);

})


//绗竴娆¤繘鍏ヨ鎯呴〉鏀荤暐
function raidersOne() {
    $('.startBtn').on('click', function () {
        $('body').removeClass('no-scroll');
        $('.raider_step1').hide();
        localStorage.setItem('platDetail', '1');
        platDetail = Number(platDetail) + 1;
        localStorage.setItem('platDetail', platDetail);
    })

    $('.okBtn').on('click', function () {
        $('body').removeClass('no-scroll');
        $('.raider_step1').hide();
        localStorage.setItem('platDetail', '1');
        platDetail = Number(platDetail) + 1;
        localStorage.setItem('platDetail', platDetail);
    })
}

//绗簩娆¤繘鍏ヨ鎯呴〉鏀荤暐
function raidersTwo() {
    $('.raiders4').on('click', function () {
        $('body').removeClass('no-scroll');
        $('.raider_step2').hide();
        // platDetail = Number(platDetail) + 1;
        // localStorage.setItem('platDetail', platDetail);
        window.location.href="http://m.bohexg.com/home.html?channel=channel";
    })

    $('.raider_step2').on('click', function () {
        $('body').removeClass('no-scroll');
        $('.raider_step2').hide();
        platDetail = Number(platDetail) + 1;
        localStorage.setItem('platDetail', platDetail);
    })


}

//绗笁娆¤繘鍏ヨ鎯呴〉鏀荤暐
function raidersThree() {
    $('.popupShare').on('click', function () {
        $('.sharetopBtn').click();
        $('body').removeClass('no-scroll');
        $('.raider_step3').hide();
        platDetail = Number(platDetail) + 1;
        localStorage.setItem('platDetail', platDetail);
    })

    $('.raider_step3').on('click', function () {
        $('body').removeClass('no-scroll');
        $('.raider_step3').hide();
        platDetail = Number(platDetail) + 1;
        localStorage.setItem('platDetail', platDetail);
    })

}

//绗洓娆¤繘鍏ヨ鎯呴〉鏀荤暐
function raidersFour(){
    $('.popupShare').on('click', function () {
        $('.sharetopBtn').click();
        $('body').removeClass('no-scroll');
       $(".mask,.wxzq-red-pack-open").hide();
        platDetail = Number(platDetail) + 1;
        localStorage.setItem('platDetail', platDetail);
    })
    
    $(".wxzq-red-pack-open-close").click(function () {
        $('body').removeClass('no-scroll');
       $(".mask,.wxzq-red-pack-open").hide();
       platDetail = Number(platDetail) + 1;
       localStorage.setItem('platDetail', platDetail);
    });
}

//鐐瑰嚮鍙充笂瑙掑垎浜寜閽�
function sharePopup() {

    $('#mengban1').bind("touchmove", function (e) {
        $("#mengban1").hide();
        $("#copydiv").hide();
        $('body').removeClass('no-scroll');
        e.preventDefault();
    });

    $('#mengban1').click(function (e) {
        $("#mengban1").hide();
        $("#copydiv").hide();
        $('body').removeClass('no-scroll');
        e.preventDefault();
    });

    $('.sharetopBtn').on('click', function () {
        $("#mengban1").show();
        $("#copydiv").show();
        $('body').addClass('no-scroll');
    })
    clipboard();//澶嶅埗鏉�
}


// $('.ali-copy-btn').click(function() {
//     var clipboard = new Clipboard('.ali-copy-btn');
//     $(this).attr('data-clipboard-text', "580587007");
//     $(this).text('已复制');
//     $(this).css('background', '#D9D9D9');
//     $(this).css('color', '#999999');
// });

//澶嶅埗鏉�
function clipboard() {

    $('.shareBtn').click(function(){
        var clipboard = new Clipboard('.shareBtn');
        var link = $('.shareToLink').html().replace(/(^\s*)|(\s*$)/g, "");;
        $(this).attr('data-clipboard-text', link);
        $(this).text('已复制');
        $(this).css('background', '#D9D9D9');
        $(this).css('color', '#999999');

    });

    // var clipboard = new Clipboard('.shareBtn');
    // clipboard.on('success', function (e) {
    //     var msg = e.trigger.getAttribute('aria-label');
    //     alert(msg);
    //     $("#mengban1").hide();
    //     $("#copydiv").hide();
    //     $('body').removeClass('no-scroll');
    //     e.clearSelection();
    // });
}

/*鏀惧ぇ鍥剧墖杞挱灞曠ず**/
function aboutPhoto(platformid) {

    if(platformid==51){//璇曞
        $('.photobig,.manphotoshike').on('click', function (e) {
            if (e.target.className.toLowerCase().indexOf('swiper-button') >= 0) {
                return false;
            }
            $(this).hide();
        });
    }else{
        $('.photobig,.manphoto').on('click', function (e) {
            //$('body').removeClass('no-scroll');
            if (e.target.className.toLowerCase().indexOf('swiper-button') >= 0) {
                return false;
            }
            $(this).hide();
        });
    }

    var mySwiper;
    $('.photoListItem').on('click', function (e) {
        //alert(1123);
        //$('body').addClass('no-scroll');
        var _index = $('.photoListItem').index($(this));
        $('#photobig').show();
        if (!mySwiper) {
            mySwiper = new Swiper('.photobigGallary', {
                pagination: '.swiper-pagination',
                initialSlide: _index,
                onSlideChangeEnd: function (swiper) {
                }
            })
        }
        mySwiper.slideTo(_index, 0, false);
        mySwiper.update();
    });
    var mySwiper1;

    $('.manItem').on('click', function (e) {
        //$('body').addClass('no-scroll');
        var _indexs = $('.manItem').index($(this));
        if(platformid==51){
            $('.manphotoshike').show();
            if (!mySwiper1) {
                mySwiper1 = new Swiper('.manphotosshike', {
                    pagination: '.swiper-pagination',
                    initialSlide: _indexs,
                    onSlideChangeEnd: function (swiper) {
                    }
                })
            }
        }else{
            $('.manphoto').show();
            if (!mySwiper1) {
                mySwiper1 = new Swiper('.manphotos', {
                    pagination: '.swiper-pagination',
                    initialSlide: _indexs,
                    onSlideChangeEnd: function (swiper) {
                    }
                })
            }
        }
        mySwiper1.slideTo(_indexs, 0, false);
        mySwiper1.update();
    });
}

/**
 *鎵撳紑鍒嗕韩寮规
 **/
function share() {
    uexWindow.evaluateScript("", '0', "$('#myModal').reveal('animation:fade')");
    clickShareItem();
}

/**
 *鐐瑰嚮鍒嗕韩鍥炬爣璺宠浆
 **/
function clickShareItem() {
    $('.shareli').on('click', function () {
        var id = $(this).attr('data-id');
        var type = $(this).attr('data-type');
        //var skm = "<?php echo $s;?>";
        // if (skm == 'comcsshsquan') {
        //     window.location.href = skm + '://?type=' + type + '&' + 'id=' + id;
        // } else {
        // var skm2 = localStorage.getItem('skm');
        var skm3 = localStorage.getItem('skm');
        window.location = skm3 + '://-' + type + '+' + id;
        //}
    });
}