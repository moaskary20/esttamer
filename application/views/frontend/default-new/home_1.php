<style>
    /* Fix mobile view icons */
    .menu-offcanves i,
    .m-search-icon i,
    .m-cross-icon i,
    .btn-bar i {
        font-family: "Font Awesome 5 Free", "Font Awesome 5 Pro", "Font Awesome 6 Free", "Font Awesome 6 Pro", "FontAwesome" !important;
        font-weight: 900 !important;
        font-style: normal !important;
        display: inline-block !important;
        opacity: 1 !important;
        visibility: visible !important;
        text-rendering: auto !important;
        -webkit-font-smoothing: antialiased !important;
    }
    
    /* Fix mobile sidebar menu icons */
    .offcanvas i,
    .btn-toggle-list i,
    .btn-toggle i,
    .mobile-view-offcanves i,
    .offcanvas-body i {
        font-family: "Font Awesome 5 Free", "Font Awesome 5 Pro", "Font Awesome 6 Free", "Font Awesome 6 Pro", "FontAwesome" !important;
        font-weight: 900 !important;
        font-style: normal !important;
        display: inline-block !important;
        opacity: 1 !important;
        visibility: visible !important;
        text-rendering: auto !important;
        -webkit-font-smoothing: antialiased !important;
    }
    
    /* Fix Font Awesome Regular icons (far) */
    .offcanvas .far,
    .btn-toggle-list .far,
    .btn-toggle .far {
        font-weight: 400 !important;
    }
    
    /* Fix Font Awesome Brands icons (fab) */
    .offcanvas .fab,
    .btn-toggle-list .fab,
    .btn-toggle .fab {
        font-weight: 400 !important;
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
    
    /* New Banner Section Styles */
    .new-banner-section {
        width: 100%;
        position: relative;
        overflow: hidden;
    }
    
    .banner-main-content {
        width: 100%;
        position: relative;
        padding: 0;
        margin: 0;
    }
    
    .banner-image-fullwidth {
        width: 100%;
        height: auto;
        position: relative;
        overflow: hidden;
    }
    
    .banner-image-fullwidth img {
        width: 100%;
        height: auto;
        display: block;
        object-fit: cover;
    }
    
    .banner-features {
        background: #64f088;
        padding: 50px 0;
        position: relative;
        overflow: hidden;
    }
    
    .banner-features::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: 
            radial-gradient(circle at 20% 30%, rgba(2, 129, 97, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(101, 240, 137, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 50% 50%, rgba(255, 255, 255, 0.15) 0%, transparent 60%);
        pointer-events: none;
    }
    
    .banner-features::after {
        content: '';
        position: absolute;
        top: -30%;
        right: -5%;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(2, 129, 97, 0.1) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
    }
    
    .feature-card {
        display: flex;
        align-items: center;
        gap: 20px;
        padding: 30px;
        height: 100%;
        background: #ffffff;
        border-radius: 20px;
        border: 1px solid rgba(2, 129, 97, 0.1);
        transition: all 0.3s ease;
        position: relative;
        z-index: 1;
        box-shadow: 0 4px 15px rgba(2, 129, 97, 0.08);
    }
    
    .feature-card:hover {
        background: #ffffff;
        transform: translateY(-8px);
        box-shadow: 0 12px 35px rgba(2, 129, 97, 0.15);
        border-color: rgba(2, 129, 97, 0.2);
    }
    
    .feature-icon {
        width: 70px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #028161 0%, #65f089 100%);
        border-radius: 16px;
        color: #ffffff;
        flex-shrink: 0;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(2, 129, 97, 0.2);
    }
    
    .feature-card:hover .feature-icon {
        transform: scale(1.1) rotate(5deg);
        box-shadow: 0 6px 20px rgba(2, 129, 97, 0.3);
    }
    
    .feature-content h6 {
        font-size: 1.3rem;
        font-weight: 700;
        color: #1E293B;
        margin-bottom: 10px;
    }
    
    .feature-content p {
        font-size: 1rem;
        color: #6E798A;
        margin: 0;
        line-height: 1.6;
    }
    
    @media (max-width: 768px) {
        .feature-card {
            flex-direction: column;
            text-align: center;
        }
    }
    
    /* Start Learning Section Styles */
    .start-learning-section {
        background: #028161 !important;
        position: relative;
        overflow: visible !important;
        min-height: 400px;
        padding: 80px 0 !important;
        display: block !important;
        visibility: visible !important;
    }
    
    .start-learning-section .section-title .main-title {
        font-size: 2.5rem;
        font-weight: 800;
        color: #ffffff;
        margin-bottom: 15px;
    }
    
    .start-learning-section .title-divider {
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #20E3B2 0%, #29FFC6 100%);
        border-radius: 10px;
        margin-top: 10px;
    }
    
    /* Category Slider Styles */
    .category-slider-wrapper {
        position: relative;
        padding: 0 60px;
    }
    
    .category-slider-container {
        overflow: hidden;
        position: relative;
        width: 100%;
    }
    
    .category-slider {
        display: flex;
        transition: transform 0.5s ease;
        gap: 20px;
    }
    
    .category-slide {
        flex: 0 0 calc(25% - 15px);
        min-width: calc(25% - 15px);
        flex-shrink: 0;
    }
    
    @media (max-width: 991px) {
        .category-slide {
            flex: 0 0 calc(50% - 10px);
            min-width: calc(50% - 10px);
        }
    }
    
    @media (max-width: 575px) {
        .category-slide {
            flex: 0 0 100%;
            min-width: 100%;
        }
    }
    
    .category-slider-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(32, 227, 178, 0.9);
        border: none;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(32, 227, 178, 0.3);
    }
    
    .category-slider-nav:hover {
        background: rgba(32, 227, 178, 1);
        transform: translateY(-50%) scale(1.1);
        box-shadow: 0 6px 20px rgba(32, 227, 178, 0.4);
    }
    
    .category-prev-btn {
        left: 0;
    }
    
    .category-next-btn {
        right: 0;
    }
    
    @media (max-width: 767px) {
        .category-slider-wrapper {
            padding: 0 50px;
        }
        
        .category-slider-nav {
            width: 40px;
            height: 40px;
        }
    }
    
    .category-card-link {
        text-decoration: none;
        color: inherit;
        display: block;
        height: 100%;
    }
    
    .category-card-link:hover {
        text-decoration: none;
        color: inherit;
    }
    
    .category-card {
        background: #ffffff;
        border-radius: 20px;
        padding: 30px 20px;
        height: 100%;
        min-height: 350px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        position: relative;
        overflow: visible;
    }
    
    .category-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }
    
    .category-card-image {
        width: 100%;
        max-width: 200px;
        height: 200px;
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .category-card-image img {
        max-width: 100%;
        max-height: 100%;
        object-fit: contain;
        width: auto;
        height: auto;
    }
    
    .category-card-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 100%;
    }
    
    .category-card-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #1a1a1a;
        margin-bottom: 20px;
        line-height: 1.4;
    }
    
    .category-card-button {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: linear-gradient(90deg, #20E3B2 0%, #29FFC6 100%);
        color: #ffffff;
        padding: 12px 24px;
        border-radius: 30px;
        font-weight: 600;
        font-size: 1rem;
        transition: all 0.3s ease;
        margin-top: auto;
    }
    
    .category-card-button svg {
        width: 18px;
        height: 18px;
    }
    
    .category-card:hover .category-card-button {
        background: linear-gradient(90deg, #29FFC6 0%, #20E3B2 100%);
        transform: scale(1.05);
    }
    
    @media (max-width: 768px) {
        .start-learning-section .section-title .main-title {
            font-size: 2rem;
        }
        
        .category-card {
            padding: 25px 15px;
        }
        
        .category-card-image {
            max-width: 150px;
            height: 150px;
        }
        
        .category-card-title {
            font-size: 1.25rem;
        }
    }
    
    /* Review Testimonial Section Styles */
    .review-testimonial-section {
        background-color: #028161 !important;
        position: relative;
        overflow: hidden;
    }
    
    .testimonial-slider-wrapper {
        position: relative;
        max-width: 1200px;
        margin: 0 auto;
        overflow: hidden;
    }
    
    .testimonial-slider {
        position: relative;
        display: flex;
        gap: 20px;
        transition: transform 0.5s ease-in-out;
        width: 100%;
    }
    
    .testimonial-slide {
        flex: 0 0 calc(33.333% - 14px);
        min-width: 0;
        animation: fadeIn 0.5s ease-in-out;
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateX(20px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
    
    .testimonial-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        padding: 30px;
        text-align: center;
        border: 1px solid rgba(255, 255, 255, 0.2);
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .quote-icon {
        margin-bottom: 20px;
    }
    
    .testimonial-content {
        flex: 1;
    }
    
    .testimonial-text {
        color: #ffffff;
        font-size: 1rem;
        line-height: 1.7;
        margin-bottom: 25px;
        font-style: italic;
    }
    
    .testimonial-author {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
    }
    
    .author-image {
        width: 70px;
        height: 70px;
        border-radius: 50%;
        overflow: hidden;
        border: 3px solid rgba(255, 255, 255, 0.3);
    }
    
    .author-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .author-info {
        text-align: right;
    }
    
    .author-name {
        color: #ffffff;
        font-size: 1.2rem;
        font-weight: 700;
        margin-bottom: 5px;
    }
    
    .author-role {
        color: rgba(255, 255, 255, 0.8);
        font-size: 0.95rem;
        margin: 0;
    }
    
    .slider-nav {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        background: rgba(255, 255, 255, 0.2);
        border: none;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        z-index: 10;
    }
    
    .slider-nav:hover {
        background: rgba(255, 255, 255, 0.3);
        transform: translateY(-50%) scale(1.1);
    }
    
    .prev-btn {
        right: -70px;
    }
    
    .next-btn {
        left: -70px;
    }
    
    .slider-dots {
        display: none;
    }
    
    @media (max-width: 991px) {
        .prev-btn {
            right: 10px;
        }
        
        .next-btn {
            left: 10px;
        }
        
        .testimonial-slide {
            flex: 0 0 calc(50% - 10px);
        }
        
        .testimonial-card {
            padding: 25px 20px;
        }
        
        .testimonial-text {
            font-size: 0.95rem;
        }
    }
    
    @media (max-width: 768px) {
        .testimonial-slide {
            flex: 0 0 100%;
        }
        
        .testimonial-slider {
            gap: 15px;
        }
        
        .testimonial-card {
            padding: 25px 15px;
        }
        
        .author-image {
            width: 60px;
            height: 60px;
        }
        
        .author-name {
            font-size: 1rem;
        }
        
        .author-role {
            font-size: 0.85rem;
        }
        
        .testimonial-text {
            font-size: 0.9rem;
        }
    }
</style>


<!---------- Banner Section Start ---------------->
<section class="new-banner-section">
    <div class="banner-main-content">
        <div class="banner-image-fullwidth">
            <img loading="lazy" src="<?php echo base_url("uploads/system/" . get_current_banner('banner_image')); ?>" alt="Banner">
        </div>
    </div>
    
    <!-- Features Section -->
    <div class="banner-features">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 15V17M6 21H18C19.1046 21 20 20.1046 20 19V5C20 3.89543 19.1046 3 18 3H6C4.89543 3 4 3.89543 4 5V19C4 20.1046 4.89543 21 6 21ZM16 10H8M16 14H8M12 6H8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="feature-content">
                            <h6><?php echo site_phrase('Lifetime access'); ?></h6>
                            <p><?php echo site_phrase('learn_on_your_schedule'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 14L9 11L12 8M12 16L15 13L12 10M4 6H20M4 10H20M4 14H20M4 18H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="feature-content">
                            <h6><?php
                                echo $number_of_courses . ' ' . site_phrase('online_courses'); ?></h6>
                            <p><?php echo site_phrase('explore_a_variety_of_fresh_topics'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13M16 8L12 4M12 4L8 8M12 4V16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="feature-content">
                            <h6><?php echo site_phrase('expert_instruction'); ?></h6>
                            <p><?php echo site_phrase('find_the_right_course_for_you'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!---------- Banner Section End ---------------->


<!---------- Why Estamer Platform Section Start --------------->
<section class="why-estamer-section py-100 pt-50">
    <div class="container">
        <!-- Section Title -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2 class="main-title mb-3">لماذا منصة استمر؟</h2>
                    <div class="title-divider mx-auto"></div>
                </div>
            </div>
        </div>
        
        <!-- Features Grid -->
        <div class="row g-4 mb-5">
            <!-- Feature 1: Certified Trainers -->
            <div class="col-lg-6 col-md-6">
                <div class="why-feature-card">
                    <div class="feature-content">
                        <div class="feature-icon-wrapper mb-4">
                            <div class="feature-icon">
                                <i class="fas fa-user-graduate"></i>
                            </div>
                            <div class="icon-decoration"></div>
                        </div>
                        <h3 class="feature-title mb-3">مدربون و أخصائيون معتمدون</h3>
                        <p class="feature-description">
                            مدربون أصحاب خبرات أكاديمية و عملية في مجالات التأهيل المختلفة و الطب و التغذية و غيرها، و مع الفئات العمرية المختلفة.
                        </p>
                    </div>
                    <div class="feature-illustration">
                        <div class="illustration-circle circle-1"></div>
                        <div class="illustration-circle circle-2"></div>
                    </div>
                </div>
            </div>
            
            <!-- Feature 2: Ease of Use -->
            <div class="col-lg-6 col-md-6">
                <div class="why-feature-card">
                    <div class="feature-content">
                        <div class="feature-icon-wrapper mb-4">
                            <div class="feature-icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <div class="icon-decoration"></div>
                        </div>
                        <h3 class="feature-title mb-3">سهولة الإستخدام</h3>
                        <p class="feature-description">
                            اعتماد أسلوب الدورات المسجلة مسبقاً، يسهل الوصول للدورات في أي وقت، بالإضافة تقسيم الدورات إلى دروس متسلسلة لتسهيل عملية الدراسة و المتابعة.
                        </p>
                    </div>
                    <div class="feature-illustration">
                        <div class="illustration-circle circle-1"></div>
                        <div class="illustration-circle circle-2"></div>
                    </div>
                </div>
            </div>
            
            <!-- Feature 3: Certificates & Exams -->
            <div class="col-lg-6 col-md-6">
                <div class="why-feature-card">
                    <div class="feature-content">
                        <div class="feature-icon-wrapper mb-4">
                            <div class="feature-icon">
                                <i class="fas fa-certificate"></i>
                            </div>
                            <div class="icon-decoration"></div>
                        </div>
                        <h3 class="feature-title mb-3">شهادات و امتحانات</h3>
                        <p class="feature-description">
                            يحصل الطالب على شهادة بعد الانتهاء من كل دورة، بشرط اجتياز امتحان قصير متعلق بمادة الدورة و بعلامة 80%.
                        </p>
                    </div>
                    <div class="feature-illustration">
                        <div class="illustration-circle circle-1"></div>
                        <div class="illustration-circle circle-2"></div>
                    </div>
                </div>
            </div>
            
            <!-- Feature 4: Affordable Prices -->
            <div class="col-lg-6 col-md-6">
                <div class="why-feature-card">
                    <div class="feature-content">
                        <div class="feature-icon-wrapper mb-4">
                            <div class="feature-icon">
                                <i class="fas fa-tag"></i>
                            </div>
                            <div class="icon-decoration"></div>
                        </div>
                        <h3 class="feature-title mb-3">الأسعار المناسبة</h3>
                        <p class="feature-description">
                            تم اعتماد شريحة من الأسعار المناسبة للدورات على المنصة، بالإضافة إلى توفر مادة مجانية كبيرة من المقالات العلمية و السهلة و المقدمة بلغة مباشرة و سهلة.
                        </p>
                    </div>
                    <div class="feature-illustration">
                        <div class="illustration-circle circle-1"></div>
                        <div class="illustration-circle circle-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');

.why-estamer-section {
    background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%);
    position: relative;
    overflow: hidden;
}

.why-estamer-section::before {
    content: '';
    position: absolute;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(32, 227, 178, 0.08) 0%, transparent 70%);
    top: -200px;
    right: -100px;
    border-radius: 50%;
}

.section-title .main-title {
    font-size: 2.5rem;
    font-weight: 800;
    color: #1a1a1a;
    margin-bottom: 15px;
}

.title-divider {
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #20E3B2 0%, #29FFC6 100%);
    border-radius: 10px;
}

.why-feature-card {
    background: #fff;
    border-radius: 20px;
    padding: 40px 35px;
    height: 100%;
    transition: all 0.4s ease;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.06);
    position: relative;
    overflow: hidden;
    border: 1px solid rgba(32, 227, 178, 0.1);
}

.why-feature-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 45px rgba(0, 0, 0, 0.12);
    border-color: rgba(32, 227, 178, 0.3);
}

.feature-icon-wrapper {
    position: relative;
    width: fit-content;
}

.feature-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #20E3B2 0%, #29FFC6 100%);
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    z-index: 2;
    box-shadow: 0 10px 30px rgba(32, 227, 178, 0.25);
}

.feature-icon i {
    font-size: 2.2rem !important;
    color: #fff !important;
    display: block !important;
    line-height: 1 !important;
    font-family: "Font Awesome 5 Free", "Font Awesome 5 Pro", "Font Awesome 6 Free", "Font Awesome 6 Pro", "FontAwesome" !important;
    font-weight: 900 !important;
    font-style: normal !important;
    opacity: 1 !important;
    visibility: visible !important;
    text-rendering: auto !important;
    -webkit-font-smoothing: antialiased !important;
}

.icon-decoration {
    position: absolute;
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, rgba(32, 227, 178, 0.2) 0%, rgba(41, 255, 198, 0.2) 100%);
    border-radius: 20px;
    top: 10px;
    left: 10px;
    z-index: 1;
}

.feature-title {
    font-size: 1.4rem;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 15px;
}

.feature-description {
    font-size: 1rem;
    color: #666;
    line-height: 1.8;
    margin: 0;
}

.feature-illustration {
    position: absolute;
    bottom: -30px;
    right: -30px;
    width: 150px;
    height: 150px;
    pointer-events: none;
}

.illustration-circle {
    position: absolute;
    border-radius: 50%;
    opacity: 0.15;
}

.circle-1 {
    width: 100px;
    height: 100px;
    background: linear-gradient(135deg, #20E3B2 0%, #29FFC6 100%);
    bottom: 20px;
    right: 20px;
    animation: pulse1 3s ease-in-out infinite;
}

.circle-2 {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #29FFC6 0%, #20E3B2 100%);
    bottom: 60px;
    right: 80px;
    animation: pulse2 3s ease-in-out infinite;
}

@keyframes pulse1 {
    0%, 100% {
        transform: scale(1);
        opacity: 0.15;
    }
    50% {
        transform: scale(1.1);
        opacity: 0.25;
    }
}

@keyframes pulse2 {
    0%, 100% {
        transform: scale(1);
        opacity: 0.15;
    }
    50% {
        transform: scale(1.2);
        opacity: 0.25;
    }
}

/* Animation on scroll */
.why-feature-card {
    animation: fadeInUp 0.6s ease backwards;
}

.why-feature-card:nth-child(1) {
    animation-delay: 0.1s;
}

.why-feature-card:nth-child(2) {
    animation-delay: 0.2s;
}

.why-feature-card:nth-child(3) {
    animation-delay: 0.3s;
}

.why-feature-card:nth-child(4) {
    animation-delay: 0.4s;
}

@media (max-width: 992px) {
    .section-title .main-title {
        font-size: 2rem;
    }
    
    .why-feature-card {
        padding: 30px 25px;
    }
    
    .feature-icon {
        width: 70px;
        height: 70px;
    }
    
    .feature-icon i {
        font-size: 1.8rem;
    }
    
    .feature-title {
        font-size: 1.2rem;
    }
    
    .feature-description {
        font-size: 0.95rem;
    }
}

@media (max-width: 768px) {
    .section-title .main-title {
        font-size: 1.75rem;
    }
}
</style>
<!---------- Why Estamer Platform Section End --------------->

<!---------- Start Learning Section Start ---------------->
<section class="start-learning-section py-100 wow animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="500">
    <div class="container">
        <!-- Section Title -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="section-title text-center">
                    <h2 class="main-title mb-3">ابداء التعلم من افضل منصه</h2>
                    <div class="title-divider mx-auto"></div>
                </div>
            </div>
        </div>
        
        <!-- Category Cards Slider -->
        <div class="category-slider-wrapper position-relative">
            <div class="category-slider-container">
                <div class="category-slider" id="categorySlider">
                    <!-- Card 1: Speech and Language Therapy -->
                    <div class="category-slide">
                        <a href="https://esttamer.com/home/courses?category=%D8%B9%D9%84%D8%A7%D8%AC-%D8%A7%D9%84%D9%86%D8%B7%D9%82-%D9%88-%D8%A7%D9%84%D9%84%D8%BA%D8%A9" class="category-card-link">
                            <div class="category-card">
                                <div class="category-card-image">
                                    <img loading="lazy" src="<?php echo base_url('assets/frontend/default-new/image/not2.png'); ?>" alt="علاج النطق و اللغة">
                                </div>
                                <div class="category-card-content">
                                    <h3 class="category-card-title">علاج النطق و اللغة</h3>
                                    <div class="category-card-button">
                                        <span>ابدأ الآن</span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <!-- Card 2: Occupational Therapy -->
                    <div class="category-slide">
                        <a href="https://esttamer.com/home/courses?category=%D8%A7%D9%84%D8%B9%D9%84%D8%A7%D8%AC-%D8%A7%D9%84%D9%88%D8%B8%D9%8A%D9%81%D9%8A" class="category-card-link">
                            <div class="category-card">
                                <div class="category-card-image">
                                    <img loading="lazy" src="<?php echo base_url('assets/frontend/default-new/image/wazefy.png'); ?>" alt="العلاج الوظيفي">
                                </div>
                                <div class="category-card-content">
                                    <h3 class="category-card-title">العلاج الوظيفي</h3>
                                    <div class="category-card-button">
                                        <span>ابدأ الآن</span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <!-- Card 3: Physical Therapy -->
                    <div class="category-slide">
                        <a href="https://esttamer.com/home/courses?category=%D8%A7%D9%84%D8%B9%D9%84%D8%A7%D8%AC-%D8%A7%D9%84%D8%B7%D8%A8%D9%8A%D8%B9%D9%8A" class="category-card-link">
                            <div class="category-card">
                                <div class="category-card-image">
                                    <img loading="lazy" src="<?php echo base_url('assets/frontend/default-new/image/taby3y.png'); ?>" alt="العلاج الطبيعي">
                                </div>
                                <div class="category-card-content">
                                    <h3 class="category-card-title">العلاج الطبيعي</h3>
                                    <div class="category-card-button">
                                        <span>ابدأ الآن</span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <!-- Card 4: Hearing -->
                    <div class="category-slide">
                        <a href="https://esttamer.com/home/courses?category=%D8%A7%D9%84%D8%B3%D9%85%D8%B9" class="category-card-link">
                            <div class="category-card">
                                <div class="category-card-image">
                                    <img loading="lazy" src="<?php echo base_url('assets/frontend/default-new/image/sama3.png'); ?>" alt="السمع">
                                </div>
                                <div class="category-card-content">
                                    <h3 class="category-card-title">السمع</h3>
                                    <div class="category-card-button">
                                        <span>ابدأ الآن</span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                    <!-- Card 5: Family Medicine -->
                    <div class="category-slide">
                        <a href="https://esttamer.com/home/courses?category=%D8%B7%D8%A8-%D8%A7%D9%84%D8%A3%D8%B3%D8%B1%D8%A9-%D9%88-%D8%A7%D9%84%D9%85%D9%87%D8%A7%D8%B1%D8%A7%D8%AA-%D8%A7%D9%84%D9%88%D8%A7%D9%84%D8%AF%D9%8A%D8%A9" class="category-card-link">
                            <div class="category-card">
                                <div class="category-card-image">
                                    <img loading="lazy" src="<?php echo base_url('assets/frontend/default-new/image/not3320.png'); ?>" alt="طب الأسرة">
                                </div>
                                <div class="category-card-content">
                                    <h3 class="category-card-title">طب الأسرة</h3>
                                    <div class="category-card-button">
                                        <span>ابدأ الآن</span>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.5 15L12.5 10L7.5 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Navigation Arrows -->
            <button class="category-slider-nav category-prev-btn" onclick="moveCategorySlider(-1)">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 18L9 12L15 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button class="category-slider-nav category-next-btn" onclick="moveCategorySlider(1)">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18L15 12L9 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
    </div>
</section>
<!---------- Start Learning Section End --------------->

<script>
// Category Slider Functionality
let currentCategoryIndex = 0;
let categorySlides;
let categorySlider;
let totalCategorySlides;
let slidesToShow = 4;

function updateSlidesToShow() {
    if (window.innerWidth >= 992) {
        slidesToShow = 4;
    } else if (window.innerWidth >= 576) {
        slidesToShow = 2;
    } else {
        slidesToShow = 1;
    }
}

function moveCategorySlider(direction) {
    // Re-query elements to ensure we have the latest count
    categorySlides = document.querySelectorAll('.category-slide');
    categorySlider = document.getElementById('categorySlider');
    totalCategorySlides = categorySlides.length;
    
    if (!categorySlider || totalCategorySlides === 0) return;
    
    updateSlidesToShow();
    
    // Calculate max index based on total slides and slides to show
    const maxIndex = Math.max(0, totalCategorySlides - slidesToShow);
    
    currentCategoryIndex += direction;
    
    // Handle wrapping
    if (currentCategoryIndex > maxIndex) {
        currentCategoryIndex = 0;
    } else if (currentCategoryIndex < 0) {
        currentCategoryIndex = maxIndex;
    }
    
    // Calculate slide width as percentage
    const slideWidthPercent = 100 / slidesToShow;
    const translateX = -(currentCategoryIndex * slideWidthPercent);
    
    categorySlider.style.transform = `translateX(${translateX}%)`;
}

// Initialize on load
document.addEventListener('DOMContentLoaded', function() {
    categorySlides = document.querySelectorAll('.category-slide');
    categorySlider = document.getElementById('categorySlider');
    totalCategorySlides = categorySlides.length;
    
    updateSlidesToShow();
    if (categorySlider) {
        categorySlider.style.transform = 'translateX(0%)';
    }
});

// Update on resize
window.addEventListener('resize', function() {
    categorySlides = document.querySelectorAll('.category-slide');
    categorySlider = document.getElementById('categorySlider');
    totalCategorySlides = categorySlides.length;
    
    updateSlidesToShow();
    currentCategoryIndex = 0;
    if (categorySlider) {
        categorySlider.style.transform = 'translateX(0%)';
    }
});
</script>

<?php if(get_frontend_settings('top_course_section') == 1): ?>
<!---------- Top courses Section start --------------->
<section class="courses eTopcourse Ecourse grid-view-body pb-100 pt-50 wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="500" data-wow-delay="300">
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
                    $lessons = $this->crud_model->get_lessons('course', $top_course['id']);
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
                                        <p>(<?php echo $number_of_ratings; ?> تقييم)</p>
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
                                                <span class="enrollBtn checkPropagation" onclick="redirectTo('<?php echo site_url('home/lesson/'.slugify($top_course['title']).'/'.$top_course['id']) ?>');"><i class="far fa-play-circle text-white"></i> <?php echo get_phrase('Start Now'); ?></span>
                                            <?php else: ?>
                                                <span class="enrollBtn"><?php echo site_phrase('Enroll Now')?></span>
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

                                        <?php echo $this->crud_model->get_lessons('course', $top_course['id'])->num_rows() . ' ' . site_phrase('lessons'); ?>
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
                                    <a href="<?php echo site_url('home/lesson/'.slugify($top_course['title']).'/'.$top_course['id']) ?>" class="purchase-btn d-flex align-items-center  me-auto"><i class="far fa-play-circle me-2"></i> <?php echo get_phrase('Start Now'); ?></a>
                                    <?php if ($top_course['is_free_course'] != 1) : ?>
                                        <button type="button" class="gift-btn ms-auto" title="<?php echo get_phrase('Gift someone else'); ?>" data-bs-toggle="tooltip" onclick="actionTo('<?php echo site_url('home/handle_buy_now/' . $top_course['id'].'?gift=1'); ?>')"><i class="fas fa-gift"></i></button>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <?php if ($top_course['is_free_course'] == 1) : ?>
                                        <a class="purchase-btn green_purchase ms-auto" href="<?php echo site_url('home/get_enrolled_to_free_course/' . $top_course['id']); ?>"><?php echo get_phrase('Enroll Now'); ?></a>
                                    <?php else : ?>

                                        <!-- Cart button -->
                                        <a id="added_to_cart_btn_top_course<?php echo $top_course['id']; ?>" class="purchase-btn align-items-center me-auto <?php if(!in_array($top_course['id'], $cart_items)) echo 'd-hidden'; ?>" href="javascript:void(0)" onclick="actionTo('<?php echo site_url('home/handle_cart_items/' . $top_course['id'].'/top_course'); ?>');">
                                            <i class="fas fa-minus me-2"></i> <?php echo get_phrase('Remove from cart'); ?>
                                        </a>
                                        <a id="add_to_cart_btn_top_course<?php echo $top_course['id']; ?>" class="purchase-btn align-items-center me-auto <?php if(in_array($top_course['id'], $cart_items)) echo 'd-hidden'; ?>" href="javascript:void(0)" onclick="actionTo('<?php echo site_url('home/handle_cart_items/' . $top_course['id'].'/top_course'); ?>'); ">
                                            <i class="fas fa-plus me-2"></i> أضف إلى السلة
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
                    $lessons = $this->crud_model->get_lessons('course', $latest_course['id']);
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
                                        <p>(<?php echo $number_of_ratings; ?> تقييم)</p>
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
                                                <span class="enrollBtn checkPropagation" onclick="redirectTo('<?php echo site_url('home/lesson/'.slugify($latest_course['title']).'/'.$latest_course['id']) ?>');"><i class="far fa-play-circle text-white"></i> <?php echo get_phrase('Start Now'); ?></span>
                                            <?php else: ?>
                                                <span class="enrollBtn"><?php echo site_phrase('Enroll Now')?></span>
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

                                        <?php echo $this->crud_model->get_lessons('course', $latest_course['id'])->num_rows() . ' ' . site_phrase('lessons'); ?>
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
                                    <a href="<?php echo site_url('home/lesson/'.slugify($latest_course['title']).'/'.$latest_course['id']) ?>" class="purchase-btn d-flex align-items-center  me-auto"><i class="far fa-play-circle me-2"></i> <?php echo get_phrase('Start Now'); ?></a>
                                    <?php if ($latest_course['is_free_course'] != 1) : ?>
                                        <button type="button" class="gift-btn ms-auto" title="<?php echo get_phrase('Gift someone else'); ?>" data-bs-toggle="tooltip" onclick="actionTo('<?php echo site_url('home/handle_buy_now/' . $latest_course['id'].'?gift=1'); ?>')"><i class="fas fa-gift"></i></button>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <?php if ($latest_course['is_free_course'] == 1) : ?>
                                        <a class="purchase-btn green_purchase ms-auto" href="<?php echo site_url('home/get_enrolled_to_free_course/' . $latest_course['id']); ?>"><?php echo get_phrase('Enroll Now'); ?></a>
                                    <?php else : ?>

                                        <!-- Cart button -->
                                        <a id="added_to_cart_btn_latest_course<?php echo $latest_course['id']; ?>" class="purchase-btn align-items-center me-auto <?php if(!in_array($latest_course['id'], $cart_items)) echo 'd-hidden'; ?>" href="javascript:void(0)" onclick="actionTo('<?php echo site_url('home/handle_cart_items/' . $latest_course['id'].'/latest_course'); ?>');">
                                            <i class="fas fa-minus me-2"></i> <?php echo get_phrase('Remove from cart'); ?>
                                        </a>
                                        <a id="add_to_cart_btn_latest_course<?php echo $latest_course['id']; ?>" class="purchase-btn align-items-center me-auto <?php if(in_array($latest_course['id'], $cart_items)) echo 'd-hidden'; ?>" href="javascript:void(0)" onclick="actionTo('<?php echo site_url('home/handle_cart_items/' . $latest_course['id'].'/latest_course'); ?>'); ">
                                            <i class="fas fa-plus me-2"></i> أضف إلى السلة
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
                <h1 class="text-center f-36 mt-0 pt-0"><?php echo get_phrase('Our Expert Instructor ') ?></h1>
                <p class="text-center mt-4 mb-30"><?php echo get_phrase('They efficiently serve large number of students on our platform') ?></p>
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
<!-- Start Review Section -->
<section class="review-testimonial-section pb-100 pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-5">
                    <h1 class="text-white f-36 mt-0 pt-0"><?php echo get_phrase('What the people Thinks About Us'); ?></h1>
                    <p class="text-white mt-4 mb-30"><?php echo get_phrase('It highlights feedback and testimonials from users, reflecting their experiences and satisfaction.') ?></p>
                </div>
            </div>
        </div>
        
        <div class="testimonial-slider-wrapper">
            <div class="testimonial-slider" id="testimonialSlider">
                <!-- Testimonial 1 -->
                <div class="testimonial-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="quote-icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 20C10 14.4772 14.4772 10 20 10C25.5228 10 30 14.4772 30 20C30 25.5228 25.5228 30 20 30C14.4772 30 10 25.5228 10 20Z" fill="rgba(255,255,255,0.2)"/>
                                    <path d="M15 18C15 16.3431 16.3431 15 18 15C19.6569 15 21 16.3431 21 18C21 19.6569 19.6569 21 18 21C16.3431 21 15 19.6569 15 18Z" fill="white"/>
                                    <path d="M19 18C19 16.3431 20.3431 15 22 15C23.6569 15 25 16.3431 25 18C25 19.6569 23.6569 21 22 21C20.3431 21 19 19.6569 19 18Z" fill="white"/>
                                </svg>
                            </div>
                            <p class="testimonial-text">منصة استمر منصة رائعة ساعدتني في تطوير مهاراتي في العلاج الطبيعي. المحتوى غني والمدربون محترفون جداً. أنصح الجميع بالانضمام!</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="https://i.pravatar.cc/150?img=12" alt="أحمد محمد" onerror="this.src='https://ui-avatars.com/api/?name=أحمد+محمد&background=20E3B2&color=fff&size=150'">
                            </div>
                            <div class="author-info">
                                <h5 class="author-name">أحمد محمد</h5>
                                <p class="author-role">أخصائي علاج طبيعي</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="testimonial-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="quote-icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 20C10 14.4772 14.4772 10 20 10C25.5228 10 30 14.4772 30 20C30 25.5228 25.5228 30 20 30C14.4772 30 10 25.5228 10 20Z" fill="rgba(255,255,255,0.2)"/>
                                    <path d="M15 18C15 16.3431 16.3431 15 18 15C19.6569 15 21 16.3431 21 18C21 19.6569 19.6569 21 18 21C16.3431 21 15 19.6569 15 18Z" fill="white"/>
                                    <path d="M19 18C19 16.3431 20.3431 15 22 15C23.6569 15 25 16.3431 25 18C25 19.6569 23.6569 21 22 21C20.3431 21 19 19.6569 19 18Z" fill="white"/>
                                </svg>
                            </div>
                            <p class="testimonial-text">تجربة ممتازة مع منصة استمر! الدورات في علاج النطق واللغة شاملة ومفيدة جداً. استفدت كثيراً وأصبحت أكثر كفاءة في عملي.</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="https://i.pravatar.cc/150?img=47" alt="فاطمة علي" onerror="this.src='https://ui-avatars.com/api/?name=فاطمة+علي&background=20E3B2&color=fff&size=150'">
                            </div>
                            <div class="author-info">
                                <h5 class="author-name">فاطمة علي</h5>
                                <p class="author-role">أخصائية نطق ولغة</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="testimonial-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-content">
                            <div class="quote-icon">
                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10 20C10 14.4772 14.4772 10 20 10C25.5228 10 30 14.4772 30 20C30 25.5228 25.5228 30 20 30C14.4772 30 10 25.5228 10 20Z" fill="rgba(255,255,255,0.2)"/>
                                    <path d="M15 18C15 16.3431 16.3431 15 18 15C19.6569 15 21 16.3431 21 18C21 19.6569 19.6569 21 18 21C16.3431 21 15 19.6569 15 18Z" fill="white"/>
                                    <path d="M19 18C19 16.3431 20.3431 15 22 15C23.6569 15 25 16.3431 25 18C25 19.6569 23.6569 21 22 21C20.3431 21 19 19.6569 19 18Z" fill="white"/>
                                </svg>
                            </div>
                            <p class="testimonial-text">منصة احترافية بكل معنى الكلمة. محتوى العلاج الوظيفي ممتاز والشرح واضح. شكراً لكم على هذه الخدمة المميزة!</p>
                        </div>
                        <div class="testimonial-author">
                            <div class="author-image">
                                <img src="https://i.pravatar.cc/150?img=33" alt="خالد إبراهيم" onerror="this.src='https://ui-avatars.com/api/?name=خالد+إبراهيم&background=20E3B2&color=fff&size=150'">
                            </div>
                            <div class="author-info">
                                <h5 class="author-name">خالد إبراهيم</h5>
                                <p class="author-role">أخصائي علاج وظيفي</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Navigation Arrows -->
            <button class="slider-nav prev-btn" onclick="moveSlider(-1)">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 18L9 12L15 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <button class="slider-nav next-btn" onclick="moveSlider(1)">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 18L15 12L9 6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            
        </div>
    </div>
</section>

<script>
let currentTestimonialIndex = 0;
const testimonials = document.querySelectorAll('.testimonial-slide');
const slider = document.getElementById('testimonialSlider');
const totalSlides = testimonials.length;
const slidesPerView = window.innerWidth > 991 ? 3 : (window.innerWidth > 768 ? 2 : 1);

function updateSlider() {
    const slideWidth = 100 / slidesPerView;
    const maxIndex = Math.max(0, totalSlides - slidesPerView);
    
    if (currentTestimonialIndex > maxIndex) {
        currentTestimonialIndex = maxIndex;
    }
    if (currentTestimonialIndex < 0) {
        currentTestimonialIndex = 0;
    }
    
    const translateX = -(currentTestimonialIndex * slideWidth);
    slider.style.transform = `translateX(${translateX}%)`;
}

function moveSlider(direction) {
    const maxIndex = Math.max(0, totalSlides - (window.innerWidth > 991 ? 3 : (window.innerWidth > 768 ? 2 : 1)));
    currentTestimonialIndex += direction;
    
    if (currentTestimonialIndex > maxIndex) {
        currentTestimonialIndex = 0;
    } else if (currentTestimonialIndex < 0) {
        currentTestimonialIndex = maxIndex;
    }
    
    updateSlider();
}

function currentSlide(index) {
    currentTestimonialIndex = index - 1;
    updateSlider();
}

// Initialize
updateSlider();

// Handle window resize
let resizeTimer;
window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
        updateSlider();
    }, 250);
});

