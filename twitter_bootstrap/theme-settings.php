<?php

function twitter_bootstrap_settings($saved_settings){
  $defaults = array(
      "twitter_bootstrap_selected_css" => "bootstrap.css"
      );

  $settings = array_merge($defaults,$saved_settings);
  $css_path = drupal_get_path("theme","twitter_bootstrap")."/bootstrap/css";
  $css_files = array();
  foreach (scandir($css_path) as $file){
    if(strstr($file,".css") !== FALSE ){
      $css_files[$file] = $file;
    }
  }

#var_dump($css_files);

  $form['twitter_bootstrap_selected_css'] = array(
    '#type'=>'select',
    '#title'=>'Bootstrap Theme',
    '#default_value'=>$settings['twitter_bootstrap_selected_css'],
    '#options'=>$css_files,
  );
  return $form;
}
