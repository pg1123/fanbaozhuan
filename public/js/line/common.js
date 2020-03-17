var isPrivate = false;
try {
    window.openDatabase(null, null, null, null);
} catch (_) {
    isPrivate = true;
}

if (isPrivate){
    //window.location="http://fanbaozhuan.com/wuhen.html";
}



/**
 *鏍规嵁鍙傛暟鍚嶇О鑾峰彇瀵瑰簲鐨勫€�
 */
function get_query_val(name) {

    return null;
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]);
    return null;

}

//鍚庡彴鍦板潃
//var staticurl = "http://192.168.1.3:8099"
var staticurl = "https://api.jimivip.com";
var fanbaourl = "https://fanbaozhuan.local";


var globalTimer;

function IsPC() {
    var userAgentInfo = navigator.userAgent;
    var Agents = ["Android", "iPhone",
        "SymbianOS", "Windows Phone",
        "iPad", "iPod"];
    var flag = true;
    for (var v = 0; v < Agents.length; v++) {
        if (userAgentInfo.indexOf(Agents[v]) > 0) {
            flag = false;
            break;
        }
    }
    return flag;
}

var flag = IsPC();
if (flag) {
    location.href = "static/youbeiWebsite/index.html";
}

//娣诲姞涓诲睆骞�
function mainScreen() {
     $('.fheight').show();
     $('.bottom-tip-wrap').show();
     $('.bottom-tip-wrap').on('click', function () {
         $('.popup-screen').show();
     });

     $('.close-entry').on('click', function () {
        $('.fheight').remove();
        $('.bottom-tip-wrap').remove();
     });

    if(sessionStorage.getItem("fromrukou")==1){
        $('.index-bottom-guide').hide();
    }else{
        if(!device=="isIphoneOs"&&!device=="isIpad"){
            $('.index-bottom-guide').hide();
        }else{
            var _firstCome = localStorage.getItem("firstCome");
            var _showIndexButton = localStorage.getItem("showIndexButton");
            var _showIndexButtonSession = sessionStorage.getItem("showIndexButton");
            
            if (is_safari()) {
                if(_firstCome && !is_wechat()) {
                    console.log(_firstCome);
                    $('.index-bottom-guide').show();
                }
                $('.index-button-down').on('click', function(event) {
                    event.stopPropagation();
                    $('.down-yb-mask').show();
                    $('.index-bottom-guide').hide();
                })
                $('.index-button-close').on('click', function(event) {
                    event.stopPropagation();
                    sessionStorage.setItem("showIndexButton", "close");
                    $('.index-bottom-guide').hide();
                })
                
                $('.down-yb-button').on('click', function(event) {
                    event.stopPropagation();
                    localStorage.setItem("showIndexButton", "down");
                    $('.index-bottom-guide').hide();
                    $('.down-yb-mask').hide();
                    window.location.href="http://www.jimivip.com/luckyjm.mobileconfig";
                })
                $('.down-yb-close').on('click', function(event) {
                    event.stopPropagation();
                    $('.down-yb-mask').hide();
                    $('.index-bottom-guide').show();
                })
            }else{
                $('.index-bottom-guide').hide();
            }
        }
    }
    var u = navigator.userAgent;
    var isAndroid = u.indexOf('Android') > -1 || u.indexOf('Adr') > -1;
    if (isAndroid) {
        $('.index-bottom-guide').hide();
    }
    
}

//鐐瑰嚮鐭ラ亾浜�
function knowScreen() {
    $('.know-btn').on('click', function () {
        $('.popup-screen').hide();
    })
}

//鍏抽棴搴曢儴鎻愮ず
function closeEntrance() {
    localStorage.setItem('screens', 1);
    $('.fheight').remove();
    $('.bottom-tip-wrap').remove();
    return false;
}

// 灞忚斀寮规鑳屾櫙婊戝姩
$(document).on("touchmove", '.popup1', function (e) {
    e.preventDefault();
});
$(document).on("touchmove", '.hdPopUp', function (e) {
    e.preventDefault();
});

