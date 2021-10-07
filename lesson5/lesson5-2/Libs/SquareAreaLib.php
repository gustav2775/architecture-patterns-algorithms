<?php

namespace App\Libs;

class SquareAreaLib
{
   public function getSquareArea(int $diagonal = 1)
   {
       $area = ($diagonal**2)/2;

       return $area;
   }
}