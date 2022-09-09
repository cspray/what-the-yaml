<?php

namespace Cspray\WhatTheYaml;

use PHPUnit\Framework\TestCase;

class YamlMapTest extends TestCase {

    public function testGeneratingYaml() : void {
        $yaml = (string) new YamlMap('dear-god', new YamlMap(
            'why', new YamlList(
                new YamlLine('trollz'),
                new YamlLine('lulz'),
                new YamlLine('self-loathing'),
                new YamlLine('and the friends we make along the way')
            )
        ));

        $expected = <<<YAML
dear-god:
  why:
    - 'trollz'
    - 'lulz'
    - 'self-loathing'
    - 'and the friends we make along the way'

YAML;

        self::assertSame($expected, $yaml);
    }



}