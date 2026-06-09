<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AIGatewayEvaluationsEvaluators
{
	public function __construct(
		public \DateTimeImmutable $createdAt,
		public string $description,
		public bool $enable,
		public string $id,
		public bool $mandatory,
		public \DateTimeImmutable $modifiedAt,
		public string $name,
		public string $type,
	) {
	}
}
