<?php
    $selected_category = isset($_GET['category']) ? $_GET['category'] : 'all';
    $selected_price    = isset($_GET['price']) ? $_GET['price'] : 'all';
    $selected_level    = isset($_GET['level']) ? $_GET['level'] : 'all';
    $selected_language = isset($_GET['language']) ? $_GET['language'] : 'all';
    $selected_rating   = isset($_GET['rating']) ? $_GET['rating'] : 'all';
    $selected_sorting  = isset($_GET['sort_by']) ? $_GET['sort_by'] : 'all';
?>

<style>
/* Breadcrumb Green Gradient Overlay */
.bread-crumb {
    position: relative;
    background-image: url("<?php echo base_url('assets/frontend/default-new/image/course-breadcramb.jpg'); ?>");
    background-size: cover;
    background-position: center;
}

.bread-crumb::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(32, 227, 178, 0.85) 0%, rgba(41, 255, 198, 0.75) 50%, rgba(101, 240, 137, 0.80) 100%);
    z-index: 0;
}

.bread-crumb .container {
    position: relative;
    z-index: 1;
}

.bread-crumb .book-img {
    position: relative;
    z-index: 2;
}

.bread-crumb .book-img img {
    display: block;
    width: 100%;
    height: auto;
    opacity: 1;
    visibility: visible;
}
</style>

<?php include "breadcrumb.php"; ?>


<section class="grid-view courses-list-view">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-12">
                <?php include "courses_page_sidebar.php"; ?>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-8"> 
                 <?php include 'courses_page_' . $layout . '_layout.php'; ?>

                 <?php if(count($courses) == 0): ?>
                    <div class="not-found w-100 text-center d-flex align-items-center flex-column">
                        <img loading="lazy" width="80px" src="<?php echo base_url('assets/global/image/not-found.svg'); ?>">
                        <h5><?php echo ($this->session->userdata('language') == 'arabic') ? 'الدورة غير موجودة' : get_phrase('Course Not Found'); ?></h5>
                        <p><?php echo ($this->session->userdata('language') == 'arabic') ? 'عذراً، جرّب استخدام كلمات أكثر تشابهاً في البحث.' : get_phrase('Sorry, try using more similar words in your search.') ?></p>
                    </div>
                 <?php endif; ?>
            </div>
        </div>
    </div>
</section>


<script type="text/javascript">
    function filterCourse(){
        //sorting value added to the filter form
        var sort_by = $('#sorting_select_input').val();
        $('#sorting_hidden_input').val(sort_by);

        $('#course_filter_form').submit();
    }
</script>