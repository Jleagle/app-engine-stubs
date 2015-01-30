<?php
namespace google\appengine\ext\cloud_storage_streams;

class CloudStorageWriteClient extends CloudStorageClient
{
  const WRITE_CHUNK_SIZE = 262144;
  const METADATA_KEY_REGEX = "/^[[:alnum:]-]+$/";
  const METADATA_VALUE_REGEX = "/^[[:print:]]*$/";
  const METADATA_HEADER_PREFIX = 'x-goog-meta-';

  /**
   * @param string   $bucket
   * @param string   $object
   * @param resource $context
   */
  public function __construct($bucket, $object, $context)
  {
  }

  /**
   * @return void
   */
  public function close()
  {
  }

  /**
   * @return void
   */
  public function flush()
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
   * @return bool
   */
  public function initialize()
  {
  }

  /**
   * @param $data
   *
   * @return void
   */
  public function write($data)
  {
  }
}
