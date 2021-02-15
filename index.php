<?php
    require_once('class.dvd.php');

    $dvd1 = new Dvd("Ving01", 10, "Vingadores", 2020);
    $dvd2 = new Dvd("Avt01", 10, "Avatar", 2010);
    $dvd3 = new Dvd("Mat01", 10, "Matrix", 2005);
    $dvd4 = new Dvd("Xman01", 10, "X-Man", 2018);

    $leite1 = new Leite("Moc01", 5, "Mococa", "1L", "12/02/2021");
    $leite2 = new Leite("Nest01", 8, "Nestlé", "1L", "20/02/2021");
    $leite3 = new Leite("Bet01", 3, "Betania", "1L", "29/02/2021");
    $leite4 = new Leite("Ita01", 4, "Italac", "1L", "10/03/2021");
    $leite5 = new Leite("Itam01", 4, "Itambé", "1L", "11/02/2021");
    $leite6 = new Leite("Camp01", 3, "Camponesa", "1L", "24/02/2021");

    $estoque = {
        "Ving01" => $dvd1;
        "Avt01" => $dvd2;
        "Mat01" => $dvd3;
        "Xman01" => $dvd4;

        "Moc01" => $leite1;
        "Nest01" =>$leite2;
        "Bet01" => $leite3;
        "Ita01" => $leite4;
        "Itam01" => $leite5;
        "Camponesa" => $leite6;
    };
    $leite_vencido = $estoque[]
    echo "Leites vencidos: {}"
?>