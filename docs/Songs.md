---
layout: page
title: Songs
---

Welcome to the Songs section! Below you will learn how to interact with the songs CRUD functionality on the server.

### Table of Contents

* [Base URL](#base-url)
* [Headers](#headers)
* [Fetch All Songs](#fetch-all-songs)
    * [Fetch All Songs Request](#fetch-all-songs-request)
    * [Fetch All Songs Response](#fetch-all-songs-response)
    * [Fetch All Songs Example](#fetch-all-songs-example)
* [Fetch Single Song](#fetch-single-song)
    * [Fetch Single Song Request](#fetch-single-song-request)
    * [Fetch Single Song Response](#fetch-single-song-response)
    * [Fetch Single Song Example](#fetch-single-song-example)
* [Create Song](#create-song)
    * [Create Song Request](#create-song-request)
    * [Create Song Response](#create-song-response)
    * [Create Song Example](#create-song-example)
* [Update Song](#update-song)
    * [Update Song Request](#update-song-request)
    * [Update Song Response](#update-song-response)
    * [Update Song Example](#update-song-example)
* [Delete Song](#delete-song)
    * [Delete Song Request](#delete-song-request)
    * [Delete Song Response](#delete-song-response)
    * [Delete Song Example](#delete-song-example)

### Base URL

The base URL for the API is:

`https://barapi.cloud/api/v1/`

### Headers

All requests require the `Authorization` header with your `Bearer ACCESS_TOKEN`

If you need an `AccessToken`, visit the [OAuth](/Bar-API/OAuth) section

## Fetch All Songs

### Fetch All Songs Request
`GET /songs`

### Fetch All Songs Response

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
      <td>array of songs</td>
    </tr>
    <tr>
      <td>id</td>
      <td>string</td>
      <td>song identifier</td>
    </tr>
    <tr>
      <td>type</td>
      <td>string</td>
      <td>information type</td>
    </tr>
    <tr>
      <td>attributes</td>
      <td>object</td>
      <td>properties of the song</td>
    </tr>
    <tr>
      <td>name</td>
      <td>string</td>
      <td>name of the song</td>
    </tr>
    <tr>
      <td>url</td>
      <td>string</td>
      <td>url of where to find the song</td>
    </tr>
    <tr>
      <td>artist</td>
      <td>object</td>
      <td>the  <a href="/Bar-API/Artists">artists</a> object for the song</td>
    </tr>
    <tr>
      <td>creator_id</td>
      <td>string</td>
      <td>user_id that created the song</td>
    </tr>
    <tr>
      <td>created_at</td>
      <td>date-time</td>
      <td>timestamp of song creation</td>
    </tr>
    <tr>
      <td>updated_at</td>
      <td>date-time</td>
      <td>timestamp of last song update</td>
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
            "type": "Songs",
            "attributes": {
                "name": "Khalil Marquardt",
                "url": "http://www.gusikowski.org/molestiae-ex-quo-nobis-quis-eaque-ipsum",
                "artist": {
                    "id": "2",
                    "name": "prime",
                    "creator_id": "1",
                    "created_at": "2023-09-26T04:25:36.000000Z",
                    "updated_at": "2023-09-26T04:25:36.000000Z"
                },
                "creator_id": "1",
                "created_at": "2023-09-26T04:25:36.000000Z",
                "updated_at": "2023-09-26T04:25:36.000000Z"
            }
        },
        {
            "id": "2",
            "type": "Songs",
            "attributes": {
                "name": "Louvenia Skiles",
                "url": "https://boyer.info/ut-aliquam-rerum-facilis-quia.html",
                "artist": {
                    "id": "1",
                    "name": "jerry",
                    "creator_id": "1",
                    "created_at": "2023-09-26T04:25:36.000000Z",
                    "updated_at": "2023-09-26T04:25:36.000000Z"
                },
                "creator_id": "1",
                "created_at": "2023-09-26T04:25:36.000000Z",
                "updated_at": "2023-09-26T04:25:36.000000Z"
            }
        },
    ]
}
{% endhighlight %}

### Fetch All Songs Example
{% highlight js %}
import requests

url = 'https://barapi.cloud/api/v1/songs'

headers = {
    'Authorization': f'Bearer ACCESS_TOKEN',
}

response = requests.get(url, headers=headers)

print(response.json())
{% endhighlight %}

## Fetch Single Song

### Fetch Single Song Request
`GET /songs/{id}`

### Fetch Single Song Response

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
      <td>song object</td>
    </tr>
    <tr>
      <td>id</td>
      <td>string</td>
      <td>song identifier</td>
    </tr>
    <tr>
      <td>type</td>
      <td>string</td>
      <td>information type</td>
    </tr>
    <tr>
      <td>attributes</td>
      <td>object</td>
      <td>properties of the song</td>
    </tr>
    <tr>
      <td>name</td>
      <td>string</td>
      <td>name of the song</td>
    </tr>
    <tr>
      <td>url</td>
      <td>string</td>
      <td>url of where to find the song</td>
    </tr>
    <tr>
      <td>artist</td>
      <td>object</td>
      <td>the  <a href="/Bar-API/Artists">artists</a> object for the song</td>
    </tr>
    <tr>
      <td>creator_id</td>
      <td>string</td>
      <td>user_id that created the song</td>
    </tr>
    <tr>
      <td>created_at</td>
      <td>date-time</td>
      <td>timestamp of song creation</td>
    </tr>
    <tr>
      <td>updated_at</td>
      <td>date-time</td>
      <td>timestamp of last song update</td>
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
        "type": "Songs",
        "attributes": {
            "name": "Khalil Marquardt",
            "url": "http://www.gusikowski.org/molestiae-ex-quo-nobis-quis-eaque-ipsum",
            "artist": {
                "id": "2",
                "name": "prime",
                "creator_id": "1",
                "created_at": "2023-09-26T04:25:36.000000Z",
                "updated_at": "2023-09-26T04:25:36.000000Z"
            },
            "creator_id": "1",
            "created_at": "2023-09-26T04:25:36.000000Z",
            "updated_at": "2023-09-26T04:25:36.000000Z"
        }
    }
}
{% endhighlight %}

### Fetch Single Song Example
{% highlight js %}
import requests

song_id = 1

url = 'https://barapi.cloud/api/v1/songs/{song_id}'

headers = {
    'Authorization': f'Bearer ACCESS_TOKEN',
}

response = requests.get(url, headers=headers)

print(response.json())
{% endhighlight %}

## Create Song

### Create Song Request
`POST /songs`

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
      <td>name of the song</td>
    </tr>
    <tr>
      <td>url</td>
      <td>string</td>
      <td>url to find the song</td>
    </tr>
    <tr>
      <td>artist_id</td>
      <td>string</td>
      <td>id of the artist</td>
    </tr>
  </tbody>
</table>

{% highlight js %}
{
"request": {
    "method": "POST",
    "endpoint": "/songs",
    "body": {[
        "name": "John Doe",
        "url": "https://youtube.com",
        "artist_id": "1"
    ]}
}
{% endhighlight %}

### Create Song Response

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
      <td>song object</td>
    </tr>
    <tr>
      <td>id</td>
      <td>string</td>
      <td>song identifier</td>
    </tr>
    <tr>
      <td>type</td>
      <td>string</td>
      <td>information type</td>
    </tr>
    <tr>
      <td>attributes</td>
      <td>object</td>
      <td>properties of the song</td>
    </tr>
    <tr>
      <td>name</td>
      <td>string</td>
      <td>name of the song</td>
    </tr>
    <tr>
      <td>url</td>
      <td>string</td>
      <td>url of where to find the song</td>
    </tr>
    <tr>
      <td>artist</td>
      <td>object</td>
      <td>the  <a href="/Bar-API/Artists">artists</a> object for the song</td>
    </tr>
    <tr>
      <td>creator_id</td>
      <td>string</td>
      <td>user_id that created the song</td>
    </tr>
    <tr>
      <td>created_at</td>
      <td>date-time</td>
      <td>timestamp of song creation</td>
    </tr>
    <tr>
      <td>updated_at</td>
      <td>date-time</td>
      <td>timestamp of last song update</td>
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
        "type": "Songs",
        "attributes": {
            "name": "Khalil Marquardt",
            "url": "http://www.gusikowski.org/molestiae-ex-quo-nobis-quis-eaque-ipsum",
            "artist": {
                "id": "2",
                "name": "prime",
                "creator_id": "1",
                "created_at": "2023-09-26T04:25:36.000000Z",
                "updated_at": "2023-09-26T04:25:36.000000Z"
            },
            "creator_id": "1",
            "created_at": "2023-09-26T04:25:36.000000Z",
            "updated_at": "2023-09-26T04:25:36.000000Z"
        }
    }
}
{% endhighlight %}

### Create Song Example
{% highlight js %}
import requests

url = 'https://barapi.cloud/api/v1/songs'

headers = {
    'Authorization': f'Bearer ACCESS_TOKEN',
}

payload = {[
    'name': 'John Doe',
    'url': 'https://youtube.com',
    'artist_id': '1'
]}

response = requests.post(url, headers=headers, json=payload)

print(response.json())
{% endhighlight %}

## Update Song

### Update Song Request
`PUT /songs/{id}`

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
      <td>name of the song</td>
    </tr>
    <tr>
      <td>url</td>
      <td>string</td>
      <td>url to find the song</td>
    </tr>
    <tr>
      <td>artist_id</td>
      <td>string</td>
      <td>id of the artist</td>
    </tr>
  </tbody>
</table>

{% highlight js %}
{
"request": {
    "method": "PUT",
    "endpoint": "/songs/{id}",
    "body": {[
        "name": "John Doe",
        "url": "https://youtube.com",
        "artist_id": "1"
    ]}
}
{% endhighlight %}

### Update Song Response

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
      <td>song object</td>
    </tr>
    <tr>
      <td>id</td>
      <td>string</td>
      <td>song identifier</td>
    </tr>
    <tr>
      <td>type</td>
      <td>string</td>
      <td>information type</td>
    </tr>
    <tr>
      <td>attributes</td>
      <td>object</td>
      <td>properties of the song</td>
    </tr>
    <tr>
      <td>name</td>
      <td>string</td>
      <td>name of the song</td>
    </tr>
    <tr>
      <td>url</td>
      <td>string</td>
      <td>url of where to find the song</td>
    </tr>
    <tr>
      <td>artist</td>
      <td>object</td>
      <td>the  <a href="/Bar-API/Artists">artists</a> object for the song</td>
    </tr>
    <tr>
      <td>creator_id</td>
      <td>string</td>
      <td>user_id that created the song</td>
    </tr>
    <tr>
      <td>created_at</td>
      <td>date-time</td>
      <td>timestamp of song creation</td>
    </tr>
    <tr>
      <td>updated_at</td>
      <td>date-time</td>
      <td>timestamp of last song update</td>
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
        "type": "Songs",
        "attributes": {
            "name": "Khalil Marquardt",
            "url": "http://www.gusikowski.org/molestiae-ex-quo-nobis-quis-eaque-ipsum",
            "artist": {
                "id": "2",
                "name": "prime",
                "creator_id": "1",
                "created_at": "2023-09-26T04:25:36.000000Z",
                "updated_at": "2023-09-26T04:25:36.000000Z"
            },
            "creator_id": "1",
            "created_at": "2023-09-26T04:25:36.000000Z",
            "updated_at": "2023-09-26T04:25:36.000000Z"
        }
    }
}
{% endhighlight %}

### Update Song Example
{% highlight js %}
import requests

song_id = 1

url = 'https://barapi.cloud/api/v1/songs/{song_id}'

headers = {
    'Authorization': f'Bearer ACCESS_TOKEN',
}

payload = {[
    'name': 'John Doe',
    'url': 'https://youtube.com',
    'artist_id': '1'
]}

response = requests.put(url, headers=headers, json=payload)

print(response.json())
{% endhighlight %}

## Delete Song

### Delete Song Request
`DELETE /songs/{id}`

### Delete Song Response

{% highlight js %}
HTTP/1.1 204 No Content
Status: 204 No Content
Content-Type: application/json
{% endhighlight %}

### Delete Song Example
{% highlight js %}
import requests

song_id = 1

url = 'https://barapi.cloud/api/v1/songs/{song_id}'

headers = {
    'Authorization': f'Bearer ACCESS_TOKEN',
}

response = requests.delete(url, headers=headers)

print(response.json())
{% endhighlight %}
