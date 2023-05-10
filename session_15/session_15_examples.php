<?php
trait LoggingTrait
{
    private function log($message)
    {
        echo "Logging message: $message";
    }

    public function publicLog($message)
    {
        $this->log("[Public] $message");
    }

    protected function protectedLog($message)
    {
        $this->log("[Protected] $message");
    }

    private function privateLog($message)
    {
        $this->log("[Private] $message");
    }
}

class MyClass
{
    use LoggingTrait;

    public function doSomething()
    {
        $this->publicLog("This is a public log.");
        $this->protectedLog("This is a protected log.");
        $this->privateLog("This is a private log."); // Will generate an error
    }
}

$instance = new MyClass();
$instance->doSomething();
