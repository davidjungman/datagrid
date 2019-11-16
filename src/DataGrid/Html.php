<?php


namespace DataGrid;

/**
 * This class is part of information system developed by David Jungman
 *
 * @author David Jungman | info@znamyweb.cz
 */
class Html
{
    public static function openTable(): string
    {
        return "<table>";
    }

    public static function closeTable(): string
    {
        return "</table>";
    }

    public static function openTableRow(): string
    {
        return "<tr>";
    }

    public static function closeTableRow(): string
    {
        return "</tr>";
    }

    public static function openTableHead(): string
    {
        return "<th>";
    }

    public static function closeTableHead(): string
    {
        return "</th>";
    }

    public static function openTableCell(): string
    {
        return "<td>";
    }

    public static function closeTableCell(): string
    {
        return "</td>";
    }

    public static function openAnchorWithLink(string $link): string
    {
        return "<a href=$link>";
    }

    public static function closeAnchor(): string
    {
        return "</a>";
    }
}
