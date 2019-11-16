<?php


namespace DataGrid;

/**
 * This class is part of information system developed by David Jungman
 *
 * @author David Jungman | info@znamyweb.cz
 */
class GridView
{
    /** @var Column[] */
    private $columns;

    /** @var DataSource */
    private $dataSource;

    /** @var string */
    private $htmlAsString;

    /**
     * @param DataSource $dataSource
     * @param Column[] $columns
     */
    public function __construct(DataSource $dataSource, array $columns)
    {
        $this->dataSource = $dataSource;
        $this->columns = $columns;
    }

    public function getHTML(): string
    {
        $this->htmlAsString .= Html::openTable();
        $this->htmlAsString .= $this->createHeader();
        $this->htmlAsString .= $this->createBody();
        $this->htmlAsString .= Html::closeTable();

        return $this->htmlAsString;
    }

    private function createHeader(): string
    {
        $string = "";
        $string .= Html::openTableRow();
        foreach($this->columns as $column)
        {
            $string .= Html::openTableHead();
            $string .= $column->getName();
            $string .= Html::closeTableHead();
        }
        $string .= Html::closeTableRow();
        return $string;
    }

    private function createBody(): string
    {
        $string = "";

        for($i = 0; $i < $this->dataSource->getItemCount(); $i++)
        {
            $string .= Html::openTableRow();

            $string .= $this->createColumns($i);

            $string .= Html::closeTableRow();
        }

        return $string;
    }

    private function createColumns(int $index): string
    {
        $string = "";
        foreach($this->columns as $column)
        {
            $string .= Html::openTableCell();
            if($column->hasLink())
            {
                $string .= Html::openAnchorWithLink($column->getLink());
                $string .= $this->dataSource->getValueByIndexColumn($index, $column->getPropertyName());
                $string .= Html::closeAnchor();
            } else{
                $string .= $this->dataSource->getValueByIndexColumn($index, $column->getPropertyName());
            }
            $string .= Html::closeTableCell();
        }
        return $string;
    }
}
