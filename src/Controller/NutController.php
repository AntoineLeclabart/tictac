<?php

namespace App\Controller;

use App\Model\NutManager;

class NutController extends AbstractAPIController {

    public function index(): string
    {
        $nutManager = new NutManager();
        $nuts = $nutManager->selectAll();

        return json_encode($nuts);
    }
}