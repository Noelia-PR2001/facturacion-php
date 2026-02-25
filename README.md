#  🧾 Sistema Automatizado de Generación y Envío  de Facturas en PHP

## 📌 Introducción

La presente aplicación ha sido desarrollada con el objetivo de automatizar el proceso de generación y envío de facturas digitales en formato PDF.

El sistema permite que, a través de un formulario web, el usuario introduzca los datos necesarios para generar una factura estructurada profesionalmente. Posteriormente, la aplicación procesa la información, genera un documento en formato PDF y lo envía automáticamente por correo electrónico al cliente.

Esta solución está orientada a mejorar la eficiencia administrativa, reducir errores humanos y optimizar el flujo de trabajo en la gestión de facturación.


## 🎯 Objetivos del sistema

* Automatizar la generación de facturas digitales.
* Reducir errores manuales en cálculos.
* Generar documentos PDF con formato profesional.
* Enviar facturas automáticamente por correo electronico.
* Optimizar el proceso administrativo.

## 🔄Flujo de Funcionamiento

1. El usuario introduce los datos en el formulario.
2. El sistema lo procesa y valida la información recibida.
3. Se genera dinámicamente documento en formato HTML.
4. El documento HTML se convierte en PDF mediante HTML2PDF.
5. EL PDF se envía automáticamente por correo electronico al cliente.

## 🖼️Vista del sistema

A continuación se muestra la interfaz principal del sistema donde el usuario introduce los datos necesarios para la generación de la factura:

![Formulario de generación de factura](Formulario.png)

## 🔗Librerias Utilizadas

El proyecto utiliza las siguientes tecnologías:

**PHP** → Lógica del lado del servidor.

**HTML5** → Estructura del documento.
 
**CSS** → Diseño y presentación visual.

**Composer** → Gestión de dependencias.

**HTML2PDF** → Converión de HTML a PDF.

**PHPMailer** → Envío de correos electrónicos mediante SMTP.


Puede consultar el código completo del proyecto en el siguiente repositorio oficial:

Repositorio de facturacion-php:

https://github.com/Noelia-PR2001/facturacion-php.



## 📂 Estructura del proyecto

| Archivo | Función |
|----------|----------|
| index.php | Formulario principal de entrada de datos|
| bill.php | Procesamiento de información y cálculos |
| generar_pdf.php | Generación del documento PDF |
| mail.php | Gestión de envío del correo electrónico|
| css.css | Definición de diseño visual |
|composer.json| Definición de dependencias externas|
|composer.lock| Control de versiones de dependencia|

## 🚀 Instalación y Configuración

Para ejecutar correctamente el proyecto en un entorno local, siga los siguientes pasos:

## 1️⃣ Requisitos previos

* XAMPP o servidor local compatible con PHP.
* PHP versión 7.4 o superior.
* Composer instalado en el sistema.

## 2️⃣ Descargar el Proyecto
Clonar el repositorio mediante este comando: 

git clone https://github.com/Noelia-PR2001/facturacion-php.git

También puede descargarse como archivo ZIP desde GitHub.

## 3️⃣ Instalar Dependencias

Ejecutar el siguiente comando dentro de la carpeta raíz del proyecto:
`composer install`
`composer require spipu/html2pdf`
`composer require phpmailer/phpmailer`

Este comando instalará automáticamente las librerías necesarias (DomPDF y PHPMailer) y generará la carpeta `vendor`.

## 4️⃣ Configurar el Servidor Local 
Colocar la carpeta del proyecto dentro del directorio:

C:\xampp\htdocs\

Iniciar Apache desde el panel de control de XAMPP.

## 5️⃣ Configuración del Servicio de Correo

Editar el archivo `mail.php` e introducir las credenciales SMTP correspondientes:

* Host SMTP
* Usuario
* Contraseña
* Puerto
* Tipo de cifrado (TLS/SSL)

## 6️⃣ Ejecutar el Proyecto

Abrir el navegador y acceder a:

http://localhost/proyecto_factura/

## 🔒 Seguridad
* No se incluyen credenciales sensibles en el repositorio.
* Se recomienda utilizar variables de entorno en producción. 
* Envío SMTP debe realizarse mediante conexión segura (TLS/SSL).
 ## 👨‍💻 Autor
 Noelia Parra Rodriguez.

 Proyecto desarrollado con fines formativos y aplicación profesional.
