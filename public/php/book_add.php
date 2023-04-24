<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="../css/book_add.css">
  <link href='https://fonts.googleapis.com/css?family=Inria Sans' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Book</title>
  <script type="module" src="../src/hasTopRightAuth.js"></script>
  <script type="module" src="../src/book_add.js"></script>
</head>

<body>
  <div id="sifah">
    <p id="hua" onclick="window.location.href='../index.html'" onclick="window.location.href='../index.html'">
      BbookK
    </p>

    <img id="home" src="https://storage.googleapis.com/travalokail-55abf.appspot.com/lg/lg_home.png">

    </img>
    <div id="auth1"  style="display: none;">

      <div id="roob" onclick="clickProfile()">
      </div>
      <p id="username"> username</p>

    </div>
    <div id="auth0">
      <input type="button" value="Sign in" id="signin" class="yellow" onclick="window.location.href='../signin.php'" />
    </div>
    <p id="personal">About Hotel</p>
    <div id="information">
      <div id="yellowbox">
        <div id="whitebox">
        <form method="post" action="./inserter.php">
          <input type="hidden" name="type" value="add">
          <p class="head">Book Name :</p>
          <input type="text" id="book_name" name="book_name" require class="info" placeholder="Book Name . . .">
          <div class="line"></div>
          <p class="head">Book Chapter :</p>
          <input type="text" id="book_chapter" name="book_chapter" require class="info" placeholder="Book Chapter . . .">
          <div class="line"></div>
          <p class="head">Book ISBN :</p>
          <input type="number" id="book_isbn" name="book_isbn" require class="info" placeholder="Book ISBN . . .">
          <div class="line"></div>
          <p class="head">Book Number Of Pages :</p>
          <input type="number" id="book_npage" name="book_npage" require class="info" placeholder="Book Number Of Pages . . .">
          <div class="line"></div>
          <p class="head">Book Year :</p>
          <input type="text" id="book_yaer" name="book_year" require class="info" placeholder="Book Wrtitten date . . .">
          <div class="line"></div>
          <p class="head">Book Price :</p>
          <input type="number" id="book_price" name="book_price" class="info" placeholder="Book Price . . .">
          <div class="line"></div>
          <p class="head">Book Edition :</p>
          <input type="number" id="book_edition" name="book_edition" require class="info" placeholder="Book Edition . . .">
          <div class="line"></div>
          <p class="head">Book Language :</p>
          <input type="text" id="book_language" name="book_language" require class="info" placeholder="Book Language . . .">
          <div class="line"></div>
          <p class="head">Book Summary :</p>
          <textarea placeholder="Book summary..." onkeypress="auto_grow(this);" onkeyup="auto_grow(this);"></textarea>
          <!-- <input type="text" id="book_summary" name="book_summary" require class="info" placeholder="Book Sunmmary . . ."> -->
          <div class="line"></div>
          <p class="head">Author firstname :</p>
          <input type="text" id="author_fname" name="author_fname" require class="info" placeholder="Author firstname . . .">
          <div class="line"></div>
          <p class="head">Author lastname :</p>
          <input type="text" id="author_lname" name="author_lname" require class="info" placeholder="Author lastname . . .">
          <div class="line"></div>
          <p class="head">Interpeter firstname :</p>
          <input type="text" id="interpreter_fname" name="interpreter_fname" class="info" placeholder="Interpeter firstname . . .">
          <div class="line"></div>
          <p class="head">Interpeter lastname :</p>
          <input type="text" id="interpreter_lname" name="interpreter_lname" class="info" placeholder="Interpeter lastname . . .">
          <div class="line"></div>
          <div class="line"></div>
          <div class="headd">
            <p class="head">Image :</p>
          <input type="file" id="image-upload" name="image-upload" accept="image/*" multiple>
          </div>
        </form>
        </div>
        <input id="save" type="submit" value="add">
      </div>
      
    </div>
  </div>
  <input type="button" id="delete" value="delete hotel" style="display: none;" onclick="document.getElementById('all').style.display='';document.getElementById('booked').style.display=''";>
  <div id="all" style="display: none;">
    <div id="bgall"></div>
    <div id="all2">
      <div id="booked" class="bgWhiteAll" style="display: none;">
        <p style="text-align: center;">Are you sure you want to delete this hotel?</p>
        <input type="button" value="Back" id="backall" class="backall" onclick="document.getElementById('all').style.display='none';">
        <input type="button" value="Confirm" id="confirmall" class="confirmall" onclick="clickDelete()">
      </div>
      <div id="upload" class="bgWhiteAll" style="display: none;">
        <p style="text-align: center;">uploading Image</p>
        <br>
        <p style="text-align: center;" id="upload1">0/0</p>
        <p style="text-align: center;" id="upload2">0%</p>
      </div>
      <div id="finish" class="bgWhiteAll" style="display: none;">
        <p style="text-align: center;" id="finish1">Add hotel complete</p>
        <input type="button" value="Back" class="backall" onclick="window.history.back();">
        <input type="button" value="Add more" class="confirmall" onclick="window.location.reload();">
      </div>
    </div>
  </div>
  <script type="text/javascript">
      function auto_grow(element){
        element.style.height = "5px";
        element.style.height = (element.scrollHeight)+"px";
      }
   
  </script>

</body>

</html>
<style>
  #yellowbox {
    position: absolute;
    width: 845px;
    height: max-content;
    left: 210px;
    top: 200px;

    background: #FFEB85;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    border-radius: 15px;
  }

  #whitebox {
    position: relative;
    width: 94%;
    height: 94%;
    background: #FFFFFF;
    border-radius: 10px;
    font-family: 'Inria Sans';
    font-style: normal;
    font-weight: 300;
    font-size: 24px;
    line-height: 29px;
    color: #1a3244;
    margin: 3%;

  }

  #whitebox .info {
    word-wrap: break-word;
    word-break: break-word;
    width: 500px;
    position: absolute;
    right: 0px;
    text-align: right;
    right: 30px;
    margin-top: 30px;
    font-size: 18px;
    border: none;
    background-color: rgb(218, 217, 217);
  }

  #whitebox .head {
    position: relative;
    font-size: 20px;
    padding-left: 30px;
    display: inline-block;
    top: 1px;
  }

  #addRatePriceButton {
    position: relative;
    border: none;
    height: 40px;
    width: 40px;
    background-color: rgb(155, 255, 4);
    color: white;
    font-size: 35px;
  }

  #removeRatePriceButton {
    position: relative;
    border: none;
    height: 40px;
    width: 40px;
    background-color: rgb(255, 24, 24);
    color: white;
    font-size: 35px;
  }

  .ratePriceZone {
    position: relative;
    display: inline-block;
    border: 0px;
    background-color: rgb(218, 217, 217);
    font-family: 'Inria Sans';
    font-style: normal;
    font-weight: 300;
    font-size: 24px;
    line-height: 29px;
    color: #1a3244;
    left: 300px;
  }

  .ratePriceZoneText1 {
    position: relative;
    left: 300px;
    display: inline-block;
  }

  .ratePriceZoneText2 {
    position: absolute;
    right: 30px;
    display: inline-block;
  }
</style>