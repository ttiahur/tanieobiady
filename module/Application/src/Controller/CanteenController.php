<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Entity\Canteen;

/**
 * Description of CanteenController
 *
 * @author masha
 */
class CanteenController extends AbstractActionController {

    
    /**
     * Entity manager.
     * @var Doctrine\ORM\EntityManager
     */
    protected $entityManager;

    public function __construct($entityManager) {
        $this->entityManager = $entityManager;
    }

    public function addAction() {
        
    }

    public function editAction() {
        
    }

    public function deleteAction() {
        
    }
    
    public function showAction(){
        
        $canteen = $this->entityManager->getRepository(Canteen::class)->findAll();
//        $canteenUnit  = new Canteen();
//        $canteenUnit->set_name('Mala wyspa');
//        $canteenUnit->set_adress('Bursaki 2');
//        $canteenUnit->set_city('Lublin');
//        $canteenUnit->set_post('20-081');
//        $canteenUnit->set_user_id(3);
//        $this->entityManager->persist($canteenUnit);
//        $this->entityManager->flush();
        var_dump($canteen);
        exit();
    }

}
