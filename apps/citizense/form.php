<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
        
        <title>Publicar</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        
    </head>
    <body>
    
    <div class="col-md-8" style="background: #c0c0c0; border-radius: 5px; margin: 2%; padding: 2%;">
    
    <form action="send.php" method="POST">
        
        <label for="pregunta1" >¿Como califica la respuesta al peligro?</label>
            
	        <select class="form-control" name="lugar" required="">
	            <option value="">Selecione calificación</option>
	            <option value="1">excelente</option>
	            <option value="2">regular</option>
	            <option value="3">malo</option>
	        </select>
	        
	        <label for="pregunta2" >¿Cual ha sido el beneficio que le permite la atención?</label>
            
	        <select class="form-control" name="lugar" required="">
	            <option value="">Selecione calificación</option>
	            <option value="1">Seguridad</option>
	            <option value="2">Buen servicio</option>
	            <option value="3">Ninguna</option>
	        </select>


        <input type="email" name="email" placeholder="digite su Correo electrónico" class="form-control" required="">

	<input type="reset" class="btn btn-default" value="Reset">
	<input type="submit" class="btn btn-primary" value="Submit">
    
    </div>
        
        
        </form>
    </body>
</html>