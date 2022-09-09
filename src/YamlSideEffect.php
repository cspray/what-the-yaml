<?php

namespace Cspray\WhatTheYaml;

use Asgrim\SideEffect\Dispatchable;

interface YamlSideEffect extends Dispatchable {

    public function setIndentation(int $indent) : void;

}