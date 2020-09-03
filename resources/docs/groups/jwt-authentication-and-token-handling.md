# JWT authentication and token handling

All jwt related authentication and authorization

Class AuthController

## Get a JWT token via given credentials.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/jwt/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"reilly.mireya@example.org","password":"quaerat"}'

```

```javascript
const url = new URL(
    "http://localhost/api/jwt/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "reilly.mireya@example.org",
    "password": "quaerat"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/jwt/login',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'email' => 'reilly.mireya@example.org',
            'password' => 'quaerat',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/jwt/login'
payload = {
    "email": "reilly.mireya@example.org",
    "password": "quaerat"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "password": [
            "The password must be at least 8 characters."
        ]
    }
}
```

### Request
<small class="badge badge-black">POST</small>
 **`api/jwt/login`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>email</b></code>&nbsp; <small>string</small>     <br>
    The value must be a valid email address.

<code><b>password</b></code>&nbsp; <small>string</small>     <br>
    



## Log the user out (Invalidate the token)

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```bash
curl -X POST \
    "http://localhost/api/jwt/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/jwt/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/jwt/logout',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/jwt/logout'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-black">POST</small>
 **`api/jwt/logout`**



## Register a new user




> Example request:

```bash
curl -X POST \
    "http://localhost/api/jwt/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"thora.davis@example.com","name":"doloribus","password":"tempore"}'

```

```javascript
const url = new URL(
    "http://localhost/api/jwt/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "thora.davis@example.com",
    "name": "doloribus",
    "password": "tempore"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/jwt/register',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
        'json' => [
            'email' => 'thora.davis@example.com',
            'name' => 'doloribus',
            'password' => 'tempore',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/jwt/register'
payload = {
    "email": "thora.davis@example.com",
    "name": "doloribus",
    "password": "tempore"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()
```


> Example response (500):

```json
{
    "message": "SQLSTATE[HY000] [2002] No connection could be made because the target machine actively refused it.\r\n (SQL: select count(*) as aggregate from `users` where `email` = thora.davis@example.com)",
    "exception": "Illuminate\\Database\\QueryException",
    "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php",
    "line": 671,
    "trace": [
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php",
            "line": 631,
            "function": "runQueryCallback",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php",
            "line": 339,
            "function": "run",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2260,
            "function": "select",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2248,
            "function": "runSelect",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2743,
            "function": "Illuminate\\Database\\Query\\{closure}",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2249,
            "function": "onceWithColumns",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2670,
            "function": "get",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2598,
            "function": "aggregate",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Validation\\DatabasePresenceVerifier.php",
            "line": 55,
            "function": "count",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Validation\\Concerns\\ValidatesAttributes.php",
            "line": 765,
            "function": "getCount",
            "class": "Illuminate\\Validation\\DatabasePresenceVerifier",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Validation\\Validator.php",
            "line": 547,
            "function": "validateUnique",
            "class": "Illuminate\\Validation\\Validator",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Validation\\Validator.php",
            "line": 370,
            "function": "validateAttribute",
            "class": "Illuminate\\Validation\\Validator",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Validation\\Validator.php",
            "line": 401,
            "function": "passes",
            "class": "Illuminate\\Validation\\Validator",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Validation\\ValidatesWhenResolvedTrait.php",
            "line": 25,
            "function": "fails",
            "class": "Illuminate\\Validation\\Validator",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Providers\\FormRequestServiceProvider.php",
            "line": 30,
            "function": "validateResolved",
            "class": "Illuminate\\Foundation\\Http\\FormRequest",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 1141,
            "function": "Illuminate\\Foundation\\Providers\\{closure}",
            "class": "Illuminate\\Foundation\\Providers\\FormRequestServiceProvider",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 1105,
            "function": "fireCallbackArray",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 1090,
            "function": "fireAfterResolvingCallbacks",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 711,
            "function": "fireResolvingCallbacks",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php",
            "line": 796,
            "function": "resolve",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 637,
            "function": "resolve",
            "class": "Illuminate\\Foundation\\Application",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php",
            "line": 781,
            "function": "make",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\RouteDependencyResolverTrait.php",
            "line": 79,
            "function": "make",
            "class": "Illuminate\\Foundation\\Application",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\RouteDependencyResolverTrait.php",
            "line": 48,
            "function": "transformDependency",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\RouteDependencyResolverTrait.php",
            "line": 28,
            "function": "resolveMethodDependencies",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 41,
            "function": "resolveClassMethodDependencies",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 239,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 196,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 685,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 59,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\sanctum\\src\\Http\\Middleware\\EnsureFrontendRequestsAreStateful.php",
            "line": 33,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Laravel\\Sanctum\\Http\\Middleware\\{closure}",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\sanctum\\src\\Http\\Middleware\\EnsureFrontendRequestsAreStateful.php",
            "line": 34,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 687,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 662,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 628,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 617,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 165,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 63,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 140,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 109,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 322,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 304,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 211,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 149,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 109,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 118,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "call_user_func_array"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 95,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 39,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 134,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\symfony\\console\\Application.php",
            "line": 911,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\symfony\\console\\Application.php",
            "line": 264,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\symfony\\console\\Application.php",
            "line": 140,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### Request
<small class="badge badge-black">POST</small>
 **`api/jwt/register`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>email</b></code>&nbsp; <small>string</small>     <br>
    The value must be a valid email address.

<code><b>name</b></code>&nbsp; <small>string</small>     <br>
    

<code><b>password</b></code>&nbsp; <small>string</small>     <br>
    



## Refresh a token.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/jwt/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/jwt/refresh"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/jwt/refresh',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/jwt/refresh'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```


> Example response (400):

```json
{
    "error": "There is problem with your token"
}
```

### Request
<small class="badge badge-black">POST</small>
 **`api/jwt/refresh`**



## Get the authenticated User




> Example request:

```bash
curl -X POST \
    "http://localhost/api/jwt/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/jwt/me"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/jwt/me',
    [
        'headers' => [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
import json

url = 'http://localhost/api/jwt/me'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-black">POST</small>
 **`api/jwt/me`**




