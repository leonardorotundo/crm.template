<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
    
    public function indexAction(){
        $user = $this->getUser();
        if(is_null($user)){
            return $this->redirectToRoute("fos_user_security_login");
        }
        
        return $this->redirectToRoute("app_dashboard");
    }
    
    public function dashboardAction(){
        return $this->render('AppBundle::dashboard.html.twig',['name'=>'leo']);
    }
    
}
