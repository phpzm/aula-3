<?php

namespace Fagoc\Core;

class Model
{
    protected $collection;

    public function create($data)
    {
        $stored = $this->read();

        $stored[] = $data;

        $json = json_encode($stored);

        return file_put_contents($this->filename(), $json);
    }

    public function read()
    {
        $filename = $this->filename();

        $stored = [];
        if (file_exists($filename)) {
            $stored = json_decode(file_get_contents($filename));
        }

        return $stored;
    }

    private function filename()
    {
        return __APP_ROOT__ . '/storage/' . $this->collection . '.json';
    }
}
