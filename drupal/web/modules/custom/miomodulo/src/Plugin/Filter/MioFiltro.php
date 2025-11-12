<?php
namespace Drupal\miomodulo\Plugin\Filter;

use Drupal\filter\Plugin\FilterBase;
use Drupal\filter\FilterProcessResult;

/**
 * Mio filtro custom
 * @Filter(
 *   id = "mio_filtro_custom",
 *   title = @Translation("Mio filtro custom"),
 *   category = @Translation("Corso Drupal"),
 *   type = Drupal\filter\Plugin\FilterInterface::TYPE_MARKUP_LANGUAGE
 * )
 */

class MioFIltro extends FilterBase {
    public function process ($text, $langcode) {
        $text = $text ?? '';
        $miastringa = str_replace('[hi]', '<strong>Ciao dal mio filtro</strong>', $text);
        return new FilterProcessResult($miastringa);
    }
}