//绛旈server鍦板潃
var staticurlanswer = "https://api.jimivip.com/index/ybanswer/";

var appstoreUrl = 'https://itunes.apple.com/cn/app/%E8%B4%9D%E8%B4%9D%E4%BE%BF%E7%AD%BE/id1324948509?mt=8';

/*
 * 缁熶竴ajax璇锋眰
 */

// 灏佽ajax
function ajax(url, para, success, error, loading) {
    $.ajax({
        type: para.type ? para.type : 'GET',
        url: url,
        contentType: 'application/json',
        /* dataType: para.dataType || 'jsonp',
         jsonp: para.action,
         jsonpCallback: para.action,*/
        /* async: para.async,*/
        // data: para.type == 'POST' ? JSON.stringify(para.data) : para.data,
        data: JSON.stringify(para.data),
        /*xhrFields: {
            withCredentials: true // 纭繚璇锋眰浼氭惡甯︿笂Cookie
        },*/
        beforeSend: function (xhr) {
            /* var user = getUser();
             if (user && user.login) {
                 xhr.setRequestHeader("X-Access-Auth-Token", user.data.accessToken);
             }*/
        },
        success: function (res) {


            if (success)
                success(res);
        },
        error: function (request) {
            if (error)
                error(request);
        }
    });
}

function ajax_general(option, para, success, error, loading) {
    if (option.async == undefined) {
        option.async = true;
    }
    option.type = option.type || 'POST';
    var url = staticurlanswer + option.action;
    option.data = para;
    ajax(url, option, function (res) {
        if (option.cache) {
            //_SET_DATA(action + para.specialdata,res,option.cache);
        }
        success(res);
    }, error, loading);
}


var interface = {};

//鐧诲綍
interface.login = function (para, success, error) {
    ajax_general({action: 'youbeiUserLogin', type: 'POST'}, para, success, error);
}

//鑾峰彇楠岃瘉鐮�
interface.getCode = function (para, success, error) {
    ajax_general({action: 'youbeiSendLoginMessage', type: 'POST'}, para, success, error);
}

//棣栭〉鏁版嵁
interface.getUserHomeData = function (para, success, error) {
    ajax_general({action: 'getUserHomeData', type: 'POST'}, para, success, error);
}

//鑾峰彇棰樼洰
interface.getAnswerData = function (para, success, error) {
    ajax_general({action: 'getAnswerData', type: 'POST'}, para, success, error);
}

//绛旈鑾峰彇绾㈠寘
interface.getAnswerRedPacket = function (para, success, error) {
    ajax_general({action: 'getAnswerRedPacket', type: 'POST'}, para, success, error);
}

//鎷嗙孩鍖�
interface.getUserRedPacket = function (para, success, error) {
    ajax_general({action: 'getUserRedPacket', type: 'POST'}, para, success, error);
}


//鎴戠殑濂栧姳鎺ュ彛
interface.myRewardList = function (para, success, error) {
    ajax_general({action: 'myRewardList', type: 'POST'}, para, success, error);
}

//鐢宠鎻愮幇
interface.goWithdraw = function (para, success, error) {
    ajax_general({action: 'goWithdraw', type: 'POST'}, para, success, error);
}
//鎻愮幇璁板綍
interface.withdrawList = function (para, success, error) {
    ajax_general({action: 'withdrawList', type: 'POST'}, para, success, error);
}