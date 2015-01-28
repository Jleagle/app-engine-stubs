<?php
namespace google\appengine\api\taskqueue;

class PushTask
{
  const MAX_DELAY_SECONDS = 2592000;
  const MAX_NAME_LENGTH = 500;
  const MAX_TASK_SIZE_BYTES = 102400;
  const MAX_URL_LENGTH = 2083;
  const NAME_PATTERN = '/^[a-zA-Z0-9_-]+$/';

  /**
   * @param string $url_path
   * @param array  $query_data
   * @param array  $options
   */
  public function __construct(
    $url_path, array $query_data = [], array $options = []
  )
  {
  }

  /**
   * @param string $queue_name
   *
   * @return string
   */
  public function add($queue_name = 'default')
  {
  }

  /**
   * @return float
   */
  public function getDelaySeconds()
  {
  }

  /**
   * @return string[]
   */
  public function getHeaders()
  {
  }

  /**
   * @return string
   */
  public function getMethod()
  {
  }

  /**
   * @return string
   */
  public function getName()
  {
  }

  /**
   * @return array
   */
  public function getQueryData()
  {
  }

  /**
   * @return string
   */
  public function getUrl()
  {
  }

}
