
<!DOCTYPE html>
<html>
<head>
</head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        let currentPlayer = 'X';
        let isGameActive = true;
    
        function handleCellClick(cell) {
            if (!isGameActive || cell.textContent !== '') {
                return;
            }

            cell.textContent = currentPlayer;
            if (checkWinner()) {
                alert(currentPlayer + ' wins!');
                isGameActive = false;
            } else {
                togglePlayer();
            }
        }
        function togglePlayer() {
            if (isGameActive) {
                currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
            }
        }

        function checkWinner() {
            const cells = document.querySelectorAll('.box');
            const size = Math.sqrt(cells.length);
            const winningCombos=[];
            for (let i = 0; i < size; i++) {
                const rowCombo = [];
                const colCombo = [];
                for (let j = 0; j < size; j++) {
                    rowCombo.push(i * size + j);
                    colCombo.push(j * size + i);
                }
                winningCombos.push(rowCombo, colCombo);
            }

            const diagonal1 = [];
            const diagonal2 = [];
            for (let i = 0; i < size; i++) {
                diagonal1.push(i * (size + 1));
                diagonal2.push((i + 1) * (size - 1));
            }
            
            winningCombos.push(diagonal1, diagonal2);
            for (const board of winningCombos) {
                const strX = [];
                const strO = [];
                let numberX = 0;
                let numberO = 0;
                
                for (const i of board) {
                    if (cells[i].textContent === 'X') {
                        strX.push(i);
                        numberX++;
                    }
                    if (cells[i].textContent === 'O') {
                        strO.push(i);
                        numberO++;
                    }
                    
                    if (numberX === size) {
                        highlightWinningCells(strX);
                        return true;
                    }
                    
                    if (numberO === size) {
                        highlightWinningCells(strO);
                        return true;
                    }
                }
            }
            
            return false;
        }   
            function highlightWinningCells(combo) {
                const cells = document.querySelectorAll('.box');
                let win;
                for (const cellIndex of combo) {
                    cells[cellIndex].classList.add('winner');
                    if(cells[cellIndex].textContent==='X'){
                        win='X';
                    }
                    if(cells[cellIndex].textContent==='O'){
                        win='O';
                    }
                }
                console.log(win);
                $.ajax({
                    type: "POST",
                    url: "server/insertData.php",
                    data:  JSON.stringify({ win: win }),
                    dataType: "json",
                    success: function(data) {
                        console.log(data);
                    }
                });
                window.location.href = "?win=" + win;
            }
    </script>
</html>