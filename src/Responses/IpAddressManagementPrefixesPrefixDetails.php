<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class IpAddressManagementPrefixesPrefixDetails
{
	public function __construct(
		/** Identifier of a Cloudflare account. */
		public ?string $accountId = null,
		/** Prefix advertisement status to the Internet. This field is only not 'null' if on demand is enabled. */
		public ?bool $advertised = null,
		/** Last time the advertisement status was changed. This field is only not 'null' if on demand is enabled. */
		public ?\DateTimeImmutable $advertisedModifiedAt = null,
		/** Approval state of the prefix (P = pending, V = active). */
		public ?string $approved = null,
		/** Autonomous System Number (ASN) the prefix will be advertised under. */
		public ?int $asn = null,
		/** IP Prefix in Classless Inter-Domain Routing format. */
		public ?string $cidr = null,
		public ?\DateTimeImmutable $createdAt = null,
		/** Whether Cloudflare is allowed to generate the LOA document on behalf of the prefix owner. */
		public ?bool $delegateLoaCreation = null,
		/** Description of the prefix. */
		public ?string $description = null,
		/** Identifier of an IP Prefix. */
		public ?string $id = null,
		/** State of one kind of validation for an IP prefix. */
		public ?string $irrValidationState = null,
		/** Identifier for the uploaded LOA document. */
		public ?string $loaDocumentId = null,
		public ?\DateTimeImmutable $modifiedAt = null,
		/** Whether advertisement of the prefix to the Internet may be dynamically enabled or disabled. */
		public ?bool $onDemandEnabled = null,
		/** Whether advertisement status of the prefix is locked, meaning it cannot be changed. */
		public ?bool $onDemandLocked = null,
		/** State of one kind of validation for an IP prefix. */
		public ?string $ownershipValidationState = null,
		/** Token provided to demonstrate ownership of the prefix. */
		public ?string $ownershipValidationToken = null,
		/** State of one kind of validation for an IP prefix. */
		public ?string $rpkiValidationState = null,
	) {
	}
}
