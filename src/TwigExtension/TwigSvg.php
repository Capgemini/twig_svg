<?php

namespace Drupal\twig_svg\TwigExtension;

/**
 * Adds a twig template extension to easily add an SVG.
 */
class TwigSvg extends \Twig_Extension {

  /**
   * List the custom Twig fuctions.
   *
   * @return array
   *   The twig function.
   */
  public function getFunctions() {
    return [
      new \Twig_SimpleFunction('icon', [$this, 'getInlineSvg']),
    ];
  }

  /**
   * Get the name of the service listed in twig_svg.services.yml.
   *
   * @return string
   *   The service name.
   */
  public function getName() {
    return "twig_svg.twig.extension";
  }

  /**
   * Callback for the icon() Twig function.
   *
   * @return array
   *   The SVG array.
   */
  public static function getInlineSvg($name, $title) {
    return [
      '#type' => 'inline_template',
      '#template' => '<span class="icon__wrapper"><svg class="icon icon--{{ name }}" role="img" title="{{ title }}" xmlns:xlink="http://www.w3.org/1999/xlink"><use xlink:href="#{{ name }}"></use></svg></span>',
      '#context' => [
        'title' => $title,
        'name' => $name,
      ],
    ];
  }

}