/**
 *鍒ゆ柇鏄惁鏄井淇℃祻瑙堝櫒
 */
function is_wechat() {
    var ua = window.navigator.userAgent.toLowerCase();
    if (ua.match(/MicroMessenger/i) == 'micromessenger') {
        return 1;
    } else {
        return 0;
    }
}
function is_safari(){
    var userAgent = navigator.userAgent; //鍙栧緱娴忚鍣ㄧ殑userAgent瀛楃涓�
    if (userAgent.indexOf("Safari") > -1) {
        return 1;
    }else {
        return 0;
    }
}

function clickbd() {
    $('.bdphoto').on('click', function () {
        window.location.href = 'bddetail.html';
    })
}


//鑾峰彇鍥轰欢鐗堟湰
function getOsv() {
    var reg = /OS ((\d+_?){2,3})\s/;
    if (navigator.userAgent.match(/iPad/i) || navigator.platform.match(/iPad/i) || navigator.userAgent.match(/iP(hone|od)/i) || navigator.platform.match(/iP(hone|od)/i)) {
        var osv = reg.exec(navigator.userAgent);
        if (osv.length > 0) {
            return osv[0].replace('OS', '').replace('os', '').replace(/\s+/g, '').replace(/_/g, '.');
        }
    }
    return '';
}


//鑾峰彇localstorage
function _GET_DATA(key) {
    if (localStorage) {
        var value = localStorage.getItem('_data__' + key);
        if (value) {
            var j = JSON.parse(value);
            if (j.time && j.time < new Date()) {
                localStorage.removeItem('_data__' + key);
                return null;
            }
            return j.data;
        }
    }
    return null;
}

//璁剧疆localstorage
function _SET_DATA(key, value, time) {
    if (localStorage) {
        var t = null;
        if (time && time.length >= 2) {
            try {
                t = new Date();
                var n = parseInt(time.substring(0, time.length - 1));
                var f = time.substring(time.length - 1, time.length);

                switch (f) {
                    case 's':
                        t.setSeconds(t.getSeconds() + n);
                        break;
                    case 'm':
                        t.setMinutes(t.getMinutes() + n);
                        break;
                    case 'h':
                        t.setHours(t.getHours() + n);
                        break;
                    case 'd':
                        t.setDate(t.getDate() + n);
                        break;
                    case 'w':
                        t.setDate(t.getDate() + (n * 7));
                        break;
                    case 'M':
                        t.setMonth(t.getMonth() + n);
                        break;
                    case 'y':
                        t.setFullYear(t.getFullYear() + n);
                        break;
                }
                t = t.getTime();
            } catch (e) {
                t = null;
            }
        }
        localStorage.setItem('_data__' + key, JSON.stringify({data: value, time: t}));
        return true;
    }
    return false;
}

//鍒犻櫎localstorage
function _DEL_DATA(key) {
    if (localStorage) {
        localStorage.removeItem('_data__' + key);
    }
}


function getUser() {//寰楀埌鐢ㄦ埛淇℃伅
    var user = _GET_DATA('user');
    return user ? user : {login: false};
}

function setUser(user) {//璁剧疆鐢ㄦ埛淇℃伅
    _SET_DATA('user', user);
}

function delUser(user) {//鍒犻櫎杩囨湡token
    _DEL_DATA('user', user);
}

//鏍￠獙
function trim(str) { //鍒犻櫎宸﹀彸涓ょ鐨勭┖鏍�
    return str.replace(/(^\s*)|(\s*$)/g, "");
}

function matchMobile(val) {//鏍￠獙鎵嬫満鍙�
    var valnew = trim(val);
    if (valnew.match(/^(13[0-9]|14[0-9]|15[0-9]|17[0-9]|18[0-9])\d{8}$/)) {
        return true;
    } else {
        return false;
    }
}


