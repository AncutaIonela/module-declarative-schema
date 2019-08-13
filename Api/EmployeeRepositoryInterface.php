<?php
declare(strict_types=1);

namespace Internship\HelloWorld\Api;

use Internship\HelloWorld\Api\Data\EmployeeInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

/**
 * Interface EmployeeRepositoryInterface
 *
 * @author  Ancuta Pantir <ancuta.apntir@evozon.com>
 * @package Internship\HelloWorld\Api
 * @api
 */
interface EmployeeRepositoryInterface
{
    /**
     * Save employee
     *
     * @param  EmployeeInterface $employee
     * @return EmployeeInterface
     */
    public function save(EmployeeInterface $employee);

    /**
     * Retrieve employee
     *
     * @param  int $employeeId
     * @return EmployeeInterface
     */
    public function getById($employeeId);

    /**
     * Retrieve employees matching the specified criteria
     *
     * @param SearchCriteriaInterface $criteria
     * @return EmployeeInterface
     */
    public function getList(SearchCriteriaInterface $criteria);

    /**
     * Delete employee
     *
     * @param  EmployeeInterface $employee
     * @return bool true on success
     */
    public function delete(EmployeeInterface $employee);

    /**
     * Delete employee by ID
     *
     * @param  int $id
     * @return bool true on success
     */
    public function deleteById($id);
}