<?php
namespace Drupal\block_example\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Cache\Cache;
/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "block_example",
 *   admin_label = @Translation("example_block"),
 *   category = @Translation("Hello World"),
 * )
 */
class ExampleBlock extends BlockBase {

	public function build() {
		$time = date("h:i:sa");
		$output = $time;
	  return [
	      '#type' => 'markup',
	      '#markup' => $this->t("Server time: " .$output)
	    ];
  			}
	public function getCacheTags() {
		$tags = array(
		  'node19',
		  'node:18',
		  'user:1',
		);
	  return Cache::mergeTags(parent::getCacheTags(), $tags);

	  }
  public function getCacheContexts() {
    $context = array(
      'user.roles:authenticated',
    );
    return Cache::mergeContexts(parent::getCacheContexts(), $context);

  }

}
