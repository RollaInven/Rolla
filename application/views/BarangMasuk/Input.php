<?php echo form_open_multipart('BarangMasuk/insertMasuk');?>
    <?php echo @$error;?>
        <?php $this->load->view($form)?>
<?php echo form_close(); ?>