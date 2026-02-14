<?php
// Heading
$_['heading_title']            = 'Playful Sparkle - Google Product Review Feed';
$_['heading_integrations']     = 'Integraciones';
$_['heading_authentication']   = 'Autenticación';
$_['heading_getting_started']  = 'Primeros Pasos';
$_['heading_setup']            = 'Configurando Google Product Review Feed';
$_['heading_troubleshot']      = 'Solución de Problemas Comunes';
$_['heading_faq']              = 'Preguntas Frecuentes';
$_['heading_contact']          = 'Contactar Soporte';

// Text
$_['text_extension']           = 'Extensiones';
$_['text_success']             = 'Éxito: ¡Ha modificado el feed de Google Product Review Feed!';
$_['text_edit']                = 'Editar Google Product Review Feed';
$_['text_getting_started']     = '<p><strong>Visión General:</strong> La extensión Google Product Review Feed para OpenCart 4.x permite a los propietarios de tiendas exportar y enviar reseñas de productos directamente a su Google Merchant Center. Esta integración permite a Google mostrar las reseñas generadas por sus clientes junto a sus productos en Google Shopping y otros servicios de Google. La extensión también ofrece integraciones opcionales de Opt-in y Badge, que le permiten recopilar feedback post-compra a través de Google surveys y mostrar la insignia de su calificación de vendedor en su tienda.</p><p><strong>Requisitos:</strong> OpenCart 4.x o superior, PHP 7.4+ o superior, y acceso a su <a href="https://merchants.google.com?hl=en" target="_blank" rel="external noopener noreferrer">Google Merchant Center</a> con el programa Product Ratings habilitado.</p>';
$_['text_setup']               = '<p><strong>Instalación y Configuración:</strong></p><ul><li><strong>Paso 1:</strong> Suba la extensión usando el instalador de extensiones de OpenCart.</li><li><strong>Paso 2:</strong> Navegue a <strong>Extensiones</strong> -> <strong>Feeds</strong>.</li><li><strong>Paso 3:</strong> Localice <strong>Playful Sparkle - Google Product Review Feed</strong> en la lista y haga clic en <strong>Editar</strong>.</li><li><strong>Paso 4:</strong> Introduzca su <strong>Google Merchant Center ID</strong>.</li><li><strong>Paso 5:</strong> Habilite la <strong>Opt-in Integration</strong> para permitir que Google muestre una encuesta después de la compra.</li><li><strong>Paso 6:</strong> Habilite la <strong>Badge Integration</strong> para mostrar la insignia de Google Customer Reviews en su sitio.</li><li><strong>Paso 7:</strong> Opcionalmente, establezca un <strong>nombre de usuario</strong> y una <strong>contraseña</strong> para proteger el acceso a la URL del feed de reseñas.</li><li><strong>Paso 8:</strong> Guarde su configuración.</li></ul>';
$_['text_troubleshot']         = '<ul><li><strong>El feed no se muestra:</strong> Asegúrese de que la extensión esté habilitada y configurada correctamente.</li><li><strong>No aparecen reseñas en el feed:</strong> Su tienda debe tener reseñas de productos aprobadas en OpenCart.</li><li><strong>Opt-in o Badge no visibles:</strong> Verifique que la integración relevante esté habilitada y que su Merchant ID sea válido.</li><li><strong>Opt-in o Badge muestran error 404:</strong> Asegúrese de que la extensión esté instalada en un dominio de acceso público a través de HTTPS. Los servicios de Google no pueden acceder a dominios locales, de intranet o privados.</li><li><strong>Acceso al feed bloqueado:</strong> Si habilitó la protección del feed, asegúrese de proporcionar el nombre de usuario y la contraseña correctos al acceder a la URL del feed.</li></ul>';
$_['text_faq']                 = '<details><summary>¿Por qué mi feed está vacío?</summary>Asegúrese de que sus productos tengan reseñas de clientes aprobadas en OpenCart. Solo las reseñas marcadas como "habilitadas" se incluyen en el feed.</details><details><summary>¿Dónde puedo encontrar mi Merchant ID?</summary>Puede encontrar su Merchant Center ID en la esquina superior derecha del panel de control de su cuenta de Google Merchant Center.</details><details><summary>¿Cómo pruebo la URL del feed?</summary>Visite la URL del feed en su navegador. Si la protección del feed está habilitada, use el nombre de usuario y la contraseña configurados cuando se le solicite. Debería ver un archivo XML con sus reseñas de productos.</details><details><summary>¿Necesito tanto la Opt-in como la Badge Integration?</summary>No, puede habilitar una o ambas según sus necesidades. La función Opt-in habilita las encuestas post-compra, mientras que la Badge muestra su calificación de vendedor en el sitio.</details>';
$_['text_contact']             = '<p>Para obtener más ayuda, póngase en contacto con nuestro equipo de soporte:</p><ul><li><strong>Contacto:</strong> <a href="mailto:%s">%s</a></li><li><strong>Documentación:</strong> <a href="%s" target="_blank" rel="noopener noreferrer">Documentación de Usuario</a></li></ul>';

// Tab
$_['tab_general']              = 'General';
$_['tab_help_and_support']     = 'Ayuda y Soporte';

// Entry
$_['entry_status']             = 'Estado';
$_['entry_review_feed_url']    = 'URL del Feed de Reseñas';
$_['entry_login']              = 'Nombre de Usuario';
$_['entry_password']           = 'Contraseña';
$_['entry_active_store']       = 'Tienda Activa';
$_['opt_in_integration']       = 'Opt-in Integration';
$_['badge_integration']        = 'Badge Integration';
$_['entry_merchant_id']        = 'Merchant ID';

// Help
$_['help_copy']                = 'Copiar URL';
$_['help_open']                = 'Abrir URL';
$_['help_merchant_id']         = 'Introduzca su Merchant Center ID de 9 dígitos. Puede encontrar este ID en la esquina superior derecha del panel de control de su cuenta de Google Merchant Center.';
$_['help_opt_in_integration']  = 'Habilitar para permitir que Google presente una encuesta después de la compra, permitiendo a los clientes calificar su experiencia con su tienda.';
$_['help_badge_integration']   = 'Habilitar para mostrar la insignia de Google Customer Reviews en su sitio, mostrando su calificación promedio de vendedor y confirmando su participación en el programa.';

// Error
$_['error_permission']         = 'Advertencia: ¡No tiene permiso para modificar el feed de Google Product Review Feed!';
$_['error_store_id']           = 'Advertencia: ¡El formulario no contiene store_id!';
$_['error_merchant_id']        = 'El Merchant Center ID es obligatorio.';
$_['error_merchant_id_invalid']= 'Merchant Center ID no válido. Debe ser un número de 7 a 10 dígitos.';
