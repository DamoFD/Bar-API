# Bar API REST API

This is the documentation for the Bar API.

## Retrieve Your Access Token

### Request
`POST https://barapi.cloud/oauth/token`

### Data
    grant_type: "password"
    client_id: {client_id}
    client_secret: {client_secret}
    username: {username}
    password: {password}
    scope: ""

### Response

    HTTP/1.1 200 OK
    STATUS: 200 OK
    Content-Type: application/json

    {
        "token_type": "Bearer", (string)
        "expires_in": 31622400, (int)
        "access_token": "fea6fd89safdsjalfdsa.fds659424jlkr679fdsjkl32y7fdskls.fjge9wghslrjeklfsd", (string)
        "refresh_token": "fdsa695432h89dsaf.354u89gy7a532.f8e392q563fkdlsa.532ryu8ew9fy32l45j3" (string)
    }

### Token Exchange Example
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

## Base URL

The base URL for the API is:

`https://barapi.cloud/api/v1/`

## Headers

All requests require the `Authorization` header with your `Bearer ACCESS_TOKEN`

## Get Your User Information

### Request

`GET /user`

### Response

    HTTP/1.1 200 OK
    Status: 200 OK
    Content-Type: application/json

    {
        "id": "1", (string)
        "email": "john@doe.com", (string)
        "email_verified_at": "2020-07-25T03:09:16.000000Z", (?string)(date-time)
        "created_at": "2020-07-25T03:09:16.000000Z", (string)(date-time)
        "updated_at": "2020-07-25T03:09:16.000000Z" (string)(date-time)
    }

### Get User Example
    import requests

    url = 'https://barapi.cloud/api/v1/user'

    headers = {
        'Authorization': f'Bearer ACCESS_TOKEN',
    }

    response = requests.get(url, headers=headers)

    print(response.json())

## Fetch All Artists

### Request

`GET /artists`

### Response

    HTTP/1.1 200 OK
    Status: 200 OK
    Content-Type: application/json

    {
    "data": [
        {
            "id": "1", (string)
            "type": "Artists",
            "attributes": {
                "name": "John Doe", (string)
                "songs": [
                    {
                        "id": "2", (string)
                        "name": "Louvenia Skiles", (string)
                        "url": "https://boyer.info/ut-aliquam-rerum-facilis-quia.html", (string)
                        "creator_id": "1", (string)
                        "created_at": "2023-09-26T04:25:36.000000Z", (string)(date-time)
                        "updated_at": "2023-09-26T04:25:36.000000Z" (string)(date-time)
                    },
                    {
                        "id": "12",
                        "name": "Roel Kuphal PhD",
                        "url": "http://mckenzie.org/",
                        "creator_id": "1",
                        "created_at": "2023-09-26T05:24:39.000000Z",
                        "updated_at": "2023-09-26T05:24:39.000000Z"
                    }
                ],
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
                "songs": [
                    {
                        "id": "1",
                        "name": "Khalil Marquardt",
                        "url": "http://www.gusikowski.org/molestiae-ex-quo-nobis-quis-eaque-ipsum",
                        "creator_id": "1",
                        "created_at": "2023-09-26T04:25:36.000000Z",
                        "updated_at": "2023-09-26T04:25:36.000000Z"
                    },
                    {
                        "id": "7",
                        "name": "Maritza Bogan",
                        "url": "https://www.yost.info/voluptas-maxime-autem-quo-neque",
                        "creator_id": "1",
                        "created_at": "2023-09-26T05:24:39.000000Z",
                        "updated_at": "2023-09-26T05:24:39.000000Z"
                    },
                    {
                        "id": "10",
                        "name": "Dovie Yost DVM",
                        "url": "http://macejkovic.biz/dolore-ipsa-et-necessitatibus-qui-libero-est.html",
                        "creator_id": "1",
                        "created_at": "2023-09-26T05:24:39.000000Z",
                        "updated_at": "2023-09-26T05:24:39.000000Z"
                    },
                    {
                        "id": "13",
                        "name": "Katlyn Schowalter",
                        "url": "http://www.zboncak.com/",
                        "creator_id": "1",
                        "created_at": "2023-09-26T05:24:39.000000Z",
                        "updated_at": "2023-09-26T05:24:39.000000Z"
                    },
                    {
                        "id": "14",
                        "name": "Lonnie Bogisich",
                        "url": "https://www.boyle.com/voluptas-iusto-atque-nihil-est-et",
                        "creator_id": "1",
                        "created_at": "2023-09-26T05:24:39.000000Z",
                        "updated_at": "2023-09-26T05:24:39.000000Z"
                    }
                ],
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
                "songs": [
                    {
                        "id": "9",
                        "name": "Hope Hansen",
                        "url": "http://larson.org/",
                        "creator_id": "1",
                        "created_at": "2023-09-26T05:24:39.000000Z",
                        "updated_at": "2023-09-26T05:24:39.000000Z"
                    },
                    {
                        "id": "11",
                        "name": "Marty Baumbach IV",
                        "url": "http://green.com/alias-debitis-blanditiis-praesentium-voluptate-et",
                        "creator_id": "1",
                        "created_at": "2023-09-26T05:24:39.000000Z",
                        "updated_at": "2023-09-26T05:24:39.000000Z"
                    }
                ],
                "creator_id": "1", (string)
                "created_at": "2023-09-26T03:41:35.000000Z", (string)(date-time)
                "updated_at": "2023-09-26T03:41:35.000000Z" (string)(date-time)
            }
        }
    ]
    }

