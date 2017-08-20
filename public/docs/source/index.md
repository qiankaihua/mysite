---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)
<!-- END_INFO -->

#general
<!-- START_58032c21b23f73738654cf9abb848799 -->
## api/uploadimage

> Example request:

```bash
curl -X POST "http://localhost/api/uploadimage" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/uploadimage",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/uploadimage`


<!-- END_58032c21b23f73738654cf9abb848799 -->

<!-- START_d55b9813e1f4f7e0015513ab88306ce4 -->
## api/blog/add

> Example request:

```bash
curl -X POST "http://localhost/api/blog/add" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/blog/add",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/blog/add`


<!-- END_d55b9813e1f4f7e0015513ab88306ce4 -->

<!-- START_cb3607601d64d132036db941eb67153e -->
## api/blog/{blog_id}

> Example request:

```bash
curl -X DELETE "http://localhost/api/blog/{blog_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/blog/{blog_id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/blog/{blog_id}`


<!-- END_cb3607601d64d132036db941eb67153e -->

<!-- START_d69cd74712a21193f6aa66ab9361a8c1 -->
## api/blog/{blog_id}

> Example request:

```bash
curl -X POST "http://localhost/api/blog/{blog_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/blog/{blog_id}",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/blog/{blog_id}`


<!-- END_d69cd74712a21193f6aa66ab9361a8c1 -->

<!-- START_d44e248134244c38a098124ea58f7b77 -->
## api/blog/{blog_id}

> Example request:

```bash
curl -X PUT "http://localhost/api/blog/{blog_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/blog/{blog_id}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/blog/{blog_id}`


<!-- END_d44e248134244c38a098124ea58f7b77 -->

<!-- START_eabba4476b9e31609bd18d2435652821 -->
## 图片上传保存

参数

> Example request:

```bash
curl -X POST "http://localhost/api/image/add" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/image/add",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/image/add`


<!-- END_eabba4476b9e31609bd18d2435652821 -->

<!-- START_7b88d62163b4fdf4f7cb269e383be7b7 -->
## api/image/{img_id}

> Example request:

```bash
curl -X DELETE "http://localhost/api/image/{img_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/image/{img_id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/image/{img_id}`


<!-- END_7b88d62163b4fdf4f7cb269e383be7b7 -->

<!-- START_ce201a9425a91e73b8e47a2808d3b72d -->
## api/image/{img_id}

> Example request:

```bash
curl -X PUT "http://localhost/api/image/{img_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/image/{img_id}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/image/{img_id}`


<!-- END_ce201a9425a91e73b8e47a2808d3b72d -->

<!-- START_a18036f963ced9cd7c5dfaa89165c5f7 -->
## api/image/{img_id}

> Example request:

```bash
curl -X POST "http://localhost/api/image/{img_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/image/{img_id}",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/image/{img_id}`


<!-- END_a18036f963ced9cd7c5dfaa89165c5f7 -->

