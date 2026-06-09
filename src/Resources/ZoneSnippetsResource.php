<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZoneSnippetsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List zone snippets
	 */
	public function list(?int $page = null, ?int $perPage = null): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/snippets', null, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * List zone snippet rules
	 */
	public function snippetRules(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/snippets/snippet_rules', null, []);
	}


	/**
	 * Update zone snippet rules
	 */
	public function update(\FoundryCo\Cloudflare\Requests\UpdateZoneSnippetRulesRequest $request): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/snippets/snippet_rules', null, $request);
	}


	/**
	 * Delete zone snippet rules
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/snippets/snippet_rules');
	}


	/**
	 * Get a zone snippet
	 */
	public function get(string $snippetName): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/snippets/' . $snippetName, null, []);
	}


	/**
	 * Update a zone snippet
	 */
	public function snippets(string $snippetName): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/snippets/' . $snippetName, null, null);
	}


	/**
	 * Delete a zone snippet
	 */
	public function deleteZoneSnippet(string $snippetName): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/snippets/' . $snippetName);
	}


	/**
	 * Get a zone snippet content
	 */
	public function content(string $snippetName): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/snippets/' . $snippetName . '/content', null, []);
	}
}
