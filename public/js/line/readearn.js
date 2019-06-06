/***
 *鑷畾涔夊弬鏁�
 ***/
var tryPlayListLoaded = 0;//璇曠帺鍒楄〃鏄惁鍔犺浇杩� 0锛氬惁锛�1锛氭槸锛�
var tryPlayInfoLoaded = 0;//璇曠帺璧勮鏄惁鍔犺浇杩� 0锛氬惁锛�1锛氭槸锛�

$(function () {
    //initBannerList();//banner鍒楄〃
    initTryPlayList();//璇曠帺鍒楄〃
    knowScreen();//鐐瑰嚮鐭ラ亾浜�
    shareBtn();//鍙充笂瑙掑垎浜寜閽�


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


    // var u = navigator.userAgent;
    // var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1;
    // if(isAndroid){
    //     $('.android-item').show();

    // }else{
    //     $('.ios-item').show();
    // }
    $('.ios-item').show();

    if(!is_wechat()){
        if(isAndroid){
            $(".openShare").removeClass("uhide");
        }
    }

});


//banner鍒楄〃
function initBannerList() {
    $.ajax({
        type: 'GET',
        url: staticurl + '/index/jimi/readArticleBannerList',
        contentType: 'application/json',
        dataType: 'jsonp',
        jsonp: 'readArticleBannerList',
        jsonpCallback: 'readArticleBannerList',
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
        window.open(url);
    });
}

//鍒濆鍖栬瘯鐜╁垪琛�
function initTryPlayList() {
    $.ajax({
        type: 'GET',
        url: staticurl + '/index/jimi/readArticleList',
        contentType: 'application/json',
        dataType: 'jsonp',
        jsonp: 'readArticleList',
        jsonpCallback: 'readArticleList',
        async: true,
        success: function (data) {
            // data = eval('(' + data + ')');
            $('#tryPlayList').html(template('t:tryPlayList', {list: data}));
            //鐐瑰嚮璺宠浆骞冲彴璇︽儏椤甸潰

            tryPlayListLoaded = 1;

            clickToPlatformDetail();//鐐瑰嚮杩涘叆璇︽儏椤�

            var u = navigator.userAgent;
            var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1;
            if(!isAndroid){
                $('.bdphoto').remove();
            }
            clickbd();

            /*var userAgent = navigator.userAgent;
            if (userAgent.indexOf("Safari") > -1) {
                if(localStorage.getItem('screens') != 1){
                    mainScreen();//鎻愮ず娣诲姞涓诲睆骞曠獥鍙�
                }

            }*/
            var userAgent = navigator.userAgent;
            if (userAgent.indexOf("Safari") > -1) {
                mainScreen();//鎻愮ず娣诲姞涓诲睆骞曠獥鍙�
            }
        },
        error: function (request) {

        }
    });
}

//鐐瑰嚮璺宠浆骞冲彴璇︽儏椤甸潰
function clickToPlatformDetail() {
    $('.platform-a').on('click', function () {
        if ($('.popup1').length > 0) {
            $('.popup1').remove();
            $('body').removeClass('no-scroll');
        }

        localStorage.setItem('firstCome', 1);
        var $this = $(this);
        var rid = $this.attr('data-id');
        window.location.href = 'readDetail.html?rid=' + rid;
        return false;
    })
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
