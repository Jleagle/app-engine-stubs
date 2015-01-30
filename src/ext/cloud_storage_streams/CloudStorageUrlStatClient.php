<?php
namespace google\appengine\ext\cloud_storage_streams;

class CloudStorageUrlStatClient extends CloudStorageClient
{
  const MAX_KEYS = 1000;

  /**
   * @param string   $bucket
   * @param string   $object
   * @param resource $context
   * @param          $flags
   */
  public function __construct($bucket, $object, $context, $flags)
  {
  }

  /**
   * @return void
   */
  public function stat()
  {
  }
}
