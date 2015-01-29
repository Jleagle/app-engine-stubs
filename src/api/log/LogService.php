<?php
namespace google\appengine\api\log\AppLogLine;

class LogService
{
  const LEVEL_DEBUG = 0;
  const LEVEL_INFO = 1;
  const LEVEL_WARNING = 2;
  const LEVEL_ERROR = 3;
  const LEVEL_CRITICAL = 4;
  const MAX_BATCH_SIZE = 1000;

  /**
   * @param array $options
   */
  public static function fetch(array $options = [])
  {
  }

  /**
   * @param mixed $request_ids
   * @param bool  $include_app_logs
   *
   * @return RequestLog[]
   */
  public static function fetchById($request_ids, $include_app_logs = true)
  {
  }

  /**
   * @param int $syslog_level
   *
   * @return int
   */
  public static function getAppEngineLogLevel($syslog_level)
  {
  }
}
