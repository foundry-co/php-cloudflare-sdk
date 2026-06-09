<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DEXRulesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List DEX Rules
	 */
	public function list(
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\DEXRulesSortOrder $sortOrder = null,
		?\FoundryCo\Cloudflare\Enums\DEXRulesSortBy $sortBy = null,
		?string $name = null,
	): \FoundryCo\Cloudflare\Responses\DEXRulesRules
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/rules', \FoundryCo\Cloudflare\Responses\DEXRulesRules::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'sortOrder' => $sortOrder ?? null, 'sortBy' => $sortBy ?? null, 'name' => $name ?? null]);
	}


	/**
	 * Create a DEX Rule
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\CreateDexRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\DEXRulesRule
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dex/rules', \FoundryCo\Cloudflare\Responses\DEXRulesRule::class, $request);
	}


	/**
	 * Get DEX Rule
	 */
	public function get(string $ruleId): \FoundryCo\Cloudflare\Responses\DEXRulesRule
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\DEXRulesRule::class, []);
	}


	/**
	 * Update a DEX Rule
	 */
	public function update(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\UpdateDexRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\DEXRulesRule
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/dex/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\DEXRulesRule::class, $request);
	}


	/**
	 * Delete a DEX Rule
	 */
	public function delete(string $ruleId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dex/rules/' . $ruleId);
	}
}
