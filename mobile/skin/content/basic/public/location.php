<!-- 오시는 길 -->
<?php
add_stylesheet('<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">', 4);
?>

<div id="wrap">
    <section class="location">
        <div class="con_area mt100" data-aos="fade-up" class="aos-init aos-animate">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3171.9404942615142!2d127.1035332149993!3d37.34391744460417!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca78dd51112bd%3A0xd2e28e4ec45852e2!2zKOyjvCnsiqTtj6zthYztgaw!5e0!3m2!1sko!2skr!4v1632814671257!5m2!1sko!2skr" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="location_txt con_area mt40 clearfix" data-aos="fade-up" class="aos-init aos-animate">
            <ul class="loc_txt_left">
                <li>PHONE
                    <ul>
                        <li class="line_red_s"></li>
                        <li>1577-5767</li>
                    </ul>
                </li>
                <li>FAX
                    <ul>
                        <li class="line_red_s"></li>
                        <li>031-781-2888</li>
                    </ul>
                </li>
                <li>E-MAIL
                    <ul>
                        <li class="line_red_s"></li>
                        <li><a href="mailto:spoenc@daum.net">spoenc@daum.net</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="loc_txt_right">
                <li>본사
                    <ul>
                        <li class="line_red_s"></li>
                        <li>경기도 성남시 분당구 탄천상로 164,C동 215호(구미동, 시그마2 오피스텔)</li>
                    </ul>
                </li>
                <li>공장
                    <ul>
                        <li class="line_red_s"></li>
                        <li>경상북도 구미시 1공단로 4길 38-10 (공단동) 5동</li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="red_line">
            <div>
                <div class="line_red_3"></div>
                <div class="line_red_3 mt5"></div>
                <div class="line_red_3 mt5"></div>
            </div>
        </div>
    </section>
</div>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<?php echo '<script src="'.$content_skin_url.'/js/publicCommon.js"></script>'; ?>

<script type="text/javascript">
    floatUI.init();
    AOS.init();
</script>