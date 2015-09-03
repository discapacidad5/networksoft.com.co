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
        
            <input type="text" name="nombre" placeholder="Nombre de la publicación" class="form-control" required="">
            
	        <select class="form-control" name="tipo" required="">
	            <option value="">Selecione tipo de publicación</option>
	            <option value="Producto">Producto</option>
	            <option value="Servicio">Servicio</option>
	            <option value="Establecimento">Establecimento</option>
	            <option value="Oferta">Oferta</option>
	        </select>


        <input type="file" name="post" class="form-control" required="">

	<input type="reset" class="btn btn-default" value="Reset">
	<input type="submit" class="btn btn-primary" value="Submit">
    
    </div>
        
        
        </form>
    </body>
</html>