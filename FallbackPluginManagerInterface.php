<?php

/**
 * @file
 * Contains FallbackPluginManagerInterface.php.
 */

namespace Drupal\Component\Plugin;

/**
 * An interface implemented by plugin managers with fallback plugin behaviors.
 */
interface FallbackPluginManagerInterface {

  /**
   * Returns a fallback id for a missing plugin.
   *
   * @param string $plugin_id
   *   The ID of the missing requested plugin.
   * @param array $configuration
   *   An array of configuration relevant to the plugin instance.
   *
   * @return string
   *   The id of an existing plugin to use for ... why isn't this in the factory?
   */
  public function getFallbackPluginId($plugin_id, array $configuration = array());

}
