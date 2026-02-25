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
    font-size: 12px;
    color:#555;
}

table{
    border-collapse: collapse;
}

td, th{
    vertical-align: top;
}

.barra{
    height:6px;
    background:#5b3fa6;
    margin-bottom:15px;
}

.titulo{
    font-size:26px;
    color:#5b3fa6;
    margin:0;
}

.fecha{
    color:#e23b8e;
    font-weight:bold;
}

.linea{
    border-top:1px solid #ccc;
    margin:15px 0;
}

.tabla-factura th{
    border-bottom:2px solid #5b3fa6;
    color:#5b3fa6;
    padding:6px;
}

.tabla-factura td{
    padding:6px;
}

.total-final{
    font-size:22px;
    color:#e23b8e;
    font-weight:bold;
}
</style>

<div class="barra"></div>

<table>
<tr>
<td style="width:130mm;">
<span style="font-size:18px;color:#5b3fa6;font-weight:bold;">
Ovidiu Silviu Muresan
</span>
</td>
<td style="width:50mm;" align="right">
<img src="Logo.jpg" width="80">
</td>
</tr>
</table>

<br>

<h1 class="titulo">Factura</h1>
<p class="fecha">Fecha: <?=date('d/m/Y', strtotime($fecha_emision)) ?></p>

<div class="linea"></div>

<table>
<tr>
<td style="width:63mm;">
<b>A la atención de</b><br><br>
<?=htmlspecialchars($cliente)?><br>
<?=htmlspecialchars($nif)?><br>
<?=htmlspecialchars($direccion)?>
</td>

<td style="width:63mm;">
<b>Pagar a</b><br><br>
Ovidiu Muresan
</td>

<td style="width:54mm;">
<b>Fecha vencimiento</b><br><br>
<?=date('d/m/Y', strtotime($fecha_vencimiento)) ?>
</td>
</tr>
</table>

<div class="linea"></div>

<table class="tabla-factura">

<tr>
<th style="width:75mm;" align="left">Descripción</th>
<th style="width:25mm;" align="center">Cantidad</th>
<th style="width:35mm;" align="right">Precio</th>
<th style="width:35mm;" align="right">Total</th>
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

<table>
<tr>
<td style="width:110mm;" valign="top">
<b>Notas:</b><br>
Transferencia<br>
<span style="color:#e23b8e;font-weight:bold;">
ES96 2100 3607 5322 0062 7465
</span><br>
Pago en 30 días.
</td>

<td style="width:60mm;" valign="top">

<table>
<tr>
<td style="width:30mm;">Base</td>
<td style="width:30mm;" align="right"><?=number_format($base,2)?> €</td>
</tr>
<tr>
<td>IVA(21%)</td>
<td align="right"><?=number_format($iva,2)?> €</td>
</tr>
<tr>
<td>IRPF(15%)</td>
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