<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class DnsRecordsForAZoneBatchDnsRecordsDeletesItem
{
	public function __construct(
		/** When the record was created. */
		public ?\DateTimeImmutable $createdOn = null,
		/** Identifier. */
		public ?string $id = null,
		/** Extra Cloudflare-specific information about the record. */
		public ?array $meta = null,
		/** When the record was last modified. */
		public ?\DateTimeImmutable $modifiedOn = null,
		/** Whether the record can be proxied by Cloudflare or not. */
		public ?bool $proxiable = null,
		/** Comments or notes about the DNS record. This field has no effect on DNS responses. */
		public ?string $comment = null,
		/** Complete DNS record name, including the zone name, in Punycode. */
		public ?string $name = null,
		/** Whether the record is receiving the performance and security benefits of Cloudflare. */
		public ?bool $proxied = null,
		/** Settings for the DNS record. */
		public ?DnsRecordsForAZoneBatchDnsRecordsDeletesItemSettings $settings = null,
		/** Custom tags for the DNS record. This field has no effect on DNS responses. */
		public ?array $tags = null,
		/** Time To Live (TTL) of the DNS record in seconds. Setting to 1 means 'automatic'. Value must be between 60 and 86400, with the minimum reduced to 30 for Enterprise zones. */
		public mixed $ttl = null,
		/** A valid IPv4 address. */
		public ?string $content = null,
		/** Enables private network routing to the origin. */
		public ?bool $privateRouting = null,
		/** Record type. */
		public ?\FoundryCo\Cloudflare\Enums\DnsRecordsForAZoneBatchDnsRecordsDeletesItemType $type = null,
		/** Required for MX and URI records; ignored for other record types (but may still be returned by the API). Records with lower priorities are preferred. This field is to be deprecated in favor of the priority field within the data map. */
		public ?float $priority = null,
		/** Components of a CAA record. */
		public ?DnsRecordsForAZoneBatchDnsRecordsDeletesItemData $data = null,
		/** When the record comment was last modified. Omitted if there is no comment. */
		public ?\DateTimeImmutable $commentModifiedOn = null,
		/** When the record tags were last modified. Omitted if there are no tags. */
		public ?\DateTimeImmutable $tagsModifiedOn = null,
	) {
	}
}
