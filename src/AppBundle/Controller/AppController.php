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
 * @author Leonardo Rotundo <leonardorotundo@gmail.com>
 */
class AppController extends Controller {
    /**
     * @Route("/", name="index")
     */
    public function indexController(){
        $user = $this->getUser();
        if(is_null($user)){
            return $this->redirectToRoute("fos_user_security_login");
        }  
        
        return $this->redirectToRoute("show");
    }
    /**
     * @Route("/dashboard", name="show")
     */
    public function showController(){
        
    }
}
