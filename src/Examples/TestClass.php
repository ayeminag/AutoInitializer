<?php namespace Devine\Examples;
class TestClass
{
  protected $someAttr;
  protected $bar;
  public function __construct(BarClass $bar, $someAttr = "SomeThing"){
    $this->bar = $bar;
    $this->someAttr = $someAttr;
  }
  public function saySth(){
    echo "Hello";
  }
}