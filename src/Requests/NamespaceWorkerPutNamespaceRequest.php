<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update dispatch namespace
 */
readonly class NamespaceWorkerPutNamespaceRequest
{
	public function __construct(
		/** The name of the dispatch namespace. */
		public ?string $name = null,
		/** Whether the Workers in the namespace are executed in a "trusted" manner. When a Worker is trusted, it has access to the shared caches for the zone in the Cache API, and has access to the `request.cf` object on incoming Requests. When a Worker is untrusted, caches are not shared across the zone, and `request.cf` is undefined. By default, Workers in a namespace are "untrusted". */
		public ?bool $trustedWorkers = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'name' => $this->name,
		    'trusted_workers' => $this->trustedWorkers,
		], fn ($v) => $v !== null);
	}
}
