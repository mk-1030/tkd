<?php

//====子ページ条件==================================================================

function is_parent_slug() {
    global $post;
    if ($post->post_parent) {
        $post_data = get_post($post->post_parent);
        return $post_data->post_name;
    }
}

//====CSS&JS読み込み================================================================

function theme_enqueue_styles() {
    wp_enqueue_style('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.css', array(), '');
    wp_enqueue_style('scroll-hint', 'https://unpkg.com/scroll-hint@1.1.10/css/scroll-hint.css', array(), '');
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '0.0001');
    /*wp_enqueue_style('style-min', get_stylesheet_directory_uri() . '/assets/css/style.min.css', array(), '0.0001');*/
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;600&family=Manrope:wght@500;600;700;800&display=swap', array(), '');
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 10 );

function theme_enqueue_scripts() {
    wp_deregister_script('arkhe-main-script');
    wp_enqueue_script('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.4/swiper-bundle.min.js', array(), '', true);
    wp_enqueue_script('scroll-hint', 'https://unpkg.com/scroll-hint@1.1.10/js/scroll-hint.js', array(), '', true);
    wp_enqueue_script('medium-zoom', 'https://cdn.jsdelivr.net/npm/medium-zoom@1.0.6/dist/medium-zoom.min.js', array(), '', true);
    wp_enqueue_script('script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), '0.0001', true);
    /*wp_enqueue_script('script-min', get_stylesheet_directory_uri() . '/assets/js/script.min.js', array(), '0.0001', true);*/
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts', 10 );

//====投稿ページにスタイルシート適用================================================

add_action('enqueue_block_editor_assets', 'gutenberg_stylesheets_custom_demo');
function gutenberg_stylesheets_custom_demo() {
    $editor_style_url = get_theme_file_uri(get_stylesheet_directory_uri().'/_aseets/css/block-editor.css');
    wp_enqueue_style( 'theme-editor-style', $editor_style_url );
}

//====ろご=========================================================================

function theme_login_style() { ?>
<style>
body.login div#login h1 a {
    background-image: url("/wp-content/themes/takada/assets/img/common/logo.svg");
    background-size: contain;
    width: 240px;
    height: 55px;
    margin: 0 auto 20px;
}
</style>
<?php }
add_action('login_enqueue_scripts', 'theme_login_style');

function custom_login_logo_url() {
    return home_url();
}
add_filter('login_headerurl', 'custom_login_logo_url');

//====スラッグからユーザー名を特定できないように=============================================

function theme_slug_redirect_author_archive() {
    if (is_author()) {
        wp_redirect(home_url());
        exit;
    }
}
add_action( 'template_redirect', 'theme_slug_redirect_author_archive' );

//====投稿ページのテーブルの前後にスクロール用の要素追加=====================================

add_filter('the_content', function ($the_content) {
    $the_content = preg_replace('/<table/i', '<div class="js-scrollable"><table', $the_content);
    $the_content = preg_replace('/<\/table>/i', '</table></div>', $the_content);
    return $the_content;
});

//====アイキャッチ画像の有効化==========================================================

add_theme_support('post-thumbnails');

//====抜粋を固定ページで有効化=========================================================

add_post_type_support('page','excerpt');

//====サムネイル=====================================================================

function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $search_img = $matches [1] [0];
    $first_img = '<div class="u-of"><img src="' .$search_img. '"></div>';

    if(empty($search_img)) {
        $first_img = '<div class="c-no-image"><img src="'.get_stylesheet_directory_uri().'/assets/img/common/logo.svg" width="143" height="33" loading="lazy" alt=""></div>';
    }
    return $first_img;
}

//====アーカイブページで現在のカテゴリー・タグ・タームを取得する==================================

function get_current_term(){
    $id;
    $tax_slug;
    if(is_category()){
        $tax_slug = "category";
        $id = get_query_var('cat');
    }else if(is_tag()){
        $tax_slug = "post_tag";
        $id = get_query_var('tag_id');
    }else if(is_tax()){
        $tax_slug = get_query_var('taxonomy');
        $term_slug = get_query_var('term');
        $term = get_term_by("slug",$term_slug,$tax_slug);
        $id = $term->term_id;
    }
    return get_term($id,$tax_slug);
}

