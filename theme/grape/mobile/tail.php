<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>
    </div>
</div>


<div class="ft">
    <div class="ft_wr">
        <div class="ft-wrapper">
            <div class="ft-logo">
            </div>
            <div class="ft-btn">
                <a class="sns_blog" href="<?php echo G5_URL ?>"></a>
                <a class="sns_facebook" href="<?php echo G5_URL ?>"></a>
                <a class="sns_youtube" href="<?php echo G5_URL ?>"></a>
            </div>
        </div>
        <div class="ft-com">
            <p><strong>본사</strong> 경기도 성남시 분당구 탄천상로 164, C동 215호(구미동, 시그마2 오피스텔)</p>
            <p><strong>공장</strong> 경상북도 영천시 화산면 화산공단길 35, 1동 5호</p>
            <p><strong>TEL </strong> 1577-5767 | <strong>FAX </strong> 031-781-2888 | <strong>E-MAIL </strong> spoenc@hanmail.net</p>
            <h4>SPOTECH ARCHITECTURE ALL RIGHTS RESERVED.</h4>
        </div>
        <?php if(!preg_match($mobile_agent, $_SERVER['HTTP_USER_AGENT'])){ ?>
        <div class="ft-menu">
            <ul>
                <?php
                $menu_datas = get_menu_db(1, true);
                $i = 0;
                foreach( $menu_datas as $row ){
                    if( empty($row) ) continue;
                    if( $i == 0 ) echo '<li class="menu_nm">'.PHP_EOL;
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
        <?php } ?>
    </div>
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
</div>



<script>
jQuery(function($) {

    $( document ).ready( function() {
                
        //상단고정
        if( $(".top").length ){
            var jbOffset = $(".top").offset();
            $( window ).scroll( function() {
                if ( $( document ).scrollTop() > jbOffset.top ) {
                    $( '.top' ).addClass( 'fixed' );
                }
                else {
                    $( '.top' ).removeClass( 'fixed' );
                }
            });
        }

        //상단으로
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });

    });
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>