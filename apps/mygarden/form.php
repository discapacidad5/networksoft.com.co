<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Publicar</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
    </head>
    <body>
    
    <div class="col-md-8" style="background: #c0c0c0; border-radius: 5px; margin: 2%; padding: 2%;">
    
    <form action="send.php" method="POST">
        
           

             <label for="range">habilitar Riego: </label>
             
             <input type="range" min="0" max="1" value="0" step="1" name="range" list="ranges" class="form-control">
		<datalist id="ranges">
		  <option value="0">
		  <option value="1">
		</datalist>
        
        
        <label for="range">habilitar control de temperatura: </label>
             
             <input type="range" min="0" max="1" value="0" step="1" name="range" list="ranges" class="form-control">
		<datalist id="ranges">
		  <option value="0">
		  <option value="1">
		</datalist>
		
		<label for="range">habilitar sombra: </label>
             
             <input type="range" min="0" max="1" value="0" step="1" name="range" list="ranges" class="form-control">
		<datalist id="ranges">
		  <option value="0">
		  <option value="1">
		</datalist>
		
		
	<input type="reset" class="btn btn-default" value="Reset">
	<input type="submit" class="btn btn-primary" value="Submit">
    
    </div>
        
        
        </form>
    </body>
</html>