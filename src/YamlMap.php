<?php

namespace Cspray\WhatTheYaml;

class YamlMap implements YamlSideEffect {

    private int $indent = 0;

    public function __construct(
        private readonly string $key,
        private readonly YamlSideEffect $yaml
    ) {}

    public function __toString() : string {
        $this->yaml->setIndentation(2);
        return sprintf(
            '%s%s:%s%s', str_repeat(' ', $this->indent), $this->key, PHP_EOL, $this->yaml
        );
    }

    public function setIndentation(int $indent) : void {
        $this->indent = $indent;
    }
}