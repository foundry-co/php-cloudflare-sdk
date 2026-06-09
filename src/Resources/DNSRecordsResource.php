<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DNSRecordsResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	/**
	 * List DNS Records
	 */
	public function list(
		?string $name = null,
		?string $nameexact = null,
		?string $namecontains = null,
		?string $namestartswith = null,
		?string $nameendswith = null,
		?\FoundryCo\Cloudflare\Enums\DNSRecordsForAZoneType $type = null,
		?string $content = null,
		?string $contentexact = null,
		?string $contentcontains = null,
		?string $contentstartswith = null,
		?string $contentendswith = null,
		?bool $proxied = null,
		?\FoundryCo\Cloudflare\Enums\DNSRecordsForAZoneMatch $match = null,
		?string $comment = null,
		?string $commentpresent = null,
		?string $commentabsent = null,
		?string $commentexact = null,
		?string $commentcontains = null,
		?string $commentstartswith = null,
		?string $commentendswith = null,
		?string $tag = null,
		?string $tagpresent = null,
		?string $tagabsent = null,
		?string $tagexact = null,
		?string $tagcontains = null,
		?string $tagstartswith = null,
		?string $tagendswith = null,
		?string $search = null,
		?\FoundryCo\Cloudflare\Enums\DNSRecordsForAZoneTagMatch $tagMatch = null,
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\DNSRecordsForAZoneOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\DNSRecordsForAZoneDirection $direction = null,
	): \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneRecords
	{
		return $this->client->get('/zones/' . $this->zoneId . '/dns_records', \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneRecords::class, ['name' => $name ?? null, 'nameexact' => $nameexact ?? null, 'namecontains' => $namecontains ?? null, 'namestartswith' => $namestartswith ?? null, 'nameendswith' => $nameendswith ?? null, 'type' => $type ?? null, 'content' => $content ?? null, 'contentexact' => $contentexact ?? null, 'contentcontains' => $contentcontains ?? null, 'contentstartswith' => $contentstartswith ?? null, 'contentendswith' => $contentendswith ?? null, 'proxied' => $proxied ?? null, 'match' => $match ?? null, 'comment' => $comment ?? null, 'commentpresent' => $commentpresent ?? null, 'commentabsent' => $commentabsent ?? null, 'commentexact' => $commentexact ?? null, 'commentcontains' => $commentcontains ?? null, 'commentstartswith' => $commentstartswith ?? null, 'commentendswith' => $commentendswith ?? null, 'tag' => $tag ?? null, 'tagpresent' => $tagpresent ?? null, 'tagabsent' => $tagabsent ?? null, 'tagexact' => $tagexact ?? null, 'tagcontains' => $tagcontains ?? null, 'tagstartswith' => $tagstartswith ?? null, 'tagendswith' => $tagendswith ?? null, 'search' => $search ?? null, 'tagMatch' => $tagMatch ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create DNS Record
	 */
	public function create(): \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneRecord
	{
		return $this->client->post('/zones/' . $this->zoneId . '/dns_records', \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneRecord::class, null);
	}


	/**
	 * Batch DNS Records
	 */
	public function batch(
		\FoundryCo\Cloudflare\Requests\DnsRecordsForAZoneBatchDnsRecordsRequest $request,
	): \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneRecords
	{
		return $this->client->post('/zones/' . $this->zoneId . '/dns_records/batch', \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneRecords::class, $request);
	}


	/**
	 * Export DNS Records
	 */
	public function export(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId . '/dns_records/export', null, []);
	}


	/**
	 * Import DNS Records
	 */
	public function import(): \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneRecords
	{
		return $this->client->post('/zones/' . $this->zoneId . '/dns_records/import', \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneRecords::class, null);
	}


	/**
	 * Scan DNS Records
	 */
	public function scan(): \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneRecords
	{
		return $this->client->post('/zones/' . $this->zoneId . '/dns_records/scan', \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneRecords::class, null);
	}


	/**
	 * List Scanned DNS Records
	 */
	public function review(): \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneScan
	{
		return $this->client->get('/zones/' . $this->zoneId . '/dns_records/scan/review', \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneScan::class, []);
	}


	/**
	 * Review Scanned DNS Records
	 */
	public function dnsRecordsForAZoneApplyDnsScanResults(
		\FoundryCo\Cloudflare\Requests\DnsRecordsForAZoneApplyDnsScanResultsRequest $request,
	): \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneResults
	{
		return $this->client->post('/zones/' . $this->zoneId . '/dns_records/scan/review', \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneResults::class, $request);
	}


	/**
	 * Trigger DNS Record Scan
	 */
	public function trigger(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/dns_records/scan/trigger', null, null);
	}


	/**
	 * Get DNS Record Usage
	 */
	public function usage(): \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneUsage
	{
		return $this->client->get('/zones/' . $this->zoneId . '/dns_records/usage', \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneUsage::class, []);
	}


	/**
	 * DNS Record Details
	 */
	public function get(string $dnsRecordId): \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneDetails
	{
		return $this->client->get('/zones/' . $this->zoneId . '/dns_records/' . $dnsRecordId, \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneDetails::class, []);
	}


	/**
	 * Overwrite DNS Record
	 */
	public function update(string $dnsRecordId): \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneRecord
	{
		return $this->client->put('/zones/' . $this->zoneId . '/dns_records/' . $dnsRecordId, \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneRecord::class, null);
	}


	/**
	 * Update DNS Record
	 */
	public function dnsRecords(string $dnsRecordId): \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneRecord
	{
		return $this->client->patch('/zones/' . $this->zoneId . '/dns_records/' . $dnsRecordId, \FoundryCo\Cloudflare\Responses\DNSRecordsForAZoneRecord::class, null);
	}


	/**
	 * Delete DNS Record
	 */
	public function delete(string $dnsRecordId): void
	{
		$this->client->delete('/zones/' . $this->zoneId . '/dns_records/' . $dnsRecordId);
	}
}
