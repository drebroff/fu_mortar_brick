<?php

namespace Drupal\fu_mortar_brick\Plugin\Block;

use Drupal\Core\Block\BlockBase;


  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['fu_block_content_type']['#markup'] = 'Implement FuBlockContentType.';
    return $build;
  }
{


}
