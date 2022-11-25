# Colorcraft
A parser Minecraft Color Codes

### Features
- Support **&** and **§**
- Simple and Lightweight
- Easy to use

### Instalation
```bash
composer require febryars33/colorcraft
```
```php
<?php
..
use Febryars33\Colorcraft\Parser;
...

class YourClass {
	public function example()
	{
		return Parser::parser('§6Hello &eWorld');
	}
}
```

Original source code by ??? IDK
