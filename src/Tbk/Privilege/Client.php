<?php

/*
 * This file is part of the ennnnny/tbk.
 *
 * (c) ennnnny <kuye1130@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace ETaobao\Tbk\Privilege;

use ETaobao\Kernel\BaseClient;

/**
 * Class Client.
 *
 * @author ennnnny <kuye1130@gmail.com>
 */
class Client extends BaseClient
{

    /**
     * taobao.tbk.privilege.get( 单品券高效转链API )
     * @line http://open.taobao.com/api.htm?docId=28625&docType=2&scopeId=12403
     * @param array $params
     * @return array|mixed|\SimpleXMLElement|string
     */
    public function get(array $params)
    {
        $res = $this->httpPost('taobao.tbk.privilege.get', $params);
        return $res;
    }
}
