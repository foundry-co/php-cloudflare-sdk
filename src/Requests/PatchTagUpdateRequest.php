<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Updates a tag (SoT)
 */
readonly class PatchTagUpdateRequest
{
	public function __construct(
		public ?string $activeDuration = null,
		public ?string $actorCategory = null,
		public ?array $aliasGroupNames = null,
		public ?array $aliasGroupNamesInternal = null,
		public ?float $analyticPriority = null,
		public ?string $attributionConfidence = null,
		public ?string $attributionOrganization = null,
		public ?string $categoryUuid = null,
		public ?array $externalReferenceLinks = null,
		public ?string $internalDescription = null,
		public ?string $motive = null,
		public ?string $opsecLevel = null,
		public ?string $originCountryISO = null,
		public ?float $priority = null,
		public ?string $sophisticationLevel = null,
		public ?string $value = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'activeDuration' => $this->activeDuration,
		    'actorCategory' => $this->actorCategory,
		    'aliasGroupNames' => $this->aliasGroupNames,
		    'aliasGroupNamesInternal' => $this->aliasGroupNamesInternal,
		    'analyticPriority' => $this->analyticPriority,
		    'attributionConfidence' => $this->attributionConfidence,
		    'attributionOrganization' => $this->attributionOrganization,
		    'categoryUuid' => $this->categoryUuid,
		    'externalReferenceLinks' => $this->externalReferenceLinks,
		    'internalDescription' => $this->internalDescription,
		    'motive' => $this->motive,
		    'opsecLevel' => $this->opsecLevel,
		    'originCountryISO' => $this->originCountryISO,
		    'priority' => $this->priority,
		    'sophisticationLevel' => $this->sophisticationLevel,
		    'value' => $this->value,
		], fn ($v) => $v !== null);
	}
}
