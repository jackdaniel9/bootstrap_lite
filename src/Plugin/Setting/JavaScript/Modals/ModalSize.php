<?php
/**
 * @file
 * Contains \Drupal\bootstrap_lite\Plugin\Setting\JavaScript\Modals\ModalSize.
 */

namespace Drupal\bootstrap_lite\Plugin\Setting\JavaScript\Modals;

use Drupal\bootstrap_lite\Annotation\BootstrapSetting;
use Drupal\bootstrap_lite\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "modal_size" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   id = "modal_size",
 *   type = "select",
 *   title = @Translation("Default modal size"),
 *   defaultValue = "",
 *   description = @Translation("Defines the modal size between the default, <code>modal-sm</code> and <code>modal-lg</code>."),
 *   empty_option = @Translation("Normal"),
 *   groups = {
 *     "javascript" = @Translation("JavaScript"),
 *     "modals" = @Translation("Modals"),
 *     "options" = @Translation("Options"),
 *   },
 *   options = {
 *     "modal-sm" = @Translation("Small"),
 *     "modal-lg" = @Translation("Large"),
 *   },
 * )
 */
class ModalSize extends SettingBase {

  /**
   * {@inheritdoc}
   */
  public function drupalSettings() {
    return !!$this->theme->getSetting('modal_enabled');
  }

}
