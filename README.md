# singletonphp

Easily manage the singleton instances of your application

# Description

Ideal for reusing instances of objects in your application using singleton. It detects identical objects and avoids re-creating them.

# How to use

```php
class Foo 
{
    public function __construct($bar = 1) {
        ...

    }

    public function anyMethod()
    {
        ...
    }
}
```

Make a new instance of Foo with $bar = 1
```php
$fooInstance = Singleton::resolve(Foo::class, 1);`
```
Reuses the Foo instance since it was also built with $bar = 1;
```php
`$otherFooInstance = Singleton::resolve(Foo::class, 1);`
```
Make a new Foo instance since $bar = 2 
```php
$moreFooInstance = Singleton::resolve(Foo::class, 2);`
```


