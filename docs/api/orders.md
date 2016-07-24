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