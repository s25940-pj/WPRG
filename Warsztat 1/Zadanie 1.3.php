<?php

function censorPhrase($phrase) {
    $badWords = array("fuck", "cunt", "shit", "bitch");

    foreach ($badWords as $badWord) {
        $phrase = preg_replace("/$badWord/i", str_repeat('*', strlen($badWord)), $phrase);
    }

    return $phrase;
}

echo censorPhrase("This shitty cunt. I fucking hate that bitch!");


