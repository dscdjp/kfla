<?php

////////////////////////////////////////////////
//
// Wordpress 機能制御関数
//
////////////////////////////////////////////////

// 定義

// デフォルトのjqueryを使わない
function use_original_jquery() {
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri().'/assets/js/jquery.min.js');
}

// 投稿のパーマリンクのみ変更
function add_article_post_permalink( $permalink ) {
    $permalink = '/event' . $permalink;
    return $permalink;
}

function add_article_post_rewrite_rules( $post_rewrite ) {
    $return_rule = array();
    foreach ( $post_rewrite as $regex => $rewrite ) {
        $return_rule['event/' . $regex] = $rewrite;
    }
    return $return_rule;
}

// サムネイルサイズ登録
add_image_size( 'thumb-1x', 320, 320, true );
add_image_size( 'thumb-2x', 640, 640, true );


// 管理者以外は管理バーを消す
function hidden_admin_bar(){
    return false;
}
function disable_admin_bar_prefs(){ ?>
<style type="text/css">
    .show-admin-bar {display:none;}
</style><?php
}


// カスタムポストタイプ設定
// 教員紹介
function post_type_teacher() {
    $labels = array(
        'name' => '教員紹介',
        'singular_name' => '教員紹介',
        'add_new' => '新規追加',
        'add_new_item' => '新規追加',
        'edit_item' => '編集',
        'new_item' => '新規追加',
        'view_item' => '編集',
        'search_items' => '検索',
        'not_found' => '投稿はありません',
        'not_found_in_trash' => 'ゴミ箱に投稿はありません',
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'hierarchical' => false,
        'supports' => array('title','thumbnail'),
        'has_archive' => true
    );
    register_post_type('teacher',$args);
}

// 合格体験談
function post_type_experiences() {
    $labels = array(
        'name' => '合格体験談',
        'singular_name' => '合格体験談',
        'add_new' => '新規追加',
        'add_new_item' => '新規追加',
        'edit_item' => '編集',
        'new_item' => '新規追加',
        'view_item' => '編集',
        'search_items' => '検索',
        'not_found' => '投稿はありません',
        'not_found_in_trash' => 'ゴミ箱に投稿はありません',
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'hierarchical' => false,
        'supports' => array('title','editor','thumbnail'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'results/experiences')
    );
    register_post_type('experiences',$args);
}

// 就職実績
function post_type_employment() {
    $labels = array(
        'name' => '就職実績',
        'singular_name' => '就職実績',
        'add_new' => '新規追加',
        'add_new_item' => '新規追加',
        'edit_item' => '編集',
        'new_item' => '新規追加',
        'view_item' => '編集',
        'search_items' => '検索',
        'not_found' => '投稿はありません',
        'not_found_in_trash' => 'ゴミ箱に投稿はありません',
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'hierarchical' => false,
        'supports' => array('title','editor','thumbnail'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'results/employment')
    );
    register_post_type('employment',$args);
}

// 学生インタビュー
function post_type_interview() {
    $labels = array(
        'name' => '学生インタビュー',
        'singular_name' => '学生インタビュー',
        'add_new' => '新規追加',
        'add_new_item' => '新規追加',
        'edit_item' => '編集',
        'new_item' => '新規追加',
        'view_item' => '編集',
        'search_items' => '検索',
        'not_found' => '投稿はありません',
        'not_found_in_trash' => 'ゴミ箱に投稿はありません',
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'hierarchical' => false,
        'supports' => array('title','editor','thumbnail'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'schoollife/interview')
    );
    register_post_type('interview',$args);
}

