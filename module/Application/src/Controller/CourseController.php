<?php

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CourseController
 *
 * @author masha
 */
class CourseController extends AbstractActionController {
    
    public function __construct($entityManager) {
        $this->entityManager = $entityManager;
    }
    
    public function addAction(){
        
    }
    
    public function editAction(){
        
    }
    
    public function deleteAction(){
        
    }
    //put your code here
}
