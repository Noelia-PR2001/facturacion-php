<?php

$fecha_emision = $_POST['fecha_emision'] ?? date('Y-m-d');
$fecha_vencimiento = date('Y-m-d', strtotime($fecha_emision . ' +30 days'));

$cliente   = $_POST['cliente'] ?? '';
$nif       = $_POST['nif'] ?? '';
$direccion = $_POST['direccion'] ?? '';

$precio1   = floatval($_POST['precio1'] ?? 0);
$cantidad1 = floatval($_POST['cantidad1'] ?? 0);

$precio2   = floatval($_POST['precio2'] ?? 0);
$cantidad2 = floatval($_POST['cantidad2'] ?? 0);

$base1 = $precio1 * $cantidad1;
$base2 = $precio2 * $cantidad2;
$base  = $base1 + $base2;

$iva   = $base * 0.21;
$irpf  = $base * 0.15;
$total = $base + $iva - $irpf;
?>

<style>
body{
    font-family: Arial;
    color:#555;
    font-size:13px;
    margin:0;
    padding:20px;
}

.contenedor-factura {
    max-width: 800px; 
    margin: 0 auto;   
    background: white;
    padding: 20px;
}


.barra-superior{
    height:8px;
    background:#5b3fa6;
    margin-bottom:40px;
}

.titulo-grande{
    font-size:60px;
    color:#5b3fa6;
    margin:0;
}

.fecha{
    color:#e23b8e;
    font-weight:bold;
    font-size:18px;
}

.tabla-factura{
    width:100%;
    border-collapse:collapse;
    margin-top:40px;
}

.tabla-factura th{
    color:#5b3fa6;
    text-align:left;
    padding-bottom:15px;
}

.tabla-factura td{
    padding:12px 0;
}

.tabla-factura tr:nth-child(even){
    background:#f3f3f3;
}

.linea{
    border-top:1px solid #dcdcdc;
    margin:40px 0;
}

.total-final{
    font-size:30px;
    color:#e23b8e;
    font-weight:bold;
}
</style>

<div class="barra-superior"></div>


<table width="100%">
<tr>
<td width="70%">
    <span style="font-size:34px;color:#5b3fa6;font-weight:bold;">
        Ovidiu Silviu Muresan
    </span>
</td>

<td width="30%" align="right">
    <img src="Logo.jpg" width="120">
</td>
</tr>
</table>

<br>

<h1 class="titulo-grande">Factura</h1>
<p class="fecha">Fecha: <?=date('d/m/Y', strtotime($fecha_emision)) ?></p>

<br><br>


<table width="100%">
<tr>
<td width="33%">
<b>A la atención de</b><br><br>
<?=htmlspecialchars($cliente)?><br>
<?=htmlspecialchars($nif)?><br>
<?=htmlspecialchars($direccion)?>
</td>

<td width="33%">
<b>Pagar a</b><br><br>
Ovidiu Muresan
</td>

<td width="33%">
<b>Fecha de vencimiento</b><br><br>
<?=date('d/m/Y', strtotime($fecha_vencimiento)) ?>
</td>
</tr>
</table>

<div class="linea"></div>


<table class="tabla-factura">
<tr>
<th width="40%">Descripción</th>
<th width="20%" align="center">Cantidad</th>
<th width="20%" align="right">Precio unitario</th>
<th width="20%" align="right">Precio total</th>
</tr>

<tr>
<td>Artículo 1</td>
<td align="center"><?=$cantidad1?></td>
<td align="right"><?=number_format($precio1,2)?> €</td>
<td align="right"><?=number_format($base1,2)?> €</td>
</tr>

<tr>
<td>Artículo 2</td>
<td align="center"><?=$cantidad2?></td>
<td align="right"><?=number_format($precio2,2)?> €</td>
<td align="right"><?=number_format($base2,2)?> €</td>
</tr>
</table>

<div class="linea"></div>


<table width="100%">
<tr>
<td width="60%">

<b>Notas:</b><br>
Forma de pago: Transferencia<br>
<span style="color:#e23b8e;font-weight:bold;">
ES96 2100 3607 5322 0062 7465
</span><br>
Pago en 30 días desde emisión.

</td>

<td width="40%" align="right">

<table width="100%">
<tr>
<td>Base Imponible</td>
<td align="right"><?=number_format($base,2)?> €</td>
</tr>

<tr>
<td>IVA (21%)</td>
<td align="right"><?=number_format($iva,2)?> €</td>
</tr>

<tr>
<td>IRPF (15%)</td>
<td align="right">-<?=number_format($irpf,2)?> €</td>
</tr>

<tr>
<td colspan="2" align="right" class="total-final">
<?=number_format($total,2)?> €
</td>
</tr>
</table>

</td>
</tr>
</table>