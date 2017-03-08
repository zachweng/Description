<?php $this->load->view('/templates/header'); ?>

<h1   style="text-align:center;"> This is signin page </h1>

<?php echo form_open(); ?>

<div>
<?php echo form_error('username', ''); ?>
<label for="username">username</label>
<?php echo form_input('username', ''); ?>
</div>


<div>
<?php echo form_error('password', ''); ?>
<label for="password">password</label>
<?php echo form_input('password', ''); ?>
</div>

<div>
<?php echo form_submit('submit', 'submit'); ?>
</div>

<?php echo form_close(); ?>



<?php $this->load->view('/templates/footer'); ?>