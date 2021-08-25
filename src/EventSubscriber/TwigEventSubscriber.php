<?php

namespace App\EventSubscriber;

use App\Repository\NpcRepository;
use App\Repository\CharacterRepository;
use App\Repository\LocationRepository;
use App\Repository\ItemRepository;
use App\Repository\OtherRepository;
use App\Repository\CreatureRepository;
use App\Repository\DashRepository;
use App\Repository\GameRepository;
use Twig\Environment;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;

class TwigEventSubscriber implements EventSubscriberInterface
{
    private $twig;
    private $npcRepository;
    private $characterRepository;
    private $locationRepository;
    private $itemRepository;
    private $otherRepository;
    private $creatureRepository;
    private $gameRepository;
    private $dashRepository;

    public function __construct(Environment $twig, CharacterRepository $characterRepository, NpcRepository $npcRepository, CreatureRepository $creatureRepository, ItemRepository $itemRepository, LocationRepository $locationRepository, OtherRepository $otherRepository, DashRepository $dashRepository, GameRepository $gameRepository)
    {
        $this->twig = $twig;
        $this->characterRepository = $characterRepository;
        $this->npcRepository = $npcRepository;
        $this->creatureRepository = $creatureRepository;
        $this->itemRepository = $itemRepository;
        $this->locationRepository = $locationRepository;
        $this->otherRepository = $otherRepository;
        $this->dashRepository = $dashRepository;
        $this->gameRepository = $gameRepository;
    }

    public function onKernelController(ControllerEvent $event)
    {
        $this->twig->addGlobal('characters', $this->characterRepository->findAll());
        $this->twig->addGlobal('npcs', $this->npcRepository->findAll());
        $this->twig->addGlobal('creatures', $this->creatureRepository->findAll());
        $this->twig->addGlobal('items', $this->itemRepository->findAll());
        $this->twig->addGlobal('locations', $this->locationRepository->findAll());
        $this->twig->addGlobal('others', $this->otherRepository->findAll());
        $this->twig->addGlobal('dashs', $this->dashRepository->findAll());
        $this->twig->addGlobal('game', $this->gameRepository->findOneBy(['name' => 'current']));
    }

    public static function getSubscribedEvents()
    {
        return [
            'kernel.controller' => 'onKernelController',
        ];
    }
}
