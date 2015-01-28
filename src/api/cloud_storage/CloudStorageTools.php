<?php
namespace google\appengine\api\cloud_storage;

class CloudStorageTools
{
  const GS_PREFIX = 'gs://';
  const BLOB_KEY_HEADER = "X-AppEngine-BlobKey";
  const BLOB_RANGE_HEADER = "X-AppEngine-BlobRange";
  const MAX_IMAGE_SERVING_SIZE = 1600;
  const LOCAL_ENDPOINT = "/_ah/gcs";
  const PRODUCTION_HOST_SUBDOMAIN_FORMAT = "%s.storage.googleapis.com";
  const PRODUCTION_HOST_PATH_FORMAT = "storage.googleapis.com";
  const GS_FILENAME_FORMAT = "gs://%s/%s";

  /**
   * @param string  $success_path
   * @param mixed[] $options
   *
   * @return string
   *
   * @throws \InvalidArgumentException
   * @throws CloudStorageException
   */
  public static function createUploadUrl($success_path, array $options = [])
  {
  }

  /**
   * @param string $gs_filename
   *
   * @return void
   *
   * @throws \InvalidArgumentException
   * @throws CloudStorageException
   */
  public static function deleteImageServingUrl($gs_filename)
  {
  }

  /**
   * @param resource $handle
   *
   * @return string
   *
   * @throws \InvalidArgumentException
   */
  public static function getContentType($handle)
  {
  }

  /**
   * @return string
   */
  public static function getDefaultGoogleStorageBucketName()
  {
  }

  /**
   * @param string $bucket
   * @param string $object
   *
   * @return string
   *
   * @throws \InvalidArgumentException
   */
  public static function getFilename($bucket, $object)
  {
  }

  /**
   * @param string  $gs_filename
   * @param mixed[] $options
   *
   * @return string
   *
   * @throws \InvalidArgumentException
   * @throws CloudStorageException
   */
  public static function getImageServingUrl($gs_filename, array $options = [])
  {
  }

  /**
   * @param resource $handle
   *
   * @return array
   *
   * @throws \InvalidArgumentException
   */
  public static function getMetaData($handle)
  {
  }

  /**
   * @param string $gs_filename
   * @param bool   $use_https
   *
   * @return string
   *
   * @throws \InvalidArgumentException
   */
  public static function getPublicUrl($gs_filename, $use_https)
  {
  }

  /**
   * @param string $filename
   * @param string $bucket
   * @param string $object
   *
   * @return bool
   */
  public static function parseFilename($filename, $bucket, $object)
  {
  }

  /**
   * @param string  $gs_filename
   * @param mixed[] $options
   *
   * @return void
   *
   * @throws \InvalidArgumentException
   */
  public static function serve($gs_filename, array $options = [])
  {
  }

  /**
   * @param mixed $new_header_func
   *
   * @return void
   */
  public static function setSendHeaderFunction($new_header_func)
  {
  }
}
