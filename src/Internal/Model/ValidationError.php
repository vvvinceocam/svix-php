<?php

namespace Svix\Internal\Model;

class ValidationError extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property) : bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * The location as a [`Vec`] of [`String`]s -- often in the form `["body", "field_name"]`, `["query", "field_name"]`, etc. They may, however, be arbitrarily deep.
     *
     * @var string[]
     */
    protected $loc;
    /**
     * The message accompanying the validation error item.
     *
     * @var string
     */
    protected $msg;
    /**
     * The type of error, often "type_error" or "value_error", but sometimes with more context like as "value_error.number.not_ge"
     *
     * @var string
     */
    protected $type;
    /**
     * The location as a [`Vec`] of [`String`]s -- often in the form `["body", "field_name"]`, `["query", "field_name"]`, etc. They may, however, be arbitrarily deep.
     *
     * @return string[]
     */
    public function getLoc() : array
    {
        return $this->loc;
    }
    /**
     * The location as a [`Vec`] of [`String`]s -- often in the form `["body", "field_name"]`, `["query", "field_name"]`, etc. They may, however, be arbitrarily deep.
     *
     * @param string[] $loc
     *
     * @return self
     */
    public function setLoc(array $loc) : self
    {
        $this->initialized['loc'] = true;
        $this->loc = $loc;
        return $this;
    }
    /**
     * The message accompanying the validation error item.
     *
     * @return string
     */
    public function getMsg() : string
    {
        return $this->msg;
    }
    /**
     * The message accompanying the validation error item.
     *
     * @param string $msg
     *
     * @return self
     */
    public function setMsg(string $msg) : self
    {
        $this->initialized['msg'] = true;
        $this->msg = $msg;
        return $this;
    }
    /**
     * The type of error, often "type_error" or "value_error", but sometimes with more context like as "value_error.number.not_ge"
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     * The type of error, often "type_error" or "value_error", but sometimes with more context like as "value_error.number.not_ge"
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
}