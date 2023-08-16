<?php
class SomeClass {
function scream($count = 1){
for($i = 0; $i < $count; $i++){
echo "Eek! <br/>";
}
}
}
class SomeOtherClass extends SomeClass{
function scream($count = 1){
for($i = 0; $i < $count; $i++){
echo "Whoohoo! <br/>";
}
}
}
$someotherclass = new SomeOtherClass;
$someclass = new SomeClass;
$someclass->scream();
$someotherclass->scream();