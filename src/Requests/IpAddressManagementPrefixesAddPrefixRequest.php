<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Add Prefix
 */
readonly class IpAddressManagementPrefixesAddPrefixRequest
{
	public function __construct(
		/** Autonomous System Number (ASN) the prefix will be advertised under. */
		public int $asn,
		/** IP Prefix in Classless Inter-Domain Routing format. */
		public string $cidr,
		/** Whether Cloudflare is allowed to generate the LOA document on behalf of the prefix owner. */
		public ?bool $delegateLoaCreation = null,
		/** Description of the prefix. */
		public ?string $description = null,
		/** Identifier for the uploaded LOA document. */
		public ?string $loaDocumentId = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'asn' => $this->asn,
		    'cidr' => $this->cidr,
		    'delegate_loa_creation' => $this->delegateLoaCreation,
		    'description' => $this->description,
		    'loa_document_id' => $this->loaDocumentId,
		], fn ($v) => $v !== null);
	}
}
