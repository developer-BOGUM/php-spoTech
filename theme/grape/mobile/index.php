<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.G5_JS_URL.'/swiper/swiper.min.css">', 1);
add_javascript('<script src="'.G5_JS_URL.'/swiper/swiper.min.js"></script>', 11);
?>

<!-- 배너 최신글 -->
<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/banner', 'banner', 3, 33);
?>
<div id="section2" class="idx_com">
    <div class="idx_sub">
        <h2>COMPANY</h2>
        <p>sprots & Technology SPOTECH</p>
    </div>
    <div class="idx_wrap">
        <div>
            <label>About Us</label>
            <h3>회사소개</h3>
            <p>끊임없는 열정과 새로움으로<br>스포트케의 진화는 계속됩니다.</p>
            <a>자세히보기 +</a>
        </div>
        <div>
            <label>History</label>
            <h3>회사연혁</h3>
            <p>경기장 건설의 한계를 넘어<br>스포츠 산업의 트렌드를 스포테크의 여정을 소개합니다.</p>
            <a>자세히보기 +</a>
        </div>
        <div>
            <label>Certification</label>
            <h3>인증/면허</h3>
            <p>정부기관과자자체,다수의 기업들과의 제휴 및 협업으로<br>업계에서는 이미 기술력을 인정받고 있습니다.</p>
            <a>자세히보기 +</a>
        </div>
    </div>
    <div class="idc_bg">
        <div class="idc_wrap">
            <div>
                <p><strong>홍보자료</strong>스포테크 카다로그를 확인해보세요.</p>
            </div>
            <div>
                <p><strong>견적문의</strong>사람과 공간을잇는 스포테크의 기술을 만나보세요.</p>
            </div>
        </div>
    </div>
</div>

<div id="section3" class="ids_bs">
    <div class="ids_sub">
        <h3>BUSINESS</h3>
        <ul id="pageNm">
            <li class="active" data-nm="0">인조잔디</li>
            <li data-nm="1">스포츠포장</li>
            <li data-nm="2">스포츠시설</li>
            <li data-nm="3">경기장공사</li>
            <li data-nm="4">관리/서비스</li>
        </ul>
    </div>
    <div class="company-swiper swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div>
                    <div class="img-1"></div>
                </div>
                <div>
                    <h4>인조잔디</h4>
                    <h5>천연잔디 그 이상!</h5>
                    <p>
                        스포테크의 인조잔디는 ITF,Q-Mark,KS인증,환경표지 등을 획득한 제품으로서,<br>
                        기술력 및 품질을 검증받은 최고급 인조잔디입니다.경기성을 높이고 슬라이딩시 부상방지 등<br>
                        천연잔디의 장점을 그대로 재현하였을 뿐만 아니라 천연잔디 대비 유지관리가 용이하고<br>
                        계절 및 기후에 상고나없이 365일 사용할 수 있어 스포츠인들의 많은 사랑을 받고 있습니다.
                    </p>

                    <a>자세히보기 +</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div>
                    <div class="img-1"></div>
                </div>
                <div>
                    <h4>스포츠포장</h4>
                    <h5>천연잔디 그 이상!</h5>
                    <p>
                        스포테크의 인조잔디는 ITF,Q-Mark,KS인증,환경표지 등을 획득한 제품으로서,<br>
                        기술력 및 품질을 검증받은 최고급 인조잔디입니다.경기성을 높이고 슬라이딩시 부상방지 등<br>
                        천연잔디의 장점을 그대로 재현하였을 뿐만 아니라 천연잔디 대비 유지관리가 용이하고<br>
                        계절 및 기후에 상고나없이 365일 사용할 수 있어 스포츠인들의 많은 사랑을 받고 있습니다.
                    </p>

                    <a>자세히보기 +</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div>
                    <div class="img-1"></div>
                </div>
                <div>
                    <h4>스포츠시설</h4>
                    <h5>천연잔디 그 이상!</h5>
                    <p>
                        스포테크의 인조잔디는 ITF,Q-Mark,KS인증,환경표지 등을 획득한 제품으로서,<br>
                        기술력 및 품질을 검증받은 최고급 인조잔디입니다.경기성을 높이고 슬라이딩시 부상방지 등<br>
                        천연잔디의 장점을 그대로 재현하였을 뿐만 아니라 천연잔디 대비 유지관리가 용이하고<br>
                        계절 및 기후에 상고나없이 365일 사용할 수 있어 스포츠인들의 많은 사랑을 받고 있습니다.
                    </p>

                    <a>자세히보기 +</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div>
                    <div class="img-1"></div>
                </div>
                <div>
                    <h4>경기장공사</h4>
                    <h5>천연잔디 그 이상!</h5>
                    <p>
                        스포테크의 인조잔디는 ITF,Q-Mark,KS인증,환경표지 등을 획득한 제품으로서,<br>
                        기술력 및 품질을 검증받은 최고급 인조잔디입니다.경기성을 높이고 슬라이딩시 부상방지 등<br>
                        천연잔디의 장점을 그대로 재현하였을 뿐만 아니라 천연잔디 대비 유지관리가 용이하고<br>
                        계절 및 기후에 상고나없이 365일 사용할 수 있어 스포츠인들의 많은 사랑을 받고 있습니다.
                    </p>

                    <a>자세히보기 +</a>
                </div>
            </div>
            <div class="swiper-slide">
                <div>
                    <div class="img-1"></div>
                </div>
                <div>
                    <h4>관리/서비스</h4>
                    <h5>천연잔디 그 이상!</h5>
                    <p>
                        스포테크의 인조잔디는 ITF,Q-Mark,KS인증,환경표지 등을 획득한 제품으로서,<br>
                        기술력 및 품질을 검증받은 최고급 인조잔디입니다.경기성을 높이고 슬라이딩시 부상방지 등<br>
                        천연잔디의 장점을 그대로 재현하였을 뿐만 아니라 천연잔디 대비 유지관리가 용이하고<br>
                        계절 및 기후에 상고나없이 365일 사용할 수 있어 스포츠인들의 많은 사랑을 받고 있습니다.
                    </p>

                    <a>자세히보기 +</a>
                </div>
            </div>
        </div>
    </div>
    <div class="ids_paging">
        <div class="swiper-pagination"></div>
    </div>
