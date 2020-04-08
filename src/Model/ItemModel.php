<?php
/**
 * Created by Marcin.
 * Date: 08.04.2020
 * Time: 22:25
 */

namespace Mrcnpdlk\Api\UKE\Numeracja\Model;

/**
 * Class ItemModel
 */
class ItemModel
{
    /**
     * @var int
     * @required
     */
    public $id;
    /**
     * @var string
     * @required
     */
    public $scope;
    /**
     * @var int
     * @required
     */
    public $provider_id;
    /**
     * @var string
     * @required
     */
    public $provider_name;
    /**
     * @var string
     * @required
     */
    public $zone_ab;
    /**
     * @var string
     * @required
     */
    public $zone_name;
    /**
     * @var string
     * @required
     */
    public $zone_symbol;
    /**
     * @var string
     * @required
     */
    public $numbering_area;
    /**
     * @var string
     * @required
     */
    public $modification;
}
