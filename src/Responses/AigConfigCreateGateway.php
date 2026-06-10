<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AigConfigCreateGateway
{
	public function __construct(
		public ?bool $cacheInvalidateOnUpdate = null,
		public ?int $cacheTtl = null,
		public ?bool $collectLogs = null,
		public ?\DateTimeImmutable $createdAt = null,
		/** gateway id */
		public ?string $id = null,
		public ?\DateTimeImmutable $modifiedAt = null,
		public ?int $rateLimitingInterval = null,
		public ?int $rateLimitingLimit = null,
		public ?bool $authentication = null,
		public mixed $dlp = null,
		public ?AigConfigCreateGatewayGuardrails $guardrails = null,
		public ?bool $isDefault = null,
		public ?int $logManagement = null,
		public ?\FoundryCo\Cloudflare\Enums\AigConfigCreateGatewayLogManagementStrategy $logManagementStrategy = null,
		public ?bool $logpush = null,
		public ?string $logpushPublicKey = null,
		public ?array $otel = null,
		public ?\FoundryCo\Cloudflare\Enums\AigConfigCreateGatewayRateLimitingTechnique $rateLimitingTechnique = null,
		/** Backoff strategy for retry delays */
		public ?\FoundryCo\Cloudflare\Enums\AigConfigCreateGatewayRetryBackoff $retryBackoff = null,
		/** Delay between retry attempts in milliseconds (0-5000) */
		public ?int $retryDelay = null,
		/** Maximum number of retry attempts for failed requests (1-5) */
		public ?int $retryMaxAttempts = null,
		public ?AigConfigCreateGatewaySpendLimits $spendLimits = null,
		public ?string $storeId = null,
		public ?AigConfigCreateGatewayStripe $stripe = null,
		/** Controls how Workers AI inference calls routed through this gateway are billed. Only 'postpaid' is currently supported. */
		public ?\FoundryCo\Cloudflare\Enums\AigConfigCreateGatewayWorkersAiBillingMode $workersAiBillingMode = null,
		public ?bool $zdr = null,
	) {
	}
}
