<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RadarGetCertificateLogDetailsCertificateLog
{
	public function __construct(
		/** The API standard that the certificate log follows. */
		public ?\FoundryCo\Cloudflare\Enums\RadarGetCertificateLogDetailsCertificateLogApi $api = null,
		/** The average throughput of the CT log, measured in certificates per hour (certs/hour). */
		public ?float $avgThroughput = null,
		/** A brief description of the certificate log. */
		public ?string $description = null,
		/** The end date and time for when the log will stop accepting certificates. */
		public ?\DateTimeImmutable $endExclusive = null,
		/** Timestamp of the most recent update to the CT log. */
		public ?\DateTimeImmutable $lastUpdate = null,
		/** The organization responsible for operating the certificate log. */
		public ?string $operator = null,
		/** Log performance metrics, including averages and per-endpoint details. */
		public ?RadarGetCertificateLogDetailsCertificateLogPerformance $performance = null,
		/** Logs from the same operator. */
		public ?array $related = null,
		/** A URL-friendly, kebab-case identifier for the certificate log. */
		public ?string $slug = null,
		/** The start date and time for when the log starts accepting certificates. */
		public ?\DateTimeImmutable $startInclusive = null,
		/** The current state of the certificate log. More details about log states can be found here: https://googlechrome.github.io/CertificateTransparency/log_states.html */
		public ?\FoundryCo\Cloudflare\Enums\RadarGetCertificateLogDetailsCertificateLogState $state = null,
		/** Timestamp of when the log state was last updated. */
		public ?\DateTimeImmutable $stateTimestamp = null,
		/** Number of certificates that are eligible for inclusion to this log but have not been included yet. Based on certificates signed by trusted root CAs within the log's accepted date range. */
		public ?string $submittableCertCount = null,
		/** Number of certificates already included in this CT log. */
		public ?string $submittedCertCount = null,
		/** The URL for the certificate log. */
		public ?string $url = null,
	) {
	}
}
