<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Creature;
use App\Entity\Npc;
use App\Entity\Character;
use App\Entity\Location;
use App\Entity\Item;
use App\Entity\Other;
use App\Entity\Admin;
use App\Entity\Dash;
use App\Entity\Game;
use App\Entity\Encounter;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }
    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Admin Dashboard');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linktoRoute('To Control', 'fas fa-home', 'player_display_control');
        yield MenuItem::linkToCrud('Characters', 'fas fa-map-marker-alt', Character::class);
        yield MenuItem::linkToCrud('NPCs', 'fas fa-comments', Npc::class);
        yield MenuItem::linkToCrud('Creatures', 'fas fa-comments', Creature::class);
        yield MenuItem::linkToCrud('Locations', 'fas fa-comments', Location::class);
        yield MenuItem::linkToCrud('Items', 'fas fa-comments', Item::class);
        yield MenuItem::linkToCrud('Others', 'fas fa-comments', Other::class);
        // yield MenuItem::linkToCrud('Admins', 'fas fa-comments', Admin::class);
        // yield MenuItem::linkToCrud('Dashs', 'fas fa-comments', Dash::class);
        // yield MenuItem::linkToCrud('Encounters', 'fas fa-comments', Encounter::class);
        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
