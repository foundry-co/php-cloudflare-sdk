<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class UsersInvitesResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * List Invitations
	 */
	public function list(): \FoundryCo\Cloudflare\Responses\UsersInvitesInvitations
	{
		return $this->client->get('/user/invites', \FoundryCo\Cloudflare\Responses\UsersInvitesInvitations::class, []);
	}


	/**
	 * Invitation Details
	 */
	public function get(string $inviteId): \FoundryCo\Cloudflare\Responses\UsersInvitesDetails
	{
		return $this->client->get('/user/invites/' . $inviteId, \FoundryCo\Cloudflare\Responses\UsersInvitesDetails::class, []);
	}


	/**
	 * Respond to Invitation
	 */
	public function update(
		string $inviteId,
		\FoundryCo\Cloudflare\Requests\UserSInvitesRespondToInvitationRequest $request,
	): \FoundryCo\Cloudflare\Responses\UsersInvitesInvitation
	{
		return $this->client->patch('/user/invites/' . $inviteId, \FoundryCo\Cloudflare\Responses\UsersInvitesInvitation::class, $request);
	}
}
