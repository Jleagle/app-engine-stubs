<?php
namespace google\appengine\ext\cloud_storage_streams;

class HttpResponse
{
  const OK = 200;
  const CREATED = 201;
  const NO_CONTENT = 204;
  const PARTIAL_CONTENT = 206;
  const NOT_MODIFIED = 304;
  const RESUME_INCOMPLETE = 308;
  const BAD_REQUEST = 400;
  const UNAUTHORIZED = 401;
  const FORBIDDEN = 403;
  const NOT_FOUND = 404;
  const REQUEST_TIMEOUT = 408;
  const PRECONDITION_FAILED = 412;
  const RANGE_NOT_SATISFIABLE = 416;
  const INTERNAL_SERVER_ERROR = 500;
  const BAD_GATEWAY = 502;
  const SERVICE_UNAVAILABLE = 503;
  const GATEWAY_TIMEOUT = 504;

  /**
   * @param $code
   *
   * @return void
   */
  public static function getStatusMessage($code)
  {
  }
}
