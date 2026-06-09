<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
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
	public function get(string $siteId): \FoundryCo\Cloudflare\Responses\MagicSiteACLsAcls
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/acls', \FoundryCo\Cloudflare\Responses\MagicSiteACLsAcls::class, []);
	}


	/**
	 * Create a new Site ACL
	 */
	public function create(
		string $siteId,
		\FoundryCo\Cloudflare\Requests\MagicSiteAclsCreateAclRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicSiteACLsAcl
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/acls', \FoundryCo\Cloudflare\Responses\MagicSiteACLsAcl::class, $request);
	}


	/**
	 * Site ACL Details
	 */
	public function acls(string $siteId, string $aclId): \FoundryCo\Cloudflare\Responses\MagicSiteACLsDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/acls/' . $aclId, \FoundryCo\Cloudflare\Responses\MagicSiteACLsDetails::class, []);
	}


	/**
	 * Update Site ACL
	 */
	public function update(
		string $siteId,
		string $aclId,
		\FoundryCo\Cloudflare\Requests\MagicSiteAclsUpdateAclRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicSiteACLsAcl
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/acls/' . $aclId, \FoundryCo\Cloudflare\Responses\MagicSiteACLsAcl::class, $request);
	}


	/**
	 * Patch Site ACL
	 */
	public function magicSiteAclsPatchAcl(
		string $siteId,
		string $aclId,
		\FoundryCo\Cloudflare\Requests\MagicSiteAclsPatchAclRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicSiteACLsAcl
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/acls/' . $aclId, \FoundryCo\Cloudflare\Responses\MagicSiteACLsAcl::class, $request);
	}


	/**
	 * Delete Site ACL
	 */
	public function delete(string $siteId, string $aclId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/sites/' . $siteId . '/acls/' . $aclId);
	}
}
