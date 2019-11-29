<h1 align="center"> laravel-runit </h1>

<p align="center"> 基于laravel组件化开发的简易版unit单元测试组件 </p>

## Requirement
1. PHP >= 7.1
2. Composer
3. laravel

## 安装

```shell
$ composer require chameleon-w/laravel-runit
```

## 配置
    在config/app.php中注册 RunitServiceProvider
    'providers' => [
        // ...
       ChameleonW\LaravelRunit\Providers\RunitServiceProvider::class,
    ],
    访问 http://127.0.0.1/runit
## License

MIT