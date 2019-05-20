"# WsSendMsg" 
[toc]
## 短信服务：

使用之前务必初始化sign(项目唯一码)
```php
use msg\SendMsg;

SendMsg::setSign('您的项目唯一码');
```

### 一，发送验证码 

如下代码 返回true为成功 false为失败


```php
use msg\SendMsg;

/**
*用户手机号
*/
SendMsg::sendCodeMsg('17796908132');
```

### 二，校验验证码 

如下代码 返回true为验证码正确 false为验证码错误

```php
use msg\SendMsg;

/**
*用户手机号
*用户填写的验证码
*/
SendMsg::checkCode('177****8132','679478');
```


### 三，发送变量短信 

如下代码 返回true为成功 false为失败

```php
use msg\SendMsg;

/**
*用户手机号
*要使用的模板类型
*规定类型数组数组 模板所需的变量 顺序必须严格按照模板中*号的顺序排列
*/
SendMsg::sendTemMsg('177****8132','xx',[]));
```


### 四，发送其他短信

如下代码 返回true为成功 false为失败

```php
use msg\SendMsg;

/**
*用户手机号
*要发送的短信内容
*/
SendMsg::sendOtherMsg('177****8132','xxxxxxxxx');
```