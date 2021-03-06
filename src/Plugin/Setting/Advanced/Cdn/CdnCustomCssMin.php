<?php
/**
 * @file
 * Contains \Drupal\bootstrap_lite\Plugin\Setting\Advanced\Cdn\CdnCustomCssMin.
 */

namespace Drupal\bootstrap_lite\Plugin\Setting\Advanced\Cdn;

use Drupal\bootstrap_lite\Annotation\BootstrapSetting;
use Drupal\bootstrap_lite\Plugin\Setting\SettingBase;
use Drupal\Core\Annotation\Translation;

/**
 * The "cdn_custom_css_min" theme setting.
 *
 * @ingroup plugins_setting
 *
 * @BootstrapSetting(
 *   cdn_provider = "custom",
 *   id = "cdn_custom_css_min",
 *   type = "textfield",
 *   weight = 2,
 *   title = @Translation("Minified Bootstrap CSS URL"),
 *   defaultValue = "https://cdn.jsdelivr.net/bootstrap/4.0.0/css/bootstrap.min.css",
 *   description = @Translation("Additionally, you can provide the minimized version of the file. It will be used instead if site aggregation is enabled."),
 *   groups = {
 *     "advanced" = @Translation("Advanced"),
 *     "cdn" = @Translation("CDN (Content Delivery Network)"),
 *     "custom" = false,
 *   },
 * )
 */
class CdnCustomCssMin extends SettingBase {

  /**
   * {@inheritdoc}
   */
  public function getCacheTags() {
    return ['library_info'];
  }

}
