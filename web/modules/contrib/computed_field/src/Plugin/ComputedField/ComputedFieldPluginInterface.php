<?php

namespace Drupal\computed_field\Plugin\ComputedField;

use Drupal\Component\Plugin\DerivativeInspectionInterface;
use Drupal\Component\Plugin\PluginInspectionInterface;
use Drupal\computed_field\Field\ComputedFieldDefinition;
use Drupal\computed_field\Field\ComputedFieldDefinitionWithValuePluginInterface;
use Drupal\Core\Cache\CacheableMetadata;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeInterface;

/**
 * Interface for Computed Field plugins.
 *
 * Computed field plugins can be one or both of:
 *   - Automatically attached: The plugin's definition declares which entity
 *     types and bundles it is attached to. There is no configuration.
 *   - Configured attaching: The plugin's definition doesn't declare how it is
 *     attached. The plugin is used in conjunction with a computed_field config
 *     entity. Plugins of this type may be configurable.
 *
 * A plugin is declared as being automatically attached by specifying the
 * 'attach' annotation properties.
 *
 * Configurable attachable plugins may be configurable in the admin UI. To do
 * this, the plugin class must implement both of:
 *   - \Drupal\Component\Plugin\ConfigurableInterface
 *   - \Drupal\Core\Plugin\PluginFormInterface
 */
interface ComputedFieldPluginInterface extends PluginInspectionInterface, DerivativeInspectionInterface {

  /**
   * Gets the field type for this plugin.
   *
   * @return string
   *   The field type plugin ID.
   */
  public function getFieldType(): string;

  /**
   * Gets the field name if this plugin attaches automatically.
   *
   * @return string|null
   *   The field name, or NULL if it does not attach automatically.
   */
  public function getFieldName(): ?string;

  /**
   * Gets the field label.
   *
   * @return string
   *   The field label.
   */
  public function getFieldLabel(): string;

  /**
   * Gets the value for a field definition setting.
   *
   * This allows plugins to influence the settings of a computed field.
   *
   * @param string $setting_name
   *   The name of the setting, as passed to getSetting().
   *
   * @return mixed
   *   Either the value for the setting if the plugin wishes to define it, or
   *   NULL to allow the field definition to return its own value.
   */
  public function getFieldDefinitionSetting(string $setting_name): mixed;

  /**
   * Returns the value for a computed field.
   *
   * This value can be output with a lazy builder if it is uncacheable or has
   * different cacheing requirements from the host entity. To indicate that a
   * lazy builder should be used, implement static::getCacheability() and
   * return the cacheability data.
   *
   * Use SingleValueTrait to implement this method if a plugin is returning only
   * a single value for a field.
   *
   * @param \Drupal\Core\Entity\EntityInterface $host_entity
   *   The entity the field is on.
   * @param \Drupal\computed_field\Field\ComputedFieldDefinitionWithValuePluginInterface $computed_field_definition
   *   The computed field definition. If this plugin is configured attachable
   *   rather than automatically attached, this parameter will be the
   *   computed_field config entity.
   *
   * @return array
   *   An array of field values, indexed by the numeric field delta. If the
   *   field type has only one propery, the values can be scalars. For example,
   *   for a string field:
   *   @code
   *   return [
   *     0 => 'one',
   *     1 => 'two',
   *   ];
   *   @code
   *   For a field type with several properties, the values can be scalars to
   *   return only the primary property. To retun data for several properties,
   *   the values should be arrays whose keys are property names. For example,
   *   for a text field:
   *   @code
   *   return [
   *     0 => [
   *       'value' => 'one',
   *       'format' => 'full_html',
   *     ],
   *     1 => [
   *       'value' => 'two',
   *       'format' => 'full_html',
   *     ],
   *   ];
   *   @code
   */
  public function computeValue(EntityInterface $host_entity, ComputedFieldDefinitionWithValuePluginInterface $computed_field_definition): array;

  /**
   * Determines whether the field's render array should use a lazy builder.
   *
   * @param \Drupal\Core\Entity\EntityInterface $host_entity
   *   The entity the field is on.
   * @param \Drupal\computed_field\Field\ComputedFieldDefinitionWithValuePluginInterface $computed_field_definition
   *   The computed field definition. If this plugin is configured attachable
   *   rather than automatically attached, this parameter will be the
   *   computed_field config entity.
   *
   * @return bool
   *   Whether the computed field's render array should be switched to use a
   *   lazy builder.
   *
   * @see computed_field_entity_view_alter()
   */
  public function useLazyBuilder(EntityInterface $host_entity, ComputedFieldDefinitionWithValuePluginInterface $computed_field_definition): bool;

  /**
   * Returns the cacheability data for the field value.
   *
   * @param \Drupal\Core\Entity\EntityInterface $host_entity
   *   The entity that the computed field is being displayed on.
   * @param \Drupal\computed_field\Field\ComputedFieldDefinitionWithValuePluginInterface $computed_field_definition
   *   The computed field definition. If this plugin is configured attachable
   *   rather than automatically attached, this parameter will be the
   *   computed_field config entity.
   *
   * @return \Drupal\Core\Cache\CacheableMetadata|null
   *   The cacheability metadata for the field value, or NULL if the field
   *   value can be cached with the host entity.
   */
  public function getCacheability(EntityInterface $host_entity, ComputedFieldDefinitionWithValuePluginInterface $computed_field_definition): ?CacheableMetadata;

  /**
   * Determines whether to attach as a base field.
   *
   * This is only called if a plugin's definition specifies that it is to
   * automatically attach to the given entity type.
   *
   * This is called from the alter hook so that plugins that attach
   * automatically can examine existing fields to determine where and how to
   * attach.
   *
   * @param array $fields
   *   The array of fields passed to hook_entity_base_field_info_alter().
   * @param \Drupal\Core\Entity\EntityTypeInterface $entity_type
   *   The entity type whose field definitions are being altered.
   *
   * @return bool
   *   Whether to attach this plugin as a base field on the given entity type.
   */
  public function attachAsBaseField($fields, EntityTypeInterface $entity_type): bool;

  /**
   * Determines whether to attach as a bundle field.
   *
   * This is only called if a plugin's definition specifies that it is to
   * automatically attach to the given entity type.
   *
   * This is called from the alter hook so that plugins that attach
   * automatically can examine existing fields to determine where and how to
   * attach.
   *
   * @param array $fields
   *   The array of fields passed to hook_entity_bundle_field_info_alter().
   * @param \Drupal\Core\Entity\EntityTypeInterface $entity_type
   *   The entity type whose field definitions are being altered.
   * @param string $bundle
   *   The bundle whose field definitions are being altered.
   *
   * @return bool
   *   Whether to attach this plugin as a bundle field on the given entity type
   *   and bundle.
   */
  public function attachAsBundleField($fields, EntityTypeInterface $entity_type, string $bundle): bool;

}
