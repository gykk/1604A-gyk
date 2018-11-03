<?php
header("content-type:text/html;charset=utf8");
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/3 0003
 * Time: 10:55
 */
abstract class Operation
{
    private $numA,$numB;
    public function __set($name,$value){
        $this->$name=$value;
    }

    public function __get($name){
        return $this->$name;
    }
    abstract public function getResult();
}

//具体产品角色
class OperateAdd extends Operation
{
    public function getResult(){
        $result=$this->numA+$this->numB;
        return $result;
    }
}
class OperateSub extends Operation
{
    public function getResult(){
        $result=$this->numA-$this->numB;
        return $result;
    }
}
class OperateMul extends Operation
{
    public function getResult(){
        $result=$this->numA*$this->numB;
        return $result;
    }
}
class OperateDiv extends Operation
{
    public function getResult(){
        if($this->numB==0){
            throw new Exception("除数不能为零", 1);
        }
        $result=$this->numA/$this->numB;
        return $result;
    }
}
//工厂角色
class OperationFactory
{
    public static function createOperate($operate){
        switch ($operate) {
            case '+':
                $oper=new OperateAdd();
                break;
            case '-':
                $oper=new OperateSub();
                break;
            case '*':
                $oper=new OperateMul();
                break;
            case '/':
                $oper=new OperateDiv();
                break;
            default:
                break;
        }
        return $oper;
    }
}

$oper=OperationFactory::createOperate('+');
echo $oper->numA=5;

echo  $oper->numB=5;
echo $b=$oper->getResult();
