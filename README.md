# PHP-mini-projects

This is a set of 9 mini-projects, each of which was designed to display a particular set of skills in PHP programming. 
It displays results of PHP math operations, the use of conditionals, functions, arrays, loops, OOP and back-end validation.

The project is a mobile-first, responsive website based on HTML, PHP and CSS programming, along with integrated resources based on JavaScript. 

The main files are default.php, name.php, addition.php, division.php, cssWorldTraveller.css and phpForms.css. 
The remaining files have been integrated from Bootstrap. 

-----

The project utilises Bootstrap's modal plugin, the purpose of which was to highlight and dismiss each project individually upon the click.

The opening of each modal is triggered by a button.

To allow a more interactive feel on larger devices, each button has been styled with custom animations drawn from the Animate.css online library.

The design of a mobile version of the home page has been customised with randomly generated SVGs, which alternate upon page refresh. 
Resources for this have been obtained from Chancejs. 
Each modal-triggering button has been assigned an id, which I then used to alter Bootstrap's JavaScript file (rebuild.js), in order to allocate a random SVG to each button. To overwrite the HTML I used the ‘ $(selector).html(content)’ syntax. 

Project 1

========

This project aimed to provide a demonstration of maths operations, the use of variables and certain functions, such as the round() and the number_format() functions.

This project is written in PHP and contains HTML injections, to print content and apply styling to the elements.

The program calculates exactly how much cash in USD we should have after the exchange of the four international currencies that we possess.

First, I created variables with the numerical data types, the integers, to represent original amounts, in four different currencies, before conversion to US dollars. To format numbers with grouped thousands I applied the number_format function.

Then, a new set of variables have been assigned. They represent exchange rates.

Shorthand multiplications were then performed to get the resulting figure (the amount of USD that the original currencies were exchanged for).

I invoked the round function, with two arguments, one is the floating number and the other is the number of decimal places to round to.

To present a fee for each conversion I assigned it to a new variable. The final amount of USD, after conversion fees, has been calculated by adding the amounts received from converting each currency minus the conversion fees. The result was stored in a new variable.

Project 2

========

This project was created inspired by the concept of Mad Libs, which are short stories with blank spaces, that get filled in by the user.

In this project, I used PHP functions to fill in the blanks in such a story.

To begin, I created a function that generates the story, which contains 15 unique parameters (stored in variables). I then created a variable, which has our story assigned to it as its value.

The function is set to return the story with 15 unique arguments in place of the blanks.

Following this step, each of the function’s arguments has been assigned either string or an integer value. Some of the values assigned to these arguments were not formatted correctly thus, to rectify these errors I used built-in functions such as ucfirst (to capitalise the first letter) and str_replace (to remove whitespaces).

The function is then invoked to return the story.  

To achieve the 3D space effect on the displayed text, I first set the position property of the text container to absolute and moved it 50% from the left, toward the centre of the container. Then, I set the origin for the element's transformation to center right and applied the perspective() function to it. The function had a value of 300px and the 3D property of rotateX, to define a rotation along the X-axis.

The text has an infinite auto-scroll animation applied to it. I added the @keyframes rule and specified the start and end states of the animation, causing it to originate from the bottom, scroll upwards and end at the top of the container.

To ensure that the element is hidden if it animates outside the container, its parent container’s overflow property was set to hidden.

Project 3

========

Each step of this project provides a math operation that has been completed using built-in PHP functions, such as octdec(), deg2rad(), cos(), round() and others.

To provide comments on each operation I used a disclosure widget, in the form of the  <details> element in HTML. Comments are then visible only when the widget is toggled into “open”.

The initial value of 555 represents an octal string. It has been converted to a decimal number using octdec function. The results of this operation, and all following operations, have been stored in new variables.

Following this, I converted the number achieved from the previous calculation to radians, using the deg2rad function. Then, the cosine of the last number has been calculated using cos and rounded to 3 decimal places, utilizing the round function.

I then, using the log function, calculated the natural logarithm of the latter number and, upon storing it in a new variable, I  have taken the absolute value of that number, utilising the abs function.

