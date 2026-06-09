<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Responses;

readonly class UserBillingProfileDetails
{
	public function __construct(
		public ?string $accountType = null,
		public ?string $address = null,
		public ?string $address2 = null,
		public ?string $balance = null,
		public ?int $cardExpiryMonth = null,
		public ?int $cardExpiryYear = null,
		public ?string $cardNumber = null,
		public ?string $city = null,
		public ?string $company = null,
		public ?string $country = null,
		public ?\DateTimeImmutable $createdOn = null,
		public ?string $deviceData = null,
		public ?\DateTimeImmutable $editedOn = null,
		public ?string $enterpriseBillingEmail = null,
		public ?string $enterprisePrimaryEmail = null,
		public ?string $firstName = null,
		/** Billing item identifier tag. */
		public ?string $id = null,
		public ?bool $isPartner = null,
		public ?string $lastName = null,
		public ?\DateTimeImmutable $nextBillDate = null,
		public ?string $paymentAddress = null,
		public ?string $paymentAddress2 = null,
		public ?string $paymentCity = null,
		public ?string $paymentCountry = null,
		public ?string $paymentEmail = null,
		public ?string $paymentFirstName = null,
		public ?string $paymentGateway = null,
		public ?string $paymentLastName = null,
		public ?string $paymentNonce = null,
		public ?string $paymentState = null,
		public ?string $paymentZipcode = null,
		public ?string $primaryEmail = null,
		public ?string $state = null,
		public ?string $taxIdType = null,
		public ?string $telephone = null,
		public ?bool $useLegacy = null,
		public ?string $validationCode = null,
		public ?string $vat = null,
		public ?string $zipcode = null,
	) {
	}
}
