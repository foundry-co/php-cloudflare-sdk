<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class PageShieldResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * Get Page Shield settings
	 */
	public function list(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/page_shield', \FoundryCo\Cloudflare\Responses\PageShieldGetSettings::class, []);
	}


	/**
	 * Update Page Shield settings
	 */
	public function update(\FoundryCo\Cloudflare\Requests\PageShieldUpdateSettingsRequest $request): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/page_shield', \FoundryCo\Cloudflare\Responses\PageShieldUpdateSettings::class, $request);
	}


	/**
	 * List Page Shield connections
	 */
	public function connections(
		?string $excludeUrls = null,
		?string $urls = null,
		?string $hosts = null,
		?string $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\PageShieldOrderBy $orderBy = null,
		?\FoundryCo\Cloudflare\Enums\PageShieldDirection $direction = null,
		?bool $prioritizeMalicious = null,
		?bool $excludeCdnCgi = null,
		?string $status = null,
		?string $pageUrl = null,
		?\FoundryCo\Cloudflare\Enums\PageShieldExport $export = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/page_shield/connections', \FoundryCo\Cloudflare\Responses\PageShieldListConnections::class, ['excludeUrls' => $excludeUrls ?? null, 'urls' => $urls ?? null, 'hosts' => $hosts ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'orderBy' => $orderBy ?? null, 'direction' => $direction ?? null, 'prioritizeMalicious' => $prioritizeMalicious ?? null, 'excludeCdnCgi' => $excludeCdnCgi ?? null, 'status' => $status ?? null, 'pageUrl' => $pageUrl ?? null, 'export' => $export ?? null]);
	}


	/**
	 * Get a Page Shield connection
	 */
	public function get(string $connectionId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/page_shield/connections/' . $connectionId, \FoundryCo\Cloudflare\Responses\PageShieldGetConnection::class, []);
	}


	/**
	 * List Page Shield Cookies
	 */
	public function cookies(
		?string $hosts = null,
		?string $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\PageShieldOrderBy $orderBy = null,
		?\FoundryCo\Cloudflare\Enums\PageShieldDirection $direction = null,
		?string $pageUrl = null,
		?\FoundryCo\Cloudflare\Enums\PageShieldExport $export = null,
		?string $name = null,
		?bool $secure = null,
		?bool $httpOnly = null,
		?\FoundryCo\Cloudflare\Enums\PageShieldSameSite $sameSite = null,
		?\FoundryCo\Cloudflare\Enums\PageShieldType $type = null,
		?string $path = null,
		?string $domain = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/page_shield/cookies', \FoundryCo\Cloudflare\Responses\PageShieldListCookies::class, ['hosts' => $hosts ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'orderBy' => $orderBy ?? null, 'direction' => $direction ?? null, 'pageUrl' => $pageUrl ?? null, 'export' => $export ?? null, 'name' => $name ?? null, 'secure' => $secure ?? null, 'httpOnly' => $httpOnly ?? null, 'sameSite' => $sameSite ?? null, 'type' => $type ?? null, 'path' => $path ?? null, 'domain' => $domain ?? null]);
	}


	/**
	 * Get a Page Shield cookie
	 */
	public function pageShieldGetCookie(string $cookieId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/page_shield/cookies/' . $cookieId, \FoundryCo\Cloudflare\Responses\PageShieldGetCookie::class, []);
	}


	/**
	 * List Page Shield policies
	 */
	public function policies(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/page_shield/policies', \FoundryCo\Cloudflare\Responses\PageShieldListPolicies::class, []);
	}


	/**
	 * Create a Page Shield policy
	 */
	public function create(\FoundryCo\Cloudflare\Requests\PageShieldCreatePolicyRequest $request): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/page_shield/policies', \FoundryCo\Cloudflare\Responses\PageShieldCreatePolicy::class, $request);
	}


	/**
	 * Get a Page Shield policy
	 */
	public function pageShieldGetPolicy(string $policyId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/page_shield/policies/' . $policyId, \FoundryCo\Cloudflare\Responses\PageShieldGetPolicy::class, []);
	}


	/**
	 * Update a Page Shield policy
	 */
	public function pageShieldUpdatePolicy(
		string $policyId,
		\FoundryCo\Cloudflare\Requests\PageShieldUpdatePolicyRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/page_shield/policies/' . $policyId, \FoundryCo\Cloudflare\Responses\PageShieldUpdatePolicy::class, $request);
	}


	/**
	 * Delete a Page Shield policy
	 */
	public function delete(string $policyId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/page_shield/policies/' . $policyId);
	}


	/**
	 * List Page Shield scripts
	 */
	public function scripts(
		?string $excludeUrls = null,
		?string $urls = null,
		?string $hosts = null,
		?string $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\PageShieldOrderBy $orderBy = null,
		?\FoundryCo\Cloudflare\Enums\PageShieldDirection $direction = null,
		?bool $prioritizeMalicious = null,
		?bool $excludeCdnCgi = null,
		?bool $excludeDuplicates = null,
		?string $status = null,
		?string $pageUrl = null,
		?\FoundryCo\Cloudflare\Enums\PageShieldExport $export = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/page_shield/scripts', \FoundryCo\Cloudflare\Responses\PageShieldListScripts::class, ['excludeUrls' => $excludeUrls ?? null, 'urls' => $urls ?? null, 'hosts' => $hosts ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'orderBy' => $orderBy ?? null, 'direction' => $direction ?? null, 'prioritizeMalicious' => $prioritizeMalicious ?? null, 'excludeCdnCgi' => $excludeCdnCgi ?? null, 'excludeDuplicates' => $excludeDuplicates ?? null, 'status' => $status ?? null, 'pageUrl' => $pageUrl ?? null, 'export' => $export ?? null]);
	}


	/**
	 * Get a Page Shield script
	 */
	public function pageShieldGetScript(string $scriptId): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/page_shield/scripts/' . $scriptId, \FoundryCo\Cloudflare\Responses\PageShieldGetScript::class, []);
	}
}
