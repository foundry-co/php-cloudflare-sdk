<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetCertificateLogDetailsCertificateLogRelatedItem
{
	public function __construct(
		/** A brief description of the certificate log. */
		public ?string $description = null,
		/** The end date and time for when the log will stop accepting certificates. */
		public ?\DateTimeImmutable $endExclusive = null,
		/** A URL-friendly, kebab-case identifier for the certificate log. */
		public ?string $slug = null,
		/** The start date and time for when the log starts accepting certificates. */
		public ?\DateTimeImmutable $startInclusive = null,
		/** The current state of the certificate log. More details about log states can be found here: https://googlechrome.github.io/CertificateTransparency/log_states.html */
		public ?\FoundryCo\Cloudflare\Enums\RadarGetCertificateLogDetailsCertificateLogRelatedItemState $state = null,
	) {
	}
}
