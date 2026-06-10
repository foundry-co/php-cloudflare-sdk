<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ListWorkersReferencesDurableObjectsItem
{
	public function __construct(
		/** ID of the Durable Object namespace being used. */
		public ?string $namespaceId = null,
		/** Name of the Durable Object namespace being used. */
		public ?string $namespaceName = null,
		/** ID of the Worker using the Durable Object implementation. */
		public ?string $workerId = null,
		/** Name of the Worker using the Durable Object implementation. */
		public ?string $workerName = null,
	) {
	}
}