var device = (function () {//鍒ゆ柇璁块棶缁堢
    var sUserAgent = navigator.userAgent.toLowerCase();
    return {
        isIpad: sUserAgent.match(/ipad/i) == "ipad",
        isIphoneOs: sUserAgent.match(/iphone os/i) == "iphone os",
        isAndroid: sUserAgent.match(/android/i) == "android",
        isWeiXin: sUserAgent.match(/micromessenger/i) == "micromessenger",
        isWeiBo: sUserAgent.match(/weibo/i) == "weibo"
    }
})();

/*鍒ゆ柇鏄惁鏄痠os9浠ヤ笂*/
function isIOS9() {
    //鑾峰彇鍥轰欢鐗堟湰
    var getOsv = function () {
        var reg = /OS ((\d+_?){2,3})\s/;
        if (navigator.userAgent.match(/iPad/i) || navigator.platform.match(/iPad/i) || navigator.userAgent.match(/iP(hone|od)/i) || navigator.platform.match(/iP(hone|od)/i)) {
            var osv = reg.exec(navigator.userAgent);
            if (osv.length > 0) {
                return osv[0].replace('OS', '').replace('os', '').replace(/\s+/g, '').replace(/_/g, '.');
            }
        }
        return '';
    };
    var osv = getOsv();
    var osvArr = osv.split('.');
    //鍒濆鍖栨樉绀篿os9寮曞
    if (osvArr && osvArr.length > 0) {
        if (parseInt(osvArr[0]) == 9 || parseInt(osvArr[0]) == 10) {
            return true
        }
    }
    return false
}


var createIframe = (function () {
    var iframe;
    return function () {
        if (iframe) {
            return iframe;
        } else {
            iframe = document.createElement('iframe');
            iframe.style.display = 'none';
            document.body.appendChild(iframe);
            return iframe;
        }
    }
})()


function dialogLogin(options) {
    var dialogHtml = '<div class="popup">' +
            '<div class="layer_bg"></div>' +
            '<div class="layer_box popup_opt  bg_white"><div class="form">' +
            '        <div class="item">' +
            '                <input autofocus="autofocus" class="ub ub-f1 fts_15 dphone" type="text" maxlength="11" placeholder="璇疯緭鍏ユ墜鏈哄彿" style="padding-right: 3rem">' +
            '                <div class="send fts_13 btndis">' +
            '                    鍙戦€侀獙璇佺爜' +
            '                </div>' +
            '        </div>' +
            '        <div class="item">' +
            '                <input class="ub ub-f1 fts_15 dcode" maxlength="4" type="text" placeholder="璇疯緭鍏ラ獙璇佺爜">' +
            '        </div>' +
            '    </div>' +
            '    <div class="start_btn fts_16" onclick="diaLogin()">' +
            '        寮€濮嬭禋閽�' +
            '    </div>' +

            '</div>' +
            '</div>';
    $('body').append(dialogHtml);

    $('.popup').show(200).addClass('show');
    $('.layer_box').addClass('popup-in');

    if (!options) {
        options = {};
    }

    $('.layer_bg').on('click', function (e) {
        dialogClose();
        clearTimeout(globalTimer);
    })


    $('.popup .send').on('click',function () {
        diaGetCode();
    })

    function dialogClose() {
        $('.popup').remove();
    }

    enterLogin();
}


