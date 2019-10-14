<?php

namespace Controllers;

class General {
  public function get_sections() {
    $section = [
      'section' => get_field('sections'),
      'image' => get_sub_field('section'),
      'title' => get_sub_field('title'),
      'sub_title' => get_sub_field('sub_title'),
      'content' => get_sub_field('content')
    ];

    return $section;
  }
}

?>