<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class CreateWorker
{
	public function __construct(
		/** When the Worker was created. */
		public ?\DateTimeImmutable $createdOn = null,
		/** Immutable ID of the Worker. */
		public ?string $id = null,
		/** Whether logpush is enabled for the Worker. */
		public ?bool $logpush = null,
		/** Name of the Worker. */
		public ?string $name = null,
		/** Observability settings for the Worker. */
		public ?CreateWorkerObservability $observability = null,
		/** Other resources that reference the Worker and depend on it existing. */
		public ?CreateWorkerReferences $references = null,
		/** Subdomain settings for the Worker. */
		public ?CreateWorkerSubdomain $subdomain = null,
		/** Tags associated with the Worker. */
		public ?array $tags = null,
		/** Other Workers that should consume logs from the Worker. */
		public ?array $tailConsumers = null,
		/** When the Worker was most recently updated. */
		public ?\DateTimeImmutable $updatedOn = null,
		/** When the Worker's most recent deployment was created. `null` if the Worker has never been deployed. */
		public ?\DateTimeImmutable $deployedOn = null,
	) {
	}
}
