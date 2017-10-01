<?php

namespace Yumi\Bundler\View;

use Yumi\Bundler\View\Table\Table;

class ViewContent
{
    /**
     * List of tables to view
     * @var array
     */
    private $table_list = array();

    public function __construct()
    {

    }

    /**
     * Creates a new table
     * @return Table
     */
    public function createTable() : Table
    {
        return new Table();
    }

    /**
     * Creates and add table
     * @return Table
     */
    public function createAndAddTable() : Table
    {
        $table = $this->createTable();
        $this->createAndAddTable($table);
        return $table;
    }

    /**
     * Adds a new table
     * @param Table $table
     */
    public function addTable(Table $table)
    {
        $this->table_list[] = $table;
    }

    /**
     * Gets all tables
     * @return Table[]
     */
    public function getTables() : array
    {
        return $this->table_list;
    }
}