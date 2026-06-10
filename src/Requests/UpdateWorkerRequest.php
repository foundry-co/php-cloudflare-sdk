<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update Worker
 */
readonly class UpdateWorkerRequest
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
		public \FoundryCo\Cloudflare\Responses\UpdateWorkerRequestObservability $observability,
		/** Other resources that reference the Worker and depend on it existing. */
		public \FoundryCo\Cloudflare\Responses\UpdateWorkerRequestReferences $references,
		/** Subdomain settings for the Worker. */
		public \FoundryCo\Cloudflare\Responses\UpdateWorkerRequestSubdomain $subdomain,
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


	public function toArray(): array
	{
		return array_filter([
		    'created_on' => $this->createdOn->format(\DateTimeImmutable::ATOM),
		    'id' => $this->id,
		    'logpush' => $this->logpush,
		    'name' => $this->name,
		    'observability' => $this->observability->toArray(),
		    'references' => $this->references->toArray(),
		    'subdomain' => $this->subdomain->toArray(),
		    'tags' => $this->tags,
		    'tail_consumers' => $this->tailConsumers,
		    'updated_on' => $this->updatedOn->format(\DateTimeImmutable::ATOM),
		    'deployed_on' => $this->deployedOn?->format(\DateTimeImmutable::ATOM),
		], fn ($v) => $v !== null);
	}
}
