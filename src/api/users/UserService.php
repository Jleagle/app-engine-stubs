<?php
namespace google\appengine\api\users\UsersException;

class UserService
{
  /**
   * @param string $destination_url
   * @param string $federated_identity
   *
   * @return string
   *
   * @throws UsersException
   */
  public static function createLoginURL(
    $destination_url = null, $federated_identity = null
  )
  {
  }

  /**
   * @param string $destination_url
   *
   * @return string
   *
   * @throws UsersException
   */
  public static function createLogoutURL($destination_url)
  {
  }

  /**
   * @return User
   */
  public static function getCurrentUser()
  {
  }

  /**
   * @return bool
   */
  public static function isCurrentUserAdmin()
  {
  }
}
