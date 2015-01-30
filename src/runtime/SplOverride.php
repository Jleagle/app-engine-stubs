<?php
namespace google\appengine\runtime;

class SplOverride
{
  const  DEFAULT_CONTENT_TYPE = 'binary/octet-stream';

  /**
   * @return bool | string
   */
  public static function gethostname()
  {
  }

  /**
   * @param string $filename
   * @param string $destination
   * @param array  $context_options
   *
   * @return void
   */
  public static function move_uploaded_file(
    $filename, $destination, array $context_options = null
  )
  {
  }
}
