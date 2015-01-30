<?php
namespace google\appengine\testing;

use google\appengine\runtime\ApiProxyBase;

class ApiProxyMock extends ApiProxyBase
{
  /**
   * @param $package
   * @param $call_name
   * @param $req
   * @param $resp
   *
   * @return void
   */
  public function expectCall($package, $call_name, $req, $resp)
  {
  }

  /**
   * @param $testcase
   *
   * @return void
   */
  public function init($testcase)
  {
  }

  /**
   * @param $package
   * @param $call_name
   * @param $req
   * @param $resp
   * @param $deadline
   *
   * @return void
   */
  public function makeSyncCall(
    $package, $call_name, $req, $resp, $deadline = null
  )
  {
  }

  /**
   * @return void
   */
  public function verify()
  {
  }
}
