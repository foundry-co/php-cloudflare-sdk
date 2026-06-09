<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class MagicConnectorsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List Connectors
	 */
	public function list(
		?\FoundryCo\Cloudflare\Enums\MagicConnectorsDeviceType $deviceType = null,
	): \FoundryCo\Cloudflare\Responses\MagicConnectorsList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/connectors', \FoundryCo\Cloudflare\Responses\MagicConnectorsList::class, ['deviceType' => $deviceType ?? null]);
	}


	/**
	 * Add a connector to your account
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\MconnConnectorCreateRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicConnectorsCreate
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/connectors', \FoundryCo\Cloudflare\Responses\MagicConnectorsCreate::class, $request);
	}


	/**
	 * Fetch Connector
	 */
	public function get(string $connectorId): \FoundryCo\Cloudflare\Responses\MagicConnectorsFetch
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/connectors/' . $connectorId, \FoundryCo\Cloudflare\Responses\MagicConnectorsFetch::class, []);
	}


	/**
	 * Replace Connector or Re-provision License Key
	 */
	public function update(
		string $connectorId,
		\FoundryCo\Cloudflare\Requests\MconnConnectorReplaceRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicConnectorsReplace
	{
		return $this->client->put('/accounts/' . $this->accountId . '/magic/connectors/' . $connectorId, \FoundryCo\Cloudflare\Responses\MagicConnectorsReplace::class, $request);
	}


	/**
	 * Edit Connector to update specific properties or Re-provision License Key
	 */
	public function connectors(
		string $connectorId,
		\FoundryCo\Cloudflare\Requests\MconnConnectorUpdateRequest $request,
	): \FoundryCo\Cloudflare\Responses\MagicConnectorsUpdate
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/connectors/' . $connectorId, \FoundryCo\Cloudflare\Responses\MagicConnectorsUpdate::class, $request);
	}


	/**
	 * Remove a connector from your account
	 */
	public function delete(string $connectorId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/connectors/' . $connectorId);
	}


	/**
	 * List Events
	 */
	public function events(
		string $connectorId,
		?float $from = null,
		?float $to = null,
		?float $limit = null,
		?string $cursor = null,
		?string $k = null,
	): \FoundryCo\Cloudflare\Responses\MagicConnectorsList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/connectors/' . $connectorId . '/telemetry/events', \FoundryCo\Cloudflare\Responses\MagicConnectorsList::class, ['from' => $from ?? null, 'to' => $to ?? null, 'limit' => $limit ?? null, 'cursor' => $cursor ?? null, 'k' => $k ?? null]);
	}


	/**
	 * Get latest Events
	 */
	public function latest(string $connectorId): \FoundryCo\Cloudflare\Responses\MagicConnectorsListLatest
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/connectors/' . $connectorId . '/telemetry/events/latest', \FoundryCo\Cloudflare\Responses\MagicConnectorsListLatest::class, []);
	}


	/**
	 * Get Event
	 */
	public function eventsEventN(
		string $connectorId,
		float $eventT,
		float $eventN,
	): \FoundryCo\Cloudflare\Responses\MagicConnectorsGet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/connectors/' . $connectorId . '/telemetry/events/' . $eventT . '.' . $eventN, \FoundryCo\Cloudflare\Responses\MagicConnectorsGet::class, []);
	}


	/**
	 * List Snapshots
	 */
	public function snapshots(
		string $connectorId,
		?float $from = null,
		?float $to = null,
		?float $limit = null,
		?string $cursor = null,
	): \FoundryCo\Cloudflare\Responses\MagicConnectorsList
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/connectors/' . $connectorId . '/telemetry/snapshots', \FoundryCo\Cloudflare\Responses\MagicConnectorsList::class, ['from' => $from ?? null, 'to' => $to ?? null, 'limit' => $limit ?? null, 'cursor' => $cursor ?? null]);
	}


	/**
	 * Get latest Snapshots
	 */
	public function mconnConnectorTelemetrySnapshotsListLatest(
		string $connectorId,
	): \FoundryCo\Cloudflare\Responses\MagicConnectorsListLatest
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/connectors/' . $connectorId . '/telemetry/snapshots/latest', \FoundryCo\Cloudflare\Responses\MagicConnectorsListLatest::class, []);
	}


	/**
	 * Get Snapshot
	 */
	public function mconnConnectorTelemetrySnapshotsGet(
		string $connectorId,
		float $snapshotT,
	): \FoundryCo\Cloudflare\Responses\MagicConnectorsGet
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/connectors/' . $connectorId . '/telemetry/snapshots/' . $snapshotT, \FoundryCo\Cloudflare\Responses\MagicConnectorsGet::class, []);
	}
}
