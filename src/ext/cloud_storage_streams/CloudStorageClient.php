<?php
namespace google\appengine\ext\cloud_storage_streams;

class CloudStorageClient
{
  const METADATA_HEADER_PREFIX = 'x-goog-meta-';
  const DEFAULT_READ_SIZE = 524288;
  const DEFAULT_READ_CACHE_EXPIRY_SECONDS = 3600;
  const DEFAULT_MAXIMUM_NUMBER_OF_RETRIES = 2;
  const DEFAULT_WRITABLE_CACHE_EXPIRY_SECONDS = 600;
  const READ_SCOPE = "https://www.googleapis.com/auth/devstorage.read_only";
  const WRITE_SCOPE = "https://www.googleapis.com/auth/devstorage.read_write";
  const FULL_SCOPE = "https://www.googleapis.com/auth/devstorage.full_control";
  const OAUTH_TOKEN_FORMAT = "OAuth %s";
  const PARTIAL_CONTENT_RANGE_FORMAT = "bytes %d-%d/*";
  const FINAL_CONTENT_RANGE_FORMAT = "bytes %d-%d/%d";
  const FINAL_CONTENT_RANGE_NO_DATA = "bytes */%d";
  const DELIMITER = '/';
  const FOLDER_SUFFIX = '_$folder$';
  const WRITABLE_TEMP_FILENAME = "/_ah_is_writable_temp_file";
  const S_IFREG = 32768;
  const S_IFDIR = 16384;
  const S_IRWXU = 448;
  const S_IRUSR = 256;
  const S_IWUSR = 128;
  const S_IXUSR = 64;
  const S_IRWXG = 56;
  const S_IRGRP = 32;
  const S_IWGRP = 16;
  const S_IXGRP = 8;
  const S_IRWXO = 7;
  const S_IROTH = 4;
  const S_IWOTH = 2;
  const S_IXOTH = 1;
  const CONTENT_RANGE_REGEX = '/bytes\s+(\d+)-(\d+)\/(\d+)/i';
  const MEMCACHE_KEY_FORMAT = "_ah_gs_read_cache_%s_%s";
  const WRITABLE_MEMCACHE_KEY_FORMAT = "_ah_gs_write_bucket_cache_%s";

  /**
   * @param string   $bucket
   * @param string   $object
   * @param resource $context
   */
  public function __construct($bucket, $object = null, $context = null)
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
  public function close()
  {
  }

  /**
   * @param $bucket
   * @param $object
   *
   * @return void
   */
  public static function createObjectUrl($bucket, $object = null)
  {
  }

  /**
   * @return void
   */
  public function delete()
  {
  }

  /**
   * @return void
   */
  public function dir_readdir()
  {
  }

  /**
   * @return void
   */
  public function dir_rewinddir()
  {
  }

  /**
   * @return void
   */
  public function eof()
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
   * @return void
   */
  public function initialize()
  {
  }

  /**
   * @param $count_bytes
   *
   * @return void
   */
  public function read($count_bytes)
  {
  }

  /**
   * @param $offset
   * @param $whence
   *
   * @return void
   */
  public function seek($offset, $whence)
  {
  }

  /**
   * @return void
   */
  public function stat()
  {
  }

  /**
   * @return void
   */
  public function tell()
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
