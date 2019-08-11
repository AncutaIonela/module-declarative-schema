<?php
declare(strict_types=1);

namespace Internship\DeclarativeSchema\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchRevertableInterface;

/**
 * Class CreateDepartments
 *
 * @package Internship\DeclarativeSchema\Setup\Patch\Data
 * @author  Ancuta Pantir <ancuta.pantir@evozon.com>
 */
class CreateDepartments implements DataPatchInterface, PatchRevertableInterface
{
    const DEPARTMENT_TABLE = 'department';

    /** @var  ModuleDataSetupInterface */
    protected $moduleDataSetup;

    /**
     * CreateDepartments constructor.
     *
     * @param ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(ModuleDataSetupInterface $moduleDataSetup)
    {
        $this->moduleDataSetup = $moduleDataSetup;
    }

    /**
     * Retrieve an array of patches that have to be executed before this patch
     *
     *
     * @return string[]
     */
    public static function getDependencies()
    {
        return [];
    }

    /**
     * Retrieve aliases for the patch
     *
     * @return string[]
     */
    public function getAliases()
    {
        return [];
    }

    /**
     * Run code inside patch
     *
     * @author Ancuta Pantir <ancuta.pantir@evozon.com>
     * @return $this
     */
    public function apply()
    {
        $this->moduleDataSetup->startSetup();

        $departments = [
            ['depart_name' => 'Information Center'],
            ['depart_name' => 'Development Center'],
            ['depart_name' => 'Support Services'],
            ['depart_name' => 'Administration Systems']
        ];

        $this->moduleDataSetup->getConnection()->insertMultiple(self::DEPARTMENT_TABLE, $departments);
        $this->moduleDataSetup->endSetup();

        return $this;
    }

    /**
     * Rollback all changes that were done in this patch
     * - enable rollback for the patch during module uninstall
     *
     * @author Ancuta Pantir <ancuta.pantir@evozon.com>
     * @return void
     */
    public function revert()
    {
        $this->moduleDataSetup->getConnection()->delete(self::DEPARTMENT_TABLE);
    }
}