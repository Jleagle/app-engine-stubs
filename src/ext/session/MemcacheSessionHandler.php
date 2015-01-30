<?php
namespace google\appengine\ext\session;

class MemcacheSessionHandler
{
  const SESSION_PREFIX = '_ah_sess_';

  /**
   * @param MemcacheContainer $memcacheContainer
   */
  public function __construct(MemcacheContainer $memcacheContainer = null)
  {
  }

  /**
   * @return bool
   */
  public function close()
  {
  }

  /**
   * @param MemcacheContainer $memcacheContainer
   */
  public static function configure(MemcacheContainer $memcacheContainer = null)
  {
  }

  /**
   * @param string $id
   *
   * @return bool
   */
  public function destroy($id)
  {
  }

  /**
   * @param int $maxlifetime
   *
   * @return bool
   */
  public function gc($maxlifetime)
  {
  }

  /**
   * @param string $savePath
   * @param string $sessionName
   *
   * @return bool
   */
  public function open($savePath, $sessionName)
  {
  }

  /**
   * @param string $id
   *
   * @return string
   */
  public function read($id)
  {
  }

  /**
   * @param string $id
   * @param string $data
   *
   * @return bool
   */
  public function write($id, $data)
  {
  }
}
