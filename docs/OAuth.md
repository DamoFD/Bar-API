---
layout: page
title: OAuth
---

Welcome to the OAuth section! Below you will learn how to send a request to the server with your OAuth credentials and receive your access token.

### Table of Contents

* [Access Token](#access-token)
    * [Request](#request)
    * [Data](#data)
    * [Response](#response)
    * [Token Exchange Example](#token-exchange-example)

### Request
`POST https://barapi.cloud/oauth/token`

### Data
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
      <td>grant_type</td>
      <td>string</td>
      <td>The OAuth grant type</td>
    </tr>
    <tr>
      <td>client_id</td>
      <td>string</td>
      <td>Your provided Client ID</td>
    </tr>
    <tr>
      <td>username</td>
      <td>string</td>
      <td>Your provided username</td>
    </tr>
    <tr>
      <td>password</td>
      <td>string</td>
      <td>Your provided password</td>
    </tr>
    <tr>
      <td>scope</td>
      <td>string</td>
      <td>List of scopes</td>
    </tr>
  </tbody>
</table>

{% highlight js %}
    grant_type: "password"
    client_id: {client_id}
    client_secret: {client_secret}
    username: {username}
    password: {password}
    scope: ""
{% endhighlight %}

### Response

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
      <td>token_type</td>
      <td>string</td>
      <td>Your token type</td>
    </tr>
    <tr>
      <td>expires_in</td>
      <td>integer</td>
      <td>Your token expiration time</td>
    </tr>
    <tr>
      <td>access_token</td>
      <td>string</td>
      <td>Your access token for access to the server</td>
    </tr>
    <tr>
      <td>refresh_token</td>
      <td>string</td>
      <td>Your refresh token to refresh your session without needing to re-login</td>
    </tr>
  </tbody>
</table>

{% highlight js %}
    HTTP/1.1 200 OK
    STATUS: 200 OK
    Content-Type: application/json

    {
        "token_type": "Bearer",
        "expires_in": 31622400,
        "access_token": "fea6fd89safdsjalfdsa.fds659424jlkr679fdsjkl32y7fdskls.fjge9wghslrjeklfsd",
        "refresh_token": "fdsa695432h89dsaf.354u89gy7a532.f8e392q563fkdlsa.532ryu8ew9fy32l45j3"
    }
{% endhighlight %}

### Token Exchange Example
{% highlight js %}
import requests

API_ENDPOINT = 'https://barapi.cloud/oauth/token'
CLIENT_ID = '332269999912132097'
CLIENT_SECRET = '937it3ow87i4ery69876wqire'
USERNAME = 'john@doe.com'
PASSWORD = 'mypassword123'

data = {
    'client_id': CLIENT_ID,
    'client_secret': CLIENT_SECRET,
    'grant_type': 'password',
    'username': USERNAME,
    'password': PASSWORD,
    'scope': ''
}

response = requests.post(url, data=data)

print(response.json())
{% endhighlight %}
