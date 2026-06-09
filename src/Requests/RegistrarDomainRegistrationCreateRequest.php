<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Requests;

/**
 * Create Registration
 */
readonly class RegistrarDomainRegistrationCreateRequest
{
	public function __construct(
		/**
		 * Fully qualified domain name (FQDN) including the extension
		 * (e.g., `example.com`, `mybrand.app`). The domain name uniquely
		 * identifies a registration — the same domain cannot be registered
		 * twice, making it a natural idempotency key for registration requests.
		 */
		public string $domainName,
		/**
		 * Enable or disable automatic renewal. Defaults to `false` if omitted.
		 * Setting this field to `true` is an explicit opt-in authorizing
		 * Cloudflare to charge the account's default payment method up to 30
		 * days before domain expiry to renew the domain automatically.
		 * Renewal pricing may change over time based on registry pricing.
		 */
		public ?bool $autoRenew = null,
		/**
		 * Contact data for the registration request.
		 *
		 * If the `contacts` object is omitted entirely from the request, or if
		 * `contacts.registrant` is not provided, the system will use the account's
		 * default address book entry as the registrant contact. This default must be
		 * pre-configured by the account owner at
		 * `https://dash.cloudflare.com/{account_id}/domains/registrations`, where
		 * they can create or update the address book entry and accept the required
		 * agreement. No API exists for managing address book entries at this time.
		 *
		 * If no default address book entry exists and no registrant contact is
		 * provided, the registration request will fail with a validation error.
		 */
		public ?\FoundryCo\Cloudflare\Responses\RegistrarDomainRegistrationCreateRequestContacts $contacts = null,
		/**
		 * WHOIS privacy mode for the registration. Defaults to `redaction`.
		 * - `off`: Do not request WHOIS privacy.
		 * - `redaction`: Request WHOIS redaction where supported by the extension.
		 *   Some extensions do not support privacy/redaction.
		 */
		public ?\FoundryCo\Cloudflare\Enums\RegistrarDomainRegistrationCreateRequestPrivacyMode $privacyMode = null,
		/**
		 * Number of years to register (1–10). If omitted, defaults to the
		 * minimum registration period required by the registry for this
		 * extension. For most extensions this is 1 year, but some extensions
		 * require longer minimum terms (e.g., `.ai` requires a minimum of
		 * 2 years).
		 *
		 * The registry for each extension may also enforce its own maximum
		 * registration term. If the requested value exceeds the registry's
		 * maximum, the registration will be rejected. When in doubt, use the
		 * default by omitting this field.
		 */
		public ?int $years = null,
	) {
	}


	public function toArray(): array
	{
		return array_filter([
		    'domain_name' => $this->domainName,
		    'auto_renew' => $this->autoRenew,
		    'contacts' => $this->contacts?->toArray(),
		    'privacy_mode' => $this->privacyMode?->value,
		    'years' => $this->years,
		], fn ($v) => $v !== null);
	}
}
