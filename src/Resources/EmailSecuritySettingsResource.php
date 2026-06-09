<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class EmailSecuritySettingsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List email allow policies
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsDirection $direction = null,
		?bool $isExemptRecipient = null,
		?bool $isTrustedSender = null,
		?bool $isAcceptableSender = null,
		?bool $verifySender = null,
		mixed $patternType = null,
		?string $pattern = null,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPolicies
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/settings/allow_policies', \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPolicies::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null, 'isExemptRecipient' => $isExemptRecipient ?? null, 'isTrustedSender' => $isTrustedSender ?? null, 'isAcceptableSender' => $isAcceptableSender ?? null, 'verifySender' => $verifySender ?? null, 'patternType' => $patternType ?? null, 'pattern' => $pattern ?? null]);
	}


	/**
	 * Create email allow policy
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\EmailSecurityCreateAllowPolicyRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPolicy
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email-security/settings/allow_policies', \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPolicy::class, $request);
	}


	/**
	 * Batch allow policies operations
	 */
	public function batch(
		\FoundryCo\Cloudflare\Requests\EmailSecurityBatchAllowPoliciesRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPolicies
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email-security/settings/allow_policies/batch', \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPolicies::class, $request);
	}


	/**
	 * Get an email allow policy
	 */
	public function get(): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPolicy
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/settings/allow_policies/' . $policyId, \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPolicy::class, []);
	}


	/**
	 * Update an email allow policy
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\EmailSecurityUpdateAllowPolicyRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPolicy
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/email-security/settings/allow_policies/' . $policyId, \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPolicy::class, $request);
	}


	/**
	 * Delete an email allow policy
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/email-security/settings/allow_policies/' . $policyId);
	}


	/**
	 * List blocked email senders
	 */
	public function blockSenders(
		?int $page = null,
		?int $perPage = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsDirection $direction = null,
		mixed $patternType = null,
		?string $pattern = null,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsSenders
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/settings/block_senders', \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsSenders::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null, 'patternType' => $patternType ?? null, 'pattern' => $pattern ?? null]);
	}


	/**
	 * Create blocked email sender
	 */
	public function emailSecurityCreateBlockedSender(
		\FoundryCo\Cloudflare\Requests\EmailSecurityCreateBlockedSenderRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsSender
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email-security/settings/block_senders', \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsSender::class, $request);
	}


	/**
	 * Batch blocked senders operations
	 */
	public function emailSecurityBatchBlockedSenders(
		\FoundryCo\Cloudflare\Requests\EmailSecurityBatchBlockedSendersRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsSenders
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email-security/settings/block_senders/batch', \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsSenders::class, $request);
	}


	/**
	 * Get a blocked email sender
	 */
	public function emailSecurityGetBlockedSender(): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsSender
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/settings/block_senders/' . $patternId, \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsSender::class, []);
	}


	/**
	 * Update a blocked email sender
	 */
	public function emailSecurityUpdateBlockedSender(
		\FoundryCo\Cloudflare\Requests\EmailSecurityUpdateBlockedSenderRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsSender
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/email-security/settings/block_senders/' . $patternId, \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsSender::class, $request);
	}


	/**
	 * Delete a blocked email sender
	 */
	public function emailSecurityDeleteBlockedSender(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/email-security/settings/block_senders/' . $patternId);
	}


	/**
	 * List protected email domains
	 */
	public function domains(
		?int $page = null,
		?int $perPage = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsAllowedDeliveryMode $allowedDeliveryMode = null,
		?array $domain = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsActiveDeliveryMode $activeDeliveryMode = null,
		?string $integrationId = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsStatus $status = null,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsDomains
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/settings/domains', \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsDomains::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null, 'allowedDeliveryMode' => $allowedDeliveryMode ?? null, 'domain' => $domain ?? null, 'activeDeliveryMode' => $activeDeliveryMode ?? null, 'integrationId' => $integrationId ?? null, 'status' => $status ?? null]);
	}


	/**
	 * Get an email domain
	 */
	public function emailSecurityGetDomain(): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsDomain
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/settings/domains/' . $domainId, \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsDomain::class, []);
	}


	/**
	 * Update an email domain
	 */
	public function emailSecurityUpdateDomain(
		\FoundryCo\Cloudflare\Requests\EmailSecurityUpdateDomainRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsDomain
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/email-security/settings/domains/' . $domainId, \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsDomain::class, $request);
	}


	/**
	 * Unprotect an email domain
	 */
	public function emailSecurityDeleteDomain(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/email-security/settings/domains/' . $domainId);
	}


	/**
	 * List entries in impersonation registry
	 */
	public function impersonationRegistry(
		?int $page = null,
		?int $perPage = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsProvenance $provenance = null,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsRegistry
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/settings/impersonation_registry', \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsRegistry::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null, 'provenance' => $provenance ?? null]);
	}


	/**
	 * Create impersonation registry entry
	 */
	public function emailSecurityCreateImpersonationRegistry(
		\FoundryCo\Cloudflare\Requests\EmailSecurityCreateImpersonationRegistryRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsRegistry
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email-security/settings/impersonation_registry', \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsRegistry::class, $request);
	}


	/**
	 * Get an impersonation registry entry
	 */
	public function emailSecurityGetImpersonationRegistry(
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsRegistry
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/settings/impersonation_registry/' . $impersonationRegistryId, \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsRegistry::class, []);
	}


	/**
	 * Update an impersonation registry entry
	 */
	public function emailSecurityUpdateImpersonationRegistry(
		\FoundryCo\Cloudflare\Requests\EmailSecurityUpdateImpersonationRegistryRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsRegistry
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/email-security/settings/impersonation_registry/' . $impersonationRegistryId, \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsRegistry::class, $request);
	}


	/**
	 * Delete an impersonation registry entry
	 */
	public function emailSecurityDeleteImpersonationRegistry(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/email-security/settings/impersonation_registry/' . $impersonationRegistryId);
	}


	/**
	 * List sending domain restrictions
	 */
	public function sendingDomainRestrictions(
		?int $page = null,
		?int $perPage = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsDirection $direction = null,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsRestrictions
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/settings/sending_domain_restrictions', \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsRestrictions::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create a sending domain restriction
	 */
	public function emailSecurityCreateSendingDomainRestriction(
		\FoundryCo\Cloudflare\Requests\EmailSecurityCreateSendingDomainRestrictionRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsRestriction
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email-security/settings/sending_domain_restrictions', \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsRestriction::class, $request);
	}


	/**
	 * Batch sending domain restrictions operations
	 */
	public function emailSecurityBatchSendingDomainRestrictions(
		\FoundryCo\Cloudflare\Requests\EmailSecurityBatchSendingDomainRestrictionsRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsRestrictions
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email-security/settings/sending_domain_restrictions/batch', \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsRestrictions::class, $request);
	}


	/**
	 * Get a sending domain restriction
	 */
	public function emailSecurityGetSendingDomainRestriction(
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsRestriction
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/settings/sending_domain_restrictions/' . $sendingDomainRestrictionId, \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsRestriction::class, []);
	}


	/**
	 * Update a sending domain restriction
	 */
	public function emailSecurityUpdateSendingDomainRestriction(
		\FoundryCo\Cloudflare\Requests\EmailSecurityUpdateSendingDomainRestrictionRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsRestriction
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/email-security/settings/sending_domain_restrictions/' . $sendingDomainRestrictionId, \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsRestriction::class, $request);
	}


	/**
	 * Delete a sending domain restriction
	 */
	public function emailSecurityDeleteSendingDomainRestriction(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/email-security/settings/sending_domain_restrictions/' . $sendingDomainRestrictionId);
	}


	/**
	 * List trusted email domains
	 */
	public function trustedDomains(
		?int $page = null,
		?int $perPage = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\EmailSecuritySettingsDirection $direction = null,
		?bool $isRecent = null,
		?bool $isSimilarity = null,
		?string $pattern = null,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsDomains
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/settings/trusted_domains', \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsDomains::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null, 'isRecent' => $isRecent ?? null, 'isSimilarity' => $isSimilarity ?? null, 'pattern' => $pattern ?? null]);
	}


	/**
	 * Create trusted email domain
	 */
	public function emailSecurityCreateTrustedDomain(
		\FoundryCo\Cloudflare\Requests\EmailSecurityCreateTrustedDomainRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsDomain
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email-security/settings/trusted_domains', \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsDomain::class, $request);
	}


	/**
	 * Batch trusted domains operations
	 */
	public function emailSecurityBatchTrustedDomains(
		\FoundryCo\Cloudflare\Requests\EmailSecurityBatchTrustedDomainsRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsDomains
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email-security/settings/trusted_domains/batch', \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsDomains::class, $request);
	}


	/**
	 * Get a trusted email domain
	 */
	public function emailSecurityGetTrustedDomain(): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsDomain
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/settings/trusted_domains/' . $trustedDomainId, \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsDomain::class, []);
	}


	/**
	 * Update a trusted email domain
	 */
	public function emailSecurityUpdateTrustedDomain(
		\FoundryCo\Cloudflare\Requests\EmailSecurityUpdateTrustedDomainRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsDomain
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/email-security/settings/trusted_domains/' . $trustedDomainId, \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsDomain::class, $request);
	}


	/**
	 * Delete a trusted email domain
	 */
	public function emailSecurityDeleteTrustedDomain(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/email-security/settings/trusted_domains/' . $trustedDomainId);
	}


	/**
	 * List URL ignore patterns
	 */
	public function urlIgnorePatterns(
		?int $page = null,
		?int $perPage = null,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPatterns
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/settings/url_ignore_patterns', \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPatterns::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create a URL ignore pattern
	 */
	public function emailSecurityCreateUrlIgnorePattern(
		\FoundryCo\Cloudflare\Requests\EmailSecurityCreateUrlIgnorePatternRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPattern
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email-security/settings/url_ignore_patterns', \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPattern::class, $request);
	}


	/**
	 * Batch URL ignore patterns
	 */
	public function emailSecurityBatchUrlIgnorePatterns(
		\FoundryCo\Cloudflare\Requests\EmailSecurityBatchUrlIgnorePatternsRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPatterns
	{
		return $this->client->post('/accounts/' . $this->accountId . '/email-security/settings/url_ignore_patterns/batch', \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPatterns::class, $request);
	}


	/**
	 * Get a URL ignore pattern
	 */
	public function emailSecurityGetUrlIgnorePattern(): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPattern
	{
		return $this->client->get('/accounts/' . $this->accountId . '/email-security/settings/url_ignore_patterns/' . $patternId, \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPattern::class, []);
	}


	/**
	 * Update a URL ignore pattern
	 */
	public function emailSecurityUpdateUrlIgnorePattern(
		\FoundryCo\Cloudflare\Requests\EmailSecurityUpdateUrlIgnorePatternRequest $request,
	): \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPattern
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/email-security/settings/url_ignore_patterns/' . $patternId, \FoundryCo\Cloudflare\Responses\EmailSecuritySettingsPattern::class, $request);
	}


	/**
	 * Delete a URL ignore pattern
	 */
	public function emailSecurityDeleteUrlIgnorePattern(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/email-security/settings/url_ignore_patterns/' . $patternId);
	}
}
