
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Handlee&display=swap" rel="stylesheet">
    <style>
        .form-row {
            display: flex;
            gap: 50px;
            justify-content: center;
        }
        .cell {
            background-color: white;
            border-radius: 20%;
            width: 100px;
            height: 100px;
            display: flex;
            justify-content: center;
            font-size: 24px;
            border: none solid #333;
            cursor: pointer;
            border-radius: 10%;
            margin: 0.5rem;
        } 
        .text-input{
            background-color: white;
            border-radius: 5%;
            width: 10rem;
            height: 2rem;
            text-align: center;
            font-family: 'Handlee', cursive;
            font-weight: bold;
            font-size: 20px;
            line-height: 5rem;
            margin: 0.5rem;
            justify-content: center;
        }
        
        .btn{
            border-radius: 10%;
            text-align: center;
            font-family: 'Handlee', cursive;
            font-weight: bold;
            line-height: 2.5rem;
            width: 7rem ;
            margin: 0.5rem;
            border: none;
            border-radius: 0.5rem;
            background-color: rgb(0, 110, 255);
            color: white;
            font-size:20px;
            margin: 2rem auto;

        }
        .btn.history{
            width: 10rem;
            background-color: rgb(31, 195, 81);
        }
        .btn.replay{
            width: 10rem;
            height: 3rem;
        }
        .text-title{
            font-family: 'Handlee', cursive;
            font-weight: bold;
            font-size: 50px;
            text-align: center;
        }
        .text{
            font-family: 'Handlee', cursive;
            font-weight: bold;
            font-size: 20px;
            text-align: center;
        }
        .text2{
            font-family: 'Handlee', cursive;
            font-weight: bold;
            font-size: 15px;
            text-align: center;
        }
        .box-list {
            display: grid;
            grid-template-columns: repeat(1,40rem);
            grid-gap: 0px;
            justify-content: center;
        }

        .box-show {
            border-radius: 2.5%;
            font-family: 'Handlee', cursive;
            width: 30rem;
            height: 10rem;
            background-color: while;
            display: flex;
            align-items: center; 
            box-shadow: 0px 0px 15px #FF8989 ;
            margin: 10px auto;
            justify-content: center 
        }
        .text-win{
            font-family: 'Handlee', cursive;
            width: 10rem;
            height: 9rem;
            background-color: while;
            display: flex;
            align-items: center;
            font-size: 10rem;
            color: red;
        }
        .text-w{
            font-family: 'Handlee', cursive;
            width: 10rem;
            height: 1rem;
            align-items: center;
            background-color: while;
            display: flex;
            font-size: 3rem;
        }
        .text-s{
            font-family: 'Handlee', cursive;
            width: 15rem;
            height: 2rem;
            font-size: 16px;
        }
        .box{
            background-color: white;
            border: none;
            border-radius: 10%;
            box-shadow: 0px 0px 8px #888;
            width: 5rem;
            height: 5rem;
            text-align: center;
            font-size: 40px;
            font-family: 'Handlee', cursive;
            font-weight: bold;
            line-height: 5rem;
            margin: 0.5rem;
            cursor: pointer;
            justify-content: center;
        }
           
        .box:hover{
            box-shadow: 0px 0px 15px  #888;
        }
        .reset-btn {
            border: none;
            border-radius: 0.5rem;
            background-color: rgb(0, 110, 255);
            color: white;
            font-size: 2rem;
            padding: 0.5rem 1rem;
            margin: 2rem auto;
            display: block;
        }

        .reset-btn:hover {
            background-color: rgb(0, 119, 255);
        }

        .inactive {
            border-bottom: 5px solid transparent;
        }

        .winner {
            background-color: #ffd700;
            color: #fff; 
        }


    </style>
</head>
</html>