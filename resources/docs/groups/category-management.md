# Category Management
Class CategoryController

## Display a listing of the resource.

<small class="badge badge-darkred">requires authentication</small>

Get all products with their category from the database and display the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/categories" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/categories',
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

url = 'http://localhost/api/categories'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/categories`**



## Store a newly created resource in storage.

<small class="badge badge-darkred">requires authentication</small>

Perform validation of product creation request amd store product information on the database amd return the created resource.

> Example request:

```bash
curl -X POST \
    "http://localhost/api/categories" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "name=nam" \
    -F "photo=@C:\Users\gblend\AppData\Local\Temp\phpC925.tmp" 
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->post(
    'http://localhost/api/categories',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'name',
                'contents' => 'nam'
            ],
            [
                'name' => 'photo',
                'contents' => fopen('C:\Users\gblend\AppData\Local\Temp\phpC925.tmp', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
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
 **`api/categories`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>name</b></code>&nbsp; <small>string</small>     <br>
    

<code><b>photo</b></code>&nbsp; <small>file</small>     <br>
    The value must be a file.The value must be an image.



## Display the specified resource.

<small class="badge badge-darkred">requires authentication</small>

Get the information of a specified resource and display the information.

> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->get(
    'http://localhost/api/categories/1',
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

url = 'http://localhost/api/categories/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('GET', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-green">GET</small>
 **`api/categories/{category}`**



## Update the specified resource in storage.

<small class="badge badge-darkred">requires authentication</small>

Validate incoming request fdr resource update and update the resource on successful validation

> Example request:

```bash
curl -X PUT \
    "http://localhost/api/categories/1" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "name=necessitatibus" \
    -F "photo=@C:\Users\gblend\AppData\Local\Temp\phpD933.tmp" 
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->put(
    'http://localhost/api/categories/1',
    [
        'headers' => [
            'Content-Type' => 'multipart/form-data',
            'Accept' => 'application/json',
        ],
        'multipart' => [
            [
                'name' => 'name',
                'contents' => 'necessitatibus'
            ],
            [
                'name' => 'photo',
                'contents' => fopen('C:\Users\gblend\AppData\Local\Temp\phpD933.tmp', 'r')
            ],
        ],
    ]
);
$body = $response->getBody();
print_r(json_decode((string) $body));
```

```python
import requests
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
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-darkblue">PUT</small>
 **`api/categories/{category}`**

<small class="badge badge-purple">PATCH</small>
 **`api/categories/{category}`**

<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<code><b>name</b></code>&nbsp; <small>string</small>     <br>
    

<code><b>photo</b></code>&nbsp; <small>file</small>     <br>
    The value must be a file.The value must be an image.



## Remove the specified resource from storage.

<small class="badge badge-darkred">requires authentication</small>

Search if a particular resource exists and delete it if it does.

> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/categories/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
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
    .then(response => response.json())
    .then(json => console.log(json));
```

```php

$client = new \GuzzleHttp\Client();
$response = $client->delete(
    'http://localhost/api/categories/1',
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

url = 'http://localhost/api/categories/1'
headers = {
  'Content-Type': 'application/json',
  'Accept': 'application/json'
}

response = requests.request('DELETE', url, headers=headers)
response.json()
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### Request
<small class="badge badge-red">DELETE</small>
 **`api/categories/{category}`**




