<?php
/**
 * @file
 * os2sub_search.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function os2sub_search_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}
