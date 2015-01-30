<?php
namespace google\appengine\runtime;

class RealApiProxy extends ApiProxyBase
{
  const DEFAULT_DEADLINE_VALUE = -1.0;

  /**
   * @param string $package
   * @param string $call_name
   * @param string $request
   * @param string $response
   * @param double $deadline
   *
   * @return void
   */
  public function makeSyncCall(
    $package, $call_name, $request, $response, $deadline = null
  )
  {
  }
}
