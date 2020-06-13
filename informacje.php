<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Informacje o kliencie</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    $name = $_POST['name'];
    $sex = $_POST['sex'];
    $dob = date("d.m.Y", strtotime($_POST['dob']));
    $email = $_POST['email'];
    $password = $_POST['password'];
    $color = $_POST['color'];
    $number = $_POST['number'];
    $seasons = [];
    if (isset($_POST['spring'])) {
        $spring = $_POST['spring'];
        $seasons[]=$spring;
    }
    if (isset($_POST['summer'])) {
        $summer = $_POST['summer'];
        $seasons[]=$summer;
    }
    if (isset($_POST['autumn'])) {
        $autumn = $_POST['autumn'];
        $seasons[]=$autumn;
    }
    if (isset($_POST['winter'])) {
        $winter = $_POST['winter'];
        $seasons[]=$winter;
    }
    $happiness = $_POST['happiness'];
    $contactday = $_POST['contactday'];
    $info = $_POST['info'];

    echo <<< EOT
    <table>
    <tr>
        <th colspan="2">$name</th>
        <th></th>
    </tr>
    <tr>
        <th>Płeć:</th>
        <td>$sex</td>
    </tr>
    <tr>
        <th>Data urodzenia:</th>
        <td>$dob</td>
    </tr>
    <tr>
        <th>Adres E-mail:</th>
        <td>$email</td>
    </tr>
    <tr>
        <th>Hasło:</th>
        <td>$password</td>
    </tr>
    <tr>
        <th>Ulubiony kolor:</th>
        <td style = "background-color: $color"></td>
    </tr>
    <tr>
        <th>Ulubiona liczba od 1 do 9:</th>
        <td>$number</td>
    </tr>
EOT;
    echo "<tr>";
    echo "<th>Ulubione pory roku:</th>";
    echo "<td>";
        echo implode(", ", $seasons);
    echo "</td>";
    echo <<< EOT
    </tr>
    <tr>
        <th>Poziom zadowolenia z życia:</th>
        <td>$happiness%</td>
    </tr>
    <tr>
        <th>Dzień do kontaktu z klientem:</th>
        <td>$contactday</td>
    </tr>
    <tr>
        <th>Dodatkowe informacje o kliencie:</th>
        <td>$info</td>
    </tr>
    </table>
EOT;
    ?>
</body>

</html>