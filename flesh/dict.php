<?php

class Dict
{
    private $ident, $display_type = 1, $fieldsets = array(), $fields = array(), $items = array();

    public function __construct($ident)
    {
        $this->ident = $ident;
        $data = include realpath(APP_DIR ."/.data/dict/{$ident}.php");

        foreach ($data AS $key => $valuev)
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
    }

    public function getMeta()
    {

    }

    public function getDisplayType()
    {

    }

    public function getFieldList()
    {

    }

    public function getFieldsetList()
    {

    }

    public function getItemList()
    {

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
}