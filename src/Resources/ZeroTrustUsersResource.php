<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZeroTrustUsersResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get users
	 */
	public function list(
		?string $name = null,
		?string $email = null,
		?string $search = null,
		?int $page = null,
		?int $perPage = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/users', \FoundryCo\Cloudflare\Responses\ZeroTrustUsersGetUsers::class, ['name' => $name ?? null, 'email' => $email ?? null, 'search' => $search ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Create a user
	 */
	public function create(\FoundryCo\Cloudflare\Requests\ZeroTrustUsersCreateUserRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/access/users', \FoundryCo\Cloudflare\Responses\ZeroTrustUsersCreateUser::class, $request);
	}


	/**
	 * Get a user
	 */
	public function get(string $userId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/users/' . $userId, \FoundryCo\Cloudflare\Responses\ZeroTrustUsersGetUser::class, []);
	}


	/**
	 * Update a user
	 */
	public function update(
		string $userId,
		\FoundryCo\Cloudflare\Requests\ZeroTrustUsersUpdateUserRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/access/users/' . $userId, \FoundryCo\Cloudflare\Responses\ZeroTrustUsersUpdateUser::class, $request);
	}


	/**
	 * Delete a user
	 */
	public function delete(string $userId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/access/users/' . $userId);
	}


	/**
	 * Get active sessions
	 */
	public function activeSessions(string $userId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/users/' . $userId . '/active_sessions', \FoundryCo\Cloudflare\Responses\ZeroTrustUsersGetActiveSessions::class, []);
	}


	/**
	 * Get single active session
	 */
	public function zeroTrustUsersGetActiveSession(string $userId, string $nonce): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/users/' . $userId . '/active_sessions/' . $nonce, \FoundryCo\Cloudflare\Responses\ZeroTrustUsersGetActiveSession::class, []);
	}


	/**
	 * Get failed logins
	 */
	public function failedLogins(string $userId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/users/' . $userId . '/failed_logins', \FoundryCo\Cloudflare\Responses\ZeroTrustUsersGetFailedLogins::class, []);
	}


	/**
	 * Get last seen identity
	 */
	public function lastSeenIdentity(string $userId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/users/' . $userId . '/last_seen_identity', \FoundryCo\Cloudflare\Responses\ZeroTrustUsersGetLastSeenIdentity::class, []);
	}


	/**
	 * Delete a user's MFA device
	 */
	public function mfaAuthenticators(string $userId, string $authenticatorId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/access/users/' . $userId . '/mfa_authenticators/' . $authenticatorId);
	}
}
