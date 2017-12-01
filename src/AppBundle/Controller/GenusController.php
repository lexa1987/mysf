<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class GenusController 
{

    /**
     * @Route("/genus")
     */
    public function showAction()
    {
        return new Response('Under the sea!');
    }
}