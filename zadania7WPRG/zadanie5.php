<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Kalkulator</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        div {
            padding: 30px;
            background-color: dimgrey;
            border: 2px solid dodgerblue;
            width: 400px;
        }

        h1 {
            color: white;
            text-align: center;
            border-bottom: 2px solid white;
            padding-bottom: 10px;
        }

        h2,
        h3 {
            color: white;
            text-align: center;
        }

        td {
            color: white;
        }

        form {
            margin-top: 20px;
        }

        hr {
            border: 1px solid white;
        }

    </style>
</head>

<body>
<div>
    <h1>Kalkulator</h1>
    <form action="calc.php" method="POST">
        <h3>Kalkulator prosty</h3>
        <table>
            <tr>
                <td>Operacja:</td>
                <td>
                    <select name="operationType">
                        <option value="addition">Dodawanie</option>
                        <option value="subtraction">Odejmowanie</option>
                        <option value="multiplication">Mnożenie</option>
                        <option value="division">Dzielenie</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pierwsza liczba:</td>
                <td><input name="liczba1"></td>
            </tr>
            <tr>
                <td>Druga liczba:</td>
                <td><input name="liczba2"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Oblicz"></td>
            </tr>
        </table>
    </form>

    <hr>

    <form action="calc.php" method="POST">
        <h3>Kalkulator zaawansowany</h3>
        <table>
            <tr>
                <td>Operacja:</td>
                <td>
                    <select name="operationType">
                        <option value="sin">Sinus</option>
                        <option value="cos">Cosinus</option>
                        <option value="tg">Tangens</option>
                        <option value="binToDec">Binarne na dziesiętne</option>
                        <option value="decToBin">Dziesiętne na binarne</option>
                        <option value="decToHex">Dziesiętne na szesnastkowe</option>
                        <option value="hexToDec">Szesnastkowe na dziesiętne</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Wartość:</td>
                <td><input name="liczba1"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Oblicz"></td>
            </tr>
        </table>
    </form>
</div>
</body>

</html>