// Auto slide every 5 seconds
setInterval(() => {
    moveSlider(1);
}, 5000);
</script>
<?php endif; ?>
<!-- End Review Section -->
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
                <h1 class="text-center f-36 mt-0 pt-0"><?php echo get_phrase('Frequently Asked Questions') ?></h1>
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
<?php $latest_blogs = $this->crud_model->get_latest_blogs(6); ?>
<?php if($latest_blogs->num_rows() > 0): ?>
<section class="courses blog pb-100 pt-50 wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="500">
    <div class="container">
        <h1 class="text-center f-36 pt-0"><span>أحدث المقالات</span></h1>
        <p class="text-center mb-40">قم بزيارة مقالاتنا القيمة للحصول على المزيد من المعلومات
        <div class="courses-card">
            <div class="course-group-slider blog-slider">
               <?php foreach($latest_blogs->result_array() as $latest_blog):
                $user_details = $this->user_model->get_all_user($latest_blog['user_id'])->row_array();
                $blog_category = $this->crud_model->get_blog_categories($latest_blog['blog_category_id'])->row_array(); ?>  
                <div class="single-popup-course epopCourse position-relative">
                    <a href="<?php echo site_url('blog/details/'.slugify($latest_blog['title']).'/'.$latest_blog['blog_id']); ?>" class="courses-card-body blogCard">
                        <div class="courses-card-image">
                            <?php $blog_thumbnail = 'uploads/blog/thumbnail/'.$latest_blog['thumbnail'];
                               if(!file_exists($blog_thumbnail) || !is_file($blog_thumbnail)):
                                   $blog_thumbnail = base_url('uploads/blog/thumbnail/placeholder.png');
                              endif; ?>
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
                                    <div>
                                    <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.9222 6.41101L13.0888 0.577677C12.9317 0.425878 12.7212 0.341883 12.5027 0.343782C12.2842 0.34568 12.0752 0.433321 11.9207 0.587828C11.7662 0.742335 11.6785 0.951345 11.6766 1.16984C11.6747 1.38834 11.7587 1.59884 11.9105 1.75601L16.3213 6.16684H1.66634C1.44533 6.16684 1.23337 6.25464 1.07709 6.41092C0.920805 6.5672 0.833008 6.77916 0.833008 7.00018C0.833008 7.22119 0.920805 7.43315 1.07709 7.58943C1.23337 7.74571 1.44533 7.83351 1.66634 7.83351H16.3213L11.9105 12.2443C11.8309 12.3212 11.7674 12.4132 11.7238 12.5148C11.6801 12.6165 11.6571 12.7259 11.6561 12.8365C11.6552 12.9472 11.6763 13.0569 11.7182 13.1593C11.7601 13.2617 11.8219 13.3548 11.9002 13.433C11.9784 13.5112 12.0715 13.5731 12.1739 13.615C12.2763 13.6569 12.386 13.678 12.4967 13.6771C12.6073 13.6761 12.7167 13.6531 12.8183 13.6094C12.92 13.5658 13.012 13.5023 13.0888 13.4227L18.9222 7.58934C19.0784 7.43307 19.1662 7.22115 19.1662 7.00018C19.1662 6.77921 19.0784 6.56728 18.9222 6.41101Z" fill="#0D0C23"/>
                                        </svg>

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
</section>
<?php endif; ?>
<?php endif; ?>

