<p align="center">
  <a href="#">
    <img src="https://raw.githubusercontent.com/febryars33/colorcraft/main/ColorCraft.gif" alt="Bootstrap logo">
  </a>
</p>

<h3 align="center">Minecraft Color Parser for PHP</h3>

<p align="center">
  Easy use, Simple and Lightweight, Support using §, and Support Special Character
  <br>
  <a href="#"><strong>Explore on Spigot Page »</strong></a>
  <br>
  <br>
  <a href="#">Report bug</a>
</p>

## ColorCraft

ColorCraft is PHP Library for parse your Minecraft text to Color, Format, and Magic text. For example if you have profile page for players and you want to showing the nickname, clans, ranks, etc. You can use this library for parse minecraft codes from your server.

## Example

<p align="center">
  <span>
    <img src="https://raw.githubusercontent.com/febryars33/colorcraft/main/Screenshot.png" alt="Colors">
  </span>
</p>

## Quick start

Several quick start options are available:

```bash
composer require febryars33/colorcraft
```

```php
<?php
namespace App\Http\Controllers;
...

use Febryars33\ColorCraft\ColorCraft;
...

class ExampleController extends Controller {

	public function home()
	{
		return ColorCraft::convert('§6Hello §eWorld')->toHtml();
	}

}

```
