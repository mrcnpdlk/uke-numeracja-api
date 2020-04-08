<?php
/**
 * Created by Marcin Pudełek <marcin@pudelek.org.pl>
 * Date: 08.04.2020
 * Time: 16:35
 */

namespace Mrcnpdlk\Api\UKE\Numeracja;

use Curl\Curl;
use Mrcnpdlk\Api\UKE\Numeracja\Model\ResponseModel;
use Mrcnpdlk\Lib\Mapper;

class Pstn
{
    /**
     * @var \Mrcnpdlk\Api\UKE\Numeracja\Config
     */
    private $oConfig;
    /**
     * @var \Mrcnpdlk\Lib\Mapper
     */
    private $oMapper;

    public function __construct(Config $oConfig = null)
    {
        $this->oConfig = $oConfig ?? new Config();
        $this->oMapper = new Mapper(null, $this->oConfig->getLogger());
    }

    /**
     * @param string $scope
     * @param int    $limit
     * @param int    $offset
     *
     * @throws \ErrorException
     * @throws \Mrcnpdlk\Lib\ModelMapException
     * @throws \Mrcnpdlk\Api\UKE\Numeracja\Exception
     *
     * @return \Mrcnpdlk\Api\UKE\Numeracja\Model\ResponseModel
     */
    public function searchByScope(string $scope, int $limit = 10, int $offset = 0): ResponseModel
    {
        $oCurl = new Curl();
        $oCurl->setOpt(CURLOPT_SSL_VERIFYPEER, false);
        $oCurl->get(
            $this->oConfig->getEndpoint(),
            [
                'columns' => [['data' => 'scope']],
                'search'  => ['value' => $scope],
                'start'   => $offset,
                'length'  => $limit,
            ]);
        if ($oCurl->error) {
            throw new Exception(sprintf('%s', $oCurl->getErrorMessage()), $oCurl->getErrorCode());
        }

        /** @var ResponseModel $res */
        $res = $this->oMapper->jsonMap(ResponseModel::class, $oCurl->response);

        return $res;
    }
}
