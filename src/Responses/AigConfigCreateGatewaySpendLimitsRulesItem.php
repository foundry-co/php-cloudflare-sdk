<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AigConfigCreateGatewaySpendLimitsRulesItem
{
	public function __construct(
		public ?float $limit = null,
		public ?\FoundryCo\Cloudflare\Enums\AigConfigCreateGatewaySpendLimitsRulesItemLimitType $limitType = null,
		public ?int $window = null,
		public ?bool $enabled = null,
		public ?string $id = null,
		public ?array $metadata = null,
		public ?AigConfigCreateGatewaySpendLimitsRulesItemModel $model = null,
		public ?AigConfigCreateGatewaySpendLimitsRulesItemProvider $provider = null,
		public ?\FoundryCo\Cloudflare\Enums\AigConfigCreateGatewaySpendLimitsRulesItemTechnique $technique = null,
	) {
	}
}
