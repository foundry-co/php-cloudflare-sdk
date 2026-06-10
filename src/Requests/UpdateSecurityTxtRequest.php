<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Updates security.txt
 */
readonly class UpdateSecurityTxtRequest
{
	public function __construct(
		public ?array $acknowledgments = null,
		public ?array $canonical = null,
		public ?array $contact = null,
		public ?bool $enabled = null,
		public ?array $encryption = null,
		public ?\DateTimeImmutable $expires = null,
		public ?array $hiring = null,
		public ?array $policy = null,
		public ?string $preferredLanguages = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'acknowledgments' => $this->acknowledgments,
		    'canonical' => $this->canonical,
		    'contact' => $this->contact,
		    'enabled' => $this->enabled,
		    'encryption' => $this->encryption,
		    'expires' => $this->expires?->format(\DateTimeImmutable::ATOM),
		    'hiring' => $this->hiring,
		    'policy' => $this->policy,
		    'preferred_languages' => $this->preferredLanguages,
		], fn ($v) => $v !== null);
	}
}
