<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/rules', \FoundryCo\Cloudflare\Responses\ListDexRules::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'sortOrder' => $sortOrder ?? null, 'sortBy' => $sortBy ?? null, 'name' => $name ?? null]);
	}


	/**
	 * Create a DEX Rule
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CreateDexRuleRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dex/rules', \FoundryCo\Cloudflare\Responses\CreateDexRule::class, $request);
	}


	/**
	 * Get DEX Rule
	 */
	public function get(string $ruleId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\GetDexRule::class, []);
	}


	/**
	 * Update a DEX Rule
	 */
	public function update(string $ruleId, \FoundryCo\Cloudflare\Requests\UpdateDexRuleRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/dex/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\UpdateDexRule::class, $request);
	}


	/**
	 * Delete a DEX Rule
	 */
	public function delete(string $ruleId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/dex/rules/' . $ruleId);
	}
}
