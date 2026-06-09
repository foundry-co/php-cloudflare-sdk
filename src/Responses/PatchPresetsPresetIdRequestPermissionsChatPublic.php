<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PatchPresetsPresetIdRequestPermissionsChatPublic
{
	public function __construct(
		/** Can send messages in general */
		public ?bool $canSend = null,
		/** Can send file messages */
		public ?bool $files = null,
		/** Can send text messages */
		public ?bool $text = null,
	) {
	}
}
