<?php


namespace DataGrid;

/**
 * This class is part of library developed by David Jungman
 *
 * @author David Jungman | info@znamyweb.cz
 */
class DataSource
{
    private $collection;

    private $isArray = FALSE;

    private $count;

    public function __construct($collection)
    {
        if(is_array($collection)){
            $this->collection = $collection;
            $this->isArray = TRUE;
            $this->count = count($collection);
        }
    }

    public static function fromArray(array $collection)
    {
        return new DataSource($collection);
    }

    public function getValueByIndexColumn(int $index, string $propertyName)
    {
        if($this->isArray){
            return $this->collection[$index][$propertyName];
        }
        return $this->collection[$index]->{"get".$propertyName}();
    }

    public function getItemCount()
    {
        return $this->count;
    }
}
