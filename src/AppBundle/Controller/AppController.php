<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AppController
 *
 * @author bairesdev02
 */
class AppController extends Controller {
    /**
     * @Route("/test")
     */
    public function showController(){
        $data = array("response"=>"1");
        return new \Symfony\Component\HttpFoundation\JsonResponse($data);
    }
}
