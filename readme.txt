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

====================================
 Factura - Nombres de los campos
====================================
==> Cabecera
1	Fecha de Emisión : 
2	vacío : 
3	Apellidos y nombres, denominación o razón social del EMISOR : 
4	Nombre comercial, si lo tuviere : 
5	Domicilio fiscal : 
6	Número de RUC : 
7	Tipo de documento : 
8	Numeración, conformada por serie y número correlativo : 
9	Tipo y número de documento del ADQUIRIENTE o USUARIO : 
10	Apellidos y nombres, denominación o razón social : 
11	Total valor de venta - operaciones gravadas : 
12	Total valor de venta - operaciones inafectas : 
13	Total valor de venta - operaciones exoneradas : 
14	Sumatoria IGV : 
15	Sumatoria ISC : 
16	Sumatoria otros tributos : 
17	Sumatoria otros Cargos : 
18	Total descuentos : 
19	Importe total de la venta, cesión en uso o del servicio prestado : 
20	Tipo de moneda en la cual se emite la factura electrónica : 
21	Tipo y número de la guía de remisión relacionada con la operación que se factura : 
22	Tipo y número de otro documento y código relacionado con la operación que se factura : 
23	Leyendas : 
24	Importe de la percepción en moneda nacional : 
25	Versión del UBL : 
26	Versión de la estructura del documento : 
27	Valor referencial del servicio de transporte de bienes realizado por vía terrestre, determinado de conformidad con lo dispuesto en el DS N°010- 2006-MTC, que aprobó la Tabla de Valores Referenciales para la aplicación del Sistema al servicio de transporte de bienes realizado por vía terrestre : 
28	Nombre y matrícula de la embarcación pesquera utilizada para efectuar la extracción y descarga de los bienes vendidos, en los casos que se hubiera utilizado dicho medio : 
29	Descripción del tipo y cantidad de la especie vendida : 
30	Lugar de la descarga : 
31	Fecha de la descarga : 
32	Numero de registro MTC : 
33	Configuracion vehicular : 
34	Punto de origen : 
35	Punto de destino : 
36	Valor referencial preliminar : 
37	Fecha de consumo : 
38	Total Valor de Venta - Operaciones gratuitas : 
39	Descuentos Globales : 
40	Descuentos por item : 
41	vacío : 
42	vacío : 
43	vacío : 
44	por definir : 
45	por definir : 
46	vacío : 
47	Dirección del usuario o adquiriente : 
48	Email del usuario o adquiriente : 
49	tipo de cambio : 

==> Item
1	Unidad de medida por ítem : 
2	Cantidad de unidades por ítem : 
3	Descripción detallada del servicio prestado, bien vendido o cedido en uso, indicando las características. : 
4	Valor unitario por ítem : 
5	Precio de venta unitario por item y código : 
6	Afectación al IGV por ítem : 
7	Sistema de ISC por ítem : 
8	Valor de venta por ítem : 
9	Número de orden del Ítem : 
10	Código de producto : 
11	Valor referencial unitario por ítem en operaciones no onerosas y código : 

====================================
 Boleta - Nombres de los campos
====================================
==> Cabecera
1	Fecha de Emisión : 
2	Apellidos y nombres, denominación o razón social : 
3	Nombre Comercial : 
4	Domicilio fiscal : 
5	Número de RUC : 
6	Tipo de documento : 
7	Numeración, conformada por serie y número correlativo : 
8	Tipo y número de documento del adquirente o usuario : 
9	Apellidos y nombres del adquirente o usuario : 
10	Dirección en el país del adquiriente o lugar de destino : 
11	Total valor de venta - operaciones gravadas : 
12	Total valor de venta - operaciones inafectas : 
13	Total valor de venta - operaciones exoneradas : 
14	Sumatoria IGV : 
15	Sumatoria ISC : 
16	Sumatoria otros tributos : 
17	Sumatoria otros Cargos : 
18	Total descuentos : 
19	Importe total de la venta, cesión en uso o del servicio prestado : 
20	Tipo de moneda en la cual se emite la boleta de venta electrónica : 
21	Tipo y número de la guía de remisión relacionada con la operación : 
22	Leyendas : 
23	Importe de la percepción en moneda nacional : 
24	Tipo y número de otro documento y código relacionado con la operación : 
25	Versión del UBL : 
26	Versión de la estructura del documento : 
27	Importe de la percepción en moneda nacional : 
28	Total Valor de Venta - Operaciones gratuitas : 
29	Descuentos Globales : 
30	Descuentos por item : 
31	vacío : 
32	por definir : 
33	vacío : 
34	vacío : 
35	tipo de cambio : 

=========================================
 Nota de Crédito - Nombres de los campos
=========================================
==> Cabecera
1	Fecha de  Emisión : 
2	vacío : 
3	Apellidos y nombres, denominación o razón social : 
4	Nombre Comercial : 
5	Domicilio Fiscal : 
6	Numero de RUC : 
7	Codigo del tipo de nota de credito electronica : 
8	Numeracion, conformada por serie y numero correlativo : 
9	Tipo y numero de documento de identidad del adquiriente o usuario : 
10	Apelidos y Nombres o denominación o razon social del adquiriente o usuario : 
11	Motivo o sustento : 
12	Total valor de venta - operaciones gravadas : 
13	Total valor de venta - operaciones inafectas : 
14	Total valor de venta - operaciones exoneradas : 
15	Sumatoria IGV : 
16	Sumatoria ISC : 
17	Sumatoria otros tributos : 
18	Sumatoria otros Cargos : 
19	Total descuentos : 
20	Importe total : 
21	Tipo de moneda en la cual se emite la nota de credito electronica : 
22	Serie y numero del documento que modifica : 
23	Tipo de documento del documento que modifica : 
24	Documento de referencia - Guia de remision : 
25	Documento de referencia - otros documentos relacionados : 
26	Version del UBL : 
27	Version de la estructura del documento : 
28	Orden de Compra : 
29	Condiciones de Pago : 
30	Fecha de Vencimiento : 
31	Monto en Letras : 
32	Observación : 
33	Dirección del Cliente : 
34	Correo del cliente : 
35	Tipo de cambio : 

==> Item
1	Unidad de medida por item : 
2	Cantidad de unidades por item : 
3	Codigo del producto : 
4	Descripcion detallada del servicio prestado, bien vendido o cedido en uso indicando las caracteristicas : 
5	Valor unitario por item : 
6	Precio de venta unitario por item y codigo : 
7	Afectacion al IGV por item : 
8	Sistema de ISC Por Item : 
9	Valor de Venta por Item : 
10	Numero de orden del item : 
11	Valor referencial unitario por item en operaciones no onerosas y codigo : 
