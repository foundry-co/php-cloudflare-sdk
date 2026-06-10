<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

/**
 * Metadata about the zone.
 */
readonly class ZonesPostMeta
{
	public function __construct(
		/** The zone is only configured for CDN. */
		public ?bool $cdnOnly = null,
		/** Number of Custom Certificates the zone can have. */
		public ?int $customCertificateQuota = null,
		/** The zone is only configured for DNS. */
		public ?bool $dnsOnly = null,
		/** The zone is setup with Foundation DNS. */
		public ?bool $foundationDns = null,
		/** Number of Page Rules a zone can have. */
		public ?int $pageRuleQuota = null,
		/** The zone has been flagged for phishing. */
		public ?bool $phishingDetected = null,
		public ?int $step = null,
	) {
	}
}
