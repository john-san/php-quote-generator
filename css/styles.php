<?php header("Content-type: text/css"); 

// Return random rgb string.  Values kept under 128 to have better contrast w/ white text
function getRandomColor() {
  $r = rand(0,128);
  $g = rand(0,128);
  $b = rand(0,128);
  return "rgb($r, $g, $b)";
}

$randomColor = getRandomColor();

?>



body {
  background-color: <?php echo $randomColor ?>;
  color: white;
  font-family: 'Playfair Display', serif;
  height: 85vh;
}

.container {
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
  height: 100%;
  padding: 0 2.5%;
}

#quote-box {
  line-height: .5;
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.quote {
  font-size: 3rem;
  font-weight: 400;
  line-height: 1.1;
  position: relative;
  margin: 0;
}

.quote:before, .quote:after {
  font-size: 3rem;
  line-height: 2.5rem;
  
}

.quote:before {
  content: "“";
  top: .25em;
  left: -.5em;
}

.quote:after {
  content: "”";
  bottom: -.1em;
  margin-left: .1em;
  position: absolute;
}

.source {
  font-size: 1.25rem;;
  letter-spacing: 0.05em;
  line-height: 1.1;
  text-align: right;
  margin-right: 4em;
}

.source:before {
  content: "—";
}

.citation {
  font-style: italic;
}

.citation:before {
  content: ", ";
  font-style: normal;
}

.year:before {
  content: ", ";
  font-style: normal;
}

.tag {
  border-radius: 4px;
  border: 2px solid #fff;
  padding: 4px 8px;
}

#loadQuote {
  width: 12em;
  display: inline-block;
  bottom: 150px;
  border-radius: 4px;
  border: 2px solid #fff;
  color: #fff;
  background-color: <?php echo $randomColor ?>;
  padding: 15px 0;
  transition: .5s ;
}
#loadQuote:hover {
  background-color: rgba(255,255,255,.25);
}

#loadQuote:focus {
  outline: none;
}

@media (max-width: 420px) {
  .quote {
    font-size: 2.5rem;
  }
  .quote:before, .quote:after {
    font-size: 3rem;
  }
  .source {
    font-size: 1rem;
  }
}
