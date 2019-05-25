/***
 *鑷畾涔夊弬鏁�
 ***/
var tryPlayListLoaded = 0;//璇曠帺鍒楄〃鏄惁鍔犺浇杩� 0锛氬惁锛�1锛氭槸锛�
var tryPlayInfoLoaded = 0;//璇曠帺璧勮鏄惁鍔犺浇杩� 0锛氬惁锛�1锛氭槸锛�


var act = get_query_val('act');//鏄惁浠巑ain.html椤甸潰璺宠浆杩囨潵锛屾槸鐨勮瘽涓嶆樉绀烘柊鎵嬪紩瀵�
sessionStorage.setItem('act', act);
var fromApp = get_query_val('fromapp');//浠庡摢涓猘pp璺宠繃鏉ョ殑
sessionStorage.setItem('fromapp', fromApp);
$(function () {

    // 2017骞�09鏈�11鏃�17:14:32
    // 鍔ㄦ€佽幏鍙栧惎鍔ㄧ爜
    localStorage.removeItem('skm')
    var skm666 = get_query_val('skm');
    if (skm666) {
        localStorage.setItem('skm', skm666);

    } else {
        localStorage.setItem('skm', 'HHAA');

    }
    scroll_data();//婊氬姩鍏憡
    initBannerList();//banner鍒楄〃
    initTryPlayList();//璇曠帺鍒楄〃
    shareBtn(); //鍙充笂瑙掑垎浜寜閽�
    clickToArticlexbList();//璺宠浆鍒扮嚎鎶�
    knowScreen();//鐐瑰嚮鐭ラ亾浜�
    getIndexData();//鑾峰彇寰呴鍙栫孩鍖呬釜鏁�

    if (!is_wechat()) {
        $(".openShare").removeClass("uhide");
        $(".openAnswer").removeClass("uhide");
    }
    
    if(is_wechat()){
        $(".index-bottom-advert").css("display","none");
        $(".haimiangou").css("display","none");
    }

    var shareLink = location.href;
    $('.shareToLink').html(shareLink);

    $('#copytext').val('鏈€闈犺氨鐨勬墜鏈鸿禋閽卞钩鍙帮紝姣忎釜鏈堣交杞绘澗鏉句笂鍗冨厓闆惰姳閽憋紝浣犱篃蹇潵璇曡瘯鍚э紒 ' + shareLink);

    $('#mengban1').bind("touchmove", function (e) {
        $("#mengban1").hide();
        $("#copydiv").hide();
        e.preventDefault();
    });

    $('#mengban1').click(function (e) {
        $("#mengban1").hide();
        $("#copydiv").hide();
        e.preventDefault();
    });

    $("#close-share-text").click(function () {
        $("#mengban1").hide();
        $("#copydiv").hide();
    });
    $(".line").slideUp();

    $('.mengban').bind("touchmove", function (e) {
        e.preventDefault();
    });
    
    $(".haimiangou").click(function () {
        window.location.href = "/line/hongbao";
    });
    $(".totanrice").click(function () {
        window.location.href = 'http://tanrice.com/i/?10002';
    });
//   $(".wxzqian").click(function () {
//      $(".mask,.wxzq-red-pack-open").show();
//  });
    
    $(".wxzq-red-pack-open-close").click(function () {
       $(".mask,.wxzq-red-pack-open").hide();
    });


    if(get_query_val('pop') == 'wechat'){
        if (is_wechat()) {
          $('.popup-sa').show();
        }
    }
    var u = navigator.userAgent;
    var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1;
    if (isAndroid) {
        $('.index-bottom-guide').hide();
    }
    
    //澶╁ぉ棰嗙孩鍖呮渶楂�100
//  if(localStorage.getItem('firstCome')==1&&!localStorage.getItem('more100')){
//      $(".more100").show();
//      $(".more100-link").on("click",function(){
//          localStorage.setItem('more100',true);
//          $(".more100").hide();
//          $(".more100-alert").show();
//      });
//      $(".more100-alert-close").on("click",function(){
//          $(".more100-alert").hide();
//      })
//  }
//  getTeactherQQ();//娣诲姞瀵煎笀QQ

});

//璺宠浆
function goadvert(){
    window.location.href = "../advert4gqp/index.html"
}

