<?php

namespace Drupal\migrate_drupal_d8\Plugin\migrate\source\d8;

@trigger_error('File is deprecated. Use \Drupal\migrate_drupal_d8\Plugin\migrate\source\d8\ContentEntity directly instead.', E_USER_DEPRECATED);

use Drupal\Core\Entity\EntityFieldManagerInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\State\StateInterface;
use Drupal\migrate\Plugin\MigrationInterface;

/**
 * Drupal 8 file source from database.
 *
 * @deprecated Instead use
 * \Drupal\migrate_drupal_d8\Plugin\migrate\source\d8\ContentEntity.
 *
 * @MigrateSource(
 *   id = "d8_file",
 *   source_provider = "migrate_drupal_d8"
 * )
 */
class File extends ContentEntity {

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, MigrationInterface $migration, StateInterface $state, EntityTypeManagerInterface $entity_type_manager, EntityFieldManagerInterface $entity_field_manager) {
    $configuration['entity_type'] = 'file';
    parent::__construct($configuration, $plugin_id, $plugin_definition, $migration, $state, $entity_type_manager, $entity_field_manager);
  }

}
