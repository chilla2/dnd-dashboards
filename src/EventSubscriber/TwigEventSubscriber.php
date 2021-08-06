<?php

namespace App\EventSubscriber;

use App\Repository\NpcRepository;
use App\Repository\SessionRepository;
use App\Repository\PlayerRepository;
use App\Repository\LocationRepository;
use App\Repository\ItemRepository;
use App\Repository\OtherRepository;
use App\Repository\CreatureRepository;
use Twig\Environment;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;

class TwigEventSubscriber implements EventSubscriberInterface
{
    private $twig;
    private $npcRepository;
    private $playerRepository;
    private $locationRepository;
    private $itemRepository;
    private $otherRepository;
    private $creatureRepository;
    private $sessionRepository;

    public function __construct(Environment $twig, PlayerRepository $playerRepository, NpcRepository $npcRepository, CreatureRepository $creatureRepository, SessionRepository $sessionRepository, ItemRepository $itemRepository, LocationRepository $locationRepository, OtherRepository $otherRepository)
    {
        $this->twig = $twig;
        $this->playerRepository = $playerRepository;
        $this->npcRepository = $npcRepository;
        $this->creatureRepository = $creatureRepository;
        $this->sessionRepository = $sessionRepository;
        $this->itemRepository = $itemRepository;
        $this->locationRepository = $locationRepository;
        $this->otherRepository = $otherRepository;
    }

    public function onKernelController(ControllerEvent $event)
    {
        $this->twig->addGlobal('players', $this->playerRepository->findAll());
        $this->twig->addGlobal('sessions', $this->sessionRepository->findAll());
        $this->twig->addGlobal('npcs', $this->npcRepository->findAll());
        $this->twig->addGlobal('creatures', $this->creatureRepository->findAll());
        $this->twig->addGlobal('items', $this->itemRepository->findAll());
        $this->twig->addGlobal('locations', $this->locationRepository->findAll());
        $this->twig->addGlobal('others', $this->otherRepository->findAll());
    }

    public static function getSubscribedEvents()
    {
        return [
            'kernel.controller' => 'onKernelController',
        ];
    }
}
