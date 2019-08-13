<?php
declare(strict_types=1);

namespace Internship\HelloWorld\Api\Data;

/**
 * Interface DepartmentInterface
 *
 * @author  Ancuta Pantir <ancuta.pantir@evozon.com>
 * @package Internship\HelloWorld\Api\Data
 * @api
 */
interface DepartmentInterface
{
    /**
     * Constants defined for keys of the data array
     */
    const ID = 'id';
    const DEPART_NAME = 'depart_name';

    /**
     * Get department id
     *
     * @return int
     */
    public function getId();

    /**
     * Set department id
     *
     * @param  int $id
     * @return $this
     */
    public function setId($id);

    /**
     * Get department name
     *
     * @return string
     */
    public function getDepartName();

    /**
     * Set department name
     *
     * @param  string $departName
     * @return $this
     */
    public function setDepartName($departName);
}