<?php

namespace Controllers;

class Footer {
  public function get_contact() {
    $contact = [
      'headline' => get_field('contact_headline', 'option'),
      'text' => get_field('contact_text', 'option'),
      'id' => get_field('contact_form_id', 'option')
    ];

    return $contact;
  }

  public static function get_social() {
    $social = [
      'social' => get_field('social', 'option'),
      'type' => get_sub_field('type'),
      'url' => get_sub_field('url')
    ];

    return $social;
  }
}

?>