<!------------- Mobile App Promotional Section Start ------------>
<section class="mobile-app-section pb-100 pt-100">
    <div class="container">
        <div class="row align-items-center">
            <!-- Right Side: Mobile App Mockup -->
            <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                <div class="mobile-screens-container position-relative" style="height: 500px;">
                    <!-- Phone 1 -->
                    <div class="mobile-phone phone-1">
                        <div class="phone-screen">
                            <div class="phone-content">
                                <div class="app-icon mb-3">
                                    <i class="fas fa-calendar-alt" style="font-size: 3rem; color: #fff;"></i>
                                </div>
                                <h6 style="color: #fff; font-weight: bold;">المواعيد</h6>
                                <p style="font-size: 0.8rem; color: rgba(255,255,255,0.9);">احجز مواعيدك بسهولة</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Phone 2 (Center) -->
                    <div class="mobile-phone phone-2">
                        <div class="phone-screen">
                            <div class="phone-content">
                                <div class="app-icon mb-3">
                                    <i class="fas fa-comments" style="font-size: 3rem; color: #fff;"></i>
                                </div>
                                <h6 style="color: #fff; font-weight: bold;">المحادثة</h6>
                                <p style="font-size: 0.8rem; color: rgba(255,255,255,0.9);">تواصل مع مدربيك</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Phone 3 -->
                    <div class="mobile-phone phone-3">
                        <div class="phone-screen">
                            <div class="phone-content">
                                <div class="app-icon mb-3">
                                    <i class="fas fa-graduation-cap" style="font-size: 3rem; color: #fff;"></i>
                                </div>
                                <h6 style="color: #fff; font-weight: bold;">الدورات</h6>
                                <p style="font-size: 0.8rem; color: rgba(255,255,255,0.9);">الوصول لجميع الدورات</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Left Side: Content -->
            <div class="col-lg-6 col-md-12">
                <div class="app-promo-content">
                    <!-- Badge -->
                    <div class="app-badge mb-3">
                        <span style="background: rgba(255, 255, 255, 0.9); padding: 8px 20px; border-radius: 50px; font-size: 0.9rem; font-weight: 600; color: #20E3B2; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                            <i class="fas fa-mobile-alt me-2"></i>تطبيق جديد
                        </span>
                    </div>
                    
                    <h2 class="app-promo-title mb-4" style="font-size: 3rem; color: #1a1a1a; font-weight: 800; line-height: 1.2;">
                        حمل تطبيق <span style="color: #ffffff; background: rgba(26, 26, 26, 0.9); padding: 5px 15px; border-radius: 10px; display: inline-block; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);">استمر</span> الآن
                    </h2>
                    <p class="app-promo-description mb-4" style="font-size: 1.15rem; color: #2c3e50; line-height: 1.8;">
                        استمتع بتجربة تعليمية فريدة مع تطبيق استمر! تحدث مع المدربين مباشرة، احجز الدورات بسهولة، وتعلم في أي وقت ومن أي مكان.
                    </p>
                    
                    <!-- App Store Button -->
                    <div class="app-buttons mb-5">
                        <a href="#" class="app-store-btn google-play-button">
                            <i class="fab fa-google-play"></i>
                            <div class="button-text">
                                <small>حمّل من</small>
                                <strong>Google Play</strong>
                            </div>
                        </a>
                    </div>
                    
                    <!-- Features List -->
                    <div class="app-features">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-clock"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h6>تعلم في أي وقت</h6>
                                        <p>وصول دائم 24/7</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-infinity"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h6>وصول غير محدود</h6>
                                        <p>جميع الدورات متاحة</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-download"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h6>تعلم دون اتصال</h6>
                                        <p>حمّل المحتوى وشاهده</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-item">
                                    <div class="feature-icon">
                                        <i class="fas fa-comments"></i>
                                    </div>
                                    <div class="feature-text">
                                        <h6>تواصل مباشر</h6>
                                        <p>دردشة مع المدربين</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.mobile-app-section {
    background: #64f088;
    position: relative;
    overflow: hidden;
}

