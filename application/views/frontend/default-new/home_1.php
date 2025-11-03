<style>

    h1.animate__animated.animate__fadeInUp {
    display: none;
}
.search-option.mb-0
Specificity: (0,2,0)
 {
    display: none;
}

.EbannerTop.animate__animated.animate__fadeInUp.opacityOnUp {
    display: none;
}

    .eImage span {
        width: auto !important;
    }
    .course-item-one .content .title {
        display: -webkit-box!important; 
        -webkit-line-clamp: 1; 
        -webkit-box-orient: vertical; 
        overflow: hidden; 
        text-overflow: ellipsis; 
        white-space: normal;
    }
    .EbannerTop .search-option .form-control {

    border: 1px solid #038261;

}
.popover-btns .purchase-btn {
    border-color: #038261;
}
    .enrollBtn {
        background-color: #038261;
    }
    .list-btn:hover, .list-btn.active {
        background-color: #038261;
        border: 1.5px solid #038261;
    }
    .form-check-input:checked {
        background-color: #038261;
        border-color: #038261;
    }
    .courses-card-body:hover .courses-text h5 {
        color: #038261;
    }
    /* Banner small cards background requested: #dfffe8 */
    .bannar-card .banner-card-1{background:#dfffe8;border-radius:12px;padding:12px}
    /* Override final section background to white when needed (uses !important to override inline style) */
    section.student-creative-section.py-5.pt-0.position-relative { background: #ffffff !important; }
</style>


<!---------- Banner Section Start ---------------->
<section class="h-1-banner bannar-area pb-100">
    <div class="container">
        <div class="row">
        <section class="student-creative-section py-5 pt-0 position-relative" style="background: #038260; overflow: hidden;">
                <div class="h-1-banner-text EbannerLeft position-relative">
                <?php
                    $banner_title = site_phrase(get_frontend_settings('banner_title'));
                    $banner_title_arr = explode(' ', $banner_title);
                ?>
                <h1 class=" animate__animated animate__fadeInUp" data-wow-duration="1000" data-wow-delay="500">
                    <?php
                    foreach($banner_title_arr as $key => $value){
                        if ($key == 1) { 
                            echo $value . '<br>';
                        } elseif ($key == count($banner_title_arr) - 1) { 
                            echo '<span class="d-inline-block" style="color:#038261;">'.$value.'</span>';
                        } else {
                            echo $value . ' ';
                        }
                    }
                    ?>
                </h1>
                    <div class="EbannerTop  animate__animated  animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="500">
                       <p><?php echo site_phrase(get_frontend_settings('banner_sub_title')); ?></p>
                       <div class="search-option mb-0">
                            <form action="<?php echo site_url('home/search'); ?>" method="get">
                                <input class="form-control" type="text" placeholder="<?php echo get_phrase('What do you want to learn'); ?>" name="query">
                                <button class="submit-cls" type="submit">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.58439 17.5017C13.9566 17.5017 17.5011 13.9573 17.5011 9.585C17.5011 5.21275 13.9566 1.66833 9.58439 1.66833C5.21214 1.66833 1.66772 5.21275 1.66772 9.585C1.66772 13.9573 5.21214 17.5017 9.58439 17.5017Z" stroke="#1E293B" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M17.892 18.7769C18.1361 19.021 18.5318 19.021 18.7759 18.7769C19.02 18.5328 19.02 18.1371 18.7759 17.893L17.892 18.7769ZM16.2759 15.393L15.834 14.9511L14.9501 15.835L15.392 16.2769L16.2759 15.393ZM18.7759 17.893L16.2759 15.393L15.392 16.2769L17.892 18.7769L18.7759 17.893Z" fill="#1E293B"/>
                                    </svg>
                                    </button>
                            </form>
                        </div>
                    </div>

                   <div class="eCircle_parent">
                       <div class="eCircle  animate__animated  animate__fadeInRightBig" data-wow-duration="1000" data-wow-delay="500">
                            <span class="circleOne"><img src="<?php echo base_url("assets/frontend/default-new/image/circle1.png"); ?>" alt=""></span>
                            <span class="cirlceTwo"><img src="<?php echo base_url("assets/frontend/default-new/image/circle2.png"); ?>" alt=""></span>
                        </div>
                   </div>
                </div>
            </div>


            <div class="col-lg-12 col-md-12 col-sm-12 col-12 order-md-2 order-1  order-lg-1 pt-0 pt-md-5 ">
                 <div class="EbannerRight">
                    <div class="Ebanner  animate__animated  animate__fadeInUp" data-wow-duration="1000" data-wow-delay="500">
                       <img loading="lazy" width="100%" src="<?php echo base_url("uploads/system/" . get_current_banner('banner_image')); ?>">
                    </div>
                 </div>
            </div>
        </div> 
    <div class="bannar-card  Ebaner-card wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="500" data-wow-delay="400" style="background: #dfffe8; border-radius: 24px; box-shadow: 0 4px 24px #03826118;">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 arrow-side">
                    <div class="banner-card-1">
                        <div class="row">
                            <div class="col-lg-2">
                                <img src="<?php echo base_url('assets/frontend/default-new/image/h1.svg')?>">
                            </div>
                            <div class="col-lg-10">
                                <h6><?php echo site_phrase('expert_instruction'); ?></h6>
                                <p><?php echo site_phrase('find_the_right_course_for_you'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 arrow-side">
                    <div class="banner-card-1">
                        <div class="row">
                            <div class="col-lg-2">
                               <img loading="lazy" src="<?php echo base_url('assets/frontend/default-new/image/h2.svg')?>">
                            </div>
                           
                            <div class="col-lg-10">
                                <h6><?php
                                    $status_wise_courses = $this->crud_model->get_status_wise_courses_front();
                                    $number_of_courses = $status_wise_courses['active']->num_rows();
                                    echo $number_of_courses . ' ' . site_phrase('online_courses'); ?></h6>
                                <p><?php echo site_phrase('explore_a_variety_of_fresh_topics'); ?></p>
                            </div>
                        </div>
                    </div>           
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 arrow-side">
                    <div class="banner-card-1">
                        <div class="row">
                            <div class="col-lg-2">
                            <img loading="lazy" src="<?php echo base_url('assets/frontend/default-new/image/h3.svg')?>">
                            </div>
                            <div class="col-lg-10">
                                <h6><?php echo site_phrase('Lifetime access'); ?></h6>
                                <p><?php echo site_phrase('learn_on_your_schedule'); ?></p>
                            </div>
                        </div>
                    </div>           
                </div>
            </div>
        </div>
    </div>
</section>
<!---------- Banner Section End ---------------->

<!-- Custom Main Services Section (styled like provided image) -->
<?php
// Build 3 cards from frontend settings when available. Fallbacks are provided.
$home_cards = array();
for ($i = 1; $i <= 3; $i++) {
    $title_key = 'home_1_card_' . $i . '_title';
    $subtitle_key = 'home_1_card_' . $i . '_subtitle';
    $image_key = 'home_1_card_' . $i . '_image';
    $link_key = 'home_1_card_' . $i . '_link';

    $title_val = trim(get_frontend_settings($title_key));
    $subtitle_val = trim(get_frontend_settings($subtitle_key));
    $image_val = trim(get_frontend_settings($image_key));
    $link_val = trim(get_frontend_settings($link_key));

    $home_cards[] = array(
        'title' => $title_val ? site_phrase($title_val) : site_phrase('start_learning_from_best_platform'),
        'subtitle' => $subtitle_val ? site_phrase($subtitle_val) : '',
        'image' => $image_val ? base_url('uploads/system/' . $image_val) : base_url('assets/frontend/default-new/image/h'. $i .'.svg'),
        'link' => $link_val ? $link_val : site_url('home')
    );
}
?>

<style>
    /* Section background and header */
    /* Background set to requested color #038260 */
    .home-main-services-section{background:#038260;padding:60px 0;direction:rtl}
    .home-main-services-section .section-title h1{color:#fff;font-weight:700;margin-bottom:8px}
    .home-main-services-section .section-title p{color:#e7efeceb;margin:0 0 28px}

    /* Cards layout */
    .hm-card{border-radius:12px;padding:36px 26px;display:flex;flex-direction:column;align-items:center;min-height:420px;box-shadow:0 6px 18px rgba(0,0,0,0.06)}
    .hm-card .card-img{max-width:260px;width:100%;height:auto;margin-bottom:18px}
    .hm-card .card-sep{width:70%;height:1px;background:rgba(0,0,0,0.06);margin:18px 0}
    .hm-card h4{font-size:20px;color:#1e2a2a;margin-bottom:10px;font-weight:700}
    .hm-card p{color:#6b6b6b;margin-bottom:22px}
    .hm-card .cta{display:inline-flex;align-items:center;gap:8px;color:#2f7f74;text-decoration:none;font-weight:600}
    .hm-card.type-1{background:#dff3ee}
    .hm-card.type-2{background:#dceffb}
    .hm-card.type-3{background:#f6e0e0}

    /* Button circle */
    .hm-card .cta .icon{width:34px;height:34px;border-radius:50%;display:inline-flex;align-items:center;justify-content:center;background:transparent;border:2px solid rgba(47,127,116,0.15);color:#2f7f74}

    @media (max-width:991px){
        .hm-card{min-height:360px}
    }
</style>

<section class="home-main-services-section">
    <div class="container">
        <div class="row justify-content-center section-title text-center">
            <div class="col-lg-10">
                <h1 class="f-36"><?php echo site_phrase('start_learning_from_best_platform'); ?></h1>
                <p><?php echo site_phrase(get_frontend_settings('banner_sub_title')); ?></p>
            </div>
        </div>

        <div class="row mt-5 justify-content-center gx-4">
            <div class="col-12 position-relative">
                <button class="btn btn-sm btn-light hm-prev" style="position:absolute;left:0;top:50%;transform:translateY(-50%);z-index:10;border-radius:50%;">&larr;</button>
                <button class="btn btn-sm btn-light hm-next" style="position:absolute;right:0;top:50%;transform:translateY(-50%);z-index:10;border-radius:50%;">&rarr;</button>

                <div class="hm-carousel-row d-flex overflow-hidden" style="scroll-behavior:smooth;">
                    <?php
                    // Use the exact categories and links provided by the user.
                    // Each card will display the category name and link to the provided URL.
                    // Use the three provided animation SVGs in rotation for the cards.
                    $anim_images = [
                        base_url('assets/frontend/default-new/image/boy-animation.svg'),
                        base_url('assets/frontend/default-new/image/couple-animation.svg'),
                        base_url('assets/frontend/default-new/image/girl-animation.svg'),
                    ];

                    $final_cards = [
                        [
                            'title' => 'علاج النطق و اللغة',
                            'subtitle' => '',
                            'image' => $anim_images[0],
                            'link' => 'https://esttamer.com/home/courses?category=%D8%B9%D9%84%D8%A7%D8%AC-%D8%A7%D9%84%D9%86%D8%B7%D9%82-%D9%88-%D8%A7%D9%84%D9%84%D8%BA%D8%A9'
                        ],
                        [
                            'title' => 'السمع و التأهيل السمعي',
                            'subtitle' => '',
                            'image' => $anim_images[1],
                            'link' => 'https://esttamer.com/home/courses?category=%D8%A7%D9%84%D8%B3%D9%85%D8%B9-%D9%88-%D8%A7%D9%84%D8%AA%D8%A3%D9%87%D9%8A%D9%84-%D8%A7%D9%84%D8%B3%D9%85%D8%B9%D9%8A'
                        ],
                        [
                            'title' => 'العلاج الوظيفي',
                            'subtitle' => '',
                            'image' => $anim_images[2],
                            'link' => 'https://esttamer.com/home/courses?category=%D8%A7%D9%84%D8%B9%D9%84%D8%A7%D8%AC-%D8%A7%D9%84%D9%88%D8%B8%D9%8A%D9%81%D9%8A'
                        ],
                        [
                            'title' => 'العلاج الطبيعي',
                            'subtitle' => '',
                            'image' => $anim_images[0],
                            'link' => 'https://esttamer.com/home/courses?category=%D8%A7%D9%84%D8%B9%D9%84%D8%A7%D8%AC-%D8%A7%D9%84%D8%B7%D8%A8%D9%8A%D8%B9%D9%8A'
                        ],
                        [
                            'title' => 'طب الأسرة و المهارات الوالدية',
                            'subtitle' => '',
                            'image' => $anim_images[1],
                            'link' => 'https://esttamer.com/home/courses?category=%D8%B7%D8%A8-%D8%A7%D9%84%D8%A3%D8%B3%D8%B1%D8%A9-%D9%88-%D8%A7%D9%84%D9%85%D9%87%D8%A7%D8%B1%D8%A7%D8%AA-%D8%A7%D9%84%D9%88%D8%A7%D9%84%D8%AF%D9%8A%D8%A9'
                        ]
                    ];

                    // No DB lookup here — use the provided links directly. Iterate and render.
                    foreach ($final_cards as $idx => $card) :
                        $link = $card['link'];
                    ?>
                        <div class="hm-item" style="flex:0 0 calc(100%/3);max-width:calc(100%/3);padding:0 12px;box-sizing:border-box;">
                            <div class="hm-card <?php echo 'type-'.((($idx)%3)+1); ?>">
                                <div class="card-image text-center">
                                    <img loading="lazy" src="<?php echo $card['image']; ?>" alt="<?php echo htmlspecialchars($card['title']); ?>" class="card-img">
                                </div>
                                <div class="card-sep"></div>
                                <h4><?php echo $card['title']; ?></h4>
                                <?php if($card['subtitle'] != ''): ?><p><?php echo $card['subtitle']; ?></p><?php endif; ?>
                                <a href="<?php echo $link; ?>" class="cta mt-auto">
                                    <span class="icon"><i class="far fa-play-circle"></i></span>
                                    <span><?php echo get_phrase('ابدأ الآن'); ?></span>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>




<?php
// Insert 'لماذا منصة استمر' section
?>
<script>
    (function(){
        var wrapper = document.querySelector('.hm-carousel-row');
        if(!wrapper) return;
        var prev = document.querySelector('.hm-prev');
        var next = document.querySelector('.hm-next');

        function getStep(){
            var item = wrapper.querySelector('.hm-item');
            if(!item) return wrapper.clientWidth;
            // include horizontal gap/padding automatically by using bounding width
            return item.getBoundingClientRect().width;
        }

        function isRTL(elem){
            try{ return getComputedStyle(elem).direction === 'rtl'; }catch(e){ return false; }
        }

        prev && prev.addEventListener('click', function(){
            var step = getStep();
            if(isRTL(wrapper)) wrapper.scrollBy({left: step, behavior: 'smooth'});
            else wrapper.scrollBy({left: -step, behavior: 'smooth'});
        });

        next && next.addEventListener('click', function(){
            var step = getStep();
            if(isRTL(wrapper)) wrapper.scrollBy({left: -step, behavior: 'smooth'});
            else wrapper.scrollBy({left: step, behavior: 'smooth'});
        });
    })();
</script>


<?php
// Insert 'لماذا منصة استمر' section
?>
<section class="why-estmar-section py-5">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-lg-8 text-center">
                <h2 class="f-36 mb-2">لماذا منصة استمر</h2>
                <p class="text-muted">اكتشف مزايا منصتنا التي تساعدك على بدء العلاج والدعم بسهولة وأمان.</p>
            </div>
        </div>

        <style>
            .why-estmar-section{background:#fff;direction:rtl}
            .why-estmar-feature{display:flex;align-items:center;gap:18px}
            .why-estmar-feature .icon{flex:0 0 96px;text-align:center}
            .why-estmar-feature .icon img{width:88px;height:auto}
            .why-estmar-feature .content h4{margin:0;font-size:20px;font-weight:700;color:#1b3f3a}
            .why-estmar-feature .content p{margin:6px 0 0;color:#6b6b6b}
            .why-estmar-cta{margin-top:28px;text-align:center}
            .why-estmar-cta .btn{background:#b94b47;border:none;color:#fff;padding:10px 28px;border-radius:6px}
            @media (max-width:991px){ .why-estmar-feature{flex-direction:row;gap:12px} }
            @media (max-width:575px){ .why-estmar-feature{flex-direction:row;gap:10px} .why-estmar-feature .icon img{width:64px} }
        </style>

        <div class="row gy-4">
            <div class="col-lg-6 col-md-6">
                <div class="why-estmar-feature">
                    <div class="icon">
                        <img loading="lazy" src="<?php echo base_url('assets/frontend/default-new/image/analysis.png'); ?>" alt="معالجون معتمدون">
                    </div>
                    <div class="content">
                        <h4>معالجون معتمدون</h4>
                        <p>نخبة من الأخصائيين والمعالجين النفسيين الحاصلين على درجات علمية متقدمة وخبرة في مجالات متعددة.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="why-estmar-feature">
                    <div class="icon">
                        <img loading="lazy" src="<?php echo base_url('assets/frontend/default-new/image/privacy-1.png'); ?>" alt="سرية تامة">
                    </div>
                    <div class="content">
                        <h4>سرية تامة</h4>
                        <p>نحافظ على خصوصيتك. جميع الجلسات والمعلومات الشخصية محمية ولا يمكن لأي جهة الاطلاع عليها.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="why-estmar-feature">
                    <div class="icon">
                        <img loading="lazy" src="<?php echo base_url('assets/frontend/default-new/image/student-1.png'); ?>" alt="سهولة الاستخدام">
                    </div>
                    <div class="content">
                        <h4>سهولة الاستخدام</h4>
                        <p>تجربة استخدام مريحة عبر تطبيقنا، تبدأ بالتسجيل وحتى حجز الجلسات الفردية والجماعية وإرسال الرسائل بسهولة.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="why-estmar-feature">
                    <div class="icon">
                        <img loading="lazy" src="<?php echo base_url('assets/frontend/default-new/image/h-1-bnar-c-3.png'); ?>" alt="مرونة في المواعيد">
                    </div>
                    <div class="content">
                        <h4>مرونة في المواعيد</h4>
                        <p>اختر الوقت الذي يناسبك واحجز جلساتك بشكل مرن وابدأ العلاج من أي مكان دون تعارض مع التزاماتك.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="why-estmar-cta">
            <a href="<?php echo site_url('sign_up'); ?>" class="btn">إنشاء حساب</a>
        </div>
    </div>
</section>

<!-- قسم تحميل التطبيق -->
<section class="app-download-section py-5" style="background: linear-gradient(180deg, #f3fbfa 0%, #ffffff 100%);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center">
                <img loading="lazy" src="<?php echo base_url('assets/frontend/default-new/image/app-screenshoots-ar.svg'); ?>" alt="app preview" style="max-width:100%;height:auto;box-shadow:0 20px 50px rgba(3,130,97,0.06);border-radius:18px;">
            </div>
            <div class="col-lg-6">
                <h2 class="f-36" style="color:#1f6b64;">حمل تطبيق منصه استمر الآن</h2>
                <p class="text-muted" style="font-size:18px;">احصل على مزايا إضافية مثل التحدث مع الأخصائي عبر خاصية الدردشة، بالإضافة إلى سهولة حجز وحضور الجلسات عبر تحميلك لتطبيق منصه استمر.</p>

                <div style="margin-top:22px;display:flex;gap:12px;align-items:center;flex-wrap:wrap">
                    <a href="#" class="app-badge d-inline-flex align-items-center" style="background:#000;color:#fff;padding:10px 16px;border-radius:8px;text-decoration:none;">
                        <i class="fab fa-google-play" style="font-size:20px;margin-right:10px"></i>
                        <div style="text-align:left;line-height:1">
                            <div style="font-size:12px;opacity:0.8">GET IT ON</div>
                            <div style="font-weight:700">Google Play</div>
                        </div>
                    </a>

                    <a href="#" class="app-badge d-inline-flex align-items-center" style="background:#000;color:#fff;padding:10px 16px;border-radius:8px;text-decoration:none;">
                        <i class="fab fa-apple" style="font-size:20px;margin-right:10px"></i>
                        <div style="text-align:left;line-height:1">
                            <div style="font-size:12px;opacity:0.8">Download on the</div>
                            <div style="font-weight:700">App Store</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if(get_frontend_settings('top_course_section') == 1): ?>
<!---------- Top courses Section start --------------->
<section class="courses eTopcourse Ecourse grid-view-body pb-100 wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="500" data-wow-delay="300">
    <div class="container">
        <div class="cTitle text-center">

            <h1 class="pt-0 f-36"><?php echo site_phrase('top_courses'); ?></h1>
            <p><?php echo site_phrase('These_are_the_most_popular_courses_among_Listen_Courses_learners_worldwide')?></p>
        </div>
        <div class="courses-card">
            <div class="course-group-slider" data-wow-duration="1000" data-wow-delay="500">
                <?php
                $top_courses = $this->crud_model->get_top_courses()->result_array();
                foreach ($top_courses as $top_course) :
                    $الدروس = $this->crud_model->get_الدروس('course', $top_course['id']);
                    $instructor_details = $this->user_model->get_all_user($top_course['creator'])->row_array();
                    $course_duration = $this->crud_model->get_total_duration_of_lesson_by_course_id($top_course['id']);
                    $total_rating =  $this->crud_model->get_ratings('course', $top_course['id'], true)->row()->rating;
                    $number_of_ratings = $this->crud_model->get_ratings('course', $top_course['id'])->num_rows();
                    if ($number_of_ratings > 0) {
                        $average_ceil_rating = ceil($total_rating / $number_of_ratings);
                    } else {
                        $average_ceil_rating = 0;
                    }
                    ?>
                    <div class="single-popup-course epopCourse position-relative">
                        <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($top_course['title'])) . '/' . $top_course['id']); ?>" id="top_course_<?php echo $top_course['id']; ?>" class="checkPropagation courses-card-body">
                            <div class="courses-card-image">
                                <img loading="lazy" src="<?php echo $this->crud_model->get_course_thumbnail_url($top_course['id']); ?>">

                                <div class="courses-icon <?php if(in_array($top_course['id'], $my_wishlist_items)) echo 'red-heart'; ?>" id="coursesWishlistIconTopCourse<?php echo $top_course['id']; ?>">
                                    
                                    <i class="fas fa-heart checkPropagation" onclick="actionTo('<?php echo site_url('home/toggleWishlistItems/'.$top_course['id'].'/TopCourse'); ?>')"></i>
                                </div>

                                <div class="courses-card-image-text">
                                    <h3><?php echo get_phrase($top_course['level']); ?></h3>
                                </div> 
                            </div>
                            <div class="courses-text">
                                <h5 class="mb-2"><?php echo $top_course['title']; ?></h5>
                                <div class="review-icon">
                                    <div class="review-icon-star align-items-center">
                                       <p>
                                          <i class="fa-solid fa-star <?php if($number_of_ratings > 0) echo 'filled'; ?>"></i>
                                       </p>
                                        <p class="mr-5px"><?php echo $average_ceil_rating; ?></p>
                                        <p>(<?php echo $number_of_ratings; ?> <?php echo get_phrase('Reviews') ?>)</p>
                                    </div>
                                    <div class="review-btn d-flex align-items-center">
                                       <span data-bs-toggle="tooltip" data-bs-title="<?php echo site_phrase('Compare')?>" class="echecks checkPropagation" onclick="redirectTo('<?php echo base_url('home/compare?course-1='.slugify($top_course['title']).'&course-id-1='.$top_course['id']); ?>');">
                                       <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.6134 8.14665C13.3401 8.14665 13.1134 7.91998 13.1134 7.64665V5.43335C13.1134 4.60668 12.4401 3.93335 11.6134 3.93335H2.38672C2.11339 3.93335 1.88672 3.70668 1.88672 3.43335C1.88672 3.16002 2.11339 2.93335 2.38672 2.93335H11.6134C12.9934 2.93335 14.1134 4.05335 14.1134 5.43335V7.64665C14.1134 7.92665 13.8867 8.14665 13.6134 8.14665Z" fill="#0D0C23"/>
                                        <path d="M4.49339 6.04665C4.36672 6.04665 4.24006 5.99996 4.14006 5.89996L2.03339 3.79332C1.94005 3.69998 1.88672 3.5733 1.88672 3.43996C1.88672 3.30663 1.94005 3.17998 2.03339 3.08665L4.14006 0.979961C4.33339 0.786628 4.65339 0.786628 4.84672 0.979961C5.04005 1.17329 5.04005 1.49333 4.84672 1.68667L3.0934 3.43996L4.84672 5.1933C5.04005 5.38663 5.04005 5.70663 4.84672 5.89996C4.74672 5.9933 4.62005 6.04665 4.49339 6.04665Z" fill="#0D0C23"/>
                                        <path d="M13.6134 13.06H4.38672C3.00672 13.06 1.88672 11.94 1.88672 10.56V8.34668C1.88672 8.07335 2.11339 7.84668 2.38672 7.84668C2.66005 7.84668 2.88672 8.07335 2.88672 8.34668V10.56C2.88672 11.3867 3.56005 12.06 4.38672 12.06H13.6134C13.8867 12.06 14.1134 12.2867 14.1134 12.56C14.1134 12.8334 13.8867 13.06 13.6134 13.06Z" fill="#0D0C23"/>
                                        <path d="M11.5068 15.1666C11.3801 15.1666 11.2535 15.12 11.1535 15.02C10.9601 14.8267 10.9601 14.5066 11.1535 14.3133L12.9068 12.56L11.1535 10.8067C10.9601 10.6133 10.9601 10.2933 11.1535 10.1C11.3468 9.90665 11.6668 9.90665 11.8601 10.1L13.9668 12.2066C14.0601 12.3 14.1135 12.4267 14.1135 12.56C14.1135 12.6933 14.0601 12.82 13.9668 12.9133L11.8601 15.02C11.7668 15.12 11.6401 15.1666 11.5068 15.1666Z" fill="#0D0C23"/>
                                        </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="duration-time">
                                    <?php if($course_duration): ?>
                                    <p class="m-0"> <i class="fa-regular fa-clock p-0 text-15px"></i> <?php echo $course_duration; ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="courses-price-border">
                                    <div class="courses-price">
                                        <div class="courses-price-left">
                                            <?php if($top_course['is_free_course']): ?>
                                                <h5 class="colorBlue"><?php echo get_phrase('Free'); ?></h5>
                                            <?php elseif($top_course['discount_flag']): ?>
                                                <h5><?php echo currency($top_course['discounted_price']); ?></h5>
                                                <p class="mt-1"><del><?php echo currency($top_course['price']); ?></del></p>
                                            <?php else: ?>
                                                <h5><?php echo currency($top_course['price']); ?></h5>
                                            <?php endif; ?>
                                        </div>
                                        <div class="courses-price-right ">
                                             <?php if(is_purchased($top_course['id'])): ?>
                                                <span class="enrollBtn checkPropagation" onclick="redirectTo('<?php echo site_url('home/lesson/'.slugify($top_course['title']).'/'.$top_course['id']) ?>');"><i class="far fa-play-circle text-white"></i> <?php echo get_phrase('ابدأ الآن'); ?></span>
                                            <?php else: ?>
                                                <span class="enrollBtn"><?php echo site_phrase('سجل الآن')?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </a>

                        <div id="top_course_feature_<?php echo $top_course['id']; ?>" class="course-popover-content">
                            <?php if ($top_course['last_modified'] == "") : ?>
                                <p class="last-update"><?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $top_course['date_added']); ?></p>
                            <?php else : ?>
                                <p class="last-update"><?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $top_course['last_modified']); ?></p>
                            <?php endif; ?>
                            <div class="course-title">
                                 <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($top_course['title'])) . '/' . $top_course['id']); ?>"><?php echo $top_course['title']; ?></a>
                            </div>
                            <div class="course-meta">
                                <?php if ($top_course['course_type'] == 'general') : ?>
                                    <span class=""><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.97999 15.1666C4.03332 15.1666 0.813324 11.9533 0.813324 7.99998C0.813324 4.04665 4.03332 0.833313 7.97999 0.833313C11.9267 0.833313 15.1467 4.04665 15.1467 7.99998C15.1467 11.9533 11.9333 15.1666 7.97999 15.1666ZM7.97999 1.83331C4.57999 1.83331 1.81332 4.59998 1.81332 7.99998C1.81332 11.4 4.57999 14.1666 7.97999 14.1666C11.38 14.1666 14.1467 11.4 14.1467 7.99998C14.1467 4.59998 11.38 1.83331 7.97999 1.83331Z" fill="#AAAFB6"/>
                                    <path d="M7.03999 11.3267C6.74666 11.3267 6.46666 11.2533 6.21999 11.1133C5.64666 10.78 5.32666 10.1267 5.32666 9.27333V7.04C5.32666 6.18666 5.63999 5.53333 6.21333 5.2C6.78666 4.86666 7.51333 4.92 8.25333 5.34666L10.1867 6.46C10.9267 6.88666 11.3333 7.48666 11.3333 8.15333C11.3333 8.81333 10.9267 9.42 10.1867 9.84666L8.25333 10.96C7.83999 11.2067 7.41999 11.3267 7.03999 11.3267ZM7.03999 5.98C6.91999 5.98 6.80666 6.00666 6.71999 6.06C6.46666 6.20666 6.32666 6.56 6.32666 7.04V9.27333C6.32666 9.74666 6.46666 10.1067 6.71999 10.2467C6.96666 10.3933 7.34666 10.3333 7.75999 10.1L9.69333 8.98666C10.1067 8.74666 10.34 8.44666 10.34 8.16C10.34 7.87333 10.1 7.57333 9.69333 7.33333L7.75999 6.22C7.49333 6.06 7.24666 5.98 7.03999 5.98Z" fill="#AAAFB6"/>
                                    </svg>
                                        <?php echo $this->crud_model->get_الدروس('course', $top_course['id'])->num_rows() . ' ' . site_phrase('الدروس'); ?>
                                    </span>
                                    <?php if($course_duration): ?>
                                        <span class="">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.99998 15.1666C4.04665 15.1666 0.833313 11.9533 0.833313 7.99998C0.833313 4.04665 4.04665 0.833313 7.99998 0.833313C11.9533 0.833313 15.1666 4.04665 15.1666 7.99998C15.1666 11.9533 11.9533 15.1666 7.99998 15.1666ZM7.99998 1.83331C4.59998 1.83331 1.83331 4.59998 1.83331 7.99998C1.83331 11.4 4.59998 14.1666 7.99998 14.1666C11.4 14.1666 14.1666 11.4 14.1666 7.99998C14.1666 4.59998 11.4 1.83331 7.99998 1.83331Z" fill="#AAAFB6"/>
                                            <path d="M10.4733 10.62C10.3867 10.62 10.3 10.6 10.22 10.5467L8.15334 9.31332C7.64001 9.00665 7.26001 8.33332 7.26001 7.73999V5.00665C7.26001 4.73332 7.48668 4.50665 7.76001 4.50665C8.03334 4.50665 8.26001 4.73332 8.26001 5.00665V7.73999C8.26001 7.97999 8.46001 8.33332 8.66668 8.45332L10.7333 9.68665C10.9733 9.82665 11.0467 10.1333 10.9067 10.3733C10.8067 10.5333 10.64 10.62 10.4733 10.62Z" fill="#AAAFB6"/>
                                            </svg>

                                            <?php echo $course_duration; ?>
                                        </span>
                                    <?php endif; ?>
                                <?php elseif ($top_course['course_type'] == 'h5p') : ?>
                                    <span class="badge bg-light"><?= site_phrase('h5p_course'); ?></span>
                                <?php elseif ($top_course['course_type'] == 'scorm') : ?>
                                    <span class="badge bg-light"><?= site_phrase('scorm_course'); ?></span>
                                <?php endif; ?>
                                <span class="">
                                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.00001 15.1666C4.04668 15.1666 0.833344 11.9533 0.833344 7.99998C0.833344 4.04665 4.04668 0.833313 8.00001 0.833313C11.9533 0.833313 15.1667 4.04665 15.1667 7.99998C15.1667 11.9533 11.9533 15.1666 8.00001 15.1666ZM8.00001 1.83331C4.60001 1.83331 1.83334 4.59998 1.83334 7.99998C1.83334 11.4 4.60001 14.1666 8.00001 14.1666C11.4 14.1666 14.1667 11.4 14.1667 7.99998C14.1667 4.59998 11.4 1.83331 8.00001 1.83331Z" fill="#AAAFB6"/>
                                    <path d="M5.99341 10.4133C4.66007 10.4133 3.58008 9.33333 3.58008 8C3.58008 6.66667 4.66007 5.58667 5.99341 5.58667C6.58008 5.58667 7.14008 5.80002 7.58675 6.18669C7.79342 6.36669 7.81342 6.68668 7.63342 6.89335C7.45342 7.10002 7.13342 7.11998 6.92676 6.93998C6.66676 6.71332 6.34008 6.58667 5.99341 6.58667C5.21341 6.58667 4.58008 7.22 4.58008 8C4.58008 8.78 5.21341 9.41333 5.99341 9.41333C6.33341 9.41333 6.66676 9.28668 6.92676 9.06002C7.13342 8.88002 7.44676 8.89998 7.63342 9.10665C7.81342 9.31332 7.79342 9.63331 7.58675 9.81331C7.14008 10.2 6.57341 10.4133 5.99341 10.4133Z" fill="#AAAFB6"/>
                                    <path d="M10.6601 10.4133C9.32673 10.4133 8.24673 9.33333 8.24673 8C8.24673 6.66667 9.32673 5.58667 10.6601 5.58667C11.2467 5.58667 11.8067 5.80002 12.2534 6.18669C12.4601 6.36669 12.4801 6.68668 12.3001 6.89335C12.1201 7.10002 11.8001 7.11998 11.5934 6.93998C11.3334 6.71332 11.0067 6.58667 10.6601 6.58667C9.88006 6.58667 9.24673 7.22 9.24673 8C9.24673 8.78 9.88006 9.41333 10.6601 9.41333C11.0001 9.41333 11.3334 9.28668 11.5934 9.06002C11.8001 8.88002 12.1134 8.89998 12.3001 9.10665C12.4801 9.31332 12.4601 9.63331 12.2534 9.81331C11.8067 10.2 11.2401 10.4133 10.6601 10.4133Z" fill="#AAAFB6"/>
                                    </svg>

                                <?php echo ucfirst($top_course['language']); ?></span>
                             </div>
                            
                            <h6 class="text-white text-14px outCome"><?php echo get_phrase('Outcomes') ?>:</h6>
                            <ul class="will-learn">
                                <?php 
                                $outcomes = json_decode($top_course['outcomes']);
                                $count = 0;
                                foreach ($outcomes as $outcome) : 
                                    $count++;
                                ?>
                                    <li class="outcome-item <?php echo ($count > 3) ? 'hidden' : ''; ?>">
                                        <?php echo $outcome; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                            <button class="view-more-btn" 
                                    style="display: <?php echo (count($outcomes) > 3) ? 'inline-block' : 'none'; ?>">
                                <?php echo site_phrase('View More') ?>
                            </button>

                            <div class="popover-btns">
                                <?php $cart_items = $this->session->userdata('cart_items'); ?>
                                <?php if(is_purchased($top_course['id'])): ?>
                                    <a href="<?php echo site_url('home/lesson/'.slugify($top_course['title']).'/'.$top_course['id']) ?>" class="purchase-btn d-flex align-items-center  me-auto"><i class="far fa-play-circle me-2"></i> <?php echo get_phrase('ابدأ الآن'); ?></a>
                                    <?php if ($top_course['is_free_course'] != 1) : ?>
                                        <button type="button" class="gift-btn ms-auto" title="<?php echo get_phrase('Gift someone else'); ?>" data-bs-toggle="tooltip" onclick="actionTo('<?php echo site_url('home/handle_buy_now/' . $top_course['id'].'?gift=1'); ?>')"><i class="fas fa-gift"></i></button>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <?php if ($top_course['is_free_course'] == 1) : ?>
                                        <a class="purchase-btn green_purchase ms-auto" href="<?php echo site_url('home/get_enrolled_to_free_course/' . $top_course['id']); ?>"><?php echo get_phrase('سجل الآن'); ?></a>
                                    <?php else : ?>

                                        <!-- Cart button -->
                                        <a id="added_to_cart_btn_top_course<?php echo $top_course['id']; ?>" class="purchase-btn align-items-center me-auto <?php if(!in_array($top_course['id'], $cart_items)) echo 'd-hidden'; ?>" href="javascript:void(0)" onclick="actionTo('<?php echo site_url('home/handle_cart_items/' . $top_course['id'].'/top_course'); ?>');">
                                            <i class="fas fa-minus me-2"></i> <?php echo get_phrase('إزالة من سلة'); ?>
                                        </a>
                                        <a id="add_to_cart_btn_top_course<?php echo $top_course['id']; ?>" class="purchase-btn align-items-center me-auto <?php if(in_array($top_course['id'], $cart_items)) echo 'd-hidden'; ?>" href="javascript:void(0)" onclick="actionTo('<?php echo site_url('home/handle_cart_items/' . $top_course['id'].'/top_course'); ?>'); ">
                                            <i class="fas fa-plus me-2"></i> <?php echo get_phrase('أضف إلى السلة'); ?>
                                        </a>
                                        <!-- Cart button ended-->
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <script>
                                $(document).ready(function(){
                                    $('#top_course_<?php echo $top_course['id']; ?>').webuiPopover({
                                        url:'#top_course_feature_<?php echo $top_course['id']; ?>',
                                        trigger:'hover',
                                        animation:'pop',
                                        cache:false,
                                        multi:true,
                                        direction:'rtl', 
                                        placement:'horizontal',
                                    });
                                });
                            </script>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!---------- Top courses Section End --------------->
<?php endif; ?>

<?php if(get_frontend_settings('top_category_section') == 1): ?>
<!---------- Top Categories Start ------------->
<section class="top-categories pb-100 pt-0">
    <div class="container">
        <div class="row wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="500" data-wow-delay="400">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h1 class="text-center f-36"><?php echo site_phrase('top_categories'); ?></h1>
                <p class="text-center mt-4"><?php echo site_phrase('These_are_the_most_popular_courses_among_Listen_Courses_learners_worldwide')?></p>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <div class="category-product mt-2 wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="500">
            <div class="row justify-content-center">
                <?php $top_10_categories = $this->crud_model->get_top_categories(12, 'sub_category_id'); ?>
                <?php foreach($top_10_categories as $top_10_category): ?>
                <?php $category_details = $this->crud_model->get_category_details_by_id($top_10_category['sub_category_id'])->row_array(); ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 wow  animate__animated animate__fadeIn" data-wow-duration="1000" data-wow-delay="600">
                        <a href="<?php echo site_url('home/courses?category='.$category_details['slug']); ?>" class="category-product-body position-relative eCategory d-flex">
                        <?php
                            // Generate random colors
                            $textColor = '#' . rand(100000, 999999);
                            // $bgColor = '#' . rand(100000, 999999);
                            ?>
                             <?php if($category_details['sub_category_thumbnail']):?>
                                <div class="cate-image">
                                   <img src="<?php echo base_url('uploads/thumbnails/category_thumbnails/' .$category_details['sub_category_thumbnail']); ?>" alt="">
                                 </div>
                               <?php else:?>
                                <div class="cate-icon"  style="color: <?php echo $textColor; ?>;">
                                    <i class="<?php echo $category_details['font_awesome_class']; ?>"></i>
                                </div>
                             <?php endif;?>
                          
                            <!-- <span class="category-hide-icon"><i class="fa-solid fa-angle-right"></i></span> -->
                            <div class="eText">
                                 <h5 class="pt-0"> <?php echo $category_details['name']; ?></h5>
                                 <p class="hide-cat-text"><?php echo $top_10_category['course_number'].' '.site_phrase('courses'); ?></p>
                            </div>
                         </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!---------- Top Categories end ------------->
<?php endif; ?>



<?php if(get_frontend_settings('upcoming_course_section') == 1): ?>
<!-- Start Upcoming Courses -->
<?php $upcoming_courses = $this->db->order_by('id', 'desc')->limit(6)->get_where('course', ['status' => 'upcoming']); ?>
<?php if($upcoming_courses->num_rows() > 0): ?>
    <section class="pb-100 eUpcomingCourse ">
      <div class="container">
        <div class="row mb-4 wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="500" data-wow-delay="300">
            <div class="col-lg-12">
                <div class="title-one text-center">
                    <h4 class="title"><?php echo get_phrase('Explore our upcoming courses'); ?></h4>
                    <p><?php echo get_phrase('Discover a world of learning opportunities through our upcoming courses') ?></p>
                </div>
            </div>
            
        </div>
        <div class="row wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="500" data-wow-delay="500">
          <div class="col-lg-12">
            <!-- Items -->
            <div class="row g-3">
              <?php
                foreach($upcoming_courses->result_array() as $upcoming_course):
                    $instructor_details = $this->user_model->get_all_user($upcoming_course['creator'])->row_array();
                    $course_duration = $this->crud_model->get_total_duration_of_lesson_by_course_id($upcoming_course['id']);
                    $الدروس = $this->crud_model->get_الدروس('course', $upcoming_course['id']);
                ?>
                <?php 
                        $image_url = $upcoming_course['upcoming_image_thumbnail'] 
                            ? 'uploads/thumbnails/upcoming_thumbnails/' . $upcoming_course['upcoming_image_thumbnail'] 
                            : 'uploads/thumbnails/course_thumbnails/placeholder.png';
                    ?>
                <div class="col-lg-4 col-md-6 col-sm-6    " data-wow-duration="500" data-wow-delay="300">
                  <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($upcoming_course['title'])) . '/' . $upcoming_course['id']); ?>" id="top_course_<?php echo $upcoming_course['id']; ?>" class="course-item-one" style="background: url('<?php echo $image_url; ?>') no-repeat center center; background-size: cover;">
                       <div class="ePosition">
                            <div class="eImage d-flex">
                                <span class="px-3"><?php 
                                echo $this->db->where('id', $upcoming_course['sub_category_id'])->get('category')->row('name'); 
                                ?></span>
                            </div>
                       </div>
                       <div class="content"> 
                            <img loading="lazy" src="<?php echo $this->user_model->get_user_image_url($instructor_details['id']); ?>" alt="" />
                          <h4 class="title pb-0"><?php echo $upcoming_course['title']; ?></h4>
                          <p class="info ellipsis-line-2 fw-400">
                          <?php if($upcoming_course['publish_date']) echo get_phrase('Release On').' : '.date('j', strtotime($upcoming_course['publish_date'])).' '.get_phrase(date('F', strtotime($upcoming_course['publish_date']))).' '.date('Y', strtotime($upcoming_course['publish_date'])); ?>
                        </p>

                       </div>
                  </a>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php endif; ?>
<!-- End Upcoming Courses -->
<?php endif; ?>


<?php if(get_frontend_settings('latest_course_section') == 1): ?>
<!---------- Latest courses Section start --------------->
<section class="Ecourse courses grid-view-body pb-100 wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="500" data-wow-delay="300">
    <div class="container">
        <h1 class="text-center f-36 pt-0"><span><?php echo site_phrase('top') . ' 10 ' . site_phrase('latest_courses'); ?></span></h1>
        <p class="text-center mb-30"><?php echo site_phrase('These_are_the_most_latest_courses_among_Listen_Courses_learners_worldwide')?></p>
        <div class="courses-card">
            <div class="course-group-slider ">
                <?php
                $latest_courses = $this->crud_model->get_latest_10_course();
                foreach ($latest_courses as $latest_course) :
                    $الدروس = $this->crud_model->get_الدروس('course', $latest_course['id']);
                    $instructor_details = $this->user_model->get_all_user($latest_course['creator'])->row_array();
                    $course_duration = $this->crud_model->get_total_duration_of_lesson_by_course_id($latest_course['id']);
                    $total_rating =  $this->crud_model->get_ratings('course', $latest_course['id'], true)->row()->rating;
                    $number_of_ratings = $this->crud_model->get_ratings('course', $latest_course['id'])->num_rows();
                    if ($number_of_ratings > 0) {
                        $average_ceil_rating = ceil($total_rating / $number_of_ratings);
                    } else {
                        $average_ceil_rating = 0;
                    }
                    ?>
                    <div class="single-popup-course epopCourse position-relative">
                        <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($latest_course['title'])) . '/' . $latest_course['id']); ?>" id="latest_course_<?php echo $latest_course['id']; ?>" class="checkPropagation courses-card-body">
                            <div class="courses-card-image">
                                <img loading="lazy" src="<?php echo $this->crud_model->get_course_thumbnail_url($latest_course['id']); ?>">
                                <div class="courses-icon <?php if(in_array($latest_course['id'], $my_wishlist_items)) echo 'red-heart'; ?>" id="coursesWishlistIconLatestCourse<?php echo $latest_course['id']; ?>">
                                    <i class="fa-solid fa-heart checkPropagation" onclick="actionTo('<?php echo site_url('home/toggleWishlistItems/'.$latest_course['id'].'/LatestCourse'); ?>')"></i>
                                </div>
                                <div class="courses-card-image-text">
                                    <h3><?php echo get_phrase($latest_course['level']); ?></h3>
                                </div> 
                            </div>
                            <div class="courses-text">
                                <h5 class="mb-2"><?php echo $latest_course['title']; ?></h5>
                                <div class="review-icon">
                                    <div class="review-icon-star align-items-center">
                                        <p><i class="fa-solid fa-star <?php if($number_of_ratings > 0) echo 'filled'; ?>"></i></p>
                                        <p class="mr-5px"><?php echo $average_ceil_rating; ?></p>
                                        <p>(<?php echo $number_of_ratings; ?> <?php echo get_phrase('Reviews') ?>)</p>
                                    </div>
                                    <div class="review-btn d-flex align-items-center">
                                       <span class="compare-img echecks checkPropagation" data-bs-toggle="tooltip" data-bs-title="<?php echo site_phrase('Compare')?>" onclick="redirectTo('<?php echo base_url('home/compare?course-1='.slugify($latest_course['title']).'&course-id-1='.$latest_course['id']); ?>');">
                                       <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M13.6134 8.14665C13.3401 8.14665 13.1134 7.91998 13.1134 7.64665V5.43335C13.1134 4.60668 12.4401 3.93335 11.6134 3.93335H2.38672C2.11339 3.93335 1.88672 3.70668 1.88672 3.43335C1.88672 3.16002 2.11339 2.93335 2.38672 2.93335H11.6134C12.9934 2.93335 14.1134 4.05335 14.1134 5.43335V7.64665C14.1134 7.92665 13.8867 8.14665 13.6134 8.14665Z" fill="#0D0C23"/>
                                        <path d="M4.49339 6.04665C4.36672 6.04665 4.24006 5.99996 4.14006 5.89996L2.03339 3.79332C1.94005 3.69998 1.88672 3.5733 1.88672 3.43996C1.88672 3.30663 1.94005 3.17998 2.03339 3.08665L4.14006 0.979961C4.33339 0.786628 4.65339 0.786628 4.84672 0.979961C5.04005 1.17329 5.04005 1.49333 4.84672 1.68667L3.0934 3.43996L4.84672 5.1933C5.04005 5.38663 5.04005 5.70663 4.84672 5.89996C4.74672 5.9933 4.62005 6.04665 4.49339 6.04665Z" fill="#0D0C23"/>
                                        <path d="M13.6134 13.06H4.38672C3.00672 13.06 1.88672 11.94 1.88672 10.56V8.34668C1.88672 8.07335 2.11339 7.84668 2.38672 7.84668C2.66005 7.84668 2.88672 8.07335 2.88672 8.34668V10.56C2.88672 11.3867 3.56005 12.06 4.38672 12.06H13.6134C13.8867 12.06 14.1134 12.2867 14.1134 12.56C14.1134 12.8334 13.8867 13.06 13.6134 13.06Z" fill="#0D0C23"/>
                                        <path d="M11.5068 15.1666C11.3801 15.1666 11.2535 15.12 11.1535 15.02C10.9601 14.8267 10.9601 14.5066 11.1535 14.3133L12.9068 12.56L11.1535 10.8067C10.9601 10.6133 10.9601 10.2933 11.1535 10.1C11.3468 9.90665 11.6668 9.90665 11.8601 10.1L13.9668 12.2066C14.0601 12.3 14.1135 12.4267 14.1135 12.56C14.1135 12.6933 14.0601 12.82 13.9668 12.9133L11.8601 15.02C11.7668 15.12 11.6401 15.1666 11.5068 15.1666Z" fill="#0D0C23"/>
                                        </svg>
                                        </span>
                                    </div>
                                </div>
                                <div class="duration-time">
                                    <?php if($course_duration): ?>
                                    <p class="m-0"> 
                                        <i class="fa-regular fa-clock p-0 text-15px"></i> <?php echo $course_duration; ?></p>
                                    <?php endif; ?>
                                </div>
                                <div class="courses-price-border">
                                    <div class="courses-price">
                                        <div class="courses-price-left">
                                            <?php if($latest_course['is_free_course']): ?>
                                                <h5><?php echo get_phrase('Free'); ?></h5>
                                            <?php elseif($latest_course['discount_flag']): ?>
                                                <h5><?php echo currency($latest_course['discounted_price']); ?></h5>
                                                <p class="mt-1"><del><?php echo currency($latest_course['price']); ?></del></p>
                                            <?php else: ?>
                                                <h5><?php echo currency($latest_course['price']); ?></h5>
                                            <?php endif; ?>
                                        </div>
                                        <div class="courses-price-right ">
                                            <?php if(is_purchased($latest_course['id'])): ?>
                                                <span class="enrollBtn checkPropagation" onclick="redirectTo('<?php echo site_url('home/lesson/'.slugify($latest_course['title']).'/'.$latest_course['id']) ?>');"><i class="far fa-play-circle text-white"></i> <?php echo get_phrase('ابدأ الآن'); ?></span>
                                            <?php else: ?>
                                                <span class="enrollBtn"><?php echo site_phrase('سجل الآن')?></span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </a>




                        <div id="latest_course_feature_<?php echo $latest_course['id']; ?>" class="course-popover-content">
                            <?php if ($latest_course['last_modified'] == "") : ?>
                                <p class="last-update"><?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $latest_course['date_added']); ?></p>
                            <?php else : ?>
                                <p class="last-update"><?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $latest_course['last_modified']); ?></p>
                            <?php endif; ?>
                            <div class="course-title">
                                 <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($latest_course['title'])) . '/' . $latest_course['id']); ?>"><?php echo $latest_course['title']; ?></a>
                            </div>
                            <div class="course-meta">
                                <?php if ($latest_course['course_type'] == 'general') : ?>
                                    <span class="">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.97999 15.1666C4.03332 15.1666 0.813324 11.9533 0.813324 7.99998C0.813324 4.04665 4.03332 0.833313 7.97999 0.833313C11.9267 0.833313 15.1467 4.04665 15.1467 7.99998C15.1467 11.9533 11.9333 15.1666 7.97999 15.1666ZM7.97999 1.83331C4.57999 1.83331 1.81332 4.59998 1.81332 7.99998C1.81332 11.4 4.57999 14.1666 7.97999 14.1666C11.38 14.1666 14.1467 11.4 14.1467 7.99998C14.1467 4.59998 11.38 1.83331 7.97999 1.83331Z" fill="#AAAFB6"/>
                                    <path d="M7.03999 11.3267C6.74666 11.3267 6.46666 11.2533 6.21999 11.1133C5.64666 10.78 5.32666 10.1267 5.32666 9.27333V7.04C5.32666 6.18666 5.63999 5.53333 6.21333 5.2C6.78666 4.86666 7.51333 4.92 8.25333 5.34666L10.1867 6.46C10.9267 6.88666 11.3333 7.48666 11.3333 8.15333C11.3333 8.81333 10.9267 9.42 10.1867 9.84666L8.25333 10.96C7.83999 11.2067 7.41999 11.3267 7.03999 11.3267ZM7.03999 5.98C6.91999 5.98 6.80666 6.00666 6.71999 6.06C6.46666 6.20666 6.32666 6.56 6.32666 7.04V9.27333C6.32666 9.74666 6.46666 10.1067 6.71999 10.2467C6.96666 10.3933 7.34666 10.3333 7.75999 10.1L9.69333 8.98666C10.1067 8.74666 10.34 8.44666 10.34 8.16C10.34 7.87333 10.1 7.57333 9.69333 7.33333L7.75999 6.22C7.49333 6.06 7.24666 5.98 7.03999 5.98Z" fill="#AAAFB6"/>
                                    </svg>

                                        <?php echo $this->crud_model->get_الدروس('course', $latest_course['id'])->num_rows() . ' ' . site_phrase('الدروس'); ?>
                                    </span>
                                    <?php if($course_duration): ?>
                                        <span class="">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.99998 15.1666C4.04665 15.1666 0.833313 11.9533 0.833313 7.99998C0.833313 4.04665 4.04665 0.833313 7.99998 0.833313C11.9533 0.833313 15.1666 4.04665 15.1666 7.99998C15.1666 11.9533 11.9533 15.1666 7.99998 15.1666ZM7.99998 1.83331C4.59998 1.83331 1.83331 4.59998 1.83331 7.99998C1.83331 11.4 4.59998 14.1666 7.99998 14.1666C11.4 14.1666 14.1666 11.4 14.1666 7.99998C14.1666 4.59998 11.4 1.83331 7.99998 1.83331Z" fill="#AAAFB6"/>
                                            <path d="M10.4733 10.62C10.3867 10.62 10.3 10.6 10.22 10.5467L8.15334 9.31332C7.64001 9.00665 7.26001 8.33332 7.26001 7.73999V5.00665C7.26001 4.73332 7.48668 4.50665 7.76001 4.50665C8.03334 4.50665 8.26001 4.73332 8.26001 5.00665V7.73999C8.26001 7.97999 8.46001 8.33332 8.66668 8.45332L10.7333 9.68665C10.9733 9.82665 11.0467 10.1333 10.9067 10.3733C10.8067 10.5333 10.64 10.62 10.4733 10.62Z" fill="#AAAFB6"/>
                                            </svg>
                                            <?php echo $course_duration; ?>
                                        </span>
                                    <?php endif; ?>
                                <?php elseif ($latest_course['course_type'] == 'h5p') : ?>
                                    <span class="badge bg-light"><?= site_phrase('h5p_course'); ?></span>
                                <?php elseif ($latest_course['course_type'] == 'scorm') : ?>
                                    <span class="badge bg-light"><?= site_phrase('scorm_course'); ?></span>
                                <?php endif; ?>
                                <span class="">
                                 <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.00001 15.1666C4.04668 15.1666 0.833344 11.9533 0.833344 7.99998C0.833344 4.04665 4.04668 0.833313 8.00001 0.833313C11.9533 0.833313 15.1667 4.04665 15.1667 7.99998C15.1667 11.9533 11.9533 15.1666 8.00001 15.1666ZM8.00001 1.83331C4.60001 1.83331 1.83334 4.59998 1.83334 7.99998C1.83334 11.4 4.60001 14.1666 8.00001 14.1666C11.4 14.1666 14.1667 11.4 14.1667 7.99998C14.1667 4.59998 11.4 1.83331 8.00001 1.83331Z" fill="#AAAFB6"/>
                                    <path d="M5.99341 10.4133C4.66007 10.4133 3.58008 9.33333 3.58008 8C3.58008 6.66667 4.66007 5.58667 5.99341 5.58667C6.58008 5.58667 7.14008 5.80002 7.58675 6.18669C7.79342 6.36669 7.81342 6.68668 7.63342 6.89335C7.45342 7.10002 7.13342 7.11998 6.92676 6.93998C6.66676 6.71332 6.34008 6.58667 5.99341 6.58667C5.21341 6.58667 4.58008 7.22 4.58008 8C4.58008 8.78 5.21341 9.41333 5.99341 9.41333C6.33341 9.41333 6.66676 9.28668 6.92676 9.06002C7.13342 8.88002 7.44676 8.89998 7.63342 9.10665C7.81342 9.31332 7.79342 9.63331 7.58675 9.81331C7.14008 10.2 6.57341 10.4133 5.99341 10.4133Z" fill="#AAAFB6"/>
                                    <path d="M10.6601 10.4133C9.32673 10.4133 8.24673 9.33333 8.24673 8C8.24673 6.66667 9.32673 5.58667 10.6601 5.58667C11.2467 5.58667 11.8067 5.80002 12.2534 6.18669C12.4601 6.36669 12.4801 6.68668 12.3001 6.89335C12.1201 7.10002 11.8001 7.11998 11.5934 6.93998C11.3334 6.71332 11.0067 6.58667 10.6601 6.58667C9.88006 6.58667 9.24673 7.22 9.24673 8C9.24673 8.78 9.88006 9.41333 10.6601 9.41333C11.0001 9.41333 11.3334 9.28668 11.5934 9.06002C11.8001 8.88002 12.1134 8.89998 12.3001 9.10665C12.4801 9.31332 12.4601 9.63331 12.2534 9.81331C11.8067 10.2 11.2401 10.4133 10.6601 10.4133Z" fill="#AAAFB6"/>
                                    </svg>
                                <?php echo ucfirst($latest_course['language']); ?></span>
                             </div>
                           
                            <h6 class="text-white text-14px outCome"><?php echo get_phrase('Outcomes') ?>:</h6>
                            <ul class="will-learn">
                                <?php 
                                $outcomes = json_decode($latest_course['outcomes']);
                                $count = 0;
                                foreach ($outcomes as $outcome) : 
                                    $count++;
                                ?>
                                    <li class="outcome-item <?php echo ($count > 3) ? 'hidden' : ''; ?>">
                                        <?php echo $outcome; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>

                            <button class="view-more-btn" 
                                    style="display: <?php echo (count($outcomes) > 3) ? 'inline-block' : 'none'; ?>">
                                <?php echo site_phrase('View More') ?>
                            </button>
                            <div class="popover-btns">
                                <?php $cart_items = $this->session->userdata('cart_items'); ?>
                                <?php if(is_purchased($latest_course['id'])): ?>
                                    <a href="<?php echo site_url('home/lesson/'.slugify($latest_course['title']).'/'.$latest_course['id']) ?>" class="purchase-btn d-flex align-items-center  me-auto"><i class="far fa-play-circle me-2"></i> <?php echo get_phrase('ابدأ الآن'); ?></a>
                                    <?php if ($latest_course['is_free_course'] != 1) : ?>
                                        <button type="button" class="gift-btn ms-auto" title="<?php echo get_phrase('Gift someone else'); ?>" data-bs-toggle="tooltip" onclick="actionTo('<?php echo site_url('home/handle_buy_now/' . $latest_course['id'].'?gift=1'); ?>')"><i class="fas fa-gift"></i></button>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <?php if ($latest_course['is_free_course'] == 1) : ?>
                                        <a class="purchase-btn green_purchase ms-auto" href="<?php echo site_url('home/get_enrolled_to_free_course/' . $latest_course['id']); ?>"><?php echo get_phrase('سجل الآن'); ?></a>
                                    <?php else : ?>

                                        <!-- Cart button -->
                                        <a id="added_to_cart_btn_latest_course<?php echo $latest_course['id']; ?>" class="purchase-btn align-items-center me-auto <?php if(!in_array($latest_course['id'], $cart_items)) echo 'd-hidden'; ?>" href="javascript:void(0)" onclick="actionTo('<?php echo site_url('home/handle_cart_items/' . $latest_course['id'].'/latest_course'); ?>');">
                                            <i class="fas fa-minus me-2"></i> <?php echo get_phrase('إزالة من سلة'); ?>
                                        </a>
                                        <a id="add_to_cart_btn_latest_course<?php echo $latest_course['id']; ?>" class="purchase-btn align-items-center me-auto <?php if(in_array($latest_course['id'], $cart_items)) echo 'd-hidden'; ?>" href="javascript:void(0)" onclick="actionTo('<?php echo site_url('home/handle_cart_items/' . $latest_course['id'].'/latest_course'); ?>'); ">
                                            <i class="fas fa-plus me-2"></i> <?php echo get_phrase('أضف إلى السلة'); ?>
                                        </a>
                                        <!-- Cart button ended-->
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <script>
                                $(document).ready(function(){
                                    $('#latest_course_<?php echo $latest_course['id']; ?>').webuiPopover({
                                        url:'#latest_course_feature_<?php echo $latest_course['id']; ?>',
                                        trigger:'hover',
                                        animation:'pop',
                                        cache:false,
                                        multi:true,
                                        direction:'rtl', 
                                        placement:'horizontal',
                                    });
                                });
                            </script>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!---------- Latest courses Section End --------------->
<?php endif; ?>


<?php if(get_frontend_settings('top_instructor_section') == 1): ?>
<!---------  Expert Instructor Start ---------------->
<?php $top_instructor_ids = $this->crud_model->get_top_instructor(10); ?>
<?php if(count($top_instructor_ids) > 0): ?>
<section class="expert-instructor eExpert-instruction top-categories pt-0 pb-100 wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="400">
    <div class="container">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h1 class="text-center f-36 mt-0 pt-0"><?php echo get_phrase('مدربنا الخبير ') ?></h1>
                <p class="text-center mt-4 mb-30"><?php echo get_phrase('إنهم يخدمون عددًا كبيرًا من الطلاب على منصتنا بكفاءة') ?></p>
            </div>
            <div class="col-lg-3 "></div>
        </div>
        <div class="instructor-card eInstuctor">
            <div class="row justify-content-center">
            <?php foreach($top_instructor_ids as $top_instructor_id):
                    $top_instructor = $this->user_model->get_all_user($top_instructor_id['creator'])->row_array();
                    $social_links  = json_decode($top_instructor['social_links'], true);

                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 eLink" data-wow-duration="1000" data-wow-delay="600">
                        <a class="text-muted w-100 d-block" href="<?php echo site_url('home/instructor_page/'.$top_instructor['id']); ?>">
                            <div class="instructor-card-body nInstructor">
                                <div class="instructor-card-img mb-0">
                                    <img loading="lazy" src="<?php echo $this->user_model->get_user_image_url($top_instructor['id']); ?>">
                                </div>
                                <div class="instructor-card-text">
                                    <h3 class="text-center"><?php echo $top_instructor['first_name'].' '.$top_instructor['last_name']; ?></h3>
                                    <p class="ellipsis-line-2"><?php echo $top_instructor['title']; ?></p>
                                </div>
                            </div>
                        </a>
                        <div class="icon ">
                            <div class="icon-div-2">
                                <?php if(!empty($social_links['facebook'])): ?>
                                    <a href="<?php echo $social_links['facebook']; ?>" target="_blank">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_17_3531)">
                                                <path d="M17.4611 8C17.4611 3.58172 13.6998 0 9.06012 0C4.4204 0 0.65918 3.58172 0.65918 8C0.65918 11.993 3.73127 15.3027 7.74747 15.9028V10.3125H5.61442V8H7.74747V6.2375C7.74747 4.2325 9.00171 3.125 10.9206 3.125C11.8395 3.125 12.8012 3.28125 12.8012 3.28125V5.25H11.7419C10.6983 5.25 10.3728 5.86672 10.3728 6.5V8H12.7027L12.3302 10.3125H10.3728V15.9028C14.389 15.3027 17.4611 11.993 17.4611 8Z" fill="#fff"/>
                                            </g>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                                <?php if(!empty($social_links['twitter'])): ?>
                                    <a href="<?php echo $social_links['twitter']; ?>" target="_blank">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_17_3533)">
                                                <path d="M10.5475 6.77491L16.7427 0H15.2746L9.89534 5.88256L5.59894 0H0.643555L7.14055 8.89547L0.643555 16H2.11169L7.79233 9.78782L12.3296 16H17.285L10.5471 6.77491H10.5475ZM8.53668 8.97384L7.8784 8.08805L2.64068 1.03974H4.89566L9.12255 6.72795L9.78084 7.61374L15.2753 15.0075H13.0203L8.53668 8.97418V8.97384Z" fill="white"/>
                                            </g>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                                <?php if(!empty($social_links['linkedin'])): ?>
                                    <a href="<?php echo $social_links['linkedin']; ?>" target="_blank">
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_17_3536)">
                                                <path d="M16.0982 0H1.78049C1.09463 0 0.540039 0.515625 0.540039 1.15313V14.8438C0.540039 15.4813 1.09463 16 1.78049 16H16.0982C16.784 16 17.3419 15.4813 17.3419 14.8469V1.15313C17.3419 0.515625 16.784 0 16.0982 0ZM5.52481 13.6344H3.03079V5.99687H5.52481V13.6344ZM4.2778 4.95625C3.47709 4.95625 2.83061 4.34062 2.83061 3.58125C2.83061 2.82188 3.47709 2.20625 4.2778 2.20625C5.07523 2.20625 5.72171 2.82188 5.72171 3.58125C5.72171 4.3375 5.07523 4.95625 4.2778 4.95625ZM14.8577 13.6344H12.367V9.92188C12.367 9.0375 12.3506 7.89687 11.0707 7.89687C9.77451 7.89687 9.57761 8.8625 9.57761 9.85938V13.6344H7.09015V5.99687H9.47916V7.04063H9.51198C9.84342 6.44063 10.6573 5.80625 11.8682 5.80625C14.3917 5.80625 14.8577 7.3875 14.8577 9.44375V13.6344Z" fill="white"/>
                                            </g>
                                        </svg>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php endif; ?>


