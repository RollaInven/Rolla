<?php echo form_open_multipart('Barang/insert');?>
    <?php echo @$error;?>
        <?php $this->load->view($form)?>
<?php echo form_close(); ?>