<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STUDENT</title>
</head>
<body>
        <table border="1">
            <tr>
                <td>
                    NAME
                </td>
                <td>
                    <?php echo $_POST['name'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    roll
                </td>
                <td>
                <?php echo $_POST['roll'] ?>
                </td>
            </tr>
            <tr>
                <td>
                    dob
                </td>
                <td>
                <?php echo $_POST['dob']?>
                </td>
            </tr>
            <tr>
                <td>
                    email
                </td>
                <td>
                <?php echo $_POST['email'] ?>
                </td>
            </tr>
        </table>
</body>
</html>