<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerDeploymentsCreateDeployment
{
	public function __construct(
		public ?\DateTimeImmutable $createdOn = null,
		public ?string $id = null,
		public ?string $source = null,
		public ?\FoundryCo\Cloudflare\Enums\WorkerDeploymentsCreateDeploymentStrategy $strategy = null,
		public ?array $versions = null,
		public ?WorkerDeploymentsCreateDeploymentAnnotations $annotations = null,
		public ?string $authorEmail = null,
	) {
	}
}
