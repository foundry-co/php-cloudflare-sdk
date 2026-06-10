<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(?int $page = null, ?int $perPage = null, ?string $search = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/ai-controls/mcp/servers', \FoundryCo\Cloudflare\Responses\McpPortalsApiListServers::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null]);
	}


	/**
	 * Create a new MCP Server
	 */
	public function create(\FoundryCo\Cloudflare\Requests\McpPortalsApiCreateServersRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/access/ai-controls/mcp/servers', \FoundryCo\Cloudflare\Responses\McpPortalsApiCreateServers::class, $request);
	}


	/**
	 * Read the details of a MCP Server
	 */
	public function get(string $id): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/ai-controls/mcp/servers/' . $id, \FoundryCo\Cloudflare\Responses\McpPortalsApiFetchServers::class, []);
	}


	/**
	 * Update a MCP Server
	 */
	public function update(string $id, \FoundryCo\Cloudflare\Requests\McpPortalsApiUpdateServersRequest $request): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/access/ai-controls/mcp/servers/' . $id, \FoundryCo\Cloudflare\Responses\McpPortalsApiUpdateServers::class, $request);
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
	public function sync(string $id): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/access/ai-controls/mcp/servers/' . $id . '/sync', \FoundryCo\Cloudflare\Responses\McpPortalsApiSyncServer::class, null);
	}
}
