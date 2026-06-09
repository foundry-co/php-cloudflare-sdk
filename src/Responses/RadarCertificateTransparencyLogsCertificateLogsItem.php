<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarCertificateTransparencyLogsCertificateLogsItem
{
	public function __construct(
		/** The API standard that the certificate log follows. */
		public \FoundryCo\Cloudflare\Enums\RadarCertificateTransparencyLogsCertificateLogsItemApi $api,
		/** A brief description of the certificate log. */
		public string $description,
		/** The end date and time for when the log will stop accepting certificates. */
		public \DateTimeImmutable $endExclusive,
		/** The organization responsible for operating the certificate log. */
		public string $operator,
		/** A URL-friendly, kebab-case identifier for the certificate log. */
		public string $slug,
		/** The start date and time for when the log starts accepting certificates. */
		public \DateTimeImmutable $startInclusive,
		/** The current state of the certificate log. More details about log states can be found here: https://googlechrome.github.io/CertificateTransparency/log_states.html */
		public \FoundryCo\Cloudflare\Enums\RadarCertificateTransparencyLogsCertificateLogsItemState $state,
		/** Timestamp of when the log state was last updated. */
		public \DateTimeImmutable $stateTimestamp,
		/** The URL for the certificate log. */
		public string $url,
	) {
	}
}