<?php if(get_frontend_settings('motivational_speech_section') == 1): ?>
<?php $motivational_speechs = json_decode(get_frontend_settings('motivational_speech'), true); ?>
<?php if(count($motivational_speechs) > 0): ?>
<!---------  Motivetional Speech Start ---------------->
<section class="expert-instructor top-categories pb-100 pt-0 ">
  <div class="container">
    <div class="row">
      <div class="col-lg-3"></div>
      <div class="col-lg-6 wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="500">
        <h1 class="text-center f-36 mt-0 pt-0"><?php echo get_phrase('Think more clearly'); ?></h1>
        <p class="text-center mt-4 mb-30"><?php echo get_phrase('Gather your thoughts, and make your decisions clearly') ?></p>
      </div>
      <div class="col-lg-3"></div>
    </div>
    <ul class="speech-items">
        <?php $counter = 0; ?>
        <?php foreach($motivational_speechs as $key => $motivational_speech): ?>
        <?php $counter = $counter+1; ?>
        <li class="e_border">
            <div class="Espeech-item">
                <div class="row  wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="700">
                    
                <div class="col-md-1 col-2">
                 <div class="speech-item-content Nspeech">
                            <p class="no"><?php echo $counter; ?></p>
                        </div>
                </div>
                    <div class="col-lg-8 col-md-6 col-12  order-2 order-md-1">
                        <div class="speech-item-content Nspeech2">
                            <div class="inner">
                                <h4 class="title">
                                    <?php echo $motivational_speech['title']; ?>
                                </h4>
                                <p class="info">
                                    <?php echo nl2br($motivational_speech['description']); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-10 order-1 order-md-1">
                        <div class="speech-item-img">
                            <img loading="lazy" src="<?php echo site_url('uploads/system/motivations/'.$motivational_speech['image']) ?>" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
  </div>
