<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum PostV4AccountsByAccountIdPipelinesV1SinksSchemaFieldsItemType: string
{
	case Int32 = 'int32';
	case Int64 = 'int64';
	case Float32 = 'float32';
	case Float64 = 'float64';
	case Bool = 'bool';
	case String = 'string';
	case Binary = 'binary';
	case Timestamp = 'timestamp';
	case Json = 'json';
	case Struct = 'struct';
	case List = 'list';
}
