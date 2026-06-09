<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * [DEPRECATED] Describes the configuration of a pipeline. Use the new streams/sinks/pipelines API instead.
 */
readonly class WorkersPipelinesOtherDeprecated
{
	public function __construct(
		public WorkersPipelinesOtherDeprecatedDestination $destination,
		/** Indicates the endpoint URL to send traffic. */
		public string $endpoint,
		/** Specifies the pipeline identifier. */
		public string $id,
		/** Defines the name of the pipeline. */
		public string $name,
		public array $source,
		/** Indicates the version number of last saved configuration. */
		public float $version,
	) {
	}
}
