<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>productAPI</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/style.css") }}" media="screen" />
        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/print.css") }}" media="print" />
        <script src="{{ asset("vendor/scribe/js/all.js") }}"></script>

        <link rel="stylesheet" href="{{ asset("vendor/scribe/css/highlight-darcula.css") }}" media="" />
        <script src="{{ asset("vendor/scribe/js/highlight.pack.js") }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</head>

<body class="" data-languages="[&quot;bash&quot;,&quot;javascript&quot;,&quot;php&quot;,&quot;python&quot;]">
<a href="#" id="nav-button">
      <span>
        NAV
            <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="-image" class=""/>
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                            <a href="#" data-language-name="php">php</a>
                            <a href="#" data-language-name="python">python</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.json") }}">View Postman Collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI (Swagger) Spec</a></li>
                            <li><a href='http://github.com/knuckleswtf/scribe'>Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: September 1 2020</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>Welcome to our productAPI documentation!</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile), and you can switch the programming language of the examples with the tabs in the top right (or from the nav menu at the top left on mobile).</aside><h1>Authenticating requests</h1>
<p>This API is not authenticated.</p><h1>Category Management</h1>
<p>Class CategoryController</p>
<h2>Display a listing of the resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Get all products with their category from the database and display the resource.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/categories"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/categories',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/categories'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>api/categories</code></strong></p>
<h2>Store a newly created resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Perform validation of product creation request amd store product information on the database amd return the created resource.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/categories" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "name=nam" \
    -F "photo=@C:\Users\gblend\AppData\Local\Temp\phpC925.tmp" </code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/categories"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'nam');
