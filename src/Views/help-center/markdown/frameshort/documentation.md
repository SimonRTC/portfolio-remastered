## <center>Router documentation</center><br />
<div id="routes-configuration"></div>
## Routes configuration
Path: **src/conf/routes.json**

### Model
```json
[
    {
        "method": "GET|POST|PUT|DELETE|OPTIONS",
        "pattern": "/{BindedParameters}",
        "service": "Welcome::HelloWorld",
        "cache": true
    }
]
```
### The fields

"**method**": Any HTTP request method

"**pattern**": /**{BindedParameters}**/ "BindedParameters" was injected after response when service is called.

"**service**": Called service (Controller)

"**cache**": Use it only if you want to set response in cache for next request

---

<div id="service-function-will-be-called-like-this"></div>
### Service function will be called like this

```php

public function Nothing(\Frameshort\Response $Response, array $Binded = []): void {
    // Nothing
}

```

> ``$Binded`` contain every URL query parameters.

---
<div class="mt-5"></div>
## <center>Response documentation</center><br />
<div id="how-to-return-a-view-to-the-user"></div>

### How to return a view to the user?

When router call a service, he inject 2 parameters.

1 - The first parameter is "Response" (``\Frameshort\Response``) for return view.

2 - The second parameter is every binded strings from the URL query. _(To find out more, visit the dedicated [router page](https://github.com/SimonRTC/frameshort/wiki/Router))_

Example:

```php

public function Nothing(\Frameshort\Response $Response): void {
    // Nothing for moment
}

```

For return a view you need to call ``$Response->load()`` with model name.


```php

public function Nothing(\Frameshort\Response $Response): void {
    $Response->load("nothing");
    return;
}

```

---

<div id="send-variables-datas-on-model"></div>
### Send variables datas on model

```php

public function Nothing(\Frameshort\Response $Response): void {
    $Response->load("nothing", [
        "hello" => "World!"
    ]);
    return;
}

```

> You can receive data on model with ``$_DATAS_`` variable.

---

<div id="execute-heavy-tasks-after-send-header"></div>
### Execute heavy tasks after send header

Ideal for performing heavy tasks after sending a loading screen to the user.

```php

public function Nothing(\Frameshort\Response $Response): void {
    $Response->load("nothing", [], [
        "function" => function () {
            return 'Hello!!';
        }
    ]);
    return;
}

```

> You can receive data on model with ``$_SCHEDULED_`` variable.

---
<div class="mt-5"></div>
<div id="deployment-and-containerization"></div>
## <center>Deployment & Containerization</center><br />

### How to deploy your application in production?<br />

> **WARN**: ConfigBuilder is not initialised by default.

> **WARN**: ConfigBuilder will auto-clean initialised variables after usage!

---

Add your database configuration on your system path like this:

```bash

FRAMESHORT__DATABASES_JSON_EXPORT=%7B%22default%22%3A%7B%22host%22%3A%22localhost%22%2C%22port%22%3A%223306%22%2C%22database%22%3A%22frameshort%22%2C%22username%22%3A%22root%22%2C%22password%22%3Anull%2C%22charset%22%3A%22utf8%22%7D%7D

```

Namespace: **FRAMESHORT** separation **__** and real variable name **DATABASES_JSON_EXPORT**

## How to initialise ConfigBuilder ?

> Start a PHP script file with this build code

```php

$Builder = \Frameshort\ConfigBuilder;
$Builder->Build();

```