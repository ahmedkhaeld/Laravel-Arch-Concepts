# Middleware

Laravel handles incoming requests and send back responses by using the `kernel`<br>
which is located in `app/Http/Kernel.php`. The kernel is a class that extends the<br>
`Illuminate\Foundation\Http\Kernel` class. The kernel is responsible for handling<br>
all requests to your application and sending the responses back to the browser.<br>

```
run:
php artisan make:middleware CheckAge

add to middleware stack in kernel.php 
```

Middleware is a stack the request should pass through before it reaches the controller.<br>

* What does the kernel do behind the scenes?<br>
the primary method of the kernel is the `handle` method. This method receives a request<br>
and passes it through the stack of middleware or the router using the `sendRequestThroughRouter` method.<br>
`sendRequestThroughRouter` inside it a bootstrapper is called which is responsible for<br>
bootstrapping the application. The bootstrapper is responsible for loading the environment<br>
variables, the configuration files, the service providers, and the facades.<br>

---
# Service Providers
helps to instantiate classes and bind them to the service container.<br>
for example, we have a `Geoloaction` class that we want to use in our application.<br>
and that class is dependent on other classes. We can use the service provider inject those dependencies<br>

1- `
php artisan make:provider GeolocationServiceProvider
`
this will create a new service provider class in the `app/Providers` directory.<br>
the service provider class is responsible for registering the service container bindings.<br>
using the `register` method to tell laravel how to instantiate our service class.<br>
2- add the service provider to the `providers` array in `config/app.php`<br>
3- there are two ways to resolve the service class from the service container.<br>
- try it out using tinker `php artisan tinker`<br>

a- call the global app()    ~ `app(\App\Services\Geolocation\Geolocation::class)`<br>
b- using make() method      ~ `app()->make(\App\Services\Geolocation\Geolocation::class)->search('abc')`<br>