//璺宠浆绛旈绾㈠寘椤甸潰
function openAnswer() {
    window.location.href = 'answerindex.html';
}
/*

//璺宠浆绛旈绾㈠寘椤甸潰
function openBohe() {
    window.location.href = 'http://m.bohexg.com/index.html?channel=channel';
}
*/

//鑾峰彇寰呴鍙栫孩鍖呬釜鏁�
function getIndexData() {
    user = getUser();
    var indexData = '';
    if (user.login) {
        indexData = {
            phone: user.data.phone,
            uid: user.data.uid
        }
    } else {
        indexData = {}
    }

    interface.getUserHomeData(indexData, function (data) {
        console.log(data);
        if (data.length == 0) {
           /* $('.answer_w').removeClass('uhide');
            $('.answer_dot').html('0');*/
        } else {
            if(data.alreadyCount > 0){
                $('.answer_w').removeClass('uhide');
                $('.answer_dot').html(data.alreadyCount);
            }

        }
    }, function (error) {
        console.log(error)
    })
}

//婊氬姩鍏憡
function scroll_data() {
    $('.scroll-text2').html('所有试玩平台每天15点以后更新任务');
    $('.scroll-text1').html('添加客服微信: fbz661');
    // $.ajax({
    //     type: 'GET',
    //     url: staticurl + '/index/jimi/announcement',
    //     contentType: 'application/json',
    //     dataType: 'jsonp',
    //     jsonp: 'callbackgg',
    //     jsonpCallback: 'backgg',
    //     async: true,
    //     success: function (data) {
    //         $('.scroll-text1').html(data[0].text);
    //         $('.scroll-text2').html(data[1].text);
    //         if(is_wechat()){
    //             $('.scroll-text2').html("鍔犲叆鍙嬭礉瀹樻柟QQ缇わ細593701279");
    //         }
    //         $('.scroll-text2').on("click",function(){
    //             window.location.href = "mqqapi://card/show_pslcard?src_type=internal&version=1&uin=593701279&card_type=group&source=external";
    //         });
    //     },
    //     error: function (request) {

    //     }
    // });
}


//璺宠浆鍒扮嚎鎶�
function clickToArticlexbList() {
    $('.articlexbList').on('click', function () {
        window.location.href = 'articlexbList.html'
    })
}

//banner鍒楄〃
function initBannerList() {
    $.ajax({
        type: 'GET',
        url: staticurl + '/index/jimi/bannerlist',
        contentType: 'application/json',
        dataType: 'jsonp',
        jsonp: 'callback',
        jsonpCallback: 'back',
        async: true,
        success: function (data) {
            // data = eval('(' + data + ')');
            $('#bannerList').html(template('t:bannerList', {list: data}));
            var mySwiper = new Swiper('.swiper-container', {
                loop: true,
                pagination: '.swiper-pagination',
                autoplay: 2000,
            });

            //鐐瑰嚮banner璺宠浆閾炬帴
            clickToBannerDetail();
        },
        error: function (request) {

        }
    });
}

//鐐瑰嚮banner璺宠浆閾炬帴
function clickToBannerDetail() {
    $(".banner").on('click', function () {
        var url = $(this).attr('data-url');
        // if ($(this).attr('data-id') == 3) {
        //     window.location.href = 'radiers.html';
        // } else {

            window.location.href =url;
        // }

    });
}

