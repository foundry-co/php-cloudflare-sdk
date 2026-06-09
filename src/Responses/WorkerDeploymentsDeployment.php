<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerDeploymentsDeployment
{
	public function __construct(
		public \DateTimeImmutable $createdOn,
		public string $id,
		public string $source,
		public \FoundryCo\Cloudflare\Enums\WorkerDeploymentsDeploymentStrategy $strategy,
		public array $versions,
		public ?WorkerDeploymentsDeploymentAnnotations $annotations = null,
		public ?string $authorEmail = null,
	) {
	}
}
