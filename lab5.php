<?php
    // this is a page that will test all the functions in the ctec_functions file
    require_once("inc/ctec_functions.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Test PHP Functions Page</title>
</head>
<body>
<div id="wrapper">
    <div id="header">
        <h1>Test PHP Functions</h1>
    </div>
    <div id="function1-function2" class="section">
        <!-- This area displays the results of the post and get -->
        <h2>Functions 1 and 2: Test Page Request Method</h2>
        <?php
            if (is_post_request()) {
                echo "This page was loaded with a POST request.";
            } else if (is_get_request()) {
                echo "This page was loaded with a GET request.";
            } else {
                echo "This page was loaded with neither a POST or GET request.";
            }
        ?>
    </div>
    <div id="function1-function2-form" class="section">
        <h2>Form for Functions 1 and 2</h2>
        <form method="post">
        <input type="text" name="textbox" placeholder="Type anything">
        <input type="submit" value="Test POST">
        </form>
    </div>
    <div class="section" id="function3">
        <h2>Function 3: htmlspecialchars()</h2>
        <p>Input: <span class="mono"><\p>\This quote has html tags around it<\/p>\</span></p>
        <?php
            echo "<p>Output: " . h("<p>This quote has html tags around it</p>") . "</p>";
        ?>
    </div>
    <div class="section" id="function4">
        <h2>Function 4: urlencode()</h2>
        <p>Input: <span class="mono">Hello world!</span></p>
        <?php
            echo "<p>Output: " . u("Hello world!") . "</p>";
        ?>
    </div>
    <div class="section" id="function5">
        <h2>Function 5: rawurlencode()</h2>
        <p>Input: <span class="mono">Hello world!</span></p>
        <?php
            echo "<p>Output: " . raw_u("Hello world!") . "</p>";
        ?>
    </div>
    <div class="section" id="function6">
        <h2>Function 6: Data Presence with trim()</h2>
        <p>Input: <span class="mono">"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"</span></p>
        <?php
            $output = "false";
            if (is_blank("     ")){
                $output = "true";
            }
            echo "<p>Output: " . $output . "</p>";
        ?>
    </div>
    <div class="section" id="function7">
        <h2>Function 7: Data Presence</h2>
        <p>Input: <span class="mono">meow</span></p>
        <?php
            $output = "false";
            if (has_presence("meow")){
                $output = "true";
            }
            echo "<p>Output: " . $output . "</p>";
        ?>
    </div>
    <div class="section" id="function8">
        <h2>Function 8: Has Greater Length than</h2>
        <p>Input: <span class="mono">"Hohoho", 3</span></p>
        <?php
            $output = "false";
            if (has_length_greater_than("Hohoho", 3)){
                $output = "true";
            }
            echo "<p>Output: " . $output . "</p>";
        ?>
    </div>
    <div class="section" id="function9">
        <h2>Function 9: Has Less Length than</h2>
        <p>Input: <span class="mono">"Test", 2</span></p>
        <?php
            $output = "false";
            if (has_length_less_than("Test", 2)){
                $output = "true";
            }
            echo "<p>Output: " . $output . "</p>";
        ?>
    </div>
    <div class="section" id="function10">
        <h2>Function 10: Has Length Exactly</h2>
        <p>Input: <span class="mono">"Does it match", 12</span></p>
        <?php
            $output = "false";
            if (has_length_exactly("Does it match", 12)){
                $output = "true";
            }
            echo "<p>Output: " . $output . "</p>";
        ?>
    </div>
    <div class="section" id="function11">
        <h2>Function 11: Has Length</h2>
        <p>Input: <span class="mono">"Does it match", 13</span></p>
        <?php
            $output = "false";
            if (has_length("Does it match", 13)){
                $output = "true";
            }
            echo "<p>Output: " . $output . "</p>";
        ?>
    </div>
    <div class="section" id="function12">
        <h2>Function 12: Has Inclusion of</h2>
        <p>Input: <span class="mono">3, [1, 2, 3, 4, 5]</span></p>
        <?php
            $output = "false";
            if (has_inclusion_of(3, [1, 2, 3, 4, 5])){
                $output = "true";
            }
            echo "<p>Output: " . $output . "</p>";
        ?>
    </div>
    <div class="section" id="function13">
        <h2>Function 13: Has Exclusion of</h2>
        <p>Input: <span class="mono">3, [1, 2, 3, 4, 5]</span></p>
        <?php
            $output = "false";
            if (has_exclusion_of(3, [1, 2, 3, 4, 5])){
                $output = "true";
            }
            echo "<p>Output: " . $output . "</p>";
        ?>
    </div>
    <div class="section" id="function14">
        <h2>Function 14: Has String</h2>
        <p>Input: <span class="mono">"hello@test.com", ".com"</span></p>
        <?php
            $output = "false";
            if (has_string("hello@test.com", ".com")){
                $output = "true";
            }
            echo "<p>Output: " . $output . "</p>";
        ?>
    </div>
    <div class="section" id="function15">
        <h2>Function 15: Has valid email format</h2>
        <p>Input: <span class="mono">"hello@test.com", ".com"</span></p>
        <?php
            $output = "false";
            if (has_valid_email_format("hello@test.com", ".com")){
                $output = "true";
            }
            echo "<p>Output: " . $output . "</p>";
        ?>
    </div>
    <div class="section" id="function16">
        <h2>Function 16: Display Errors</h2>
        <p>Input: <span class="mono">$errors=array("Error!","Whoops!","Something went wrong!")</span></p>
        <?php
            echo "<p>Output: " . display_errors($errors=array("Error!","Whoops!","Something went wrong!")) . "</p>";
        ?>
    </div>
</div>

</body>
</html>