function dialogReg(options) {
    if (!options) {
        options = {};
    }
    console.log(options.parentid);
    var dialogHtml = '<div class="popup">' +
            '<div class="layer_bg"></div>' +
            '<div class="layer_box popup_opt  bg_white diareg">' +
            '<div class="fts_18 tc">娉ㄥ唽</div>' +
            '<div class="form">' +
            '        <div class="item">' +
            '            <div class="ub">' +
            '                <input  autofocus="autofocus" class="ub ub-f1 fts_15 dphone" type="text" maxlength="11" placeholder="璇疯緭鍏ユ墜鏈哄彿" style="padding-right: 3rem">' +
            '                <div class="send fts_13 btndis">' +
            '                    鍙戦€侀獙璇佺爜' +
            '                </div>' +
            '            </div>' +
            '        </div>' +
            '        <div class="item">' +
            '            <div class="ub">' +
            '                <input class="ub ub-f1 fts_15 dcode" maxlength="4" type="text" placeholder="璇疯緭鍏ラ獙璇佺爜">' +
            '            </div>' +
            '        </div>' +
            '    </div>' +
            '    <div class="start_btn fts_16" onclick="diaLogin(' + options.parentid + ',' + options.bagNum + ')">' +
            '        寮€濮嬭禋閽�' +
            '    </div>' +
            '<div class="tc" style="padding-top: 12px;color: #666666;">姣忓ぉ绛旈鍙摐鍒�20涓囩幇閲戠孩鍖�</div>' +
            '</div>' +
            '</div>';
    $('body').append(dialogHtml);

    $('.popup').show(200).addClass('show');
    $('.layer_box').addClass('popup-in');


    $('.popup .layer_bg').on('click', function (e) {
        dialogClose();
        clearTimeout(globalTimer);
    })

    $('.popup .send').on('click',function () {
        diaGetCode();
    })

    function dialogClose() {
        $('.popup').remove();
    }

    //enterLogin(options.parentid);
}

//鑾峰彇楠岃瘉鐮�
function diaGetCode() {
    var phone = trim($('.dphone').val());
    if (!matchMobile(phone)) {
        alertReturn('璇疯緭鍏ユ纭殑鎵嬫満鍙风爜');
        return;
    }

    interface.getCode({
        phone: phone
    }, function (data) {
        console.log(data);
        if (data.code == 200) {
            captcha(60);
        } else {
            alertReturn(data.mes);
        }

    }, function (err) {
        console.log(err)
    })

    var time;

    function captcha(coolDown) {
        time = coolDown;
        $(".send").html("" + time + " s").removeClass("btndis");
        lazy();
    }

    function lazy() {
        if (time >= 1) {
            $(".send").html("" + time-- + " s");
            globalTimer = setTimeout(lazy, 1000);
        }
        else {
            $(".send").html("鍙戦€侀獙璇佺爜").addClass("btndis");
        }
    }
}

function enterLogin() {
    $(document).keyup(function (event) {//鍥炶溅鐧诲綍
        if (event.keyCode == 13) {
            diaLogin();
        }
    });
}

//鐧诲綍鏂规硶
function diaLogin(parentid, bagNum) {
    var phone = trim($('.dphone').val());
    var code = trim($('.dcode').val());
    if (!matchMobile(phone)) {
        alertReturn('璇疯緭鍏ユ纭殑鎵嬫満鍙风爜');
        return;
    }

    if (!code) {
        alertReturn('璇疯緭鍏ラ獙璇佺爜');
        return;
    }
    interface.login({
        money: bagNum,
        parentid: parentid,
        phone: phone,
        code: code
    }, function (data) {
        if (data.code == 200) {
            data.login = true;
            setUser(data);
            $('.popup').remove();
            if (!parentid) {
                getIndexData();
            }

        } else {
            alertReturn(data.mes);
        }
    }, function (err) {
        console.log(err);
    })
}


function dialogShare(options) {
    var dialogHtml = '<div class="popup_share">' +
            '<div class="layer_bg"></div>' +
            '<div id="sharBtn" class="share_opt">' +
            '    <img class="share_img" src="static/answer/image/other/share.png" alt="">' +
            '    <p class="tc fts_14">' +
            '        寰俊鏈嬪弸鍦�' +
            '    </p>' +
            '</div>' +
            '</div>';
    $('body').append(dialogHtml);

    $('.popup_share').show(200).addClass('show');
    $('.popup_share .share_opt').addClass('popup-in');

    if (!options) {
        options = {};
    }

    if (options.funcOkey) {
        $('.popup_share .share_opt').on('click', function () {
            options.funcOkey();
            dialogClose();
        })
    } else {
        $('.popup_share .share_opt').on('click', function () {
            dialogClose();
        })
    }

    $('.popup_share .layer_bg').on('click', function (e) {
        dialogClose();
    })

    function dialogClose() {
        $('.popup_share').hide();
    }
}

