<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use Cake\Event\EventInterface;
use App\Controller\User\AppController;

class DashboardController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('admin');
    }
    public function index()
    {
        $dashboard = [];
        $this->set(compact('dashboard'));
    }
}