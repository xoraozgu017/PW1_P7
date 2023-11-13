<?php
    $book = [
        "Panduan Belajar PHP untuk Pemula",
        "Membangun Aplikasi Web dengan PHP",
        "Tutorial PHP dan MySQL",
        "Membuat Chat Bot dengan PHP"
    ];

    echo "\n<h2>Judul Buku PHP:</h2>";
    echo "\n<ul>";
    
    foreach($book as $buku){
        echo "\n<li>$buku</li>";
    }

    echo "\n<ul>";
?>