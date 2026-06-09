<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AIGatewayGatewaysGateway
{
	public function __construct(
		public bool $cacheInvalidateOnUpdate,
		public int $cacheTtl,
		public bool $collectLogs,
		public \DateTimeImmutable $createdAt,
		/** gateway id */
		public string $id,
		public \DateTimeImmutable $modifiedAt,
		public int $rateLimitingInterval,
		public int $rateLimitingLimit,
		public ?bool $authentication = null,
		public mixed $dlp = null,
		public ?AIGatewayGatewaysGatewayGuardrails $guardrails = null,
		public ?bool $isDefault = null,
		public ?int $logManagement = null,
		public ?\FoundryCo\Cloudflare\Enums\AIGatewayGatewaysGatewayLogManagementStrategy $logManagementStrategy = null,
		public ?bool $logpush = null,
		public ?string $logpushPublicKey = null,
		public ?array $otel = null,
		public ?\FoundryCo\Cloudflare\Enums\AIGatewayGatewaysGatewayRateLimitingTechnique $rateLimitingTechnique = null,
		/** Backoff strategy for retry delays */
		public ?\FoundryCo\Cloudflare\Enums\AIGatewayGatewaysGatewayRetryBackoff $retryBackoff = null,
		/** Delay between retry attempts in milliseconds (0-5000) */
		public ?int $retryDelay = null,
		/** Maximum number of retry attempts for failed requests (1-5) */
		public ?int $retryMaxAttempts = null,
		public ?AIGatewayGatewaysGatewaySpendLimits $spendLimits = null,
		public ?string $storeId = null,
		public ?AIGatewayGatewaysGatewayStripe $stripe = null,
		/** Controls how Workers AI inference calls routed through this gateway are billed. Only 'postpaid' is currently supported. */
		public ?\FoundryCo\Cloudflare\Enums\AIGatewayGatewaysGatewayWorkersAiBillingMode $workersAiBillingMode = null,
		public ?bool $zdr = null,
	) {
	}
}
