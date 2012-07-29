<?php

namespace Drupal\node\Plugin\views\argument;

use Drupal\Core\Annotation\Plugin;
use Drupal\views\Plugins\views\argument\Date;

/**
 * Argument handler for a week.
 */

/**
 * @Plugin(
 *   plugin_id = "node_created_week"
 */
class CreatedWeek extends Date {
  /**
   * Constructor implementation
   */
  function construct() {
    parent::construct();
    $this->arg_format = 'w';
    $this->formula = views_date_sql_extract('WEEK', "***table***.$this->real_field");
  }

  /**
   * Provide a link to the next level of the view
   */
  function summary_name($data) {
    $created = $data->{$this->name_alias};
    return t('Week @week', array('@week' => $created));
  }
}
