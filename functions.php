<?php 

//Load stylesheets
function load_stylesheets(){
	
	wp_register_style("bootstrap", get_template_directory_uri() . "/css/bootstrap.css", array(), 1, "all");
	wp_enqueue_style("bootstrap");
	
	wp_register_style("custom1", get_template_directory_uri() . "/css/custom1.css", array(), 1, "all");
	wp_enqueue_style("custom1");
	
}
add_action("wp_enqueue_scripts", "load_stylesheets");

//Load javascript
function load_javascript(){
	
	wp_register_script("jq", get_template_directory_uri() . "/js/jquery-3.4.1.min.js", array(), 1, "all");
	wp_enqueue_script("jq");
	
	wp_register_script("bootstrap", get_template_directory_uri() . "/js/bootstrap.js", array(), 1, "all");
	wp_enqueue_script("bootstrap");
}
add_action("wp_enqueue_scripts", "load_javascript");






?>