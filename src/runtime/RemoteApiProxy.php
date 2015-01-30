<?php
namespace google\appengine\runtime;

class RemoteApiProxy extends ApiProxyBase
{
  /**
   * @param string $apiHost
   * @param int    $apiPort
   * @param string $requestId
   */
  public function __construct($apiHost, $apiPort, $requestId)
  {
  }

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
