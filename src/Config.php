<?php
/**
 * Created by Marcin Pudełek <marcin@pudelek.org.pl>
 * Date: 08.04.2020
 * Time: 16:39
 */

namespace Mrcnpdlk\Api\UKE\Numeracja;

use Mrcnpdlk\Lib\ConfigurationOptionsAbstract;

class Config extends ConfigurationOptionsAbstract
{
    protected $endpoint = 'https://numeracja.uke.gov.pl/pl/pstn_tables.json';

    /**
     * @return string
     */
    public function getEndpoint(): string
    {
        return $this->endpoint;
    }

    /**
     * @param string $endpoint
     *
     * @return Config
     */
    public function setEndpoint(string $endpoint): Config
    {
        $this->endpoint = rtrim($endpoint, '/');

        return $this;
    }
}
