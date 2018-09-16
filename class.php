//抽象类所有方法为抽象的称为接口
<?php
//定义动物的接口
	interface Animal{
		public function run();
		public function shout();
	}
//定义狗的类，实现接口
	class Dog implements Animal{
		public function run(){
			echo"狗在奔跑<br>";
		}
		public function shout(){
			echo"汪汪汪……<br>";
		}
	}
$dog=new Dog();
$dog->run();
$dog->shout();
?>
//声明抽象类
abstract class Animal{
	abstract public function shout();//在抽象类中声明抽象方法
}