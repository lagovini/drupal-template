<?php

namespace Drupal\miomodulo\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Mio blocco custom.
 *
 * @Block(
 *   id = "mio_blocco_custom",
 *   admin_label = @Translation("Mio blocco custom"),
 *   category = @Translation("Corso Drupal"),
 * )
 */

class MioBlocco extends BlockBase {
    /**
     * 
     */
    public function build() {
        $now = \Drupal::service('date.formatter')->format(time(),'custom', 'd/m/Y H:i'); #servizio Drupal
        return [
            '#markup' => "<h2>mio blocco custom adesso sono $now</h2>",
        ];
    }
}