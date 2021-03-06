<?php
declare(strict_types=1);
namespace James\Events\Content;

use James\Events\Event;

final class Deleted extends Event
{
  public const event = 'CONTENT_DELETED';

  private $line;

  public function __construct(array $args)
  {
    $this->line = $args['deleted'];
  }

  public function getDeleted(): string
  {
    return $this->line;
  }
}
