<?php
declare(strict_types=1);

namespace Internship\DeclarativeSchema\Setup\Patch\Schema;

use Magento\Framework\DB\Ddl\Table;
use Magento\Framework\Setup\Patch\SchemaPatchInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * Class DropEmployeeTableColumn
 *
 * @package Internship\DeclarativeSchema\Setup\Patch\Schema
 * @author  Ancuta Pantir <ancuta.pantir@evozon.com>
 */
class ChangeColumnName implements SchemaPatchInterface
{
    const EMPLOYEE_TABLE     = 'employee';
    const OLD_COLUMN_NAME    = 'last_name';
    const NEW_COLUMN_NAME    = 'employee_last_name';

    /** @var  SchemaSetupInterface */
    protected $schemaSetup;

    /**
     * DropEmployeeTableColumn constructor.
     *
     * @param SchemaSetupInterface $schemaSetup
     */
    public function __construct(SchemaSetupInterface $schemaSetup)
    {
        $this->schemaSetup = $schemaSetup;
    }

    /**
     * Get aliases for the patch
     *
     * @return string[]
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * Retrieve an array with all the patches that should be executed before this patch
     *
     * @return string[]
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * Rename one column from 'employee' table
     *
     * @return $this
     */
    public function apply()
    {
        $this->schemaSetup->startSetup();

        $columnDefinition = [
            'type'      => Table::TYPE_TEXT,
            'length'    => 255,
            'comment'   => 'Employee Last Name'
        ];

        $this->schemaSetup->getConnection()->changeColumn(
            self::EMPLOYEE_TABLE,
            self::OLD_COLUMN_NAME,
            self::NEW_COLUMN_NAME,
            $columnDefinition
        );
        $this->schemaSetup->endSetup();

        return $this;
    }
}