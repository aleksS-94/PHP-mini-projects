<!DOCTYPE html>

<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Mini Projects</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="css/cssWorldTraveller.css">
  <script src="https://kit.fontawesome.com/faba497495.js" crossorigin="anonymous"></script>
</head>

<body>

  <div class="buttonContainer">
    <div class="mobileTitle">PHP Mini Projects</div>
    <!-- Button trigger modal -->
    <button id="btn1" type="button" class="animate__animated  buttonClass" data-bs-toggle="modal" data-bs-target="#projectOne">
      Variables project
    </button>

    <!-- Button trigger modal -->
    <button id="btn2" type="button" class="purple animate__animated buttonClass" data-bs-toggle="modal" data-bs-target="#projectTwo">
      User-defined functions
    </button>

    <!-- Button trigger modal -->
    <button id="btn3" type="button" class="purple animate__animated buttonClass" data-bs-toggle="modal" data-bs-target="#projectThree">
      Internal functions
    </button>

    <!-- Button trigger modal -->
    <button id="btn4" type="button" class="purple animate__animated buttonClass" data-bs-toggle="modal" data-bs-target="#projectFour">
      Ordered and associative arrays
    </button>

    <!-- Button trigger modal -->
    <button id="btn5" type="button" class="purple animate__animated buttonClass" data-bs-toggle="modal" data-bs-target="#projectFive">
      HTML form handling
    </button>

    <!-- Button trigger modal -->
    <button id="btn6" type="button" class="purple animate__animated buttonClass" data-bs-toggle="modal" data-bs-target="#projectSix">
      Loops
    </button>

    <!-- Button trigger modal -->
    <button id="btn7" type="button" class="purple animate__animated buttonClass" data-bs-toggle="modal" data-bs-target="#projectSeven">
      Loops in HTML
    </button>

    <!-- Button trigger modal -->
    <button id="btn8" type="button" class="purple animate__animated buttonClass" data-bs-toggle="modal" data-bs-target="#projectEight">
      PHP form validation
    </button>

    <!-- Button trigger modal -->
    <button id="btn9" type="button" class="purple animate__animated buttonClass" data-bs-toggle="modal" data-bs-target="#projectNine">Object-Oriented Programming</button>

  </div>

  <!----------------------------------------------------------------------------Project One----------------------------------------------------------------->


  <!-- Modal Project One -->
  <div class="modal fade" id="projectOne" tabindex="-1" aria-labelledby="projectOne" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="projectOne">PHP variables project</h5>
        </div>
        <div class="modal-description">
          <h6>Project demonstrating the use of variables, shorthand multiplications and other math operations,
            as well as the round() and the number_format() functions.</h6>
        </div>
        <div class="modal-body">

          <?php
          // variables with numerical data type, the integers, to represent original amounts, in four different currencies, before conversion to US dollars
          $riel_original = number_format(2103942);
          $kyat_original = number_format(19092);
          $krones_original = number_format(109);
          $lek_original = number_format(9094);

          echo "<div class='page'>
          <div class='currencyContainer'>
          <h4 class='currencyTitle'>Our trip ended with four different currencies</h4>
          <p class ='currency'>$riel_original RIEL from Cambodia</p>
          <p class='currency'>$kyat_original KYAT from Myanmar</p>
          <p class='currency'>$krones_original KRONES from Norway</p>
          <p class='currency'>$lek_original LEK from Albania</p>
          <p class='currency'>We need to exchange these for US dollars</p></div>";

          $riel = 2103942;
          $kyat = 19092;
          $krones = 109;
          $lek = 9094;

          /* a set of variables representing floating numbers. Decimal points were provided for accuracy as they represent exchange rates */
          $riel_to_usd = 0.00025;
          $kyat_to_usd = 0.00056;
          $krones_to_usd = 0.11;
          $lek_to_usd = 0.0089;


          /* 
          Shorthand multiplications to get the result figure (the amount of USD that the original currencies were exchanged for).
          The round function has been invoked with two arguments in the parenthesis (), one is the floating number and the other is the amount of decimal places.

          For clarity, the first variable is the exchange rate $riel_to_usd - the second variable in the function is the same ($riel_to_usd, 2) - the number in the function is
          the amount of decimal places to display. 

          Therefore, the result will be displayed as xxxx.xx in HTML */

          $riel_to_usd *= $riel;
          $riel_to_usd = round($riel_to_usd, 2);

          $kyat_to_usd *= $kyat;
          $kyat_to_usd = round($kyat_to_usd, 2);

          $krones_to_usd *= $krones;
          $krones_to_usd = round($krones_to_usd, 2);

          $lek_to_usd *= $lek;
          $lek_to_usd = round($lek_to_usd, 2);

          /* variable that represents a fee for each conversion */
          $conversion_fee = 1;

          /* calculated final amount of usd, after conversion fees  */
          $final_amount = ($riel_to_usd - $conversion_fee) + ($kyat_to_usd - $conversion_fee) + ($krones_to_usd - $conversion_fee) + ($lek_to_usd - $conversion_fee);


          echo "<table class='currencyTable'>    
    <tr>
      <th></th>
      <th>RIEL</th>
      <th>KYAT</th>
      <th>KRONES</th>
      <th>LEK</th>
    </tr>
    <tr>
    <td>Remaining amounts</td>
    <td>$riel_original</td>
    <td>$kyat_original</td>
    <td>$krones_original</td>
    <td>$lek_original</td>
  </tr>
  <tr>
  <td>USD</td>
  <td>$riel_to_usd</td>
  <td>$kyat_to_usd</td>
  <td>$krones_to_usd</td>
  <td>$lek_to_usd</td>
