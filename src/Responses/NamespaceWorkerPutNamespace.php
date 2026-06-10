<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class NamespaceWorkerPutNamespace
{
	public function __construct(
		/** Identifier. */
		public ?string $createdBy = null,
		/** When the script was created. */
		public ?\DateTimeImmutable $createdOn = null,
		/** Identifier. */
		public ?string $modifiedBy = null,
		/** When the script was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** API Resource UUID tag. */
		public ?string $namespaceId = null,
		/** Name of the Workers for Platforms dispatch namespace. */
		public ?string $namespaceName = null,
		/** The current number of scripts in this Dispatch Namespace. */
		public ?int $scriptCount = null,
		/** Whether the Workers in the namespace are executed in a "trusted" manner. When a Worker is trusted, it has access to the shared caches for the zone in the Cache API, and has access to the `request.cf` object on incoming Requests. When a Worker is untrusted, caches are not shared across the zone, and `request.cf` is undefined. By default, Workers in a namespace are "untrusted". */
		public ?bool $trustedWorkers = null,
	) {
	}
}
