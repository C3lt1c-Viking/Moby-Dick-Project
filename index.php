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

    <!-- Setup example #1 to show how we can count the words in a given string of text -->
    <h4>
      Here is an example of the project I am supposed to be working on;
    </h4>
    <!-- Write out the example text -->
    <p>
      <i>Hello world, How are we all doing today? Did you know that Hello is the most common phrase in the world! Amazing at how the world reacts to hello</i>
    </p>
    <h4>
      Here is the output of checking the frequency of each word;
    </h4>
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
    ?><br/>
    <br/>

    <!-- Setup example #2 to show how to splice the words to display the top X number of common words! -->
    <h4>
      Now we can splice the words and display only the top X number of commonly used words
    </h4>
    <!-- Write out the example text -->
    <p>
      <i>Hello world, How are we all doing today? Did you know that Hello is the most common phrase in the world! Amazing at how the world reacts to hello</i>
    </p>
    <h4>
      Here is the output of checking the frequency of each word and displaying only the top 3 common words;
    </h4>
    <!-- Start PHP Project -->
    <?php
    // Write out the text to be used //
    $md = "Hello world, How are we all doing today? Did you know that Hello is the most common phrase in the world! Amazing at how the world reacts to hello";
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

    <!-- Setup Main Project to determine how many words are repeated in the text -->
    <h4>
      Now, we will pull text from the main project source file
    </h4>
    <!-- Write out the example text -->
    <p>
      <i>Text content is from the file "mobydick.txt"</i>
    </p>
    <h4>
      Here is the output of checking the frequency of each word;
    </h4>
    <!-- Start PHP Project -->
    <?php
    // Pull contents from the Moby Dick Text File //
    $book = file_get_contents('mobydick.txt');

    // Convert each string into a lower case. This will help get accurate measures on each word count! //
    $book = strtolower($book);
    // Replace common symbols to read only the words from the text file. //
    $book = str_replace(array('.', ',', ':', ';', '"', "'", '?', '!', '-', '`'), '', $book);
    // We need to break the string into an array //
    $words = explode(' ', $book);
    // Gather the stats of the file name //
    $stats = array();

    // Count each word //
    foreach($words as $word)
    {
    	if(!isset($stats[$word]))
      {
    		$stats[$word] = 1;
    	}
    	else
      {
    		$stats[$word]++;
    	}
    }

    arsort($stats);

    // Display the word counts //
    echo count($words).' Words in Moby Dick (mobydick.txt) <br><br>';

    echo '20 most popular words:<br><br>';

    // Echo the words from the text file, and include the Google Trasnlate in order to translate each word to another language //
    $i = 0;
    foreach($stats as $word => $counter)
    {
    	echo ++$i.' <a href="http://translate.google.com/#es|en|'.$word.'">'.$word.'</a> ('.$counter.' times)<br>';
    }
    ?>

    <!-- Setup Main Project to count the top 100 commonly used words -->
    <h4>
      Now, we will display the top 100 used words in the book
    </h4>
    <!-- Write out the example text -->
    <p>
      <i>Text content is from the file "mobydick.txt"</i>
    </p>
    <h4>
      Here is the output of the top 100 words;
    </h4>
    <!-- Start PHP Project -->
    <?php
    // Pull contents from the Moby Dick Text File //
    $book = file_get_contents('mobydick.txt');

    // Convert each string into a lower case. This will help get accurate measures on each word count! //
    $book = strtolower($book);
    // Replace common symbols to read only the words from the text file. //
    $book = str_replace(array('.', ',', ':', ';', '"', "'", '?', '!', '-', '`'), '', $book);
    // We need to break the string into an array //
    $words = explode(' ', $book);
    // Gather the stats of the file name //
    $stats = array();

    // Count each word //
    foreach($words as $word)
    {
      if(!isset($stats[$word]))
      {
        $stats[$word] = 1;
      }
      else
      {
        $stats[$word]++;
      }
    }

    arsort($stats);

    // Display the word counts //
    echo count($words).' Words in Moby Dick (mobydick.txt) <br><br>';

    echo '100 most popular words:<br><br>';

    // Echo the words from the text file, and include the Google Trasnlate in order to translate each word to another language //
    $i = 0;
    foreach($stats as $word => $counter)
    {
      echo ++$i.' <a href="http://translate.google.com/#es|en|'.$word.'">'.$word.'</a> ('.$counter.' times)<br>';
      if($i >= 100)
      {
        break;
      }
    }
    ?>

  </body>
</html>
