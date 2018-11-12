<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of CourseCategory
 *
 * @author Taras
 */
/**
 * @ORM\Entity
 * @ORM\Table(name='category')
 */
class CourseCategory {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name='id')
     */
    protected $id;
    
    /**
     * @ORM\Column(name='name')
     */
    protected $name;
    
    public function get_id() {
        return $this->id;
    }

    public function get_name() {
        return $this->name;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_name($name) {
        $this->name = $name;
    }


}
