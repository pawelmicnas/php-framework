<?php

declare(strict_types=1);

namespace App\Controller;

use App\Database\QueryBuilder;
use App\Entity\User;

class UsersController extends AbstractController
{
    public function index()
    {
        $queryBuilder = new QueryBuilder($this->app->get('database')->getConnection());
        $users = $queryBuilder->selectAll(new User());

        return $this->render('users.html.php', [
            'users' => $users,
        ]);
    }
}