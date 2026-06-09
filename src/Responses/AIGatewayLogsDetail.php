<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AIGatewayLogsDetail
{
	public function __construct(
		public bool $cached,
		public \DateTimeImmutable $createdAt,
		public int $duration,
		public string $id,
		public string $model,
		public string $path,
		public string $provider,
		public int $tokensIn,
		public int $tokensOut,
		public ?float $cost = null,
		public ?bool $customCost = null,
		public ?string $metadata = null,
		public ?string $modelType = null,
		public ?string $requestContentType = null,
		public ?string $requestHead = null,
		public ?bool $requestHeadComplete = null,
		public ?int $requestSize = null,
		public ?string $requestType = null,
		public ?string $responseContentType = null,
		public ?string $responseHead = null,
		public ?bool $responseHeadComplete = null,
		public ?int $responseSize = null,
		public ?int $statusCode = null,
		public ?int $step = null,
	) {
	}
}
