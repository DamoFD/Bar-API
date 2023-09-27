---
layout: page
title: Artists
---

Welcome to the Artists section! Below you will learn how to interact with the artists CRUD functionality on the server.

### Table of Contents

* [Base URL](#base-url)
* [Headers](#headers)
* [Fetch All Artists](#fetch-all-artists)
    * [Fetch All Artists Request](#fetch-all-artists-request)
    * [Fetch All Artists Response](#fetch-all-artists-response)
    * [Fetch All Artists Example](#fetch-all-artists-example)
* [Fetch Single Artist](#fetch-single-artist)
    * [Fetch Single Artist Request](#fetch-single-artist-request)
    * [Fetch Single Artist Response](#fetch-single-artist-response)
    * [Fetch Single Artist Example](#fetch-single-artist-example)
* [Create Artist](#create-artist)
    * [Create Artist Request](#create-artist-request)
    * [Create Artist Response](#create-artist-response)
    * [Create Artist Example](#create-artist-example)
* [Update Artist](#update-artist)
    * [Update Artist Request](#update-artist-request)
    * [Update Artist Response](#update-artist-response)
    * [Update Artist Example](#update-artist-example)
* [Delete Artist](#delete-artist)
    * [Delete Artist Request](#delete-artist-request)
    * [Delete Artist Response](#delete-artist-response)
    * [Delete Artist Example](#delete-artist-example)

### Base URL

The base URL for the API is:

`https://barapi.cloud/api/v1/`

### Headers

All requests require the `Authorization` header with your `Bearer ACCESS_TOKEN`

If you need an `AccessToken`, visit the [OAuth](/Bar-API/OAuth) section

## Fetch All Artists

### Fetch All Artists Request
`GET /artists`

### Fetch All Artists Response

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
      <td>array of artists</td>
    </tr>
    <tr>
      <td>id</td>
      <td>string</td>
      <td>artist identifier</td>
    </tr>
    <tr>
      <td>type</td>
      <td>string</td>
      <td>information type</td>
    </tr>
    <tr>
      <td>attributes</td>
      <td>object</td>
      <td>properties of the artist</td>
    </tr>
    <tr>
      <td>name</td>
      <td>string</td>
      <td>name of the artist</td>
    </tr>
    <tr>
      <td>songs</td>
      <td>array</td>
      <td>array of <a href="/Bar-API/Songs">songs</a> by the artist</td>
    </tr>
    <tr>
      <td>creator_id</td>
      <td>string</td>
      <td>user_id that created the artist</td>
    </tr>
    <tr>
      <td>created_at</td>
      <td>date-time</td>
      <td>timestamp of artist creation</td>
    </tr>
    <tr>
      <td>updated_at</td>
      <td>date-time</td>
      <td>timestamp of last artist update</td>
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
        "type": "Artists",
        "attributes": {
            "name": "John Doe",
            "songs": [],
            "creator_id": "1",
            "created_at": "2023-09-26T03:41:35.000000Z",
            "updated_at": "2023-09-26T04:10:05.000000Z"
        }
    },
    {
        "id": "2",
        "type": "Artists",
        "attributes": {
            "name": "Erwin Cartwright",
            "songs": [],
            "creator_id": "1",
            "created_at": "2023-09-26T03:41:35.000000Z",
            "updated_at": "2023-09-26T03:41:35.000000Z"
        }
    },
    {
        "id": "4",
        "type": "Artists",
        "attributes": {
            "name": "Vernice Brekke",
            "songs": [],
            "creator_id": "1",
            "created_at": "2023-09-26T03:41:35.000000Z",
            "updated_at": "2023-09-26T03:41:35.000000Z"
        }
    }
]
}
{% endhighlight %}

### Fetch All Artists Example
{% highlight js %}
import requests

url = 'https://barapi.cloud/api/v1/artists'

headers = {
    'Authorization': f'Bearer ACCESS_TOKEN',
}

response = requests.get(url, headers=headers)

print(response.json())
{% endhighlight %}

## Fetch Single Artist

### Fetch Single Artist Request
`GET /artists/{id}`

### Fetch Single Artist Response

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
      <td>contains artist object</td>
    </tr>
    <tr>
      <td>id</td>
      <td>string</td>
      <td>artist identifier</td>
    </tr>
    <tr>
      <td>type</td>
      <td>string</td>
      <td>information type</td>
    </tr>
    <tr>
      <td>attributes</td>
      <td>object</td>
      <td>properties of the artist</td>
    </tr>
    <tr>
      <td>name</td>
      <td>string</td>
      <td>name of the artist</td>
    </tr>
    <tr>
      <td>songs</td>
      <td>array</td>
      <td>array of <a href="/Bar-API/Songs">songs</a> by the artist</td>
    </tr>
    <tr>
      <td>creator_id</td>
      <td>string</td>
      <td>user_id that created the artist</td>
    </tr>
    <tr>
      <td>created_at</td>
      <td>date-time</td>
      <td>timestamp of artist creation</td>
    </tr>
    <tr>
      <td>updated_at</td>
      <td>date-time</td>
      <td>timestamp of last artist update</td>
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
        "type": "Artists",
        "attributes": {
            "name": "John Doe",
            "songs": [],
            "creator_id": "1",
            "created_at": "2023-09-26T03:41:35.000000Z",
            "updated_at": "2023-09-26T04:10:05.000000Z"
        }
    }
}
{% endhighlight %}

### Fetch Single Artist Example
{% highlight js %}
import requests

artist_id = 1

url = 'https://barapi.cloud/api/v1/artists/{artist_id}'

headers = {
    'Authorization': f'Bearer ACCESS_TOKEN',
}

response = requests.get(url, headers=headers)

print(response.json())
{% endhighlight %}

## Create Artist

### Create Artist Request
`POST /artists`

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
      <td>name</td>
      <td>string</td>
      <td>name of the artist</td>
    </tr>
  </tbody>
</table>

{% highlight js %}
{
"request": {
    "method": "POST",
    "endpoint": "/artists",
    "body": {
        "name": "John Doe"
    }
}
{% endhighlight %}
### Create Artist Response

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
      <td>contains artist object</td>
    </tr>
    <tr>
      <td>id</td>
      <td>string</td>
      <td>artist identifier</td>
    </tr>
    <tr>
      <td>type</td>
      <td>string</td>
      <td>information type</td>
    </tr>
    <tr>
      <td>attributes</td>
      <td>object</td>
      <td>properties of the artist</td>
    </tr>
    <tr>
      <td>name</td>
      <td>string</td>
      <td>name of the artist</td>
    </tr>
    <tr>
      <td>songs</td>
      <td>array</td>
      <td>array of <a href="/Bar-API/Songs">songs</a> by the artist</td>
    </tr>
    <tr>
      <td>creator_id</td>
      <td>string</td>
      <td>user_id that created the artist</td>
    </tr>
    <tr>
      <td>created_at</td>
      <td>date-time</td>
      <td>timestamp of artist creation</td>
    </tr>
    <tr>
      <td>updated_at</td>
      <td>date-time</td>
      <td>timestamp of last artist update</td>
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
        "type": "Artists",
        "attributes": {
            "name": "John Doe",
            "songs": [],
            "creator_id": "1",
            "created_at": "2023-09-26T03:41:35.000000Z",
            "updated_at": "2023-09-26T04:10:05.000000Z"
        }
    }
}
{% endhighlight %}

### Create Artist Example
{% highlight js %}
import requests

url = 'https://barapi.cloud/api/v1/artists'

headers = {
    'Authorization': f'Bearer ACCESS_TOKEN',
}

payload = {
    'name': 'John Doe'
}

response = requests.post(url, headers=headers, json=payload)

print(response.json())
{% endhighlight %}

## Update Artist

### Update Artist Request
`PUT /artists/{id}`

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
      <td>name</td>
      <td>string</td>
      <td>name of the artist</td>
    </tr>
  </tbody>
</table>

{% highlight js %}
{
"request": {
    "method": "PUT",
    "endpoint": "/artists/{id}",
    "body": {
        "name": "John Doe"
    }
}
{% endhighlight %}
### Update Artist Response

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
      <td>contains artist object</td>
    </tr>
    <tr>
      <td>id</td>
      <td>string</td>
      <td>artist identifier</td>
    </tr>
    <tr>
      <td>type</td>
      <td>string</td>
      <td>information type</td>
    </tr>
    <tr>
      <td>attributes</td>
      <td>object</td>
      <td>properties of the artist</td>
    </tr>
    <tr>
      <td>name</td>
      <td>string</td>
      <td>name of the artist</td>
    </tr>
    <tr>
      <td>songs</td>
      <td>array</td>
      <td>array of <a href="/Bar-API/Songs">songs</a> by the artist</td>
    </tr>
    <tr>
      <td>creator_id</td>
      <td>string</td>
      <td>user_id that created the artist</td>
    </tr>
    <tr>
      <td>created_at</td>
      <td>date-time</td>
      <td>timestamp of artist creation</td>
    </tr>
    <tr>
      <td>updated_at</td>
      <td>date-time</td>
      <td>timestamp of last artist update</td>
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
        "type": "Artists",
        "attributes": {
            "name": "John Doe",
            "songs": [],
            "creator_id": "1",
            "created_at": "2023-09-26T03:41:35.000000Z",
            "updated_at": "2023-09-26T04:10:05.000000Z"
        }
    }
}
{% endhighlight %}

### Update Artist Example
{% highlight js %}
import requests

artist_id = 1

url = 'https://barapi.cloud/api/v1/artists/{artist_id}'

headers = {
    'Authorization': f'Bearer ACCESS_TOKEN',
}

payload = {
    'name': 'John Doe'
}

response = requests.put(url, headers=headers, json=payload)

print(response.json())
{% endhighlight %}

## Delete Artist

### Delete Artist Request
`DELETE /artists/{id}`

### Delete Artist Response

{% highlight js %}
HTTP/1.1 204 No Content
Status: 204 No Content
Content-Type: application/json
{% endhighlight %}

### Delete Artist Example
{% highlight js %}
import requests

artist_id = 1

url = 'https://barapi.cloud/api/v1/artists/{artist_id}'

headers = {
    'Authorization': f'Bearer ACCESS_TOKEN',
}

response = requests.delete(url, headers=headers)

print(response.json())
{% endhighlight %}
