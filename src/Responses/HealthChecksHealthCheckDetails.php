<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class HealthChecksHealthCheckDetails
{
	public function __construct(
		/** The hostname or IP address of the origin server to run health checks on. */
		public ?string $address = null,
		/** A list of regions from which to run health checks. Null means Cloudflare will pick a default region. */
		public ?array $checkRegions = null,
		/** The number of consecutive fails required from a health check before changing the health to unhealthy. */
		public ?int $consecutiveFails = null,
		/** The number of consecutive successes required from a health check before changing the health to healthy. */
		public ?int $consecutiveSuccesses = null,
		public ?\DateTimeImmutable $createdOn = null,
		/** A human-readable description of the health check. */
		public ?string $description = null,
		/** The current failure reason if status is unhealthy. */
		public ?string $failureReason = null,
		/** Parameters specific to an HTTP or HTTPS health check. */
		public ?HealthChecksHealthCheckDetailsHttpConfig $httpConfig = null,
		/** Identifier */
		public ?string $id = null,
		/** The interval between each health check. Shorter intervals may give quicker notifications if the origin status changes, but will increase load on the origin as we check from multiple locations. */
		public ?int $interval = null,
		public ?\DateTimeImmutable $modifiedOn = null,
		/** A short name to identify the health check. Only alphanumeric characters, hyphens and underscores are allowed. */
		public ?string $name = null,
		/** The number of retries to attempt in case of a timeout before marking the origin as unhealthy. Retries are attempted immediately. */
		public ?int $retries = null,
		/** The current status of the origin server according to the health check. */
		public ?\FoundryCo\Cloudflare\Enums\HealthChecksHealthCheckDetailsStatus $status = null,
		/** If suspended, no health checks are sent to the origin. */
		public ?bool $suspended = null,
		/** Parameters specific to TCP health check. */
		public ?HealthChecksHealthCheckDetailsTcpConfig $tcpConfig = null,
		/** The timeout (in seconds) before marking the health check as failed. */
		public ?int $timeout = null,
		/** The protocol to use for the health check. Currently supported protocols are 'HTTP', 'HTTPS' and 'TCP'. */
		public ?string $type = null,
	) {
	}
}