I have also calculated the arc cosine (acos) of the number from the latter operation.

Assuming that the number calculated above represented radians, with rad2deg  it has been converted to represent a number of degrees. I then applied the floor function, to round it down to the nearest integer.

 To arrive at the final solution, I performed a simple subtraction from the latter variable.

Project 4

========

This project's main objective is to explore the correct use of ordered and associative arrays.

It represents a calculation of Bob's annual salary, after taxes and other expenses.

To allow comments to be displayed upon the click on each figure, I used vertically collapsing accordions provided by Bootstrap, which I also utilised in Projects 6, 7 and 9.

I began the project by creating an associative array containing Bob's annual expenses. The array's keys, such as "vacations" and "carRepairs" had their corresponding values assigned to them.

I repeated this process, defining Bob’s monthly expenses as well.

Following this, I defined a variable containing the value of his gross salary. Then I calculated Bob’s social security tax by multiplying his gross salary by the specified percentage and stored the result in a new variable.

Assuming that Bob is on the progressive tax system, he would pay 12% (keeps 88%) on the first 9,700, 22% on the next 29,775, and he would pay 24% on the remainder of his salary.

I created an array ($incomeSegments) that contains another array for each income segment with the amount that Bob gets to keep at each stage.

To calculate Bob’s net income, after the set of taxes, I called the $incomeSegments array and multiplied its first value (the financial threshold on the first 12%tax) by the second value (percentage he will keep at that stage). I repeated the process with the 22% tax and the 24% tax and summed up all results.

To access the array keys I extracted them by their id’s ($incomeSegments[0][0] * $incomeSegments[0][1]) + ($incomeSegments[1][0] * $incomeSegments[1][1]....)

To calculate net earnings, social security tax was subtracted from net income.

The result of this calculation has been stored in the $annualIncome variable and the number_format function was applied to it.

Following this step, I subtracted the values, stored in each of the keys in the $annualExpenses array ("vacations" and "carRepairs"), from the $annualIncome. Again, the number-format has been applied.

Then the annual income has been divided by 12 to calculate the amount of profit per month, after which I subtracted Bob’s monthly expenses from his monthly income

($monthlyIncome -= $monthlyExpenses["rent"]...)

Assuming there are an average of 4.33 weeks in a month, Bob's weekly income has been calculated by dividing his monthly income by 4.33. The resulting figure has been rounded to 2 decimal places, utilising the round () function.

Following this, an associative array that contains Bob's weekly expenses has been created.

Values of weekly expenses have been subtracted from $weeklyIncome and stored in a new variable which represents the amount that Bob can save each week, after taxes and expenses.  

To determine how much he can save for the year I multiplied $weeklyIncome by 52 (number of weeks in a year :

$yearlySavings = $weeklyIncome * 52; ). The result was stored in a new variable and formatted by the number_format.

Project 5

========

This project's objective was to apply HTML forms in PHP to create a name form and a calculator.

The calculator was designed to do the addition and division of two integer numbers.

To ensure that each of the forms gets submitted to the correct PHP file I have created three back-end files: name.php, addition.php and division.php, which process the contents of each form utilizing the $_GET superglobal.

I began by constructing HTML forms with a “get” method and an action attribute pointing to the correct back-end file. I have added the “required” attribute on each input element, to ensure that the user doesn’t leave any blank spaces.

All back-end files begin with an HTML and link to an external style sheet.

I used PHP to inject data, submitted by the user in the form. To get the submitted values, I applied the $_GET superglobal along with the “name” attribute from the correct form and saved it in a variable ( $First = $_GET['first_name'] ).

In the addition calculator, I stored the submitted values in two separate variables and performed an addition of the two. The process was similar to the division calculator, where the numerator (first variable) is divided by the denominator (second variable).

There is a fadeIn animation that appears on the first line on the name form and both calculators. To create the fade-in effect, I used the @keyframes rule and I set the opacity to 0 at 0% and to 1 at 100%. To ensure cross-browser compatibility the code has been repeated using vendor prefixes: "-webkit", "-moz", "-o", and "-ms".

