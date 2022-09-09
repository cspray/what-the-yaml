<?php

namespace Cspray\WhatTheYaml;

class YamlList implements YamlSideEffect {

    private readonly array $items;
    private int $indent = 0;

    public function __construct(YamlSideEffect... $items) {
        $this->items = $items;
    }

    public function __toString() : string {
        $contents = '';
        foreach ($this->items as $item) {
            $contents .= sprintf(
                '%s- \'%s\'%s',
                str_repeat(' ', $this->indent + 2),
                $item,
                PHP_EOL
            );
        }

        return $contents;
    }

    public function setIndentation(int $indent) : void {
        $this->indent = $indent;
    }
}