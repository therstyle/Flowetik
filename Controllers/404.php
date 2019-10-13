<?php

namespace Controllers;

class Error404 {
  public function get_info() {
    $info = [
      'headline' => get_field('404_headline', 'option'),
      'text' => get_field('404_text', 'option')
    ];

    return $info;
  }
}

?>