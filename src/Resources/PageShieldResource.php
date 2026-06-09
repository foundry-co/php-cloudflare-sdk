<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function list(): \FoundryCo\Cloudflare\Responses\PageShieldSettings
	{
		return $this->client->get('/zones/' . $this->zoneId . '/page_shield', \FoundryCo\Cloudflare\Responses\PageShieldSettings::class, []);
	}


	/**
	 * Update Page Shield settings
	 */
	public function update(
		\FoundryCo\Cloudflare\Requests\PageShieldUpdateSettingsRequest $request,
	): \FoundryCo\Cloudflare\Responses\PageShieldSettings
	{
		return $this->client->put('/zones/' . $this->zoneId . '/page_shield', \FoundryCo\Cloudflare\Responses\PageShieldSettings::class, $request);
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
	): \FoundryCo\Cloudflare\Responses\PageShieldConnections
	{
		return $this->client->get('/zones/' . $this->zoneId . '/page_shield/connections', \FoundryCo\Cloudflare\Responses\PageShieldConnections::class, ['excludeUrls' => $excludeUrls ?? null, 'urls' => $urls ?? null, 'hosts' => $hosts ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'orderBy' => $orderBy ?? null, 'direction' => $direction ?? null, 'prioritizeMalicious' => $prioritizeMalicious ?? null, 'excludeCdnCgi' => $excludeCdnCgi ?? null, 'status' => $status ?? null, 'pageUrl' => $pageUrl ?? null, 'export' => $export ?? null]);
	}


	/**
	 * Get a Page Shield connection
	 */
	public function get(string $connectionId): \FoundryCo\Cloudflare\Responses\PageShieldConnection
	{
		return $this->client->get('/zones/' . $this->zoneId . '/page_shield/connections/' . $connectionId, \FoundryCo\Cloudflare\Responses\PageShieldConnection::class, []);
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
	): \FoundryCo\Cloudflare\Responses\PageShieldCookies
	{
		return $this->client->get('/zones/' . $this->zoneId . '/page_shield/cookies', \FoundryCo\Cloudflare\Responses\PageShieldCookies::class, ['hosts' => $hosts ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'orderBy' => $orderBy ?? null, 'direction' => $direction ?? null, 'pageUrl' => $pageUrl ?? null, 'export' => $export ?? null, 'name' => $name ?? null, 'secure' => $secure ?? null, 'httpOnly' => $httpOnly ?? null, 'sameSite' => $sameSite ?? null, 'type' => $type ?? null, 'path' => $path ?? null, 'domain' => $domain ?? null]);
	}


	/**
	 * Get a Page Shield cookie
	 */
	public function pageShieldGetCookie(string $cookieId): \FoundryCo\Cloudflare\Responses\PageShieldCookie
	{
		return $this->client->get('/zones/' . $this->zoneId . '/page_shield/cookies/' . $cookieId, \FoundryCo\Cloudflare\Responses\PageShieldCookie::class, []);
	}


	/**
	 * List Page Shield policies
	 */
	public function policies(): \FoundryCo\Cloudflare\Responses\PageShieldPolicies
	{
		return $this->client->get('/zones/' . $this->zoneId . '/page_shield/policies', \FoundryCo\Cloudflare\Responses\PageShieldPolicies::class, []);
	}


	/**
	 * Create a Page Shield policy
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\PageShieldCreatePolicyRequest $request,
	): \FoundryCo\Cloudflare\Responses\PageShieldPolicy
	{
		return $this->client->post('/zones/' . $this->zoneId . '/page_shield/policies', \FoundryCo\Cloudflare\Responses\PageShieldPolicy::class, $request);
	}


	/**
	 * Get a Page Shield policy
	 */
	public function pageShieldGetPolicy(string $policyId): \FoundryCo\Cloudflare\Responses\PageShieldPolicy
	{
		return $this->client->get('/zones/' . $this->zoneId . '/page_shield/policies/' . $policyId, \FoundryCo\Cloudflare\Responses\PageShieldPolicy::class, []);
	}


	/**
	 * Update a Page Shield policy
	 */
	public function pageShieldUpdatePolicy(
		string $policyId,
		\FoundryCo\Cloudflare\Requests\PageShieldUpdatePolicyRequest $request,
	): \FoundryCo\Cloudflare\Responses\PageShieldPolicy
	{
		return $this->client->put('/zones/' . $this->zoneId . '/page_shield/policies/' . $policyId, \FoundryCo\Cloudflare\Responses\PageShieldPolicy::class, $request);
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
	): \FoundryCo\Cloudflare\Responses\PageShieldScripts
	{
		return $this->client->get('/zones/' . $this->zoneId . '/page_shield/scripts', \FoundryCo\Cloudflare\Responses\PageShieldScripts::class, ['excludeUrls' => $excludeUrls ?? null, 'urls' => $urls ?? null, 'hosts' => $hosts ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'orderBy' => $orderBy ?? null, 'direction' => $direction ?? null, 'prioritizeMalicious' => $prioritizeMalicious ?? null, 'excludeCdnCgi' => $excludeCdnCgi ?? null, 'excludeDuplicates' => $excludeDuplicates ?? null, 'status' => $status ?? null, 'pageUrl' => $pageUrl ?? null, 'export' => $export ?? null]);
	}


	/**
	 * Get a Page Shield script
	 */
	public function pageShieldGetScript(string $scriptId): \FoundryCo\Cloudflare\Responses\PageShieldScript
	{
		return $this->client->get('/zones/' . $this->zoneId . '/page_shield/scripts/' . $scriptId, \FoundryCo\Cloudflare\Responses\PageShieldScript::class, []);
	}
}