Project 6

========

This project’s main focus was the use of loops in PHP.  

The objective was to provide a code that prints the numbers from 1 to 100 (inclusive), except for these cases:

- If a number is a multiple of 3, it should print "Fizz".

- If a number is a multiple of 5, it should print "Buzz".

- If a number is a multiple of both 3 and 5, it should print "FizzBuzz"

I created three different instances that achieve this and introduced different conditions on all three.

In the first instance, to keep track of the number and print it to the screen on each iteration, I began by declaring the $counter variable and set it to 1.

I used a 'while' loop to count from 1 to 100 and the if/ else statements to determine what to print at each iteration. To check if a number is divisible by another I have used the modulo operator and the “identical” comparison operator (ex. {....elseif ($counter % 5 === 0)... }).

I incremented the $counter variable at the end of the loop.

In the following instance, instead of printing the statements at each step, there were queued up into the $output array and printed all at the end.

I began by creating an empty array to store the statements in.

The 'for' loop was then added to count from 1 to 100. I used the $i as the loop counter variable and initialised it to 1, inside the loop. The loop was set to continue as long as the $i variable was lesser than or equal to 100, and it was incremented at the end. I then introduced the if/else statements, the modulo and the “identical” comparison operator to check if a number is divisible by another. Following this step, the array_push function has been applied to add statements to the end of an array.

Below that, I created a 'foreach' loop that iterates through the $output array. The $value has been used for the variable at each position in the array.

In the third instance, I produced a copy of the previous foreach loop that iterates over the $output array and utilised the if/else and continue/break statements to avoid printing anything when the $value is "Fizz". If the $value in the foreach loop is identical to “Fizz” the loop is set to continue, and if it is identical to "fizzBuzz" it breaks from the loop.

Project 7

========

This project demonstrates the use of shorthand syntax loops, along with associative arrays and the count() function.

To reveal the comments on each section of the code, I utilised Bootstrap’s collapsable accordions.

Menu section

========

I began by creating three different associative arrays, each representing specific items on the menu: drinks, pastries and sandwiches. I used variables to name each array.

Names and prices of the items were contained within each array, as keys and their corresponding values and they were stored in PHP to be later embedded into HTML for display.

Drinks section

========

I used a 'foreach' loop with the shorthand syntax, to iterate over the items in the $drinks array and provide access to the keys and values contained within it. Then I added the div element and re-entered PHP mode to print the name of the drink and its price.

Pastries section

========

The 'for' loop has been introduced to access elements within the $pastries array.

The loop had to continue while the loop counter was lesser than the number of items in $pastries and for this, I utilised the count () function.

The $i variable was initialized to 0 and incremented at each loop iteration.

Then, within the div element, I injected PHP and, using the $i variable, I indexed into the $pastries array to print the name of each pastry.

Sandwiches section

========

Similarly to the first example, the shorthand syntax 'foreach' loop was utilised, to access the names and prices of sandwiches. The loop iterates over the items in the array, providing access to its keys and values.

Inside the div element, I re-entered PHP mode to print the name of each drink and its price.

Project 8

========

This project demonstrates the PHP back-end validation and sanitisation of data, to verify HTML forms.

I used functions such as htmlspecialchars(), trim() and filter_var(), as well as associative arrays, if/else statements and other components.

I began by defining empty variables to store each portion of the data that the user inputs. I also defined another set of empty variables, which will display error statements if the user input doesn’t meet the required criteria.

I then set the default timezone to ‘UTC, as the date function will be used later in the script.

Following this, I introduced the if($_SERVER['REQUEST_METHOD'] == 'POST') function, to check if the form submission is correctly done, and implemented a set of if/else statements within it.

The first if/else statement, inside that function, defines what to print if the user submits a form with an empty name field- for this, I used the empty() function. Otherwise, I introduced the test_input function that displays an error message if the user typed any characters that are different from letters and whitespace. I perfomed a regular expression match to achieve this.

The second if/else statement prints an error message if the user leaves the character checkbox unmarked, or prints the chosen character name.

