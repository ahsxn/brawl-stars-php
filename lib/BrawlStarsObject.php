<?php 

namespace BrawlStars;

class BrawlStarsObject 
{
    protected $objectProperties = [];
    protected $data = [];

    public static function make(array $data): BrawlStarsObject
    {
        $instance = new static;

        $instance->parseData($data);

        return $instance;
    }

    protected function parseData(array $data): void
    {
        foreach ($data as $key => $value) {
            $this->parse($key, $value);
        }
    }

    /**
     * 
     * @param [string | int] $key
     * @param [string | int | array] $value
     * @return BrawlStarsObject
     */
    protected function parse($key, $value): BrawlStarsObject
    {   
        if ($this->isPropertyObject($key)) {
            return $this->buildPropertyObject($key, $value);
        }

        return $this->setProperty($key, $value);
    }

    /**
     * 
     * @param [string | int] $key
     * @return boolean
     */
    protected function isPropertyObject($key): bool
    {
        return array_key_exists($key, $this->objectProperties) || is_int($key);
    }

    /**
     *
     * @param [string | int] $key
     * @param [array] $value
     * @return BrawlStarsObject
     */
    protected function buildPropertyObject($key, $value): BrawlStarsObject
    {
        $class = is_int($key) ? $this->objectProperties['all'] : $this->objectProperties[$key];

        return $this->setProperty($key, $class::make($value));
    }

    /**
     * 
     * @param [string | int] $key
     * @param [string | int | BrawlStarsObject] $value
     * @return BrawlStarsObject
     */
    protected function setProperty($key, $value): BrawlStarsObject
    {
        $this->data[$key] = $value;
        
        return $this;
    }

    /**
     * 
     * @return [string | int | BrawlStarObject]
     */
    public function __call($name, $args)
    {
        return $this->data[$name] ?? null;
    }
}