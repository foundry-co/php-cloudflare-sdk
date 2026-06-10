<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Deployment
 */
readonly class WorkerDeploymentsCreateDeploymentRequest
{
	public function __construct(
		public \DateTimeImmutable $createdOn,
		public string $id,
		public string $source,
		public \FoundryCo\Cloudflare\Enums\WorkerDeploymentsCreateDeploymentRequestStrategy $strategy,
		public array $versions,
		public ?\FoundryCo\Cloudflare\Responses\WorkerDeploymentsCreateDeploymentRequestAnnotations $annotations = null,
		public ?string $authorEmail = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'created_on' => $this->createdOn->format(\DateTimeImmutable::ATOM),
		    'id' => $this->id,
		    'source' => $this->source,
		    'strategy' => $this->strategy->value,
		    'versions' => $this->versions,
		    'annotations' => $this->annotations?->toArray(),
		    'author_email' => $this->authorEmail,
		], fn ($v) => $v !== null);
	}
}
