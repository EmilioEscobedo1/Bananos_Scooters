<?php
declare(strict_types=1);

namespace App\Controller\Admin;

use App\Controller\AppController;

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