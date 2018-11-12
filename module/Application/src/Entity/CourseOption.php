<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of CourseOption
 *
 * @author Taras
 */
/**
 * @ORM\Entity
 * @ORM\Table(name='course_option')
 */
class CourseOption {
    //id	id_course	wieght	price

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name='id')
     */
    protected $id;
    
    /**
     * @ORM\Column(name='id_course')
     */
    protected $id_course;
    /**
     * @ORM\Column(name='weight')
     */
    protected $weight;
    /**
     * @ORM\Column(name='price')
     */
    protected $price;
    
    public function get_id() {
        return $this->id;
    }

    public function get_id_course() {
        return $this->id_course;
    }

    public function get_weight() {
        return $this->weight;
    }

    public function get_price() {
        return $this->price;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_id_course($id_course) {
        $this->id_course = $id_course;
    }

    public function set_weight($weight) {
        $this->weight = $weight;
    }

    public function set_price($price) {
        $this->price = $price;
    }

}
