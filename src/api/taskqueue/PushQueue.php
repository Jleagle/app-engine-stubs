<?php
namespace google\appengine\api\taskqueue;

/**
 * Class PushQueue
 */
class PushQueue
{
  /**
   *
   */
  const MAX_TASKS_PER_ADD = 100;

  /**
   * Construct a PushQueue
   *
   * @param string $name
   */
  public function __construct($name = 'default')
  {
  }

  /**
   * Add tasks to the queue.
   *
   * @param PushTask[] $tasks
   *
   * @return array
   *
   * @throws TaskAlreadyExistsException
   * @throws TaskQueueException
   */
  public function addTasks(array $tasks)
  {
  }

  /**
   * Return the queue's name.
   *
   * @return string
   */
  public function getName()
  {
  }
}
