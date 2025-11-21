<?php

namespace App\Exceptions;

class GrpcException{
    const UNAUTHORIZED = 'User not authorized';
    const UNAUTHENTICATED = 'User not logged in';
    const UNKNOWN = 'Request failed';

    const NOT_FOUND = 'Item not found';
}
