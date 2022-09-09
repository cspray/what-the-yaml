# What The YAML?

Do you write YAML? Do you write it in PHP? Do you have a strong sense of self-loathing? Of course you do, you're writing 
PHP and _YAML_! Then you should absolutely, 100%, for-realsies-in-production, use this library to generate your YAML!<sup>1</sup> 
What kind of rudimentary, half-assed feature set do you get by installing this library?

- Functionality through the repulsive [asgrim/side-effect](https://github.com/asgrim/side-effect) framework!
- Exactly 1 unit test ensuring that at least one of my half-baked assumptions holds true!
- Writing YAML in 100% pure, `__toString` implementations!
- **Guaranteed** to make you go "What the f..." and question the sanity of the author!

## How do you use this?

Preferably, you don't. You reject writing YAML on principle and a solemn vow that you'd never bring another artifact 
of evil into this world again. But, sometimes ya gotta get paid! The following code...

```php
<?php declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

$yaml = (string) new \Cspray\WhatTheYaml\YamlMap('dear-god', new \Cspray\WhatTheYaml\YamlMap(
    'why', new \Cspray\WhatTheYaml\YamlList(
        new \Cspray\WhatTheYaml\YamlLine('trollz'),
        new \Cspray\WhatTheYaml\YamlLine('lulz'),
        new \Cspray\WhatTheYaml\YamlLine('self-loathing'),
        new \Cspray\WhatTheYaml\YamlLine('and the friends we make along the way')
    )
));

```

Results in the following YAML...

```yaml
dear-god:
  why:
    - 'trollz'
    - 'lulz'
    - 'self-loathing'
    - 'and the friends we make along the way'

```

## Installation

Composer, duh.

```
composer require cspray/what-the-yaml
```

## Footnotes

<sup>1</sup> In all seriousness, do not actually use this in production. I mean, damn, what's wrong with you? Using this in production, yeesh.