// カスタムタクソノミー設定
//function create_blog_taxonomies() {
//    // カテゴリを作成
//    $labels = array(
//        'name'                => 'ブログカテゴリー',        //複数系のときのカテゴリ名
//        'singular_name'       => 'ブログカテゴリー',        //単数系のときのカテゴリ名
//        'search_items'        => 'ブログカテゴリーを検索',
//        'all_items'           => '全てのブログカテゴリー',
//        'parent_item'         => '親カテゴリ',
//        'parent_item_colon'   => '親カテゴリ:',
//        'edit_item'           => 'ブログカテゴリを編集',
//        'update_item'         => 'ブログカテゴリを更新',
//        'add_new_item'        => '新規ブログカテゴリを追加',
//        'new_item_name'       => '新規ブログカテゴリ',
//        'menu_name'           => 'ブログカテゴリ'        //ダッシュボードのサイドバーメニュー名
//    );
//    $args = array(
//        'hierarchical'        => true,
//        'labels'              => $labels,
//        'rewrite'             => array( 'slug' => 'blog_cat' )
//    );
//    register_taxonomy( 'blog_category', 'blog', $args );
//    // タグを作成
//    $labels = array(
//        'name'                => 'ブログタグ',        //複数系のときのタグ名
//        'singular_name'       => 'ブログタグ',        //単数系のときのタグ名
//        'search_items'        => 'ブログタグを検索',
//        'all_items'           => '全てのブログタグ',
//        'parent_item'         => null,
//        'parent_item_colon'   => null,
//        'edit_item'           => 'タグを編集',
//        'update_item'         => 'タグを更新',
//        'add_new_item'        => '新規タグを追加',
//        'new_item_name'       => '新規タグ',
//        'separate_items_with_commas'   => 'タグをコンマで区切る',
//        'add_or_remove_items'          => 'タグを追加or削除する',
//        'choose_from_most_used'        => 'よく使われているタグから選択',
//        'not_found'                    => 'アイテムは見つかりませんでした',
//        'menu_name'                    => 'ブログタグ'        //ダッシュボードのサイドバーメニュー名
//    );
//    $args = array(
//        'hierarchical'            => false,
//        'labels'                  => $labels,
//        'update_count_callback'   => '_update_post_term_count',    //タグの動作に必要なCallback設定
//        'rewrite'                 => array( 'slug' => 'blog_tag' )
//    );
//    register_taxonomy( 'blog_tag', 'blog', $args );
//}




////////////////////////////////////////////////
//
// 自作関数
//
////////////////////////////////////////////////

function pager($pages = '', $range = 2) {
    $showitems = ($range * 2)+1;
    global $paged;
    if( empty($paged) ) $paged = 1;

    if( $pages == '' ) {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if( !$pages ) {
            $pages = 1;
        }
    }

    if( 1 != $pages ) {
        echo "<nav class='pager'>\n<ul>";
        if( $paged > 2 && $paged > $range+1 && $showitems < $pages ) echo "<li><a href='".get_pagenum_link(1)."'>&laquo; 最初</a>";
        if( $paged > 1 && $showitems < $pages ) echo "<li><a href='".get_pagenum_link($paged - 1)."'><i class='fa fa-chevron-left' aria-hidden='true'></i></a></li>";
        for( $i=1; $i <= $pages; $i++ ) {
            if( 1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ) ) {
                echo ($paged == $i)? "<li><a class=\"current\">".$i."</a></li>":"<li><a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a></li>";
            }
        }
        if ($paged < $pages && $showitems < $pages) echo "<li><a href=\"".get_pagenum_link($paged + 1)."\"><i class='fa fa-chevron-right' aria-hidden='true'></i></a></li>";
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<li><a href='".get_pagenum_link($pages)."'>最後 &raquo;</a></li>";
        echo "</ul>\n</nav>";
    }
}


////////////////////////////////////////////////
//
// アクション・フィルターフック実行
//
////////////////////////////////////////////////

add_action('init', 'post_type_teacher');
add_action('init', 'post_type_experiences');
add_action('init', 'post_type_employment');
add_action('init', 'post_type_interview');
add_action( 'wp_enqueue_scripts', 'use_original_jquery');
add_filter( 'post_rewrite_rules', 'add_article_post_rewrite_rules' );
add_filter( 'pre_post_link', 'add_article_post_permalink' );
add_filter( 'show_admin_bar', 'hidden_admin_bar' );
add_action('admin_print_styles-profile.php', 'disable_admin_bar_prefs');

