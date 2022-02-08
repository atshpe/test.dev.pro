<?php

class ObjectCollection
{
    private $storage = [];

    public function add(object $key, mixed $data = null)
    {
        $key->{'data'} = $data;
        $this->storage[] = $key;
    }

    public function remove(object $key)
    {
        foreach ($this->storage as $item => $obj) {
            if ($obj === $key) {
                unset($this->storage[$item]);
            }
        }
    }

    public function getHash(object $key) : string
    {
        return spl_object_hash($key);
    }

    public function current() : object
    {
        return end($this->storage);
    }

    public function getObjectList() : array
    {
        return $this->storage;
    }

    public function check(object $object) : bool
    {
        foreach ($this->storage as $obj) {
            if ($obj === $object) return true;
        }

        return false;
    }

    public static function removeAll(ObjectCollection $collection)
    {
        $collection->storage = [];
    }
}
