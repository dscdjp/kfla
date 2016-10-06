///////////////////////////////////////////
// 動画埋め込み
///////////////////////////////////////////
var ytWidth = 640;
var ytHeight = 390;

// 授業風景
var ytData1 = [
    {
        id: 'oryQkZ_RiYg'
    }, {
        id: 'yZ4MGBrN8EA'
    }, {
        id: 'XjbTH4LmHv8'
    }, {
        id: '4tokA2e8IFk'
    }
];

// 特別授業
var ytData2 = [
    {
        id: 'gfshwMI4jRY'
    }, {
        id: '8yraP942Fck'
    }, {
        id: 'IY71Vvxu2Ig'
    }
];

var ytBaseUrl = 'https://www.youtube.com/embed/';

// サムネイル画像の埋め込み準備
var thumbInsert1 = '';
for(var i = 0; i < ytData1.length; i++) {
    thumbInsert1 += '<li><a href="' + ytBaseUrl + ytData1[i]['id'] + '">';
    thumbInsert1 += '<img src="http://img.youtube.com/vi/' + ytData1[i]['id'] + '/mqdefault.jpg" alt="" />';
    thumbInsert1 += '</a></li>';
}


var thumbInsert2 = '';
for(var i = 0; i < ytData2.length; i++) {
    thumbInsert2 += '<li><a href="' + ytBaseUrl + ytData2[i]['id'] + '">';
    thumbInsert2 += '<img src="http://img.youtube.com/vi/' + ytData2[i]['id'] + '/mqdefault.jpg" alt="" />';
    thumbInsert2 += '</a></li>';
}

var ytPlayer1, ytPlayer2;
// YouTube Player APIを読み込む
var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// API読み込み後にプレーヤーを埋め込む
function onYouTubeIframeAPIReady() {
    ytPlayer1 = new YT.Player('player1', {
        height: ytHeight,
        width: ytWidth,
        videoId: ytData1[0]['id']
    });
    ytPlayer2 = new YT.Player('player2', {
        height: ytHeight,
        width: ytWidth,
        videoId: ytData2[0]['id']
    });
}
// 動画の再生
function play1(ytId, seekTime) {
    ytPlayer1.loadVideoById(ytId1, seekTime);
}
function play2(ytId, seekTime) {
    ytPlayer2.loadVideoById(ytId2, seekTime);
}


///////////////////////////////////////////
// 実行
///////////////////////////////////////////
$(function(){
    // サムネイル画像の埋め込み
    $('#thumbnail1').append(thumbInsert1);
    $(document).on('click', '#thumbnail1 a', function() {
        ytId1 = $(this).attr('href').replace(ytBaseUrl, '');
        play1(ytId1, 0);
        return false;
    });

    $('#thumbnail2').append(thumbInsert2);
    $(document).on('click', '#thumbnail2 a', function() {
        ytId2 = $(this).attr('href').replace(ytBaseUrl, '');
        play2(ytId2, 0);
        return false;
    });
});
