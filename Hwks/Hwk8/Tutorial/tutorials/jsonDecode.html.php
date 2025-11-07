<html>
    <body>
        <?php
            $users = '{"alice":32, "bob": 23, "erin": 12}';
            $usersArr = json_decode($users, true);
            var_dump($usersArr);
        ?>
    </body>
</html>