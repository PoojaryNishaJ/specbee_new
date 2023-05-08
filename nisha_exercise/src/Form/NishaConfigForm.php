<?php

namespace Drupal\nisha_exercise\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class NishaConfigForm extends ConfigFormBase {

    /**
     * Settings Variable.
     */
    Const CONFIGNAME = "nisha_configuaration_form.settings";

    /**
     * {@inheritdoc}
     */
    public function getFormId() {
        return "nisha_configuaration_form_settings";
    }

    /**
     * {@inheritdoc}
     */

    protected function getEditableConfigNames() {
        return [
            static::CONFIGNAME,
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state) {
        $config = $this->config(static::CONFIGNAME);
        $form['firstname'] = [
            '#type' => 'textfield',
            '#title' => 'Name',
            '#default_value' => $config->get("firstname"),
        ];

        $form['email'] = [
            '#type' => 'textfield',
            '#title' => 'Email',
            '#default_value' => $config->get("email"),
        ];
        $form['branch'] = [
            '#type' => 'select',
            '#title' => 'Branch',
            '#options' => [
                'male' => 'CS',
                'female' => 'IS',
            ],
        ];

        return Parent::buildForm($form, $form_state);
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state) {
        $config = $this->config(static::CONFIGNAME);
        $config->set("firstname", $form_state->getValue('firstname'));
        $config->set("email", $form_state->getValue('email'));
        $config->set("branch", $form_state->getValue('branch'));
        $config->save();
    }

}

