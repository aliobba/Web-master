<?php

namespace BonPlanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RateController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }
}
