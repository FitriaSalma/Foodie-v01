<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foodie v0.1</title>
    <link rel="stylesheet" href="/app.css">
    <script src="/app.js"></script>
</head>
<body>
    <header>
        <h2>Foodie 0.1</h2>
        <h4>Teman setia perut kelaparan</h4>
    </header>
    <h2>Daftar Menu</h2>
    <div class="container">
        <section>
            <?php
            $data = file_get_contents('foodie-rev.json');
            $json = json_decode($data, TRUE);
            echo '<img src="'.$json[0]['picture_url'].'" alt="">';
            echo '<a href="/detail">'.$json[0]['title'].'</a>';
            ?>
        </section>
        <section>
            <?php
            echo '<img src="'.$json[1]['picture_url'].'" alt="">';
            echo '<a href="">'.$json[1]['title'].'</a>';
            ?>
        </section>
        <section>
            <?php
            echo '<img src="'.$json[2]['picture_url'].'" alt="">';
            echo '<a href="">'.$json[2]['title'].'</a>';
            ?>
        </section>
        <section>
            <?php
            echo '<img src="'.$json[3]['picture_url'].'" alt="">';
            echo '<a href="">'.$json[3]['title'].'</a>';
            ?>
        </section>
    </div>
</body>
</html>