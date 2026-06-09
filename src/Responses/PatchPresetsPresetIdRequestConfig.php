<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class PatchPresetsPresetIdRequestConfig
{
	public function __construct(
		/** Livestream viewer quality levels. */
		public ?array $livestreamViewerQualities = null,
		/** Maximum number of screen shares that can be active at a given time */
		public ?float $maxScreenshareCount = null,
		/** Maximum number of streams that are visible on a device */
		public ?PatchPresetsPresetIdRequestConfigMaxVideoStreams $maxVideoStreams = null,
		/** Media configuration options. eg: Video quality */
		public ?PatchPresetsPresetIdRequestConfigMedia $media = null,
		/** Type of the meeting */
		public ?\FoundryCo\Cloudflare\Enums\PatchPresetsPresetIdRequestConfigViewType $viewType = null,
	) {
	}
}
