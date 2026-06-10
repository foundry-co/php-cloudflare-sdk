<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class AuditLogsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Get account audit logs
	 */
	public function list(
		?string $id = null,
		?bool $export = null,
		?string $actiontype = null,
		?string $actorip = null,
		?string $actoremail = null,
		mixed $since = null,
		mixed $before = null,
		?string $zonename = null,
		?\FoundryCo\Cloudflare\Enums\AuditLogsDirection $direction = null,
		?float $perPage = null,
		?float $page = null,
		?bool $hideUserLogs = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/audit_logs', null, ['id' => $id ?? null, 'export' => $export ?? null, 'actiontype' => $actiontype ?? null, 'actorip' => $actorip ?? null, 'actoremail' => $actoremail ?? null, 'since' => $since ?? null, 'before' => $before ?? null, 'zonename' => $zonename ?? null, 'direction' => $direction ?? null, 'perPage' => $perPage ?? null, 'page' => $page ?? null, 'hideUserLogs' => $hideUserLogs ?? null]);
	}


	/**
	 * Get account audit logs (Version 2)
	 */
	public function audit(
		?array $accountName = null,
		?array $actionResult = null,
		?array $actionType = null,
		?array $actorContext = null,
		?array $actorEmail = null,
		?array $actorId = null,
		?array $actorIpAddress = null,
		?array $actorTokenId = null,
		?array $actorTokenName = null,
		?array $actorType = null,
		?array $auditLogId = null,
		?array $id = null,
		?array $rawCfRayId = null,
		?array $rawMethod = null,
		?array $rawStatusCode = null,
		?array $rawUri = null,
		?array $resourceId = null,
		?array $resourceProduct = null,
		?array $resourceType = null,
		?array $resourceScope = null,
		?array $zoneName = null,
		?array $accountNamenot = null,
		?array $actionResultnot = null,
		?array $actionTypenot = null,
		?array $actorContextnot = null,
		?array $actorEmailnot = null,
		?array $actorIdnot = null,
		?array $actorIpAddressnot = null,
		?array $actorTokenIdnot = null,
		?array $actorTokenNamenot = null,
		?array $actorTypenot = null,
		?array $auditLogIdnot = null,
		?array $idnot = null,
		?array $rawCfRayIdnot = null,
		?array $rawMethodnot = null,
		?array $rawStatusCodenot = null,
		?array $rawUrinot = null,
		?array $resourceIdnot = null,
		?array $resourceProductnot = null,
		?array $resourceTypenot = null,
		?array $resourceScopenot = null,
		?array $zoneIdnot = null,
		?array $zoneNamenot = null,
		?\DateTimeImmutable $since = null,
		?\DateTimeImmutable $before = null,
		?\FoundryCo\Cloudflare\Enums\AuditLogsDirection $direction = null,
		?float $limit = null,
		?string $cursor = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/logs/audit', \FoundryCo\Cloudflare\Responses\AuditLogsV2GetAccountAuditLogs::class, ['accountName' => $accountName ?? null, 'actionResult' => $actionResult ?? null, 'actionType' => $actionType ?? null, 'actorContext' => $actorContext ?? null, 'actorEmail' => $actorEmail ?? null, 'actorId' => $actorId ?? null, 'actorIpAddress' => $actorIpAddress ?? null, 'actorTokenId' => $actorTokenId ?? null, 'actorTokenName' => $actorTokenName ?? null, 'actorType' => $actorType ?? null, 'auditLogId' => $auditLogId ?? null, 'id' => $id ?? null, 'rawCfRayId' => $rawCfRayId ?? null, 'rawMethod' => $rawMethod ?? null, 'rawStatusCode' => $rawStatusCode ?? null, 'rawUri' => $rawUri ?? null, 'resourceId' => $resourceId ?? null, 'resourceProduct' => $resourceProduct ?? null, 'resourceType' => $resourceType ?? null, 'resourceScope' => $resourceScope ?? null, 'zoneName' => $zoneName ?? null, 'accountNamenot' => $accountNamenot ?? null, 'actionResultnot' => $actionResultnot ?? null, 'actionTypenot' => $actionTypenot ?? null, 'actorContextnot' => $actorContextnot ?? null, 'actorEmailnot' => $actorEmailnot ?? null, 'actorIdnot' => $actorIdnot ?? null, 'actorIpAddressnot' => $actorIpAddressnot ?? null, 'actorTokenIdnot' => $actorTokenIdnot ?? null, 'actorTokenNamenot' => $actorTokenNamenot ?? null, 'actorTypenot' => $actorTypenot ?? null, 'auditLogIdnot' => $auditLogIdnot ?? null, 'idnot' => $idnot ?? null, 'rawCfRayIdnot' => $rawCfRayIdnot ?? null, 'rawMethodnot' => $rawMethodnot ?? null, 'rawStatusCodenot' => $rawStatusCodenot ?? null, 'rawUrinot' => $rawUrinot ?? null, 'resourceIdnot' => $resourceIdnot ?? null, 'resourceProductnot' => $resourceProductnot ?? null, 'resourceTypenot' => $resourceTypenot ?? null, 'resourceScopenot' => $resourceScopenot ?? null, 'zoneIdnot' => $zoneIdnot ?? null, 'zoneNamenot' => $zoneNamenot ?? null, 'since' => $since ?? null, 'before' => $before ?? null, 'direction' => $direction ?? null, 'limit' => $limit ?? null, 'cursor' => $cursor ?? null]);
	}


	/**
	 * Get organization audit logs (Version 2, Beta release)
	 */
	public function get(
		string $organizationId,
		?array $actionResult = null,
		?array $actionType = null,
		?array $actorContext = null,
		?array $actorEmail = null,
		?array $actorId = null,
		?array $actorIpAddress = null,
		?array $actorTokenId = null,
		?array $actorTokenName = null,
		?array $actorType = null,
		?array $id = null,
		?array $rawCfRayId = null,
		?array $rawMethod = null,
		?array $rawStatusCode = null,
		?array $rawUri = null,
		?array $resourceId = null,
		?array $resourceProduct = null,
		?array $resourceType = null,
		?array $resourceScope = null,
		?array $actionResultnot = null,
		?array $actionTypenot = null,
		?array $actorContextnot = null,
		?array $actorEmailnot = null,
		?array $actorIdnot = null,
		?array $actorIpAddressnot = null,
		?array $actorTokenIdnot = null,
		?array $actorTokenNamenot = null,
		?array $actorTypenot = null,
		?array $idnot = null,
		?array $rawCfRayIdnot = null,
		?array $rawMethodnot = null,
		?array $rawStatusCodenot = null,
		?array $rawUrinot = null,
		?array $resourceIdnot = null,
		?array $resourceProductnot = null,
		?array $resourceTypenot = null,
		?array $resourceScopenot = null,
		?\DateTimeImmutable $since = null,
		?\DateTimeImmutable $before = null,
		?\FoundryCo\Cloudflare\Enums\AuditLogsDirection $direction = null,
		?float $limit = null,
		?string $cursor = null,
	): mixed
	{
		return $this->client->get('/organizations/' . $organizationId . '/logs/audit', \FoundryCo\Cloudflare\Responses\AuditLogsV2GetOrganizationAuditLogs::class, ['actionResult' => $actionResult ?? null, 'actionType' => $actionType ?? null, 'actorContext' => $actorContext ?? null, 'actorEmail' => $actorEmail ?? null, 'actorId' => $actorId ?? null, 'actorIpAddress' => $actorIpAddress ?? null, 'actorTokenId' => $actorTokenId ?? null, 'actorTokenName' => $actorTokenName ?? null, 'actorType' => $actorType ?? null, 'id' => $id ?? null, 'rawCfRayId' => $rawCfRayId ?? null, 'rawMethod' => $rawMethod ?? null, 'rawStatusCode' => $rawStatusCode ?? null, 'rawUri' => $rawUri ?? null, 'resourceId' => $resourceId ?? null, 'resourceProduct' => $resourceProduct ?? null, 'resourceType' => $resourceType ?? null, 'resourceScope' => $resourceScope ?? null, 'actionResultnot' => $actionResultnot ?? null, 'actionTypenot' => $actionTypenot ?? null, 'actorContextnot' => $actorContextnot ?? null, 'actorEmailnot' => $actorEmailnot ?? null, 'actorIdnot' => $actorIdnot ?? null, 'actorIpAddressnot' => $actorIpAddressnot ?? null, 'actorTokenIdnot' => $actorTokenIdnot ?? null, 'actorTokenNamenot' => $actorTokenNamenot ?? null, 'actorTypenot' => $actorTypenot ?? null, 'idnot' => $idnot ?? null, 'rawCfRayIdnot' => $rawCfRayIdnot ?? null, 'rawMethodnot' => $rawMethodnot ?? null, 'rawStatusCodenot' => $rawStatusCodenot ?? null, 'rawUrinot' => $rawUrinot ?? null, 'resourceIdnot' => $resourceIdnot ?? null, 'resourceProductnot' => $resourceProductnot ?? null, 'resourceTypenot' => $resourceTypenot ?? null, 'resourceScopenot' => $resourceScopenot ?? null, 'since' => $since ?? null, 'before' => $before ?? null, 'direction' => $direction ?? null, 'limit' => $limit ?? null, 'cursor' => $cursor ?? null]);
	}


	/**
	 * Get user audit logs
	 */
	public function auditLogs(
		?string $id = null,
		?bool $export = null,
		?string $actiontype = null,
		?string $actorip = null,
		?string $actoremail = null,
		mixed $since = null,
		mixed $before = null,
		?string $zonename = null,
		?\FoundryCo\Cloudflare\Enums\AuditLogsDirection $direction = null,
		?float $perPage = null,
		?float $page = null,
		?bool $hideUserLogs = null,
	): mixed
	{
		return $this->client->get('/user/audit_logs', null, ['id' => $id ?? null, 'export' => $export ?? null, 'actiontype' => $actiontype ?? null, 'actorip' => $actorip ?? null, 'actoremail' => $actoremail ?? null, 'since' => $since ?? null, 'before' => $before ?? null, 'zonename' => $zonename ?? null, 'direction' => $direction ?? null, 'perPage' => $perPage ?? null, 'page' => $page ?? null, 'hideUserLogs' => $hideUserLogs ?? null]);
	}
}