</section>
<!---------  Motivetional Speech end ---------------->
<?php endif; ?>
<?php endif; ?>

<!-- Start Review Section -->
<?php if(get_frontend_settings('review_section') == 1): ?>
<section class="expert-instructor top-categories pb-100 pt-0 ">
    <div class="container">
       <div class="row">
            <div class="col-lg-3"></div>
                <div class="col-lg-6 wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="500">
                    <h1 class="text-center f-36 mt-0 pt-0"><?php echo get_phrase('What the people Thinks About Us'); ?></h1>
                    <p class="text-center mt-4 mb-30"><?php echo get_phrase('It highlights feedback and testimonials from users, reflecting their experiences and satisfaction.') ?></p>
                </div>
                <div class="col-lg-3"></div>
            </div>
         <div class="course-group-slider  wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="500">
                 <?php 
                    $reviews = $this->db->where('ratable_type', NULL)->where('ratable_id', NULL)->get('rating')->result();
                    foreach ($reviews as $review): 
                        $user_data = $this->db->get_where('users', ['id' => $review->user_id])->row_array();
                    ?>
                    <div class="elegant-testimonial-slide">
                        <div class="ele-testimonial-profile-area d-flex">
                            <div class="profile">
                                <img src="<?php echo $this->user_model->get_user_image_url($user_data['id']); ?>" alt="">
                            </div>
                            <div class="ele-testimonial-profile-name">
                                <h6 class="name"><?php echo $user_data['first_name'].' '.$user_data['last_name']; ?></h6>
                                <p class="time"><?php echo date('h:i A', $review->date_added); ?></p>
                                <ul class="rating d-flex align-items-center">
                                    <?php 
                                    for($i=1; $i<=5; $i++):
                                        if($i <= $review->rating):
                                    ?>
                                        <li><i class="fas fa-star"></i></li>
                                    <?php else: ?>
                                        <li class="thin"><i class="far fa-star"></i></li>
                                    <?php 
                                        endif;
                                    endfor;
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <p class="review fw-400"><?php echo $review->review; ?></p>
                    </div>
                    <?php endforeach; ?> 
          </div>
    </div>
