<script src="<?= base_url(JS . 'source.js') ?>"></script>
<script src="<?= base_url(JS . 'advanced.js') ?>"></script>
<!-- <script src="<?= base_url(JS . 'form_validation.js') ?>"></script> -->

<script type="text/javascript">
  <?php if ($this->session->flashdata('success')): ?>
      Swal.fire({
        type: 'success',
        title: '<?= $this->session->flashdata('success'); ?>',
      });
    <?php elseif ($this->session->flashdata('error')): ?>
      Swal.fire({
        type: 'error',
        title: '<?= $this->session->flashdata('error'); ?>',
      });
    <?php elseif ($this->session->flashdata('warning')): ?>
      Swal.fire({
        type: 'warning',
        title: '<?= $this->session->flashdata('warning'); ?>',
      });
  <?php endif ?>
</script>