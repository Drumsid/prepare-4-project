<?php

class TicTacToe
{
  private const GAME_FIELD_TEMPLATE = [
    1 => [1 => null, 2 => null, 3 => null],
    2 => [1 => null, 2 => null, 3 => null],
    3 => [1 => null, 2 => null, 3 => null]
  ];

  private $field;
  private $gameMode;
  private $name;

  public function __construct($gameMode = 'Easy')
  {
    if ($gameMode === 'normal') {
      $this->gameMode = new $gameMode();
    } else {
      $this->gameMode = new $gameMode();
    }
    $this->field = self::GAME_FIELD_TEMPLATE;
    $this->name = $gameMode;
  }
  public function go($row = null, $column = null)
  {
    if (is_null($row) && is_null($column)) {
      $coords = $this->gameMode->go($this->field);
      $this->field[$coords['row']][$coords['column']] = 'O';
    } else {
      $this->field[$row][$column] = 'X';
    }
    return $this->isWiner($this->field) === true;
  }
  public function isWiner($field)
  {
    if ($field[1][1] === 'X' && $field[1][2] === 'X' && $field[1][3] === 'X' ||$field[1][1] === 'O' && $field[1][2] === 'O' && $field[1][3] === 'O' ){
    return true;
    }
    if ($field[2][1] === 'X' && $field[2][2] === 'X' && $field[2][3] === 'X'){
    return true;
    }
    if ($field[3][1] === 'X' && $field[3][2] === 'X' && $field[3][3] === 'X'||
    $field[3][1] === 'O' && $field[3][2] === 'O' && $field[3][3] === 'O'){
    return true;
    }
    if ($field[1][1] === 'X' && $field[2][1] === 'X' && $field[3][1] === 'X'){
    return true;
    }
    if ($field[1][2] === 'X' && $field[2][2] === 'X' && $field[3][2] === 'X'){
    return true;
    }
    if ($field[1][3] === 'X' && $field[2][3] === 'X' && $field[3][3] === 'X'){
    return true;
    }
    if ($field[1][1] === 'X' && $field[2][2] === 'X' && $field[3][3] === 'X' || $field[1][1] === 'O' && $field[2][2] === 'O' && $field[3][3] === 'O'){
    return true;
    }
    if ($field[1][3] === 'X' && $field[2][2] === 'X' && $field[3][1] === 'X'){
    return true;
    }
    return false;
  }
  public function toArray()
  {
    return $this->field;
  }
  public function getNameMode()
  {
    return $this->name;
  }
}