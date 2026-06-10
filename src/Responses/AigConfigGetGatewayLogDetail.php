<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AigConfigGetGatewayLogDetail
{
	public function __construct(
		public ?bool $cached = null,
		public ?\DateTimeImmutable $createdAt = null,
		public ?int $duration = null,
		public ?string $id = null,
		public ?string $model = null,
		public ?string $path = null,
		public ?string $provider = null,
		public ?int $tokensIn = null,
		public ?int $tokensOut = null,
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
