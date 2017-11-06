

# 置创明匠 在线API接口文档


## 微信小程序 MJPM

### 1. 获取openid

**简要描述：**

*   根据用户code获取用户openid

**请求URL：**

*   `POST https://www.powtronic.cn/api/v1/weixinmp`

**请求方式：**

*   POST

**参数：**
| 参数名 | 必选 | 类型 | 说明 |
| :-- | :-- | :-- | --- |
| code | 是 | string | 用户登录微信获取 |


> 注意

**返回示例**

    {
        result: success,
        msg:1001:微信认证成功,
        data: {
            openid: oFL4e0fSew*******uxT0j5a-2_HI;
        }
    }

**返回参数说明**

| 参数名 | 类型 | 说明 |
| :-- | :-- | --- |
| result | string | success,error |
| msg | String |1001:微信认证失败!,1002:微信认证成功!|
| data | object |  |
| openid| string| 微信唯一标识

**备注**

> 


### 2.1 用户登录

**简要描述：**

*   用户登录

**请求URL：**

*   `GET https://www.powtronic.cn/mjpm/v1/auth/login/{{openid}}`

**请求方式：**

*   GET

**参数：**
| 参数名 | 必选 | 类型 | 说明 |
| :-- | :-- | :-- | --- |
| openid | 是 | string | 微信唯一标识 |


> 注意

**返回示例**

    {
    result: "success",
    msg: "1003:员工登录成功",
    data: {
        id: 17,
        openid: 23345,
        name: "施海泉",
        email："",
        phone:"",
        dept: "IT",
        station:"engineer",
        status："在职"
        rights: [
            
        ],
        permission:[
        
        ]
     
      
        token: "9c0031f12464cdf50d68407f967bf356"
    }
}

**返回参数说明**

| 参数名   | 类型 | 说明 |
| :--      | :--  | ---  |
|result    |string|success,error|
|msg	   |string|1000:员工登录成功,1001:员工信息不存在!,1002:用户信息审核中!,2000:系统异常|
|code      |string|1000,1001,1002,2000|
|data      |object|      |	
|id        |string|员工序号|
|email     |string|员工邮箱|
|mobile    |string|员工手机|
|name      |string|员工姓名|
|open_id   |string|微信唯一标识|
|duty      |string|职位|
|status    |string|员工状态|
|dept_name      |string|所属部|
|rights []   |array |用户授权应用|
|register_time    |string
|token     |string|应用授权标识|
**备注**
   开发环境下给全部权限
> 





### 2.2 通过邮箱获取验证码

**简要描述：**

*   发送邮箱验证码接口

**请求URL：**

*   `GET|POST https://www.powtronic.cn/mjpm/v1/auth/code/{{openid}}`

**请求方式：**

*   GET | POST

**Header：**

*   content-type: application/json

**参数：**

| 参数名 | 必选 | 类型 | 说明 | 请求方式 |
| --- | --- | --- | --- | --- |
| openid | 是 | string | 微信唯一标识 | GET |
| email | 是 | string | 待验证邮箱 | POST |

> 
> 
> **注意** email字符串格式 {"email":"zs@163.com"}
> 
> 

**返回示例**

```
{
    "result": "success",
    "msg": "1000:验证码发送成功!",
    "data": []
}

```

**返回参数说明**

| 参数名 | 类型 | 说明 |
| --- | --- | --- |
| result | string | success |
| msg | string | 1000:验证码发送成功 ,2000:系统异常|
| data | array | 空数组 |

**备注**

> 
> 
> 验证码10分钟后失效
> 
>




### 2.3\. 用户注册

**简要描述：**

*   用户注册


**请求URL：**

*   `GET|POST https://www.powtronic.cn/mjpm/v1/auth/register/{{openid}}`

**请求方式：**

*   GET | POST

**Header：**

*   content-type: application/json

**参数：**

| 参数名 | 必选 | 类型 | 说明 |
| --- | --- | --- | --- |
| code | 是 | string | 用户输入的验证码 4位 |
| openid | 是 | string | 微信唯一标识 |
| avatar_url | 是 | string | 微信头像 |
| email | 是 | string | 待注册邮箱 |


