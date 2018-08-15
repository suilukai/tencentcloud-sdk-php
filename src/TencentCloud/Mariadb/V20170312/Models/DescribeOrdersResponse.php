<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getTotalCount() 获取返回的订单数量。
 * @method void setTotalCount(array $TotalCount) 设置返回的订单数量。
 * @method array getDeals() 获取订单信息列表。
 * @method void setDeals(array $Deals) 设置订单信息列表。
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeOrders返回参数结构体
 */
class DescribeOrdersResponse extends AbstractModel
{
    /**
     * @var array 返回的订单数量。
     */
    public $TotalCount;

    /**
     * @var array 订单信息列表。
     */
    public $Deals;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param array $TotalCount 返回的订单数量。
     * @param array $Deals 订单信息列表。
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = [];
            foreach ($param["TotalCount"] as $key => $value){
                $obj = new int64();
                $obj->deserialize($value);
                array_push($this->TotalCount, $obj);
            }
        }

        if (array_key_exists("Deals",$param) and $param["Deals"] !== null) {
            $this->Deals = [];
            foreach ($param["Deals"] as $key => $value){
                $obj = new Deal();
                $obj->deserialize($value);
                array_push($this->Deals, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
