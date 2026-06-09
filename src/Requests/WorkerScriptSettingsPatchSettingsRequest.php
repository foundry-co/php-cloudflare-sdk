<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Patch Script Settings
 */
readonly class WorkerScriptSettingsPatchSettingsRequest
{
	public function __construct(
		/** Whether Logpush is turned on for the Worker. */
		public ?bool $logpush = null,
		public ?\FoundryCo\Cloudflare\Responses\WorkerScriptSettingsPatchSettingsRequestObservability $observability = null,
		public mixed $tags = null,
		/** List of Workers that will consume logs from the attached Worker. */
		public ?array $tailConsumers = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'logpush' => $this->logpush,
		    'observability' => $this->observability?->toArray(),
		    'tags' => $this->tags,
		    'tail_consumers' => $this->tailConsumers,
		], fn ($v) => $v !== null);
	}
}
