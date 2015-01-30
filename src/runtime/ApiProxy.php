<?php
namespace google\appengine\runtime;

class ApiProxy
{
  /**
   * @param string $package
   * @param string $call_name
   * @param string $request
   * @param string $response
   * @param double $deadline
   */
  public static function makeSyncCall(
    $package, $call_name, $request, $response, $deadline = null
  )
  {
  }

  /**
   * @param resource $apiProxy
   */
  public static function setApiProxy($apiProxy)
  {
  }
}
