<?php
namespace google\appengine\api\modules;

class ModulesService
{
  /**
   * @return string
   */
  public static function getCurrentInstanceId()
  {
  }

  /**
   * @return string
   */
  public static function getCurrentModuleName()
  {
  }

  /**
   * @return string
   */
  public static function getCurrentVersionName()
  {
  }

  /**
   * @param string $module
   *
   * @return string
   */
  public static function getDefaultVersion($module = null)
  {
  }

  /**
   * @param string $module
   * @param string $version
   * @param string $instance
   *
   * @return string
   */
  public static function getHostname(
    $module = null, $version = null, $instance = null
  )
  {
  }

  /**
   * @return string[]
   */
  public static function getModules()
  {
  }

  /**
   * @param string $module
   * @param string $version
   *
   * @return int
   */
  public static function getNumInstances($module = null, $version = null)
  {
  }

  /**
   * @param string $module
   *
   * @return string[]
   */
  public static function getVersions($module = null)
  {
  }

  /**
   * @param        $instances
   * @param string $module
   * @param string $version
   *
   * @return void
   */
  public static function setNumInstances(
    $instances, $module = null, $version = null
  )
  {
  }

  /**
   * @param string $module
   * @param string $version
   *
   * @return void
   */
  public static function startVersion($module, $version)
  {
  }

  /**
   * @param string $module
   * @param string $version
   *
   * @return void
   */
  public static function stopVersion($module = null, $version = null)
  {
  }
}
