<?php

interface Example
{
    public function getName(): string;
}

class ExampleTwo implements Example
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

$example = new ExampleTwo("John Doe");
echo $example->getName();