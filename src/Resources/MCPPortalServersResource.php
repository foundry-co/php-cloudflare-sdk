<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MCPPortalServersResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List MCP Servers
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
		?string $search = null,
	): \FoundryCo\Cloudflare\Responses\MCPPortalServersServers
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/ai-controls/mcp/servers', \FoundryCo\Cloudflare\Responses\MCPPortalServersServers::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null]);
	}


	/**
	 * Create a new MCP Server
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\McpPortalsApiCreateServersRequest $request,
	): \FoundryCo\Cloudflare\Responses\MCPPortalServersServers
	{
		return $this->client->post('/accounts/' . $this->accountId . '/access/ai-controls/mcp/servers', \FoundryCo\Cloudflare\Responses\MCPPortalServersServers::class, $request);
	}


	/**
	 * Read the details of a MCP Server
	 */
	public function get(string $id): \FoundryCo\Cloudflare\Responses\MCPPortalServersServers
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/ai-controls/mcp/servers/' . $id, \FoundryCo\Cloudflare\Responses\MCPPortalServersServers::class, []);
	}


	/**
	 * Update a MCP Server
	 */
	public function update(
		string $id,
		\FoundryCo\Cloudflare\Requests\McpPortalsApiUpdateServersRequest $request,
	): \FoundryCo\Cloudflare\Responses\MCPPortalServersServers
	{
		return $this->client->put('/accounts/' . $this->accountId . '/access/ai-controls/mcp/servers/' . $id, \FoundryCo\Cloudflare\Responses\MCPPortalServersServers::class, $request);
	}


	/**
	 * Delete a MCP Server
	 */
	public function delete(string $id): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/access/ai-controls/mcp/servers/' . $id);
	}


	/**
	 * Sync MCP Server Capabilities
	 */
	public function sync(string $id): \FoundryCo\Cloudflare\Responses\MCPPortalServersServer
	{
		return $this->client->post('/accounts/' . $this->accountId . '/access/ai-controls/mcp/servers/' . $id . '/sync', \FoundryCo\Cloudflare\Responses\MCPPortalServersServer::class, null);
	}
}
