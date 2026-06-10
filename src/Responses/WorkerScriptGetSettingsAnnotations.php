<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Annotations for the Worker version. Annotations are not inherited across settings updates; omitting this field means the new version will have no annotations.
 */
readonly class WorkerScriptGetSettingsAnnotations
{
	public function __construct(
		/** Human-readable message about the version. Truncated to 1000 bytes if longer. */
		public ?string $workersmessage = null,
		/** User-provided identifier for the version. Maximum 100 bytes. */
		public ?string $workerstag = null,
		/** Operation that triggered the creation of the version. This is read-only and set by the server. */
		public ?string $workerstriggeredBy = null,
	) {
	}
}