//====ハイフンの自動変換防止==========================================================

remove_filter('the_title', 'wptexturize');
remove_filter('the_content', 'wptexturize');

//====デフォルト投稿の名称変更====================================================

function Change_menulabel() {
    global $menu;
    global $submenu;
    $name = '新着情報';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name.'一覧';
    $submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
    global $wp_post_types;
    $name = '新着情報';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name.'の新規追加';
    $labels->edit_item = $name.'の編集';
    $labels->new_item = '新規'.$name;
    $labels->view_item = $name.'を表示';
    $labels->search_items = $name.'を検索';
    $labels->not_found = $name.'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');

//====カスタム投稿のカテゴリー：カテゴリー選択ボックスで一つだけしか選択できないようにする。====================================================
add_action( 'admin_print_footer_scripts', 'select_one_category_only' );
function select_one_category_only() {
?>
<script>
if (~location.href.indexOf('/wp-admin/post.php')) {
    jQuery(function($) {
    setTimeout(() => {
        const $category = $('.editor-post-taxonomies__hierarchical-terms-list')
        const $checkbox = $category.find('input[type=checkbox]')
        const checkedUpdate = () => {
        const checkedLen = $category.find('input[type=checkbox]:checked').length
        const $notChecked = $category.find('input[type=checkbox]:not(:checked)')
        if (checkedLen >= 1) {
            $notChecked.prop('disabled', true)
        } else {
            $checkbox.prop('disabled', false)
        }
        }
        checkedUpdate()
        $checkbox.on('click', () => {
        checkedUpdate()
        });
    }, 2000)
    });
}
</script>
<?php
}

//====投稿のパーマリンクにnewsを付ける====================================================

function add_article_post_permalink($permalink) {
    $permalink = '/news' . $permalink;
    return $permalink;
}
add_filter('pre_post_link', 'add_article_post_permalink');

function add_article_post_rewrite_rules($post_rewrite) {
    $return_rule = array();
    foreach ($post_rewrite as $regex => $rewrite) {
        $return_rule['news/' . $regex] = $rewrite;
    }
    return $return_rule;
}
add_filter('post_rewrite_rules', 'add_article_post_rewrite_rules');

//====カテゴリー一覧URL変更===================================================================

function custom_post_type_permalinks_set($termlink, $term, $taxonomy) {
    $return_permalinks = str_replace('/' . $taxonomy . '/', '/news/', $termlink);
    return $return_permalinks;
}
add_filter( 'term_link', 'custom_post_type_permalinks_set', 11, 3 );

// リライトルールの変更
add_rewrite_rule( 'news/([^/]+)/?$', 'index.php?category_name=$matches[1]', 'top' );
add_rewrite_rule( 'news/([^/]+)/page/([0-9]+)/?$', 'index.php?category_name=$matches[1]&paged=$matches[2]', 'top' );

//====404ページのタイトルを無理矢理書き換え===============================

add_filter('aioseo_title', 'aioseo_title_fix');
function aioseo_title_fix($title){
    if (is_404()) {
        return $title .'お探しのページは見つかりませんでした。 | '. get_bloginfo();
    }
    return $title;
}

//====めにゅ～=================================================================

function mt_add_pages() {
    $catalog_slug = get_page_by_path('catalog');
    $catalog_id = $catalog_slug->ID;
    add_menu_page('catalog','カタログ','delete_others_pages','post.php?post='.$catalog_id.'&action=edit','','dashicons-media-document',7);
}
add_action('admin_menu', 'mt_add_pages');

//====CFSのループタブの名前を変更=================================================================

function acf_loop_ttl() {
    echo '<script>
    window.addEventListener("DOMContentLoaded", function(){
        $(".loop_wrapper").each(function(index) {
            var target = $(this).find(".cfs_text input").val();
            $(this).find("span.label").text(target);
        });
    });
    </script>';
}
add_action('admin_print_footer_scripts', 'acf_loop_ttl');