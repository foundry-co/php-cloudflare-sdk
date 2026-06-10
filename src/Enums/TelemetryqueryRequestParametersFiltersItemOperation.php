<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum TelemetryqueryRequestParametersFiltersItemOperation: string
{
	case Includes = 'includes';
	case NotIncludes = 'not_includes';
	case StartsWith = 'starts_with';
	case EndsWith = 'ends_with';
	case Regex = 'regex';
	case Exists = 'exists';
	case IsNull = 'is_null';
	case In = 'in';
	case NotIn = 'not_in';
	case Eq = 'eq';
	case Neq = 'neq';
	case Gt = 'gt';
	case Gte = 'gte';
	case Lt = 'lt';
	case Lte = 'lte';
	case INCLUDES = 'INCLUDES';
	case DOESNOTINCLUDE = 'DOES_NOT_INCLUDE';
	case MATCHREGEX = 'MATCH_REGEX';
	case EXISTS = 'EXISTS';
	case DOESNOTEXIST = 'DOES_NOT_EXIST';
	case IN = 'IN';
	case NOTIN = 'NOT_IN';
	case STARTSWITH = 'STARTS_WITH';
	case ENDSWITH = 'ENDS_WITH';
}
