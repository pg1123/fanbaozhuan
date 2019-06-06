(function($){
    $.fn.extend({
        "slideUp":function(value){

            var docthis = this;
            //榛樿鍙傛暟
            value=$.extend({
                "li_h":"44",
                "time":4000,
                "movetime":1000
            },value)

            //鍚戜笂婊戝姩鍔ㄧ敾
            function autoani(){
                $("li:first",docthis).animate({"margin-top":-value.li_h},value.movetime,function(){
                    $(this).css("margin-top",0).appendTo(".line");
                })
            }

            //鑷姩闂撮殧鏃堕棿鍚戜笂婊戝姩
            var anifun = setInterval(autoani,value.time);

            //鎮仠鏃跺仠姝㈡粦鍔紝绂诲紑鏃剁户缁墽琛�
            $(docthis).children("li").hover(function(){
                clearInterval(anifun);          //娓呴櫎鑷姩婊戝姩鍔ㄧ敾
            },function(){
                anifun = setInterval(autoani,value.time);   //缁х画鎵ц鍔ㄧ敾
            })
        }
    })
})(jQuery)