.mobile-app-section::before {
    content: '';
    position: absolute;
    width: 500px;
    height: 500px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    top: -200px;
    right: -150px;
}

.mobile-app-section::after {
    content: '';
    position: absolute;
    width: 400px;
    height: 400px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    bottom: -150px;
    left: -100px;
}

.mobile-screens-container {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    flex-wrap: nowrap;
}

.mobile-phone {
    width: 180px;
    height: 360px;
    background: #1a1a1a;
    border-radius: 35px;
    box-shadow: 0 30px 80px rgba(0, 0, 0, 0.3);
    padding: 12px;
    position: relative;
    border: 3px solid #1a1a1a;
}

.phone-1 {
    animation: float1 4s ease-in-out infinite;
    z-index: 1;
}

.phone-2 {
    animation: float2 4s ease-in-out infinite;
    z-index: 3;
    transform: scale(1.15);
}

.phone-3 {
    animation: float3 4s ease-in-out infinite;
    z-index: 1;
}

.phone-screen {
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
    border-radius: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    position: relative;
}

.phone-screen::before {
    content: '';
    position: absolute;
    top: 15px;
    left: 50%;
    transform: translateX(-50%);
    width: 50px;
    height: 4px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
}

.phone-content {
    text-align: center;
    padding: 20px;
    color: white;
}

