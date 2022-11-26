<html>
  <head>
    <!-- Set the Title of the Website -->
    <title>Moby Dick Project</title>
  </head>
  <body>
    <!-- Set introductory message to website visitors -->
    <h1>
      This is C3lt1c Vikings Moby Dick Project
    </h1>
    <!-- Set the description of the website -->
    <p>
      This project will allow me to showcase my programming abilities in order to be considered for a position within Source Allies. <br/>
      The scope of this project is rather simple. <br/>
      <br/>
      <b>Step 1)</b> <i>Create a README file<i><br/>
      <b>Step 2)</b> <i>Create a basic landing page<i><br/>
      <b>Step 3)</b> <i>Integrate a basic PHP script to count the words in a small paragraph.<i><br/>
      <b>Step 4)</b> <i>Display the counted words in a more UI/UX friendly environment<i><br/>
    </p><br/>
    <br/>

    <!-- Set Project Example -->
    <h4>
      Here is an example of the project I am supposed to be working on;
    </h4>
    <!-- Write out the example text -->
    <p>
      <i>A very nice to tot to text. Something nice to think about if you're into text.</i>
    </p>
    <h4>
      Here is the output of checking the frequency of each word;
    </h4>
    <!-- Start the PHP Script to form a text and run it through an array to determine word frequency -->
    <?php
    // Write out the text to be used //
    $text = "A very nice to tot to text. Something nice to think about if you're into text.";
    // Run the words through a string to count them individually //
    $words = str_word_count($text, 1);
    // Cast an array to determine how many times each word is displayed //
    $frequency = array_count_values($words);
    // Sort out the times each word is displayed //
    arsort($frequency);
    // Print the results on the screen //
    echo '<pre>';
    print_r($frequency);
    echo '</pre>';
    ?>

  </body>
</html>
