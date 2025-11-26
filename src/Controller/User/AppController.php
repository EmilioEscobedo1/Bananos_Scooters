<?php
declare(strict_types=1);


namespace App\Controller\User;

use Cake\Controller\Controller;
use Cake\Event\EventInterface;
use Cake\Http\Response; 

class AppController extends Controller
{
    public function beforeFilter(EventInterface $event): void
    {
        parent::beforeFilter($event);

        $identidad = $this->request->getAttribute('identity');
        if (empty($identidad) || $identidad->get('admin') != 0) {
            $this->Flash->error(__('No tienes permiso para acceder a esta sección.'));
            $redirectUrl = ['prefix' => false, 'controller' => 'Pages', 'action' => 'display', 'home'];
            $response = $this->redirect($redirectUrl);
            $this->setResponse($response);
        }
    }
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Flash');
        
        $this->loadComponent('Authentication.Authentication');
    }
}
