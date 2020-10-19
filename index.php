<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Server Panel V</title>
</head>

<body>

    <main>
        <h1>Login to Server Panel V</h1>
        <form action="checker.php" method=POST>
            <table>
                <tr>
                    <td>Username: </td>
                    <td><input type=text name=username placeholder="Username"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type=password name=password placeholder="Password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type=submit></td>
                </tr>
            </table>
        </form>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>