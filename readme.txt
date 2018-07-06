==================
 PHP:
==================
Probando nota de credito:
1. creando una boleta:
php send.php 20509075205-03-BB11-00000002.txt boleta

2. generando la nota de credito para esa boleta
php send.php 20509075205-07-BB11-00000001.txt notacredito


Probando nota de debito
1. generando la boleta:
php send.php 20509075205-03-BB11-00000002.txt boleta

2. generando la nora de debito para esa boleta:
php send.php 20509075205-08-BB11-00000001.txt notadebito


Otra prueba de nota de debito
1. generando la boleta
php send.php 20509075205-03-BB11-00000003.txt boleta

2. generando la nota de debito para esa boleta
php send.php 20509075205-08-BB11-00000002.txt notadebito


Resúmen diario:
php send.php  20524719585-RC-20171001-1.txt resumendiario


Comunicación de baja:
php send.php 20524719585-RA-20161001-1.txt comunicacionbaja


==================
 Nodejs
==================

Pimero se debe tener instalado el nodejs (https://nodejs.org/en/) , luego los paquetes que se necesitan ( npm install )

Probando una factura
node send.js 20509075205-01-FF11-00000001.txt factura

