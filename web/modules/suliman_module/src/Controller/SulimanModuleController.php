<?php

namespace Drupal\suliman_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for suliman routes.
 */
class SulimanModuleController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
