<?php
declare(strict_types=1);

namespace Internship\DeclarativeSchema\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchRevertableInterface;

/**
 * Class CreateEmployees
 *
 * @package Internship\DeclarativeSchema\Setup\Patch\Data
 * @author  Ancuta Pantir <ancuta.pantir@evozon.com>
 */
class CreateEmployees implements DataPatchInterface, PatchRevertableInterface
{
    const EMPLOYEE_TABLE = 'employee';

    /** @var  ModuleDataSetupInterface */
    protected $moduleDataSetup;

    /**
     * CreateEmployees constructor.
     *
     * @param ModuleDataSetupInterface $moduleDataSetup
     */
    public function __construct(ModuleDataSetupInterface $moduleDataSetup)
    {
        $this->moduleDataSetup = $moduleDataSetup;
    }

    /**
     * Retrieve an array of patches that need to be executed before this patch
     *
     * @author Ancuta Pantir <ancuta.pantir@evozon.com>
     * @return array
     */
    public static function getDependencies()
    {
        return [
            CreateDepartments::class
        ];
    }

    /**
     * Get aliases for the patch
     *
     * @return array
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

        $employees = [
            ['employee_email' => 'maria.perez@gmail.com', 'first_name' => 'Maria', 'last_name' => 'Perez', 'department_id' => 1],
            ['employee_email' => 'daniel.smith@gmail.com', 'first_name' => 'Daniel', 'last_name' => 'Smith', 'department_id' => 1],
            ['employee_email' => 'philip.smith@yahoo.com', 'first_name' => 'Philip', 'last_name' => 'Smith', 'department_id' => 1],
            ['employee_email' => 'james_j@gmail.com', 'first_name' => 'James', 'last_name' => 'Jefferson', 'department_id' => 2],
            ['employee_email' => 'john.parker@gmail.com', 'first_name' => 'John', 'last_name' => 'Parker', 'department_id' => 3],
            ['employee_email' => 'micahel_t@gmail.com', 'first_name' => 'Michael', 'last_name' => 'Thompson', 'department_id' => 4],
            ['employee_email' => 'elizabeth_j@gmail.com', 'first_name' => 'Elizabeth', 'last_name' => 'Jones', 'department_id' => 4],
            ['employee_email' => 'john.smith@gmail.com', 'first_name' => 'John', 'last_name' => 'Smith', 'department_id' => 3],
            ['employee_email' => 'walker.james@gmail.com', 'first_name' => 'James', 'last_name' => 'Walker', 'department_id' => 3],
            ['employee_email' => 'lee_kim@yahoo.com', 'first_name' => 'Kim', 'last_name' => 'Lee', 'department_id' => 2]
        ];

        $this->moduleDataSetup->getConnection()->insertMultiple(self::EMPLOYEE_TABLE, $employees);
        $this->moduleDataSetup->endSetup();

        return $this;
    }

    /**
     * Rollback all changes that were done in this patch
     *
     * @return void
     */
    public function revert()
    {
        $this->moduleDataSetup->getConnection()->delete(self::EMPLOYEE_TABLE);
    }
}