</section>
<?php endif; ?>
<!-- End Review Section -->

<?php if(get_frontend_settings('faq_section') == 1): ?>
<?php $website_faqs = json_decode(get_frontend_settings('website_faqs'), true); ?>
<?php if(count($website_faqs) > 0): ?>
<!---------- Questions Section Start  -------------->
<section class="faq eFaq top-categories pb-100 wow pt-0  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="500">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <h1 class="text-center f-36 mt-0 pt-0"><?php echo get_phrase('الأسئلة المتكررةs') ?></h1>
                <p class="text-center mt-4 mb-24"><?php echo get_phrase('Have something to know?') ?> <?php echo get_phrase('Check here if you have any questions about us.') ?></p>
            </div>
            <div class="col-lg-2"></div>
        </div>
        <div class="row">
            <div class="col-md-12" data-wow-duration="1000" data-wow-delay="700">
                <div class="faq-accrodion mb-0">
                    <div class="accordion" id="accordionFaq">
                        <?php foreach($website_faqs as $key => $faq): ?>
                            <?php if($key > 4) break; ?>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="<?php echo 'faqItemHeading'.$key; ?>">
                                <button class="accordion-button <?php if($key != 0) echo 'collapsed'; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo 'faqItempanel'.$key; ?>" aria-expanded="<?php echo $key != 0 ? 'false' : 'true'; ?>true" aria-controls="<?php echo 'faqItempanel'.$key; ?>">
                                    <?php echo $faq['question']; ?>
                                </button>
                              </h2>
                              <div id="<?php echo 'faqItempanel'.$key; ?>" class="accordion-collapse collapse <?php echo ($key === 0) ? ' show' : ''; ?>" aria-labelledby="<?php echo 'faqItemHeading'.$key; ?>"  data-bs-parent="#accordionFaq">
                                <div class="accordion-body">
                                    <p><?php echo nl2br($faq['answer']); ?></p>
                                </div>
                              </div>
                            </div>
                        <?php endforeach; ?>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!---------- Questions Section End  -------------->
