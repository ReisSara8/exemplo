<h2>Register</h2>

<?php $attributes = array('id' => 'register_form', 'class' =>'form_horizontal')  ?>

<?php echo validation_errors(); ?>

<?php echo form_open('companies/register', $attributes); ?>

<div class="form-group">

<?php echo form_label('CNPJ'); ?>	

<?php $data = array(
	'class'        => 'form-control',
	'name'         => 'cnpj',
	'placeholder'  => 'Enter CNPJ'	

	);

?>

<?php echo form_input($data); ?>

</div>

<div class="form-group">

<?php echo form_label('Name'); ?>

<?php 

	$data = array(
	'class'        => 'form-control',
	'name'         => 'fantasy_name',
	'placeholder'  => 'Enter Name'	

	);

?>

<?php echo form_input($data); ?>

</div>

<div class="form-group">

<?php echo form_label('Email'); ?>	

<?php $data = array(
	'class'        => 'form-control',
	'name'         => 'email',
	'placeholder'  => 'Enter Email'	

	);

?>

<?php echo form_input($data); ?>

</div>

<div class="form-group">

<?php echo form_label('Phone'); ?>

<?php $data = array(
	'class'        => 'form-control',
	'name'         => 'phone',
	'placeholder'  => 'Enter Phone'	

	);

?>

<?php echo form_input($data); ?>

</div>

<div class="form-group">

<?php echo form_label('Cep'); ?>

<?php $data = array(
	'class'        => 'form-control',
	'name'         => 'cep',
	'placeholder'  => 'Enter Cep'	

	);

?>

<?php echo form_input($data); ?>

</div>

<div class="form-group">

<?php echo form_label('Street'); ?>

<?php 

	$data = array(

		'class'        => 'form-control',
		'name'         => 'street',
		'placeholder'  => 'Enter street'

	);

 ?>

 <?php echo form_input($data); ?>

</div>

<div class="form-group">

<?php echo form_label('Complement'); ?>

<?php 

	$data = array(

		'class'        => 'form-control',
		'name'         => 'complement',
		'placeholder'  => 'Enter complement'

	);

 ?>

 <?php echo form_input($data); ?>

</div>

<div class="form-group">

<?php echo form_label('Number'); ?>

<?php 

	$data = array(

		'class'        => 'form-control',
		'name'         => 'number',
		'placeholder'  => 'Enter Number'

	);

 ?>

 <?php echo form_input($data); ?>

</div>

<div class="form-group">

<?php echo form_label('Neighborhood'); ?>

<?php 

	$data = array(

		'class'        => 'form-control',
		'name'         => 'neighborhood',
		'placeholder'  => 'Enter Neighborhood'

	);

 ?>

 <?php echo form_input($data); ?>

</div>

<div class="form-group">

<?php echo form_label('City'); ?>

<?php 

	$data = array(

		'class'        => 'form-control',
		'name'         => 'city',
		'placeholder'  => 'Enter City'

	);

 ?>

 <?php echo form_input($data); ?>

</div>

<div class="form-group">

<?php echo form_label('State'); ?>

<?php 

	$data = array(

		'class'        => 'form-control',
		'name'         => 'state',
		'placeholder'  => 'Enter State'

	);

 ?>

 <?php echo form_input($data); ?>

</div>

<div class="form-group">

<?php $data = array(
	'class'  => 	'btn btn-primary',
	'name'   => 	'submit',
	'value'  => 	'Register'	

	);

?>

<script type="text/javascript">
	$("#cnpj").focusout(function(){
		$.ajax({
			url: '/pasta/cnpj.php?cnpj='+$("#cnpj").val(),
			dataType: 'json',
			success: function(resposta){
				if(resposta.status == "ERROR"){
					alert(resposta.message + "\nPlease, try to write manually.");
					$("#post #name").focus().select();
					return false;
				}
				
				$("#post #name").val(resposta.nome);
				$("#post #fantasy").val(resposta.fantasy);
				$("#post #phone").val(resposta.telefone);
				$("#post #email").val(resposta.email);
				$("#post #street").val(resposta.logradouro);
				$("#post #complement").val(resposta.complemento);
				$("#post #neighborhood").val(resposta.bairro);
				$("#post #city").val(resposta.municipio);
				$("#post #state").val(resposta.uf);
				$("#post #cep").val(resposta.cep);
				$("#post #number").val(resposta.numero);
			}
		});
	});
</script>
</body>
</html>

<?php

 header("Content-Type: text/plain");

$cnpj = $_REQUEST["cnpj"];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://www.receitaws.com.br/v1/cnpj/".$cnpj); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
$retorno = curl_exec($ch); 
curl_close($ch); 

$retorno = json_decode($retorno); 
echo json_encode($retorno, JSON_PRETTY_PRINT);

?>

<?php echo form_submit($data); ?>

</div>