<?php

/**
 * @file
 * Default theme implementation for a single paragraph item.
 *
 * Available variables:
 * - $content: An array of content items. Use render($content) to print them
 *   all, or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity
 *   - entity-paragraphs-item
 *   - paragraphs-item-{bundle}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened into
 *   a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<div class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <div class="paragraph-content"<?php print $content_attributes; ?>>  
    <h2 class="js-expandmore">
      <div class="toggle-wrap">
        <div class="accordion__toggle">
          <span></span>
        </div>
      </div>
      <?php print render($content['field_paragraph_header']); ?>
    </h2>    
    <div class="js-to_expand">
      <a class="accordion__anchor" href="#be9da58c-26ac-4a91-acbe-81afd166a24f-522">
        <span class="icon fa fa-link" aria-hidden="true"></span>
      </a>

      <?php print render($content['field_image']); ?>
      <?php print render($content['field_paragraph_text']); ?>
    </div>  
  </div>
</div>
