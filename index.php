<?php

use Febryars33\ColorCraft\Converter;

require_once './vendor/autoload.php';

$converter = new Converter();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example</title>
</head>

<body>
    <style>
        .colorcraft {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .mc-black {
            color: #000000;
        }

        .mc-dark-blue {
            color: #0000AA;
        }

        .mc-dark-green {
            color: #00AA00;
        }

        .mc-dark-aqua {
            color: #00AAAA;
        }

        .mc-dark-red {
            color: #AA0000;
        }

        .mc-dark-purple {
            color: #AA00AA;
        }

        .mc-gold {
            color: #FFAA00;
        }

        .mc-gray {
            color: #AAAAAA;
        }

        .mc-dark-gray {
            color: #555555;
        }

        .mc-blue {
            color: #5555FF;
        }

        .mc-green {
            color: #55FF55;
        }

        .mc-aqua {
            color: #55FFFF;
        }

        .mc-red {
            color: #FF5555;
        }

        .mc-light-purple {
            color: #FF55FF;
        }

        .mc-yellow {
            color: #FFFF55;
        }

        .mc-white {
            color: #FFFFFF;
        }

        .mc-bold {
            font-weight: bold;
        }

        .mc-italic {
            font-style: italic;
        }

        .mc-underline {
            text-decoration: underline;
        }

        .mc-strikethrough {
            text-decoration: line-through;
        }

        .mc-magic {
            /* JavaScript untuk obfuscated text akan menangani ini */
        }

        .mc-reset {
            color: initial;
            font-weight: normal;
            font-style: normal;
            text-decoration: none;
        }
    </style>

    <?php
    // echo strtolower(substr('&aH', 0, 1));
    echo $converter->toPlainText('§c§l§kii §6✪ §4§lAdministrator §6✪ §c§l§kii');
    // echo $converter->toHtml('§aHello');
    ?>

    <script>
        const obfuscatedElements = document.querySelectorAll('.mc-magic');

        obfuscatedElements.forEach(element => {
            const originalText = element.textContent;
            setInterval(function() {
                element.textContent = obfuscateText(originalText);
            }, 50);
        });

        function obfuscateText(text) {
            let obfuscatedText = '';
            const chars = text.split('');
            chars.forEach(char => {
                // Replace visible characters with random characters
                if (char.match(/[a-zA-Z0-9]/)) {
                    obfuscatedText += String.fromCharCode(Math.floor(Math.random() * 95) + 32);
                } else {
                    obfuscatedText += char;
                }
            });
            return obfuscatedText;
        }
    </script>

</body>

</html>