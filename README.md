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
