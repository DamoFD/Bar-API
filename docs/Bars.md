---
layout: page
title: Bars
---

Welcome to the Bars section! Below you will learn how to interact with the bars CRUD functionality on the server.

### Table of Contents

* [Base URL](#base-url)
* [Headers](#headers)
* [Fetch All Bars](#fetch-all-bars)
    * [Fetch All Bars Request](#fetch-all-bars-request)
    * [Fetch All Bars Response](#fetch-all-bars-response)
    * [Fetch All Bars Example](#fetch-all-bars-example)
* [Fetch Single Bar](#fetch-single-bar)
    * [Fetch Single Bar Request](#fetch-single-bar-request)
    * [Fetch Single Bar Response](#fetch-single-bar-response)
    * [Fetch Single Bar Example](#fetch-single-bar-example)
* [Create Bar](#create-bar)
    * [Create Bar Request](#create-bar-request)
    * [Create Bar Response](#create-bar-response)
    * [Create Bar Example](#create-bar-example)
* [Update Bar](#update-bar)
    * [Update Bar Request](#update-bar-request)
    * [Update Bar Response](#update-bar-response)
    * [Update Bar Example](#update-bar-example)
* [Delete Bar](#delete-bar)
    * [Delete Bar Request](#delete-bar-request)
    * [Delete Bar Response](#delete-bar-response)
    * [Delete Bar Example](#delete-bar-example)

### Base URL

The base URL for the API is:

`https://barapi.cloud/api/v1/`

### Headers

All requests require the `Authorization` header with your `Bearer ACCESS_TOKEN`

If you need an `AccessToken`, visit the [OAuth](/Bar-API/OAuth) section

## Fetch All Bars

### Fetch All Bars Request
`GET /bars`

### Fetch All Bars Response

<table>
    <thead>
        <tr>
            <th>Field</th>
            <th>Type</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>data</td>
            <td>array</td>
            <td>array of bars</td>
        </tr>
        <tr>
            <td>id</td>
            <td>string</td>
            <td>bar identifier</td>
        </tr>
        <tr>
            <td>type</td>
            <td>string</td>
            <td>information type</td>
        </tr>
        <tr>
            <td>attributes</td>
            <td>object</td>
            <td>properties of the bar</td>
        </tr>
        <tr>
            <td>title</td>
            <td>string</td>
            <td>title of the bar</td>
        </tr>
        <tr>
            <td>content</td>
            <td>string</td>
            <td>content of the bar</td>
        </tr>
        <tr>
            <td>creator_id</td>
            <td>string</td>
            <td>user_id that created the bar</td>
        </tr>
        <tr>
            <td>created_at</td>
            <td>date-time</td>
            <td>timestamp of bar creation</td>
        </tr>
        <tr>
            <td>updated_at</td>
            <td>date-time</td>
            <td>timestamp of last bar update</td>
        </tr>
    </tbody>
</table>

{% highlight js %}
HTTP/1.1 200 OK
Status: 200 OK
Content-Type: application/json

{
    "data": [
        {
            "id": "1",
            "type": "Bars",
            "attributes": {
                "title": "Ellen Rippin",
                "content": "Sit quis excepturi voluptas ratione omnis eligendi.",
                "creator_id": "1",
                "created_at": "2023-09-26T05:25:36.000000Z",
                "updated_at": "2023-09-26T05:25:36.000000Z"
            }
        },
        {
            "id": "2",
            "type": "Bars",
            "attributes": {
                "title": "Example Bar",
                "content": "This is a sick bar!",
                "creator_id": "1",
                "created_at": "2023-09-26T05:25:36.000000Z",
                "updated_at": "2023-09-26T05:45:04.000000Z"
            }
        },
    ]
}
{% endhighlight %}

### Fetch All Bars Example
{% highlight js %}
import requests

url = 'https://barapi.cloud/api/v1/bars'

headers = {
    'Authorization': f'Bearer ACCESS_TOKEN',
}

response = requests.get(url, headers=headers)

print(response.json())
{% endhighlight %}

## Fetch Single Bar

### Fetch Single Bar Request
`GET /bars/{id}`

### Fetch Single Bar Response

<table>
  <thead>
    <tr>
      <th>Field</th>
      <th>Type</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>data</td>
      <td>object</td>
      <td>bar object</td>
    </tr>
    <tr>
      <td>id</td>
      <td>string</td>
      <td>bar identifier</td>
    </tr>
    <tr>
      <td>type</td>
      <td>string</td>
      <td>information type</td>
    </tr>
    <tr>
      <td>attributes</td>
      <td>object</td>
      <td>properties of the bar</td>
    </tr>
    <tr>
      <td>title</td>
      <td>string</td>
      <td>title of the bar</td>
    </tr>
    <tr>
        <td>content</td>
        <td>string</td>
        <td>content of the bar</td>
    </tr>
    <tr>
      <td>creator_id</td>
      <td>string</td>
      <td>user_id that created the bar</td>
    </tr>
    <tr>
      <td>created_at</td>
      <td>date-time</td>
      <td>timestamp of bar creation</td>
    </tr>
    <tr>
      <td>updated_at</td>
      <td>date-time</td>
      <td>timestamp of last bar update</td>
    </tr>
  </tbody>
</table>

{% highlight js %}
HTTP/1.1 200 OK
Status: 200 OK
Content-Type: application/json

{
"data": {
        "id": "1",
        "type": "Bars",
        "attributes": {
            "title": "Ellen Rippin",
            "content": "Sit quis excepturi voluptas ratione omnis eligendi.",
            "creator_id": "1",
            "created_at": "2023-09-26T05:25:36.000000Z",
            "updated_at": "2023-09-26T05:25:36.000000Z"
        }
    }
}
{% endhighlight %}

### Fetch Single Bar Example
{% highlight js %}
import requests

bar_id = 1

url = 'https://barapi.cloud/api/v1/artists/{bar_id}'

headers = {
    'Authorization': f'Bearer ACCESS_TOKEN',
}

response = requests.get(url, headers=headers)

print(response.json())
{% endhighlight %}

## Create Bar

### Create Bar Request
`POST /bars`

<table>
  <thead>
    <tr>
      <th>Field</th>
      <th>Type</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>title</td>
      <td>string</td>
      <td>title of the bar</td>
    </tr>
    <tr>
      <td>content</td>
      <td>string</td>
      <td>content of the bar</td>
    </tr>
  </tbody>
</table>

{% highlight js %}
{
"request": {
    "method": "POST",
    "endpoint": "/bars",
    "body": {[
        "title": "Example Bar",
        "content": "This is my sick bar"
    ]}
}
{% endhighlight %}

### Create Bar Response

<table>
  <thead>
    <tr>
      <th>Field</th>
      <th>Type</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>data</td>
      <td>object</td>
      <td>bar object</td>
    </tr>
    <tr>
      <td>id</td>
      <td>string</td>
      <td>bar identifier</td>
    </tr>
    <tr>
      <td>type</td>
      <td>string</td>
      <td>information type</td>
    </tr>
    <tr>
      <td>attributes</td>
      <td>object</td>
      <td>properties of the bar</td>
    </tr>
    <tr>
      <td>title</td>
      <td>string</td>
      <td>title of the bar</td>
    </tr>
    <tr>
        <td>content</td>
        <td>string</td>
        <td>content of the bar</td>
    </tr>
    <tr>
      <td>creator_id</td>
      <td>string</td>
      <td>user_id that created the bar</td>
    </tr>
    <tr>
      <td>created_at</td>
      <td>date-time</td>
      <td>timestamp of bar creation</td>
    </tr>
    <tr>
      <td>updated_at</td>
      <td>date-time</td>
      <td>timestamp of last bar update</td>
    </tr>
  </tbody>
</table>

{% highlight js %}
HTTP/1.1 201 Created
Status: 201 Created
Content-Type: application/json

{
"data": {
        "id": "1",
        "type": "Bars",
        "attributes": {
            "title": "Ellen Rippin",
            "content": "Sit quis excepturi voluptas ratione omnis eligendi.",
            "creator_id": "1",
            "created_at": "2023-09-26T05:25:36.000000Z",
            "updated_at": "2023-09-26T05:25:36.000000Z"
        }
    }
}
{% endhighlight %}

### Create Bar Example
{% highlight js %}
import requests

url = 'https://barapi.cloud/api/v1/bars'

headers = {
    'Authorization': f'Bearer ACCESS_TOKEN',
}

payload = {[
    'title': 'Example Bar',
    'content': 'This is my sick bar'
]}

response = requests.post(url, headers=headers, json=payload)

print(response.json())
{% endhighlight %}

## Update Bar

### Update Bar Request
`PUT /bars/{id}`

<table>
  <thead>
    <tr>
      <th>Field</th>
      <th>Type</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>title</td>
      <td>string</td>
      <td>title of the bar</td>
    </tr>
    <tr>
      <td>content</td>
      <td>string</td>
      <td>content of the bar</td>
    </tr>
  </tbody>
</table>

{% highlight js %}
{
"request": {
    "method": "PUT",
    "endpoint": "/bars",
    "body": {[
        "title": "Example Bar",
        "content": "This is my sick bar"
    ]}
}
{% endhighlight %}

### Update Bar Response

<table>
  <thead>
    <tr>
      <th>Field</th>
      <th>Type</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>data</td>
      <td>object</td>
      <td>bar object</td>
    </tr>
    <tr>
      <td>id</td>
      <td>string</td>
      <td>bar identifier</td>
    </tr>
    <tr>
      <td>type</td>
      <td>string</td>
      <td>information type</td>
    </tr>
    <tr>
      <td>attributes</td>
      <td>object</td>
      <td>properties of the bar</td>
    </tr>
    <tr>
      <td>title</td>
      <td>string</td>
      <td>title of the bar</td>
    </tr>
    <tr>
        <td>content</td>
        <td>string</td>
        <td>content of the bar</td>
    </tr>
    <tr>
      <td>creator_id</td>
      <td>string</td>
      <td>user_id that created the bar</td>
    </tr>
    <tr>
      <td>created_at</td>
      <td>date-time</td>
      <td>timestamp of bar creation</td>
    </tr>
    <tr>
      <td>updated_at</td>
      <td>date-time</td>
      <td>timestamp of last bar update</td>
    </tr>
  </tbody>
</table>

{% highlight js %}
HTTP/1.1 200 OK
Status: 200 OK
Content-Type: application/json

{
"data": {
        "id": "1",
        "type": "Bars",
        "attributes": {
            "title": "Ellen Rippin",
            "content": "Sit quis excepturi voluptas ratione omnis eligendi.",
            "creator_id": "1",
            "created_at": "2023-09-26T05:25:36.000000Z",
            "updated_at": "2023-09-26T05:25:36.000000Z"
        }
    }
}
{% endhighlight %}

### Update Bar Example
{% highlight js %}
import requests

bar_id = 1

url = 'https://barapi.cloud/api/v1/bars/{bar_id}'

headers = {
    'Authorization': f'Bearer ACCESS_TOKEN',
}

payload = {[
    'title': 'Example Bar',
    'content': 'This is my sick bar'
]}

response = requests.put(url, headers=headers, json=payload)

print(response.json())
{% endhighlight %}

## Delete Bar

### Delete Bar Request
`DELETE /bars/{id}`

### Delete Bar Response

{% highlight js %}
HTTP/1.1 204 No Content
Status: 204 No Content
Content-Type: application/json
{% endhighlight %}

### Delete Bar Example
{% highlight js %}
import requests

bar_id = 1

url = 'https://barapi.cloud/api/v1/artists/{bar_id}'

headers = {
    'Authorization': f'Bearer ACCESS_TOKEN',
}

response = requests.delete(url, headers=headers)

print(response.json())
{% endhighlight %}
