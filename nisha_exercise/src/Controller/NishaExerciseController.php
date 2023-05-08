<?php

namespace Drupal\nisha_exercise\Controller;

use Drupal\Core\Controller\ControllerBase;

class NishaExerciseController extends ControllerBase {

public function hello() {
    return [
        '#theme'=>'block_plugin_template',
        '#message'=>'nisha exercise controller hello ',
        '#hexcode'=>'#FF0011',
    ];
}

}
