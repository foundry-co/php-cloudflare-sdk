<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class DosFlowtrackdApiOtherResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $accountId = null,
	) {
	}


	/**
	 * List all DNS Protection rules.
	 */
	public function list(
		?int $page = null,
		?int $perPage = null,
		?string $order = null,
		?string $direction = null,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherListDnsProtectionRulesForAccount
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_dns_protection/configs/dns_protection/rules', \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherListDnsProtectionRulesForAccount::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create DNS Protection rule.
	 */
	public function create(
		\FoundryCo\Cloudflare\Requests\CreateDnsProtectionRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherCreateDnsProtectionRule
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/advanced_dns_protection/configs/dns_protection/rules', \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherCreateDnsProtectionRule::class, $request);
	}


	/**
	 * Delete all DNS Protection rules.
	 */
	public function delete(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/advanced_dns_protection/configs/dns_protection/rules');
	}


	/**
	 * Get DNS Protection rule.
	 */
	public function get(string $ruleId): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherGetDnsProtectionRule
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_dns_protection/configs/dns_protection/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherGetDnsProtectionRule::class, []);
	}


	/**
	 * Update DNS Protection rule.
	 */
	public function update(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\UpdateDnsProtectionRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherUpdateDnsProtectionRule
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/advanced_dns_protection/configs/dns_protection/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherUpdateDnsProtectionRule::class, $request);
	}


	/**
	 * Delete DNS Protection rule.
	 */
	public function rules(string $ruleId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/advanced_dns_protection/configs/dns_protection/rules/' . $ruleId);
	}


	/**
	 * List all allowlist prefixes.
	 */
	public function allowlist(
		?int $page = null,
		?int $perPage = null,
		?string $order = null,
		?string $direction = null,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherListAllowlistPrefixesForAccount
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/allowlist', \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherListAllowlistPrefixesForAccount::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create allowlist prefix.
	 */
	public function createAllowlistedPrefix(
		\FoundryCo\Cloudflare\Requests\CreateAllowlistedPrefixRequest $request,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherCreateAllowlistedPrefix
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/allowlist', \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherCreateAllowlistedPrefix::class, $request);
	}


	/**
	 * Delete all allowlist prefixes.
	 */
	public function deleteAllowlistPrefixesForAccount(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/allowlist');
	}


	/**
	 * Get allowlist prefix.
	 */
	public function getAllowlistPrefix(
		string $prefixId,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherGetAllowlistPrefix
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/allowlist/' . $prefixId, \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherGetAllowlistPrefix::class, []);
	}


	/**
	 * Update allowlist prefix.
	 */
	public function updateAllowlistPrefix(
		string $prefixId,
		\FoundryCo\Cloudflare\Requests\UpdateAllowlistPrefixRequest $request,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherUpdateAllowlistPrefix
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/allowlist/' . $prefixId, \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherUpdateAllowlistPrefix::class, $request);
	}


	/**
	 * Delete allowlist prefix.
	 */
	public function deleteAllowlistPrefix(string $prefixId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/allowlist/' . $prefixId);
	}


	/**
	 * List all prefixes.
	 */
	public function prefixes(
		?int $page = null,
		?int $perPage = null,
		?string $order = null,
		?string $direction = null,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherListPrefixesForAccount
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/prefixes', \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherListPrefixesForAccount::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create prefix.
	 */
	public function createPrefix(
		\FoundryCo\Cloudflare\Requests\CreatePrefixRequest $request,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherCreatePrefix
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/prefixes', \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherCreatePrefix::class, $request);
	}


	/**
	 * Delete all prefixes.
	 */
	public function deletePrefixesForAccount(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/prefixes');
	}


	/**
	 * Create multiple prefixes.
	 */
	public function bulk(): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherBulkCreatePrefixes
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/prefixes/bulk', \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherBulkCreatePrefixes::class, null);
	}


	/**
	 * Get prefix.
	 */
	public function getPrefix(string $prefixId): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherGetPrefix
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/prefixes/' . $prefixId, \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherGetPrefix::class, []);
	}


	/**
	 * Update prefix.
	 */
	public function updatePrefix(
		string $prefixId,
		\FoundryCo\Cloudflare\Requests\UpdatePrefixRequest $request,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherUpdatePrefix
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/prefixes/' . $prefixId, \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherUpdatePrefix::class, $request);
	}


	/**
	 * Delete prefix.
	 */
	public function deletePrefix(string $prefixId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/prefixes/' . $prefixId);
	}


	/**
	 * List all SYN Protection filters.
	 */
	public function filters(
		?string $mode = null,
		?int $page = null,
		?int $perPage = null,
		?string $order = null,
		?string $direction = null,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherListSynProtectionFiltersForAccount
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/filters', \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherListSynProtectionFiltersForAccount::class, ['mode' => $mode ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create a SYN Protection filter.
	 */
	public function createSynProtectionFilter(
		\FoundryCo\Cloudflare\Requests\CreateSynProtectionFilterRequest $request,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherCreateSynProtectionFilter
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/filters', \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherCreateSynProtectionFilter::class, $request);
	}


	/**
	 * Delete all SYN Protection filters.
	 */
	public function deleteSynProtectionFiltersForAccount(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/filters');
	}


	/**
	 * Get SYN Protection filter.
	 */
	public function getSynProtectionFilter(
		string $filterId,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherGetSynProtectionFilter
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/filters/' . $filterId, \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherGetSynProtectionFilter::class, []);
	}


	/**
	 * Update SYN Protection filter.
	 */
	public function updateSynProtectionFilter(
		string $filterId,
		\FoundryCo\Cloudflare\Requests\UpdateSynProtectionFilterRequest $request,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherUpdateSynProtectionFilter
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/filters/' . $filterId, \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherUpdateSynProtectionFilter::class, $request);
	}


	/**
	 * Delete SYN Protection filter.
	 */
	public function deleteSynProtectionFilter(string $filterId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/filters/' . $filterId);
	}


	/**
	 * List all SYN Protection rules.
	 */
	public function listSynProtectionRulesForAccount(
		?int $page = null,
		?int $perPage = null,
		?string $order = null,
		?string $direction = null,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherListSynProtectionRulesForAccount
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/rules', \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherListSynProtectionRulesForAccount::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create SYN Protection rule.
	 */
	public function createSynProtectionRule(
		\FoundryCo\Cloudflare\Requests\CreateSynProtectionRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherCreateSynProtectionRule
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/rules', \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherCreateSynProtectionRule::class, $request);
	}


	/**
	 * Delete all SYN Protection rules.
	 */
	public function deleteSynProtectionRulesForAccount(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/rules');
	}


	/**
	 * Get SYN Protection rule.
	 */
	public function getSynProtectionRule(
		string $ruleId,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherGetSynProtectionRule
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherGetSynProtectionRule::class, []);
	}


	/**
	 * Update SYN Protection rule.
	 */
	public function updateSynProtectionRule(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\UpdateSynProtectionRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherUpdateSynProtectionRule
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherUpdateSynProtectionRule::class, $request);
	}


	/**
	 * Delete SYN Protection rule.
	 */
	public function deleteSynProtectionRule(string $ruleId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/rules/' . $ruleId);
	}


	/**
	 * List all TCP Flow Protection filters.
	 */
	public function listTcpFlowProtectionFiltersForAccount(
		?string $mode = null,
		?int $page = null,
		?int $perPage = null,
		?string $order = null,
		?string $direction = null,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherListTcpFlowProtectionFiltersForAccount
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/filters', \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherListTcpFlowProtectionFiltersForAccount::class, ['mode' => $mode ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create a TCP Flow Protection filter.
	 */
	public function createTcpFlowProtectionFilter(
		\FoundryCo\Cloudflare\Requests\CreateTcpFlowProtectionFilterRequest $request,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherCreateTcpFlowProtectionFilter
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/filters', \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherCreateTcpFlowProtectionFilter::class, $request);
	}


	/**
	 * Delete all TCP Flow Protection filters.
	 */
	public function deleteTcpFlowProtectionFiltersForAccount(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/filters');
	}


	/**
	 * Get TCP Flow Protection filter.
	 */
	public function getTcpFlowProtectionFilter(
		string $filterId,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherGetTcpFlowProtectionFilter
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/filters/' . $filterId, \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherGetTcpFlowProtectionFilter::class, []);
	}


	/**
	 * Update TCP Flow Protection filter.
	 */
	public function updateTcpFlowProtectionFilter(
		string $filterId,
		\FoundryCo\Cloudflare\Requests\UpdateTcpFlowProtectionFilterRequest $request,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherUpdateTcpFlowProtectionFilter
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/filters/' . $filterId, \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherUpdateTcpFlowProtectionFilter::class, $request);
	}


	/**
	 * Delete TCP Flow Protection filter.
	 */
	public function deleteTcpFlowProtectionFilter(string $filterId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/filters/' . $filterId);
	}


	/**
	 * List all TCP Flow Protection rules.
	 */
	public function listTcpFlowProtectionRulesForAccount(
		?int $page = null,
		?int $perPage = null,
		?string $order = null,
		?string $direction = null,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherListTcpFlowProtectionRulesForAccount
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/rules', \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherListTcpFlowProtectionRulesForAccount::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create TCP Flow Protection rule.
	 */
	public function createTcpFlowProtectionRule(
		\FoundryCo\Cloudflare\Requests\CreateTcpFlowProtectionRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherCreateTcpFlowProtectionRule
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/rules', \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherCreateTcpFlowProtectionRule::class, $request);
	}


	/**
	 * Delete all TCP Flow Protection rules.
	 */
	public function deleteTcpFlowProtectionRulesForAccount(): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/rules');
	}


	/**
	 * Get TCP Flow Protection rule.
	 */
	public function getTcpFlowProtectionRule(
		string $ruleId,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherGetTcpFlowProtectionRule
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherGetTcpFlowProtectionRule::class, []);
	}


	/**
	 * Update TCP Flow Protection rule.
	 */
	public function updateTcpFlowProtectionRule(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\UpdateTcpFlowProtectionRuleRequest $request,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherUpdateTcpFlowProtectionRule
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherUpdateTcpFlowProtectionRule::class, $request);
	}


	/**
	 * Delete TCP Flow Protection rule.
	 */
	public function deleteTcpFlowProtectionRule(string $ruleId): void
	{
		$this->client->delete('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/rules/' . $ruleId);
	}


	/**
	 * Get protection status.
	 */
	public function tcpProtectionStatus(): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherGetProtectionStatus
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_protection_status', \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherGetProtectionStatus::class, []);
	}


	/**
	 * Update protection status.
	 */
	public function updateProtectionStatus(
		\FoundryCo\Cloudflare\Requests\UpdateProtectionStatusRequest $request,
	): \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherUpdateProtectionStatus
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_protection_status', \FoundryCo\Cloudflare\Responses\DosFlowtrackdApiOtherUpdateProtectionStatus::class, $request);
	}
}
