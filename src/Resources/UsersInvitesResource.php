<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	public function list(): mixed
	{
		return $this->client->get('/user/invites', \FoundryCo\Cloudflare\Responses\UserSInvitesListInvitations::class, []);
	}


	/**
	 * Invitation Details
	 */
	public function get(string $inviteId): mixed
	{
		return $this->client->get('/user/invites/' . $inviteId, \FoundryCo\Cloudflare\Responses\UserSInvitesInvitationDetails::class, []);
	}


	/**
	 * Respond to Invitation
	 */
	public function update(
		string $inviteId,
		\FoundryCo\Cloudflare\Requests\UserSInvitesRespondToInvitationRequest $request,
	): mixed
	{
		return $this->client->patch('/user/invites/' . $inviteId, \FoundryCo\Cloudflare\Responses\UserSInvitesRespondToInvitation::class, $request);
	}
}
