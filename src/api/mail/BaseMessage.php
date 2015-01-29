<?php
namespace google\appengine\api\mail;

class BaseMessage
{
  /**
   * @param array $options
   *
   * @throws \InvalidArgumentException
   */
  public function __construct(array $options = null)
  {
  }

  /**
   * @param string $filename
   * @param mixed  $data
   * @param string $content_id
   *
   * @return void
   *
   * @throws \InvalidArgumentException
   */
  public function addAttachment($filename, $data, $content_id = null)
  {
  }

  /**
   * @param array $attach_array
   *
   * @return void
   *
   * @throws \InvalidArgumentException
   */
  public function addAttachmentArray(array $attach_array)
  {
  }

  /**
   * @param array $attach_array
   *
   * @return void
   *
   * @throws \InvalidArgumentException
   */
  public function addAttachmentsArray(array $attach_array)
  {
  }

  /**
   * @param string $key
   * @param string $value
   *
   * @return void
   *
   * @throws \InvalidArgumentException
   */
  public function addHeader($key, $value)
  {
  }

  /**
   * @param array $header_array
   *
   * @return void
   */
  public function addHeaderArray(array $header_array)
  {
  }

  /**
   * @return void
   */
  public function clearAttachments()
  {
  }

  /**
   * @return void
   */
  public function clearHeaders()
  {
  }


  /**
   * @param string $text
   *
   * @return void
   *
   * @throws \InvalidArgumentException
   */
  public function setHtmlBody($text)
  {
  }

  /**
   * @param string $email
   *
   * @return void
   *
   * @throws \InvalidArgumentException
   */
  public function setReplyTo($email)
  {
  }

  /**
   * @param string $email
   *
   * @return void
   *
   * @throws \InvalidArgumentException
   */
  public function setSender($email)
  {
  }

  /**
   * @param string $subject
   *
   * @return void
   *
   * @throws \InvalidArgumentException
   */
  public function setSubject($subject)
  {
  }

  /**
   * @param string $text
   *
   * @return bool
   *
   * @throws \InvalidArgumentException
   */
  public function setTextBody($text)
  {
  }
}
