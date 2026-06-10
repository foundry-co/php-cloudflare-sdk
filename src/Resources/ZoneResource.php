<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Resources;

class ZoneResource
{
	public function __construct(
		private readonly \FoundryCo\Cloudflare\Http\HttpClient $client,
		private readonly ?string $zoneId = null,
	) {
	}


	public function accessApplications(): AccessApplicationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessApplicationsResource($this->client, $this->zoneId);
	}


	public function accessShortLivedCertificateCas(): AccessShortLivedCertificateCasResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessShortLivedCertificateCasResource($this->client, $this->zoneId);
	}


	public function accessPolicies(): AccessPoliciesResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessPoliciesResource($this->client, $this->zoneId);
	}


	public function accessMtlsAuthentication(): AccessMtlsAuthenticationResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessMtlsAuthenticationResource($this->client, $this->zoneId);
	}


	public function accessGroups(): AccessGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessGroupsResource($this->client, $this->zoneId);
	}


	public function accessIdentityProviders(): AccessIdentityProvidersResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessIdentityProvidersResource($this->client, $this->zoneId);
	}


	public function zeroTrustOrganization(): ZeroTrustOrganizationResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustOrganizationResource($this->client, $this->zoneId);
	}


	public function accessServiceTokens(): AccessServiceTokensResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessServiceTokensResource($this->client, $this->zoneId);
	}


	public function customOriginTrustStore(): CustomOriginTrustStoreResource
	{
		return new \FoundryCo\Cloudflare\Resources\CustomOriginTrustStoreResource($this->client, $this->zoneId);
	}


	public function totalTLS(): TotalTLSResource
	{
		return new \FoundryCo\Cloudflare\Resources\TotalTLSResource($this->client, $this->zoneId);
	}


	public function aiSecurityForApps(): AISecurityForAppsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AISecurityForAppsResource($this->client, $this->zoneId);
	}


	public function argoAnalyticsFor(): ArgoAnalyticsForResource
	{
		return new \FoundryCo\Cloudflare\Resources\ArgoAnalyticsForResource($this->client, $this->zoneId);
	}


	public function argoAnalyticsForGeolocation(): ArgoAnalyticsForGeolocationResource
	{
		return new \FoundryCo\Cloudflare\Resources\ArgoAnalyticsForGeolocationResource($this->client, $this->zoneId);
	}


	public function apiShieldSettings(): APIShieldSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\APIShieldSettingsResource($this->client, $this->zoneId);
	}


	public function apiShieldAPIDiscovery(): APIShieldAPIDiscoveryResource
	{
		return new \FoundryCo\Cloudflare\Resources\APIShieldAPIDiscoveryResource($this->client, $this->zoneId);
	}


	public function apiShieldWAFExpressionTemplates(): APIShieldWAFExpressionTemplatesResource
	{
		return new \FoundryCo\Cloudflare\Resources\APIShieldWAFExpressionTemplatesResource($this->client, $this->zoneId);
	}


	public function apiShieldLabels(): APIShieldLabelsResource
	{
		return new \FoundryCo\Cloudflare\Resources\APIShieldLabelsResource($this->client, $this->zoneId);
	}


	public function apiShieldEndpointManagement(): APIShieldEndpointManagementResource
	{
		return new \FoundryCo\Cloudflare\Resources\APIShieldEndpointManagementResource($this->client, $this->zoneId);
	}


	public function apiShieldSchemaValidation20(): APIShieldSchemaValidation20Resource
	{
		return new \FoundryCo\Cloudflare\Resources\APIShieldSchemaValidation20Resource($this->client, $this->zoneId);
	}


	public function argoSmartRouting(): ArgoSmartRoutingResource
	{
		return new \FoundryCo\Cloudflare\Resources\ArgoSmartRoutingResource($this->client, $this->zoneId);
	}


	public function tieredCaching(): TieredCachingResource
	{
		return new \FoundryCo\Cloudflare\Resources\TieredCachingResource($this->client, $this->zoneId);
	}


	public function ratePlan(): ZoneRatePlanResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZoneRatePlanResource($this->client, $this->zoneId);
	}


	public function botSettings(): BotSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\BotSettingsResource($this->client, $this->zoneId);
	}


	public function feedback(): FeedbackResource
	{
		return new \FoundryCo\Cloudflare\Resources\FeedbackResource($this->client, $this->zoneId);
	}


	public function cacheSettings(): ZoneCacheSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZoneCacheSettingsResource($this->client, $this->zoneId);
	}


	public function originCloudRegions(): OriginCloudRegionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\OriginCloudRegionsResource($this->client, $this->zoneId);
	}


	public function originPostQuantum(): OriginPostQuantumResource
	{
		return new \FoundryCo\Cloudflare\Resources\OriginPostQuantumResource($this->client, $this->zoneId);
	}


	public function smartTieredCache(): SmartTieredCacheResource
	{
		return new \FoundryCo\Cloudflare\Resources\SmartTieredCacheResource($this->client, $this->zoneId);
	}


	public function apiShieldClientCertificates(): APIShieldClientCertificatesResource
	{
		return new \FoundryCo\Cloudflare\Resources\APIShieldClientCertificatesResource($this->client, $this->zoneId);
	}


	public function cloudConnectorRulesGET(): ZoneCloudConnectorRulesGETResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZoneCloudConnectorRulesGETResource($this->client, $this->zoneId);
	}


	public function cloudConnectorRulesPUT(): ZoneCloudConnectorRulesPUTResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZoneCloudConnectorRulesPUTResource($this->client, $this->zoneId);
	}


	public function contentScanning(): ContentScanningResource
	{
		return new \FoundryCo\Cloudflare\Resources\ContentScanningResource($this->client, $this->zoneId);
	}


	public function customSSL(): CustomSSLResource
	{
		return new \FoundryCo\Cloudflare\Resources\CustomSSLResource($this->client, $this->zoneId);
	}


	public function customCsrs(): CustomCsrsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CustomCsrsResource($this->client, $this->zoneId);
	}


	public function customHostname(): CustomHostnameResource
	{
		return new \FoundryCo\Cloudflare\Resources\CustomHostnameResource($this->client, $this->zoneId);
	}


	public function customHostnameFallbackOrigin(): CustomHostnameFallbackOriginResource
	{
		return new \FoundryCo\Cloudflare\Resources\CustomHostnameFallbackOriginResource($this->client, $this->zoneId);
	}


	public function customNameservers(): CustomNameserversResource
	{
		return new \FoundryCo\Cloudflare\Resources\CustomNameserversResource($this->client, $this->zoneId);
	}


	public function dcvDelegation(): DCVDelegationResource
	{
		return new \FoundryCo\Cloudflare\Resources\DCVDelegationResource($this->client, $this->zoneId);
	}


	public function dnsAnalytics(): DNSAnalyticsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DNSAnalyticsResource($this->client, $this->zoneId);
	}


	public function dnsRecords(): DNSRecordsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DNSRecordsResource($this->client, $this->zoneId);
	}


	public function dnsSettings(): DNSSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DNSSettingsResource($this->client, $this->zoneId);
	}


	public function dnssec(): DNSSECResource
	{
		return new \FoundryCo\Cloudflare\Resources\DNSSECResource($this->client, $this->zoneId);
	}


	public function emailAuth(): EmailAuthResource
	{
		return new \FoundryCo\Cloudflare\Resources\EmailAuthResource($this->client, $this->zoneId);
	}


	public function emailRoutingSettings(): EmailRoutingSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\EmailRoutingSettingsResource($this->client, $this->zoneId);
	}


	public function emailRoutingRoutingRules(): EmailRoutingRoutingRulesResource
	{
		return new \FoundryCo\Cloudflare\Resources\EmailRoutingRoutingRulesResource($this->client, $this->zoneId);
	}


	public function emailSendingSubdomains(): EmailSendingSubdomainsResource
	{
		return new \FoundryCo\Cloudflare\Resources\EmailSendingSubdomainsResource($this->client, $this->zoneId);
	}


	public function environments(): ZoneEnvironmentsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZoneEnvironmentsResource($this->client, $this->zoneId);
	}


	public function filters(): FiltersResource
	{
		return new \FoundryCo\Cloudflare\Resources\FiltersResource($this->client, $this->zoneId);
	}


	public function ipAccessRules(): IPAccessRulesResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPAccessRulesResource($this->client, $this->zoneId);
	}


	public function lockdown(): ZoneLockdownResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZoneLockdownResource($this->client, $this->zoneId);
	}


	public function firewallRules(): FirewallRulesResource
	{
		return new \FoundryCo\Cloudflare\Resources\FirewallRulesResource($this->client, $this->zoneId);
	}


	public function userAgentBlockingRules(): UserAgentBlockingRulesResource
	{
		return new \FoundryCo\Cloudflare\Resources\UserAgentBlockingRulesResource($this->client, $this->zoneId);
	}


	public function wafOverrides(): WAFOverridesResource
	{
		return new \FoundryCo\Cloudflare\Resources\WAFOverridesResource($this->client, $this->zoneId);
	}


	public function wafPackages(): WAFPackagesResource
	{
		return new \FoundryCo\Cloudflare\Resources\WAFPackagesResource($this->client, $this->zoneId);
	}


	public function wafRuleGroups(): WAFRuleGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\WAFRuleGroupsResource($this->client, $this->zoneId);
	}


	public function wafRules(): WAFRulesResource
	{
		return new \FoundryCo\Cloudflare\Resources\WAFRulesResource($this->client, $this->zoneId);
	}


	public function fraudDetection(): FraudDetectionResource
	{
		return new \FoundryCo\Cloudflare\Resources\FraudDetectionResource($this->client, $this->zoneId);
	}


	public function healthChecks(): HealthChecksResource
	{
		return new \FoundryCo\Cloudflare\Resources\HealthChecksResource($this->client, $this->zoneId);
	}


	public function holds(): ZoneHoldsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZoneHoldsResource($this->client, $this->zoneId);
	}


	public function perHostnameTLSSettings(): PerHostnameTLSSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\PerHostnameTLSSettingsResource($this->client, $this->zoneId);
	}


	public function keylessSSL(): KeylessSSLResource
	{
		return new \FoundryCo\Cloudflare\Resources\KeylessSSLResource($this->client, $this->zoneId);
	}


	public function leakedCredentialChecks(): LeakedCredentialChecksResource
	{
		return new \FoundryCo\Cloudflare\Resources\LeakedCredentialChecksResource($this->client, $this->zoneId);
	}


	public function loadBalancers(): LoadBalancersResource
	{
		return new \FoundryCo\Cloudflare\Resources\LoadBalancersResource($this->client, $this->zoneId);
	}


	public function logpushJobs(): LogpushJobsResource
	{
		return new \FoundryCo\Cloudflare\Resources\LogpushJobsResource($this->client, $this->zoneId);
	}


	public function instantLogsJobs(): InstantLogsJobsResource
	{
		return new \FoundryCo\Cloudflare\Resources\InstantLogsJobsResource($this->client, $this->zoneId);
	}


	public function logsReceived(): LogsReceivedResource
	{
		return new \FoundryCo\Cloudflare\Resources\LogsReceivedResource($this->client, $this->zoneId);
	}


	public function managedTransforms(): ManagedTransformsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ManagedTransformsResource($this->client, $this->zoneId);
	}


	public function authenticatedOriginPulls(): AuthenticatedOriginPullsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AuthenticatedOriginPullsResource($this->client, $this->zoneId);
	}


	public function perHostnameAuthenticatedOriginPull(): PerHostnameAuthenticatedOriginPullResource
	{
		return new \FoundryCo\Cloudflare\Resources\PerHostnameAuthenticatedOriginPullResource($this->client, $this->zoneId);
	}


	public function pageShield(): PageShieldResource
	{
		return new \FoundryCo\Cloudflare\Resources\PageShieldResource($this->client, $this->zoneId);
	}


	public function pageRules(): PageRulesResource
	{
		return new \FoundryCo\Cloudflare\Resources\PageRulesResource($this->client, $this->zoneId);
	}


	public function availablePageRulesSettings(): AvailablePageRulesSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AvailablePageRulesSettingsResource($this->client, $this->zoneId);
	}


	public function rateLimits(): RateLimitsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RateLimitsResource($this->client, $this->zoneId);
	}


	public function rulesets(): ZoneRulesetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZoneRulesetsResource($this->client, $this->zoneId);
	}


	public function schemaValidation(): SchemaValidationResource
	{
		return new \FoundryCo\Cloudflare\Resources\SchemaValidationResource($this->client, $this->zoneId);
	}


	public function schemaValidationSettings(): SchemaValidationSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\SchemaValidationSettingsResource($this->client, $this->zoneId);
	}


	public function secondaryDNSSecondaryZone(): SecondaryDNSSecondaryZoneResource
	{
		return new \FoundryCo\Cloudflare\Resources\SecondaryDNSSecondaryZoneResource($this->client, $this->zoneId);
	}


	public function secondaryDNSPrimaryZone(): SecondaryDNSPrimaryZoneResource
	{
		return new \FoundryCo\Cloudflare\Resources\SecondaryDNSPrimaryZoneResource($this->client, $this->zoneId);
	}


	public function securitytxt(): SecuritytxtResource
	{
		return new \FoundryCo\Cloudflare\Resources\SecuritytxtResource($this->client, $this->zoneId);
	}


	public function settings(): ZoneSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZoneSettingsResource($this->client, $this->zoneId);
	}


	public function csamScannerSettings(): CSAMScannerSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CSAMScannerSettingsResource($this->client, $this->zoneId);
	}


	public function googleTagGateway(): GoogleTagGatewayResource
	{
		return new \FoundryCo\Cloudflare\Resources\GoogleTagGatewayResource($this->client, $this->zoneId);
	}


	public function automaticSsltls(): AutomaticSsltlsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AutomaticSsltlsResource($this->client, $this->zoneId);
	}


	public function zaraz(): ZarazResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZarazResource($this->client, $this->zoneId);
	}


	public function smartShieldSettings(): SmartShieldSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\SmartShieldSettingsResource($this->client, $this->zoneId);
	}


	public function cacheReserveClear(): CacheReserveClearResource
	{
		return new \FoundryCo\Cloudflare\Resources\CacheReserveClearResource($this->client, $this->zoneId);
	}


	public function snippets(): ZoneSnippetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZoneSnippetsResource($this->client, $this->zoneId);
	}


	public function spectrumAnalytics(): SpectrumAnalyticsResource
	{
		return new \FoundryCo\Cloudflare\Resources\SpectrumAnalyticsResource($this->client, $this->zoneId);
	}


	public function spectrumApplications(): SpectrumApplicationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\SpectrumApplicationsResource($this->client, $this->zoneId);
	}


	public function observatory(): ObservatoryResource
	{
		return new \FoundryCo\Cloudflare\Resources\ObservatoryResource($this->client, $this->zoneId);
	}


	public function analyzeCertificate(): AnalyzeCertificateResource
	{
		return new \FoundryCo\Cloudflare\Resources\AnalyzeCertificateResource($this->client, $this->zoneId);
	}


	public function certificatePacks(): CertificatePacksResource
	{
		return new \FoundryCo\Cloudflare\Resources\CertificatePacksResource($this->client, $this->zoneId);
	}


	public function ssltlsModeRecommendation(): SsltlsModeRecommendationResource
	{
		return new \FoundryCo\Cloudflare\Resources\SsltlsModeRecommendationResource($this->client, $this->zoneId);
	}


	public function universalSSLSettings(): UniversalSSLSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\UniversalSSLSettingsResource($this->client, $this->zoneId);
	}


	public function sslVerification(): SSLVerificationResource
	{
		return new \FoundryCo\Cloudflare\Resources\SSLVerificationResource($this->client, $this->zoneId);
	}


	public function subscription(): ZoneSubscriptionResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZoneSubscriptionResource($this->client, $this->zoneId);
	}


	public function tokenValidationTokenConfiguration(): TokenValidationTokenConfigurationResource
	{
		return new \FoundryCo\Cloudflare\Resources\TokenValidationTokenConfigurationResource($this->client, $this->zoneId);
	}


	public function tokenValidationTokenRules(): TokenValidationTokenRulesResource
	{
		return new \FoundryCo\Cloudflare\Resources\TokenValidationTokenRulesResource($this->client, $this->zoneId);
	}


	public function urlNormalization(): URLNormalizationResource
	{
		return new \FoundryCo\Cloudflare\Resources\URLNormalizationResource($this->client, $this->zoneId);
	}


	public function web3Hostname(): Web3HostnameResource
	{
		return new \FoundryCo\Cloudflare\Resources\Web3HostnameResource($this->client, $this->zoneId);
	}


	public function workerRoutes(): WorkerRoutesResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkerRoutesResource($this->client, $this->zoneId);
	}


	/**
	 * List Zones
	 */
	public function list(
		?string $name = null,
		?\FoundryCo\Cloudflare\Enums\ZoneStatus $status = null,
		?array $type = null,
		?string $accountid = null,
		?string $accountname = null,
		?float $page = null,
		?float $perPage = null,
		?\FoundryCo\Cloudflare\Enums\ZoneOrder $order = null,
		?\FoundryCo\Cloudflare\Enums\ZoneDirection $direction = null,
		?\FoundryCo\Cloudflare\Enums\ZoneMatch $match = null,
	): mixed
	{
		return $this->client->get('/zones', \FoundryCo\Cloudflare\Responses\ZonesGet::class, ['name' => $name ?? null, 'status' => $status ?? null, 'type' => $type ?? null, 'accountid' => $accountid ?? null, 'accountname' => $accountname ?? null, 'page' => $page ?? null, 'perPage' => $perPage ?? null, 'order' => $order ?? null, 'direction' => $direction ?? null, 'match' => $match ?? null]);
	}


	/**
	 * Create Zone
	 */
	public function create(\FoundryCo\Cloudflare\Requests\ZonesPostRequest $request): mixed
	{
		return $this->client->post('/zones', \FoundryCo\Cloudflare\Responses\ZonesPost::class, $request);
	}


	/**
	 * Zone Details
	 */
	public function listGet(): mixed
	{
		return $this->client->get('/zones/' . $this->zoneId, \FoundryCo\Cloudflare\Responses\Zones0Get::class, []);
	}


	/**
	 * Edit Zone
	 */
	public function update(\FoundryCo\Cloudflare\Requests\Zones0PatchRequest $request): mixed
	{
		return $this->client->patch('/zones/' . $this->zoneId, \FoundryCo\Cloudflare\Responses\Zones0Patch::class, $request);
	}


	/**
	 * Delete Zone
	 */
	public function delete(): void
	{
		$this->client->delete('/zones/' . $this->zoneId);
	}


	/**
	 * Rerun the Activation Check
	 */
	public function activationCheck(): mixed
	{
		return $this->client->put('/zones/' . $this->zoneId . '/activation_check', \FoundryCo\Cloudflare\Responses\PutZonesZoneIdActivationCheck::class, null);
	}


	/**
	 * Purge Cached Content by Environment
	 */
	public function purgeCache(string $environmentId): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/environments/' . $environmentId . '/purge_cache', \FoundryCo\Cloudflare\Responses\ZoneEnvironmentPurge::class, null);
	}


	/**
	 * Purge Cached Content
	 */
	public function zonePurge(): mixed
	{
		return $this->client->post('/zones/' . $this->zoneId . '/purge_cache', \FoundryCo\Cloudflare\Responses\ZonePurge::class, null);
	}
}
