<html>
    <head>
        <title>個人向けあいさつフォーム</title>
    </head>
    <body>
        <?php if(!empty($_POST['name'])){
            echo "ようこそ、{$_POST['name']}さん";
        } ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            名前を入れてください: <input type="text" name="name" />
            <input type="submit">
        </form>
    </body>
</html>