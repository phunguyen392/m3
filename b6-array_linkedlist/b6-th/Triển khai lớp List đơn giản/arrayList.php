<?php
class ArrayList
{
    private $arrayList;
    public function __construct(array $arrayList = [])
    {
        $this->arrayList = $arrayList;
    }
    function add($obj)
    {
        $this->arrayList[] = $obj;
    }
    function get($index)
    {
        if ($this->isInteger($index)) {
            if ($index < $this->size()) {
                return $this->arrayList[$index];
            } else {
                throw new Error("Index does not exist");
            }
        } else {
            throw new Error("invalid index");
        }
    }
    function isInteger($index){
        return preg_match("/^\d+$/", $index);
    }
    function size(){
        return count($this->arrayList);
    }
}
