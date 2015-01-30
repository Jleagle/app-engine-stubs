<?php
namespace google\appengine\runtime;

class MemcacheUtils
{
  const FLAG_TYPE_MASK = 7;
  const TYPE_STR = 0;
  const TYPE_UNICODE = 1;
  const TYPE_INT = 3;
  const TYPE_LONG = 4;
  const TYPE_BOOL = 5;
  const TYPE_FLOAT = 6;
  const TYPE_PHP_SERIALIZED = 7;

  /**
   * @param $value
   * @param $flag
   *
   * @return void
   */
  public static function deserializeValue($value,  $flag)
  {
  }

  /**
   * @param $value
   * @param $flag
   *
   * @return void
   */
  public static function serializeValue($value,  $flag)
  {
  }

  /**
   * @param $keyValues
   * @param $expire
   * @param $policy
   *
   * @return void
   */
  public static function setMultiWithPolicy($keyValues,  $expire,  $policy)
  {
  }
}
