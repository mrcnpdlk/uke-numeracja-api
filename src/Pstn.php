<?php
/**
 * Created by Marcin Pudełek <marcin@pudelek.org.pl>
 * Date: 08.04.2020
 * Time: 16:35
 */

namespace Mrcnpdlk\Api\UKE\Numeracja;

class Pstn
{
    /**
     * @var \Mrcnpdlk\Api\UKE\Numeracja\Config
     */
    private $oConfig;

    public function __construct(Config $oConfig = null)
    {
        $this->oConfig = $oConfig ?? new Config();
    }

    public function searchByScope(string $scope)
    {
    }
}
