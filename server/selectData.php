<?php
include "../control/style.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tic-Tac-Toe (XO) Game</title>
</head>
<body>
    <h2 class="text-title">Tic-Tac-Toe (XO) Game</h2>
    <h3 class="text"> History Game</h3>
    <div>
        <form  action="../index.php" method="post" >
            <button class="btn" type="submit" name="back">Back</button><br><br>
        </form>
    </div>
    
    <div class="box-list">
        <?php
        require_once('../server/dbcon.php');
        $sql = "SELECT win FROM tb_status";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $win = $row["win"];
                echo '<div class="box-show">
                        <div class="text-win">'. $win .'</div>
                        <div class="text-w">Winner </div>
                    </div>';
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>
</body>
</html>