</div>
<script>
    const cpSwiper = new Swiper('.company-swiper', {
        //방향 셋팅 vertical 수직, horizontal 수평 설정이 없으면 수평
        direction: 'horizontal',
        //한번에 보여지는 페이지 숫자
        slidesPerView: 1,
        //페이지와 페이지 사이의 간격
        spaceBetween: 20,
        //드레그 기능 true 사용가능 false 사용불가
        debugger: true,
        //반복 기능 true 사용가능 false 사용불가
        loop: false,
        //선택된 슬라이드를 중심으로 true 사용가능 false 사용불가
        centeredSlides: true,
        // 페이지 전환효과 slidesPerView효과와 같이 사용 불가
        // effect: 'fade',
        //자동 스크를링
        autoplay: {
            delay: 3000,
        },
        //페이징
        pagination: {
            //페이지 기능
            el: '.ids_paging .swiper-pagination',
            //클릭 가능여부
            clickable: true,
        },
        //현재페이지 효과
        on: {
            slideChangeTransitionEnd: function(){
                $('#pageNm li').removeClass('active');
                $('[data-nm="' + this.activeIndex + '"]').addClass('active');
            },
        },
    });
    $('#pageNm li').on('click', function(){
        cpSwiper.slideTo($(this).data('nm'), 300);
    });
</script>

<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/service', 'stadium', 6, 33);
?>

<script>
    var seq = 1;

    function fnMove(seq){
        var menu = document.getElementById('hd_wrapper');
        var menuH = menu.clientHeight;
        var offset = $("#section" + seq).offset();
        if(seq != 1) {
            offset.top = offset.top - menuH;
        }
        $('html, body').animate({scrollTop : offset.top}, 800);
    }

    $(window).on("wheel", function(e) {
        if(e.originalEvent.deltaY > 0) {
            if(seq == 4) return;
            seq++;
        } else if(e.originalEvent.deltaY < 0) {
            if(seq == 1) return;
            seq--;
        }
        fnMove(seq);
    })
    $(document).ready(function () {
        $("#top_btn").click(function(){
            seq = 1;
        });
    });

</script>

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>