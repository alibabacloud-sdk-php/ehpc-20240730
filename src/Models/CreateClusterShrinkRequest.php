<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $additionalPackagesShrink;

    /**
     * @var string
     */
    public $addonsShrink;

    /**
     * @example 2.1.0
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @example Standard
     *
     * @var string
     */
    public $clusterCategory;

    /**
     * @var string
     */
    public $clusterCredentialsShrink;

    /**
     * @var string
     */
    public $clusterCustomConfigurationShrink;

    /**
     * @example slurm22.05.8-cluster-20240718
     *
     * @var string
     */
    public $clusterDescription;

    /**
     * @example Integrated
     *
     * @var string
     */
    public $clusterMode;

    /**
     * @example slurm22.05.8-cluster-20240718
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example vsw-f8za5p0mwzgdu3wgx****
     *
     * @var string
     */
    public $clusterVSwitchId;

    /**
     * @example vpc-m5efjevmclc0xdmys****
     *
     * @var string
     */
    public $clusterVpcId;

    /**
     * @example false
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @example false
     *
     * @var bool
     */
    public $isEnterpriseSecurityGroup;

    /**
     * @var string
     */
    public $managerShrink;

    /**
     * @example 10000
     *
     * @var int
     */
    public $maxCoreCount;

    /**
     * @example 500
     *
     * @var int
     */
    public $maxCount;

    /**
     * @var string
     */
    public $queuesShrink;

    /**
     * @example rg-acfmxazb4******
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example sg-bp13n61xsydodfyg****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $sharedStoragesShrink;

    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'additionalPackagesShrink'         => 'AdditionalPackages',
        'addonsShrink'                     => 'Addons',
        'clientVersion'                    => 'ClientVersion',
        'clusterCategory'                  => 'ClusterCategory',
        'clusterCredentialsShrink'         => 'ClusterCredentials',
        'clusterCustomConfigurationShrink' => 'ClusterCustomConfiguration',
        'clusterDescription'               => 'ClusterDescription',
        'clusterMode'                      => 'ClusterMode',
        'clusterName'                      => 'ClusterName',
        'clusterVSwitchId'                 => 'ClusterVSwitchId',
        'clusterVpcId'                     => 'ClusterVpcId',
        'deletionProtection'               => 'DeletionProtection',
        'isEnterpriseSecurityGroup'        => 'IsEnterpriseSecurityGroup',
        'managerShrink'                    => 'Manager',
        'maxCoreCount'                     => 'MaxCoreCount',
        'maxCount'                         => 'MaxCount',
        'queuesShrink'                     => 'Queues',
        'resourceGroupId'                  => 'ResourceGroupId',
        'securityGroupId'                  => 'SecurityGroupId',
        'sharedStoragesShrink'             => 'SharedStorages',
        'tagsShrink'                       => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalPackagesShrink) {
            $res['AdditionalPackages'] = $this->additionalPackagesShrink;
        }
        if (null !== $this->addonsShrink) {
            $res['Addons'] = $this->addonsShrink;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->clusterCategory) {
            $res['ClusterCategory'] = $this->clusterCategory;
        }
        if (null !== $this->clusterCredentialsShrink) {
            $res['ClusterCredentials'] = $this->clusterCredentialsShrink;
        }
        if (null !== $this->clusterCustomConfigurationShrink) {
            $res['ClusterCustomConfiguration'] = $this->clusterCustomConfigurationShrink;
        }
        if (null !== $this->clusterDescription) {
            $res['ClusterDescription'] = $this->clusterDescription;
        }
        if (null !== $this->clusterMode) {
            $res['ClusterMode'] = $this->clusterMode;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->clusterVSwitchId) {
            $res['ClusterVSwitchId'] = $this->clusterVSwitchId;
        }
        if (null !== $this->clusterVpcId) {
            $res['ClusterVpcId'] = $this->clusterVpcId;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->isEnterpriseSecurityGroup) {
            $res['IsEnterpriseSecurityGroup'] = $this->isEnterpriseSecurityGroup;
        }
        if (null !== $this->managerShrink) {
            $res['Manager'] = $this->managerShrink;
        }
        if (null !== $this->maxCoreCount) {
            $res['MaxCoreCount'] = $this->maxCoreCount;
        }
        if (null !== $this->maxCount) {
            $res['MaxCount'] = $this->maxCount;
        }
        if (null !== $this->queuesShrink) {
            $res['Queues'] = $this->queuesShrink;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->sharedStoragesShrink) {
            $res['SharedStorages'] = $this->sharedStoragesShrink;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalPackages'])) {
            $model->additionalPackagesShrink = $map['AdditionalPackages'];
        }
        if (isset($map['Addons'])) {
            $model->addonsShrink = $map['Addons'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['ClusterCategory'])) {
            $model->clusterCategory = $map['ClusterCategory'];
        }
        if (isset($map['ClusterCredentials'])) {
            $model->clusterCredentialsShrink = $map['ClusterCredentials'];
        }
        if (isset($map['ClusterCustomConfiguration'])) {
            $model->clusterCustomConfigurationShrink = $map['ClusterCustomConfiguration'];
        }
        if (isset($map['ClusterDescription'])) {
            $model->clusterDescription = $map['ClusterDescription'];
        }
        if (isset($map['ClusterMode'])) {
            $model->clusterMode = $map['ClusterMode'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['ClusterVSwitchId'])) {
            $model->clusterVSwitchId = $map['ClusterVSwitchId'];
        }
        if (isset($map['ClusterVpcId'])) {
            $model->clusterVpcId = $map['ClusterVpcId'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['IsEnterpriseSecurityGroup'])) {
            $model->isEnterpriseSecurityGroup = $map['IsEnterpriseSecurityGroup'];
        }
        if (isset($map['Manager'])) {
            $model->managerShrink = $map['Manager'];
        }
        if (isset($map['MaxCoreCount'])) {
            $model->maxCoreCount = $map['MaxCoreCount'];
        }
        if (isset($map['MaxCount'])) {
            $model->maxCount = $map['MaxCount'];
        }
        if (isset($map['Queues'])) {
            $model->queuesShrink = $map['Queues'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SharedStorages'])) {
            $model->sharedStoragesShrink = $map['SharedStorages'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        return $model;
    }
}
