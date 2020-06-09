<?php

namespace App;

class ProcessRunner
{
    private $process1WasCalled = false;
    private $process2WasCalled = false;
    private $process3WasCalled = false;
    private $process4WasCalled = false;

    public function run($input1, $input2)
    {
        // Conditional branch1
        if ($input1 > 10) {
            $this->process1WasCalled = true;
        } else {
            $this->process2WasCalled = true;
        }

        // Conditional branch2
        if ($input1 % 2 == 0 || $input2 % 3 == 0) {
            $this->process3WasCalled = true;
        } else {
            $this->process4WasCalled = true;
        }

        return (int) $this->process1WasCalled
            + (int) $this->process2WasCalled
            + (int) $this->process3WasCalled
            + (int) $this->process4WasCalled;
    }

    public function wasProcess1Called()
    {
        return $this->process1WasCalled;
    }

    public function wasProcess2Called()
    {
        return $this->process2WasCalled;
    }

    public function wasProcess3Called()
    {
        return $this->process3WasCalled;
    }

    public function wasProcess4Called()
    {
        return $this->process4WasCalled;
    }
}
