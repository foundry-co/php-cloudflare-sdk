<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Rotate Secret for a Turnstile Widget
 */
readonly class AccountsTurnstileWidgetRotateSecretRequest
{
	public function __construct(
		/**
		 * If `invalidate_immediately` is set to `false`, the previous secret will
		 * remain valid for two hours. Otherwise, the secret is immediately
		 * invalidated, and requests using it will be rejected.
		 */
		public ?bool $invalidateImmediately = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'invalidate_immediately' => $this->invalidateImmediately,
		], fn ($v) => $v !== null);
	}
}
