<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class TsengAbuseComplaintProcessorOtherResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List abuse reports
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
		?string $sort = null,
		?string $domain = null,
		?string $createdBefore = null,
		?string $createdAfter = null,
		?\FoundryCo\Cloudflare\Enums\TsengAbuseComplaintProcessorOtherStatus $status = null,
		?\FoundryCo\Cloudflare\Enums\TsengAbuseComplaintProcessorOtherType $type = null,
		?\FoundryCo\Cloudflare\Enums\TsengAbuseComplaintProcessorOtherMitigationStatus $mitigationStatus = null,
	): \FoundryCo\Cloudflare\Responses\TsengAbuseComplaintProcessorOtherListAbuseReports
	{
		return $this->client->get('/accounts/' . $this->accountId . '/abuse-reports', \FoundryCo\Cloudflare\Responses\TsengAbuseComplaintProcessorOtherListAbuseReports::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'sort' => $sort ?? null, 'domain' => $domain ?? null, 'createdBefore' => $createdBefore ?? null, 'createdAfter' => $createdAfter ?? null, 'status' => $status ?? null, 'type' => $type ?? null, 'mitigationStatus' => $mitigationStatus ?? null]);
	}


	/**
	 * List abuse report emails
	 */
	public function get(
		string $reportId,
		?int $page = null,
		?int $perPage = null,
	): \FoundryCo\Cloudflare\Responses\TsengAbuseComplaintProcessorOtherListEmails
	{
		return $this->client->get('/accounts/' . $this->accountId . '/abuse-reports/' . $reportId . '/emails', \FoundryCo\Cloudflare\Responses\TsengAbuseComplaintProcessorOtherListEmails::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * List abuse report mitigations
	 */
	public function mitigations(
		string $reportId,
		?int $page = null,
		?int $perPage = null,
		?\FoundryCo\Cloudflare\Enums\TsengAbuseComplaintProcessorOtherSort $sort = null,
		?\FoundryCo\Cloudflare\Enums\TsengAbuseComplaintProcessorOtherType $type = null,
		?string $effectiveBefore = null,
		?string $effectiveAfter = null,
		?\FoundryCo\Cloudflare\Enums\TsengAbuseComplaintProcessorOtherStatus $status = null,
		?\FoundryCo\Cloudflare\Enums\TsengAbuseComplaintProcessorOtherEntityType $entityType = null,
	): \FoundryCo\Cloudflare\Responses\TsengAbuseComplaintProcessorOtherListMitigations
	{
		return $this->client->get('/accounts/' . $this->accountId . '/abuse-reports/' . $reportId . '/mitigations', \FoundryCo\Cloudflare\Responses\TsengAbuseComplaintProcessorOtherListMitigations::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'sort' => $sort ?? null, 'type' => $type ?? null, 'effectiveBefore' => $effectiveBefore ?? null, 'effectiveAfter' => $effectiveAfter ?? null, 'status' => $status ?? null, 'entityType' => $entityType ?? null]);
	}


	/**
	 * Request review on mitigations
	 */
	public function create(
		string $reportId,
		\FoundryCo\Cloudflare\Requests\RequestReviewRequest $request,
	): \FoundryCo\Cloudflare\Responses\TsengAbuseComplaintProcessorOtherRequestReview
	{
		return $this->client->post('/accounts/' . $this->accountId . '/abuse-reports/' . $reportId . '/mitigations/appeal', \FoundryCo\Cloudflare\Responses\TsengAbuseComplaintProcessorOtherRequestReview::class, $request);
	}


	/**
	 * Abuse Report Details
	 */
	public function abuseReports(
		string $reportParam,
	): \FoundryCo\Cloudflare\Responses\TsengAbuseComplaintProcessorOtherGetAbuseReport
	{
		return $this->client->get('/accounts/' . $this->accountId . '/abuse-reports/' . $reportParam, \FoundryCo\Cloudflare\Responses\TsengAbuseComplaintProcessorOtherGetAbuseReport::class, []);
	}


	/**
	 * Submit an abuse report
	 */
	public function submitAbuseReport(string $reportParam): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/abuse-reports/' . $reportParam, null, null);
	}
}
