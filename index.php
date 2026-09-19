<?php ?>
<!DOCTYPE html>
<style>
    .date-style *{
        margin: auto;
        padding: 4px;
        height: fit-content;
        width: fit-content;
        background-color: mediumaquamarine;
        font-size: 96px;
    }
    .body-style{
        display: flex;
        min-width: 100vh;
        min-height: 100vh;
        background-color: lightseagreen;
        justify-content: center;
        align-items: center;
    }
</style>
<html>
    <body class="body-style">
        <h1 class="date-style">
            <p>Дата:
                <time datetime="<?php echo date("d:m:Y");?>">
                    <?php echo date("d:m:Y");?>
                </time>
            </p>
            <p>Время:
                <time datetime="<?php echo date("H:i:s");?>">
                    <?php echo date("H:i:s");?>
                </time>
            </p>
        </h1>
    </body>
</html>
