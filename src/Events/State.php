<?php
namespace James\Events;

use James\Events\State\{ HasChange, HasNotChange };

final class State
{
  /** @var EventManager */
  private $eventManager;

  public function __construct(Manager $eventManager)
  {
    $this->eventManager = $eventManager;
    $this->eventManager->addEventListener([
      [HasChange::event, HasChange::class],
      [HasNotChange::event, HasNotChange::class],
    ], $this);
  }
}