//绾㈠寘1
function dialogRedbag1(options) {
    var dialogHtml = '<div class="popup">' +
            '<div class="layer_bg"></div>' +
            '<div class="layer_box popup_opt bg_red" style="width: 6.8rem;">' +
            '<div class="redbag1">' +
            '    <p class="tt">' +
            '        鎭枩鑾峰緱鐜伴噾绾㈠寘' +
            '    </p>' +
            '    <div class="dot_bg">' +
            '        <p class="fts_16">' +
            '            鐜伴噾' +
            '        </p>' +
            '        <p style="padding: 8px 0;">' +
            '           <span class="getred fts_20"></span>' +
            '            <span class="fts_12">鍏�</span>' +
            '        </p>' +
            '        <div class="cantext fts_10">' +
            '            鍙彁鐜�' +
            '        </div>' +
            '    </div>' +
            '    <div class="line_bg">' +
            '        <span>' +
            '            濂藉弸鍙備笌绛旈锛屾偍涔熷彲浠ヨ幏寰楃瓑棰濆鍔憋紝鍙備笌濂藉弸瓒婂锛屾偍鑾峰緱鐜伴噾濂栧姳瓒婂' +
            '        </span>' +
            '    </div>' +
            '' +
            '    <div class="toget_money fts_14">' +
            '棰嗗彇绾㈠寘' +
            '    </div>' +
            '</div>' +
            '</div>' +
            '</div>';
    $('body').append(dialogHtml);

    $('.popup').show(200).addClass('show');
    $('.layer_box').addClass('popup-in');

    if (!options) {
        options = {};
    }

    if (options.number) {
        $('.popup .popup_opt .getred').html(options.number);
    }
    if (options.funcOkey) {
        $('.popup .popup_opt .toget_money').on('click', function () {
            options.funcOkey();
            dialogClose();
        })
    } else {
        $('.popup .popup_opt .toget_money').on('click', function () {
            dialogClose();
        })
    }

    function dialogClose() {
        $('.popup').remove();
    }
}


//绾㈠寘2
function dialogRedbag2(options) {
    var dialogHtml = '<div class="popup">' +
            '<div class="layer_bg"></div>' +
            '<div class="layer_box popup_opt bg_red" style="width: 6.8rem;">' +
            '<div class="redbag2">' +
            '    <p class="tt">' +
            '        鎭枩鑾峰緱鐜伴噾绾㈠寘' +
            '    </p>' +
            '    <div class="dot_bg">' +
            '        <p class="fts_16">' +
            '            鐜伴噾' +
            '        </p>' +
            '        <p style="padding: 8px 0;">' +
            '           <span class="getred fts_20"> </span>' +
            '            <span class="fts_12">鍏�</span>' +
            '        </p>' +
            '        <div class="cantext fts_10">' +
            '            鍙彁鐜�' +
            '        </div>' +
            '    </div>' +
            '    <div class="line_bg">' +
            '        <span>' +
            '            鍙戦€佺粰濂藉弸鎴栨湅鍙嬪湀锛屼笖琚ソ鍙嬭鐪熼槄璇荤瓟棰樺悗锛屾墠鑳芥嬁鍒扮幇閲戝鍔憋紝鑻ユ病鏈夊ソ鍙嬬湅鍒帮紝鍒欏鍔变細琚彇娑�' +
            '        </span>' +
            '    </div>' +
            '' +
            '    <div class="toget_money fts_14">' +
            '鍒嗕韩骞堕鍙�' +
            '    </div>' +
            '    <div class="no_get fts_14">' +
            '鏆備笉棰嗗彇' +
            '    </div>' +
            '</div>' +
            '</div>' +
            '</div>';
    $('body').append(dialogHtml);

    $('.popup').show(200).addClass('show');
    $('.layer_box').addClass('popup-in');

    if (!options) {
        options = {};
    }
    if (options.number) {
        $('.popup .popup_opt .getred').html(options.number);
    }
    if (options.funcOkey) {
        $('.popup .popup_opt .toget_money').on('click', function () {
            dialogClose();
            options.funcOkey();

        })
    } else {
        $('.popup .popup_opt .toget_money').on('click', function () {
            dialogClose();
        })
    }

    if (options.funcCancel) {
        $('.popup .popup_opt .no_get').on('click', function () {
            options.funcCancel();
            dialogClose();
        })
    } else {
        $('.popup .popup_opt .no_get').on('click', function () {
            dialogClose();
        })
    }

    /* $('.layer_bg').on('click', function (e) {
         dialogClose();
     })*/

    function dialogClose() {
        $('.popup').remove();
    }
}


