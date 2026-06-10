<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AccessAuthenticationLogsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * Get Access authentication logs
	 */
	public function list(
		?int $limit = null,
		?\FoundryCo\Cloudflare\Enums\AccessAuthenticationLogsDirection $direction = null,
		?\DateTimeImmutable $since = null,
		?\DateTimeImmutable $until = null,
		?int $page = null,
		?int $perPage = null,
		?string $email = null,
		?bool $emailExact = null,
		?string $userId = null,
		?\FoundryCo\Cloudflare\Enums\AccessAuthenticationLogsAllowedOp $allowedOp = null,
		?\FoundryCo\Cloudflare\Enums\AccessAuthenticationLogsCountryCodeOp $countryCodeOp = null,
		?\FoundryCo\Cloudflare\Enums\AccessAuthenticationLogsAppTypeOp $appTypeOp = null,
		?\FoundryCo\Cloudflare\Enums\AccessAuthenticationLogsAppUidOp $appUidOp = null,
		?\FoundryCo\Cloudflare\Enums\AccessAuthenticationLogsRayIdOp $rayIdOp = null,
		?\FoundryCo\Cloudflare\Enums\AccessAuthenticationLogsEmailOp $emailOp = null,
		?\FoundryCo\Cloudflare\Enums\AccessAuthenticationLogsIdpOp $idpOp = null,
		?\FoundryCo\Cloudflare\Enums\AccessAuthenticationLogsNonIdentityOp $nonIdentityOp = null,
		?\FoundryCo\Cloudflare\Enums\AccessAuthenticationLogsUserIdOp $userIdOp = null,
		?string $fields = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/access/logs/access_requests', \FoundryCo\Cloudflare\Responses\AccessAuthenticationLogsGetAccessAuthenticationLogs::class, ['limit' => $limit ?? null, 'direction' => $direction ?? null, 'since' => $since ?? null, 'until' => $until ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'email' => $email ?? null, 'emailExact' => $emailExact ?? null, 'userId' => $userId ?? null, 'allowedOp' => $allowedOp ?? null, 'countryCodeOp' => $countryCodeOp ?? null, 'appTypeOp' => $appTypeOp ?? null, 'appUidOp' => $appUidOp ?? null, 'rayIdOp' => $rayIdOp ?? null, 'emailOp' => $emailOp ?? null, 'idpOp' => $idpOp ?? null, 'nonIdentityOp' => $nonIdentityOp ?? null, 'userIdOp' => $userIdOp ?? null, 'fields' => $fields ?? null]);
	}
}
