<?php

// Make sure to include the class file.
require_once 'ParseUrl.php';

// The URL we're using.
$example = 'http://www.cryode.com';

// Instantiate the URL. The construct function will do all the work.
$url = new ParseUrl($example);

/**
 * Here's an example of a URL with no "http[s]://".
 * You can set a boolean property in the class that defines
 * whether or not to auto-fill it in when missing.
 *
 * This is an example of the results if that setting is OFF.
 */
$badExample = 'my-website.co.uk';

$badUrl = new ParseUrl($badExample);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width">

	<title>ParseUrl Examples</title>
	
	<style>
	
	body {
		background-color: #D4D0DA;
		color: #333;
		font-family: 'Helvetica Neue', Helvetica, Arial, Verdana, sans-serif;
		padding: 0 30px 30px;
	}
	
	h3 {
		border-bottom: 1px solid #BAB5C2;
		color: #44286F;
		font-size: 26px;
		font-weight: normal;
		padding-bottom: 5px;
	}
	
	code {
		background-color: #FFF4F2;
		-webkit-box-shadow: 1px 1px 1px #BAB5C2;
		-moz-box-shadow: 1px 1px 1px #BAB5C2;
		-o-box-shadow: 1px 1px 1px #BAB5C2;
		box-shadow: 1px 1px 1px #BAB5C2;
		color: #276D56;
		display: inline-block;
		font-family: 'Menlo Regular', 'Monaco', 'Courier New', monospace;
		font-size: 13px;
		padding: 0 3px;
	}
	
	</style>
</head>
<body>

<h3>Example URL: <?php echo $example; ?></h3>

<p>isValid() Result: <code><?php var_dump($url->isValid()); ?></code></p>

<p>hasDomain() Result: <code><?php var_dump($url->hasDomain()); ?></code></p>

<p>getDomain() Result: <code><?php var_dump($url->getDomain()); ?></code></p>

<p>getTld() Result: <code><?php var_dump($url->getTld()); ?></code></p>

<p>hasQuery() Result: <code><?php var_dump($url->hasQuery()); ?></code></p>

<p>Try running <code>getNothing()</code>. It'll throw an Exception.</p>

<?php

/**
 * Here's an example of a URL with no "http://".
 * We can set a boolean property in our class that defines
 * whether or not to auto-fill it in when missing.
 *
 * This is an example of the results if that setting is OFF.
 */

$bad = 'my-website.co.uk';

$url2 = new ParseUrl($bad);

?>

<h3>Bad Example URL: <?php echo $bad; ?></h3>

<p>isValid() Result: <code><?php var_dump($url2->isValid()); ?></code></p>

<p>getError() Result: <code><?php var_dump($url2->getError()); ?></code></p>

<p>
	Note that if the class runs into an error, it stops processing at that point.<br>
	So some or all properties and/or magic methods will not return values.
</p>

</body>
</html>
