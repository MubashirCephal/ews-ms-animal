## Boilerplater Services

### First Step
- Clone the repository
- Setup the database
- Make sure the IAM is up and running check the serve .env variables 
- Get the `/protos` and `/Proto` files from the IAM to maintain consistency

### Setting up the service with your local IAM
**Very Important** 
- Make sure the IAM service is running 
- Run `php artisan iam:add-service`
- Paste the new Service ID into your .env
- While dealing with `Repeated` Protobuf Types use the Unwrapped class : `App\Classes`


### HTTP Requests with claims and middleware
- Every request sent to the service is expected to have an `Authorization` Headers
- Every request sent to the service is intercepted by the `CheckUserClaims` middleware
- The table of mapping to check the claim is ( Unlisted requests will be sent through [ ex : preflight OPTIONS])
- IMPORTANT!!! : **Always use the correct method to avoid claim mistmatches**
```
    GET => Read
    POST => Write
    PUT => Update
    DELETED => Delete
```

### GRPC Requests with claims
- Every gRPC request sent should have the `Authorization` Metadata [Bearer Token]
- Every gRPC request sent to the service should also have a `X-Service-Key` Metadata attached to it [The receiver's ServiceID for logging]
- Middleware is replaced by an Interceptor class that would be doing an integrity check before serving any requests, for now it requires you to specify the Action Enum
- To run the service gRPC server type in `php artisan grpc:run` but make sure that you have set both `GRPC_RUN_HOST` and `GRPC_RUN_PORT` in your service .env
- 
