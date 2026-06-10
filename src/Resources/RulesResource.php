<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class RulesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List rules
	 */
	public function list(
		mixed $namespace = null,
		?\FoundryCo\Cloudflare\Enums\RulesRecursive $recursive = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\RulesIsPublic $isPublic = null,
		?float $limit = null,
		?float $offset = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/rules', null, ['namespace' => $namespace ?? null, 'recursive' => $recursive ?? null, 'search' => $search ?? null, 'isPublic' => $isPublic ?? null, 'limit' => $limit ?? null, 'offset' => $offset ?? null]);
	}


	/**
	 * Create a rule
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CloudforceOneCreateRuleRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/rules', null, $request);
	}


	/**
	 * Delete all rules
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/rules');
	}


	/**
	 * Get managed rules
	 */
	public function managed(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/rules/managed', null, []);
	}


	/**
	 * Search rules
	 */
	public function search(
		mixed $namespace = null,
		?\FoundryCo\Cloudflare\Enums\RulesRecursive $recursive = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\RulesIsPublic $isPublic = null,
		?float $limit = null,
		?float $offset = null,
		?string $query = null,
		?\FoundryCo\Cloudflare\Enums\RulesMode $mode = null,
		?\FoundryCo\Cloudflare\Enums\RulesLanguage $language = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/rules/search', null, ['namespace' => $namespace ?? null, 'recursive' => $recursive ?? null, 'search' => $search ?? null, 'isPublic' => $isPublic ?? null, 'limit' => $limit ?? null, 'offset' => $offset ?? null, 'query' => $query ?? null, 'mode' => $mode ?? null, 'language' => $language ?? null]);
	}


	/**
	 * Get dashboard stats
	 */
	public function stats(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/rules/stats', null, []);
	}


	/**
	 * Get folder tree structure
	 */
	public function tree(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/rules/tree', null, []);
	}


	/**
	 * Validate rule with context
	 */
	public function validate(\FoundryCo\Cloudflare\Requests\CloudforceOneValidateRuleRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/cloudforce-one/rules/validate', null, $request);
	}


	/**
	 * Get a rule
	 */
	public function get(string $id): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/cloudforce-one/rules/' . $id, null, []);
	}


	/**
	 * Update a rule
	 */
	public function update(string $id, \FoundryCo\Cloudflare\Requests\CloudforceOneUpdateRuleRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/cloudforce-one/rules/' . $id, null, $request);
	}


	/**
	 * Delete a rule
	 */
	public function rules(string $id): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/cloudforce-one/rules/' . $id);
	}
}
