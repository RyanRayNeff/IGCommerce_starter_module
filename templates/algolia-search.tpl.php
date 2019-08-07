<?php
/**
 * @file
 * Displays the Algolia search block
 * @author ryan.ray.neff@fluke.com
 *
 * Available variables: 
 * - $content[]: Array of all the content for output.
 * - $content['title']: Translated title.
 * - $content['body-chunker']: Array of chuncks you might find in the copy
 * - $content['body-chunker']['link']: Translated link for whatevs.
 * - $content['body-chunker']['copy']: Translated text for whatevs.
 *
 * @see igcommerce_utility_algolia_build_block()
 */
?>
<nav id="algolia-search">
  <div class="container">
    <h2>
      <?php print $content['title']; ?>
    </h2>
    <p>
      Here's your link output: <?php print $content['body-chunker']['link']; ?>
    </p>
    <p>
      Here's your chonk o' text: <span class="hot-stuff"><?php print $content['body-chunker']['copy']; ?></span>
    </p>
  </div>
</nav>