<?php endif; ?>
<?php endif; ?>

<?php if (get_settings('allow_instructor') == 1) : ?>
<!-- Become A instructor Section -->
 <!-- <section class="becomeInstructor pb-100 wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="500" >
    <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7  wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="500" data-wow-duration="1000" data-wow-delay="600">
                    <div class="ePromotion">
                    <h4><span><?php echo site_phrase('Learn')?></span> <?php echo site_phrase('new skills when and where you like.')?></h4>
                        <p><?php echo site_phrase('Discover a world of learning opportunities through our upcoming courses, where industry experts.')?></p>
                        <div class="eBtn">
                        <?php if (get_settings('allow_instructor') == 1) : ?>
                            <?php if($this->session->userdata('user_id')): ?>
                                <a class="btn" href="<?php echo site_url('user/become_an_instructor'); ?>"><?php echo site_phrase('Become an Instructor'); ?></a>
                                <?php else: ?>
                                <a  class="btn" href="<?php echo site_url('sign_up?instructor=yes'); ?>"><?php echo site_phrase('Become an Instructor'); ?></a>
                            <?php endif; ?>
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="600">
                    <div class="ePormotion_right">
                        <img src="<?php echo base_url('assets/frontend/default-new/image/instractorN.png')?>">
                    </div>
                </div>
            </div>
    </div>
 </section> -->
