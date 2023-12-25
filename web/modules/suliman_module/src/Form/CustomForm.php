<?php

namespace Drupal\suliman_module\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;


class CustomForm extends FormBase {


  public function getFormId() {
    return 'suliman_module_custom_form';
  }

  public function buildForm(array $form, FormStateInterface $form_state) {

    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
      '#required' => TRUE,
    ];

    $form['age'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Age'),
      '#required' => TRUE,
    ];

    $form['phonenumber'] = [
        '#type' => 'textfield',
        '#title' => $this->t('Phone Number'),
        '#required' => TRUE,
      ];
    
      $form['email'] = [
        '#type' => 'email',
        '#title' => $this->t('Email'),
        '#required' => FALSE,
      ];

      $form['agree'] = [
        '#type' => 'checkbox',
        '#title' => $this->t('Agree on termed and condition'),
        '#required' => TRUE,
      ];


    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save'),
    ];

    return $form;
  }


  public function validateForm(array &$form, FormStateInterface $form_state) {
  }


  public function submitForm(array &$form, FormStateInterface $form_state) {


    $name = $form_state->getValue('name');
    $age = $form_state->getValue('age');
    $phonenumber = $form_state->getValue('phonenumber');
    $email = $form_state->getValue('email');
    $agree = $form_state->getValue('agree');



    \Drupal::messenger()->addStatus(t('Form submitted successfully !'));
  }

}
