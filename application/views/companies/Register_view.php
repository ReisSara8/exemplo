<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="file.js"></script>
	<title>Register</title>
</head>
<body>

	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>">CI App</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li ><a href="<?php echo base_url('users/index');?>">Home<span class="sr-only"></span></a></li>
        <li class="active"><a href="<?php echo base_url();?>companies/index>">Register Company<span class="sr-only"></span></a></li>
      </ul>
     </li>
    </ul> 

      </ul>
     </li>
    </ul>
   </div>
  </div>
 </nav>      

<form class="form-horizontal">
<fieldset>
	<legend>
  <div class="form-group">
    <label class="control-label col-sm-2" for="cnpj">CNPJ:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="cnpj" placeholder="Enter CNPJ">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="fantasy_name">Name:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="fantasy_name" placeholder="Enter Name">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="email" placeholder="Enter Email">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="phone">Phone:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="phone" placeholder="Enter Phone">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="cep">CEP:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="cep" placeholder="Enter CEP">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="street">Street:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="street" placeholder="Enter Street">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="Complement">Complement:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="complement" placeholder="Enter Complement">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="number">Number:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="number" placeholder="Enter Number">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="neigborhood">Neigborhood:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="neigborhood" placeholder="Enter Neigborhood" align="center">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="city">City:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="city" placeholder="Enter City" align="left">
    </div>
  </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="state">State:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" id="state" placeholder="Enter State" align="left">
    </div>
  </div>
</legend>
</fieldset>
</form>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Register</button>
    </div>
  </div>
  </div>
</form>
</body>
</html>