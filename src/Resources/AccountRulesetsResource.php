<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccountRulesetsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List account rulesets
	 */
	public function list(?string $cursor = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/rulesets', null, ['cursor' => $cursor ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create an account ruleset
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CreateAccountRulesetRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/rulesets', null, $request);
	}


	/**
	 * Get an account entry point ruleset
	 */
	public function get(\FoundryCo\Cloudflare\Enums\AccountRulesetsRulesetPhase $rulesetPhase): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/rulesets/phases/' . $rulesetPhase . '/entrypoint', null, []);
	}


	/**
	 * Update an account entry point ruleset
	 */
	public function update(
		\FoundryCo\Cloudflare\Enums\AccountRulesetsRulesetPhase $rulesetPhase,
		\FoundryCo\Cloudflare\Requests\UpdateAccountEntrypointRulesetRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/rulesets/phases/' . $rulesetPhase . '/entrypoint', null, $request);
	}


	/**
	 * List an account entry point ruleset's versions
	 */
	public function versions(\FoundryCo\Cloudflare\Enums\AccountRulesetsRulesetPhase $rulesetPhase): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/rulesets/phases/' . $rulesetPhase . '/entrypoint/versions', null, []);
	}


	/**
	 * Get an account entry point ruleset version
	 */
	public function getAccountEntrypointRulesetVersion(
		string $rulesetVersion,
		\FoundryCo\Cloudflare\Enums\AccountRulesetsRulesetPhase $rulesetPhase,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/rulesets/phases/' . $rulesetPhase . '/entrypoint/versions/' . $rulesetVersion, null, []);
	}


	/**
	 * Get an account ruleset
	 */
	public function rulesets(string $rulesetId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/rulesets/' . $rulesetId, null, []);
	}


	/**
	 * Update an account ruleset
	 */
	public function updateAccountRuleset(
		string $rulesetId,
		\FoundryCo\Cloudflare\Requests\UpdateAccountRulesetRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/rulesets/' . $rulesetId, null, $request);
	}


	/**
	 * Delete an account ruleset
	 */
	public function delete(string $rulesetId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/rulesets/' . $rulesetId);
	}


	/**
	 * Create an account ruleset rule
	 */
	public function rules(
		string $rulesetId,
		\FoundryCo\Cloudflare\Requests\CreateAccountRulesetRuleRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/rulesets/' . $rulesetId . '/rules', null, $request);
	}


	/**
	 * Update an account ruleset rule
	 */
	public function updateAccountRulesetRule(
		string $ruleId,
		string $rulesetId,
		\FoundryCo\Cloudflare\Requests\UpdateAccountRulesetRuleRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/rulesets/' . $rulesetId . '/rules/' . $ruleId, null, $request);
	}


	/**
	 * Delete an account ruleset rule
	 */
	public function deleteAccountRulesetRule(string $ruleId, string $rulesetId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/rulesets/' . $rulesetId . '/rules/' . $ruleId);
	}


	/**
	 * List an account ruleset's versions
	 */
	public function listAccountRulesetVersions(string $rulesetId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/rulesets/' . $rulesetId . '/versions', null, []);
	}


	/**
	 * Get an account ruleset version
	 */
	public function getAccountRulesetVersion(string $rulesetVersion, string $rulesetId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/rulesets/' . $rulesetId . '/versions/' . $rulesetVersion, null, []);
	}


	/**
	 * Delete an account ruleset version
	 */
	public function deleteAccountRulesetVersion(string $rulesetVersion, string $rulesetId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/rulesets/' . $rulesetId . '/versions/' . $rulesetVersion);
	}


	/**
	 * List an account ruleset version's rules by tag
	 */
	public function byTag(string $ruleTag, string $rulesetVersion, string $rulesetId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/rulesets/' . $rulesetId . '/versions/' . $rulesetVersion . '/by_tag/' . $ruleTag, null, []);
	}
}
