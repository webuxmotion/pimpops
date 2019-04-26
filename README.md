# PimPOPS
## PHP-implementation Pops Framework
#### Compatible with React, Vue, Angular as REST API Framework.
#### Suitable for creating RCMV-applications.

## Installation
1. Create mysql db from file DB.sql (See $config in the picture below);
![alt text](https://pimpops.mdmfd.com/images/pimpops-connection-config.png)
2. Run this commands:
```sh
$ composer install
```
## API Routes

### Missing route
Method: GET, POST
```
/api/
```
Result
```json
{"status":"404","body":"Resource not found."}
```

### Get colors
Method: GET
```
/api/colors/
```
Result
```json
{ "status":"200","body":[{"id":"1","name":"Black"},{"id":"2","name":"White"}]}
```

### Get one color
Method: GET
```
/api/colors/2
```
Result
```json
{"status":"200","body":[{"id":"2","name":"White"}]}
```

### Add color
Method: POST
Form Data: key=name, value=green
Body meaning: last insert id
```
/api/color/add/
```
Result
```json
{"status":"200","body":"3"}
```