<!-- Become A instructor Section -->
<?php endif; ?>

<?php if(get_frontend_settings('blog_visibility_on_the_home_page') == 1): ?>
<!------------- Blog Section Start ------------>
<?php $latest_blogs = $this->crud_model->get_latest_blogs(1000); ?>
<?php if($latest_blogs->num_rows() > 0): ?>
<section class="courses blog pb-100 wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="500">
    <div class="container">
        <h1 class="text-center f-36 pt-0"><span><?php echo site_phrase('قم بزيارة أحدث مدوناتنا')?></span></h1>
        <p class="text-center mb-40"><?php echo site_phrase('قم بزيارة مقالاتنا القيمة للحصول على مزيد من المعلومات.')?>

        <div class="courses-card">
            <div class="blog-scroll-wrapper position-relative">
                <button class="btn btn-sm blog-prev" style="position:absolute;left:0;top:40%;z-index:10;border-radius:50%;">&larr;</button>
                <button class="btn btn-sm blog-next" style="position:absolute;right:0;top:40%;z-index:10;border-radius:50%;">&rarr;</button>

                <style>
                    /* Blog scroll: show 3 items on large, 2 on md, 1 on small */
                    .blog-scroll{scroll-behavior:smooth;gap:18px;padding:12px 36px;}
                    .blog-scroll .blog-item{flex:0 0 calc((100% - 36px) / 3);max-width:calc((100% - 36px) / 3);box-sizing:border-box}
                    @media (max-width:991px){
                        .blog-scroll .blog-item{flex:0 0 calc((100% - 18px) / 2);max-width:calc((100% - 18px) / 2)}
                    }
                    @media (max-width:575px){
                        .blog-scroll{padding:12px}
                        .blog-scroll .blog-item{flex:0 0 100%;max-width:100%}
                    }
                </style>

                <div class="blog-scroll d-flex overflow-auto">
                    <?php foreach($latest_blogs->result_array() as $latest_blog):
                        $user_details = $this->user_model->get_all_user($latest_blog['user_id'])->row_array();
                        $blog_category = $this->crud_model->get_blog_categories($latest_blog['blog_category_id'])->row_array(); ?>

                        <div class="blog-item" style="min-width:320px;flex:0 0 auto;">
                            <a href="<?php echo site_url('blog/details/'.slugify($latest_blog['title']).'/'.$latest_blog['blog_id']); ?>" class="courses-card-body blogCard">
                                <?php $blog_thumbnail = 'uploads/blog/thumbnail/'.$latest_blog['thumbnail'];
                                   if(!file_exists($blog_thumbnail) || !is_file($blog_thumbnail)):
                                       $blog_thumbnail = base_url('uploads/blog/thumbnail/placeholder.png');
                                  endif; ?>
                                <div class="courses-card-image">
                                    <div class="courses-card-image ">
                                     <img loading="lazy" src="<?php echo $blog_thumbnail; ?>">
                                    </div>
                                    <div class="courses-card-image-text position-absolute">
                                        <h3><?php echo $blog_category['title']; ?></h3>
                                    </div>
                                </div>
                                <div class="courses-text">
                                    <h5><?php echo $latest_blog['title']; ?></h5>
                                    <p class="ellipsis-line-2"><?php echo ellipsis(strip_tags(htmlspecialchars_decode_($latest_blog['description'])), 100); ?></p>
                                    <div class="courses-price-border">
                                        <div class="courses-price">
                                            <div class="courses-price-left">
                                                <img loading="lazy" class="rounded-circle" src="<?php echo $this->user_model->get_user_image_url($user_details['id']); ?>">
                                                <div class="designation">
                                                  <h5 class="mb-0"><?php echo $user_details['first_name'].' '.$user_details['last_name']; ?></h5>
                                                  <p><?php echo get_past_time($latest_blog['added_date']); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>

    <script>
        (function(){
            var wrapper = document.querySelector('.blog-scroll');
            if(!wrapper) return;
            var prev = document.querySelector('.blog-prev');
            var next = document.querySelector('.blog-next');
            // scroll by one "page" (3 items on large screens, 2 on md, 1 on small)
            function getStep(){
                var item = wrapper.querySelector('.blog-item');
                if(!item) return wrapper.clientWidth;
                return item.getBoundingClientRect().width + 18; // item width + gap
            }
            prev && prev.addEventListener('click', function(){ wrapper.scrollBy({left: -getStep(), behavior:'smooth'}); });
            next && next.addEventListener('click', function(){ wrapper.scrollBy({left: getStep(), behavior:'smooth'}); });
        })();
    </script>

