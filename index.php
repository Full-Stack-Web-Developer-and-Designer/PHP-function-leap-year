<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Is this a leap year?</title>
  	<style type="text/css">
    body {
    	margin: 0;
    	padding: 0;
      background: #0648a0;
    }
    #main-content {
      margin: 30px;
      text-align: center;
      color: #FFF;
    }
    #main-content h1 {
      font: 40px Arial, Helvetica, sans-serif;
    }
    #main-content p {
      font: 24px "Times New Roman", Times, Georgia, serif;
    }
    input[type="text"] {
      outline: none;
    }
    input[type="text"][value] {
        color: #0B60D4;
    }
    input[type="submit"] {
        color: #0648a0;
        cursor: pointer;
    }
    input[type="submit"]:hover{
        color: #043981;
    }
    input[type="submit"]:active{
        color: #032B62;
    }
  	</style>
  </head>
  <body>
    <div id="main-content">
      <h1>Is this a leap year?</h1>
      
      <p>
        <?php date_default_timezone_set("Europe/Sarajevo"); ?>

        <?php
        function is_leap_year($year) {
          if($year % 4 > 0) {
            return false;    // 2023
          } elseif($year % 100 > 0) {
            return true;     // 1988
          } elseif($year % 400 > 0) {
            return false;    // 2200
          } else {
            return true;     // 2400
          }
        }
          
        if(isset($_GET["year"])) {
          $year = intval($_GET["year"]);
        } else {
          $year = date('Y');          
        }
        
        if(is_leap_year($year)) {
          echo "Yes, {$year} is a leap year.";
        } else {
          echo "No, {$year} is not a leap year.";
        }
        ?>
      </p>
      
      <form action="" method="get">
        Enter a year to find out if it is a leap year:<br />
        <input type="text" name="year" value="<?php echo $year; ?>" /><br>
        <input type="submit" value="Submit" />
      </form>
      
    </div>
    
  </body>
</html>
