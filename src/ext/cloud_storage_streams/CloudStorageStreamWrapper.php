<?php
namespace google\appengine\ext\cloud_storage_streams;

class CloudStorageStreamWrapper
{
  const STREAM_OPEN_FOR_INCLUDE = 128;

  public $context;

  /**
   *
   */
  public function __construct()
  {
  }

  /**
   * @return void
   */
  public function __destruct()
  {
  }

  /**
   * @return void
   */
  public function dir_closedir()
  {
  }

  /**
   * @param $path
   * @param $options
   *
   * @return void
   */
  public function dir_opendir($path, $options)
  {
  }

  /**
   * @return string
   */
  public function dir_readdir()
  {
  }

  /**
   * @return bool
   */
  public function dir_rewinddir()
  {
  }

  /**
   * @return void
   */
  public function getContentType()
  {
  }

  /**
   * @return void
   */
  public function getMetaData()
  {
  }

  /**
   * @param $path
   * @param $mode
   * @param $options
   */
  public function mkdir($path, $mode, $options)
  {
  }

  /**
   * @param $from
   * @param $to
   *
   * @return bool
   */
  public function rename($from, $to)
  {
  }

  /**
   * @param $path
   * @param $options
   *
   * @return void
   */
  public function rmdir($path, $options)
  {
  }

  /**
   * @return void
   */
  public function stream_cast()
  {
  }

  /**
   * @return void
   */
  public function stream_close()
  {
  }

  /**
   * @return bool
   */
  public function stream_eof()
  {
  }

  /**
   * @return bool
   */
  public function stream_flush()
  {
  }

  /**
   * @param $path
   * @param $option
   * @param $value
   *
   * @return void
   */
  public function stream_metadata($path, $option, $value)
  {
  }

  /**
   * @param $path
   * @param $mode
   * @param $options
   * @param $opened_path
   *
   * @return void
   */
  public function stream_open($path, $mode, $options, $opened_path)
  {
  }

  /**
   * @param $count
   *
   * @return void
   */
  public function stream_read($count)
  {
  }

  /**
   * @param $offset
   * @param $whence
   *
   * @return void
   */
  public function stream_seek($offset, $whence)
  {
  }

  /**
   * @param $option
   * @param $arg1
   * @param $arg2
   *
   * @return void
   */
  public function stream_set_option($option, $arg1, $arg2)
  {
  }

  /**
   * @return void
   */
  public function stream_stat()
  {
  }

  /**
   * @return void
   */
  public function stream_tell()
  {
  }

  /**
   * @param $data
   *
   * @return void
   */
  public function stream_write($data)
  {
  }

  /**
   * @param $path
   *
   * @return void
   */
  public function unlink($path)
  {
  }

  /**
   * @param $path
   * @param $flags
   *
   * @return void
   */
  public function url_stat($path, $flags)
  {
  }
}
