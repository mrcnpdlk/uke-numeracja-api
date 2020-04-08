<?php
/**
 * Created by Marcin.
 * Date: 08.04.2020
 * Time: 22:21
 */

namespace Mrcnpdlk\Api\UKE\Numeracja\Model;

class ResponseModel
{
    /**
     * @var int
     * @required
     */
    public $recordsTotal;
    /**
     * @var int
     * @required
     */
    public $recordsFiltered;
    /**
     * @var \Mrcnpdlk\Api\UKE\Numeracja\Model\ItemModel[]
     */
    public $data = [];
}
