<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Validate origin
 */
readonly class PostZonesZoneIdLogpushValidateOriginRequest
{
	public function __construct(
		/** This field is deprecated. Use `output_options` instead. Configuration string. It specifies things like requested fields and timestamp formats. If migrating from the logpull api, copy the url (full url or just the query string) of your call here, and logpush will keep on making this call for you, setting start and end times appropriately. */
		public string $logpullOptions,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'logpull_options' => $this->logpullOptions,
		], fn ($v) => $v !== null);
	}
}
