<?php

namespace PayEx\Api\Service\Swish\Transaction\Request;

use PayEx\Api\Service\Payment\Transaction\Resource\Response\SaleObject;
use PayEx\Api\Service\Request;

class GetSale extends Request
{
    public function setup()
    {
        $this->setRequestMethod('GET');
        $this->setRequestEndpoint('/psp/swish/payments/%s/sales/%s');
        $this->setResponseResourceFQCN(SaleObject::class);
    }
}
