Orders endpoints

### create order

request:
```
url: /orders/new
method: POST
format: json
data:
{
	"restaurant": @string
	"owner": @string
}
```
response on success:
```
status: 200
format: json
id: @orderId
```

### orders list

request:
```
url: /orders/
method: GET
```
response on success:
```
status: 200
format: json
content:
{
  "orders": [
    {
        "created": @datetime@,
        "id": @int@,
        "owner": @string@
        "price": @int@
        "restaurant": @string@
        "status": @status@
    },
    ...
  ]
}
```

### add meal to order

request:
```
url: /orderedmeal/new
method: POST
format: json
data:
{
	orderId: @id
	mealId: @id
	ownerId: @id
}
```
response on success:
```
status: 200
```

### get restaurants list

request:
```
url: /restaurant/
method: GET
```
response on success:
```
status: 200
format: json
content:
{
  "restaurants": [
    {
        "id": @int@,
        "name": @string@
    },
    ...
  ]
}
```

### get meals list from restaurant

request:
```
url: /meal/{restaurantId}
method: GET
```
response on success:
```
status: 200
format: json
content:
{
  "meals": [
    {
        "id": @int@,
        "name": @string@
        "price": @int@
    },
    ...
  ]
}
```