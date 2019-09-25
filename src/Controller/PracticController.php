<?php

namespace Drupal\my_theme\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class Practic.
 *
 * @package Drupal\my_theme\Controller
 */
class PracticController extends ControllerBase {

  /**
   * @return array example from #list_items
   */
  private function listItemsExample(){
    return [
      [
        'title' => $this->t('Test 1'),
        'author' => $this->t('Author 1'),
        'description' => $this->t('Description 1'),
      ],
      [
        'title' => $this->t('Test 2'),
        'author' => $this->t('Author 2'),
        'description' => $this->t('Description 2'),
      ],
    ];
  }
  /**
   * Build list by #theme.
   */
  function simple() {
    return [
      '#theme' => 'custom_list',
      '#title' => $this->t('List Title by #theme'),
      '#list_items' => $this->listItemsExample(),
    ];

  }

  /**
   * Build list by #type.
   */
  function type() {
    $build =  [
      '#type' => 'custom_list',
      '#title' => $this->t('List Title by #type'),
      '#list_items' => $this->listItemsExample(),
    ];

    return $build;
  }
}
