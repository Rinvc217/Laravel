<?php
/**
 * Created by PhpStorm.
 * User: VTA
 * Date: 05/08/2019
 * Time: 10:58
 */
// lop truu tuong Animal

abstract class Animal
{
    protected $name;

    abstract function run();  // phuong thuc truu tuong voi khai báo với tu khoa abstract và không có thân hàm
}

// lớp Dog kế thừa từ lớp trừu tượng Animal
class Dog extends Animal
{
    public function run () //phương thức này được override lại và viết thân hàm cho nó
    {
        echo "Con chó chạy bằng 4 chân";
    }
}

// lớp Person kế thừa từ lớp trừu tượng Animal
class Person extends Animal
{
    public function run () //phương thức này được override lại và viết thân hàm cho nó
    {
        echo "Con người chạy bằng 2 chân";
    }
}


// interface Move
/// ví dụ đơn giản về interface.

interface Move
{
    function run();
}

// lớp Dog kế thừa interface Move
class Dog implements Move
{
    public function run () //phương thức này được override lại và viết thân hàm cho nó
    {
        echo "Con chó chạy bằng 4 chân";
    }
}

// lớp Car kế thừa interface Move

class Car implements Move
{
    public function run () //phương thức này được override lại và viết thân hàm cho nó
    {
        echo "Xe hơi chạy bằng 4 bánh";
    }
}

//Abstract thường được sử dụng trong trường hợp các class
// kế thừa từ nó có cùng bản chất (thuộc 1 nhóm đối tượng)

//Interface thường được sử dụng trong trường hợp các class
// kế thừa không có cùng bản chất (nhóm đối tượng) nhưng
// chúng có thể thực hiện các hành động giống nhau.
?>