//鍒濆鍖栬瘯鐜╁垪琛�
function initTryPlayList() {
    $('#tryPlayList').html(template('t:tryPlayList'));

    tryPlayListLoaded = 1;
    var u = navigator.userAgent;
    var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1;
    if (isAndroid) {
        $('.index-bottom-guide').hide();
    }
    var item = $(".platform");
    clickToPlatformDetail(); //安装入口点击取消和安装
    clickbd();
    
    var userAgent = navigator.userAgent;
    if (userAgent.indexOf("Safari") > -1) {
        mainScreen();
    }

    // $.ajax({
    //     type: 'GET',
    //     url: staticurl + '/index/jimi/platformlist' + '/fromapp/' + fromApp,
    //     contentType: 'application/json',
    //     dataType: 'jsonp',
    //     jsonp: 'platform',
    //     jsonpCallback: 'platform',
    //     async: true,
    //     success: function (data) {
    //         $('#tryPlayList').html(template('t:tryPlayList', {list: data}));

    //         tryPlayListLoaded = 1;

    //         if (localStorage.getItem('firstCome') != 1) {
    //             $('.popup1').show();
    //             $('.popup1').append($('.platform:eq(0)').clone());
    //             closePopup1();
    //             $('body').addClass('no-scroll');
    //         }
    //         var _host = window.location.href;
    //         if(_host.indexOf("rukou")>0){
    //             sessionStorage.setItem("fromrukou",1);
    //         }
    //         if(sessionStorage.getItem("fromrukou")==1){
    //             $('body').removeClass('no-scroll');
    //             $('.popup1').hide();
    //             $('.index-bottom-guide').hide();
    //         }else{
    //             if(is_wechat()){
    //                 $('.index-bottom-guide').hide();
    //             }else{
    //                 $('.index-bottom-guide').show();
    //             }
    //         }
    //         var u = navigator.userAgent;
    // var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1;
    // if (isAndroid) {
    //     $('.index-bottom-guide').hide();
    // }

            
            
    //         var item = $(".platform");



    //         clickToPlatformDetail();
    //         clickbd();
            
    //         var userAgent = navigator.userAgent;
    //         if (userAgent.indexOf("Safari") > -1) {
    //             mainScreen();
    //         }

    //     },
    //     error: function (request) {

    //     }
    // });

    $.ajax({
        type: 'GET',
        url: staticurl + '/index/jimi/checkPeopleNum',
        contentType: 'application/json',
        dataType: 'jsonp',
        jsonp: 'checkPeopleNum',
        jsonpCallback: 'checkPeopleNum',
        async: true,
        success: function (data) {
            $('#checkPeopleNum').html(data.data);
        },
        error: function (request) {
        }
    });

}

//鍏抽棴鎻愮ず妗�1
function closePopup1() {
    if(sessionStorage.getItem("fromrukou")==1){
        $('.popup1').hide();
        $('.index-bottom-guide').hide();
    }else{
        if(!is_wechat()){
            $('.index-bottom-guide').show();
        }
    }
    var u = navigator.userAgent;
    var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1;
    if (isAndroid) {
        $('.index-bottom-guide').hide();
    }
    $('.popup1').on('click', function () {
        localStorage.setItem('firstCome', 1);
        $('.popup1').hide();
        $('body').removeClass('no-scroll');
    })
}

function clickToPlatformDetail() {
    // $('.platform-a').on('click', function () {
    //     if ($('.popup1').length > 0) {
    //         $('.popup1').remove();
    //         $('body').removeClass('no-scroll');
    //     }

    //     localStorage.setItem('firstCome', 1);
    //     if(sessionStorage.getItem("fromrukou")==1){
    //         $('.index-bottom-guide').hide();
    //     }else{
    //         if(!is_wechat()){
    //             $('.index-bottom-guide').show();
    //         }
    //         if(sessionStorage.getItem("showIndexButton")){
    //             $('.index-bottom-guide').hide();
    //         }
    //     }
    //     var u = navigator.userAgent;
    // var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1;
    // if (isAndroid) {
    //     $('.index-bottom-guide').hide();
    // }
    //     var $this = $(this);
    //     var style = $this.attr('data-type');
    //     var linkUrl = $this.attr('data-linkUrl');
    //     var platformid = $this.attr('data-id');
    //     var utitle = $this.attr('data-utitle');
    //     var trueTitle = $this.attr('data-trueTitle');
    //     var title = $this.attr('data-title');
    //     var platnum = $this.attr('data-platnum');
    //     window._czc.push(['_trackEvent', '璇曠帺-鍒楄〃', trueTitle, title]);
    //     if (style == 2) {
    //         window.location.href = linkUrl;
    //     } else if (platformid == 89 || platformid == 64 || platformid == 90 || platformid == 92 || platformid == 95 || platformid == 104 || platformid == 102 || platformid == 109) {
    //         window.location.href = linkUrl;
    //     } else {
    //         if (utitle == 0) {
    //             window.location.href = 'platformDetail.html?platformid=' + platformid + '&platnum=' + platnum;
    //         } else {
    //             window.location.href = 'platformDetail.html?platformid=' + platformid;
    //         }

    //     }
    //     return false;
    // })
}

