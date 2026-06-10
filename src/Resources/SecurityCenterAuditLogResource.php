<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SecurityCenterAuditLogResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Retrieves Account Audit Log
	 */
	public function list(
		?int $perPage = null,
		?string $cursor = null,
		?\FoundryCo\Cloudflare\Enums\SecurityCenterAuditLogFieldChanged $fieldChanged = null,
		?string $changedBy = null,
		?\DateTimeImmutable $since = null,
		?\DateTimeImmutable $before = null,
		?\FoundryCo\Cloudflare\Enums\SecurityCenterAuditLogOrder $order = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/security-center/insights/audit-log', \FoundryCo\Cloudflare\Responses\GetSecurityCenterAccountAuditLog::class, ['perPage' => $perPage ?? null, 'cursor' => $cursor ?? null, 'fieldChanged' => $fieldChanged ?? null, 'changedBy' => $changedBy ?? null, 'since' => $since ?? null, 'before' => $before ?? null, 'order' => $order ?? null]);
	}


	/**
	 * Retrieves Issue Audit Log
	 */
	public function get(
		string $issueId,
		?int $perPage = null,
		?string $cursor = null,
		?\FoundryCo\Cloudflare\Enums\SecurityCenterAuditLogFieldChanged $fieldChanged = null,
		?string $changedBy = null,
		?\DateTimeImmutable $since = null,
		?\DateTimeImmutable $before = null,
		?\FoundryCo\Cloudflare\Enums\SecurityCenterAuditLogOrder $order = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/security-center/insights/' . $issueId . '/audit-log', \FoundryCo\Cloudflare\Responses\GetSecurityCenterIssueAuditLog::class, ['perPage' => $perPage ?? null, 'cursor' => $cursor ?? null, 'fieldChanged' => $fieldChanged ?? null, 'changedBy' => $changedBy ?? null, 'since' => $since ?? null, 'before' => $before ?? null, 'order' => $order ?? null]);
	}


	/**
	 * Retrieves Zone Audit Log
	 */
	public function auditLog(
		?int $perPage = null,
		?string $cursor = null,
		?\FoundryCo\Cloudflare\Enums\SecurityCenterAuditLogFieldChanged $fieldChanged = null,
		?string $changedBy = null,
		?\DateTimeImmutable $since = null,
		?\DateTimeImmutable $before = null,
		?\FoundryCo\Cloudflare\Enums\SecurityCenterAuditLogOrder $order = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/security-center/insights/audit-log', \FoundryCo\Cloudflare\Responses\GetZoneSecurityCenterAuditLog::class, ['perPage' => $perPage ?? null, 'cursor' => $cursor ?? null, 'fieldChanged' => $fieldChanged ?? null, 'changedBy' => $changedBy ?? null, 'since' => $since ?? null, 'before' => $before ?? null, 'order' => $order ?? null]);
	}


	/**
	 * Retrieves Zone Issue Audit Log
	 */
	public function getZoneSecurityCenterIssueAuditLog(
		string $issueId,
		?int $perPage = null,
		?string $cursor = null,
		?\FoundryCo\Cloudflare\Enums\SecurityCenterAuditLogFieldChanged $fieldChanged = null,
		?string $changedBy = null,
		?\DateTimeImmutable $since = null,
		?\DateTimeImmutable $before = null,
		?\FoundryCo\Cloudflare\Enums\SecurityCenterAuditLogOrder $order = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/security-center/insights/' . $issueId . '/audit-log', \FoundryCo\Cloudflare\Responses\GetZoneSecurityCenterIssueAuditLog::class, ['perPage' => $perPage ?? null, 'cursor' => $cursor ?? null, 'fieldChanged' => $fieldChanged ?? null, 'changedBy' => $changedBy ?? null, 'since' => $since ?? null, 'before' => $before ?? null, 'order' => $order ?? null]);
	}
}
