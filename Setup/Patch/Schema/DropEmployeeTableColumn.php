<?php
declare(strict_types=1);

namespace Internship\DeclarativeSchema\Setup\Patch\Schema;

use Magento\Framework\Setup\Patch\SchemaPatchInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

/**
 * Class DropEmployeeTableColumn
 *
 * @package Internship\DeclarativeSchema\Setup\Patch\Schema
 * @author  Ancuta Pantir <ancuta.pantir@evozon.com>
 */
class DropEmployeeTableColumn implements SchemaPatchInterface
{
    const EMPLOYEE_TABLE = 'employee';
    const COLUMN_NAME    = 'last_name';

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
     * Drop one column from 'employee' table
     *
     * @return $this
     */
    public function apply()
    {
        $this->schemaSetup->startSetup();
        $this->schemaSetup->getConnection()->dropColumn(self::EMPLOYEE_TABLE, self::COLUMN_NAME);
        $this->schemaSetup->endSetup();

        return $this;
    }
}