<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class ApplicationsGetApplications
{
	public function __construct(
		/** Confidence score for the application. Returns -1 when no score is available. */
		public float $applicationConfidenceScore,
		/** Returns the application source. */
		public string $applicationSource,
		/** Returns the application type. */
		public string $applicationType,
		/** Returns the application type description. */
		public string $applicationTypeDescription,
		/** Returns the application creation time. */
		public string $createdAt,
		/** GenAI score for the application. Returns -1 when no score is available. */
		public float $genAiScore,
		/** Returns the list of hostnames for the application. */
		public array $hostnames,
		/** Returns the human readable ID. */
		public string $humanId,
		/** Returns the application ID. */
		public string $id,
		/** Returns the list of IP subnets for the application. */
		public array $ipSubnets,
		/** Returns the application name. */
		public string $name,
		/** Returns the list of port protocols for the application. */
		public array $portProtocols,
		/** Returns the list of support domains for the application. */
		public array $supportDomains,
		/** Cloudflare products that support this application. */
		public array $supported,
		/** Returns the application update time. */
		public string $updatedAt,
		/** Returns the application version. */
		public string $version,
		/** Returns the score composition breakdown for the application. */
		public ?array $applicationScoreComposition = null,
		/** Returns the Intel API ID for the application. */
		public ?int $intelId = null,
	) {
	}
}
