<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MagicSiteAclsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Site ACLs
	 */
	public function get(string $siteId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/acls', \FoundryCo\Cloudflare\Responses\MagicSiteAclsListAcls::class, []);
	}


	/**
	 * Create a new Site ACL
	 */
	public function create(string $siteId, \FoundryCo\Cloudflare\Requests\MagicSiteAclsCreateAclRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/acls', \FoundryCo\Cloudflare\Responses\MagicSiteAclsCreateAcl::class, $request);
	}


	/**
	 * Site ACL Details
	 */
	public function acls(string $siteId, string $aclId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/acls/' . $aclId, \FoundryCo\Cloudflare\Responses\MagicSiteAclsAclDetails::class, []);
	}


	/**
	 * Update Site ACL
	 */
	public function update(
		string $siteId,
		string $aclId,
		\FoundryCo\Cloudflare\Requests\MagicSiteAclsUpdateAclRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/acls/' . $aclId, \FoundryCo\Cloudflare\Responses\MagicSiteAclsUpdateAcl::class, $request);
	}


	/**
	 * Patch Site ACL
	 */
	public function magicSiteAclsPatchAcl(
		string $siteId,
		string $aclId,
		\FoundryCo\Cloudflare\Requests\MagicSiteAclsPatchAclRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/acls/' . $aclId, \FoundryCo\Cloudflare\Responses\MagicSiteAclsPatchAcl::class, $request);
	}


	/**
	 * Delete Site ACL
	 */
	public function delete(string $siteId, string $aclId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/acls/' . $aclId);
	}
}
