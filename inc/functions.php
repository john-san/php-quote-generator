<?php

// Global variables
$quotes = [
  [
    'quote' => 'Dear God, what is it like in your funny little brains? It must be so boring!',
    'source' => 'Sherlock Holmes',
    'citation' => 'S1E1: A Study in Pink',
    'year' => 2010,
    'tag' => 'comedy'
  ],
  [
    'quote' => "I don't have friends, I've just got one.",
    'source' => 'Sherlock Holmes',
    'citation' => 'S2E2: The Hounds of Baskerville',
    'year' => 2012,
    'tag' => 'unexpected'
  ],
  [
    'quote' => 'I’m not a psychopath, Anderson. I’m a high-functioning sociopath.',
    'source' => 'Sherlock Holmes',
    'citation' => 'S1E1: A Study in Pink',
    'year' => 2010,
    'tag' => 'comedy'
  ],
  [
    'quote' => "Don't make people into heroes, John. Heroes don't exist and if they did, I wouldn't be one of them.",
    'source' => 'Sherlock Holmes',
    'citation' => 'S1E1: A Study in Pink',
    'year' => 2010,
    'tag' => 'advice'
  ],
  [
    'quote' => "I always hear 'punch me in the face' when you're speaking, but it's usually sub-text.",
    'source' => 'John Watson',
    'citation' => 'S2E1: A Scandal in Belgravia',
    'year' => 2012,
    'tag' => 'comedy'
  ],
  [
    'quote' => "All lives end; all hearts are broken. Caring is not an advantage, Sherlock.",
    'source' => 'Mycroft Holmes',
    'tag' => 'advice'
  ],
  [
    'quote' => "Every fairytale needs a good old-fashioned villain.",
    'source' => 'James Moriarty',
    'tag' => 'dark'
  ],
  [
    'quote' => "Taking your own life.’ Interesting expression - taking it from who? Once it's over, it's not you who'll miss it.",
    'source' => 'Sherlock Holmes',
    'tag' => 'inquiry'
  ],
  [
    'quote' => "A nice murder. That’ll cheer you up.",
    'source' => 'Mrs. Hudson',
    'tag' => 'comedy'
  ],
  [
    'quote' => "Anderson, don’t talk out loud. You lower the IQ of the whole street.",
    'source' => 'Sherlock Holmes',
    'tag' => 'comedy'
  ],
  [
    'quote' => "Eliminate all other factors, and the one which remains must be the truth.",
    'source' => 'Sherlock Holmes',
    'tag' => 'truth'
  ],
  [
    'quote' => "You see, but do not observe.",
    'source' => 'Sherlock Holmes',
    'tag' => 'truth'
  ],
];

// Returns random quote given array
function getRandomQuote($quotesArr) {
  $idx = rand(0, count($quotesArr) - 1);
  return $quotesArr[$idx];
}

// Returns quote in HTML formatted string 
function createBody($quote) {
  $body = '';
  $body .= "<p class='quote'>" . $quote['quote'] . "</p>";
  $body .= "<p class='source'>" . $quote['source'];
  
  if (array_key_exists('citation', $quote)) {
    $body .= "<span class='citation'>" . $quote['citation'] . "</span>";
  }
  if (array_key_exists('year', $quote)) {
    $body .= "<span class='year'>" . $quote['year'] . "</span>";
  }
  if (array_key_exists('tag', $quote)) {
    $body .= "<p><span class='tag'>" . $quote['tag'] . "</span></p>";
  }

  $body .=  "</p>";
  return $body;
}


// Prints random quote to screen
function printQuote($quotesArr) {
  // Get random quote from given array
  $randomQuote = getRandomQuote($quotesArr);
  
  // return quote as HTML formatted string
  return createBody($randomQuote);
}

?>