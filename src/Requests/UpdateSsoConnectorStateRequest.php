<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Update SSO connector state
 */
readonly class UpdateSsoConnectorStateRequest
{
	public function __construct(
		/** SSO Connector enabled state */
		public ?bool $enabled = null,
		/** Controls the display of FedRAMP language to the user during SSO login */
		public ?bool $useFedrampLanguage = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'enabled' => $this->enabled,
		    'use_fedramp_language' => $this->useFedrampLanguage,
		], fn ($v) => $v !== null);
	}
}
