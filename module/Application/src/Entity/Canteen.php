<?php

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Canteen
 *
 * @author Taras
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="canteen")
 */
class Canteen {
    //id	name	adress	city	post_code	user_id
    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name="id")   
     */
    protected $id;
    
    /** 
     * @ORM\Column(name="name")  
     */
    protected $name;
    
    /** 
     * @ORM\Column(name="adress")  
     */
    protected $adress;
    
    /** 
     * @ORM\Column(name="city")  
     */
    protected $city;
    
    /** 
     * @ORM\Column(name="post_code")  
     */
    protected $post;
    
    /** 
     * @ORM\Column(name="user_id")  
     */
    protected $user_id;
    
    public function get_id() {
        return $this->id;
    }

    public function get_name() {
        return $this->name;
    }

    public function get_adress() {
        return $this->adress;
    }

    public function get_city() {
        return $this->city;
    }

    public function get_post() {
        return $this->post;
    }

    public function get_user_id() {
        return $this->user_id;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_name($name) {
        $this->name = $name;
    }

    public function set_adress($adress) {
        $this->adress = $adress;
    }

    public function set_city($city) {
        $this->city = $city;
    }

    public function set_post($post) {
        $this->post = $post;
    }

    public function set_user_id($user_id) {
        $this->user_id = $user_id;
    }


    
            
}
