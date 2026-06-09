<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum SavedQueriesQueriesgetParametersCalculationsItemOperator: string
{
	case Uniq = 'uniq';
	case Count = 'count';
	case Max = 'max';
	case Min = 'min';
	case Sum = 'sum';
	case Avg = 'avg';
	case Median = 'median';
	case P001 = 'p001';
	case P01 = 'p01';
	case P05 = 'p05';
	case P10 = 'p10';
	case P25 = 'p25';
	case P75 = 'p75';
	case P90 = 'p90';
	case P95 = 'p95';
	case P99 = 'p99';
	case P999 = 'p999';
	case Stddev = 'stddev';
	case Variance = 'variance';
	case COUNTDISTINCT = 'COUNT_DISTINCT';
	case COUNT = 'COUNT';
	case MAX = 'MAX';
	case MIN = 'MIN';
	case SUM = 'SUM';
	case AVG = 'AVG';
	case MEDIAN = 'MEDIAN';
	case STDDEV = 'STDDEV';
	case VARIANCE = 'VARIANCE';
}
