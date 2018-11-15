<?php echo form_open_multipart('Barang/update');
    echo form_hidden('id_barang', $this->uri->segment(3));?>
    <?php echo @$error;?>
	<?php $this->load->view($form)?>
<?php echo form_close(); ?>