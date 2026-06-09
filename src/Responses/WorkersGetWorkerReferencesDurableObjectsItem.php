<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkersGetWorkerReferencesDurableObjectsItem
{
	public function __construct(
		/** ID of the Durable Object namespace being used. */
		public string $namespaceId,
		/** Name of the Durable Object namespace being used. */
		public string $namespaceName,
		/** ID of the Worker using the Durable Object implementation. */
		public string $workerId,
		/** Name of the Worker using the Durable Object implementation. */
		public string $workerName,
	) {
	}
}
