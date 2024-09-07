<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListNodesResponseBody;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListNodesResponseBody\nodes\totalResources;
use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @example 2020-06-09T06:22:02.000Z
     *
     * @var string
     */
    public $addTime;

    /**
     * @example 2020-06-09T06:22:02.000Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @example edas.cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $hostname;

    /**
     * @example true
     *
     * @var bool
     */
    public $htEnabled;

    /**
     * @example i-bp15707mys2rsy0j****
     *
     * @var string
     */
    public $id;

    /**
     * @example centos_7_06_64_20G_alibase_20190711.vhd
     *
     * @var string
     */
    public $imageId;

    /**
     * @example ecs.c5.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 172.16.\*\*.**
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @example true
     *
     * @var bool
     */
    public $keepAlive;

    /**
     * @example 172.16.\*\*.**
     *
     * @var string
     */
    public $publicIpAddress;

    /**
     * @example autoque3
     *
     * @var string
     */
    public $queueName;

    /**
     * @example NoSpot
     *
     * @var string
     */
    public $spotStrategy;

    /**
     * @example active
     *
     * @var string
     */
    public $stateInSched;

    /**
     * @example running
     *
     * @var string
     */
    public $status;

    /**
     * @var totalResources
     */
    public $totalResources;

    /**
     * @example vsw-bp1e47optm9g58zcu****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-bp1gnu8br4ay7beb2w****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'addTime'         => 'AddTime',
        'expiredTime'     => 'ExpiredTime',
        'hostname'        => 'Hostname',
        'htEnabled'       => 'HtEnabled',
        'id'              => 'Id',
        'imageId'         => 'ImageId',
        'instanceType'    => 'InstanceType',
        'ipAddress'       => 'IpAddress',
        'keepAlive'       => 'KeepAlive',
        'publicIpAddress' => 'PublicIpAddress',
        'queueName'       => 'QueueName',
        'spotStrategy'    => 'SpotStrategy',
        'stateInSched'    => 'StateInSched',
        'status'          => 'Status',
        'totalResources'  => 'TotalResources',
        'vSwitchId'       => 'VSwitchId',
        'vpcId'           => 'VpcId',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addTime) {
            $res['AddTime'] = $this->addTime;
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->htEnabled) {
            $res['HtEnabled'] = $this->htEnabled;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->keepAlive) {
            $res['KeepAlive'] = $this->keepAlive;
        }
        if (null !== $this->publicIpAddress) {
            $res['PublicIpAddress'] = $this->publicIpAddress;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }
        if (null !== $this->stateInSched) {
            $res['StateInSched'] = $this->stateInSched;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalResources) {
            $res['TotalResources'] = null !== $this->totalResources ? $this->totalResources->toMap() : null;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddTime'])) {
            $model->addTime = $map['AddTime'];
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['HtEnabled'])) {
            $model->htEnabled = $map['HtEnabled'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['KeepAlive'])) {
            $model->keepAlive = $map['KeepAlive'];
        }
        if (isset($map['PublicIpAddress'])) {
            $model->publicIpAddress = $map['PublicIpAddress'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }
        if (isset($map['StateInSched'])) {
            $model->stateInSched = $map['StateInSched'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalResources'])) {
            $model->totalResources = totalResources::fromMap($map['TotalResources']);
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
