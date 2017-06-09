<?php

/**
 * Created by PhpStorm.
 * User: cygni-note006
 * Date: 2017/06/09
 * Time: 11:49
 */
class PostsController extends AppController {

    public $helper = array('Html', 'Form');

    public function index() {
        // CakePHP の命名規約に従うことで、$this->Post を呼びだすことが可能となっている
        $this->set('post', $this->Post->find('all'));
    }

}