<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\CreateClusterRequest\manager;

use AlibabaCloud\Tea\Model;

class directoryService extends Model
{
    /**
     * @description The type of the domain account.
     *
     * Valid values:
     *
     *   NIS: NIS.
     *
     * @example NIS
     *
     * @var string
     */
    public $type;

    /**
     * @description The version of the domain account service.
     *
     * @example 2.31
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'type'    => 'Type',
        'version' => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return directoryService
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
