<?php

// Probando scope local
$var1 = 'var1!';
echo "{$var1}\n";

// Probando scope global
function testScopeGlobal() {
	// Variable global
	global $var2;
	$var2 = 'var2!';

	// Variable de scope local
	$var3 = 'var3!';
}

testScopeGlobal();
echo "{$var1}\n";
echo "{$var2}\n";
// Aquí truen :O!
echo "{$var3}\n";

// Probando scope estático
function testScopeEstatico() {
	// Variable global
	static $var4 = 'var4!';
	echo "{$var4}\n";
	$var4 .= '!';
}

// var4!
echo testScopeEstatico();
// var4!!
echo testScopeEstatico();
// var4!!!
echo testScopeEstatico();