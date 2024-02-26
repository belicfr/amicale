<?php

namespace MvcLite\Controllers;

use MvcliteCore\Controllers\Controller;
use MvcLite\Models\Offer;
use MvcliteCore\Views\View;

class IndexController extends Controller
{



    public function render(): void
    {
        // we keep the last 10 offers
        $offers = $this->getOffers();
        if (count($offers) > 10) {
            $offers = array_slice($offers, -10);
        }
        View::render("index", [
            "offers" => $offers
        ]);

    }

    private function getOffers(): array
    {
        return Offer::getOffers();
    }

}