.app-icon {
    background: linear-gradient(135deg, #20E3B2 0%, #29FFC6 100%);
    width: 70px;
    height: 70px;
    border-radius: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    box-shadow: 0 10px 30px rgba(32, 227, 178, 0.3);
}

.app-icon i {
    font-size: 3rem !important;
    color: #fff !important;
    display: block !important;
    line-height: 1 !important;
    font-family: "Font Awesome 5 Free", "Font Awesome 5 Pro", "Font Awesome 6 Free", "Font Awesome 6 Pro", "FontAwesome" !important;
    font-weight: 900 !important;
    font-style: normal !important;
    opacity: 1 !important;
    visibility: visible !important;
    text-rendering: auto !important;
    -webkit-font-smoothing: antialiased !important;
}

@keyframes float1 {
    0%, 100% {
        transform: rotate(-8deg) translateY(20px);
    }
    50% {
        transform: rotate(-8deg) translateY(-10px);
    }
}

@keyframes float2 {
    0%, 100% {
        transform: scale(1.15) translateY(0px);
    }
    50% {
        transform: scale(1.15) translateY(-25px);
    }
}

@keyframes float3 {
    0%, 100% {
        transform: rotate(8deg) translateY(20px);
    }
    50% {
        transform: rotate(8deg) translateY(-10px);
    }
}

.app-badge {
    animation: fadeInDown 0.6s ease;
}

@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.google-play-button {
    display: inline-flex;
    align-items: center;
    gap: 15px;
    background: #1a1a1a;
    color: #fff;
    padding: 18px 35px;
    border-radius: 15px;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.3s ease;
    box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
}

.google-play-button:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 50px rgba(0, 0, 0, 0.3);
    background: #2d2d2d;
    color: #fff;
}

