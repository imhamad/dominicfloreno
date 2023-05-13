<?php

namespace Drupal\block_visibility_groups\Form;

use Drupal\block_visibility_groups\ConditionsSetFormTrait;
use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

/**
 * Entity form for Block Visibility Group entity.
 */
class BlockVisibilityGroupForm extends EntityForm {

  use ConditionsSetFormTrait;

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);
    /** @var \Drupal\block_visibility_groups\Entity\BlockVisibilityGroup $block_visibility_group */
    $block_visibility_group = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $block_visibility_group->label(),
      '#description' => $this->t("Label for the Block Visibility Group."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $block_visibility_group->id(),
      '#machine_name' => [
        'exists' => '\Drupal\block_visibility_groups\Entity\BlockVisibilityGroup::load',
      ],
      '#disabled' => !$block_visibility_group->isNew(),
    ];
    $form['allow_other_conditions'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Allow other Conditions on blocks'),
      '#description' => $this->t('If checked blocks in this group will be able to have other visibility settings.'),
      '#default_value' => $block_visibility_group->isAllowOtherConditions(),
    ];

    $form['logic'] = [
      '#type' => 'radios',
      '#options' => [
        'and' => $this->t('All conditions must pass'),
        'or' => $this->t('Only one condition must pass'),
      ],
      '#default_value' => $block_visibility_group->getLogic(),
    ];
    if (!$block_visibility_group->isNew()) {
      $form['conditions_section'] = $this->createConditionsSet($form, $block_visibility_group, 'edit');

    }
    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $block_visibility_group = $this->entity;
    $status = $block_visibility_group->save();

    if ($status) {
      $this->messenger()->addMessage(
        $this->t('Saved the %label Block Visibility Group.', [
          '%label' => $block_visibility_group->label(),
        ])
      );
    }
    else {
      $this->messenger()->addMessage(
        $this->t('The %label Block Visibility Group was not saved.', [
          '%label' => $block_visibility_group->label(),
        ])
      );
    }
    $form_state->setRedirectUrl($block_visibility_group->toUrl('collection'));
  }

}
