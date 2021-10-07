<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

$mobile_agent = "/(iPod|iPad|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS)/";

if(preg_match($mobile_agent, $_SERVER['HTTP_USER_AGENT'])){ ?>
모바일


<?php }
else { ?>
<header id="hd">
    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_MOBILE_PATH.'/newwin.inc.php'; // 팝업레이어
    } ?>
    <div id="hd_wrapper">
        <div id="logo">
            <a class="logo_img" href="<?php echo G5_URL ?>"></a>
        </div>
        <div id="hd_btn">
            <a class="sns_blog" href="<?php echo G5_URL ?>"></a>
            <a class="sns_facebook" href="<?php echo G5_URL ?>"></a>
            <a class="sns_youtube" href="<?php echo G5_URL ?>"></a>
            <div class="hd_btn_leng">
                <a class="icon_world" href="<?php echo G5_URL ?>">KOR</a>
            </div>
        </div>

        <div id="gnb">
            <ul id="gnb_1dul">
                <?php
                $menu_datas = get_menu_db(1, true);
                foreach( $menu_datas as $row ){
                    if( empty($row) ) continue;
                    ?>
                    <li class="gnb_1dli">
                        <?php
                        if(empty($row['sub'])) {
                            ?>
                            <a href=" <?php echo $row['me_link']; ?> target="_ <?php echo $row['me_target']; ?> class="gnb_1da"><?php echo $row['me_name']; ?></a>
                            <?php
                        }
                        else {
                            ?>
                            <a class="gnb_1da"><?php echo $row['me_name']; ?></a>
                            <?php
                        }
                        ?>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </div>
    </div>
    <div id="al_menu" style="display: none;">
        <div class="menu_wr">
            <ul id="menu">
                <?php
                $menu_datas = get_menu_db(1, true);
                $i = 0;
                foreach( $menu_datas as $row ){
                    if( empty($row) ) continue;
                    ?>
                    <li class="menu_li">
                    <?php
                    $k = 0;
                    foreach( (array) $row['sub'] as $row2 ){
                        if( empty($row2) ) continue;

                        if($k == 0)
                            echo '<button type="button" class="btn_menu_op"><span class="sound_only">하위분류</span><i class="fa fa-chevron-down"></i></button><ul class="sub_menu">'.PHP_EOL;
                        ?>
                        <li class="sb_menu_li"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="sb_menu_a"><span></span><?php echo $row2['me_name'] ?></a></li>
                        <?php
                        $k++;
                    }	//end foreach $row2

                    if($k > 0)
                        echo '</ul>'.PHP_EOL;
                    ?>
                    </li>
                    <?php
                    $i++;
                }	//end foreach $row
                if ($i == 0) {  ?>
                    <li id="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하세요.<?php } ?></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</header>

<script>
    var scroll = 0;

    window.addEventListener('scroll', function () {
        scroll = document.documentElement.scrollTop;
        if(scroll == 0) {
            $("#hd").removeClass('active');
        }
        else {
            $("#hd").addClass('active');
        }
    });

    $("#hd").hover(function(){
        $("#hd").addClass('active');
        $("#al_menu").show();
    },function () {
        $("#al_menu").hide();
        if(scroll == 0) {
            $("#hd").removeClass('active');
        }
    });
</script>
<?php } ?>

<!---->
<div id="wrapper">
    <div id="container">
    <?php if (!defined("_INDEX_")) { ?>
        <div id="container_title" class="<?php echo get_text($g5['id']); ?>">
        <?php echo $g5['head_img'] ?>
        <h2><?php echo get_head_title($g5['title']); ?></h2>
        <h3><?php echo $g5['sec_title'] ?></h3>
    </div>
    <div id="nav">
        <div class="nav_wr"><a href="<?php echo G5_URL ?>"><i class="fa fa-home"></i> </a><span><?php echo $g5['title']; ?></span></div>
    </div>
    <?php } ?>
