<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
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
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_dns_protection/configs/dns_protection/rules', \FoundryCo\Cloudflare\Responses\ListDnsProtectionRulesForAccount::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create DNS Protection rule.
	 */
	public function create(\FoundryCo\Cloudflare\Requests\CreateDnsProtectionRuleRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/advanced_dns_protection/configs/dns_protection/rules', \FoundryCo\Cloudflare\Responses\CreateDnsProtectionRule::class, $request);
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
	public function get(string $ruleId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_dns_protection/configs/dns_protection/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\GetDnsProtectionRule::class, []);
	}


	/**
	 * Update DNS Protection rule.
	 */
	public function update(string $ruleId, \FoundryCo\Cloudflare\Requests\UpdateDnsProtectionRuleRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/advanced_dns_protection/configs/dns_protection/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\UpdateDnsProtectionRule::class, $request);
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
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/allowlist', \FoundryCo\Cloudflare\Responses\ListAllowlistPrefixesForAccount::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create allowlist prefix.
	 */
	public function createAllowlistedPrefix(
		\FoundryCo\Cloudflare\Requests\CreateAllowlistedPrefixRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/allowlist', \FoundryCo\Cloudflare\Responses\CreateAllowlistedPrefix::class, $request);
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
	public function getAllowlistPrefix(string $prefixId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/allowlist/' . $prefixId, \FoundryCo\Cloudflare\Responses\GetAllowlistPrefix::class, []);
	}


	/**
	 * Update allowlist prefix.
	 */
	public function updateAllowlistPrefix(
		string $prefixId,
		\FoundryCo\Cloudflare\Requests\UpdateAllowlistPrefixRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/allowlist/' . $prefixId, \FoundryCo\Cloudflare\Responses\UpdateAllowlistPrefix::class, $request);
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
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/prefixes', \FoundryCo\Cloudflare\Responses\ListPrefixesForAccount::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create prefix.
	 */
	public function createPrefix(\FoundryCo\Cloudflare\Requests\CreatePrefixRequest $request): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/prefixes', \FoundryCo\Cloudflare\Responses\CreatePrefix::class, $request);
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
	public function bulk(): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/prefixes/bulk', \FoundryCo\Cloudflare\Responses\BulkCreatePrefixes::class, null);
	}


	/**
	 * Get prefix.
	 */
	public function getPrefix(string $prefixId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/prefixes/' . $prefixId, \FoundryCo\Cloudflare\Responses\GetPrefix::class, []);
	}


	/**
	 * Update prefix.
	 */
	public function updatePrefix(string $prefixId, \FoundryCo\Cloudflare\Requests\UpdatePrefixRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/prefixes/' . $prefixId, \FoundryCo\Cloudflare\Responses\UpdatePrefix::class, $request);
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
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/filters', \FoundryCo\Cloudflare\Responses\ListSynProtectionFiltersForAccount::class, ['mode' => $mode ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create a SYN Protection filter.
	 */
	public function createSynProtectionFilter(
		\FoundryCo\Cloudflare\Requests\CreateSynProtectionFilterRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/filters', \FoundryCo\Cloudflare\Responses\CreateSynProtectionFilter::class, $request);
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
	public function getSynProtectionFilter(string $filterId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/filters/' . $filterId, \FoundryCo\Cloudflare\Responses\GetSynProtectionFilter::class, []);
	}


	/**
	 * Update SYN Protection filter.
	 */
	public function updateSynProtectionFilter(
		string $filterId,
		\FoundryCo\Cloudflare\Requests\UpdateSynProtectionFilterRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/filters/' . $filterId, \FoundryCo\Cloudflare\Responses\UpdateSynProtectionFilter::class, $request);
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
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/rules', \FoundryCo\Cloudflare\Responses\ListSynProtectionRulesForAccount::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create SYN Protection rule.
	 */
	public function createSynProtectionRule(
		\FoundryCo\Cloudflare\Requests\CreateSynProtectionRuleRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/rules', \FoundryCo\Cloudflare\Responses\CreateSynProtectionRule::class, $request);
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
	public function getSynProtectionRule(string $ruleId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\GetSynProtectionRule::class, []);
	}


	/**
	 * Update SYN Protection rule.
	 */
	public function updateSynProtectionRule(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\UpdateSynProtectionRuleRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/syn_protection/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\UpdateSynProtectionRule::class, $request);
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
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/filters', \FoundryCo\Cloudflare\Responses\ListTcpFlowProtectionFiltersForAccount::class, ['mode' => $mode ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create a TCP Flow Protection filter.
	 */
	public function createTcpFlowProtectionFilter(
		\FoundryCo\Cloudflare\Requests\CreateTcpFlowProtectionFilterRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/filters', \FoundryCo\Cloudflare\Responses\CreateTcpFlowProtectionFilter::class, $request);
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
	public function getTcpFlowProtectionFilter(string $filterId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/filters/' . $filterId, \FoundryCo\Cloudflare\Responses\GetTcpFlowProtectionFilter::class, []);
	}


	/**
	 * Update TCP Flow Protection filter.
	 */
	public function updateTcpFlowProtectionFilter(
		string $filterId,
		\FoundryCo\Cloudflare\Requests\UpdateTcpFlowProtectionFilterRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/filters/' . $filterId, \FoundryCo\Cloudflare\Responses\UpdateTcpFlowProtectionFilter::class, $request);
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
	): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/rules', \FoundryCo\Cloudflare\Responses\ListTcpFlowProtectionRulesForAccount::class, ['page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null]);
	}


	/**
	 * Create TCP Flow Protection rule.
	 */
	public function createTcpFlowProtectionRule(
		\FoundryCo\Cloudflare\Requests\CreateTcpFlowProtectionRuleRequest $request,
	): mixed
	{
		return $this->client->post('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/rules', \FoundryCo\Cloudflare\Responses\CreateTcpFlowProtectionRule::class, $request);
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
	public function getTcpFlowProtectionRule(string $ruleId): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\GetTcpFlowProtectionRule::class, []);
	}


	/**
	 * Update TCP Flow Protection rule.
	 */
	public function updateTcpFlowProtectionRule(
		string $ruleId,
		\FoundryCo\Cloudflare\Requests\UpdateTcpFlowProtectionRuleRequest $request,
	): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_flow_protection/rules/' . $ruleId, \FoundryCo\Cloudflare\Responses\UpdateTcpFlowProtectionRule::class, $request);
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
	public function tcpProtectionStatus(): mixed
	{
		return $this->client->get('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_protection_status', \FoundryCo\Cloudflare\Responses\GetProtectionStatus::class, []);
	}


	/**
	 * Update protection status.
	 */
	public function updateProtectionStatus(\FoundryCo\Cloudflare\Requests\UpdateProtectionStatusRequest $request): mixed
	{
		return $this->client->patch('/accounts/' . $this->accountId . '/magic/advanced_tcp_protection/configs/tcp_protection_status', \FoundryCo\Cloudflare\Responses\UpdateProtectionStatus::class, $request);
	}
}
