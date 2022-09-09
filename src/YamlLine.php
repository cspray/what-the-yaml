<?php

namespace Cspray\WhatTheYaml;

class YamlLine implements YamlSideEffect {

    public function __construct(private readonly string $line) {}

    public function __toString() : string {
        return $this->line;
    }

    public function setIndentation(int $indent) : void {
        // lulz we don't need that ... or do we?
    }
}