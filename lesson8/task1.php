<?php

class TreeDerictory
{
    public  $tree;

    public function __constract()
    {
        $this->tree = new ArrayObject();
        $this->tree->setFlags(ArrayObject::STD_PROP_LIST|ArrayObject::ARRAY_AS_PROPS);
    }

    public function recursiveTree($dirname)
    {
        $dir = new DirectoryIterator($dirname);

        foreach ($dir as $file){

            $filename = $file->getFilename();

            if(!$file->isDot()){
                
                if ($file->isDir()) {
                    $this->tree[$dirname] = [$dirname.'/'.$filename] ;
                    $this->recursiveTree($dirname.'/'.$filename);
                } else {
                    $this->tree[$dirname] = $filename;
                }
            }
        }
    }

    public function getTree():void {
        var_dump($this->tree);
    }
}

$dir = new TreeDerictory();
$dir->recursiveTree('.');

$dir->getTree();