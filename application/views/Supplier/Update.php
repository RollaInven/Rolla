<?php echo form_open_multipart('Supplier/update');
    echo form_hidden('id_supplier', $this->uri->segment(3));?>
    <?php echo @$error;?>
	<?php $this->load->view($form)?>
<?php echo form_close(); ?>