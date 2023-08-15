<?php
    include "../gameXO/control/style.php";
    include "../gameXO/control/controlCheck.php";
    $size = isset($_POST['size']) ? (int)$_POST['size'] :'3';
?>
<html>
<head>
    <title>Tic-Tac-Toe (XO) Game</title>
    <style>
        .board {
            display: grid;
            grid-template-columns: repeat(<?php echo $size; ?>,7rem);
            grid-gap: 2px;
            justify-content: center;
            margin: 2rem auto;
        } 
    </style>
</head>
<body>
    <h2 class="text-title">Tic-Tac-Toe (XO) Game</h2>
    <div>
        <div><p class="text2">Please enter the size you want to play. (size : 3-10)</p></div>
        <div class="form-row">
            <form method="POST">
                <div>
                <label class="text">Board Size: </label>
                <input type="number" name="size" id="size" class="text-input" <?php echo $size; ?> min=3 max=10>
                <button class="btn" type="submit" name="submitSize">Set Size</button>
                </div>
            </form>
            <tr></tr>
            <form action="../gameXO/server/selectData.php" method="POST">
                <button class="btn history" type="submit" name="submitHistory">History play</button>
            </form>
        </div>
        <div>
            <?php echo '<div class="board">';
            if($size>=3){
            for ($i = 0; $i < $size * $size; $i++) {
                $setI = $i;
            ?>
                <button class="box" onclick="handleCellClick(this)" id="btnXO" value="<?php echo $i ?>"></button>
            <?php } }?>

        </div>
        <div class="form-row">
            <form method="post">
                <button class="btn replay" type="submit" name="submitRestart">Restart</button>
            </form>
        </div>
    </div>

</body>
</html>