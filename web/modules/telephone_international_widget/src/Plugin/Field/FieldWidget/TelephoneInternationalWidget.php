<?php

namespace Drupal\telephone_international_widget\Plugin\Field\FieldWidget;

use Drupal\Core\Field\FieldItemListInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\telephone\Plugin\Field\FieldWidget\TelephoneDefaultWidget;

/**
 * Plugin implementation of the 'telephone_international' widget.
 *
 * @FieldWidget(
 *   id = "telephone_international",
 *   label = @Translation("International telephone"),
 *   field_types = {
 *     "telephone"
 *   }
 * )
 */
class TelephoneInternationalWidget extends TelephoneDefaultWidget {

  /**
   * {@inheritdoc}
   */
  public function formElement(FieldItemListInterface $items, $delta, array $element, array &$form, FormStateInterface $form_state) {
    $element['value'] = $element + [
      '#type' => 'textfield',
      '#default_value' => isset($items[$delta]->value) ? $items[$delta]->value : NULL,
      '#placeholder' => $this->getSetting('placeholder'),
      '#field_suffix' => '<span id="valid-msg" class="hide">✓ Valid</span><span id="error-msg" class="hide"></span>',
    ];
    $element['value']['#attributes']['class'][] = 'telephone_international_widget';
    $element['value']['#attached']['library'][] = 'telephone_international_widget/intl-tel-input';

    return $element;
  }

}
