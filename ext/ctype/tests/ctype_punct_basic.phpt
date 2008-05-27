--TEST--
Test ctype_punct() function : basic functionality 
--SKIPIF--
<?php
if( ini_get("unicode.semantics") == "1") {
    die('skip do not run when unicode on');
}
?>
--FILE--
<?php
/* Prototype  : bool ctype_punct(mixed $c)
 * Description: Checks for any printable character which is not whitespace 
 * or an alphanumeric character 
 * Source code: ext/ctype/ctype.c
 */

echo "*** Testing ctype_punct() : basic functionality ***\n";

$orig = setlocale(LC_CTYPE, "C"); 

$c1 = '@!$*';
$c2 = 'hello, world!';

var_dump(ctype_punct($c1));
var_dump(ctype_punct($c2));

setlocale(LC_CTYPE, $orig); 
?>
===DONE===
--EXPECTF--
*** Testing ctype_punct() : basic functionality ***

Deprecated: setlocale(): deprecated in Unicode mode, please use ICU locale functions in %sctype_punct_basic.php on line %d
bool(true)
bool(false)

Deprecated: setlocale(): deprecated in Unicode mode, please use ICU locale functions in %sctype_punct_basic.php on line %d
===DONE===
