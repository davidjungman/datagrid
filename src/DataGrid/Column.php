<?php


namespace DataGrid;

/**
 * This class is part of information system developed by David Jungman
 *
 * @author David Jungman | info@znamyweb.cz
 */
class Column
{
    /** @var string  */
    private $propertyName;

    /** @var string  */
    private $name;

    /** @var string */
    private $link;

    public function __construct(string $propertyName, string $name, string $link = NULL)
    {
        $this->propertyName = $propertyName;
        $this->name = $name;
        $this->link = $link;
    }

    public function getPropertyName(): string
    {
        return $this->propertyName;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function hasLink(): bool
    {
        return !($this->link === NULL);
    }
}
