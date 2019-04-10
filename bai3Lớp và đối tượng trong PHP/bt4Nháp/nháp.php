<?php
class A {
    function example() {
        echo "I am A::example() and provide basic functionality.<br /
>\n";
    }
}
class B extends A {
    function example() {
        echo "I am B::example() and provide additional functionality.
<br />\n";
        parent::example();
    }
}
$b = new B;
// Điều này sẽ gọi B :: example (), lần lượt sẽ gọi A :: example ().
$b->example();
?>