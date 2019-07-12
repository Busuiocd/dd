<?php

    function biserica() {

    	wp_register_style('biserica-bootstrap',get_template_directory_uri() .'/css/bootstrap.min.css');

        wp_enqueue_style('biserica-bootstrap');

        wp_register_style('style',get_template_directory_uri() .'/style.css');

        wp_enqueue_style('style');

    }



  add_action('wp_enqueue_style','biserica');


  function load_my_script(){

  	wp_register_script( 'jbootstrap',get_template_directory_uri() .'/js/bootstrap.min.js' );

  	wp_enqueue_script('jbootstrap');

    wp_register_script('ajax.googleapis',plugins_url('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js') );

    wp_enqueue_script('ajax.googleapis');

    wp_register_script('cdnjs.cloudflare',plugins_url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'));

    wp_enqueue_script('cdnjs.cloudflare');

    wp_register_script('maxcdn.bootstrapcdn',plugins_url('https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'));

    wp_enqueue_script('maxcdn.bootstrapcdn');

  }


  add_action('wp_enqueue_script','load_my_script')




