<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ArgoSmartRoutingPatchArgoSmartRoutingSetting
{
	public function __construct(
		/** Specifies if the setting is editable. */
		public ?bool $editable = null,
		/** Specifies the identifier of the Argo Smart Routing setting. */
		public ?string $id = null,
		/** Specifies the enablement value of Argo Smart Routing. */
		public ?\FoundryCo\Cloudflare\Enums\ArgoSmartRoutingPatchArgoSmartRoutingSettingValue $value = null,
		/** Specifies the time when the setting was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
	) {
	}
}
