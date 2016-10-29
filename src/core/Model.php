<?php

namespace Fagoc\Core;

class Model
{
    protected $collection;

    public function create($data)
    {
        $filename = __APP_ROOT__ . '/storage/' . $this->collection . '.json';

        $stored = [];
        if (file_exists($filename)) {
            $stored = json_decode(file_get_contents($filename));
        }
        $stored[] = $data;

        $json = json_encode($stored);

        return file_put_contents($filename, $json);
    }
}
