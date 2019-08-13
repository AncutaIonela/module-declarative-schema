<?php
declare(strict_types=1);

namespace Internship\DeclarativeSchema\Model;

use Internship\DeclarativeSchema\Api\Data\DepartmentInterface;
use Magento\Framework\Model\AbstractModel;
use Internship\DeclarativeSchema\Model\ResourceModel;

/**
 * Class Department
 *
 * @author  Ancuta Pantir <ancuta.pantir@evozon.com>
 * @package Internship\DeclarativeSchema\Model
 */
class Department extends AbstractModel implements DepartmentInterface
{
    /**
     * Initialize department model
     *
     * @author Ancuta Pantir <ancuta.pantir@evozon.com>
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel\Department::class);
    }

    /**
     * Get ID
     *
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * Set ID
     *
     * @param  int|mixed $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * Get department name
     *
     * @return string
     */
    public function getDepartName()
    {
        return $this->getData(self::DEPART_NAME);
    }

    /**
     * Set department name
     *
     * @param  string $departName
     * @return $this
     */
    public function setDepartName($departName)
    {
        return $this->setData(self::DEPART_NAME, $departName);
    }
}