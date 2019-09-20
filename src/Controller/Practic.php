<?php

namespace Drupal\my_theme\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Render\Element;
use Drupal\Component\Utility\Variable;

class Practic extends ControllerBase {

  function simple() {
    return [
      '#theme' => 'custom_list',
      '#title' => t('List Title'),
      '#list_items' => [
        [
          'title' => t('Test 1'),
          'author' => t('Author 1'),
          'description' => t('Description 1'),
        ],
        [
          'title' => t('Test 2'),
          'author' => t('Author 2'),
          'description' => t('Description 2'),
        ],
      ],
    ];

  }

  function type() {
    $build =  [
      '#type' => 'custom_list',
      '#title' => t('List Title'),
      '#list_items' => [
        [
          'title' => t('Test 1'),
          'author' => t('Author 1'),
          'description' => t('Description 1'),
        ],
        [
          'title' => t('Test 2'),
          'author' => t('Author 2'),
          'description' => t('Description 2'),
        ],
      ],
    ];

    return $build;
  }

}
