<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class GeneralController extends Controller
{
    public function getHome()
    {
        return View::make('general.index');
    }

    public function getAbout()
    {
        return View::make('general.about');
    }

    public function getContact()
    {
        return View::make('general.contact');
    }

    public function getPayment()
    {
        return View::make('general.payment');
    }

    public function getSubscription()
    {
        return View::make('general.subscription');
    }

    public function getCatalogue()
    {
        return View::make('general.catalogue');
    }
}
