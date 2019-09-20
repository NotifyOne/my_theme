<?php

namespace Drupal\my_theme\Element;

use Drupal\Core\Render\Element\RenderElement;

/**
 * Provides a marquee render element.
 *
 * New render element types are defined as plugins. They live in the
 * Drupal\{module_name}\Element namespace and implement
 * \Drupal\Core\Render\Element\ElementInterface. They are annotated with either
 * \Drupal\Core\Render\Annotation\RenderElement or
 * \Drupal\Core\Render\Annotation\FormElement. And extend either the
 * \Drupal\Core\Render\Element\RenderElement, or
 * \Drupal\Core\Render\Element\FormElement base classes.
 *
 * In the annotation below we define the string "marquee" as the ID for this
 * plugin. That will also be the value used for the '#type' property in a render
 * array. For example:
 *
 * @code
 * $build['awesome'] = [
 *   '#type' => 'custom_list',
 *   '#title' => 'Title!',
 *   '#list_items' => [
 *     'title' => 'Title1',
 *     'author' => 'Author',
 *     'description' => 'lol, it`s really null'
 *    ]
 * ];
 * @endcode
 *
 * View an example of this custom element in use in
 * \Drupal\render_example\Controller\RenderExampleController::arrays().
 *
 * @see plugin_api
 * @see render_example_theme()
 *
 * @RenderElement("custom_list")
 */
class custom_list extends RenderElement {

  /**
   * {@inheritdoc}
   */
  public function getInfo() {

    // Returns an array of default properties that will be merged with any
    // properties defined in a render array when using this element type.
    // You can use any standard render array property here, and you can also
    // custom properties that are specific to your new element type.
    return [
      // See render_example_theme() where this new theme hook is declared.
      '#theme' => 'custom_list',
      // This is a custom property for our element type. We set it to blank by
      // default. The expectation is that a user will add the content that they
      // would like to see inside the marquee tag. This custom property is
      // accounted for in the associated template file.
      '#title' => '',
      '#list_items' => [
        [
          'title' => '',
          'author' => '',
          'description' => '',
        ],
      ],
    ];
  }

}
