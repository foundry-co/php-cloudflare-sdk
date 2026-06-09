<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class RegistrarDomainsDomains
{
	public function __construct(
		/** Shows if a domain is available for transferring into Cloudflare Registrar. */
		public ?bool $available = null,
		/** Indicates if the domain can be registered as a new domain. */
		public ?bool $canRegister = null,
		/** Shows time of creation. */
		public ?\DateTimeImmutable $createdAt = null,
		/** Shows name of current registrar. */
		public ?string $currentRegistrar = null,
		/** Shows when domain name registration expires. */
		public ?\DateTimeImmutable $expiresAt = null,
		/** Domain identifier. */
		public ?string $id = null,
		/** Shows whether a registrar lock is in place for a domain. */
		public ?bool $locked = null,
		/** Shows contact information for domain registrant. */
		public mixed $registrantContact = null,
		/** A comma-separated list of registry status codes. A full list of status codes can be found at [EPP Status Codes](https://www.icann.org/resources/pages/epp-status-codes-2014-06-16-en). */
		public ?string $registryStatuses = null,
		/** Whether a particular TLD is currently supported by Cloudflare Registrar. Refer to [TLD Policies](https://www.cloudflare.com/tld-policies/) for a list of supported TLDs. */
		public ?bool $supportedTld = null,
		/** Statuses for domain transfers into Cloudflare Registrar. */
		public ?RegistrarDomainsDomainsTransferIn $transferIn = null,
		/** Last updated. */
		public ?\DateTimeImmutable $updatedAt = null,
	) {
	}
}
