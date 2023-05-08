<?php

namespace Drupal\nisha_exercise;

use Drupal\Core\Config\ConfigFactory;

/**
 * Class CustomService.
 *
 * @package Drupal\nisha_exercise\Services
 */
class CustomService {

  /**
   * Configuration Factory.
   *
   * @var \Drupal\Core\Config\ConfigFactory
   */
  protected $configFactory;

  /**
   * Constructor.
   */
  public function __construct(ConfigFactory $configFactory) {
    $this->configFactory = $configFactory;
  }

  /**
   * Gets my setting.
   */
  public function getName() {
    $config = $this->configFactory->get('nisha_exercise.settings');
    return $config->get('NAME');
  }

}