body.append('photo', document.querySelector('input[name="photo"]').files[0]);

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/categories',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'multipart/form-data',
            'Accept' =&gt; 'application/json',
        ],
        'multipart' =&gt; [
            [
                'name' =&gt; 'name',
                'contents' =&gt; 'nam'
            ],
            [
                'name' =&gt; 'photo',
                'contents' =&gt; fopen('C:\Users\gblend\AppData\Local\Temp\phpC925.tmp', 'r')
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/categories'
files = {
  'photo': open('C:\Users\gblend\AppData\Local\Temp\phpC925.tmp', 'rb')
}
payload = {
    "name": "nam"
}
headers = {
  'Content-Type': 'multipart/form-data',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, files=files, data=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-black">POST</small>
<strong><code>api/categories</code></strong></p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p><code><b>name</b></code>&nbsp; <small>string</small>     <br></p>
<p><code><b>photo</b></code>&nbsp; <small>file</small>     <br>
The value must be a file.The value must be an image.</p>
<h2>Display the specified resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Get the information of a specified resource and display the information.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/categories/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/categories/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>api/categories/{category}</code></strong></p>
<h2>Update the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Validate incoming request fdr resource update and update the resource on successful validation</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/categories/1" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "name=necessitatibus" \
    -F "photo=@C:\Users\gblend\AppData\Local\Temp\phpD933.tmp" </code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/categories/1"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('name', 'necessitatibus');
body.append('photo', document.querySelector('input[name="photo"]').files[0]);

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost/api/categories/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'multipart/form-data',
            'Accept' =&gt; 'application/json',
        ],
        'multipart' =&gt; [
            [
                'name' =&gt; 'name',
                'contents' =&gt; 'necessitatibus'
            ],
            [
                'name' =&gt; 'photo',
                'contents' =&gt; fopen('C:\Users\gblend\AppData\Local\Temp\phpD933.tmp', 'r')
            ],
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/categories/1'
files = {
  'photo': open('C:\Users\gblend\AppData\Local\Temp\phpD933.tmp', 'rb')
}
payload = {
    "name": "necessitatibus"
}
headers = {
  'Content-Type': 'multipart/form-data',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, files=files, data=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-darkblue">PUT</small>
<strong><code>api/categories/{category}</code></strong></p>
<p><small class="badge badge-purple">PATCH</small>
<strong><code>api/categories/{category}</code></strong></p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p><code><b>name</b></code>&nbsp; <small>string</small>     <br></p>
<p><code><b>photo</b></code>&nbsp; <small>file</small>     <br>
The value must be a file.The value must be an image.</p>
<h2>Remove the specified resource from storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Search if a particular resource exists and delete it if it does.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/categories/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost/api/categories/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/categories/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-red">DELETE</small>
<strong><code>api/categories/{category}</code></strong></p><h1>JWT authentication and token handling</h1>
<p>All jwt related authentication and authorization</p>
<p>Class AuthController</p>
<h2>Get a JWT token via given credentials.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/jwt/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"reilly.mireya@example.org","password":"quaerat"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/jwt/login',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'email' =&gt; 'reilly.mireya@example.org',
            'password' =&gt; 'quaerat',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
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
response.json()</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The given data was invalid.",
    "errors": {
        "password": [
            "The password must be at least 8 characters."
        ]
    }
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-black">POST</small>
<strong><code>api/jwt/login</code></strong></p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p><code><b>email</b></code>&nbsp; <small>string</small>     <br>
The value must be a valid email address.</p>
<p><code><b>password</b></code>&nbsp; <small>string</small>     <br></p>
<h2>Log the user out (Invalidate the token)</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/jwt/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/jwt/logout',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/jwt/logout'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-black">POST</small>
<strong><code>api/jwt/logout</code></strong></p>
<h2>Register a new user</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/jwt/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"thora.davis@example.com","name":"doloribus","password":"tempore"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/jwt/register',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'email' =&gt; 'thora.davis@example.com',
            'name' =&gt; 'doloribus',
            'password' =&gt; 'tempore',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
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
response.json()</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
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
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php",
            "line": 339,
            "function": "run",
            "class": "Illuminate\\Database\\Connection",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2260,
            "function": "select",
            "class": "Illuminate\\Database\\Connection",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2248,
            "function": "runSelect",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2743,
            "function": "Illuminate\\Database\\Query\\{closure}",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2249,
            "function": "onceWithColumns",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2670,
            "function": "get",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2598,
            "function": "aggregate",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Validation\\DatabasePresenceVerifier.php",
            "line": 55,
            "function": "count",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Validation\\Concerns\\ValidatesAttributes.php",
            "line": 765,
            "function": "getCount",
            "class": "Illuminate\\Validation\\DatabasePresenceVerifier",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Validation\\Validator.php",
            "line": 547,
            "function": "validateUnique",
            "class": "Illuminate\\Validation\\Validator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Validation\\Validator.php",
            "line": 370,
            "function": "validateAttribute",
            "class": "Illuminate\\Validation\\Validator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Validation\\Validator.php",
            "line": 401,
            "function": "passes",
            "class": "Illuminate\\Validation\\Validator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Validation\\ValidatesWhenResolvedTrait.php",
            "line": 25,
            "function": "fails",
            "class": "Illuminate\\Validation\\Validator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Providers\\FormRequestServiceProvider.php",
            "line": 30,
            "function": "validateResolved",
            "class": "Illuminate\\Foundation\\Http\\FormRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 1141,
            "function": "Illuminate\\Foundation\\Providers\\{closure}",
            "class": "Illuminate\\Foundation\\Providers\\FormRequestServiceProvider",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 1105,
            "function": "fireCallbackArray",
            "class": "Illuminate\\Container\\Container",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 1090,
            "function": "fireAfterResolvingCallbacks",
            "class": "Illuminate\\Container\\Container",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 711,
            "function": "fireResolvingCallbacks",
            "class": "Illuminate\\Container\\Container",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php",
            "line": 796,
            "function": "resolve",
            "class": "Illuminate\\Container\\Container",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 637,
            "function": "resolve",
            "class": "Illuminate\\Foundation\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php",
            "line": 781,
            "function": "make",
            "class": "Illuminate\\Container\\Container",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\RouteDependencyResolverTrait.php",
            "line": 79,
            "function": "make",
            "class": "Illuminate\\Foundation\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\RouteDependencyResolverTrait.php",
            "line": 48,
            "function": "transformDependency",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\RouteDependencyResolverTrait.php",
            "line": 28,
            "function": "resolveMethodDependencies",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 41,
            "function": "resolveClassMethodDependencies",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 239,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 196,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 685,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 59,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\sanctum\\src\\Http\\Middleware\\EnsureFrontendRequestsAreStateful.php",
            "line": 33,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Laravel\\Sanctum\\Http\\Middleware\\{closure}",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\sanctum\\src\\Http\\Middleware\\EnsureFrontendRequestsAreStateful.php",
            "line": 34,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 687,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 662,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 628,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 617,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 165,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 63,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 140,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 109,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 322,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 304,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 211,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 149,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 109,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 118,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
        },
        {
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
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
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\symfony\\console\\Application.php",
            "line": 911,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\symfony\\console\\Application.php",
            "line": 264,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\symfony\\console\\Application.php",
            "line": 140,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "-&gt;"
        }
    ]
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-black">POST</small>
<strong><code>api/jwt/register</code></strong></p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p><code><b>email</b></code>&nbsp; <small>string</small>     <br>
The value must be a valid email address.</p>
<p><code><b>name</b></code>&nbsp; <small>string</small>     <br></p>
<p><code><b>password</b></code>&nbsp; <small>string</small>     <br></p>
<h2>Refresh a token.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/jwt/refresh" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/jwt/refresh',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/jwt/refresh'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (400):</p>
</blockquote>
<pre><code class="language-json">{
    "error": "There is problem with your token"
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-black">POST</small>
<strong><code>api/jwt/refresh</code></strong></p>
<h2>Get the authenticated User</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/jwt/me" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
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
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/jwt/me',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/jwt/me'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-black">POST</small>
<strong><code>api/jwt/me</code></strong></p><h1>Product Management</h1>
<p>Class ProductController</p>
<h2>Display a listing of the resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Get all products with their category from the database and display the resource.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/products',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/products'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>api/products</code></strong></p>
<h2>Store a newly created resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Perform validation of product creation request amd store product information on the database amd return the created resource.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"fugiat","category_id":1.06112083,"description":"qui","price":34517}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "fugiat",
    "category_id": 1.06112083,
    "description": "qui",
    "price": 34517
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/products',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'fugiat',
            'category_id' =&gt; 1.06112083,
            'description' =&gt; 'qui',
            'price' =&gt; 34517.0,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/products'
payload = {
    "name": "fugiat",
    "category_id": 1.06112083,
    "description": "qui",
    "price": 34517
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-black">POST</small>
<strong><code>api/products</code></strong></p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p><code><b>name</b></code>&nbsp; <small>string</small>     <br></p>
<p><code><b>category_id</b></code>&nbsp; <small>number</small>     <br></p>
<p><code><b>description</b></code>&nbsp; <small>string</small>     <br></p>
<p><code><b>price</b></code>&nbsp; <small>number</small>     <br></p>
<h2>Display the specified resource.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Get the information of a specified resource and display the information.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;get(
    'http://localhost/api/products/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/products/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-green">GET</small>
<strong><code>api/products/{product}</code></strong></p>
<h2>Update the specified resource in storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Validate incoming request fdr resource update and update the resource on successful validation</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X PUT \
    "http://localhost/api/products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"dolores","category_id":0.454150526,"description":"deserunt","price":0.91526}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "dolores",
    "category_id": 0.454150526,
    "description": "deserunt",
    "price": 0.91526
}

fetch(url, {
    method: "PUT",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;put(
    'http://localhost/api/products/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'name' =&gt; 'dolores',
            'category_id' =&gt; 0.454150526,
            'description' =&gt; 'deserunt',
            'price' =&gt; 0.91526,
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/products/1'
payload = {
    "name": "dolores",
    "category_id": 0.454150526,
    "description": "deserunt",
    "price": 0.91526
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('PUT', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-darkblue">PUT</small>
<strong><code>api/products/{product}</code></strong></p>
<p><small class="badge badge-purple">PATCH</small>
<strong><code>api/products/{product}</code></strong></p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p><code><b>name</b></code>&nbsp; <small>string</small>     <br></p>
<p><code><b>category_id</b></code>&nbsp; <small>number</small>     <br></p>
<p><code><b>description</b></code>&nbsp; <small>string</small>     <br></p>
<p><code><b>price</b></code>&nbsp; <small>number</small>     <br></p>
<h2>Remove the specified resource from storage.</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Search if a particular resource exists and delete it if it does.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X DELETE \
    "http://localhost/api/products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;delete(
    'http://localhost/api/products/1',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/products/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-red">DELETE</small>
<strong><code>api/products/{product}</code></strong></p><h1>Sanctum authentication and token handling</h1>
<p>Class UserController</p>
<h2>Register new user</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Provide the required parameters to create a user account</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/sanctum/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"delbert37@example.com","name":"expedita","password":"quibusdam"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/sanctum/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "delbert37@example.com",
    "name": "expedita",
    "password": "quibusdam"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/sanctum/register',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'email' =&gt; 'delbert37@example.com',
            'name' =&gt; 'expedita',
            'password' =&gt; 'quibusdam',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/sanctum/register'
payload = {
    "email": "delbert37@example.com",
    "name": "expedita",
    "password": "quibusdam"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "SQLSTATE[HY000] [2002] No connection could be made because the target machine actively refused it.\r\n (SQL: select count(*) as aggregate from `users` where `email` = delbert37@example.com)",
    "exception": "Illuminate\\Database\\QueryException",
    "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php",
    "line": 671,
    "trace": [
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php",
            "line": 631,
            "function": "runQueryCallback",
            "class": "Illuminate\\Database\\Connection",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php",
            "line": 339,
            "function": "run",
            "class": "Illuminate\\Database\\Connection",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2260,
            "function": "select",
            "class": "Illuminate\\Database\\Connection",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2248,
            "function": "runSelect",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2743,
            "function": "Illuminate\\Database\\Query\\{closure}",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2249,
            "function": "onceWithColumns",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2670,
            "function": "get",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2598,
            "function": "aggregate",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Validation\\DatabasePresenceVerifier.php",
            "line": 55,
            "function": "count",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Validation\\Concerns\\ValidatesAttributes.php",
            "line": 765,
            "function": "getCount",
            "class": "Illuminate\\Validation\\DatabasePresenceVerifier",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Validation\\Validator.php",
            "line": 547,
            "function": "validateUnique",
            "class": "Illuminate\\Validation\\Validator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Validation\\Validator.php",
            "line": 370,
            "function": "validateAttribute",
            "class": "Illuminate\\Validation\\Validator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Validation\\Validator.php",
            "line": 401,
            "function": "passes",
            "class": "Illuminate\\Validation\\Validator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Validation\\ValidatesWhenResolvedTrait.php",
            "line": 25,
            "function": "fails",
            "class": "Illuminate\\Validation\\Validator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Providers\\FormRequestServiceProvider.php",
            "line": 30,
            "function": "validateResolved",
            "class": "Illuminate\\Foundation\\Http\\FormRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 1141,
            "function": "Illuminate\\Foundation\\Providers\\{closure}",
            "class": "Illuminate\\Foundation\\Providers\\FormRequestServiceProvider",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 1105,
            "function": "fireCallbackArray",
            "class": "Illuminate\\Container\\Container",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 1090,
            "function": "fireAfterResolvingCallbacks",
            "class": "Illuminate\\Container\\Container",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 711,
            "function": "fireResolvingCallbacks",
            "class": "Illuminate\\Container\\Container",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php",
            "line": 796,
            "function": "resolve",
            "class": "Illuminate\\Container\\Container",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 637,
            "function": "resolve",
            "class": "Illuminate\\Foundation\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Application.php",
            "line": 781,
            "function": "make",
            "class": "Illuminate\\Container\\Container",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\RouteDependencyResolverTrait.php",
            "line": 79,
            "function": "make",
            "class": "Illuminate\\Foundation\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\RouteDependencyResolverTrait.php",
            "line": 48,
            "function": "transformDependency",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\RouteDependencyResolverTrait.php",
            "line": 28,
            "function": "resolveMethodDependencies",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 41,
            "function": "resolveClassMethodDependencies",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 239,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 196,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 685,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 59,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\sanctum\\src\\Http\\Middleware\\EnsureFrontendRequestsAreStateful.php",
            "line": 33,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Laravel\\Sanctum\\Http\\Middleware\\{closure}",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\sanctum\\src\\Http\\Middleware\\EnsureFrontendRequestsAreStateful.php",
            "line": 34,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 687,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 662,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 628,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 617,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 165,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 63,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 140,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 109,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 322,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 304,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 211,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 149,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 109,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 118,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
        },
        {
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
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
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\symfony\\console\\Application.php",
            "line": 911,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\symfony\\console\\Application.php",
            "line": 264,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\symfony\\console\\Application.php",
            "line": 140,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "-&gt;"
        }
    ]
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-black">POST</small>
<strong><code>api/sanctum/register</code></strong></p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p><code><b>email</b></code>&nbsp; <small>string</small>     <br>
The value must be a valid email address.</p>
<p><code><b>name</b></code>&nbsp; <small>string</small>     <br></p>
<p><code><b>password</b></code>&nbsp; <small>string</small>     <br></p>
<h2>Attempt user login and issue token</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Provide valid authentication credentials</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/sanctum/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"qhuels@example.com","password":"ducimus"}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/sanctum/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "qhuels@example.com",
    "password": "ducimus"
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/sanctum/login',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
        'json' =&gt; [
            'email' =&gt; 'qhuels@example.com',
            'password' =&gt; 'ducimus',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/sanctum/login'
payload = {
    "email": "qhuels@example.com",
    "password": "ducimus"
}
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers, json=payload)
response.json()</code></pre>
<blockquote>
<p>Example response (422):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "The given data was invalid.",
    "errors": {
        "password": [
            "The password must be at least 8 characters."
        ]
    }
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-black">POST</small>
<strong><code>api/sanctum/login</code></strong></p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p><code><b>email</b></code>&nbsp; <small>string</small>     <br>
The value must be a valid email address.</p>
<p><code><b>password</b></code>&nbsp; <small>string</small>     <br></p>
<h2>Logout user</h2>
<p><small class="badge badge-darkred">requires authentication</small></p>
<p>Revoke user session access and authentication</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/sanctum/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/sanctum/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<pre><code class="language-php">
$client = new \GuzzleHttp\Client();
$response = $client-&gt;post(
    'http://localhost/api/sanctum/logout',
    [
        'headers' =&gt; [
            'Content-Type' =&gt; 'application/json',
            'Accept' =&gt; 'application/json',
        ],
    ]
);
$body = $response-&gt;getBody();
print_r(json_decode((string) $body));</code></pre>
<pre><code class="language-python">import requests
import json

url = 'http://localhost/api/sanctum/logout'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('POST', url, headers=headers)
response.json()</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Call to a member function currentAccessToken() on null",
    "exception": "Error",
    "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\app\\Http\\Controllers\\UserController.php",
    "line": 85,
    "trace": [
        {
            "function": "logout",
            "class": "App\\Http\\Controllers\\UserController",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Controller.php",
            "line": 54,
            "function": "call_user_func_array"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 239,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Route.php",
            "line": 196,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 685,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\SubstituteBindings.php",
            "line": 41,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 59,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\sanctum\\src\\Http\\Middleware\\EnsureFrontendRequestsAreStateful.php",
            "line": 33,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Laravel\\Sanctum\\Http\\Middleware\\{closure}",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\sanctum\\src\\Http\\Middleware\\EnsureFrontendRequestsAreStateful.php",
            "line": 34,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Laravel\\Sanctum\\Http\\Middleware\\EnsureFrontendRequestsAreStateful",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 687,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 662,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 628,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 617,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 165,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 63,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 140,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 109,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 322,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 304,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 211,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 149,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 109,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 118,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
        },
        {
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "-&gt;"
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
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 258,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\symfony\\console\\Application.php",
            "line": 911,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\symfony\\console\\Application.php",
            "line": 264,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\symfony\\console\\Application.php",
            "line": 140,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "-&gt;"
        },
        {
            "file": "C:\\xampp\\htdocs\\productAPI\\productAPI\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "-&gt;"
        }
    ]
}</code></pre>
<h3>Request</h3>
<p><small class="badge badge-black">POST</small>
<strong><code>api/sanctum/logout</code></strong></p>
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                                    <a href="#" data-language-name="php">php</a>
                                    <a href="#" data-language-name="python">python</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var languages = ["bash","javascript","php","python"];
        setupLanguages(languages);
    });
</script>
</body>
</html>