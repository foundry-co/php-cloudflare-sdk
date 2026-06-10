<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerScriptSettingsGetSettings
{
	public function __construct(
		/** Whether Logpush is turned on for the Worker. */
		public ?bool $logpush = null,
		public ?WorkerScriptSettingsGetSettingsObservability $observability = null,
		public mixed $tags = null,
		/** List of Workers that will consume logs from the attached Worker. */
		public ?array $tailConsumers = null,
	) {
	}
}
