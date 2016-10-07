///////////////////////////////////////////
// 動画埋め込み
///////////////////////////////////////////
function changeFramePage0(pageUrl) {
    frames[0].location.href = pageUrl;
}

function changeFramePage1(pageUrl) {
    frames[1].location.href = pageUrl;
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
