<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');
global $is_admin; 
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
add_javascript('<script src="'.G5_JS_URL.'/jquery.bxslider.js"></script>', 10);

$thumb_width = 300;
$thumb_height = 200;
?>

<!-- <?php echo $bo_subject; ?> 최신글 시작 { -->
<div id="section1" class="main-benner">
    <div class="lt_bn">
        <ul>
        <?php
        for ($i=0; $i<count($list); $i++) {
        $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);
        if($thumb['ori']) {
            $src = $thumb['ori'];
        }
        else {
            $src = G5_IMG_URL.'/no_img.png';
            $thumb['alt'] = '이미지가 없습니다.';
        }
            $srctype = substr($src, -3);
        ?>
            <li class="list_<?php echo $i ?>">
                <div class="bg">
                <?php
                    if($srctype == "mp4") {
                ?>
                        <video width="100%" height="100%" muted=" muted" autoplay="autoplay" loop="loop">
                            <source src="<?php echo $src; ?>" type="video/mp4">
                        </video>
                    <?php
                    } else {
                    ?>
                            <img src="<?php echo $src; ?>">
                    <?php } ?>
                </div>
                <div class="bn_txt">
                    <div class="txt_wr">
                            <?php
                            $strTok =explode(' ', $list[$i]['subject']);
                            echo "<p class=\"bn_tit\">";
                            echo $list[$i]['subject'];
                            echo "</p>";
                            ?>
                             <div class="bn_detail"> <?php echo get_text(cut_str(strip_tags($list[$i]['wr_content']), 50), 1); ?></div>
                             <!-- <?php
                            ?> -->
                    </div>
                </div>
            </li>
        <?php }  ?>
        <?php if (count($list) == 0) { //게시물이 없을 때  ?>
        <li class="empty_li">게시물이 없습니다.</li>
        <?php }  ?>
        </ul>
        <?php if ($is_admin) { ?><a href="<?php echo get_pretty_url($bo_table); ?>" class="bn_link btn_admin btn_m"><i class="fa fa-cog"></i><span class="sound_only"><?php echo $bo_subject ?></span></a> <?php }  ?>
    </div>
    <?php if (count($list) != 0) { //게시물이 있을 시 ?>
        <div class="scroll-down">
            <div class="row">
                <div class="col">
                    <span class="label"><span>Scroll Down &#10141;</span><span class="line"></span></span>
                </div>
            </div>
        </div>
        <div class="home-slider-indices">
            <div class="row">
                <div class="col col-auto">
                    <div class="indices">
                        <ul>
                            <?php
                            for ($i=0; $i<count($list); $i++) {
                                ?>
                            <li id="swiper_<?php echo $i ?>" class="swiper-li">
                                <a class="index">
                                    <h4><?php echo $list[$i]['subject'] ?></h4>
                                    <div class="progress"><span id="swiper_<?php echo $i ?>_bar" class="bar"></span></div>
                                </a>
                            </li>
                            <?php }  ?>
                        </ul>
                        <a href="javascript:;" id="btn-pause" class="btn-pause" data-val="">PAUSE</a>
                    </div>
                </div>
            </div>
        </div>
    <?php }  ?>
</div>


<script>
$('.lt_bn ul').show().bxSlider({
    pager:false,
    controls:false,
    auto:true,
    autoControls:true,
    touchEnabled:false
});
</script>

<!-- } <?php echo $bo_subject; ?> 최신글 끝 -->