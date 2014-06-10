<?php

class Website extends CustomPostType {

  protected static $name = 'website';

  protected static $args = array(
    'label'       => 'Websites',
    'description' => "Websites I've built",
    'public'      => true,
    'supports'    => array( 'title', 'editor', 'thumbnail', 'excerpt', ),
  );
}