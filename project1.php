<div class="container pr_container">
  <!-- Setup Main Project to determine how many words are repeated in the text -->
  <h4 class="pr_header">
    Now, we will pull text from the main project source file
  </h4>
  <!-- Write out the example text -->
  <p class="pr_paragraph">
    <i>Text content is from the file "mobydick.txt"</i>
  </p>
  <h4 class="pr_code_title">
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

  echo '<pre>';
  // Display the word counts //
  echo count($words).' Words in Moby Dick (mobydick.txt) <br><br>';

  // Echo the words from the text file, and include the Google Trasnlate in order to translate each word to another language //

  $i = 0;
  foreach($stats as $word => $counter)
  {
    echo ++$i.' <a href="http://translate.google.com/#es|en|'.$word.'">'.$word.'</a> ('.$counter.' times)<br>';
  }

  echo '</pre>';
  ?>
</div>
