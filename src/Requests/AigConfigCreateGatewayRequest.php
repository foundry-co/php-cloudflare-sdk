<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create a new Gateway
 */
readonly class AigConfigCreateGatewayRequest
{
	public function __construct(
		public bool $cacheInvalidateOnUpdate,
		public int $cacheTtl,
		public bool $collectLogs,
		/** gateway id */
		public string $id,
		public int $rateLimitingInterval,
		public int $rateLimitingLimit,
		public ?bool $authentication = null,
		public ?int $logManagement = null,
		public ?\FoundryCo\Cloudflare\Enums\AigConfigCreateGatewayRequestLogManagementStrategy $logManagementStrategy = null,
		public ?bool $logpush = null,
		public ?string $logpushPublicKey = null,
		public ?\FoundryCo\Cloudflare\Enums\AigConfigCreateGatewayRequestRateLimitingTechnique $rateLimitingTechnique = null,
		/** Backoff strategy for retry delays */
		public ?\FoundryCo\Cloudflare\Enums\AigConfigCreateGatewayRequestRetryBackoff $retryBackoff = null,
		/** Delay between retry attempts in milliseconds (0-5000) */
		public ?int $retryDelay = null,
		/** Maximum number of retry attempts for failed requests (1-5) */
		public ?int $retryMaxAttempts = null,
		/** Controls how Workers AI inference calls routed through this gateway are billed. Only 'postpaid' is currently supported. */
		public ?\FoundryCo\Cloudflare\Enums\AigConfigCreateGatewayRequestWorkersAiBillingMode $workersAiBillingMode = null,
		public ?bool $zdr = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'cache_invalidate_on_update' => $this->cacheInvalidateOnUpdate,
		    'cache_ttl' => $this->cacheTtl,
		    'collect_logs' => $this->collectLogs,
		    'id' => $this->id,
		    'rate_limiting_interval' => $this->rateLimitingInterval,
		    'rate_limiting_limit' => $this->rateLimitingLimit,
		    'authentication' => $this->authentication,
		    'log_management' => $this->logManagement,
		    'log_management_strategy' => $this->logManagementStrategy?->value,
		    'logpush' => $this->logpush,
		    'logpush_public_key' => $this->logpushPublicKey,
		    'rate_limiting_technique' => $this->rateLimitingTechnique?->value,
		    'retry_backoff' => $this->retryBackoff?->value,
		    'retry_delay' => $this->retryDelay,
		    'retry_max_attempts' => $this->retryMaxAttempts,
		    'workers_ai_billing_mode' => $this->workersAiBillingMode?->value,
		    'zdr' => $this->zdr,
		], fn ($v) => $v !== null);
	}
}
