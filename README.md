#  📩 Proyecto Factura – Generador y Envío Automático

## 📌 ¿Qué es este proyecto?
En este proyecto he creado una pequeña aplicacion que permite generar una factura automáticamente a partir de un formulario.

La idea es sencilla: 

1. Formulario.
2. Se genera la factura .
3. Se convierte en PDF.
4. Se envía por email al cliente. 

Con esto se evita tener que hacer facturas manualmente una por una.


## 🎯 ¿Qué he hecho exactamente?
El sistema permite:

* Rellenar los datos del cliente desde el formulario.
* Calcular automáticamente importes.
* Generar una factura.
* Crear un PDF con esa factura.
* Enviarlo directamente al correo del cliente.

Todo el proceso se hace de forma automática.

## 🛠 ¿Cómo lo he construido?
He dividido el proyecto en varias partes para que cada una tenga una función concreta:

* `index.php`: Es el formulario donde se introducen los datos.   
* `bill.php`: Procesa la información y hace cálculos.
* `generar_pdf.php`: Convierte la factura en PDF.
* `mail.php`: Envía el PDF por correo electrónico.

Para convertir el HTML en PDF he usado una librería llamada HTML2PDF. 

Para enviar el correo he utilizado PHPMailer.

## 🖼️  Vista del Formulario

Aqui se puede ver el formulario principal donde se introducen datos:

![Email](tarjeta.png)

## 💬 Mi experiencia haciendo este proyecto
Este proyecto me ha parecido más completo que los anteriores porque tiene varias partes conectadas entre sí.

He aprendido cómo se comunican distintos archivos en PHP y cómo pasar información de uno a otro.

También he entendido mejor cómo funciona el envío de correos mediante SMTP y cómo generar archivos PDF automáticamente a partir de un HTML.

Al principio fue un poco lioso, porque HTML2PDF no permitia etiquetas: div, main, flex, grid ni CSS muy modernos, pero cuando entendi como organizar todo el flujo, entendí como funciona:

1. Formulario.
2. Proceso.
3. PDF.
4. Email.

## 👨‍💻 Autora
Noelia Parra Rodríguez.
Practicas en onsistems.
