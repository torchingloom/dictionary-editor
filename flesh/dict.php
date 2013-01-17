<?php

class Dict
{
    private $ident, $display_type = 1, $fieldsets = array(), $fields = array(), $items = array(), $source;

    public function __construct($ident)
    {
        $this->ident = $ident;
        $this->source = include realpath(APP_DIR ."/.data/dict/{$ident}.php");

        foreach ($this->source AS $key => $valuev)
        {
            if (property_exists($this, $key))
            {
                $this->{$key} = $valuev;
            }
        }
        
        foreach ($this->fields AS $name => &$data)
        {
            $data = new DictField($name, $data);
        }

        foreach ($this->fieldsets AS $name => &$data)
        {
            foreach ($data['fields'] AS &$f)
            {
                $f = $this->fields[$f];
            }
            $data = new DictFieldset($data);
        }
        
        foreach ($this->items AS &$item)
        {
            $item = new DictItem($item, $this->fields);
        }

        unset($this->source['items']);
    }

    public function getMeta()
    {
        return $this->source;
    }

    public function getItemList($count = 10, $from = 0)
    {
        return array_slice($this->items, $from, $count);
    }
}

class DictField
{
    public $name, $title, $type, $readonly, $format, $maxlength;
    public function __construct($name, array $data)
    {
        $this->name = $name;
        foreach ($data AS $key => $valuev)
        {
            if (property_exists($this, $key))
            {
                $this->{$key} = $valuev;
            }
        }
    }
}

class DictFieldset
{
    public $title, $fields;
    public function __construct(array $data)
    {
        foreach ($data AS $key => $valuev)
        {
            if (property_exists($this, $key))
            {
                $this->{$key} = $valuev;
            }
        }
    }
}

class DictItem
{
    private $__data__ = array(), $fields = array();
    public function __construct($data, &$fields)
    {
        $this->fields = $fields;
        $i = 0;
        foreach ($this->fields AS $f)
        {
            $this->__data__[$f->name] = $data[$i];
            $i++;
        }
    }
    public function __get($key)
    {
        return @$this->__data__['key'];
    }
    public function toArray()
    {
        return $this->__data__;
    }
}