<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class SecurityCenterInsightsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
	) {
	}


	/**
	 * Retrieves Security Center Issues Types
	 */
	public function list(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/attack-surface-report/issue-types', null, []);
	}


	/**
	 * Retrieves Security Center Issues
	 */
	public function issues(
		?bool $dismissed = null,
		?array $issueClass = null,
		?array $issueType = null,
		?array $product = null,
		?array $severity = null,
		?array $subject = null,
		?array $issueClassneq = null,
		?array $issueTypeneq = null,
		?array $productneq = null,
		?array $severityneq = null,
		?array $subjectneq = null,
		mixed $page = null,
		mixed $perPage = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/attack-surface-report/issues', null, ['dismissed' => $dismissed ?? null, 'issueClass' => $issueClass ?? null, 'issueType' => $issueType ?? null, 'product' => $product ?? null, 'severity' => $severity ?? null, 'subject' => $subject ?? null, 'issueClassneq' => $issueClassneq ?? null, 'issueTypeneq' => $issueTypeneq ?? null, 'productneq' => $productneq ?? null, 'severityneq' => $severityneq ?? null, 'subjectneq' => $subjectneq ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Retrieves Security Center Issue Counts by Class
	 */
	public function class(
		?bool $dismissed = null,
		?array $issueClass = null,
		?array $issueType = null,
		?array $product = null,
		?array $severity = null,
		?array $subject = null,
		?array $issueClassneq = null,
		?array $issueTypeneq = null,
		?array $productneq = null,
		?array $severityneq = null,
		?array $subjectneq = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/attack-surface-report/issues/class', null, ['dismissed' => $dismissed ?? null, 'issueClass' => $issueClass ?? null, 'issueType' => $issueType ?? null, 'product' => $product ?? null, 'severity' => $severity ?? null, 'subject' => $subject ?? null, 'issueClassneq' => $issueClassneq ?? null, 'issueTypeneq' => $issueTypeneq ?? null, 'productneq' => $productneq ?? null, 'severityneq' => $severityneq ?? null, 'subjectneq' => $subjectneq ?? null]);
	}


	/**
	 * Retrieves Security Center Issue Counts by Severity
	 */
	public function severity(
		?bool $dismissed = null,
		?array $issueClass = null,
		?array $issueType = null,
		?array $product = null,
		?array $severity = null,
		?array $subject = null,
		?array $issueClassneq = null,
		?array $issueTypeneq = null,
		?array $productneq = null,
		?array $severityneq = null,
		?array $subjectneq = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/attack-surface-report/issues/severity', null, ['dismissed' => $dismissed ?? null, 'issueClass' => $issueClass ?? null, 'issueType' => $issueType ?? null, 'product' => $product ?? null, 'severity' => $severity ?? null, 'subject' => $subject ?? null, 'issueClassneq' => $issueClassneq ?? null, 'issueTypeneq' => $issueTypeneq ?? null, 'productneq' => $productneq ?? null, 'severityneq' => $severityneq ?? null, 'subjectneq' => $subjectneq ?? null]);
	}


	/**
	 * Retrieves Security Center Issue Counts by Type
	 */
	public function type(
		?bool $dismissed = null,
		?array $issueClass = null,
		?array $issueType = null,
		?array $product = null,
		?array $severity = null,
		?array $subject = null,
		?array $issueClassneq = null,
		?array $issueTypeneq = null,
		?array $productneq = null,
		?array $severityneq = null,
		?array $subjectneq = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/intel/attack-surface-report/issues/type', null, ['dismissed' => $dismissed ?? null, 'issueClass' => $issueClass ?? null, 'issueType' => $issueType ?? null, 'product' => $product ?? null, 'severity' => $severity ?? null, 'subject' => $subject ?? null, 'issueClassneq' => $issueClassneq ?? null, 'issueTypeneq' => $issueTypeneq ?? null, 'productneq' => $productneq ?? null, 'severityneq' => $severityneq ?? null, 'subjectneq' => $subjectneq ?? null]);
	}


	/**
	 * Archives Security Center Insight
	 */
	public function update(
		string $issueId,
		\FoundryCo\Cloudflare\Requests\ArchiveSecurityCenterInsightDeprecatedRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/intel/attack-surface-report/' . $issueId . '/dismiss', null, $request);
	}


	/**
	 * Retrieves Security Center Insights
	 */
	public function insights(
		?bool $dismissed = null,
		?array $issueClass = null,
		?array $issueType = null,
		?array $product = null,
		?array $severity = null,
		?array $subject = null,
		?array $issueClassneq = null,
		?array $issueTypeneq = null,
		?array $productneq = null,
		?array $severityneq = null,
		?array $subjectneq = null,
		mixed $page = null,
		mixed $perPage = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/security-center/insights', null, ['dismissed' => $dismissed ?? null, 'issueClass' => $issueClass ?? null, 'issueType' => $issueType ?? null, 'product' => $product ?? null, 'severity' => $severity ?? null, 'subject' => $subject ?? null, 'issueClassneq' => $issueClassneq ?? null, 'issueTypeneq' => $issueTypeneq ?? null, 'productneq' => $productneq ?? null, 'severityneq' => $severityneq ?? null, 'subjectneq' => $subjectneq ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Retrieves Security Center Insight Counts by Class
	 */
	public function getSecurityCenterInsightCountsByClass(
		?bool $dismissed = null,
		?array $issueClass = null,
		?array $issueType = null,
		?array $product = null,
		?array $severity = null,
		?array $subject = null,
		?array $issueClassneq = null,
		?array $issueTypeneq = null,
		?array $productneq = null,
		?array $severityneq = null,
		?array $subjectneq = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/security-center/insights/class', null, ['dismissed' => $dismissed ?? null, 'issueClass' => $issueClass ?? null, 'issueType' => $issueType ?? null, 'product' => $product ?? null, 'severity' => $severity ?? null, 'subject' => $subject ?? null, 'issueClassneq' => $issueClassneq ?? null, 'issueTypeneq' => $issueTypeneq ?? null, 'productneq' => $productneq ?? null, 'severityneq' => $severityneq ?? null, 'subjectneq' => $subjectneq ?? null]);
	}


	/**
	 * Retrieves Security Center Insight Counts by Severity
	 */
	public function getSecurityCenterInsightCountsBySeverity(
		?bool $dismissed = null,
		?array $issueClass = null,
		?array $issueType = null,
		?array $product = null,
		?array $severity = null,
		?array $subject = null,
		?array $issueClassneq = null,
		?array $issueTypeneq = null,
		?array $productneq = null,
		?array $severityneq = null,
		?array $subjectneq = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/security-center/insights/severity', null, ['dismissed' => $dismissed ?? null, 'issueClass' => $issueClass ?? null, 'issueType' => $issueType ?? null, 'product' => $product ?? null, 'severity' => $severity ?? null, 'subject' => $subject ?? null, 'issueClassneq' => $issueClassneq ?? null, 'issueTypeneq' => $issueTypeneq ?? null, 'productneq' => $productneq ?? null, 'severityneq' => $severityneq ?? null, 'subjectneq' => $subjectneq ?? null]);
	}


	/**
	 * Retrieves Security Center Insight Counts by Type
	 */
	public function getSecurityCenterInsightCountsByType(
		?bool $dismissed = null,
		?array $issueClass = null,
		?array $issueType = null,
		?array $product = null,
		?array $severity = null,
		?array $subject = null,
		?array $issueClassneq = null,
		?array $issueTypeneq = null,
		?array $productneq = null,
		?array $severityneq = null,
		?array $subjectneq = null,
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/security-center/insights/type', null, ['dismissed' => $dismissed ?? null, 'issueClass' => $issueClass ?? null, 'issueType' => $issueType ?? null, 'product' => $product ?? null, 'severity' => $severity ?? null, 'subject' => $subject ?? null, 'issueClassneq' => $issueClassneq ?? null, 'issueTypeneq' => $issueTypeneq ?? null, 'productneq' => $productneq ?? null, 'severityneq' => $severityneq ?? null, 'subjectneq' => $subjectneq ?? null]);
	}


	/**
	 * Updates Security Center Insight Classification
	 */
	public function classification(
		string $issueId,
		\FoundryCo\Cloudflare\Requests\UpdateSecurityCenterInsightClassificationRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/security-center/insights/' . $issueId . '/classification', null, $request);
	}


	/**
	 * Retrieves Security Center Insight Context
	 */
	public function get(string $issueId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/security-center/insights/' . $issueId . '/context', null, []);
	}


	/**
	 * Archives Security Center Insight
	 */
	public function dismiss(
		string $issueId,
		\FoundryCo\Cloudflare\Requests\ArchiveSecurityCenterInsightRequest $request,
	): mixed
	{
		return $this->client->put('/accounts/' . $this->accountId . '/security-center/insights/' . $issueId . '/dismiss', null, $request);
	}


	/**
	 * Retrieves Zone Security Center Insights
	 */
	public function getZoneSecurityCenterInsights(
		?bool $dismissed = null,
		?array $issueClass = null,
		?array $issueType = null,
		?array $product = null,
		?array $severity = null,
		?array $subject = null,
		?array $issueClassneq = null,
		?array $issueTypeneq = null,
		?array $productneq = null,
		?array $severityneq = null,
		?array $subjectneq = null,
		mixed $page = null,
		mixed $perPage = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/security-center/insights', null, ['dismissed' => $dismissed ?? null, 'issueClass' => $issueClass ?? null, 'issueType' => $issueType ?? null, 'product' => $product ?? null, 'severity' => $severity ?? null, 'subject' => $subject ?? null, 'issueClassneq' => $issueClassneq ?? null, 'issueTypeneq' => $issueTypeneq ?? null, 'productneq' => $productneq ?? null, 'severityneq' => $severityneq ?? null, 'subjectneq' => $subjectneq ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null]);
	}


	/**
	 * Retrieves Zone Security Center Insight Counts by Class
	 */
	public function getZoneSecurityCenterInsightCountsByClass(
		?bool $dismissed = null,
		?array $issueClass = null,
		?array $issueType = null,
		?array $product = null,
		?array $severity = null,
		?array $subject = null,
		?array $issueClassneq = null,
		?array $issueTypeneq = null,
		?array $productneq = null,
		?array $severityneq = null,
		?array $subjectneq = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/security-center/insights/class', null, ['dismissed' => $dismissed ?? null, 'issueClass' => $issueClass ?? null, 'issueType' => $issueType ?? null, 'product' => $product ?? null, 'severity' => $severity ?? null, 'subject' => $subject ?? null, 'issueClassneq' => $issueClassneq ?? null, 'issueTypeneq' => $issueTypeneq ?? null, 'productneq' => $productneq ?? null, 'severityneq' => $severityneq ?? null, 'subjectneq' => $subjectneq ?? null]);
	}


	/**
	 * Retrieves Zone Security Center Insight Counts by Severity
	 */
	public function getZoneSecurityCenterInsightCountsBySeverity(
		?bool $dismissed = null,
		?array $issueClass = null,
		?array $issueType = null,
		?array $product = null,
		?array $severity = null,
		?array $subject = null,
		?array $issueClassneq = null,
		?array $issueTypeneq = null,
		?array $productneq = null,
		?array $severityneq = null,
		?array $subjectneq = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/security-center/insights/severity', null, ['dismissed' => $dismissed ?? null, 'issueClass' => $issueClass ?? null, 'issueType' => $issueType ?? null, 'product' => $product ?? null, 'severity' => $severity ?? null, 'subject' => $subject ?? null, 'issueClassneq' => $issueClassneq ?? null, 'issueTypeneq' => $issueTypeneq ?? null, 'productneq' => $productneq ?? null, 'severityneq' => $severityneq ?? null, 'subjectneq' => $subjectneq ?? null]);
	}


	/**
	 * Retrieves Zone Security Center Insight Counts by Type
	 */
	public function getZoneSecurityCenterInsightCountsByType(
		?bool $dismissed = null,
		?array $issueClass = null,
		?array $issueType = null,
		?array $product = null,
		?array $severity = null,
		?array $subject = null,
		?array $issueClassneq = null,
		?array $issueTypeneq = null,
		?array $productneq = null,
		?array $severityneq = null,
		?array $subjectneq = null,
	): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/security-center/insights/type', null, ['dismissed' => $dismissed ?? null, 'issueClass' => $issueClass ?? null, 'issueType' => $issueType ?? null, 'product' => $product ?? null, 'severity' => $severity ?? null, 'subject' => $subject ?? null, 'issueClassneq' => $issueClassneq ?? null, 'issueTypeneq' => $issueTypeneq ?? null, 'productneq' => $productneq ?? null, 'severityneq' => $severityneq ?? null, 'subjectneq' => $subjectneq ?? null]);
	}


	/**
	 * Updates Zone Security Center Insight Classification
	 */
	public function updateZoneSecurityCenterInsightClassification(
		string $issueId,
		\FoundryCo\Cloudflare\Requests\UpdateZoneSecurityCenterInsightClassificationRequest $request,
	): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/security-center/insights/' . $issueId . '/classification', null, $request);
	}


	/**
	 * Archives Zone Security Center Insight
	 */
	public function archiveZoneSecurityCenterInsight(
		string $issueId,
		\FoundryCo\Cloudflare\Requests\ArchiveZoneSecurityCenterInsightRequest $request,
	): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/security-center/insights/' . $issueId . '/dismiss', null, $request);
	}
}
