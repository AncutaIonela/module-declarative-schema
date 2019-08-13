<?php
declare(strict_types=1);

namespace Internship\HelloWorld\Api\Data;

/**
 * Interface EmployeeInterface
 *
 * @author  Ancuta Pantir <ancuta.pantir@evozon.com>
 * @package Internship\HelloWorld\Api\Data
 * @api
 */
interface EmployeeInterface
{
    /**#@+
     * Constants for keys of data array
     */
    const ID = 'id';
    const EMPLOYEE_EMAIL     = 'employee_email';
    const FIRST_NAME         = 'first_name';
    const EMPLOYEE_LAST_NAME = 'employee_last_name';
    const HIRED_AT           = 'hired_at';
    const DEPARTMENT_ID      = 'department_id';

    /**
     * Get Id
     *
     * @return int
     */
    public function getId();

    /**
     * Set employee ID
     *
     * @param  int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Get employee email
     *
     * @return string
     */
    public function getEmployeeEmail();

    /**
     * Set employee email
     *
     * @param  string $employeeEmail
     * @return $this
     */
    public function setEmployeeEmail($employeeEmail);

    /**
     * Get employee first name
     *
     * @return string
     */
    public function getFirstName();

    /**
     * Set employee first name
     *
     * @param  string $firstName
     * @return $this
     */
    public function setFirstName($firstName);

    /**
     * Get employee last name
     *
     * @return string
     */
    public function getEmployeeLastName();

    /**
     * Set employee last name
     *
     * @param  string $employeeLastName
     * @return $this
     */
    public function setEmployeeLastName($employeeLastName);

    /**
     * Get employee hired at
     *
     * @return string
     */
    public function getHiredAt();

    /**
     * Set employee hired at
     *
     * @param  string $hiredAt
     * @return $this
     */
    public function setHiredAt($hiredAt);

    /**
     * Get employee department id
     *
     * @return int
     */
    public function getDepartmentId();

    /**
     * Set employee department id
     *
     * @param  int $departmentId
     * @return $this
     */
    public function setDepartmentId($departmentId);
}