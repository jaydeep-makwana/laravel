<?php
function hobbyCheck($value)
{

    $hobby = '';
    if ((old('hobby'))) {

        $hobby = old('hobby');

        if (in_array($value, $hobby)) {
            echo 'checked';
        }
    }
}


