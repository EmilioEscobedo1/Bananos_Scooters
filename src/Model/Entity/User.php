<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;

class User extends Entity
{
    protected function _setPassword(string $password)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($password);
    }

    protected array $_accessible = [
        'nombre' => true,
        'username' => true,
        'password' => true,
        'email' => true,
        'admin' => true,
        'created' => true,
        'modified' => true,
        'metodo_de_pagos' => true,
        'transacciones' => true,
        'viajes' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected array $_hidden = [
        'password',
    ];
}
