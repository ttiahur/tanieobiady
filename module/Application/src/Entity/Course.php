<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Course
 *
 * @author Taras
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="course")
 */
class Course {
    //id	id_category	id_canteen	status	allergic	description	days
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(name='id')
     */
    protected $id;
    
    /**
     * @ORM\Column(name='id_category')
     */
    protected $id_category;
    /**
     * @ORM\Column(name='id_canteen')
     */
    protected $id_canteen;
    /**
     * @ORM\Column(name='status')
     */
    protected $status;
    /**
     * @ORM\Column(name='allergic')
     */
    protected $allergic;
    /**
     * @ORM\Column(name='description')
     */
    protected $description;
    /**
     * @ORM\Column(name='days')
     */
    protected $days;
    
    public function get_id() {
        return $this->id;
    }

    public function get_id_category() {
        return $this->id_category;
    }

    public function get_id_canteen() {
        return $this->id_canteen;
    }

    public function get_status() {
        return $this->status;
    }

    public function get_allergic() {
        return $this->allergic;
    }

    public function get_description() {
        return $this->description;
    }

    public function get_days() {
        return $this->days;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function set_id_category($id_category) {
        $this->id_category = $id_category;
    }

    public function set_id_canteen($id_canteen) {
        $this->id_canteen = $id_canteen;
    }

    public function set_status($status) {
        $this->status = $status;
    }

    public function set_allergic($allergic) {
        $this->allergic = $allergic;
    }

    public function set_description($description) {
        $this->description = $description;
    }

    public function set_days($days) {
        $this->days = $days;
    }

}
