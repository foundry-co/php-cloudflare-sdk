<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Other resources that reference the Worker and depend on it existing.
 */
readonly class WorkersCreateWorkerReferences
{
	public function __construct(
		/** Other Workers that reference the Worker as an outbound for a dispatch namespace. */
		public array $dispatchNamespaceOutbounds,
		/** Custom domains connected to the Worker. */
		public array $domains,
		/** Other Workers that reference Durable Object classes implemented by the Worker. */
		public array $durableObjects,
		/** Queues that send messages to the Worker. */
		public array $queues,
		/** Other Workers that reference the Worker using [service bindings](https://developers.cloudflare.com/workers/runtime-apis/bindings/service-bindings/). */
		public array $workers,
	) {
	}
}
