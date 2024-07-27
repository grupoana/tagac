<?php
require_once "{$_SERVER['DOCUMENT_ROOT']}/src/common/contact-data.php";

// Barra de menú
$menuHome = 'Inicio';
$menuAbout = 'Nosotros';
$menuProducts = 'Productos';
$menuShipping = 'Cobertura';
$menuBlog = 'Blog';
$menuContact = 'Contacto';

$submenuProducts[1]['title'] = 'Papel grado alimenticio';
$submenuProducts[1]['href'] = '#productos';
$submenuProducts[2]['title'] = 'Empaque';
$submenuProducts[2]['href'] = '#empaques';

// Pie de página
$footAddress = 'Dirección';
$footContact = 'Contáctanos';
$footHours = 'Horario';
$footPhone = 'Teléfono:';
$footEmail = 'Correo:';
$footRights = '&copy; Copyright <strong><span>TAGAC</span></strong>. Todos los derechos reservados.';