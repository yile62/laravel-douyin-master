<?php
/**
 * Author: codesinging <codesinging@gmail.com>
 * Github: https://github.com/codesinging
 */

namespace Yileus\LaravelDouyinMaster\OpenPlatform;

use Yileus\LaravelDouyinMaster\OpenPlatform\Auth\ClientToken;
use Yileus\LaravelDouyinMaster\OpenPlatform\Auth\ConnectCode;

class Application
{
    protected ?ClientToken $clientToken = null;

    protected ?ConnectCode $connectCode = null;

    /**
     * @return ClientToken|null
     */
    public function clientToken(): ?ClientToken
    {
        if (!$this->clientToken) {
            $this->clientToken = new ClientToken();
        }

        return $this->clientToken;
    }

    /**
     * @return ConnectCode|null
     */
    public function connectCode(): ?ConnectCode
    {
        if (!$this->connectCode){
            $this->connectCode = new ConnectCode();
        }

        return $this->connectCode;
    }
}