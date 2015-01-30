<?php
namespace google\appengine\runtime;

abstract class ApiProxyBase
{
  const OK = 0;
  const RPC_FAILED = 1;
  const CALL_NOT_FOUND = 2;
  const ARGUMENT_ERROR = 3;
  const DEADLINE_EXCEEDED = 4;
  const CANCELLED = 5;
  const APPLICATION_ERROR = 6;
  const OTHER_ERROR = 7;
  const OVER_QUOTA = 8;
  const REQUEST_TOO_LARGE = 9;
  const CAPABILITY_DISABLED = 10;
  const FEATURE_DISABLED = 11;
  const RESPONSE_TOO_LARGE = 12;

  /**
   * @param $package
   * @param $call_name
   * @param $request
   * @param $response
   * @param $deadline
   *
   * @return void
   */
  public abstract function makeSyncCall(
    $package, $call_name, $request, $response, $deadline = null
  );
}
