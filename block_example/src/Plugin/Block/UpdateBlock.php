<?php

namespace Drupal\block_example\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "tmp_update",
 *   admin_label = @Translation("Update_cache_block"),
 *   category = @Translation("Hello World"),
 * )
 */
class UpdateBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $form = \Drupal::formBuilder()->getForm('Drupal\cache_system\Form\CacheSystem');
    return [
      $form,
      '#markup' => 'Hello',
    ];
  }
}
