<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class EmailRoutingSettingsEnableEmailRouting
{
	public function __construct(
		/** State of the zone settings for Email Routing. */
		public ?\FoundryCo\Cloudflare\Enums\EmailRoutingSettingsEnableEmailRoutingEnabled $enabled = null,
		/** Email Routing settings identifier. */
		public ?string $id = null,
		/** Domain of your zone. */
		public ?string $name = null,
		/** The date and time the settings have been created. */
		public ?\DateTimeImmutable $created = null,
		/** The date and time the settings have been modified. */
		public ?\DateTimeImmutable $modified = null,
		/** Flag to check if the user skipped the configuration wizard. */
		public ?\FoundryCo\Cloudflare\Enums\EmailRoutingSettingsEnableEmailRoutingSkipWizard $skipWizard = null,
		/** Show the state of your account, and the type or configuration error. */
		public ?\FoundryCo\Cloudflare\Enums\EmailRoutingSettingsEnableEmailRoutingStatus $status = null,
		/** Email Routing settings tag. (Deprecated, replaced by Email Routing settings identifier) */
		public ?string $tag = null,
	) {
	}
}
