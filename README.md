# Bar API REST API

This is the documentation for the Bar API.

## Retrieve Your Access Token

### Request
`POST https://barapi.cloud/oauth/token/`

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

    API_ENDPOINT = 'https://barapi.cloud/oauth/token/'
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

`GET /user/`

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

    url = 'https://barapi.cloud/api/v1/user/'

    headers = {
        'Authorization': f'Bearer ACCESS_TOKEN',
    }

    response = requests.get(url, headers=headers)

    print(response.json())

## Fetch All Artists

### Request

`GET /artists/`

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
                "creator_id": "1",
                "created_at": "2023-09-26T03:41:35.000000Z",
                "updated_at": "2023-09-26T03:41:35.000000Z"
            }
        }
    ]
    }

### Fetch All Artists Example
    import requests

    url = 'https://barapi.cloud/api/v1/artists/'

    headers = {
        'Authorization': f'Bearer ACCESS_TOKEN',
    }

    response = requests.get(url, headers=headers)

    print(response.json())

## Get a specific Thing

### Request

`GET /thing/id`

    curl -i -H 'Accept: application/json' http://localhost:7000/thing/1

### Response

    HTTP/1.1 200 OK
    Date: Thu, 24 Feb 2011 12:36:30 GMT
    Status: 200 OK
    Connection: close
    Content-Type: application/json
    Content-Length: 36

    {"id":1,"name":"Foo","status":"new"}

## Get a non-existent Thing

### Request

`GET /thing/id`

    curl -i -H 'Accept: application/json' http://localhost:7000/thing/9999

### Response

    HTTP/1.1 404 Not Found
    Date: Thu, 24 Feb 2011 12:36:30 GMT
    Status: 404 Not Found
    Connection: close
    Content-Type: application/json
    Content-Length: 35

    {"status":404,"reason":"Not found"}

## Create another new Thing

### Request

`POST /thing/`

    curl -i -H 'Accept: application/json' -d 'name=Bar&junk=rubbish' http://localhost:7000/thing

### Response

    HTTP/1.1 201 Created
    Date: Thu, 24 Feb 2011 12:36:31 GMT
    Status: 201 Created
    Connection: close
    Content-Type: application/json
    Location: /thing/2
    Content-Length: 35

    {"id":2,"name":"Bar","status":null}

## Get list of Things again

### Request

`GET /thing/`

    curl -i -H 'Accept: application/json' http://localhost:7000/thing/

### Response

    HTTP/1.1 200 OK
    Date: Thu, 24 Feb 2011 12:36:31 GMT
    Status: 200 OK
    Connection: close
    Content-Type: application/json
    Content-Length: 74

    [{"id":1,"name":"Foo","status":"new"},{"id":2,"name":"Bar","status":null}]

## Change a Thing's state

### Request

`PUT /thing/:id/status/changed`

    curl -i -H 'Accept: application/json' -X PUT http://localhost:7000/thing/1/status/changed

### Response

    HTTP/1.1 200 OK
    Date: Thu, 24 Feb 2011 12:36:31 GMT
    Status: 200 OK
    Connection: close
    Content-Type: application/json
    Content-Length: 40

    {"id":1,"name":"Foo","status":"changed"}

## Get changed Thing

### Request

`GET /thing/id`

    curl -i -H 'Accept: application/json' http://localhost:7000/thing/1

### Response

    HTTP/1.1 200 OK
    Date: Thu, 24 Feb 2011 12:36:31 GMT
    Status: 200 OK
    Connection: close
    Content-Type: application/json
    Content-Length: 40

    {"id":1,"name":"Foo","status":"changed"}

## Change a Thing

### Request

`PUT /thing/:id`

    curl -i -H 'Accept: application/json' -X PUT -d 'name=Foo&status=changed2' http://localhost:7000/thing/1

### Response

    HTTP/1.1 200 OK
    Date: Thu, 24 Feb 2011 12:36:31 GMT
    Status: 200 OK
    Connection: close
    Content-Type: application/json
    Content-Length: 41

    {"id":1,"name":"Foo","status":"changed2"}

## Attempt to change a Thing using partial params

### Request

`PUT /thing/:id`

    curl -i -H 'Accept: application/json' -X PUT -d 'status=changed3' http://localhost:7000/thing/1

### Response

    HTTP/1.1 200 OK
    Date: Thu, 24 Feb 2011 12:36:32 GMT
    Status: 200 OK
    Connection: close
    Content-Type: application/json
    Content-Length: 41

    {"id":1,"name":"Foo","status":"changed3"}

## Attempt to change a Thing using invalid params

### Request

`PUT /thing/:id`

    curl -i -H 'Accept: application/json' -X PUT -d 'id=99&status=changed4' http://localhost:7000/thing/1

### Response

    HTTP/1.1 200 OK
    Date: Thu, 24 Feb 2011 12:36:32 GMT
    Status: 200 OK
    Connection: close
    Content-Type: application/json
    Content-Length: 41

    {"id":1,"name":"Foo","status":"changed4"}

## Change a Thing using the _method hack

### Request

`POST /thing/:id?_method=POST`

    curl -i -H 'Accept: application/json' -X POST -d 'name=Baz&_method=PUT' http://localhost:7000/thing/1

### Response

    HTTP/1.1 200 OK
    Date: Thu, 24 Feb 2011 12:36:32 GMT
    Status: 200 OK
    Connection: close
    Content-Type: application/json
    Content-Length: 41

    {"id":1,"name":"Baz","status":"changed4"}

## Change a Thing using the _method hack in the url

### Request

`POST /thing/:id?_method=POST`

    curl -i -H 'Accept: application/json' -X POST -d 'name=Qux' http://localhost:7000/thing/1?_method=PUT

### Response

    HTTP/1.1 404 Not Found
    Date: Thu, 24 Feb 2011 12:36:32 GMT
    Status: 404 Not Found
    Connection: close
    Content-Type: text/html;charset=utf-8
    Content-Length: 35

    {"status":404,"reason":"Not found"}

## Delete a Thing

### Request

`DELETE /thing/id`

    curl -i -H 'Accept: application/json' -X DELETE http://localhost:7000/thing/1/

### Response

    HTTP/1.1 204 No Content
    Date: Thu, 24 Feb 2011 12:36:32 GMT
    Status: 204 No Content
    Connection: close


## Try to delete same Thing again

### Request

`DELETE /thing/id`

    curl -i -H 'Accept: application/json' -X DELETE http://localhost:7000/thing/1/

### Response

    HTTP/1.1 404 Not Found
    Date: Thu, 24 Feb 2011 12:36:32 GMT
    Status: 404 Not Found
    Connection: close
    Content-Type: application/json
    Content-Length: 35

    {"status":404,"reason":"Not found"}

## Get deleted Thing

### Request

`GET /thing/1`

    curl -i -H 'Accept: application/json' http://localhost:7000/thing/1

### Response

    HTTP/1.1 404 Not Found
    Date: Thu, 24 Feb 2011 12:36:33 GMT
    Status: 404 Not Found
    Connection: close
    Content-Type: application/json
    Content-Length: 35

    {"status":404,"reason":"Not found"}

## Delete a Thing using the _method hack

### Request

`DELETE /thing/id`

    curl -i -H 'Accept: application/json' -X POST -d'_method=DELETE' http://localhost:7000/thing/2/

### Response

    HTTP/1.1 204 No Content
    Date: Thu, 24 Feb 2011 12:36:33 GMT
    Status: 204 No Content
    Connection: close
