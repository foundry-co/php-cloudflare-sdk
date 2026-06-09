<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ArgoSmartRoutingSetting
{
	public function __construct(
		/** Specifies if the setting is editable. */
		public bool $editable,
		/** Specifies the identifier of the Argo Smart Routing setting. */
		public string $id,
		/** Specifies the enablement value of Argo Smart Routing. */
		public \FoundryCo\Cloudflare\Enums\ArgoSmartRoutingSettingValue $value,
		/** Specifies the time when the setting was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
	) {
	}
}
