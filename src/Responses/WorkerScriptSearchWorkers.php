<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerScriptSearchWorkers
{
	public function __construct(
		/** When the script was created. */
		public ?\DateTimeImmutable $createdOn = null,
		/** Identifier. */
		public ?string $id = null,
		/** When the script was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** Name of the script, used in URLs and route configuration. */
		public ?string $scriptName = null,
		/** Whether the environment is the default environment. */
		public ?bool $environmentIsDefault = null,
		/** Name of the environment. */
		public ?string $environmentName = null,
		/** Name of the service. */
		public ?string $serviceName = null,
	) {
	}
}
