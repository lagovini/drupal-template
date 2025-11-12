<?php

namespace Drupal\miomodulo\Controller; # Drupal > nome del modulo > Controller

use Drupal\Core\Controller\ControllerBase; # use ControllerBase del core

/**
 * Ritorna ....
 */
class MiomoduloController extends ControllerBase {

    function miaPagina() { # metodo citato nella route
        $miavar['test'] = [
            'nome' => 'paolo',
        ];
        $nome = $miavar['test']['nome'] ?? 'no nome';
        dump($miavar);
        dump($nome);

        $msg = 'Render Html Mia pagina';
        return [
            '#markup' => '<h2>'.$this->t($msg).'</h2>',
        ];
    }
}