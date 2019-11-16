<?php

namespace DataGrid;

/**
 * This class is part of library developed by David Jungman
 * @author David Jungman | info@znamyweb.cz
 */
class Grid
{
    /** @var DataSource */
    private $dataSource;

    /** @var Column[] */
    private $columns = [];

    public function __construct(DataSource $dataSource)
    {
        $this->dataSource = $dataSource;
    }

    public static function fromArray(array $data)
    {
        return new Grid(DataSource::fromArray($data));
    }

    public function render(): string
    {
        $view = new GridView($this->dataSource, $this->columns);
        return $view->getHTML();
    }

    public function addColumn(string $propertyName, string $name = NULL, string $link = NULL): Column
    {
        $column = new Column($propertyName, $name, $link);
        $this->columns[] = $column;
        return $column;
    }

}
