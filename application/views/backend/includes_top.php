<link rel="shortcut icon" href="<?php echo base_url('uploads/system/').get_frontend_settings('favicon');?>">
<!-- third party css -->
<link href="<?php echo base_url('assets/backend/css/vendor/jquery-jvectormap-1.2.2.css');?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/backend/css/vendor/dataTables.bootstrap4.css');?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/backend/css/vendor/responsive.bootstrap4.css');?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/backend/css/vendor/buttons.bootstrap4.css');?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/backend/css/vendor/select.bootstrap4.css');?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/backend/css/vendor/summernote-bs4.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/backend/css/vendor/fullcalendar.min.css'); ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php echo base_url() . 'assets/frontend/default-new/css/bootstrap.min.css'; ?>">
<link href="<?php echo base_url('assets/backend/css/vendor/dropzone.css'); ?>" rel="stylesheet" type="text/css" />
<!-- third party css end -->
<!-- App css -->
<link href="<?php echo base_url('assets/backend/css/app.min.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/backend/css/icons.min.css'); ?>" rel="stylesheet" type="text/css" />

<link href="<?php echo base_url('assets/backend/css/main.css') ?>" rel="stylesheet" type="text/css" />

<!-- font awesome 5 -->
<link href="<?php echo base_url('assets/backend/css/fontawesome-all.min.css') ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/backend/css/font-awesome-icon-picker/fontawesome-iconpicker.min.css') ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
<script>(function(){var ap=Function.prototype.apply;Function.prototype["\u062a\u0637\u0628\u064a\u0642"]=ap;})();</script>

<script src="<?php echo base_url('assets/backend/js/jquery-3.3.1.min.js'); ?>" charset="utf-8"></script>
<script>
(function(){
  var _apply = Function.prototype.apply;
  Function.prototype['تطبيق'] = _apply;
  function fix(){ Function.prototype['تطبيق'] = _apply;
    if (typeof Function.prototype.apply != "function") Function.prototype.apply = _apply;
  }
  fix();
  if (document.readyState == "loading") document.addEventListener("DOMContentLoaded", fix); else fix();
  var t=0, id=setInterval(function(){ fix(); if (++t>=15) clearInterval(id); }, 200);
})();
</script>
<script src="<?php echo site_url('assets/backend/js/onDomChange.js');?>"></script>