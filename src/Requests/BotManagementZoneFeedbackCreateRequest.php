<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Submit a feedback report
 */
readonly class BotManagementZoneFeedbackCreateRequest
{
	public function __construct(
		public string $description,
		/** Wirefilter expression describing the traffic being reported. */
		public string $expression,
		public \DateTimeImmutable $firstRequestSeenAt,
		public \DateTimeImmutable $lastRequestSeenAt,
		public int $requests,
		/** Top attributes contributing to the feedback sample. Keys include topASNs, topCountries, topHosts, topIPs, topJA3Hashes, topJA4s, topPaths, topUserAgents. */
		public array $requestsByAttribute,
		/** Map of bot scores (1-99) to request counts. Sum must equal `requests`. */
		public array $requestsByScore,
		/** Map of score source to request counts. Sum must equal `requests`. */
		public array $requestsByScoreSrc,
		/** Type of feedback report. */
		public \FoundryCo\Cloudflare\Enums\BotManagementZoneFeedbackCreateRequestType $type,
		public ?\DateTimeImmutable $createdAt = null,
		public ?string $subtype = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'description' => $this->description,
		    'expression' => $this->expression,
		    'first_request_seen_at' => $this->firstRequestSeenAt->format(\DateTimeImmutable::ATOM),
		    'last_request_seen_at' => $this->lastRequestSeenAt->format(\DateTimeImmutable::ATOM),
		    'requests' => $this->requests,
		    'requests_by_attribute' => $this->requestsByAttribute,
		    'requests_by_score' => $this->requestsByScore,
		    'requests_by_score_src' => $this->requestsByScoreSrc,
		    'type' => $this->type->value,
		    'created_at' => $this->createdAt?->format(\DateTimeImmutable::ATOM),
		    'subtype' => $this->subtype,
		], fn ($v) => $v !== null);
	}
}
