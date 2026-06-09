<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkersGetWorker
{
	public function __construct(
		/** When the Worker was created. */
		public \DateTimeImmutable $createdOn,
		/** Immutable ID of the Worker. */
		public string $id,
		/** Whether logpush is enabled for the Worker. */
		public bool $logpush,
		/** Name of the Worker. */
		public string $name,
		/** Observability settings for the Worker. */
		public WorkersGetWorkerObservability $observability,
		/** Other resources that reference the Worker and depend on it existing. */
		public WorkersGetWorkerReferences $references,
		/** Subdomain settings for the Worker. */
		public WorkersGetWorkerSubdomain $subdomain,
		/** Tags associated with the Worker. */
		public array $tags,
		/** Other Workers that should consume logs from the Worker. */
		public array $tailConsumers,
		/** When the Worker was most recently updated. */
		public \DateTimeImmutable $updatedOn,
		/** When the Worker's most recent deployment was created. `null` if the Worker has never been deployed. */
		public ?\DateTimeImmutable $deployedOn = null,
	) {
	}
}
