<?php

namespace app\BD;

interface IBD
{
    public function  DBConnection (array $params)
    public function  DBRecrord (array $params)
    public function  DBQueryBuiler (array $params)
}