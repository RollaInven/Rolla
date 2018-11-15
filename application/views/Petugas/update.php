<?php echo form_open('Petugas/Update');
    echo form_hidden('username', $this->uri->segment(3));?>
	<?php $this->load->view($form)?>
<?php echo form_close(); ?>