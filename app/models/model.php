<?php

//! Base model
// http://foysalmamun.wordpress.com/2013/03/27/fat-free-crud-with-mvc-tutorial/
class Model extends DB\SQL\Mapper {
    
    protected $table;
 
    public function __construct(DB\SQL $db, $table) {
        
        parent::__construct($db,$table);
        $this->table = $table;
    }
 
    public function all() {
        $this->load();
        return $this->query;
    }
 
    public function add() {
        $this->copyFrom('POST');
        $this->save();
    }
 
    public function getById($id) {
        $this->load(array('id=?',$id));
        $this->copyTo('POST');
    }
 
    public function edit($id) {
        $this->load(array('id=?',$id));
        $this->copyFrom('POST');
        $this->update();
    }
 
    public function delete($id) {
        $this->load(array('id=?',$id));
        $this->erase();
    }
}