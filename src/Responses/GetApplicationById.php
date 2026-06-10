<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class GetApplicationById
{
	public function __construct(
		/** Confidence score for the application. Returns -1 when no score is available. */
		public ?float $applicationConfidenceScore = null,
		/** Returns the application source. */
		public ?string $applicationSource = null,
		/** Returns the application type. */
		public ?string $applicationType = null,
		/** Returns the application type description. */
		public ?string $applicationTypeDescription = null,
		/** Returns the application creation time. */
		public ?string $createdAt = null,
		/** GenAI score for the application. Returns -1 when no score is available. */
		public ?float $genAiScore = null,
		/** Returns the list of hostnames for the application. */
		public ?array $hostnames = null,
		/** Returns the human readable ID. */
		public ?string $humanId = null,
		/** Returns the application ID. */
		public ?string $id = null,
		/** Returns the list of IP subnets for the application. */
		public ?array $ipSubnets = null,
		/** Returns the application name. */
		public ?string $name = null,
		/** Returns the list of port protocols for the application. */
		public ?array $portProtocols = null,
		/** Returns the list of support domains for the application. */
		public ?array $supportDomains = null,
		/** Cloudflare products that support this application. */
		public ?array $supported = null,
		/** Returns the application update time. */
		public ?string $updatedAt = null,
		/** Returns the application version. */
		public ?string $version = null,
		/** Returns the score composition breakdown for the application. */
		public ?array $applicationScoreComposition = null,
		/** Returns the Intel API ID for the application. */
		public ?int $intelId = null,
	) {
	}
}
