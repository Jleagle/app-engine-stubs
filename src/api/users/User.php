<?php
namespace google\appengine\api\users\UsersException;

class User
{
  /**
   * @param string $email
   * @param string $federated_identity
   * @param string $federated_provider
   * @param        $user_id
   *
   * @throws \InvalidArgumentException
   */
  public function __construct(
    $email = null, $federated_identity = null, $federated_provider = null,
    $user_id = null
  )
  {
  }

  /**
   * @return string
   */
  public function __toString()
  {
  }

  /**
   * @return string
   */
  public function getAuthDomain()
  {
  }

  /**
   * @return string
   */
  public function getEmail()
  {
  }

  /**
   * @return string
   */
  public function getFederatedIdentity()
  {
  }

  /**
   * @return string
   */
  public function getFederatedProvider()
  {
  }

  /**
   * @return string
   */
  public function getNickname()
  {
  }

  /**
   * @return string
   */
  public function getUserId()
  {
  }
}
