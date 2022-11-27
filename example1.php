<div class="container ex_container">
  <!-- Setup example #1 to show how we can count the words in a given string of text -->
  <h4 class="ex_header">
    Here is an example of the project I am supposed to be working on;
  </h4>
  <!-- Write out the example text -->
  <p class="ex_paragraph">
    <i>Hello world, How are we all doing today? Did you know that Hello is the most common phrase in the world! Amazing at how the world reacts to hello</i>
  </p>
  <h4 class="ex_code_title">
    Here is the output of checking the frequency of each word;<br/>
    <br/>
    <button onclick="ex1_Function()" class="btn btn-success btn-lg">Click to show Results</button>
  </h4>

  <!-- Create a Div Element to Hid/Show the reults -->
  <div id="ex1DIV" style="display: none">
    <!-- Start the PHP Script to form a text and run it through an array to determine word frequency -->
    <?php
    // Write out the text to be used //
    $text = "Hello world, How are we all doing today? Did you know that Hello is the most common phrase in the world! Amazing at how the world reacts to hello";
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
  </div>
</div>
