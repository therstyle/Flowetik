<?php

namespace Controllers;

class FrontPage {
  public function get_video() {
    $video = [
      'video_headline' => get_field('video_headline'),
      'video_sub_headline' => get_field('video_sub_headline'), 
      'video_mp4' => get_field('video_mp4'),
      'video_ogv' => get_field('video_ogv'),
      'video_poster' => wp_get_attachment_image_src(get_field('video_poster'), 'video_poster')[0],
    ];

    return $video;
  }

  public function get_leaders() {
    $leaders = [
      'headline' => get_field('leaders_headline'),
      'text' => get_field('leaders_text'),
      'image' => get_field('leaders_image')
    ];

    return $leaders;
  }

  public function get_promise() {
    $promise = [
      'headline' => get_field('promise_headline'),
      'image' => get_field('promise_image'),
      'text' => get_field('promise_text')
    ];

    return $promise;
  }

  public function get_ideas() {
    $ideas = [
      'headline' => get_field('ideas_headline'),
      'text' => get_field('ideas_text'),
      'image' => get_field('ideas_image')
    ];

    return $ideas;
  }

  public static function get_idea() {
    $idea = [
      'idea' => get_field('idea'),
      'headline' => get_sub_field('idea_headline'),
      'text' => get_sub_field('idea_text')
    ];

    return $idea;
  }

  public function get_testimonials() {
    $testimonials = [
      'headline' => get_field('testimonials_headline')
    ];

    return $testimonials;
  }

  public function get_team() {
    $team = [
      'headline' => get_field('team_headline'),
      'text' => get_field('team_text')
    ];

    return $team;
  }
}

?>