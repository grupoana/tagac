<?php
require_once "{$_SERVER['DOCUMENT_ROOT']}/src/trans/common.php";

// Definiciones de SEO
$seoTitle = 'TAGAC - Papel grado alimenticio';
$metaTitle = 'TAGAC - Soluciones en empaques alimenticios';
$metaDesc = 'Distribución de papel grado alimenticio a toda la república mexiana. Solicita tu cotización hoy mismo.';

// Sección Héroe
$heroTitle = 'Papel grado <br>alimenticio';
$heroSub = 'Papel blanco o impreso personalizado para envolver tortillas y alimentos';
$heroCTA = 'Contáctanos';

// Sección Edificación
$edifTitle = 'Ellos creen <span>en nosotros</span>';
$edifText = '<p class="fst-italic">¡Orgullosos proveedores de tortillerías!</p>
<p class="fst-italic">
Con una amplia experiencia en la industria y un compromiso con los más altos estándares de calidad, Tagac ofrece soluciones de papel personalizado para locales y restaurantes, adaptadas a las necesidades específicas de cada negocio. Nuestro papel garantiza la integridad de los productos alimenticios, proporcionando una presentación impecable y respetando los más altos estándares de higiene. 
</p>
<p class="fst-italic">
Al elegirnos como proveedores, puedes confiar en nuestra capacidad para ofrecer productos confiables, entregas puntuales y atención al cliente excepcional. Estamos comprometidos a brindarle a nuestros clientes la misma calidad y excelencia que nos ha convertido en socios de confianza de las tortillerías de México.
</p>
<p class="fst-italic">
Confía en nosotros para proporcionarte el papel grado alimenticio de primera calidad que tu negocio merece. ¡Permítenos ayudarte a destacar y ofrecer una experiencia inigualable a tus clientes!
</p>';
$edifImg = 'src/img/papel-envolver.jpeg';
$edifCTA = 'Contáctanos';

// Sección Nosotros
$aboutTitle = 'Nosotros';
$aboutSub = '¿Por qué <span>elegir</span> a Tagac?';
$aboutText = '<p class="fst-italic">
  Nos distinguimos por brindar una atención personalizada y un servicio de calidad excepcional. Reconocemos que cada cliente es único y valoramos sus necesidades individuales. Contamos con un profundo conocimiento en la industria de la masa y la tortilla, lo cual nos permite entender a la perfección tus desafíos y ofrecerte soluciones a medida.
</p>
<p class="fst-italic">
  Nuestro objetivo es ayudarte a prosperar en tu negocio; por eso estamos preparados para proporcionarte las mejores soluciones que cubrirán todos tus requerimientos operativos. Ya sea que necesites optimizar tus procesos de producción, mejorar la eficiencia energética, implementar sistemas de control de calidad o cualquier otra necesidad específica, nuestro equipo de expertos está listo para acompañarte en cada paso del camino.
</p>
<ul>
  <li><i class="bi bi-check2-all"></i> Somos una empresa comprometida con tu éxito. </li>
  <li><i class="bi bi-check2-all"></i> Nuestro enfoque personalizado, conocimientos profundos en la industria y atención a las normas de sanidad nos convierten en tu socio confiable para optimizar tu operación diaria.</li>
  <li><i class="bi bi-check2-all"></i> Estamos listos para ser parte de tu camino hacia el crecimiento y el cumplimiento de tus metas.</li>
</ul>
<p>
  ¡Contáctanos hoy mismo y descubre cómo podemos ayudarte a llevar tu negocio al siguiente nivel!
</p>';
$aboutImg = 'src/img/Papel\ alimenticio.png';
$aboutCTA = '¡Ordena aquí!';
$aboutPhone = $dataPhoneStr;

// Sección Llamada a la Acción
$ctaTitle = 'Solicita cotización';
$ctaSub = 'Uno de nuestros expertos te contestara en breve para hacer una cotización a tu medida';
$ctaBtn = 'Contacto';

//Sección Productos
$prodTitle = 'Productos';
$prodSub = 'Nuestos <span>más importantes</span> productos';

$products[1]['title'] = 'Papel blanco';
$products[1]['sub'] = 'Papel para envolver tortilla, resistente a la humedad y duradero.';
$products[1]['img'] = 'src/img/papelga.webp';

$products[2]['title'] = 'Papel personalizado';
$products[2]['sub'] = 'Complementa tu imagen envolviendo los alimentos con papel diseñado para tu marca.';
$products[2]['img'] = 'src/img/PGA.jpg';

$products[3]['title'] = 'Papel Kraft';
$products[3]['sub'] = 'Este tipo de papel de estraza o madera de color marrón, muy resistente y que presenta una superficie gruesa y rugosa.';
$products[3]['img'] = 'src/img/papel-kraft.webp';

$products[4]['title'] = 'Papel Revolución';
$products[4]['sub'] = 'Se puede usar para realizar manteletas en restaurantes, volantes, revistas, folletos, etc.';
$products[4]['img'] = 'src/img/PAPEL-REVOLUCION.jpeg';

//Sección Empaque
$packTitle = 'Empaque';
$packSub= 'Te compartimos <span>nuestro nuevo</span> producto';

// Sección Envíos
$shipTitle = 'Cobertura';
$shipSub = 'Distribuimos a toda la república mexicana';
$shipImg = 'src/img/mapa-republica2.png';
$shipImgAlt = 'Cobertura de envíos a toda la república mexicana';
$shipPoints = '<ul class="col-lg-4 distribution">
<li><i class="bi bi-check2-all"></i> Distribución nacional. </li>
<li><i class="bi bi-check2-all"></i> Experiencia en abasto eficiente.</li>
<li><i class="bi bi-check2-all"></i> Servicio personalizado.</li>
</ul>';

// Sección Contacto
$contTitle = 'Contáctanos';
$contSub = 'Trabajemos juntos';
$contAddress = 'Dirección';
$contPhone = 'Contáctanos';
$contEmail = 'Correo';
$contHours = 'Horario';