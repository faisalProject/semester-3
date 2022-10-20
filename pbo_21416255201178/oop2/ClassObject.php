<?php
    class Books{

    }

    $brendan_eich = new Books();
    $guido_van_rossum = new Books();
    $rasmus_lerdorf = new Books();

    $brendan_eich -> name = 'Javascript';
    $guido_van_rossum -> name = 'Python';
    $rasmus_lerdorf -> name = 'PHP';

    print_r($brendan_eich);
    echo '<br>';
    print_r($guido_van_rossum);
    echo '<br>';
    print_r($rasmus_lerdorf);
?>