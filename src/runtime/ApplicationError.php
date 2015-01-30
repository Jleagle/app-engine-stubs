<?php
namespace google\appengine\runtime;

class ApplicationError extends Error
{
  /**
   * @param $applicationError
   * @param $errorDetail
   */
  public function __construct($applicationError, $errorDetail)
  {
  }

  /**
   * @return void
   */
  public function getApplicationError()
  {
  }
}
