<?php echo form_open_multipart('Simpan/update');
    echo form_hidden('id_simpan', $this->uri->segment(3));?>
    <?php echo @$error;?>
	<?php $this->load->view($form)?>
<?php echo form_close(); ?>