<?php

class Easy
{
  public function __construct()
  {

  }
  public function go($field)
  {
    return $this->nextMove($field);
  }
  public function nextMove($field)
  {
    $colNum = false;
    foreach ($field as $key => $val){
      if(is_array($val)){
        $columnNum = $this->nextMove($val);
        if($columnNum) {
          return ['row' => $key, 'column' => $columnNum];
        }
      }
      if (is_null($val)) {
        return $key;
      }
    }
    return false;
  }
}