<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Response for GET/PATCH /dmarc-reports
 */
readonly class ConfigureDmarcReports
{
	public function __construct(
		/** List of approved sending sources (omitted when empty) */
		public ?array $approvedSources = null,
		/** Deprecated, use created_at */
		public ?\DateTimeImmutable $created = null,
		/** Creation timestamp */
		public ?\DateTimeImmutable $createdAt = null,
		/** Whether DMARC reports are enabled */
		public ?bool $enabled = null,
		/** Deprecated, use modified_at */
		public ?\DateTimeImmutable $modified = null,
		/** Last modification timestamp */
		public ?\DateTimeImmutable $modifiedAt = null,
		/** Live DNS records for the zone, grouped by type */
		public ?ConfigureDmarcReportsRecords $records = null,
		/** Prefix for DMARC RUA addresses (32-char hex string) */
		public ?string $ruaPrefix = null,
		/** Whether to skip the setup wizard */
		public ?bool $skipWizard = null,
		/** DMARC configuration status */
		public ?\FoundryCo\Cloudflare\Enums\ConfigureDmarcReportsStatus $status = null,
		/** Use `zone_id` instead */
		public ?string $tag = null,
		/** Zone identifier */
		public ?string $zoneId = null,
	) {
	}
}
