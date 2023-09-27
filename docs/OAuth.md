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
