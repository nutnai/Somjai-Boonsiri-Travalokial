<!DOCTYPE html>
<html lang="en">

<?php
    $borrowing_id = 1; //explode("?", $_SERVER["PHP_SELF"])[1];

    $servername = "localhost";
    $username = "id20576360_learnjapannutnai";
    $password = "wn3V%=/uMYin&|o2";
    $dbname = "id20576360_bbookk";

    $sql = "select * from borrowing where borrowing_id = $borrowing_id";
    $connect = mysqli_connect($servername, $username, $password, $dbname);
    $result = mysqli_query($connect, $sql);
    $row = mysqli_fetch_assoc($result);
    $borrowing_id = $row["borrowing_id"];
    $borrowing_rent_date = $row["borrowing_rent_date"];
    $borrowing_due_date = $row["borrowing_due_date"];
    $borrowing_return_date = $row["borrowing_return_date"];
    $borrowing_phone = $row["borrowing_phone"];
    $borrowing_email = $row["borrowing_email"];
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/history.css">
    <link href='https://fonts.googleapis.com/css?family=Inria Sans' rel='stylesheet'>
    <script type="module" src="../src/history.js"></script>
    <script type="module" src="../src/hasTopRightAuth.js"></script>
    <title>History Read</title>
</head>

<body style="background-color: white;">
    <div id="sifah">
        <div id="auth1" style="display: none;">
            <div id="roob" onclick="clickProfile()">
            </div>
            <p id="username"> username</p>
          </div>
          <div id="auth0" >
            <input type="button" value="Register" id="regis" class="yellow"
              onclick="window.location.href='../register.html'" />
            <input type="button" value="Sign in" id="signin" class="yellow" onclick="window.location.href='../signin.html'" />
          </div>
        <p id="hua" onclick="window.location.href='../index.html'">BbookK</p>

        <img id="home" src="https://storage.googleapis.com/travalokail-55abf.appspot.com/lg/lg_home.png">

        </img>
    </div>
    <div id="mid"></div>
    <div id="bluebox"></div>
    <div id="yellowbox">
        <!-- <div id="whitebox">
            <div id="inform" onclick="seeContract('123')" value="haha test" style="display: none;">
                <p>Samyan midtown hotel</p>
                <p>2 person(s) / 1500 baht / 1 night</p>
                <p>16 December 2565 -> 17 December 2565</p>
            </div>
        </div> -->
    </div>


    <p id="personal">Booked</p>


</body>
<style>
    #whitebox {
        position: relative;
        width: 94%;
        height: auto;
        left: 3%;
        top: 3%;

        background: #FFFFFF;
        border-radius: 15px;
    }

    #inform {
        margin-top: 10px;
        margin-bottom: 10px;
        padding: 10px;
        position: relative;
        width: 96%;
        height: auto;
        left: 5%;
        font-family: 'Inria Sans';
        font-style: normal;
        font-weight: 700;
        font-size: 29px;
        line-height: 50px;
        cursor: pointer;
    }

    #yellowbox {
        position: absolute;
        width: 845px;
        height: auto;
        left: 356px;
        top: 248px;
        background: #FFEB85;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 15px;
    }
</style>

</html>