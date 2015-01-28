<?php
namespace google\appengine\api\app_identity;

class AppIdentityService
{
  const PACKAGE_NAME = 'app_identity_service';
  const PARTITION_SEPARATOR = "~";
  const DOMAIN_SEPARATOR = ":";
  const MEMCACHE_KEY_PREFIX = '_ah_app_identity_';

  /**
   * @param array $scopes
   *
   * @return array
   *
   * @throws \InvalidArgumentException
   * @throws AppIdentityException
   */
  public function getAccessToken(array $scopes)
  {
  }

  /**
   * @return string
   */
  public function getApplicationId()
  {
  }

  /**
   * @return string
   */
  public function getDefaultVersionHostname()
  {
  }

  /**
   * @return PublicCertificate[]
   *
   * @throws AppIdentityException
   */
  public function getPublicCertificates()
  {
  }

  /**
   * @return string
   *
   * @throws AppIdentityException
   */
  public function getServiceAccountName()
  {
  }

  /**
   * @param string $bytes_to_sign
   *
   * @return array
   *
   * @throws \InvalidArgumentException
   * @throws AppIdentityException
   */
  public function signForApp($bytes_to_sign)
  {
  }
}
