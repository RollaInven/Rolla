<?php echo form_open_multipart('BarangKeluar/insertKeluar');?>
    <?php echo @$error;?>
        <?php $this->load->view($form)?>
<?php echo form_close(); ?>