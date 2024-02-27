<?php

namespace OnPHPoint\Composer;

class Owner
{
    public function __construct(
        public string $name,
        public string $tel,
    ) {}
}