**请求示例：**

```
    {"name":"施海泉","email":"123@qq.com","avatar_url":"","code":"1234"}

```

> 
> 
> 注意
> 
> 

**返回示例**

```
 {
    "result": "success",
    "msg": "员工注册成功!）",
    "data": []
 }

```

**返回参数说明**

| 参数名 | 类型 | 说明 |
| --- | --- | --- |
| result | string | success,error |
| msg | string | 1000：员工注册成功,1001:随机码过期,1002:随机码验证失败!,1003：员工重复注册!,1004:员工注册失败，2000: 系统异常! |

**备注**

> 
> 
>
> 
>

### 3.1\. 请求员工管理列表

**简要描述：**

*   请求员工管理列表

**请求URL：**

*   `GET https://www.powtronic.cn/mjpm/v1/员工管理/{{openid}}?token={{token}}`

**请求方式：**

*   GET

**请求说明：**

```
https://www.powtronic.cn/oa/v1/员工管理/9988?token=38020dc81999336d6787f115a66e409d

```

**参数：**

| 参数名 | 必选 | 类型 | 说明 |
| --- | --- | --- | --- |
| openid | 是 | string | 微信唯一标识 |
| token | 是 | string | 授权码 |

> 
> 
> 
> 
> 

**返回示例**

```
{
  result: "success",
  msg: "1002:请求成功",
  data: [
    {
        id: 17,
        name: "施海泉",
        avatar_url："",
        email："",
        phone："",
        dept: "IT",
        station:"engineer",
        status："审核"
        rights: [
            "",
            ""
        ],
        permission:[
        
        ]
    }
  ]
}

```

**返回参数说明**

| 参数名 | 类型 | 说明 |
| --- | --- | --- |
|data      |array|      |	
|id        |string|员工序号|
|email     |string|员工邮箱|
|avatar_url     |string|头像url|
|mobile     |string|员工手机|
|name      |string|员工姓名|
|openid    |string|微信唯一标识|
|duty      |string|职位|
|status    |string|员工状态|
|dept      |string|所属部|
|rights    |array |用户授权应用|
|permission|array |项目授权|
|token     |string|应用授权标识|
|msg       |string|1000:操作成功,1001:验证失败，2000：系统异常

> 
> 
> 注意
> 
>


### 3.2\. 审核员工信息

**简要描述：**

*   审核，修改员工信息

**请求URL：**

*   `POST https://www.powtronic.cn/mjpm/v1/员工管理/审核/{{openid}}`

**请求方式：**

*   POST

**请求说明：**

```
https://www.powtronic.cn/mjpm/v1/员工管理/审核/9988

```
**请求示例：**

```


wx.request
{
    url: 'https://www.powtronic.cn/mjpm/v1/员工管理/审核/9988', 
    data: {
        'id'：''
        'email'：''
        'avatar_url'：''
        'mobile'：''
        'name'：''
        'station'：''
        'status'：''
        'dept_name'：''
        'rights'：[]
        'token': 'd6197bcab0899b361a6599ac190a5f0a'
    }
}

```

**参数：**

| 参数名 | 必选 | 类型 | 说明 |
| --- | --- | --- | --- |
| openid | 是 | string | 微信唯一标识 |
| token | 是 | string | 授权码 |
|id        |string|员工序号|
|email     |string|员工邮箱|
|avatar_url     |string|？？？？？？？？？？？？？？|
|mobile     |string|员工手机|
|name      |string|员工姓名|
|duty      |string|职位|
|status    |string|员工状态|1000:操作成功,1001:授权成功,2000:系统异常
|dept_name |string|所属部|
|rights    |array |用户授权应用|

> 
> 
> 
> 
> 

**返回示例**

```
{
  result: "success",
  msg: "1000:修改成功",
  data: [
  ]
}

```

**返回参数说明**

| 参数名 | 类型 | 说明 |
| --- | --- | --- |
|result|string|success，error|
|msg|string|1001:操作授权失败!, 1002:操作出现错误!,1003:操作成功!

> 
> 
> 注意
> 
>
