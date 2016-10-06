///////////////////////////////////////////
// 動画埋め込み
///////////////////////////////////////////
var ytWidth = 640;
var ytHeight = 390;

// 埋め込むyoutubeのIDを指定
var ytData = [
    {
        id: 'FBI2RC7J818' // 東京大学教授　楊凱栄博士　大学院進学講演会
    }, {
        id: 'FBI2RC7J818' // 東京大学教授　楊凱栄博士　大学院進学講演会
    }, {
        id: 'FBI2RC7J818' // 東京大学教授　楊凱栄博士　大学院進学講演会
    }, {
        id: 'gfshwMI4jRY' // 特別授業経営学 00781
    }, {
        id: '8yraP942Fck' // 特別授業経営学 00782
    }, {
        id: 'IY71Vvxu2Ig' // 特別授業経営学 00783
    }
];

ytBaseUrl = 'https://www.youtube.com/embed/';

// サムネイル画像の埋め込み準備
var thumbInsert = '';
for(var i = 0; i < ytData.length; i++) {
    thumbInsert += '<li><a href="' + ytBaseUrl + ytData[i]['id'] + '">';
    thumbInsert += '<img src="http://img.youtube.com/vi/' + ytData[i]['id'] + '/mqdefault.jpg" alt="" />';
    thumbInsert += '</a></li>';
}

var ytPlayer;
// YouTube Player APIを読み込む
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// API読み込み後にプレーヤーを埋め込む
function onYouTubeIframeAPIReady() {
    ytPlayer = new YT.Player('player', {
        height: ytHeight,
        width: ytWidth,
        videoId: ytData[0]['id']
    });
}
// 動画の再生
function play(ytId, seekTime) {
    ytPlayer.loadVideoById(ytId, seekTime);
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

//    setInterval(function(){
//        $('#tenmetsu').fadeOut(1000,function(){$(this).fadeIn(1000)});
//    },2000);

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