</tr>
</table>
";

          echo "<p class='conversion'>$riel_original RIEL has been exchanged for $riel_to_usd USD.</p>";

          echo "<p class='conversion'>$kyat_original KYAT has been exchanged for $kyat_to_usd USD.</p>";

          echo "<p class='conversion'>$krones_original KRONES has been exchanged for $krones_to_usd USD.<p>";

          echo "<p class='conversion'>$lek_original LEK has been exchanged for $lek_to_usd USD.</p>";

          echo "<h4 class='currencyTitle'>Total amount of USD after conversion fees: $final_amount USD.</h4></div>";
          ?>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




  <!----------------------------------------------------------------------------Project Two----------------------------------------------------------------->



  <!-- Modal -->
  <div class="modal fade" id="projectTwo" tabindex="-1" aria-labelledby="projectTwo" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="projectTwo">User-defined functions</h5>
        </div>
        <div class="modal-description">
          <h6>This project's "fill-in-the-blank" story has been generated via invocation of function that contained 15 unique arguments (blanks).
            Some of the values assigned to these arguments were not formatted correctly.
            To rectify these errors I used built-in functions such as ucfirst() and str_replace().</h6>
        </div>
        <div class="modal-body">

          <?php

          /*This project utilizes user-defined functions to fill in blanks in the story. 
            The built-in string functions were also applied to correct capitalization, white spaces and other errors */


          /*Function generateStory() with 15 input parameters*/

          function generateStory(
            $number,
            $color,
            $noun_1,
            $noun_2,
            $adj_1,
            $adj_2,
            $noun_3,
            $noun_4,
            $noun_5,
            $verb_past_tense_first,
            $verb,
            $noun_6,
            $verb_past_tense_second,
            $body_part,
            $planet_name
          ) {

            /* A variable $story, which has our story assigned to it as its value  */
            $story = "<div class= 'page2'><div class='storyContainer'><p class = 'story'><b>\nWelcome to the year 30${number}.</b><br><br>It was my first day as <b>Intergalactic Space 
            Sheriff</b>, so I decided to patrol planet '${color}'.<br><br>I jumped into my space ${noun_1},
            turned on the antigravity ${noun_2}, and traveled at ${adj_1} speed toward the planet.<br><br> When I stepped onto the ${adj_2} surface, I came face-to-face with an
           alien. He was the size of a ${noun_3}.<br><br><b><i>'${noun_4}'</i></b>, I said to him, the galactic word for
           <b><i>'hello'</i></b>. But the alien didn’t respond.<br><br> Instead he pulled out his laser ${noun_5}, ${verb_past_tense_first} my vehicle,
           then tried to ${verb} me.<br><br>Quickly I activated my defense ${noun_6}. The laser beam ${verb_past_tense_second} off it and hit the alien on the ${body_part}.<br><br>
            Exhausted, I teleported back to the space station near ${planet_name}.<br><br> This job is going to be tougher than I thought...\n</p></div></div>";

            return $story;
          }

          $number = 66;

          //Using the ucfirst() function to convert the first character of a string to uppercase as to represent the name of the planet
          $green = "green";
          $green = ucfirst($green);

          $noun_1 = "car";

          //Application of the str_replace() function to remove white spaces between characters
          $noun2 = "d e v i c e";
          $noun2 = str_replace(' ', '',  $noun2);

          $adj_1 = "fast";
          $adj_2 = "gooey";
          $noun_3 = "human";
          $noun_4 = "fool";
          $noun_4 = ucfirst($noun_4);
          $noun_5 = "gun";
          $verb_past_tense_first = "burned";
          $verb = "eat";
          $noun_6 = "door";
          $verb_past_tense_second = "bounced";
          $body_part = "arm";

          // Capitalising the first letter of the word, using the ucfirst() function, as it represents the name of the planet
          $planet_name = "mars";
          $planet_name = ucfirst($planet_name);

          //The invocation of generateStory() with 15 unique inputs
          echo generateStory($number, $green, $noun_1, $noun2, $adj_1, $adj_2, $noun_3, $noun_4, $noun_5, $verb_past_tense_first, $verb, $noun_6, $verb_past_tense_second, $body_part, $planet_name);


          ?>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



  <!----------------------------------------------------------------------------Project Three----------------------------------------------------------------->


  <!-- Modal Project Two -->
  <div class="modal fade" id="projectThree" tabindex="-1" aria-labelledby="projectThree" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="projectThree">Internal functions</h5>
        </div>
        <div class="modal-description">
          <h6>
            Each step of this project provides a math operation that has been completed using built-in PHP functions,
            such as octdec(), deg2rad(), cos(), round() and others.</h6>
        </div>
        <div class="modal-body">


          <?php

          /*Each step of the project provides a math operation that has been completed using built-in PHP functions. 
          The result of each operation has been stored in a new variable. */

          echo "<div class='page3'>";

          echo "<p><b><span class='firstHeading3'>Let's do some math!<br><br></b></span></p>";
          echo "<p class='underHeading'>Displayed here integer values are results of particluar math operations. Click on each to learn more.</p><br><br>";



          /* The $initial value represents an octal string. It has been converted to a decimal number using octdec() */

          $initial = '555';
          echo "<details>
          
          <summary><b>$initial</b></summary>
           <p>The initial value represents an octal string.\n</p>
          </details>";

          $a = octdec($initial);
          echo "<details>
          <summary><b>$a</b></summary>
           <p>Using the octdec() function, the above value has now been converted to a decimal number.\n</p>
           </details>";

          /* The value of $a represents number of degrees. It has been converted to radians using deg2rad() */
          $b = deg2rad($a);
          echo "<details>
          <summary><b>$b</b></summary>
           <p>The initial value represented number of degrees. Now it has been converted to radians using deg2rad().\n</p>
           </details>";


          /* The new variable, $c, represents the cosine of $b. It has been calculated using cos() */
          $c = cos($b);
          echo "<details>
          <summary><b>$c</b></summary>
           <p>This value is a result of calculating the cosine of the previous number. I used cos () function to achieve this.\n</p>
           </details>";


          /* Here variable $c has been rounded to 3 decimal places, utilizing the round() function */
          $d = round($c, 3);
          echo "<details>
          <summary><b>$d</b></summary>
           <p>Using round() function I rounded the above value to 3 decimal places.\n</p>
           </details>";


          /* Here the natural logarithm of $d has been calculated, using log() function, and stored in a new variable */
          $e = log($d);
          echo "<details>
          <summary><b>$e</b></summary>
          <p>Using log() function, the natural logarithm of the previous number has now been calculated.\n</p>
          </details>";

          /* Using abs() function, the absolute value of $e has been taken */
          $f = abs($e);
          echo "<details>
          <summary><b>$f</b></summary>
          <p>This is the absolute value of the above logarithm number. It was calculated via abs() function.\n</p>
          </details>";

          /* The value of $g represents the result of the inverse (arc cosine) calculation of the $f variable */
          $g = acos($f);
          echo "<details>
          <summary><b>$g</b></summary>
          <p>The result of the arc cosine( acos() ) calculation of the previous value. It represents number in radians.\n</p>
          </details>";


          /* $g represents number in radians. Using rad2deg() it has been converted to a number of degrees */
          $h = rad2deg($g);
          echo "<details>
          <summary><b>$h</b></summary>
          <p>Using rad2deg(), the above value has been converted to a number of degrees.\n</p>
          </details>";


          /* Here the floor() function has been applied to round down $h to the nearest integer */
          $i = floor($h);
          echo "<details>
          <summary><b>$i</b></summary>
          <p>The floor() function has been applied to the above value, to round it down to the nearest integer. \n</p>
          </details>";


          /* To arrive at the solution, $j, 47 has been subtracted from $i */
          $j = $i - 47;
          echo "<details>
          <summary><b>$j</b></summary>
           <p>The final value has been achieved as a result of subtraction from the previous number.\n</p>
           </details>

         </div>";

          ?>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



  <!----------------------------------------------------------------------------Project Four----------------------------------------------------------------->



  <!-- Modal Project Four -->
  <div class="modal fade" id="projectFour" tabindex="-1" aria-labelledby="projectFour" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="projectFour">Ordered and associative arrays</h5>
        </div>
        <div class="modal-description">
          <h6>
            Project exploring the use of ordered and associative arrays, number_format and round functions
            as well as multiple math operations in PHP.</h6>
        </div>
        <div class="modal-body">

          <div class="page4">

            <?php

            /*This project's main objective is to explore the correct use of ordered and associative arrays. 
The project represents a calculation of Bob's annual salary, after taxes and other expenses.*/

            echo "<p class='animate__animated prfourheading'>This project represents a calculation of Bob's annual salary, after taxes and other expenses.</p>";
            ?>

            <p class="mobile">Tap on description to reveal the comments</p>

            <?php

            /* Associative array containing Bob's annual expenses. The array's keys are "vacations" and "carRepairs"
and their corresponding values are 1000 and 1000 */
            $annualExpenses = [
              "vacations" => 1000,
              "carRepairs" => 1000,
            ];

            // Associative array containing Bob's monthly expenses
            $monthlyExpenses = [
              "rent" => 1500,
              "utilities" => 200,
              "healthInsurance" => 200
            ];

            // Variable containing the value of Bob's gross salary, before taxes
            $grossSalary = 48150;


            // Variable representing social security tax that is a percentage of Bob's total salary
            $socialSecurity = $grossSalary * .062;



            /* Where Bob lives, there is a progressive tax system. He pays 12% (keeps 88%) on the first 9,700, 
22% (keeps 78%) on the next 29,775, and pays 24% (keeps 76%) on the remainder of his salary.

$incomeSegments is an array that contains an array for each income segment with the amount being 
taxed and the percent that he gets to keep. */
            $incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];



            /* I used $incomeSegments to calculate Bob’s $netIncome after the set of taxes.
The result value is the sum of the products of each portion of the taxes. The first portion was 8,536 (9,700 * 0.88). */
            $netIncome = ($incomeSegments[0][0] * $incomeSegments[0][1]) + ($incomeSegments[1][0] * $incomeSegments[1][1]) + ($incomeSegments[2][0] * $incomeSegments[2][1]);

            /* To calculate net earnings, $socialSecurity was subtracted from $netIncome. 
The result of this calculation has been stored in $annualIncome, to represent the yearly profit after taxes */
            $netIncome -= $socialSecurity;
            $annualIncome = $netIncome;
            $annualIncomeRounded = number_format($annualIncome);
            ?>

            <div class="accordion accordionProjectFour" id="accordionExampleProjectFour">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed d-block text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <?= "<p class='incomeString'>Annual income before deducting annual expenses:<span class='incomeValue'><b>\n£$annualIncomeRounded\n</b></span></p>"; ?>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="comment">To calculate Bob's net earnings, I subtracted his social security tax from his yearly income. The values of both tax and yearly income were stored in variables and the result
                      of this subtraction has been stored in $annualIncome variable, to represent his yearly profit after taxes.</p>
                  </div>
                </div>
              </div>

              <?php
              // Here I subtracted the values, stored in each of the keys in $annualExpenses("vacations" and "carRepairs"), from $annualIncome                 
              $annualIncome -= $annualExpenses["vacations"];
              $annualIncome -= $annualExpenses["carRepairs"];
              $annualIncomeAfter = number_format($annualIncome);
              ?>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button d-block text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                    <?= "<p class='incomeString'>\nAnnual income after deduction of annual expenses:<span class='incomeValue'><b>\n£$annualIncomeAfter\n</b></span></p>"; ?>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="comment">In this instance, Bob's annual expenses have been stored in an associative array. The array's keys such as "vacations" and "carRepairs"
                      were assigned to their corresponding values. I subtracted the values, stored in each of the keys in the array, from the annual income.</p>
                  </div>
                </div>
              </div>

              <?php
              // $annualIncome has been divided by 12 to calculate the amount of profit per month
              $monthlyIncome = $annualIncome / 12;
              $monthlyIncomeBefore = number_format($monthlyIncome);
              ?>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button d-block text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <?= "<p class='incomeString'>\nMonthly income before deducting monthly expenses:<span class='incomeValue'><b>\n£$monthlyIncomeBefore\n</b></span></p>"; ?>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="comment">Annual income has been divided by 12 to calculate the amount of profit per month. The result was stored in variable and the number_format function was applied to it.</p>
                  </div>
                </div>
              </div>

              <?php
              // Bob had three monthly expenses. I deducted these from $monthlyIncome 
              $monthlyIncome -= $monthlyExpenses["rent"];
              $monthlyIncome -= $monthlyExpenses["utilities"];
              $monthlyIncome -= $monthlyExpenses["healthInsurance"];
              $monthlyIncomeAfter = number_format($monthlyIncome);
              ?>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button d-block text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <?= "<p class='incomeString'>\nMonthly income after calculation:<span class='incomeValue'><b>\n£$monthlyIncomeAfter \n</b></span></p>"; ?>
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="comment">Bob's monthly expenses were stored in an associative array. The array's keys such as "rent", "utilities" and "health insurance"
                      were assigned to their corresponding values. I deducted the values, stored in each of the keys, from the monthly income.</p>
                  </div>
                </div>
              </div>

              <?php
              // Assuming an average of 4.33 weeks in a month, Bob's $weeklyIncome has been calculated from $monthlyIncome
              $weeklyIncome = $monthlyIncome / 4.33;
              $weeklyIncomeRounded = round($weeklyIncome, 2);
              $weeklyIncomeBefore = number_format($weeklyIncome);
              ?>


              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                  <button class="accordion-button d-block text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    <?= "<p class='incomeString'>\nWeekly income before deduction of weekly expenses:<span class='incomeValue'><b>\n£$weeklyIncomeBefore\n</b></span></p>"; ?>
                  </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="comment">Assuming there are an average of 4.33 weeks in a month, Bob's weekly income has been calculated by dividing his monthly income by 4.33. The resulting figure has been rounded to 2 decimal
                      places (round ()) and number_format function has been applied to it.</p>
                  </div>
                </div>
              </div>

              <?php
              // An associative array containing Bob's weekly expenses
              $weeklyExpenses = [
                "gas" => 25,
                "food" => 90,
                "entertainment" => 47

              ];

              /*The values of weekly expenses have been subtracted from $weeklyIncome. 
$weeklyIncomeAfter represents the amount that Bob is able to save each week, after taxes and expenses*/
              $weeklyIncome -= $weeklyExpenses["gas"];
              $weeklyIncome -= $weeklyExpenses["food"];
              $weeklyIncome -= $weeklyExpenses["entertainment"];
              $weeklyIncomeAfter = number_format($weeklyIncome);
              ?>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSix">
                  <button class="accordion-button d-block text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    <?= "<p class='incomeString'>\nWeekly income after calculation:<span class='incomeValue'><b>\n£$weeklyIncomeAfter\n</b></span></p>"; ?>
                  </button>
                </h2>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="comment">Bob's weekly expenses have been stored inside an associative array, with keys such as "gas", "food" and "entertainment" being assigned to their corresponding values.
                      The values of weekly expenses have been subtracted from Bob's weekly income and stored in a new variable, which represents the amount that Bob is able to save each week,
                      after taxes and expenses.</p>
                  </div>
                </div>
              </div>

              <?php
              /* To determine how much he can save for the year I multiplied $weeklyIncome by 52 (no of weeks in a year) */
              $yearlySavings = $weeklyIncome * 52;
              $yearlySavingsAfter = number_format($yearlySavings);
              ?>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingSeven">
                  <button class="accordion-button d-block text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    <?= "<p class='incomeString'>\nYearly savings calculated from the weekly income:<span class='incomeValue'><b>\n£$yearlySavingsAfter</b></span></p>"; ?>
                  </button>
                </h2>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="comment">To determine how much Bob can save for the year I multiplied his weekly income by 52 (number of weeks in a year). The resulting figure was formatted via number_format function.</p>
                  </div>
                </div>
              </div>

            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!----------------------------------------------------------------------------Project Five----------------------------------------------------------------->



  <!-- Modal Project Five -->
  <div class="modal fade" id="projectFive" tabindex="-1" aria-labelledby="projectFive" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="projectFive">HTML form handling in PHP</h5>
        </div>
        <div class="modal-description">
          <h6> Project utilizing HTML forms in PHP.</h6>
          <h6> Each of the forms has their own back-end php file that processes the contents of the forms utilizing the $_GET superglobal.</h6>
        </div>
        <div class="modal-body">




          <!-- This project's objective was to apply HTML forms in PHP to create a name form and calculator. The calculator was designed to do the addition and division of two integer numbers.
               I have also created three back-end files: name.php, addition.php and division.php, to ensure that each of the forms gets submitted to the correct php file.  -->


          <div class="page5">


            <center>
              <hr class="lineBreakTop">
              <h3 class="formName"><i>Name form</i></h3>
              <hr class="lineBreakBottom">
            </center>

            <h4 class="formHeading">Introduce yourself</h4>

            <form id="nameForm" class="form" method="get" action="php/name.php">
              <p><b><span class="inputName">First name</span></b> <input type="text" name="first_name" required></p>
              <br>
              <p><b><span class="inputName">Last name</span></b> <input type="text" name="last_name" required></p><br><br>
              <button class="button" type="submit">Say hi</button><br>
            </form>

            <center>
              <hr class="lineBreakTop">
              <h3 class="formName"><i>Calculator</i></h3>
              <hr class="lineBreakBottom">
            </center>

            <h4 class="formHeading">Addition:</h4>

            <form class="form" method="get" action="php/addition.php">
              <p class="calcOne"><b><span class="inputName">First number</span></b> <input type="number" name="add_first" required></p><br>
              <p class="calcTwo"><b><span class="inputName">Second number</span></b> <input type="number" name="add_second" required></p><br><br>
              <button class="button" type="submit">Add</button><br>
            </form>


            <h4 class="formHeading">Division:</h4>

            <form class="form" method="get" action="php/division.php">
              <p class="calcOne"><b><span class="inputName">First number</span></b> <input type="number" name="div_first" required></p><br>
              <p class="calcTwo"><b><span class="inputName">Second number</span></b> <input type="number" name="div_second" required></p><br><br>
              <button class="button" type="submit">Divide</button><br><br>
            </form><br>


            <a href="https://aleksandra.click/php/">Reset</a></p>

          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




  <!----------------------------------------------------------------------------Project Six----------------------------------------------------------------->



  <!-- Modal Project Six -->
  <div class="modal fade" id="projectSix" tabindex="-1" aria-labelledby="projectSix" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="projectSix">PHP loops</h5>
        </div>
        <div class="modal-description">
          <h6>Project demonstrating the use of loops, if/else statements and the modulo operator.</h6>
          <h6>The code has been repeated 3 times to introduce new conditions to the same output.</h6>
        </div>
        <div class="modal-body">




          <!-- Project demonstarting the use of loops in PHP -->


          <div class="page6">


            <h4>Welcome to my <b class="fizzHeading">FizzBuzz</b> game!</h4>

            <h6 class="fizzText">Below you'll see the numbers from 1 to 100: </h6>

            <h6 class="fizzDescription">* numbers that are multiples of 3 have been replaced with "Fizz",<br><br>
              * numbers that are multiples of 5 have been replaced with "Buzz"<br><br>
              * and numbers that are multiples of both 3 and 5 have been replaced with "<b class="fizzBuzz">FizzBuzz</b>".</h6>


            <center>
              <hr>
            </center>


            <?php

            /* The code below prints the numbers from 1 to 100 (inclusive), except for these cases:
            - If a number is a multiple of 3, it prints "Fizz".
            - If a number is a multiple of 5, it prints "Buzz".
            - If a number is a multiple of both 3 and 5, it prints "FizzBuzz" */


            /* The $counter variable has been created to keep track of the number and print it to the screen on each iteration. 
          I used a 'while' loop to count from 1 to 100.
          The if, elseif and else statements have been introduced to determine what to print at each iteration. 
          The modulo operator has been used to check if a number is divisible by another. */
            ?>

            <div class="counter">
              <?php $counter = 1;
              while ($counter <= 100) {

                if ($counter % 15 === 0) {
                  echo "<b class='fizzBuzz'>FizzBuzz</b>";
                } elseif ($counter % 3 === 0) {
                  echo "Fizz";
                } elseif ($counter % 5 === 0) {
                  echo "Buzz";
                } else {
                  echo $counter;
                }
                echo "\n";
                $counter++;
              }
              ?>
            </div>


            <div class="accordion accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed d-block text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Comment
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="comment">To achieve this effect a 'while' loop, that counts from 1 to 100, has been introduced, along with the if, elseif and else statements, inside the loop,
                      that determine what to print at each iteration. The loop has been incremented at the end. To check if a number is divisible by another, the modulo operator has been applied.</p>
                  </div>
                </div>
              </div>

              <center>
                <hr>
              </center>

              <?php

              /* Instead of printing the statements at each step, there were queued up into an array and printed all at the end.
            I began by creating an empty array $output to store the statements in.
            The 'for' loop was added to count from 1 to 100. I use $i as the loop counter variable.*/
              ?>


              <div class="counter">
                <?php $output = [];
                for ($i = 1; $i <= 100; $i++) {
                  if ($i % 15 === 0) {
                    array_push($output, "<b class='fizzBuzz'>FizzBuzz</b>");
                  } elseif ($i % 3 === 0) {
                    array_push($output, "Fizz");
                  } elseif ($i % 5 === 0) {
                    array_push($output, "Buzz");
                  } else {
                    array_push($output, $i);
                  }
                }
                // I created a 'foreach' loop that iterates through $output array. The $value has been used for the variable at each position in the array.
                foreach ($output as $value) {
                  echo $value . "\n";
                }
                ?>
              </div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button d-block text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Comment
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="comment">In this instance, the statements were included inside an array and printed all at the end. Initially, an empty array has been created to store the statements in
                      and the 'for' loop was added to count from 1 to 100. The 'foreach' loop iterates through the array and prints the values to the screen.</p>
                  </div>
                </div>
              </div>


              <center>
                <hr>
              </center>

              <?php

              /* A copy of the previous foreach loop that iterates over $output. Introduced to re-print the same output with new conditions.
               The if/else and continue/break statements were introduced to avoid printing anything when the $value is "Fizz" */
              ?>

              <div class="counter">
                <?php foreach ($output as $value) {
                  if ($value === "Fizz") {
                    continue;
                  }
                  // The elseif statement that prints the $value and exits from the loop
                  elseif ($value === "fizzBuzz") {
                    echo $value;
                    break;
                  }
                  echo $value . "\n";
                }
                ?>
              </div>


              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button d-block text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Comment
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="comment">This example utilized previously introduced 'foreach' loop that iterates over an array. It was applied to re-print the same output with new conditions.
                      This time, the 'if' and 'continue' statements have been introduced to avoid printing anything when the value is "Fizz".</p>
                  </div>
                </div>
              </div>

            </div>

            <center>
              <hr>
            </center>

          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>




  <!----------------------------------------------------------------------------Project Seven----------------------------------------------------------------->



  <!-- Modal Project Seven -->
  <div class="modal fade" id="projectSeven" tabindex="-1" aria-labelledby="projectSeven" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="projectSeven">PHP loops in HTML</h5>
        </div>
        <div class="modal-description">
          <h6>This project demonstrates the use of shorthand syntax loops, along with associative arrays and the count() function.
          </h6>
        </div>
        <div class="modal-body">


          <div class="page7">

            <h2 class="animate__animated welcome"><i>Repetitive Cafe</i></h2>

            <p class="mobile7">Tap on each heading to reveal the comments</p>

            <center>
              <hr>
            </center>

            <div class="accordion accordionProjectSeven" id="accordionExampleProjectSeven">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed d-block text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    <h3 class="cafe">Menu</h3>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExampleProjectSeven">
                  <div class="accordion-body">
                    <p class="comment">I began by creating three different associative arrays, each representing specific items on the menu: drinks, pastries or sandwiches.
                      Names and prices of the items were contained within, as keys and their corresponding values.</p>
                  </div>
                </div>
              </div>

              <center>
                <hr>
              </center>

              <?php

              // The names and prices of the items were stored in PHP and embeded into HTML to be displayed.

              /*Three different arrays representing names and prices for drinks, pastries and sandwiches. 
                All stored inside seperate variables. */
              $drinks = [
                "Coffee" => "2.50",
                "Tea" => "2.00",
                "Latte" => 2.99,
                "Mocha" => 3.99
              ];
              $pastries = [
                "Croissant",
                "Muffin",
                "Apple pie",
                "Cupcake",
                "Brownie"
              ];
              $sandwiches = [
                "Steak and cheese" => "3.70",
                "Meatball marinara" => "3.50",
                "Tuna" => 2.99,
                "Veggie" => 2.99
              ];

              ?>


              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button d-block text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <h3 class="cafe">Drinks</h3>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExampleProjectSeven">
                  <div class="accordion-body">
                    <p class="comment">To access the names and prices of drinks I used the 'foreach' loop with the shorthand syntax. The loop iterates over the items in the array containing drinks, providing access to its keys and values.</p>
                  </div>
                </div>
              </div>

              <!-- I used a 'foreach' loop with the shorthand syntax to iterate
 over the items in $drinks and provide access to the keys and values. -->
              <?php foreach ($drinks as $drink => $price) : ?>

                <!-- I added div element then re-entered PHP mode to print the name of the drink and the price -->
                <div class="menuItems"><?= "$drink: £$price" ?></div>
              <?php endforeach; ?>

              <center>
                <hr>
              </center>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button d-block text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h3 class="cafe">Pastries (£2 each)</h3>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExampleProjectSeven">
                  <div class="accordion-body">
                    <p class="comment">In this instance, to access elements within the array containing pastries, I used the 'for' loop. The loop had to continue while the loop counter was less than the number of items
                      in the pastries array and should cease when it was equal to the number of items in that array. To achieve this, I defined a variable, initialized to 0, and incremented it at each loop iteration.
                      The count() function has been used to stop iteration once the variable value was equal to the number of pastries.</p>
                  </div>
                </div>
              </div>


              <!-- The 'for' loop has been introduced to access elements within $pastries. 
    The loop had to continue while the loop counter was less than the number of items in $pastries. 
    The $i variable was initialized to 0 and incremented at each loop iteration. -->

              <?php for ($i = 0; $i < count($pastries); $i++) : ?>

                <!-- Within the div element, I used the $i variable to index into $pastries and print the name of each pastry. -->
                <div class="menuItems"><?= $pastries[$i] ?></div>
              <?php endfor; ?>

              <center>
                <hr>
              </center>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                  <button class="accordion-button d-block text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <h3 class="cafe">Sandwiches</h3>
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExampleProjectSeven">
                  <div class="accordion-body">
                    <p class="comment">Similarly to the first example, I used the 'foreach' loop with the shorthand syntax, to access the names and prices of sandwiches. The loop iterates over the items in the array, providing access to its keys and values.</p>
                  </div>
                </div>
              </div>

            </div>

            <?php foreach ($sandwiches as $sandwich => $price) : ?>
              <div class="menuItems"><?= "$sandwich: £$price" ?></div>
            <?php endforeach; ?>

          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!----------------------------------------------------------------------------Project Eight----------------------------------------------------------------->



  <!-- Modal Project Eight -->
  <div class="modal fade" id="projectEight" tabindex="-1" aria-labelledby="projectEight" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="projectEight">PHP form validation</h5>
        </div>
        <div class="modal-description">
          <h6>Project demonstrating php back-end validation and sanitization of data to verify HTML forms. </h6>
          <h6>Functions such as htmlspecialchars(), trim() and filter_var() have been applied,
            as well as associative arrays, if/else statements and other.</h6>
        </div>
        <div class="modal-body">

          <div class="page8">

            <?php

            $name = $email = $character = $birth_year = "";
            $nameErr = $emailErr = $characterErr = $birth_yearErr = "";

            date_default_timezone_set('UTC');


            // ------------

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

              if (empty($_POST["name"])) {
                $nameErr = "Name is required";
              } else {
                $name = test_input($_POST["name"]);
                //I perfomed a regular expression match to check if $name ocontains only letters and whitespace
                if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                  $nameErr = "Only letters and white space allowed";
                }
              }


              //--------------

              if (empty($_POST["character"])) {
                $characterErr = "Character is required";
              } else {
                $character = $_POST["character"];
              }

              //--------------


              if (empty($_POST["email"])) {
                $emailErr = "Email is required";
              } else {
                $email = test_input($_POST["email"]);
                /* To prevent users from entering email addresses that do not exist I used the filter_var() 
                  function to check if $email is an email address.*/
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format";
                }
              }

              //------------------

              if (empty($_POST["birth_year"])) {
                $birth_yearErr = "Birth year is required";
              } else {
                /* To limit the range of years that users can submit I set the minimum and maximum values to realistic years.
                To get the current year I used date("Y"). */
                $birth_year = test_input($_POST["birth_year"]);
                $minYear = (date("Y") - 110);
                $maxYear = (date("Y") - 6);

                if ($birth_year <= $minYear) {
                  $birth_yearErr = "Enter a year greater than $minYear";
                } else if ($birth_year >= $maxYear) {
                  $birth_yearErr = "Enter a year less than $maxYear";
                }
              }
            }

            //------------


            /* When testing the input data, the htmlspecialchars() function has been used to transform any HTML characters into HTML entities. 
                The trim() function was utilised to remove any leading or trailing whitespace from the input and the stripslashes() function to remove backslashes. */

            function test_input($data)
            {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
            ?>

            <div class="profile">Create your profie</div>


            <div id="boxes">

              <div id="columnOne">

                <form id="validateForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                  <input class="validateInput" type="text" name="name" placeholder="Name" value="">
                  <span class="error"><?php echo $nameErr; ?></span>

                  <input type="radio" name="character" value="wizard"> Wizard</input>
                  <input type="radio" name="character" value="mage"> Mage</input>
                  <input type="radio" name="character" value="orc"> Orc</input>
                  <span class="error"><?php echo $characterErr; ?></span>
                  <input class="validateInput" type="text" name="email" placeholder="Email" value="">
                  <span class="error"><?php echo $emailErr; ?></span>
                  <input class="validateInput" type="text" name="birth_year" placeholder="Birth Year" value="">
                  <span class="error"><?php echo $birth_yearErr; ?></span>

                  <button class="validateButton" type="submit" value="Sign up"> Submit </button>
                  <button class="validateButtonReset" type="reset"> Reset </button>
                </form>

                <div class="reload">Please re-enter the page to view your input</div>


              </div>



              <div id="columnTwo">
                <i class="fa-solid fa-user avatar"></i>
                <div class="avatarInfo">
                  Name: <?= $name; ?><br>
                  Character: <?= $character; ?><br>
                  Email: <?= $email; ?><br>
                  Birth year: <?= $birth_year; ?><br>
                </div>
              </div>

            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>





  <!----------------------------------------------------------------------------Project  Nine----------------------------------------------------------------->



  <!-- Modal Project Nine -->
  <div class="modal fade" id="projectNine" tabindex="-1" aria-labelledby="projectNine" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="projectNine">Object-Oriented Programming</h5>
        </div>
        <div class="modal-description">
          <h6>Project that provided practice for
            creating objects from classes as well as using public and static methods.</h6>
        </div>

        <div class="modal-body">


          <div class="page9">

            <h2 class="animate__animated animals"><i>Welcome to our animal farm!</i></h2>

            <h2 class="animals2"><i>Some animals have raised concerns about feeling cold...</i></h2>

            <h2 class="animals3"><i>so we dressed them in <span class="feature">pyjamas</span> :)</i></h2>

            <?php

            /*  In this project I will be creating some pyjamas for barnyard animals. 
              I begun with a creation of a helper class 'StringUtilities'. */

            class StringUtilities
            {

              /* All names are supposed to be entirely lowercase, except for the second letter. To achieve this, I built my own string function.
              A public method called 'secondCase' has been defined inside of 'StringUtilities'. This method should be static since I won’t be 
              instantiating StringUtilities and it is only used as a helper class.

              */
              public static function secondCase($string)
              {
                $string = strtolower($string);
                if (strlen($string) >= 2) {
                  $string[1] = strtoupper($string[1]);
                }
                return $string;
              }
            }

            /* A 'Pyjamas' class with 3 private properties: owner, fit and color. */
            class Pyjamas

            {
              private $owner, $fit, $color;
              //  A constructor class for Pyjamas has been added and defaults of my own choosing were provided for each argument
              function __construct(
                $owner = "unclaimed",
                $fit = "ok",
                $color = "white"
              )

              /* The passed-in values were assigned to their corresponding properties. I used 'secondCase' in the 'StringUtilities' helper class
                   to ensure that the owner property is properly formatted. */ {
                $this->owner = StringUtilities::secondCase($owner);
                $this->fit = $fit;
                $this->color = $color;
              }

              // A public 'describe' method has been added, which returns a string using the 3 properties, to tell us about the object
              public function describe()
              {
                return "$this->owner's $this->color pyjamas fit <span class='feature'>$this->fit</span>.";
              }

              // A public method 'setFit' which can be used to modify the fit of the pyjamas. Since 'fit' is a private property, I  made a setter.
              public function setFit($new_fit)
              {
                $this->fit = $new_fit;
              }
            }

            // Let's say some animals needed their pyjamas to have buttons. I created a new class 'ButtonablePyjamas' that inherits from 'Pyjamas'. 
            class ButtonablePyjamas extends Pyjamas

            // A new private property, 'button_state' was added to maintain the status of the buttons and was set to "unbuttoned"
            {
              private $button_state = "unbuttoned";

              // Within 'ButtonablePyjamas' the 'describe' method has been overridden to contain the message about the buttons
              public function describe()
              {
                return parent::describe() . " They also have buttons which are currently <span class='feature'>$this->button_state</span>.";
              }

              // A method 'toggleButtons' that flips the state of the buttons
              public function toggleButtons()
              {
                if ($this->button_state === "unbuttoned") {
                  $this->button_state = "buttoned";
                } else {
                  $this->button_state = "unbuttoned";
                }
              }
            }


            // An instance of the Pyjamas class for “CHICKEN”, assigned to the variable chicken_PJs
            $chicken_PJs = new Pyjamas("Chicken", "loose", "blue");
            ?>
            <div class="chicken"><?= $chicken_PJs->describe() . "\n"; ?></div>

            <!-- The 'setFit' method has been tested by tightening up chicken’s PJs -->
            <div class="chicken"><?= "after eating too much grains...."; ?></div>
            <?= $chicken_PJs->setFit("tight");
            echo "\n"; ?>
            <div class="chicken"><?= $chicken_PJs->describe() . "\n"; ?></div>



            <div class="accordion accordion" id="accordionExample">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                  <button class="accordion-button collapsed d-block text-center" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Comment<br>
                    <p class="tap">(Tap)</p>
                  </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="comment">This is an instance of the 'Pyjamas' class for “Chicken”.
                      <br>
                      A public static method, that sits inside of
                      the helper class, has been defined, utilizing 'strtolower', 'strtoupper' and an 'if' statement, to transform the second character of a name into uppercase.
                      <br>
                      To describe the object, a public method 'describe' has been applied that returns a string using the 3 properties (owner, fit and colour).
                      <br>
                      On the last line the fit of the pyjamas was modified by using a setter, since previously defined 'fit' property was set to private.
                    </p>
                  </div>
                </div>
              </div>

              <!-- An instance of 'ButtonablePyjamas' with the owner "sheep" , saved to the variable $sheep_PJs. 
            The 'describe' method has been applied to ensure that it prints that the pajamas are unbuttoned. -->

              <?php $sheep_PJs = new ButtonablePyjamas("Sheep", "good", "green"); ?>
              <div class="sheepTop"><?= $sheep_PJs->describe() . "\n"; ?></div>

              <div class="sheep">(sHeep buttons their PJs...)</div>

              <!-- The 'toggleButtons' method has been applied. Since the pajamas started unbuttoned, the following code should button the pajamas -->
              <?= $sheep_PJs->toggleButtons() . "\n"; ?>

              <div class="sheepBottom"><?= $sheep_PJs->describe() . "\n"; ?></div>

              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button d-block text-center collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Comment
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p class="comment">An instance of 'ButtonablePyjamas' class that inherits from the initial 'Pyjamas', with the owner "sheep".
                      <br>
                      Inside of this class a private property, called 'button_state', was added to maintain the status of the buttons. It was set to "unbuttoned.
                      <br>
                      Within 'ButtonablePyjamas' the 'describe' method has been overridden to contain the message about the buttons.
                      <br>
                      Lastly, a method 'toggleButtons' has been introduced to flip the state of the buttons.
                    </p>
                  </div>
                </div>
              </div>


            </div>
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>





  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.bundle.js"></script>

  <script src="js/rebuild.js"></script>


</body>

</html>