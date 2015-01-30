<?php
namespace google\appengine\ext\cloud_storage_streams;

class CloudStorageDirectoryClient extends CloudStorageClient
{
  const MAX_KEYS = 1000;

  /**
   * @param          $bucket_name
   * @param          $object_name
   * @param resource $context
   */
  public function __construct($bucket_name, $object_name, $context)
  {
  }

  /**
   * @return void
   */
  public function close()
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
   * @return bool
   */
  public function initialise()
  {
  }

  /**
   * @return bool
   */
  public function mkdir()
  {
  }

  /**
   * @return bool
   */
  public function rmdir()
  {
  }
}
