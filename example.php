<?php

require_once 'ParseUrl.php';

$example = 'http://www.google.com';

$url = new ParseUrl($example);

?>

<h4>Example URL: <?php echo $example; ?></h4>

<p>hasDomain() Result: <?php var_dump($url->hasDomain()); ?></p>

<p>getDomain() Result: <?php var_dump($url->getDomain()); ?></p>

<p>getTld() Result: <?php var_dump($url->getTld()); ?></p>

<p>hasQuery() Result: <?php var_dump($url->hasQuery()); ?></p>

<p>getNothing() Result: <pre><?php var_dump($url->getNothing()); ?></pre></p>