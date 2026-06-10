<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class AccessBookmarkApplicationsDeprecatedListBookmarkApplications
{
	public function __construct(
		/** Displays the application in the App Launcher. */
		public ?bool $appLauncherVisible = null,
		public mixed $createdAt = null,
		/** The domain of the Bookmark application. */
		public ?string $domain = null,
		/** The unique identifier for the Bookmark application. */
		public ?string $id = null,
		/** The image URL for the logo shown in the App Launcher dashboard. */
		public ?string $logoUrl = null,
		/** The name of the Bookmark application. */
		public ?string $name = null,
		public mixed $updatedAt = null,
	) {
	}
}
