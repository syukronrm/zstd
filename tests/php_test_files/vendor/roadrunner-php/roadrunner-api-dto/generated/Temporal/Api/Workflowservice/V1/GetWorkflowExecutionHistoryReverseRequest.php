<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.GetWorkflowExecutionHistoryReverseRequest</code>
 */
class GetWorkflowExecutionHistoryReverseRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution execution = 2;</code>
     */
    protected $execution = null;
    /**
     * Generated from protobuf field <code>int32 maximum_page_size = 3;</code>
     */
    protected $maximum_page_size = 0;
    /**
     * Generated from protobuf field <code>bytes next_page_token = 4;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *     @type \Temporal\Api\Common\V1\WorkflowExecution $execution
     *     @type int $maximum_page_size
     *     @type string $next_page_token
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution execution = 2;</code>
     * @return \Temporal\Api\Common\V1\WorkflowExecution|null
     */
    public function getExecution()
    {
        return $this->execution;
    }

    public function hasExecution()
    {
        return isset($this->execution);
    }

    public function clearExecution()
    {
        unset($this->execution);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution execution = 2;</code>
     * @param \Temporal\Api\Common\V1\WorkflowExecution $var
     * @return $this
     */
    public function setExecution($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowExecution::class);
        $this->execution = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 maximum_page_size = 3;</code>
     * @return int
     */
    public function getMaximumPageSize()
    {
        return $this->maximum_page_size;
    }

    /**
     * Generated from protobuf field <code>int32 maximum_page_size = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMaximumPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->maximum_page_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes next_page_token = 4;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * Generated from protobuf field <code>bytes next_page_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->next_page_token = $var;

        return $this;
    }

}

