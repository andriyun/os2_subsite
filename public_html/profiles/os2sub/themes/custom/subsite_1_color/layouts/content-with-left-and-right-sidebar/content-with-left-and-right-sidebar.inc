<?php
/**
 * implementation of hook_panels_layouts()
 */
$plugin = array(
  'title' => t('Content with left and right sidebar'),
  'category' => t('OS2Web'),
  'icon' => 'content-with-left-and-right-sidebar.png',
  'theme' => 'content-with-left-and-right-sidebar',
  'css' => 'content-with-left-and-right-sidebar.css',
  'regions' => array(
    'sidebar-left' => t('Left sidebar'),
    'sidebar-right' => t('Right sidebar'),
    'content' => t('Content'),
  ),
);
