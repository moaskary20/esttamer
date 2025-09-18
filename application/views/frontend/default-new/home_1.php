<?php if(get_frontend_settings('promotional_section') == 1): ?>
<!------------- Become Students Section start --------->
<section class="student py-5 pt-0">
    <div class="container">
        <div class="row eStudent">
            <div class="col-lg-6  <?php if (get_settings('allow_instructor') != 1) echo 'w-100'; ?> wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="650">
                <div class="student-body-1">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-12">
                            <div class="student-body-text">
                                <!-- النص المُصحح للطلاب -->
                                <h1>انضم إلينا الآن لبدء التعلم</h1>
                                <p>تعلم من مدرسينا ذوي الجودة العالية!</p>
                                 <?php if(get_settings('public_signup') == 'enable'): ?>  
                                   <a href="<?php echo site_url('sign_up'); ?>">ابدأ الآن</a>
                                 <?php endif;?>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 ">
                            <!-- <img loading="lazy" class="man" src="<?php echo base_url('assets/frontend/default-new/image/instractorN.png')?>"> -->
                        </div>
                     </div>
                </div>      
            </div>
            <?php if (get_settings('allow_instructor') == 1) : ?>
                <div class="col-lg-6  wow  animate__animated animate__fadeInUp opacityOnUp" data-wow-duration="1000" data-wow-delay="700">
                    <div class="student-body-2">
                    <div class="row">
                            <div class="col-lg-8  col-md-8 col-sm-12">
                                <div class="student-body-text">
                                  <!-- النص المُصحح للمدرسين -->
                                    <h1>كن مدرساً جديداً معنا</h1>
                                    <p>علم الآلاف من الطلاب واكسب المال!</p>
                                       <?php if(get_settings('public_signup') == 'enable'): ?>  
                                            <?php if($this->session->userdata('user_id')): ?>
                                            <a  href="<?php echo site_url('user/become_an_instructor'); ?>">انضم الآن</a>
                                            <?php else: ?>
                                                <a  href="<?php echo site_url('sign_up?instructor=yes'); ?>">انضم الآن</a>
                                            <?php endif; ?>
                                     <?php endif;?>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                            <!-- <img loading="lazy" class="man" src="<?php echo base_url('assets/frontend/default-new/image/student-2.png')?>"> -->
                            </div>
                        </div>  
                    </div> 
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<!------------- Become Students Section End --------->

<!-- إضافات CSS للنص العربي إذا لزم الأمر -->
<style>
/* تأكد من أن النص العربي يظهر بشكل صحيح */
.student-body-text h1, 
.student-body-text p {
    font-family: 'Arial', 'Tahoma', sans-serif;
    direction: rtl;
    text-align: right;
}

/* إذا كان النص يحتاج لمحاذاة خاصة */
.student-body-text {
    text-align: right;
    direction: rtl;
}

/* للروابط */
.student-body-text a {
    direction: rtl;
    font-family: inherit;
}
</style>