
var thumbInsert = '';
///////////////////////////////////////////
// 動画埋め込み
///////////////////////////////////////////
function changeFramePage0(pageUrl) {
    frames[0].location.href = pageUrl;
}


///////////////////////////////////////////
// 実行
///////////////////////////////////////////
$(function(){
    // スライダー
    var mySwiper = $('.swiper-container').swiper({
        //Your options here:
        // pagination: '.pagination',
        loop:true,
        autoplay:3000,
        paginationClickable:true,
        calculateHeight:true,
        touchRatio:0.6,
        nextButton: '.swiper-button_next',
        prevButton: '.swiper-button_prev',

    });
    // スライダー

    var $interval = 3000; // 切り替わりの間隔（ミリ秒）
    var $fade_speed = 1000; // フェード処理の早さ（ミリ秒）
    $(".newsFeed-content p:first").addClass("active").show();
    setInterval(function(){
        var $active = $(".newsFeed-content p.active");
        var $next = $active.next("p").length?$active.next("p"):$(".newsFeed-content p:first");
        $active.fadeOut($fade_speed).removeClass("active");
        $next.fadeIn($fade_speed).addClass("active");
    },$interval);



    // サムネイル画像の埋め込み
    $('#thumbnail').append(thumbInsert);
    $(document).on('click', '#thumbnail a', function() {
        ytId = $(this).attr('href').replace(ytBaseUrl, '');
        play(ytId, 0);
        return false;
    });
    // タブメニュー
    $('.tab-content:first').show();
    $('.tab-menu li:first').addClass('active');
    $('.tab-menu li').click(function() {
        $('.tab-menu li').removeClass('active');
        $(this).addClass('active');
        $('.tab-content').hide();
        $($(this).find('a').attr('href')).fadeIn();
        return false;
    });
});
