<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListJobsResponseBody\jobs\jobSpec;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description The number of vCPUs that were used to run the job.
     *
     * @example 6
     *
     * @var string
     */
    public $cores;

    /**
     * @description The number of GPUs that were used to run the job.
     *
     * @example 0
     *
     * @var string
     */
    public $gpus;

    /**
     * @description The size of memory that was used to run the job.
     *
     * @example 1536MB
     *
     * @var string
     */
    public $memory;

    /**
     * @description The number of compute nodes that were used to run the job.
     *
     * @example 3
     *
     * @var string
     */
    public $nodes;
    protected $_name = [
        'cores'  => 'Cores',
        'gpus'   => 'Gpus',
        'memory' => 'Memory',
        'nodes'  => 'Nodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cores) {
            $res['Cores'] = $this->cores;
        }
        if (null !== $this->gpus) {
            $res['Gpus'] = $this->gpus;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = $this->nodes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cores'])) {
            $model->cores = $map['Cores'];
        }
        if (isset($map['Gpus'])) {
            $model->gpus = $map['Gpus'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['Nodes'])) {
            $model->nodes = $map['Nodes'];
        }

        return $model;
    }
}
