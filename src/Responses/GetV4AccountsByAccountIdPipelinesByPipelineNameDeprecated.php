<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * [DEPRECATED] Describes the configuration of a pipeline. Use the new streams/sinks/pipelines API instead.
 */
readonly class GetV4AccountsByAccountIdPipelinesByPipelineNameDeprecated
{
	public function __construct(
		public ?GetV4AccountsByAccountIdPipelinesByPipelineNameDeprecatedDestination $destination = null,
		/** Indicates the endpoint URL to send traffic. */
		public ?string $endpoint = null,
		/** Specifies the pipeline identifier. */
		public ?string $id = null,
		/** Defines the name of the pipeline. */
		public ?string $name = null,
		public ?array $source = null,
		/** Indicates the version number of last saved configuration. */
		public ?float $version = null,
	) {
	}
}
