

<section class="" style="background-image: url('<?php echo site_url('uploads/blog/page-banner/'.get_frontend_settings('blog_page_banner')); ?>'); background-size: cover; background-position: center; position: relative;">
    <div class="image-placeholder-2" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: #038261 !important; background-image: none !important; z-index: 1;"></div>
    <div class="container-lg position-relative py-5" style="z-index: 2;">
        <div class="row my-0 my-md-4 justify-content-center">
            <div class="col-lg-7">
                <h1 class="display-4 fw-600 text-center text-white"><?php echo get_frontend_settings('blog_page_title'); ?></h1>
            </div>
        </div>
    </div>
</section>

<?php include $included_page; ?>