<?php

	// stack

	require_once('stack.php');

	$myStack = new stack();

	$myStack->stackPush(1);
	$myStack->stackPush(5);
	$myStack->stackPush(10);
	$myStack->stackPush(15);
	$myStack->stackPush(20);
	$myStack->stackPush(25);
	$myStack->stackPush(30);
	$myStack->stackPush(35);

	$stackDetails = [];
	if (!$myStack->stackIsEmpty())
	{
		$myStack->stackPop();

		$stackDetails =
		[
			'top' => $myStack->stackTop(),
			'depth' => $myStack->stackDepth(),
			'limit' => $myStack->stackLimit(),
			'jsonFormat' => $myStack->stackToJson(),
		];
		$myStack->stackDisplay();
	}
	else
	{
		$myStack->stackIsEmptyWarningDisplay();
	}

	$myStack->stackDestroy();

	print("<br>");

	foreach ($stackDetails as $d_name => $d_data)
	{
		print($d_name . ": <b>" . $d_data . "</b><br>");
	}