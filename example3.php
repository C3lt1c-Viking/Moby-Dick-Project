<div class="container ex_container">
  <!-- Setup example #3 to show how we can use stop words -->
  <h4 class="ex_header">
    Now we will count the top 3 words, but using stop words
  </h4>
  <!-- Write out the example text -->
  <p class="ex_paragraph">
    <i>Hello world, How are we all doing today? Did you know that Hello is the most common phrase in the world! Amazing at how the world reacts to hello</i>
  </p>
  <h4 class="ex_code_title">
    Here is the output of checking the frequency of each word and displaying only the top 3 common words;<br/>
    <br/>
    <button onclick="ex3Function()" class="btn btn-success btn-lg">Click to show results</button>
  </h4>
  <div id="ex3DIV" style="display: none">
    <!-- Start PHP Project -->
    <?php
    // Write out the text to be used //
    $md = "Hello world, How are we all doing today? Did you know that Hello is the most common phrase in the world! Amazing at how the world reacts to hello";
    // Stop Words of Choise //
    $stopwords = array("Hello", "World");
    // Run the words through a string to count them individually //
    $words = str_word_count($md, 1);
    // Cast an array to determine how many times each word is displayed //
    $frequency = array_count_values($words);
    // Sort out the times each word is displayed //
    arsort($frequency);
    // Print top 3 words //
    $frequency=array_slice($frequency,0,3);
    // Print the results on the screen //
    echo '<pre>';
    print_r($frequency);
    echo '</pre>';
    ?>
  </div>
</div>
