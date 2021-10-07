<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 300;
$thumb_height = 500;
?>

<div id="section4" class="lt-portfolio">
    <h3>PORTFOLIO</h3>
    <div class="it-info">
        <p>설계부터 시공, 유지관리까지!<br>
        처음부터 끝까지 모든 순간의 혁신을<br>
        스포테크가 함께 합니다.</p>

        <a>자세히 보기 +</a>
        <div class="it_navigation">
            <div class="left">〈</div>
            <div class="right">〉</div>
        </div>
        <div class="portfolio-swiper swiper-container">
            <div class="swiper-wrapper">
                <?php
                for ($i=0; $i<count($list); $i++) {
                    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

                    if($thumb['src']) {
                        $img = $thumb['src'];
                    } else {
                        $img = G5_THEME_IMG_URL.'/noimage.png';
                        $thumb['alt'] = '이미지가 없습니다.';
                    }
                    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" style="width: 100%; height: 350px;" >';
                ?>
                <div class="swiper-slide">
                    <div>
                        <a href="<?php echo $list[$i]['href'] ?>"><?php echo $img_content; ?></a>
                        <?php
                        echo "<p>".$list[$i]['subject']."<br><span>".$list[$i]['datetime']."</span></p>";
                        ?>
                    </div>
                </div>
                <?php }  ?>
                <?php if (count($list) == 0) { //게시물이 없을 때  ?>
                <div class="empty_li">게시물이 없습니다.</div>
                <?php }  ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const pfSwiper = new Swiper('.portfolio-swiper', {
        // 자동재생 3초
        autoplay: {
            delay: 3000,
        },
        //방향 셋팅 vertical 수직, horizontal 수평 설정이 없으면 수평
        direction: 'horizontal',
        //한번에 보여지는 페이지 숫자
        slidesPerView: 3, // 동시에 보여줄 슬라이드 갯수
        spaceBetween: 40, // 슬라이드간 간격
        slidesPerGroup: 1, // 그룹으로 묶을 수, slidesPerView 와 같은 값을 지정하는게 좋음
        // 그룹수가 맞지 않을 경우 빈칸으로 메우기
        // 3개가 나와야 되는데 1개만 있다면 2개는 빈칸으로 채워서 3개를 만듬
        loopFillGroupWithBlank: true,
        //드레그 기능 true 사용가능 false 사용불가
        debugger: true,
        //반복 기능 true 사용가능 false 사용불가
        loop: true,
        //선택된 슬라이드를 중심으로 true 사용가능 false 사용불가 djqt
        centeredSlides: true,
        // 페이지 전환효과 slidesPerView효과와 같이 사용 불가
        // effect: 'fade',
        //네이게이션 버튼
        navigation: {
            prevEl: '.it_navigation .left',
            nextEl: '.it_navigation .right',
        },
    });
</script>
