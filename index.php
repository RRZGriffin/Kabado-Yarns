<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num=11;
    for ($i=1; $i < $num; $i++) { 
        ?>
            <div class="">
                <h2><?php echo $i ?></h2>
            </div>
        <?php
    }
    ?>
    <div class="">
        <h1>Nasa has been hacked</h1>
    </div>
    <?php
    $num=21;
    for ($i=1; $i < $num; $i++) { 
        ?>
            <div class="">
                <h2><?php echo $i++ ?> Carlo Aspiras</h2>
            </div>
        <?php
    }
    ?>
    <?php
    $num=70;
    for ($i=10; $i < $num; $i+=10) { 
        ?>
            <div class="">
                <h2><?php echo $i ?></h2>
            </div>
        <?php
    }
    ?>
    <?php
    $input = 1;
    if ($input >5) {
        for ($i=10; $i<=50; $i+=2) 
            ?>
                <div class="">
                    <h2><?php echo $i ?></h2>
                </div>
        <?php
    }
    else 
    {
        ?>
        <div class="">
            <?php
            ()
            <h1>even </h1>
        </div>
    }
    ?>

</body>
</html>