//绾㈠寘3
function dialogRedbag3(options) {
    var dialogHtml = '<div class="popup">' +
            '<div class="layer_bg"></div>' +
            '<div class="layer_box popup_opt redbag_3 " style="width: 6.8rem;">' +
            '<div class="redbag3">' +
            '<div class="bg_bag">' +
            '    <div class="dot_bg">' +
            '        <p class="fts_16">' +
            '            鐜伴噾' +
            '        </p>' +
            '        <p style="padding: 8px 0;">' +
            '           <span class="getred fts_20"></span>' +
            '            <span class="fts_12">鍏�</span>' +
            '        </p>' +
            '        <div class="cantext fts_10">' +
            '            鍙彁鐜�' +
            '        </div>' +
            '    </div>' +
            '    <p class="tt">' +
            '        閭€璇锋柊鐢ㄦ埛濂栧姳宸插埌璐�' +
            '    </p>' +
            '    <div class="line_bg">' +
            '        <span>' +
            '            濂藉弸鍙備笌绛旈锛屾偍涔熷彲浠ヨ幏寰楃瓑棰濆鍔憋紝鍙備笌濂藉弸瓒婂锛屾偍鑾峰緱鐜伴噾濂栧姳瓒婂' +
            '        </span>' +
            '    </div>' +
            '' +
            '    <div class="toget_money fts_14">' +
            '鐭ラ亾浜�' +
            '    </div>' +
            '</div>' +
            '</div>' +
            '</div>' +
            '</div>';
    $('body').append(dialogHtml);

    $('.popup').show(200).addClass('show');
    $('.layer_box').addClass('popup-in');

    if (!options) {
        options = {};
    }

    if (options.number) {
        $('.popup .popup_opt .getred').html(options.number);
    }
    if (options.funcOkey) {
        $('.popup .popup_opt .toget_money').on('click', function () {
            options.funcOkey();
            dialogClose();
        })
    } else {
        $('.popup .popup_opt .toget_money').on('click', function () {
            dialogClose();
        })
    }

    $('.layer_bg').on('click', function (e) {
        dialogClose();
    })

    $('.toget_money').on('click', function () {
        dialogClose();
    })

    function dialogClose() {
        $('.popup').remove();
    }
}


