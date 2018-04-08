<?php

namespace DurianSoftware\Services;

class LogThrownError
{
    private $e;

    public function __construct($e)
    {
        $this->e = $e;
        $this->logError();
    }

    private function logError()
    {
        \Log::error($this->e. ' in ' . $this->e->getFile() . ' at line ' . $this->e->getLine();
    }
}
