<?php

namespace MvcLite\Controllers;

use MvcLite\Controllers\Engine\Controller;
use MvcLite\Engine\DevelopmentUtilities\Debug;
use MvcLite\Models\Offer;
use MvcLite\Models\User;
use MvcLite\Views\Engine\View;

class SellController extends Engine\Controller
{



    public function render(): void
    {
        View::render("Sell", [
            "offers" => $this->getVerifiedSalesOffers()
        ]);
    }

    private function getVerifiedSalesOffers(): array
    {
        return Offer::getVerifiedOffersByCategory("1");
    }
}