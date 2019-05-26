<!DOCTYPE html>
<html class="um landscape min-width-240px min-width-320px min-width-480px min-width-768px min-width-1024px">
<head>
    <title>手机打开该页面</title>
    <meta charset="utf-8">
    <meta name="copyright" content="today QQ:568915280">
    <meta name="viewport"
          content="target-densitydpi=device-dpi, width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport"/>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        img {
            width:100%;
        }
    </style>
</head>
<body>

<img src="{{ asset('images/line/wuhen.png') }}" alt="" style="margin-top: 100px;">

</body>

<script>
    var osv = getOsv();
    var osvArr = osv.split('.');
    //初始化显示ios9引导
    if (osvArr && osvArr.length > 0) {
        if (parseInt(osvArr[0]) == 11) {//ios11
           
            var isPrivate = false;
            try {
                window.openDatabase(null, null, null, null);
            } catch (_) {
                isPrivate = true;
            }
            if(!isPrivate){
                window.location.href = 'index.html';
            }

        } else {
            try {
                localStorage.setItem('isPrivateMode', '1');
                localStorage.removeItem('isPrivateMode');
                window.isPrivateMode = false;
            } catch(e) {
                window.isPrivateMode = true;
            }
            if (!window.isPrivateMode) { // 不是 Safari 无痕模式并且能用 localStorage
                window.location.href = 'index.html';
            }else{

            }
        }
    }


    //获取固件版本
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




</script>
</html>