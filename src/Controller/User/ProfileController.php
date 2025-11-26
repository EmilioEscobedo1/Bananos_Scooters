<?php
declare(strict_types=1);

namespace App\Controller\User;

use App\Controller\User\AppController;

class ProfileController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('user');
    }
    public function index()
    {
        $profile = [];
        $this->set(compact('profile'));
    }
}