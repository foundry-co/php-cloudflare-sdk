<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MCPPortalResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List MCP Portals
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
		?string $search = null,
	): \FoundryCo\Cloudflare\Responses\MCPPortalPortals
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/ai-controls/mcp/portals', \FoundryCo\Cloudflare\Responses\MCPPortalPortals::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null]);
	}


	/**
	 * Create a new MCP Portal
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\McpPortalsApiCreatePortalsRequest $request,
	): \FoundryCo\Cloudflare\Responses\MCPPortalPortals
	{
		return $this->client->post('/accounts/' . $this->accountId . '/access/ai-controls/mcp/portals', \FoundryCo\Cloudflare\Responses\MCPPortalPortals::class, $request);
	}


	/**
	 * Read details of an MCP Portal
	 */
	public function get(string $id): \FoundryCo\Cloudflare\Responses\MCPPortalGateways
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/ai-controls/mcp/portals/' . $id, \FoundryCo\Cloudflare\Responses\MCPPortalGateways::class, []);
	}


	/**
	 * Update a MCP Portal
	 */
	public function update(
		string $id,
		\FoundryCo\Cloudflare\Requests\McpPortalsApiUpdatePortalsRequest $request,
	): \FoundryCo\Cloudflare\Responses\MCPPortalPortals
	{
		return $this->client->put('/accounts/' . $this->accountId . '/access/ai-controls/mcp/portals/' . $id, \FoundryCo\Cloudflare\Responses\MCPPortalPortals::class, $request);
	}


	/**
	 * Delete a MCP Portal
	 */
	public function delete(string $id): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/access/ai-controls/mcp/portals/' . $id);
	}
}