The following portion of the if/else commands relates to the user's email address and prints the error message if the form is submitted with an empty field. Also, to prevent users from entering email addresses that do not exist, I introduced the test_input function and then applied the filter_var() to check if the email is a valid email address.

 

The last portion of if/else statements defines what to print if the user submits a form with an empty birth year field, or it checks whether the year entered was a realistic one.

Inside the else statement, first I implemented the test_input function and set the minimum and maximum age, which the user can enter. I calculated that by subtracting the integer value of 110 (the maximum age of a person) from the current date (date("Y")), which results in the year 1912 as the minimum birth year.

I also subtracted the integer value of 6 (the minimum age of a person) from the current date, which resulted in the year 2016 as the maximum birth year that the user can enter. The calculations were stored inside two separate variables.

Underneath that, still contained within the else element, I inserted the if construct

to define what to print should the user insert a birth year that is outside the set criteria.

I used the comparison operators to achieve this.

If the birth year is lesser than or equal to the $minYear (minimum year), or if it is greater than or equal to the $maxYear, the screen will display an error message.

I then tested all input data (function test_input($data)). Inside that function, I utilised the htmlspecialchars() to transform any HTML characters into HTML entities, the trim() function to remove any leading or trailing whitespace from the input and the stripslashes() to remove backslashes.

The function returns the $data.

Underneath the PHP code, I used HTML to create a form. I set the method to “post” and an action attribute (via injection of PHP) to the $_SERVER["PHP_SELF"], which sends the submitted data to the page itself, instead of diverting to a new page. I applied the htmlspecialchars function on the super global variable.

All user-inserted input along with error messages display upon page refresh.

Project 9

========

In this project, I practised object-oriented programming: creating objects from classes as well as using public and static methods.

The concept was to create some pyjamas for animals, utilising the OOP.

I began by creating a helper class 'StringUtilities'.

All names were supposed to be entirely lowercase, except for the second letter. To achieve this, I built my public static function, inside 'StringUtilities'.

The method was set to static since I won’t be instantiating StringUtilities and it is only used as a helper class.

Inside the function, I applied strtolower() on the string, to fully convert it to lowercase. Then I used an if constructor that transforms the second letter into uppercase:

If the length of a string (strlen($string)) is greater than or equal to 2, the second character ($string[1]) is converted (=) to an uppercase (strtoupper($string[1]).

Following this step, the 'Pyjamas' class with 3 private properties: owner, fit and color, was set. A constructor class for ‘Pyjamas’ has been added and defaults of my choosing were provided for each argument.

The passed-in values were assigned to their corresponding properties.

A public 'describe' method has been added, which returns a string using the 3 properties, to tell us about the object.

Then a public method 'setFit' was implemented to modify the fit of the pyjamas. Since 'fit' was a private property, I  made a setter.

Let's say some animals needed their pyjamas to have buttons.

To achieve this, I created a new class 'ButtonablePyjamas' that inherits from the 'Pyjamas' class.

Then I added new private property, 'button_state', to maintain the status of the buttons, and I set it to "unbuttoned".

Within the 'ButtonablePyjamas' the 'describe' method has been overridden to contain the message about the buttons.

Following this, I introduced a new method 'toggleButtons' that flips the state of the buttons and used if/else to achieve this (if ($this->button_state === "unbuttoned") {$this->button_state = "buttoned" }...)

At this point, I created an instance of the ‘Pyjamas’ class for “CHICKEN” and assigned it to the variable $chicken_PJs. The ‘describe’ method has been applied to the $chicken_PJs to print the message to the screen.

The 'setFit' method has been tested by tightening up chicken’s PJs and ‘describe’ was applied to it.

Then I created a new instance of 'ButtonablePyjamas' with the owner "sheep" and saved it to the variable $sheep_PJs.

The 'describe' method has been applied to ensure that it prints that the pyjamas are unbuttoned.

Lastly, the 'toggleButtons' method has been used to flip the state of the buttons.

I applied the fade-in animation for hovering on certain features and the Bootstrap accordion to display and dismiss comments upon the click. 

