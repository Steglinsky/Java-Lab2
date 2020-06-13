<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>zadanie 4</title>
</head>

<body>
    <form action="informacje.php" method="post">
        Imię i nazwisko: 
        <input  name="name" id="name" type="text" required> <br>

        Płeć: 
        <input name="sex" id="male" value="Mężczyzna" type="radio">
        <label for="male"> Male </label>
        <input  name="sex" id="female" value="Kobieta" type="radio">
        <label for="female"> Female </label><br>

        Data urodzenia: 
        <input  name="dob" id="dob" type="date" required> <br>

        Adres E-mail: 
        <input  name="email" id="email" type="email" required> <br>

        Hasło: 
        <input  name="password" id="password" type="password" required> <br>

        Ulubiony kolor: 
        <input name="color" id="color" type="color" required> <br>

        ulubiona liczba od 1 do 9: 
        <input name="number" id="number" min="1" max="9" type="number" required> <br>

        Ulubione pory roku: 
        <input  name="spring" id="spring" value="Wiosna" type="checkbox"> <label for="spring">Wiosna</label>
        <input  name="summer" id="summer" value="Lato" type="checkbox"> <label for="summer">Lato</label>
        <input  name="autumn" id="autumn" value="Jesień" type="checkbox"> <label for="autumn">Jesień</label>
        <input name="winter" id="winter" value="Zima" type="checkbox"> <label for="winter">Zima</label> <br>

        Poziom zadowolenia z życia w skali: 0%
        <input type="range" name="happiness" id="happiness" min="0" max="100">
        <label for="happiness">100%</label> <br>

        Dzień do kontaktu z klientem:
        <select name="contactday" id="contactday">
            <option value="Poniedziałek">Poniedziałek</option>
            <option value="Wtorek">Wtorek</option>
            <option value="Środa">Środa</option>
            <option value="Czwartek">Czwartek</option>
            <option value="Piątek">Piątek</option>
            <option value="Sobota">Sobota</option>
            <option value="Niedziela">Niedziela</option>
        </select> <br>

        Dodatkowe informacje o kliencie: 
        <textarea name="info" id="info" cols="30" rows="1"></textarea><br><br>
        <input type="submit" value="Prześlij!">
    </form>

</body>

</html>