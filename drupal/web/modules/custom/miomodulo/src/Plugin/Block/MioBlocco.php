<?php
namespace Drupal\miomodulo\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Mio blocco custom
 *
 * @Block(
 *   id = "mio_blocco_custom",
 *   admin_label = @Translation("Mio blocco custom"),
 *   category = @Translation("Corso Drupal")
 * )
 */

 class MioBlocco extends BlockBase {

  public function build () {
    $data = \Drupal::service('date.formatter')->format(time(), 'custom', 'd/m/Y H:i');

    $payload = [
      'title' => 'Lista insegnamenti',
      'items' => [
        [
          'des' => 'Insegnamento 1',
          'peso' => '6'
        ],
        [
          'des' => 'Insegnamento 2',
          'peso' => '7'
        ],
        [
          'des' => 'Insegnamento 3',
          'peso' => '9'
        ],
      ],
    ];

    $nome = \Drupal::config('miomodulo.settings')->get('nome_salvato');

    dump($payload);

    $form = \Drupal::formBuilder()->getForm('Drupal\miomodulo\Form\MioForm');

    return [
      '#theme' => 'miomodulo_mioblocco',
      '#now' => $nome,
      '#payload' => $payload,
      '#form' => $form,
      '#cache' => [
        'max-age' => 0,
      ],
    ];
  }

 }
