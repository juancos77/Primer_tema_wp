<?php 
/* Añadir ubicaciones de menús */
if (function_exists('register_nav_menus')){
	register_nav_menus(array('principal' => 'Menú principal'));
}

/* Activar el uso de widgets */
if (function_exists('register_sidebar')){
	register_sidebar(
		array('id' => 'sidebar-1',
			  'before_widget' => '<section id="%1s" class="widget %2s">',
			  'after_widget' => ''
		));
}
?>