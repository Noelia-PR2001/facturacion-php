<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Nueva Factura</title>

<style>
body{
    font-family: Arial, sans-serif;
    background:#f3f3f3;
    padding:40px;
}

.container{
    background:white;
    padding:30px;
    max-width:750px;
    margin:auto;
    border-radius:6px;
}

h2{
    color:#5b3fa6;
}

label{
    display:block;
    margin-top:15px;
    font-weight:bold;
}

input{
    width:100%;
    padding:8px;
    margin-top:5px;
}

.row{
    display:flex;
    gap:15px;
}

.row div{
    flex:1;
}

button{
    margin-top:25px;
    padding:10px 20px;
    background:#5b3fa6;
    color:white;
    border:none;
    cursor:pointer;
}
</style>
</head>

<body>

<div class="container">

<h2>Nueva Factura</h2>

<form action="mail.php" method="POST">

<label>Cliente</label>
<input type="text" name="cliente" required>

<label>NIF</label>
<input type="text" name="nif" required>

<label>Dirección</label>
<input type="text" name="direccion" required>

<label>Fecha de emisión</label>
<input type="date" name="fecha_emision" required>

<h3>Artículo 1</h3>
<div class="row">
<div>
<label>Precio</label>
<input type="number" step="0.01" name="precio1" required>
</div>

<div>
<label>Cantidad</label>
<input type="number" name="cantidad1" required>
</div>
</div>

<h3>Artículo 2</h3>
<div class="row">
<div>
<label>Precio</label>
<input type="number" step="0.01" name="precio2">
</div>

<div>
<label>Cantidad</label>
<input type="number" name="cantidad2">
</div>
</div>

<button type="submit">Generar Factura</button>

</form>

</div>
</body>
</html>