</section>
<?php endif; ?>
<?php endif; ?>

<?php if(get_frontend_settings('promotional_section') == 1): ?>
<!------------- Become Students Section start --------->
<section class="student-creative-section py-5 pt-0 position-relative" style="background: linear-gradient(120deg, #f8fafc 60%, #e0e7ff 100%); overflow: hidden;">
    <div class="container">
        <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                        <div class="creative-card shadow-lg rounded-4 p-5 h-100 d-flex flex-column justify-content-center align-items-start position-relative animate__animated animate__fadeInLeft" style="min-height:320px; background: linear-gradient(135deg, #038261 80%, #fff 100%); overflow:hidden;">
                            <span style="position:absolute;top:-40px;right:-40px;width:120px;height:120px;background:rgba(3,130,97,0.18);border-radius:50%;z-index:1;"></span>
                            <span style="position:absolute;bottom:-30px;left:-30px;width:80px;height:80px;background:rgba(3,130,97,0.10);border-radius:50%;z-index:1;"></span>
                            <!-- صورة أطفال للبطاقة الأولى -->
                            <img src="<?php echo base_url('assets/frontend/default-new/image/student-1.png'); ?>" alt="أطفال يتعلمون" style="width:90px; position:absolute; top:10px; right:20px; z-index:2; border-radius:18px; box-shadow:0 4px 16px #03826122;">
                            <h2 class="mb-3 fw-bold" style="color:#fff;z-index:2;"><i class="fa-solid fa-graduation-cap me-2"></i><?php echo site_phrase('join_now_to_start_learning'); ?></h2>
                            <p class="mb-4" style="font-size:1.15rem; color:#e0f7ef;z-index:2;"><?php echo site_phrase('Learn from our quality instructors!')?></p>
                            <?php if(get_settings('public_signup') == 'enable'): ?>
                                <a href="<?php echo site_url('sign_up'); ?>" class="btn btn-lg btn-light px-4 py-2 rounded-pill shadow-sm" style="color:#038261; background:#fff; border:none;z-index:2;"><i class="fa-solid fa-arrow-right-to-bracket me-2"></i><?php echo site_phrase('get_started'); ?></a>
                            <?php endif;?>
                        </div>
                    </div>
            <?php if (get_settings('allow_instructor') == 1) : ?>
                    <div class="col-lg-5 col-md-6">
                        <div class="creative-card shadow-lg rounded-4 p-5 h-100 d-flex flex-column justify-content-center align-items-start position-relative animate__animated animate__fadeInRight" style="min-height:320px; background: linear-gradient(135deg, #fff 0%, #038261 90%); overflow:hidden;">
                            <span style="position:absolute;top:-40px;left:-40px;width:120px;height:120px;background:rgba(3,130,97,0.18);border-radius:50%;z-index:1;"></span>
                            <span style="position:absolute;bottom:-30px;right:-30px;width:80px;height:80px;background:rgba(3,130,97,0.10);border-radius:50%;z-index:1;"></span>
                            <!-- صورة أطفال للبطاقة الثانية -->
                            <img src="<?php echo base_url('assets/frontend/default-new/image/student-2.png'); ?>" alt="أطفال مع معلم" style="width:90px; position:absolute; top:10px; left:20px; z-index:2; border-radius:18px; box-shadow:0 4px 16px #03826122;">
                            <h2 class="mb-3 fw-bold" style="color:#fff;z-index:2;"><i class="fa-solid fa-chalkboard-user me-2"></i>انضم إلينا كـ معلم</h2>
                            <p class="mb-4" style="font-size:1.15rem; color:#e0f7ef;z-index:2;">علّم آلاف الطلاب واكسب المال</p>
                            <?php if(get_settings('public_signup') == 'enable'): ?>
                                <?php if($this->session->userdata('user_id')): ?>
                                    <a href="<?php echo site_url('user/become_an_instructor'); ?>" class="btn btn-lg btn-light px-4 py-2 rounded-pill shadow-sm" style="color:#038261; background:#fff; border:none;z-index:2;"><i class="fa-solid fa-user-plus me-2"></i><?php echo site_phrase('join_now'); ?></a>
                                <?php else: ?>
                                    <a href="<?php echo site_url('sign_up?instructor=yes'); ?>" class="btn btn-lg btn-light px-4 py-2 rounded-pill shadow-sm" style="color:#038261; background:#fff; border:none;z-index:2;"><i class="fa-solid fa-user-plus me-2"></i><?php echo site_phrase('join_now'); ?></a>
                                <?php endif; ?>
                            <?php endif;?>
                        </div>
                    </div>
            <?php endif; ?>
        </div>
        <!-- Decorative shapes -->
    <span style="position:absolute;left:0;top:0;width:120px;height:120px;background:#03826122;border-radius:50%;z-index:0;"></span>
        <span style="position:absolute;right:0;bottom:0;width:180px;height:180px;background:#22c55e22;border-radius:50%;z-index:0;"></span>
    </div>
</section>
<?php endif; ?>
<!------------- Become Students Section End --------->

<div class="py-4 w-100"></div>