### Fetch All Artists Example
    import requests

    url = 'https://barapi.cloud/api/v1/artists'

    headers = {
        'Authorization': f'Bearer ACCESS_TOKEN',
    }

    response = requests.get(url, headers=headers)

    print(response.json())

## Fetch Single Artist

### Request

`GET /artists/{id}`

### Response

    HTTP/1.1 200 OK
    Status: 200 OK
    Content-Type: application/json

    {
    "data": {
            "id": "1", (string)
            "type": "Artists",
            "attributes": {
                "name": "John Doe", (string)
                "songs": [
                    {
                        "id": "2", (string)
                        "name": "Louvenia Skiles", (string)
                        "url": "https://boyer.info/ut-aliquam-rerum-facilis-quia.html", (string)
                        "creator_id": "1", (string)
                        "created_at": "2023-09-26T04:25:36.000000Z", (string)(date-time)
                        "updated_at": "2023-09-26T04:25:36.000000Z" (string)(date-time)
                    },
                    {
                        "id": "12",
                        "name": "Roel Kuphal PhD",
                        "url": "http://mckenzie.org/",
                        "creator_id": "1",
                        "created_at": "2023-09-26T05:24:39.000000Z",
                        "updated_at": "2023-09-26T05:24:39.000000Z"
                    }
                ],
                "creator_id": "1", (string)
                "created_at": "2023-09-26T03:41:35.000000Z", (string)(date-time)
                "updated_at": "2023-09-26T04:10:05.000000Z" (string)(date-time)
            }
        }
    }

### Fetch Single Artist Example
    import requests

    artist_id = 1

    url = 'https://barapi.cloud/api/v1/artists/{artist_id}'

    headers = {
        'Authorization': f'Bearer ACCESS_TOKEN',
    }

    response = requests.get(url, headers=headers)

    print(response.json())

## Create Artist

### Request

`POST /artists`

    {
    "request": {
        "method": "POST",
        "endpoint": "/artists",
        "body": {
            "name": "JOHN DOE"
        }
    }

### Response

    HTTP/1.1 201 Created
    Status: 201 Created
    Content-Type: application/json

    {
    "data": {
            "id": "1", (string)
            "type": "Artists",
            "attributes": {
                "name": "John Doe", (string)
                "songs": [],
                "creator_id": "1", (string)
                "created_at": "2023-09-26T03:41:35.000000Z", (string)(date-time)
                "updated_at": "2023-09-26T04:10:05.000000Z" (string)(date-time)
            }
        }
    }

### Create Artist Example
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

## Update Artist

### Request

`PUT /artists/{id}`

    {
    "request": {
        "method": "PUT",
        "endpoint": "/artists/{id}",
        "body": {
            "name": "John Doe"
        }
    }

### Response

    HTTP/1.1 200 OK
    Status: 200 OK
    Content-Type: application/json

    {
    "data": {
            "id": "1", (string)
            "type": "Artists",
            "attributes": {
                "name": "John Doe", (string)
                "songs": [],
                "creator_id": "1", (string)
                "created_at": "2023-09-26T03:41:35.000000Z", (string)(date-time)
                "updated_at": "2023-09-26T04:10:05.000000Z" (string)(date-time)
            }
        }
    }

### Update Artist Example
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

## Delete Artist

### Request

`DELETE /artists/{id}`

### Response

    HTTP/1.1 204 No Content
    Status: 204 No Content
    Content-Type: application/json

### Delete Artist Example
    import requests

    artist_id = 1

    url = 'https://barapi.cloud/api/v1/artists/{artist_id}'

    headers = {
        'Authorization': f'Bearer ACCESS_TOKEN',
    }

    response = requests.delete(url, headers=headers)

    print(response.json())
