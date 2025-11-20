<?php

namespace App\Enums;

enum MethodMap : string {
    case CREATE = 'POST';
    case READ = 'GET';
    case UPDATE = 'PUT';
    case DELETE = 'DELETE';
}
