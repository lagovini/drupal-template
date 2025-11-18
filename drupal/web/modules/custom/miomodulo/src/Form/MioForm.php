<?php

namespace Drupal\miomodulo\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form di esempio.
 */
class MioForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'miomodulo_mio_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {

    $nome = \Drupal::config('miomodulo.settings')->get('nome_salvato');

    $form['nome'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Il tuo nome'),
      '#default_value' => $nome,
      '#required' => TRUE,
    ];

    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Invia'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->messenger()->addMessage(
      $this->t('Ciao @name!', ['@name' => $form_state->getValue('nome')])
    );

    $config = \Drupal::service('config.factory')->getEditable('miomodulo.settings');
    $config->set('nome_salvato', $form_state->getValue('nome'));
    $config->save();
  }

}
