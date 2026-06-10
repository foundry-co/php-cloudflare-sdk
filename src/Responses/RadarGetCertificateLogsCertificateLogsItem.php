<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetCertificateLogsCertificateLogsItem
{
	public function __construct(
		/** The API standard that the certificate log follows. */
		public ?\FoundryCo\Cloudflare\Enums\RadarGetCertificateLogsCertificateLogsItemApi $api = null,
		/** A brief description of the certificate log. */
		public ?string $description = null,
		/** The end date and time for when the log will stop accepting certificates. */
		public ?\DateTimeImmutable $endExclusive = null,
		/** The organization responsible for operating the certificate log. */
		public ?string $operator = null,
		/** A URL-friendly, kebab-case identifier for the certificate log. */
		public ?string $slug = null,
		/** The start date and time for when the log starts accepting certificates. */
		public ?\DateTimeImmutable $startInclusive = null,
		/** The current state of the certificate log. More details about log states can be found here: https://googlechrome.github.io/CertificateTransparency/log_states.html */
		public ?\FoundryCo\Cloudflare\Enums\RadarGetCertificateLogsCertificateLogsItemState $state = null,
		/** Timestamp of when the log state was last updated. */
		public ?\DateTimeImmutable $stateTimestamp = null,
		/** The URL for the certificate log. */
		public ?string $url = null,
	) {
	}
}
