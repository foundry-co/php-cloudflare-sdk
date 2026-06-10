<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlpEmailScannerCreateRuleRequestConditionsItem
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\DlpEmailScannerCreateRuleRequestConditionsItemOperator $operator = null,
		public ?\FoundryCo\Cloudflare\Enums\DlpEmailScannerCreateRuleRequestConditionsItemSelector $selector = null,
		public mixed $value = null,
	) {
	}
}
