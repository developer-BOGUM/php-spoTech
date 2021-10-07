<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/css/style.css">', 0);
add_stylesheet('<link rel="stylesheet" media="(max-width: 767px)" href="'.$content_skin_url.'/css/mobile.css">', 1);
add_stylesheet('<link rel="stylesheet" media="(min-width: 768px) and (max-width: 1023px)" href="'.$content_skin_url.'/css/tablet.css">', 2);
add_stylesheet('<link rel="stylesheet" media="(min-width: 1024px)" href="'.$content_skin_url.'/css/desktop.css">', 3);
?>

<article id="ctt" class="ctt_<?php echo $co_id; ?>">
    <div id="ctt_con">
        <div class="ctt-head">
            <?php
            echo $str;
            ?>
        </div>
        <?php
        @include_once($co['co_include_head']);
        ?>
    </div>
</article>