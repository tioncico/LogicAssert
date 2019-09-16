# LogicAssert
逻辑断言组件,用于项目中,直接断言,抛出异常,简化代码

### 示例  
```php
$userId = null;
//常规判断写法
if ($userId===null){
    echo "会员id不存在!";
}


try{
    //断言写法
    \LogicAssert\Assert::assertEquals($userId, null,'会员id不存在!');
}catch (\Throwable $throwable){
    echo $throwable->getMessage();
}
```