<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update a Gateway
 */
readonly class AigConfigUpdateGatewayRequest
{
	public function __construct(
		public bool $cacheInvalidateOnUpdate,
		public int $cacheTtl,
		public bool $collectLogs,
		public int $rateLimitingInterval,
		public int $rateLimitingLimit,
		public ?bool $authentication = null,
		public mixed $dlp = null,
		public ?\FoundryCo\Cloudflare\Responses\AigConfigUpdateGatewayRequestGuardrails $guardrails = null,
		public ?int $logManagement = null,
		public ?\FoundryCo\Cloudflare\Enums\AigConfigUpdateGatewayRequestLogManagementStrategy $logManagementStrategy = null,
		public ?bool $logpush = null,
		public ?string $logpushPublicKey = null,
		public ?array $otel = null,
		public ?\FoundryCo\Cloudflare\Enums\AigConfigUpdateGatewayRequestRateLimitingTechnique $rateLimitingTechnique = null,
		/** Backoff strategy for retry delays */
		public ?\FoundryCo\Cloudflare\Enums\AigConfigUpdateGatewayRequestRetryBackoff $retryBackoff = null,
		/** Delay between retry attempts in milliseconds (0-5000) */
		public ?int $retryDelay = null,
		/** Maximum number of retry attempts for failed requests (1-5) */
		public ?int $retryMaxAttempts = null,
		public ?\FoundryCo\Cloudflare\Responses\AigConfigUpdateGatewayRequestSpendLimits $spendLimits = null,
		public ?string $storeId = null,
		public ?\FoundryCo\Cloudflare\Responses\AigConfigUpdateGatewayRequestStripe $stripe = null,
		/** Controls how Workers AI inference calls routed through this gateway are billed. Only 'postpaid' is currently supported. */
		public ?\FoundryCo\Cloudflare\Enums\AigConfigUpdateGatewayRequestWorkersAiBillingMode $workersAiBillingMode = null,
		public ?bool $zdr = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'cache_invalidate_on_update' => $this->cacheInvalidateOnUpdate,
		    'cache_ttl' => $this->cacheTtl,
		    'collect_logs' => $this->collectLogs,
		    'rate_limiting_interval' => $this->rateLimitingInterval,
		    'rate_limiting_limit' => $this->rateLimitingLimit,
		    'authentication' => $this->authentication,
		    'dlp' => $this->dlp,
		    'guardrails' => $this->guardrails?->toArray(),
		    'log_management' => $this->logManagement,
		    'log_management_strategy' => $this->logManagementStrategy?->value,
		    'logpush' => $this->logpush,
		    'logpush_public_key' => $this->logpushPublicKey,
		    'otel' => $this->otel,
		    'rate_limiting_technique' => $this->rateLimitingTechnique?->value,
		    'retry_backoff' => $this->retryBackoff?->value,
		    'retry_delay' => $this->retryDelay,
		    'retry_max_attempts' => $this->retryMaxAttempts,
		    'spend_limits' => $this->spendLimits?->toArray(),
		    'store_id' => $this->storeId,
		    'stripe' => $this->stripe?->toArray(),
		    'workers_ai_billing_mode' => $this->workersAiBillingMode?->value,
		    'zdr' => $this->zdr,
		], fn ($v) => $v !== null);
	}
}
