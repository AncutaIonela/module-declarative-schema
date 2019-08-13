<?php
declare(strict_types=1);

namespace Internship\DeclarativeSchema\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
use Magento\Framework\Model\ResourceModel\Db\Context;

/**
 * Class Department Resource Model
 *
 * @package Internship\DeclarativeSchema\Model\ResourceModel
 * @author  Ancuta Pantir <ancuta.pantir@evozon.com>
 */
class Department extends AbstractDb
{
    /**
     * Department constructor.
     *
     * @author Ancuta Pantir <ancuta.pantir@evozon.com>
     * @param  Context $context
     * @param  null $connectionName
     */
    public function __construct(
        Context $context,
        $connectionName = null
    ){
        parent::__construct($context, $connectionName);
    }

    /**
     * Initialize resource model
     *
     * @author Ancuta Pantir <ancuta.pantir@evozon.com>
     * @return void
     */
    protected function _construct()
    {
        $this->_init('department', 'id');
    }
}