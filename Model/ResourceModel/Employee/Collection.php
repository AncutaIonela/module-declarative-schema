<?php
declare(strict_types=1);

namespace Internship\DeclarativeSchema\Model\ResourceModel\Employee;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Internship\DeclarativeSchema\Model\Employee;
use Internship\DeclarativeSchema\Model\ResourceModel\Employee as EmployeeResource;

/**
 * Class Collection
 *
 * @author  Ancuta Pantir <ancuta.pantir@evozon.com>
 * @package Internship\DeclarativeSchema\Model\ResourceModel\Employee
 */
class Collection extends AbstractCollection
{
    /** @var string  */
    protected $_idFieldName = 'id';

    /**
     * Define resource model
     *
     * @author Ancuta Pantir <ancuta.pantir@evozon.com>
     * @return void
     */
    protected function _construct()
    {
        $this->_init(Employee::class, EmployeeResource::class);
    }
}