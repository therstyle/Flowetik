<?php

namespace Controllers;

class Blog {
  public function get_info() {
    $info = [
      'title' => get_field('blog_index_title', 'option'),
      'image' => get_field('blog_image', 'option'),
      'related_posts_text' => get_field('related_posts_text', 'option')
    ];

    return $info;
  }
}

?>