.google-play-button i {
    font-size: 2rem;
}

.google-play-button .button-text {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    line-height: 1.3;
}

.google-play-button small {
    font-size: 0.75rem;
    font-weight: 400;
    opacity: 0.8;
}

.google-play-button strong {
    font-size: 1.1rem;
}

.feature-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    background: rgba(255, 255, 255, 0.95);
    padding: 20px;
    border-radius: 15px;
    transition: all 0.3s ease;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
}

.feature-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.feature-icon {
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #20E3B2 0%, #29FFC6 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: 0 5px 15px rgba(32, 227, 178, 0.3);
}

.feature-icon i {
    color: #fff;
    font-size: 1.3rem;
}

.feature-text {
    flex: 1;
}

.feature-text h6 {
    margin: 0 0 5px 0;
    font-size: 1rem;
    font-weight: 700;
    color: #1a1a1a;
}

.feature-text p {
    margin: 0;
    font-size: 0.85rem;
    color: #666;
}

.app-features .row .col-md-6:nth-child(1) .feature-item {
    animation: fadeInUp 0.6s ease 0.1s backwards;
}

.app-features .row .col-md-6:nth-child(2) .feature-item {
    animation: fadeInUp 0.6s ease 0.2s backwards;
}

.app-features .row .col-md-6:nth-child(3) .feature-item {
    animation: fadeInUp 0.6s ease 0.3s backwards;
}

.app-features .row .col-md-6:nth-child(4) .feature-item {
    animation: fadeInUp 0.6s ease 0.4s backwards;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 768px) {
    .mobile-phone {
        width: 140px;
        height: 280px;
    }
    
    .app-icon {
        width: 55px;
        height: 55px;
    }
    
    .app-icon i {
        font-size: 2rem !important;
    }
    
    .app-promo-title {
        font-size: 2rem !important;
    }
    
    .feature-item {
        padding: 15px;
    }
}

.py-4 {
    padding-top: 0em !important;
    padding-bottom: 0 !important;
}

/* Header menu spacing - keep all items on one line */
.navbar-collapse {
    white-space: nowrap;
    flex-wrap: nowrap;
}

.navbar-collapse > a.text-15px {
    margin-left: 0.4rem !important;
    white-space: nowrap;
    display: inline-block;
}

@media (min-width: 992px) {
    .navbar-collapse {
        display: flex !important;
        flex-wrap: nowrap;
    }
}
</style>
<!------------- Mobile App Promotional Section End ------------>

<div class="py-4 w-100"></div>


