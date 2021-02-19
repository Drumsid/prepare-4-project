<?php
class Normal
{
  public function __construct()
  {

  }
  public function go($field)
  {
    $reverseField = $this->reverse($field);
    return $this->nextMove($reverseField);
  }
  public function reverse($field)
  {
    return array_reverse($field, true);
  }
  public function nextMove($field)
  {
    $columnNum = false;
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