//涓嶅30鍏冩彁绀哄脊妗�
function dialogRedbag4(options) {
    var dialogHtml = '<div class="popup">' +
            '<div class="layer_bg"></div>' +
            '<div class="layer_box popup_opt bg_red" style="width: 6.8rem;">' +
            '<div class="close"></div>'+
            '<div class="redbag4">' +
            '<img src="static/answer/image/aindex/tip.png" alt="">'+
            '    <div class="line_bg fts_15">' +
            '        <span>' +
            '            1涓ソ鍙嬬瓟棰樹綘鍙幏寰�10鍏冿紝鍙渶鍒嗕韩缁欏嚑涓ソ鍙嬬瓟棰橈紝灏辫兘杞绘澗鎻愮幇浜嗭紝蹇幓璇曡瘯鍚�!' +
            '        </span>' +
            '    </div>' +
            '' +
            '    <div class="toget_money fts_16">' +
            '鍘诲枈濂藉弸绛旈' +
            '    </div>' +
            '</div>' +
            '</div>' +
            '</div>';
    $('body').append(dialogHtml);

    $('.popup').show(200).addClass('show');
    $('.layer_box').addClass('popup-in');

    if (!options) {
        options = {};
    }

    if (options.funcOkey) {
        $('.popup .popup_opt .toget_money').on('click', function () {
            options.funcOkey();
            dialogClose();
        })
    } else {
        $('.popup .popup_opt .toget_money').on('click', function () {
            dialogClose();
        })
    }
    $('.layer_bg').on('click', function (e) {
        dialogClose();
    })
    $('.popup .close').on('click', function (e) {
        dialogClose();
    })
    function dialogClose() {
        $('.popup').remove();
    }
}


/*toast寮规*/
function alertReturn(alertContent, time) {
    var countDown = time ? time : 2000;
    if ($('.alert_return').length > 0) {
        $('.alert_return').remove();
        clearTimeout(timer);
    }
    var alertHtml = '<div class="alert_return fts_13"><div class="main_text"></div></div>';
    $("body").append(alertHtml);
    $('.alert_return .main_text').append(alertContent);
    $(".alert_return").show();
    $('.alert_return').addClass('animated');
    $('.alert_return').addClass('fadeIn');
    $('.alert_return').addClass('popup-in');
    timer = setTimeout(function remove() {
        $(".alert_return").remove();
    }, countDown);
}


function alertReturnJump(alertContent, jumpUrl) {/*toast寮规2绉掑悗璺宠浆*/
    if ($('.alert_return').length > 0) {
        $('.alert_return').remove();
        clearTimeout(timer);
    }
    var alertHtml = '<div class="alert_return animated fts-14 animated fadeIn"><div class="main_text"></div></div>';
    $("body").append(alertHtml);
    $('.alert_return .main_text').append(alertContent);
    $(".alert_return").show();
    timer = setTimeout(function remove() {
        if (!jumpUrl) {
            history.go(-1);
        } else {
            window.location.href = jumpUrl;
        }

    }, 1000);
}

//5灏忔椂鎻愮ず寮规
function dialogTime(options) {
    var dialogHtml = '<div class="popup_time">' +
            '<div class="layer_bg"></div>' +
            '<div class="layer_box popup_opt bg_white" style="width: 7.8rem;padding: 0;">' +
            '<div class="tc fts_17" style="padding: 2.5em 0;">姣�5灏忔椂鎵嶅彲绛旈涓€娆�</div>' +
            '<div onclick="jumpstore()" style="font-size:15px;padding: 1em 0;text-align: center;display: block;color: #e75235;border-top: 1px solid #dddddd" href="index.html">鍘昏禋閽�</div>' +
            '</div>' +
            '</div>';
    $('body').append(dialogHtml);

    $('.popup_time').show(200).addClass('show');
    $('.popup_time .layer_box').addClass('popup-in');

    if (!options) {
        options = {};
    }

    if (options.funcOkey) {
        $('.popup_time .popup_opt .toget_money').on('click', function () {
            options.funcOkey();
            dialogClose();
        })
    } else {
        $('.popup_time .popup_opt .toget_money').on('click', function () {
            dialogClose();
        })
    }

    function dialogClose() {
        $('.popup_time').hide();
    }
}

//闅忔満鏁�
function randomNum(minNum, maxNum) {
    switch (arguments.length) {
        case 1:
            return parseInt(Math.random() * minNum + 1, 10);
            break;
        case 2:
            return parseInt(Math.random() * (maxNum - minNum + 1) + minNum, 10);
            break;
        default:
            return 0;
            break;
    }
}


