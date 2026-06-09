<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Reactivate Client Certificate
 */
readonly class ClientCertificateForAZoneEditClientCertificateRequest
{
	public function __construct(
		public ?bool $reactivate = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'reactivate' => $this->reactivate,
		], fn ($v) => $v !== null);
	}
}
