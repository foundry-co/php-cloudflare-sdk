<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AIGatewayAccountProvidersProvider
{
	public function __construct(
		public string $baseUrl,
		public \DateTimeImmutable $createdAt,
		public string $id,
		public \DateTimeImmutable $modifiedAt,
		public string $name,
		public string $slug,
		public ?bool $beta = null,
		public ?string $curlExample = null,
		public ?string $description = null,
		public ?bool $enable = null,
		public ?string $headers = null,
		public ?string $jsExample = null,
		public ?string $link = null,
		public ?string $logo = null,
		public ?int $position = null,
	) {
	}
}
