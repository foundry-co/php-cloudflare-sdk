<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlpEmailScannerUpdateRuleConditionsItem
{
	public function __construct(
		public ?\FoundryCo\Cloudflare\Enums\DlpEmailScannerUpdateRuleConditionsItemOperator $operator = null,
		public ?\FoundryCo\Cloudflare\Enums\DlpEmailScannerUpdateRuleConditionsItemSelector $selector = null,
		public mixed $value = null,
	) {
	}
}
