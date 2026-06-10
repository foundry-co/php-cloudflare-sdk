<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class PageRulesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List Page Rules
	 */
	public function list(
		?\FoundryCo\Cloudflare\Enums\PageRulesOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\PageRulesDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\PageRulesMatch $match = null,
		?\FoundryCo\Cloudflare\Enums\PageRulesStatus $status = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/pagerules', \FoundryCo\Cloudflare\Responses\PageRulesListPageRules::class, ['order' => $order ?? null, 'direction' => $direction ?? null, 'match' => $match ?? null, 'status' => $status ?? null]);
	}


	/**
	 * Create a Page Rule
	 */
	public function create(\FoundryCo\Cloudflare\Requests\PageRulesCreateAPageRuleRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/pagerules', \FoundryCo\Cloudflare\Responses\PageRulesCreateAPageRule::class, $request);
	}


	/**
	 * Get a Page Rule
	 */
	public function get(string $pageruleId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/pagerules/' . $pageruleId, \FoundryCo\Cloudflare\Responses\PageRulesGetAPageRule::class, []);
	}


	/**
	 * Update a Page Rule
	 */
	public function update(
		string $pageruleId,
		\FoundryCo\Cloudflare\Requests\PageRulesUpdateAPageRuleRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/pagerules/' . $pageruleId, \FoundryCo\Cloudflare\Responses\PageRulesUpdateAPageRule::class, $request);
	}


	/**
	 * Edit a Page Rule
	 */
	public function pagerules(
		string $pageruleId,
		\FoundryCo\Cloudflare\Requests\PageRulesEditAPageRuleRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/pagerules/' . $pageruleId, \FoundryCo\Cloudflare\Responses\PageRulesEditAPageRule::class, $request);
	}


	/**
	 * Delete a Page Rule
	 */
	public function delete(string $pageruleId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/pagerules/' . $pageruleId);
	}
}
