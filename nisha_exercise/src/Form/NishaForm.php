<?php

namespace Drupal\nisha_exercise\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class NishaForm extends FormBase {

    // generated form id
    public function getFormId()
    {
        return 'nisha_form_get_user_details';
    }

    // build form generates form
    public function buildForm(array $form, FormStateInterface $form_state) {
        $form['firstname'] = [
            '#type' => 'textfield',
            '#title' => 'First Name',
        ];
        $form['lastname'] = [
            '#type' => 'textfield',
            '#title' => 'Last Name',
        ];
        $form['email'] = [
            '#type' => 'textfield',
            '#title' => 'Email',
            '#default_value' => 'nishapoojary@gmail.com',
        ];
        $form['gender'] = [
            '#type' => 'select',
            '#title' => 'Gender',
            '#options' => [
                'male' => 'Male',
                'female' => 'Female',
            ],
        ];
        $form['submit'] = [
            '#type' => 'submit',
            '#value' => 'Submit',
        ];
        return $form;
    }


    // submit form
    public function submitForm(array &$form, FormStateInterface $form_state) {
        \Drupal::messenger()->addMessage("Custom form Submitted Successfully");
        \Drupal::database()->insert("user_details")->fields([
            'firstname' => $form_state->getValue("firstname"),
            'lastname' => $form_state->getValue("lastname"),
            'email' => $form_state->getValue("email"),
            'gender' => $form_state->getValue("gender"),
        ])->execute();
    }
}


