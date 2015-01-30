<?php
namespace google\appengine\ext\cloud_storage_streams;

class CloudStorageRenameClient extends CloudStorageClient
{
  /**
   * @param          $from_bucket
   * @param          $from_object
   * @param          $to_bucket
   * @param          $to_object
   * @param resource $context
   */
  public function __construct(
    $from_bucket, $from_object, $to_bucket, $to_object, $context
  )
  {
  }

  /**
   * @return void
   */
  public function rename()
  {
  }
}
