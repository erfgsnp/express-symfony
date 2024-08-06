<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class HealthController extends Controller
{
    /**
     * @Route("/ht", name="healthcheck")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return new JsonResponse(["status" => "system is healthy"]); 
    }
}