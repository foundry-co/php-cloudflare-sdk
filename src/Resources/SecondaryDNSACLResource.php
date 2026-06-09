<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SecondaryDNSACLResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List ACLs
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\SecondaryDNSACLLs
	{
		return $this->client->get('/accounts/' . $this->accountId . '/secondary_dns/acls', \FoundryCo\Cloudflare\Responses\SecondaryDNSACLLs::class, []);
	}


	/**
	 * Create ACL
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\SecondaryDnsAclCreateAclRequest $request,
	): \FoundryCo\Cloudflare\Responses\SecondaryDNSACLAcl
	{
		return $this->client->post('/accounts/' . $this->accountId . '/secondary_dns/acls', \FoundryCo\Cloudflare\Responses\SecondaryDNSACLAcl::class, $request);
	}


	/**
	 * ACL Details
	 */
	public function get(string $aclId): \FoundryCo\Cloudflare\Responses\SecondaryDNSACLDetails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/secondary_dns/acls/' . $aclId, \FoundryCo\Cloudflare\Responses\SecondaryDNSACLDetails::class, []);
	}


	/**
	 * Update ACL
	 */
	public function update(
		string $aclId,
		\FoundryCo\Cloudflare\Requests\SecondaryDnsAclUpdateAclRequest $request,
	): \FoundryCo\Cloudflare\Responses\SecondaryDNSACLAcl
	{
		return $this->client->put('/accounts/' . $this->accountId . '/secondary_dns/acls/' . $aclId, \FoundryCo\Cloudflare\Responses\SecondaryDNSACLAcl::class, $request);
	}


	/**
	 * Delete ACL
	 */
	public function delete(string $aclId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/secondary_dns/acls/' . $aclId);
	}
}
