<?php

declare(strict_types=1);

namespace Overbase\System\Schema;

use Overbase\System\Base\BaseObject;

class Table extends BaseObject
{

    /**
     * @var array Column
     */
    private array $columns;

    /**
     * @param array $columns
     */
    public function __construct(array $columns)
    {
        $this->columns = $columns;
    }

}