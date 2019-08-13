<?php
declare(strict_types=1);

namespace Internship\DeclarativeSchema\Model;

use Internship\DeclarativeSchema\Api\Data\EmployeeInterface;
use Magento\Framework\Model\AbstractModel;
use Internship\DeclarativeSchema\Model\ResourceModel;

/**
 * Class Employee
 *
 * @author  Ancuta Pantir <ancuta.pantir@evozon.com>
 * @package Internship\DeclarativeSchema\Model
 */
class Employee extends AbstractModel implements EmployeeInterface
{
    /**
     * Initialize employee model
     *
     * @author Ancuta Pantir <ancuta.pantir@evozon.com>
     * @return void
     */
    protected function _construct()
    {
        $this->_init(ResourceModel\Employee::class);
    }

    /**
     * Get employee ID
     *
     * @return int
     */
    public function getId()
    {
        return $this->getData(self::ID);
    }

    /**
     * Set employee ID
     *
     * @param  int $id
     * @return $this
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * Get employee first name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->getData(self::FIRST_NAME);
    }

    /**
     * Set employee first name
     *
     * @param  string $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        return $this->setData(self::FIRST_NAME, $firstName);
    }

    /**
     * Get employee email
     *
     * @return string
     */
    public function getEmployeeEmail()
    {
        return $this->getData(self::EMPLOYEE_EMAIL);
    }

    /**
     * Set employee email
     *
     * @param  string $employeeEmail
     * @return $this
     */
    public function setEmployeeEmail($employeeEmail)
    {
        return $this->setData(self::EMPLOYEE_EMAIL, $employeeEmail);
    }

    /**
     * Get employee last name
     *
     * @return string
     */
    public function getEmployeeLastName()
    {
        return $this->getData(self::EMPLOYEE_LAST_NAME);
    }

    /**
     * Set employee last name
     *
     * @param  string $employeeLastName
     * @return $this
     */
    public function setEmployeeLastName($employeeLastName)
    {
        return $this->setData(self::EMPLOYEE_LAST_NAME, $employeeLastName);
    }

    /**
     * Get employee hired at
     *
     * @return string
     */
    public function getHiredAt()
    {
        return $this->getData(self::HIRED_AT);
    }

    /**
     * Set employee hired at
     *
     * @param  string $hiredAt
     * @return $this
     */
    public function setHiredAt($hiredAt)
    {
        return $this->setData(self::HIRED_AT, $hiredAt);
    }

    /**
     * Get employee department id
     *
     * @return int
     */
    public function getDepartmentId()
    {
        return $this->getData(self::DEPARTMENT_ID);
    }

    /**
     * Set employee department Id
     *
     * @param  int $departmentId
     * @return $this
     */
    public function setDepartmentId($departmentId)
    {
        return $this->setData(self::DEPARTMENT_ID, $departmentId);
    }
}