<?php

namespace Drupal\suliman_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;


class RandomContentController extends ControllerBase {

  protected $entityTypeManager;

  public function __construct(EntityTypeManagerInterface $entity_type_manager) {
    $this->entityTypeManager = $entity_type_manager;
  }


  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_type.manager')
    );
  }


  public function displayRandomContent() {
    $entity_type_id = 'node';
    $storage = $this->entityTypeManager->getStorage($entity_type_id);
  
    $query = $storage->getQuery();
    $query->condition('status', 1); 
    $query->addTag('random');
  
    $nodeId = $query->execute();
  
    if (!empty($nodeId)) {
      $nodeId = array_values($nodeId);
      shuffle($nodeId); 
      $randomNid = reset($nodeId);
      $randomNode = $storage->load($randomNid);

      $fields = $randomNode->getFields()  ;

      $field_values = [];
      foreach ($fields as $field_name => $field) {
      $field_values[] = $field->getString();
      }

     $sentence = implode(' --- ', $field_values);

      return [
        '#markup' => $sentence,
      ];
    }
  }
}
