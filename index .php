<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php
            $connection = mysqli_connect("127.0.0.1", "root", "");
            $selectDb = mysqli_select_db($connection,"users");  
            if(isset($_POST['date']) && isset($_POST['age']) && isset($_POST['check'])){
                $date = $_POST['date'];
                $age = $_POST['age'];
                $check = $_POST['check'];
                $query = "INSERT INTO vosem(dataQ, vozrast, chek) values('$date', '$age', '$check')";

            }
        ?>
        <form class="form-signin" method="post">
            <input type="date" name="date" placeholder="Текст" required>
            <input type="number" name="age" placeholder="Число" required>
            <input type="checkbox" name="check" placeholder="Число" required>
            <button type="submit">Добавить</button>
        </form>
    </body>
</html>