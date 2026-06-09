<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class WorkerScriptSettings
{
	public function __construct(
		/** Whether Logpush is turned on for the Worker. */
		public ?bool $logpush = null,
		public ?WorkerScriptSettingsObservability $observability = null,
		public mixed $tags = null,
		/** List of Workers that will consume logs from the attached Worker. */
		public ?array $tailConsumers = null,
	) {
	}
}
