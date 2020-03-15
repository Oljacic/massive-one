<?php 

namespace Entity;

use DateTime;

abstract class AbstractEntity {
    /**
     * @var null|int
     */
    protected $id;

    /**
     * var null|DateTime
     */

     protected $dataCreated;
}