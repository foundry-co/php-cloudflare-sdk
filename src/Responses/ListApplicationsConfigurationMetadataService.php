<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Configuration for enabling the container metadata service.
 */
readonly class ListApplicationsConfigurationMetadataService
{
	public function __construct(
		/** Whether the metadata service should be enabled for the deployment. */
		public ?bool $enabled = null,
	) {
	}
}
