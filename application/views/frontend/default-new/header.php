<!---------- Header Section start  ---------->
<?php 

validate_cart_items();
$cart_items = $this->session->userdata('cart_items'); 
 
?>
<?php $user_id = $this->session->userdata('user_id'); ?>
<?php $user_login = $this->session->userdata('user_login'); ?>
<?php $admin_login = $this->session->userdata('admin_login'); ?>
<?php if($user_id > 0){$user_details = $this->user_model->get_all_user($user_id)->row_array();} ?>

<style>
.right-icon .nav-item{
  margin-left:3px;
}
</style>

<header>
  <!-- Sub Header Start -->
  <div class="sub-header">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="icon icon-left">
            <ul class="nav">
              <li class="nav-item px-2">
                <a href="tel:<?php echo get_settings('phone'); ?>">
                  <?php echo get_settings('phone'); ?>
                </a>
              </li>

              <li class="nav-item px-2">
                <a href="mailto:<?php echo get_settings('system_email'); ?>">
                  <?php echo get_settings('system_email'); ?>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
          <div class="icon right-icon">

            <?php $facebook = get_frontend_settings('facebook'); ?>
            <?php $instagram = get_frontend_settings('instagram'); ?>
            <?php $linkedin = get_frontend_settings('linkedin'); ?>

            <ul class="nav justify-content-end">

              <?php if($facebook): ?>
              <li class="nav-item">
                <a target="_blank" href="<?php echo $facebook; ?>" title="Facebook">
                  <!-- Facebook Icon -->
                  <svg width="19" height="18" viewBox="0 0 19 18">
                    <path d="M18.902 8.99994C18.902 4.02941 14.6706 0 9.45099 0C4.23135 0 0 4.02941 0 8.99994C0 13.492 3.45607 17.2154 7.97427 17.8905V11.6015H5.57461V8.99994H7.97427V7.01714C7.97427 4.76153 9.38528 3.5156 11.5441 3.5156C12.5778 3.5156 13.6596 3.69138 13.6596 3.69138V5.90621H12.4679C11.2939 5.90621 10.9277 6.60001 10.9277 7.31245V8.99994H13.5489L13.1299 11.6015H10.9277V17.8905C15.4459 17.2154 18.902 13.492 18.902 8.99994Z"/>
                  </svg>
                </a>
              </li>
              <?php endif; ?>


              <?php if($instagram): ?>
              <li class="nav-item">
                <a target="_blank" href="<?php echo $instagram; ?>" title="Instagram">
                  <!-- Instagram Icon -->
                  <svg width="19" height="18" viewBox="0 0 24 24">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069z"/>
                  </svg>
                </a>
              </li>
              <?php endif; ?>


              <?php if($linkedin): ?>
              <li class="nav-item">
                <a target="_blank" href="<?php echo $linkedin; ?>" title="LinkedIn">
                  <!-- LinkedIn Icon -->
                  <svg width="19" height="18" viewBox="0 0 19 18">
                    <path d="M17.5135 0H1.40624C0.634655 0 0.0107422 0.580074 0.0107422 1.29726V16.6991C0.0107422 17.4163 0.634655 17.9999 1.40624 17.9999H17.5135C18.2851 17.9999 18.9127 17.4163 18.9127 16.7026V1.29726C18.9127 0.580074 18.2851 0 17.5135 0Z"/>
                  </svg>
                </a>
              </li>
              <?php endif; ?>


              <li class="nav-item align-items-center d-flex ms-2">
                <form action="#" method="POST" class="language-control select-box">
                  <select onchange="actionTo(`<?php echo site_url('home/switch_language/') ?>${$(this).val()}`)" class="select-control form-select nice-select">

                    <?php
                    $languages = $this->crud_model->get_all_languages();
                    $selected_language = $this->session->userdata('language');

                    foreach ($languages as $language):
                    if (trim($language) != ""):
                    ?>

                    <option value="<?php echo strtolower($language); ?>" <?php if ($selected_language == $language): ?>selected<?php endif; ?>>
                      <?php echo ucwords($language);?>
                    </option>

                    <?php 
                    endif;
                    endforeach; 
                    ?>

                  </select>
                </form>
              </li>

            </ul>

          </div>
        </div>

      </div>
    </div>
  </div>
  <!---- Sub Header End ------>

  <section class="menubar">
    <?php include "header_lg_device.php"; ?>
    <?php include "header_sm_device.php"; ?>
  </section>

</header>
<!---------- Header Section End  ---------->