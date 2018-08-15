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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getComputeEnvSet() 获取计算环境列表
 * @method void setComputeEnvSet(array $ComputeEnvSet) 设置计算环境列表
 * @method integer getTotalCount() 获取计算环境数量
 * @method void setTotalCount(integer $TotalCount) 设置计算环境数量
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeComputeEnvs返回参数结构体
 */
class DescribeComputeEnvsResponse extends AbstractModel
{
    /**
     * @var array 计算环境列表
     */
    public $ComputeEnvSet;

    /**
     * @var integer 计算环境数量
     */
    public $TotalCount;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param array $ComputeEnvSet 计算环境列表
     * @param integer $TotalCount 计算环境数量
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
        if (array_key_exists("ComputeEnvSet",$param) and $param["ComputeEnvSet"] !== null) {
            $this->ComputeEnvSet = [];
            foreach ($param["ComputeEnvSet"] as $key => $value){
                $obj = new ComputeEnvView();
                $obj->deserialize($value);
                array_push($this->ComputeEnvSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