//tab閫変腑鍒囨崲
function checked(t) {
    var $this = $(t);
    $this.addClass('actived').siblings('.item').removeClass('actived');
    var data_index = $this.index();
    tab(data_index);
    if (data_index == 1) {
        $('.tab').addClass('bc-wh');
        $('.triangle-left').addClass('uhide');
        $('.triangle-right').removeClass('uhide');
        $('.tab-wrap .tab').css('background-color', '#ffffff');
    } else {
        $('.tab').removeClass('bc-wh');
        $('.triangle-left').removeClass('uhide');
        $('.triangle-right').addClass('uhide');
        $('.tab-wrap .tab').css('background-color', '#f4f4f4');
    }
}

//搴曢儴鍥哄畾鏍忛€変腑鍒囨崲
function checkFooter(t) {
    var $this = $(t);
    $this.addClass('actived').siblings('.item').removeClass('actived');
    var data_index = $this.index();
    tab(data_index);
}


/**
 *鍒囨崲鏄剧ず椤甸潰
 * @param {Object} tab_index
 */
function tab(tab_index) {
    tab_index = parseInt(tab_index);
    switch (tab_index) {
        case 0:
            if (!tryPlayListLoaded) {
                initTryPlayList();
            }
            $("#tabTryPlayList").removeClass("uhide");
            $("#tabTryPlayInfo").addClass("uhide");
            break;
        case 1:
            if (!tryPlayInfoLoaded) {
            }
            $("#tabTryPlayInfo").removeClass("uhide");
            $("#tabTryPlayList").addClass("uhide");
            break;
    }
}

/***
 *鍙充笂瑙掑垎浜寜閽�
 ***/
function shareBtn() {
    $(".openShare").click(function () {
        $("#mengban1").show();
        $("#copydiv").show();
    })
    clipboard();//澶嶅埗鏉�
}

//澶嶅埗鏉�
function clipboard() {


    var clipboard = new Clipboard('.btn');


    clipboard.on('success', function (e) {
        var msg = e.trigger.getAttribute('aria-label');
        alert(msg);
        $("#mengban1").hide();
        $("#copydiv").hide();
        e.clearSelection();
    });
}

/**瀹㈡湇**/
function kefu() {
    _MEIQIA('showPanel');

}

(function (m, ei, q, i, a, j, s) {
    m[i] = m[i] || function () {
        (m[i].a = m[i].a || []).push(arguments)
    };
    j = ei.createElement(q),
            s = ei.getElementsByTagName(q)[0];
    j.async = true;
    j.charset = 'UTF-8';
    j.src = '//static.meiqia.com/dist/meiqia.js?_=t';
    s.parentNode.insertBefore(j, s);
})(window, document, 'script', '_MEIQIA');
_MEIQIA('entId', '56427');
_MEIQIA('withoutBtn');
_MEIQIA('hidePanel');

//
//
// function show_talk() {
//
// }

function getTeactherQQ(){
    if(localStorage.getItem('firstCome')==1){
        var _data = JSON.stringify({
        url_no:'seo8'
        });
        $.ajax({
            type: 'POST',
            contentType: "application/json",
            url: 'https://pc.youbeiapp.com/product/dataInfo',
            data: _data,
            success: function(res) {
                var seonum = res.data.contact_qq||'';
                console.log(seonum);
                $('.addqq-value').html(seonum);
                $('#addQQ').val(seonum);
                if(localStorage.getItem('capyQQ')){
                    $('.addqq').hide();//澶嶅埗杩嘠Q锛屼笉鍐嶅脊鍑�
                }else{
                    $('.addqq').show();
                }
            },
            error: function(res) {
                console.log('err:'+res)
            }
        });
        
        var clipboard = new Clipboard('#addQQButton');
        clipboard.on('success', function(e) {
            alert("澶嶅埗鎴愬姛");
            localStorage.setItem('capyQQ',true);
            e.clearSelection();
        });
        clipboard.on('error', function(e) {
            alert("澶嶅埗澶辫触锛�");
        });
        $('.addqq-close').on('click',function(){
            $('.addqq').hide();
        });
    }
    
    
}
