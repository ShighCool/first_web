
$(function () {
    var bannerImg=["images/20161113110902296.jpg","images/20161128103632177.jpg","images/20170323113958487.jpg","images/20170424053529527.jpg"];
  
    console.log($('.banner_img'));
    var a=0,timer=null;
    $('.banner_img').css("background-image","url("+bannerImg[0]+")");
    for (var i=0;i<bannerImg.length;i++){
        $('.banner_ul').append('<li></li>')
    }
    $('.banner_img').hover(
        function () {
            clearInterval(timer);
        },
        function () {
            timer= setInterval(time,2000);
        }
    )
   timer= setInterval(time,2000);
    $('.banner_ul>li').hover(
        function () {
            clearInterval(timer);
            console.log($(this).index());
            $('.banner_img').css ("background-image","url("+bannerImg[$(this).index()]+")","transition","all  ease");
        },
        function () {
          clearInterval(timer);
        }

    )

    function time() {
        a++;
        a%=bannerImg.length;
        $('.banner_img').css("background-image","url("+bannerImg[a]+")","transition","all  ease");
    }
})