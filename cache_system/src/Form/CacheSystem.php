<?php

namespace Drupal\cache_system\Form;

use Drupal\Core\Cache\Cache;
use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\user\Entity\User;

class CacheSystem extends FormBase {
  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'cache_system_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['update_time'] = array(
      '#type' => 'text',
      '#title' => t('Get time:'),
    );
    $form['actions']['#type'] = 'actions';
    $form['actions']['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Update'),
      '#button_type' => 'primary',
    );
    return $form;
  }


  public function submitForm(array &$form, FormStateInterface $form_state) {
    Cache::invalidateTags(['node:19', 'node:18', 'user:1']);
    //todo
  }

}
