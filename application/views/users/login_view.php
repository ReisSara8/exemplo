<?php if($this->session->userdata('logged_in')); ?>

<h2>Logout</h2>

<?php echo form_open('users/logout'); ?>

<?php

	$data = array(

	'class' => 'btn btn-primary',
	'name'  => 'submit',
	'value' => 'Logout'

	);

?>

<?php echo form_submit($data); ?>

<?php echo form_close(); ?>

<?php echo "Logout" ?>

<h2>Login form</h2>

<?php $attributes = array('id' => 'login_form', 'class' =>'form_horizontal')  ?>

<?php if($this->session->flashdata('errors')); ?>

<?php echo $this->session->flashdata('errors'); ?>

<?php echo form_open('users/login', $attributes); ?>

<div class="form-group">

<?php echo form_label('Username'); ?>

<?php $data = array(
	'class'        => 'form-control',
	'name'         => 'username',
	'placeholder'  => 'Enter Username'	

	);

?>

<?php echo form_input($data); ?>

</div>

<div class="form-group">

<?php echo form_label('Password'); ?>

<?php $data = array(
	'class'        => 'form-control',
	'name'         => 'password',
	'placeholder'  => 'Enter Password'	

	);

?>

<?php echo form_password($data); ?>

</div>

<div class="form-group">

<?php echo form_label('Confirm Password'); ?>

<?php 

	$data = array(

	'class'        => 'form-control',
	'name'         => 'confirm_password',
	'placeholder'  => 'Confirm Password'

	);

 ?>

 <?php echo form_password($data); ?>

</div>

<div>
	
<div class="form-group">

<?php 

	$data = array(

	'class' => 'btn btn-primary',
	'name'  => 'submit',
	'value' => 'Login'

	);

 ?>	

 <div id='err_msg' style='display: none'>  
                <div id='content_result'>  
                <div id='err_show' class="w3-text-red">  
                <div id='msg'> </div>

<?php echo form_submit($data); ?>

</div>

<?php echo form_close(); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>  
        <script type="text/javascript">  
 
        $(document).ready(function(){  
        $("#submit").click(function(){  
        var username = $("#username").val();  
        var password = $("#password").val();  
        
        if(username==''||password=='')  
        {  
        jQuery("div#err_msg").show();  
        jQuery("div#msg").html("The fields can't be empty!");  
        }  
        else  
        {    
        $.ajax({  
        type: "POST",  
        url:  "<?php echo base_url(); ?>" + "login/check_login",  
        data: {username: name, password: password},  
        cache: false,  
        success: function(result){  
            if(result!=0){  
            window.location.replace(result);
            window.location.replace('<?php echo base_url(); ?>" + "companies/register_view');  
            }  
            else  
                jQuery("div#err_msg").show();  
                jQuery("div#msg").html("Login Failed");  
        }  
        });  
        }  
        return false;  
        });  
        });  
        </script>  