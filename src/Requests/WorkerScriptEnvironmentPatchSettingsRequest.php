<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Patch Script Settings
 */
readonly class WorkerScriptEnvironmentPatchSettingsRequest
{
	public function __construct(
		public array $errors,
		public array $messages,
		/** Whether the API call was successful. */
		public \FoundryCo\Cloudflare\Enums\WorkerScriptEnvironmentPatchSettingsRequestSuccess $success,
		public \FoundryCo\Cloudflare\Responses\WorkerScriptEnvironmentPatchSettingsRequestResult $result,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'errors' => $this->errors,
		    'messages' => $this->messages,
		    'success' => $this->success->value,
		    'result' => $this->result->toArray(),
		], fn ($v) => $v !== null);
	}
}
