<?php

namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;

use App\Entity\Creature;
use App\Entity\Npc;
use App\Entity\Player;
use App\Entity\Location;
use App\Entity\Item;
use App\Entity\Other;
use App\Entity\Admin;
use App\Entity\Session;

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
            ->setTitle('Html');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linktoRoute('Back to the website', 'fas fa-home', 'homepage');
        yield MenuItem::linkToCrud('Players', 'fas fa-map-marker-alt', Player::class);
        yield MenuItem::linkToCrud('NPCs', 'fas fa-comments', Npc::class);
        yield MenuItem::linkToCrud('Creatures', 'fas fa-comments', Creature::class);
        yield MenuItem::linkToCrud('Locations', 'fas fa-comments', Location::class);
        yield MenuItem::linkToCrud('Items', 'fas fa-comments', Item::class);
        yield MenuItem::linkToCrud('Other', 'fas fa-comments', Other::class);
        yield MenuItem::linkToCrud('Sessions', 'fas fa-comments', Session::class);
        yield MenuItem::linkToCrud('Admins', 'fas fa-comments', Admin::class);

        // yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
