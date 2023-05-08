<?php

 namespace Drupal\nisha_exercise\Plugin\Block;

 use Drupal\Core\Block\BlockBase;
 use Drupal\Core\Form\FormStateInterface;

/**
  * Provides simple block for d4drupal.
  * @Block (
  * id = "nisha_exercise",
  * admin_label = "Custom Nisha Plugin Block"
  * )
  */

  class CustomBlock extends BlockBase{
    /**
     * {@inheritdoc}
     */

    public function build() { // render function
        $form =\Drupal::formBuilder()->getForm('\Drupal\nisha_exercise\Form\NishaForm');
        return $form;
      }

  }
