<?php

namespace Drupal\testing_module\Plugin\Block;

use Drupal\Core\Block\BlockBase;
 
/** 
 * Provides a 'Drupalup Block' Block.
 *
 * @Block(
 *   id = "Custom Block",
 *   admin_label = @Translation("Custom  block"),
 *   category = @Translation("Block News"),
 * )
 */
class  CustomBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $db = \Drupal::database();
    $query = $db->select('node', 'n');
    $query->condition('n.type', 'news');
    $query->fields('n');
    $result = $query->execute()->fetchAll();
    $nids = [];
    $output = [];
    foreach($result as $rec){
      $nids[] = $rec->nid;
    }
    
    $nodes =  \Drupal::entityTypeManager()->getStorage('node')->loadMultiple($nids);
    foreach($nodes as $node){ 
      $output[] = $node->get('title')->value;
      $output[] = $node->get('body')->value; 
      $output[] = $node->get('image_news_alt')->value;
      
    }
 
    return [ 
      '#theme' => 'custom_block',
      '#data' => $output,
    ];
  }

}
