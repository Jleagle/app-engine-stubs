<?php
namespace google\appengine\api\mail;

use google\appengine\runtime\ApplicationError;

class Message extends BaseMessage
{
  /**
   * @param mixed $emails
   *
   * @return void
   *
   * @throws \InvalidArgumentException
   */
  public function addBcc($emails)
  {
  }

  /**
   * @param mixed $emails
   *
   * @return void
   *
   * @throws \InvalidArgumentException
   */
  public function addCc($emails)
  {
  }

  /**
   * @param mixed $emails
   *
   * @return void
   *
   * @throws \InvalidArgumentException
   */
  public function addTo($emails)
  {
  }

  /**
   * @return void
   */
  public function clearBcc()
  {
  }

  /**
   * @return void
   */
  public function clearCc()
  {
  }

  /**
   * @return void
   */
  public function clearReplyTo()
  {
  }

  /**
   * @return void
   */
  public function clearTo()
  {
  }

  /**
   * @return bool
   *
   * @throws \InvalidArgumentException
   * @throws \RuntimeException
   * @throws ApplicationError
   */
  public function send()
  {
  }
}
