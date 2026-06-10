<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DlpProfilesListAllCustomProfiles
{
	public function __construct(
		/** Related DLP policies will trigger when the match count exceeds the number set. */
		public ?int $allowedMatchCount = null,
		/** When the profile was created. */
		public ?\DateTimeImmutable $createdAt = null,
		/** The id of the profile (uuid). */
		public ?string $id = null,
		/** The name of the profile. */
		public ?string $name = null,
		public ?bool $ocrEnabled = null,
		/** When the profile was lasted updated. */
		public ?\DateTimeImmutable $updatedAt = null,
		public ?bool $aiContextEnabled = null,
		public mixed $confidenceThreshold = null,
		/** Scan the context of predefined entries to only return matches surrounded by keywords. */
		public ?DlpProfilesListAllCustomProfilesContextAwareness $contextAwareness = null,
		/** Data classes associated with this profile. */
		public ?array $dataClasses = null,
		/** Data tags associated with this profile. */
		public ?array $dataTags = null,
		/** The description of the profile. */
		public ?string $description = null,
		public ?array $entries = null,
		/** Sensitivity levels associated with this profile. */
		public ?array $sensitivityLevels = null,
		public ?array $sharedEntries = null,
	) {
	}
}
