<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\SDK\EHPC\V20240730\Models\InstallSoftwaresRequest\additionalPackages;
use AlibabaCloud\Tea\Model;

class InstallSoftwaresRequest extends Model
{
    /**
     * @description The information about the software systems that you want to install.
     *
     * @var additionalPackages[]
     */
    public $additionalPackages;

    /**
     * @description The cluster ID.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'additionalPackages' => 'AdditionalPackages',
        'clusterId'          => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->additionalPackages) {
            $res['AdditionalPackages'] = [];
            if (null !== $this->additionalPackages && \is_array($this->additionalPackages)) {
                $n = 0;
                foreach ($this->additionalPackages as $item) {
                    $res['AdditionalPackages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InstallSoftwaresRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdditionalPackages'])) {
            if (!empty($map['AdditionalPackages'])) {
                $model->additionalPackages = [];
                $n                         = 0;
                foreach ($map['AdditionalPackages'] as $item) {
                    $model->additionalPackages[$n++] = null !== $item ? additionalPackages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
