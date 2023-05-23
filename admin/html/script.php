
<!-- model -->
      <div class="modal fade" id="perfil" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <!-- model ajax -->
          <div class="ajax-modal modal-content">

          </div>
        </div>
      </div><!-- End Vertically centered Modal-->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<?php
function import_ajax($ajax_url){
    require($ajax_url);
}
?>
<!-- Vendor JS Files -->
<script src="<?php echo $link ?>/NiceAdmin/assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="<?php echo $link ?>/NiceAdmin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $link ?>/NiceAdmin/assets/vendor/chart.js/chart.umd.js"></script>
<script src="<?php echo $link ?>/NiceAdmin/assets/vendor/echarts/echarts.min.js"></script>
<script src="<?php echo $link ?>/NiceAdmin/assets/vendor/quill/quill.min.js"></script>
<script src="<?php echo $link ?>/NiceAdmin/assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="<?php echo $link ?>/NiceAdmin/assets/vendor/tinymce/tinymce.min.js"></script>
<script src="<?php echo $link ?>/NiceAdmin/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?php echo $link ?>/NiceAdmin/assets/js/main.js"></script>
<script src="<?php echo $link ?>/NiceAdmin/util/ajax/ajax.php"></script>

