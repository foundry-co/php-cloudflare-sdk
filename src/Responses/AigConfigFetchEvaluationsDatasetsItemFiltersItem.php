<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AigConfigFetchEvaluationsDatasetsItemFiltersItem
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\AigConfigFetchEvaluationsDatasetsItemFiltersItemKey $key = null,
		public ?\FoundryCo\Cloudflare\Enums\AigConfigFetchEvaluationsDatasetsItemFiltersItemOperator $operator = null,
		public ?array $value = null,
	) {
	}
}
