<?php

declare(strict_types=1);

namespace App\Controller;

use App\Database\QueryBuilder;
use App\Entity\User;

class HomePageController extends AbstractController
{
    public function index()
    {
        return $this->render('homepage.html.php');
    }
}