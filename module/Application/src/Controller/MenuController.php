<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
/**
 * Description of MenuController
 *
 * @author masha
 */
class MenuController extends AbstractActionController {

    //put your code here
    public function __construct($entityManager) {
        $this->entityManager = $entityManager;
    }

    public function addCourseAction() {
        
    }

    public function editCourseAction() {
        
    }

    public function deleteCourseAction() {
        
    }

    public function editMenuAction() {
        
    }

    public function showMenuAction() {
        
    }

}
