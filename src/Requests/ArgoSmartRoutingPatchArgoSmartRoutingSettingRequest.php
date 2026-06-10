<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Patch Argo Smart Routing setting
 */
readonly class ArgoSmartRoutingPatchArgoSmartRoutingSettingRequest
{
	public function __construct(
		/** Specifies the enablement value of Argo Smart Routing. */
		public \FoundryCo\Cloudflare\Enums\ArgoSmartRoutingPatchArgoSmartRoutingSettingRequestValue $value,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'value' => $this->value->value,
		], fn ($v) => $v !== null);
	}
}
