<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DEXRemoteCommandsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List account commands
	 */
	public function list(
		?float $page = null,
		?float $perPage = null,
		?\DateTimeImmutable $from = null,
		?\DateTimeImmutable $to = null,
		?string $deviceId = null,
		?string $userEmail = null,
		?\FoundryCo\Cloudflare\Enums\DEXRemoteCommandsCommandType $commandType = null,
		?\FoundryCo\Cloudflare\Enums\DEXRemoteCommandsStatus $status = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/commands', \FoundryCo\Cloudflare\Responses\GetCommands::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'from' => $from ?? null, 'to' => $to ?? null, 'deviceId' => $deviceId ?? null, 'userEmail' => $userEmail ?? null, 'commandType' => $commandType ?? null, 'status' => $status ?? null]);
	}


	/**
	 * Create account commands
	 */
	public function create(\FoundryCo\Cloudflare\Requests\PostCommandsRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/dex/commands', \FoundryCo\Cloudflare\Responses\PostCommands::class, $request);
	}


	/**
	 * List devices eligible for remote captures
	 */
	public function devices(?float $page = null, ?float $perPage = null, ?string $search = null): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/commands/devices', \FoundryCo\Cloudflare\Responses\GetCommandsEligibleDevices::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'search' => $search ?? null]);
	}


	/**
	 * Returns account commands usage, quota, and reset time
	 */
	public function quota(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/commands/quota', \FoundryCo\Cloudflare\Responses\GetCommandsQuota::class, []);
	}


	/**
	 * Download command output file
	 */
	public function get(string $commandId, string $filename): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/dex/commands/' . $commandId . '/downloads/' . $filename, null, []);
	}
}
