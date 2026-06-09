<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-09 21:41:47 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare;

class CloudflareClient
{
	private readonly Http\HttpClient $http;


	public function __construct(
		string $apiToken,
		?string $accountId = null,
		string $baseUrl = 'https://api.cloudflare.com/client/v4',
		?Http\HttpClient $http = null,
	) {
		$this->http = $http ?? new \FoundryCo\Cloudflare\Http\HttpClient($apiToken, $baseUrl);
	}


	public function accounts(): Resources\AccountsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountsResource($this->http);
	}


	public function customPages(): Resources\CustomPagesResource
	{
		return new \FoundryCo\Cloudflare\Resources\CustomPagesResource($this->http);
	}


	public function customAssets(): Resources\CustomAssetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CustomAssetsResource($this->http);
	}


	public function tsengAbuseComplaintProcessorOther(): Resources\TsengAbuseComplaintProcessorOtherResource
	{
		return new \FoundryCo\Cloudflare\Resources\TsengAbuseComplaintProcessorOtherResource($this->http);
	}


	public function mcpPortal(): Resources\MCPPortalResource
	{
		return new \FoundryCo\Cloudflare\Resources\MCPPortalResource($this->http);
	}


	public function mcpPortalServers(): Resources\MCPPortalServersResource
	{
		return new \FoundryCo\Cloudflare\Resources\MCPPortalServersResource($this->http);
	}


	public function accessApplications(): Resources\AccessApplicationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessApplicationsResource($this->http);
	}


	public function accessShortLivedCertificateCas(): Resources\AccessShortLivedCertificateCasResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessShortLivedCertificateCasResource($this->http);
	}


	public function accessApplicationScopedPolicies(): Resources\AccessApplicationScopedPoliciesResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessApplicationScopedPoliciesResource($this->http);
	}


	public function accessAuthenticatorDeviceAaguids(): Resources\AccessAuthenticatorDeviceAaguidsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessAuthenticatorDeviceAaguidsResource($this->http);
	}


	public function accessBookmarkApplicationsDeprecated(): Resources\AccessBookmarkApplicationsDeprecatedResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessBookmarkApplicationsDeprecatedResource($this->http);
	}


	public function accessMtlsAuthentication(): Resources\AccessMtlsAuthenticationResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessMtlsAuthenticationResource($this->http);
	}


	public function accessCustomPages(): Resources\AccessCustomPagesResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessCustomPagesResource($this->http);
	}


	public function gatewayCA(): Resources\GatewayCAResource
	{
		return new \FoundryCo\Cloudflare\Resources\GatewayCAResource($this->http);
	}


	public function accessGroups(): Resources\AccessGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessGroupsResource($this->http);
	}


	public function accessIdentityProviders(): Resources\AccessIdentityProvidersResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessIdentityProvidersResource($this->http);
	}


	public function accessIdpFederationGrants(): Resources\AccessIdpFederationGrantsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessIdpFederationGrantsResource($this->http);
	}


	public function accessKeyConfiguration(): Resources\AccessKeyConfigurationResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessKeyConfigurationResource($this->http);
	}


	public function accessAuthenticationLogs(): Resources\AccessAuthenticationLogsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessAuthenticationLogsResource($this->http);
	}


	public function accessSCIMUpdateLogs(): Resources\AccessSCIMUpdateLogsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessSCIMUpdateLogsResource($this->http);
	}


	public function zeroTrustOrganization(): Resources\ZeroTrustOrganizationResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustOrganizationResource($this->http);
	}


	public function accessReusablePolicies(): Resources\AccessReusablePoliciesResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessReusablePoliciesResource($this->http);
	}


	public function accessPolicyTester(): Resources\AccessPolicyTesterResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessPolicyTesterResource($this->http);
	}


	public function accessSAMLEncryptionCertificates(): Resources\AccessSAMLEncryptionCertificatesResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessSAMLEncryptionCertificatesResource($this->http);
	}


	public function zeroTrustSeats(): Resources\ZeroTrustSeatsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustSeatsResource($this->http);
	}


	public function accessServiceTokens(): Resources\AccessServiceTokensResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessServiceTokensResource($this->http);
	}


	public function accessTags(): Resources\AccessTagsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessTagsResource($this->http);
	}


	public function zeroTrustUsers(): Resources\ZeroTrustUsersResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustUsersResource($this->http);
	}


	public function ipAddressManagementAddressMaps(): Resources\IPAddressManagementAddressMapsResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPAddressManagementAddressMapsResource($this->http);
	}


	public function ipAddressManagementLeases(): Resources\IPAddressManagementLeasesResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPAddressManagementLeasesResource($this->http);
	}


	public function ipAddressManagementPrefixes(): Resources\IPAddressManagementPrefixesResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPAddressManagementPrefixesResource($this->http);
	}


	public function ipAddressManagementBGPPrefixes(): Resources\IPAddressManagementBGPPrefixesResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPAddressManagementBGPPrefixesResource($this->http);
	}


	public function ipAddressManagementDynamicAdvertisement(): Resources\IPAddressManagementDynamicAdvertisementResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPAddressManagementDynamicAdvertisementResource($this->http);
	}


	public function ipAddressManagementServiceBindings(): Resources\IPAddressManagementServiceBindingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPAddressManagementServiceBindingsResource($this->http);
	}


	public function ipAddressManagementPrefixDelegation(): Resources\IPAddressManagementPrefixDelegationResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPAddressManagementPrefixDelegationResource($this->http);
	}


	public function dlsRegionalServices(): Resources\DLSRegionalServicesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLSRegionalServicesResource($this->http);
	}


	public function aiGateway(): Resources\AIGatewayResource
	{
		return new \FoundryCo\Cloudflare\Resources\AIGatewayResource($this->http);
	}


	public function aiGatewayAccountProviders(): Resources\AIGatewayAccountProvidersResource
	{
		return new \FoundryCo\Cloudflare\Resources\AIGatewayAccountProvidersResource($this->http);
	}


	public function aiGatewayAccountProviderCosts(): Resources\AIGatewayAccountProviderCostsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AIGatewayAccountProviderCostsResource($this->http);
	}


	public function aiGatewayEvaluations(): Resources\AIGatewayEvaluationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AIGatewayEvaluationsResource($this->http);
	}


	public function aiGatewayGateways(): Resources\AIGatewayGatewaysResource
	{
		return new \FoundryCo\Cloudflare\Resources\AIGatewayGatewaysResource($this->http);
	}


	public function aiGatewayDatasets(): Resources\AIGatewayDatasetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AIGatewayDatasetsResource($this->http);
	}


	public function aiGatewayLogs(): Resources\AIGatewayLogsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AIGatewayLogsResource($this->http);
	}


	public function aiGatewayProviderConfigs(): Resources\AIGatewayProviderConfigsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AIGatewayProviderConfigsResource($this->http);
	}


	public function aiGatewayDynamicRoutes(): Resources\AIGatewayDynamicRoutesResource
	{
		return new \FoundryCo\Cloudflare\Resources\AIGatewayDynamicRoutesResource($this->http);
	}


	public function aiSearchInstances(): Resources\AISearchInstancesResource
	{
		return new \FoundryCo\Cloudflare\Resources\AISearchInstancesResource($this->http);
	}


	public function aiSearchInstancesJobs(): Resources\AISearchInstancesJobsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AISearchInstancesJobsResource($this->http);
	}


	public function aiSearchNamespaces(): Resources\AISearchNamespacesResource
	{
		return new \FoundryCo\Cloudflare\Resources\AISearchNamespacesResource($this->http);
	}


	public function aiSearchAccountSearch(): Resources\AISearchAccountSearchResource
	{
		return new \FoundryCo\Cloudflare\Resources\AISearchAccountSearchResource($this->http);
	}


	public function aiSearchInstancesItems(): Resources\AISearchInstancesItemsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AISearchInstancesItemsResource($this->http);
	}


	public function aiSearchTokens(): Resources\AISearchTokensResource
	{
		return new \FoundryCo\Cloudflare\Resources\AISearchTokensResource($this->http);
	}


	public function workersAI(): Resources\WorkersAIResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAIResource($this->http);
	}


	public function workersAIFinetune(): Resources\WorkersAIFinetuneResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAIFinetuneResource($this->http);
	}


	public function workersAITranslation(): Resources\WorkersAITranslationResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAITranslationResource($this->http);
	}


	public function workersAITextGeneration(): Resources\WorkersAITextGenerationResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAITextGenerationResource($this->http);
	}


	public function workersAITextEmbeddings(): Resources\WorkersAITextEmbeddingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAITextEmbeddingsResource($this->http);
	}


	public function workersAITextClassification(): Resources\WorkersAITextClassificationResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAITextClassificationResource($this->http);
	}


	public function workersAITextToImage(): Resources\WorkersAITextToImageResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAITextToImageResource($this->http);
	}


	public function workersAITextToSpeech(): Resources\WorkersAITextToSpeechResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAITextToSpeechResource($this->http);
	}


	public function workersAIAutomaticSpeechRecognition(): Resources\WorkersAIAutomaticSpeechRecognitionResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAIAutomaticSpeechRecognitionResource($this->http);
	}


	public function workersAISummarization(): Resources\WorkersAISummarizationResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAISummarizationResource($this->http);
	}


	public function workersAIObjectDetection(): Resources\WorkersAIObjectDetectionResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAIObjectDetectionResource($this->http);
	}


	public function workersAIImageClassification(): Resources\WorkersAIImageClassificationResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAIImageClassificationResource($this->http);
	}


	public function workersAIDumbPipe(): Resources\WorkersAIDumbPipeResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAIDumbPipeResource($this->http);
	}


	public function notificationAlertTypes(): Resources\NotificationAlertTypesResource
	{
		return new \FoundryCo\Cloudflare\Resources\NotificationAlertTypesResource($this->http);
	}


	public function notificationMechanismEligibility(): Resources\NotificationMechanismEligibilityResource
	{
		return new \FoundryCo\Cloudflare\Resources\NotificationMechanismEligibilityResource($this->http);
	}


	public function notificationDestinationsWithPagerduty(): Resources\NotificationDestinationsWithPagerdutyResource
	{
		return new \FoundryCo\Cloudflare\Resources\NotificationDestinationsWithPagerdutyResource($this->http);
	}


	public function notificationWebhooks(): Resources\NotificationWebhooksResource
	{
		return new \FoundryCo\Cloudflare\Resources\NotificationWebhooksResource($this->http);
	}


	public function notificationHistory(): Resources\NotificationHistoryResource
	{
		return new \FoundryCo\Cloudflare\Resources\NotificationHistoryResource($this->http);
	}


	public function notificationPolicies(): Resources\NotificationPoliciesResource
	{
		return new \FoundryCo\Cloudflare\Resources\NotificationPoliciesResource($this->http);
	}


	public function notificationSilences(): Resources\NotificationSilencesResource
	{
		return new \FoundryCo\Cloudflare\Resources\NotificationSilencesResource($this->http);
	}


	public function artifacts(): Resources\ArtifactsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ArtifactsResource($this->http);
	}


	public function auditLogs(): Resources\AuditLogsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AuditLogsResource($this->http);
	}


	public function autoragRAGSearch(): Resources\AutoragRAGSearchResource
	{
		return new \FoundryCo\Cloudflare\Resources\AutoragRAGSearchResource($this->http);
	}


	public function autoragRAG(): Resources\AutoragRAGResource
	{
		return new \FoundryCo\Cloudflare\Resources\AutoragRAGResource($this->http);
	}


	public function autoragJobs(): Resources\AutoragJobsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AutoragJobsResource($this->http);
	}


	public function billableUsageV2(): Resources\BillableUsageV2Resource
	{
		return new \FoundryCo\Cloudflare\Resources\BillableUsageV2Resource($this->http);
	}


	public function billingProfile(): Resources\AccountBillingProfileResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountBillingProfileResource($this->http);
	}


	public function botnetThreatFeed(): Resources\BotnetThreatFeedResource
	{
		return new \FoundryCo\Cloudflare\Resources\BotnetThreatFeedResource($this->http);
	}


	public function brandProtection(): Resources\BrandProtectionResource
	{
		return new \FoundryCo\Cloudflare\Resources\BrandProtectionResource($this->http);
	}


	public function logoMatch(): Resources\LogoMatchResource
	{
		return new \FoundryCo\Cloudflare\Resources\LogoMatchResource($this->http);
	}


	public function domainSearch(): Resources\DomainSearchResource
	{
		return new \FoundryCo\Cloudflare\Resources\DomainSearchResource($this->http);
	}


	public function brapi(): Resources\BrapiResource
	{
		return new \FoundryCo\Cloudflare\Resources\BrapiResource($this->http);
	}


	public function account(): Resources\AccountResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountResource($this->http);
	}


	public function builds(): Resources\BuildsResource
	{
		return new \FoundryCo\Cloudflare\Resources\BuildsResource($this->http);
	}


	public function repositoryConnections(): Resources\RepositoryConnectionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RepositoryConnectionsResource($this->http);
	}


	public function githubIntegration(): Resources\GithubIntegrationResource
	{
		return new \FoundryCo\Cloudflare\Resources\GithubIntegrationResource($this->http);
	}


	public function buildTokens(): Resources\BuildTokensResource
	{
		return new \FoundryCo\Cloudflare\Resources\BuildTokensResource($this->http);
	}


	public function triggers(): Resources\TriggersResource
	{
		return new \FoundryCo\Cloudflare\Resources\TriggersResource($this->http);
	}


	public function environmentVariables(): Resources\EnvironmentVariablesResource
	{
		return new \FoundryCo\Cloudflare\Resources\EnvironmentVariablesResource($this->http);
	}


	public function workers(): Resources\WorkersResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersResource($this->http);
	}


	public function deployHooks(): Resources\DeployHooksResource
	{
		return new \FoundryCo\Cloudflare\Resources\DeployHooksResource($this->http);
	}


	public function callsApps(): Resources\CallsAppsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CallsAppsResource($this->http);
	}


	public function callsTURNKeys(): Resources\CallsTURNKeysResource
	{
		return new \FoundryCo\Cloudflare\Resources\CallsTURNKeysResource($this->http);
	}


	public function cloudflareTunnel(): Resources\CloudflareTunnelResource
	{
		return new \FoundryCo\Cloudflare\Resources\CloudflareTunnelResource($this->http);
	}


	public function cloudflareTunnelConfiguration(): Resources\CloudflareTunnelConfigurationResource
	{
		return new \FoundryCo\Cloudflare\Resources\CloudflareTunnelConfigurationResource($this->http);
	}


	public function turnstile(): Resources\TurnstileResource
	{
		return new \FoundryCo\Cloudflare\Resources\TurnstileResource($this->http);
	}


	public function bindb(): Resources\BindbResource
	{
		return new \FoundryCo\Cloudflare\Resources\BindbResource($this->http);
	}


	public function event(): Resources\EventResource
	{
		return new \FoundryCo\Cloudflare\Resources\EventResource($this->http);
	}


	public function attacker(): Resources\AttackerResource
	{
		return new \FoundryCo\Cloudflare\Resources\AttackerResource($this->http);
	}


	public function category(): Resources\CategoryResource
	{
		return new \FoundryCo\Cloudflare\Resources\CategoryResource($this->http);
	}


	public function country(): Resources\CountryResource
	{
		return new \FoundryCo\Cloudflare\Resources\CountryResource($this->http);
	}


	public function dataset(): Resources\DatasetResource
	{
		return new \FoundryCo\Cloudflare\Resources\DatasetResource($this->http);
	}


	public function groups(): Resources\GroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\GroupsResource($this->http);
	}


	public function indicators(): Resources\IndicatorsResource
	{
		return new \FoundryCo\Cloudflare\Resources\IndicatorsResource($this->http);
	}


	public function indicator(): Resources\IndicatorResource
	{
		return new \FoundryCo\Cloudflare\Resources\IndicatorResource($this->http);
	}


	public function permissions(): Resources\PermissionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\PermissionsResource($this->http);
	}


	public function tag(): Resources\TagResource
	{
		return new \FoundryCo\Cloudflare\Resources\TagResource($this->http);
	}


	public function targetIndustry(): Resources\TargetIndustryResource
	{
		return new \FoundryCo\Cloudflare\Resources\TargetIndustryResource($this->http);
	}


	public function datasets(): Resources\DatasetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DatasetsResource($this->http);
	}


	public function indicatorTypes(): Resources\IndicatorTypesResource
	{
		return new \FoundryCo\Cloudflare\Resources\IndicatorTypesResource($this->http);
	}


	public function tagcategory(): Resources\TagcategoryResource
	{
		return new \FoundryCo\Cloudflare\Resources\TagcategoryResource($this->http);
	}


	public function requestForInformationRFI(): Resources\RequestForInformationRFIResource
	{
		return new \FoundryCo\Cloudflare\Resources\RequestForInformationRFIResource($this->http);
	}


	public function priorityIntelligenceRequirementsPIR(): Resources\PriorityIntelligenceRequirementsPIRResource
	{
		return new \FoundryCo\Cloudflare\Resources\PriorityIntelligenceRequirementsPIRResource($this->http);
	}


	public function rules(): Resources\RulesResource
	{
		return new \FoundryCo\Cloudflare\Resources\RulesResource($this->http);
	}


	public function scans(): Resources\ScansResource
	{
		return new \FoundryCo\Cloudflare\Resources\ScansResource($this->http);
	}


	public function collections(): Resources\CollectionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CollectionsResource($this->http);
	}


	public function collectionsItems(): Resources\CollectionsItemsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CollectionsItemsResource($this->http);
	}


	public function cnis(): Resources\CnisResource
	{
		return new \FoundryCo\Cloudflare\Resources\CnisResource($this->http);
	}


	public function interconnects(): Resources\InterconnectsResource
	{
		return new \FoundryCo\Cloudflare\Resources\InterconnectsResource($this->http);
	}


	public function settings(): Resources\SettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\SettingsResource($this->http);
	}


	public function slots(): Resources\SlotsResource
	{
		return new \FoundryCo\Cloudflare\Resources\SlotsResource($this->http);
	}


	public function connectivityServices(): Resources\ConnectivityServicesResource
	{
		return new \FoundryCo\Cloudflare\Resources\ConnectivityServicesResource($this->http);
	}


	public function applications(): Resources\ApplicationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ApplicationsResource($this->http);
	}


	public function deployments(): Resources\DeploymentsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DeploymentsResource($this->http);
	}


	public function imageRegistries(): Resources\ImageRegistriesResource
	{
		return new \FoundryCo\Cloudflare\Resources\ImageRegistriesResource($this->http);
	}


	public function customCsrs(): Resources\CustomCsrsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CustomCsrsResource($this->http);
	}


	public function customNameservers(): Resources\CustomNameserversResource
	{
		return new \FoundryCo\Cloudflare\Resources\CustomNameserversResource($this->http);
	}


	public function d1(): Resources\D1Resource
	{
		return new \FoundryCo\Cloudflare\Resources\D1Resource($this->http);
	}


	public function devices(): Resources\DevicesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DevicesResource($this->http);
	}


	public function clientVersions(): Resources\ClientVersionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ClientVersionsResource($this->http);
	}


	public function deploymentGroups(): Resources\DeploymentGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DeploymentGroupsResource($this->http);
	}


	public function ipProfiles(): Resources\IPProfilesResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPProfilesResource($this->http);
	}


	public function deviceManagedNetworks(): Resources\DeviceManagedNetworksResource
	{
		return new \FoundryCo\Cloudflare\Resources\DeviceManagedNetworksResource($this->http);
	}


	public function physicalDevices(): Resources\PhysicalDevicesResource
	{
		return new \FoundryCo\Cloudflare\Resources\PhysicalDevicesResource($this->http);
	}


	public function devicePostureRules(): Resources\DevicePostureRulesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DevicePostureRulesResource($this->http);
	}


	public function devicePostureIntegrations(): Resources\DevicePostureIntegrationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DevicePostureIntegrationsResource($this->http);
	}


	public function registrations(): Resources\RegistrationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RegistrationsResource($this->http);
	}


	public function warpTeamsDeviceApiOther(): Resources\WarpTeamsDeviceApiOtherResource
	{
		return new \FoundryCo\Cloudflare\Resources\WarpTeamsDeviceApiOtherResource($this->http);
	}


	public function devicesResilience(): Resources\DevicesResilienceResource
	{
		return new \FoundryCo\Cloudflare\Resources\DevicesResilienceResource($this->http);
	}


	public function zeroTrustAccounts(): Resources\ZeroTrustAccountsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustAccountsResource($this->http);
	}


	public function dexSyntheticApplicationMonitoring(): Resources\DEXSyntheticApplicationMonitoringResource
	{
		return new \FoundryCo\Cloudflare\Resources\DEXSyntheticApplicationMonitoringResource($this->http);
	}


	public function dexRemoteCommands(): Resources\DEXRemoteCommandsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DEXRemoteCommandsResource($this->http);
	}


	public function dexRules(): Resources\DEXRulesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DEXRulesResource($this->http);
	}


	public function warpChangeEvents(): Resources\WARPChangeEventsResource
	{
		return new \FoundryCo\Cloudflare\Resources\WARPChangeEventsResource($this->http);
	}


	public function endpointHealthChecks(): Resources\EndpointHealthChecksResource
	{
		return new \FoundryCo\Cloudflare\Resources\EndpointHealthChecksResource($this->http);
	}


	public function diagnostics(): Resources\DiagnosticsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DiagnosticsResource($this->http);
	}


	public function dlpCustomPromptTopics(): Resources\DLPCustomPromptTopicsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPCustomPromptTopicsResource($this->http);
	}


	public function dlpDataClasses(): Resources\DLPDataClassesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPDataClassesResource($this->http);
	}


	public function dlpDataTagCategories(): Resources\DLPDataTagCategoriesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPDataTagCategoriesResource($this->http);
	}


	public function dlpDataTags(): Resources\DLPDataTagsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPDataTagsResource($this->http);
	}


	public function dlpDataTagCategoryTemplates(): Resources\DLPDataTagCategoryTemplatesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPDataTagCategoryTemplatesResource($this->http);
	}


	public function dlpDatasets(): Resources\DLPDatasetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPDatasetsResource($this->http);
	}


	public function dlpDocumentFingerprints(): Resources\DLPDocumentFingerprintsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPDocumentFingerprintsResource($this->http);
	}


	public function dlpEmail(): Resources\DLPEmailResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPEmailResource($this->http);
	}


	public function dlpEntries(): Resources\DLPEntriesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPEntriesResource($this->http);
	}


	public function dlpIntegrationEntries(): Resources\DLPIntegrationEntriesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPIntegrationEntriesResource($this->http);
	}


	public function dlpPredefinedEntries(): Resources\DLPPredefinedEntriesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPPredefinedEntriesResource($this->http);
	}


	public function dlpSettings(): Resources\DLPSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPSettingsResource($this->http);
	}


	public function dlpProfiles(): Resources\DLPProfilesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPProfilesResource($this->http);
	}


	public function dlpSensitivityGroups(): Resources\DLPSensitivityGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPSensitivityGroupsResource($this->http);
	}


	public function dlpSensitivityGroupTemplates(): Resources\DLPSensitivityGroupTemplatesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPSensitivityGroupTemplatesResource($this->http);
	}


	public function dlpSensitivityLevels(): Resources\DLPSensitivityLevelsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPSensitivityLevelsResource($this->http);
	}


	public function prefixBindings(): Resources\PrefixBindingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\PrefixBindingsResource($this->http);
	}


	public function regions(): Resources\RegionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RegionsResource($this->http);
	}


	public function dnsFirewall(): Resources\DNSFirewallResource
	{
		return new \FoundryCo\Cloudflare\Resources\DNSFirewallResource($this->http);
	}


	public function dnsFirewallAnalytics(): Resources\DNSFirewallAnalyticsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DNSFirewallAnalyticsResource($this->http);
	}


	public function dnsRecords(): Resources\DNSRecordsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DNSRecordsResource($this->http);
	}


	public function dnsSettings(): Resources\DNSSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DNSSettingsResource($this->http);
	}


	public function dnsInternalViews(): Resources\DNSInternalViewsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DNSInternalViewsResource($this->http);
	}


	public function emailSecurity(): Resources\EmailSecurityResource
	{
		return new \FoundryCo\Cloudflare\Resources\EmailSecurityResource($this->http);
	}


	public function emailSecuritySettings(): Resources\EmailSecuritySettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\EmailSecuritySettingsResource($this->http);
	}


	public function emailRoutingDestinationAddresses(): Resources\EmailRoutingDestinationAddressesResource
	{
		return new \FoundryCo\Cloudflare\Resources\EmailRoutingDestinationAddressesResource($this->http);
	}


	public function public(): Resources\PublicResource
	{
		return new \FoundryCo\Cloudflare\Resources\PublicResource($this->http);
	}


	public function emailSending(): Resources\EmailSendingResource
	{
		return new \FoundryCo\Cloudflare\Resources\EmailSendingResource($this->http);
	}


	public function r2Bucket(): Resources\R2BucketResource
	{
		return new \FoundryCo\Cloudflare\Resources\R2BucketResource($this->http);
	}


	public function queue(): Resources\QueueResource
	{
		return new \FoundryCo\Cloudflare\Resources\QueueResource($this->http);
	}


	public function ipAccessRules(): Resources\IPAccessRulesResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPAccessRulesResource($this->http);
	}


	public function apps(): Resources\AppsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AppsResource($this->http);
	}


	public function evaluation(): Resources\EvaluationResource
	{
		return new \FoundryCo\Cloudflare\Resources\EvaluationResource($this->http);
	}


	public function flags(): Resources\FlagsResource
	{
		return new \FoundryCo\Cloudflare\Resources\FlagsResource($this->http);
	}


	public function changelog(): Resources\ChangelogResource
	{
		return new \FoundryCo\Cloudflare\Resources\ChangelogResource($this->http);
	}


	public function zeroTrustGatewayApplicationAndApplicationTypeMappings(
	): Resources\ZeroTrustGatewayApplicationAndApplicationTypeMappingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustGatewayApplicationAndApplicationTypeMappingsResource($this->http);
	}


	public function zeroTrustApplicationsReviewStatus(): Resources\ZeroTrustApplicationsReviewStatusResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustApplicationsReviewStatusResource($this->http);
	}


	public function zeroTrustSSHSettings(): Resources\ZeroTrustSSHSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustSSHSettingsResource($this->http);
	}


	public function zeroTrustGatewayCategories(): Resources\ZeroTrustGatewayCategoriesResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustGatewayCategoriesResource($this->http);
	}


	public function zeroTrustCertificates(): Resources\ZeroTrustCertificatesResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustCertificatesResource($this->http);
	}


	public function zeroTrustGatewayDNSDestinationIpv4AddressPairs(
	): Resources\ZeroTrustGatewayDNSDestinationIpv4AddressPairsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustGatewayDNSDestinationIpv4AddressPairsResource($this->http);
	}


	public function zeroTrustLists(): Resources\ZeroTrustListsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustListsResource($this->http);
	}


	public function zeroTrustGatewayLocations(): Resources\ZeroTrustGatewayLocationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustGatewayLocationsResource($this->http);
	}


	public function zeroTrustGatewayOperations(): Resources\ZeroTrustGatewayOperationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustGatewayOperationsResource($this->http);
	}


	public function zeroTrustGatewayPACFiles(): Resources\ZeroTrustGatewayPACFilesResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustGatewayPACFilesResource($this->http);
	}


	public function zeroTrustGatewayProxyEndpoints(): Resources\ZeroTrustGatewayProxyEndpointsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustGatewayProxyEndpointsResource($this->http);
	}


	public function zeroTrustGatewayRules(): Resources\ZeroTrustGatewayRulesResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustGatewayRulesResource($this->http);
	}


	public function hyperdrive(): Resources\HyperdriveResource
	{
		return new \FoundryCo\Cloudflare\Resources\HyperdriveResource($this->http);
	}


	public function permissionGroups(): Resources\AccountPermissionGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountPermissionGroupsResource($this->http);
	}


	public function resourceGroups(): Resources\AccountResourceGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountResourceGroupsResource($this->http);
	}


	public function userGroups(): Resources\AccountUserGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountUserGroupsResource($this->http);
	}


	public function userGroupMembers(): Resources\AccountUserGroupMembersResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountUserGroupMembersResource($this->http);
	}


	public function cloudflareImages(): Resources\CloudflareImagesResource
	{
		return new \FoundryCo\Cloudflare\Resources\CloudflareImagesResource($this->http);
	}


	public function cloudflareImagesKeys(): Resources\CloudflareImagesKeysResource
	{
		return new \FoundryCo\Cloudflare\Resources\CloudflareImagesKeysResource($this->http);
	}


	public function cloudflareImagesVariants(): Resources\CloudflareImagesVariantsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CloudflareImagesVariantsResource($this->http);
	}


	public function infrastructureAccessTargets(): Resources\InfrastructureAccessTargetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\InfrastructureAccessTargetsResource($this->http);
	}


	public function asnIntelligence(): Resources\ASNIntelligenceResource
	{
		return new \FoundryCo\Cloudflare\Resources\ASNIntelligenceResource($this->http);
	}


	public function securityCenterInsights(): Resources\SecurityCenterInsightsResource
	{
		return new \FoundryCo\Cloudflare\Resources\SecurityCenterInsightsResource($this->http);
	}


	public function passiveDNSByIP(): Resources\PassiveDNSByIPResource
	{
		return new \FoundryCo\Cloudflare\Resources\PassiveDNSByIPResource($this->http);
	}


	public function domainIntelligence(): Resources\DomainIntelligenceResource
	{
		return new \FoundryCo\Cloudflare\Resources\DomainIntelligenceResource($this->http);
	}


	public function domainHistory(): Resources\DomainHistoryResource
	{
		return new \FoundryCo\Cloudflare\Resources\DomainHistoryResource($this->http);
	}


	public function customIndicatorFeeds(): Resources\CustomIndicatorFeedsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CustomIndicatorFeedsResource($this->http);
	}


	public function ipIntelligence(): Resources\IPIntelligenceResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPIntelligenceResource($this->http);
	}


	public function ipList(): Resources\IPListResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPListResource($this->http);
	}


	public function miscategorization(): Resources\MiscategorizationResource
	{
		return new \FoundryCo\Cloudflare\Resources\MiscategorizationResource($this->http);
	}


	public function sinkholeConfig(): Resources\SinkholeConfigResource
	{
		return new \FoundryCo\Cloudflare\Resources\SinkholeConfigResource($this->http);
	}


	public function urlIntelligence(): Resources\URLIntelligenceResource
	{
		return new \FoundryCo\Cloudflare\Resources\URLIntelligenceResource($this->http);
	}


	public function whoisRecord(): Resources\WHOISRecordResource
	{
		return new \FoundryCo\Cloudflare\Resources\WHOISRecordResource($this->http);
	}


	public function loadBalancerMonitorGroups(): Resources\AccountLoadBalancerMonitorGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountLoadBalancerMonitorGroupsResource($this->http);
	}


	public function loadBalancerMonitors(): Resources\AccountLoadBalancerMonitorsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountLoadBalancerMonitorsResource($this->http);
	}


	public function loadBalancerPools(): Resources\AccountLoadBalancerPoolsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountLoadBalancerPoolsResource($this->http);
	}


	public function loadBalancerRegions(): Resources\LoadBalancerRegionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\LoadBalancerRegionsResource($this->http);
	}


	public function loadBalancerSearch(): Resources\AccountLoadBalancerSearchResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountLoadBalancerSearchResource($this->http);
	}


	public function logpushJobs(): Resources\LogpushJobsResource
	{
		return new \FoundryCo\Cloudflare\Resources\LogpushJobsResource($this->http);
	}


	public function logcontrolCMBConfig(): Resources\LogcontrolCMBConfigResource
	{
		return new \FoundryCo\Cloudflare\Resources\LogcontrolCMBConfigResource($this->http);
	}


	public function logExplorerDatasets(): Resources\LogExplorerDatasetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\LogExplorerDatasetsResource($this->http);
	}


	public function logExplorerQueries(): Resources\LogExplorerQueriesResource
	{
		return new \FoundryCo\Cloudflare\Resources\LogExplorerQueriesResource($this->http);
	}


	public function dosFlowtrackdApiOther(): Resources\DosFlowtrackdApiOtherResource
	{
		return new \FoundryCo\Cloudflare\Resources\DosFlowtrackdApiOtherResource($this->http);
	}


	public function magicAccountApps(): Resources\MagicAccountAppsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicAccountAppsResource($this->http);
	}


	public function magicCf1Sites(): Resources\MagicCf1SitesResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicCf1SitesResource($this->http);
	}


	public function magicCf1SiteRamps(): Resources\MagicCf1SiteRampsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicCf1SiteRampsResource($this->http);
	}


	public function magicInterconnects(): Resources\MagicInterconnectsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicInterconnectsResource($this->http);
	}


	public function catalogSync(): Resources\CatalogSyncResource
	{
		return new \FoundryCo\Cloudflare\Resources\CatalogSyncResource($this->http);
	}


	public function onRamps(): Resources\OnRampsResource
	{
		return new \FoundryCo\Cloudflare\Resources\OnRampsResource($this->http);
	}


	public function cloudIntegrations(): Resources\CloudIntegrationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CloudIntegrationsResource($this->http);
	}


	public function resources(): Resources\ResourcesResource
	{
		return new \FoundryCo\Cloudflare\Resources\ResourcesResource($this->http);
	}


	public function magicConnectors(): Resources\MagicConnectorsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicConnectorsResource($this->http);
	}


	public function magicGRETunnels(): Resources\MagicGRETunnelsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicGRETunnelsResource($this->http);
	}


	public function magicIpsecTunnels(): Resources\MagicIpsecTunnelsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicIpsecTunnelsResource($this->http);
	}


	public function magicRedundancyGroups(): Resources\MagicRedundancyGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicRedundancyGroupsResource($this->http);
	}


	public function magicStaticRoutes(): Resources\MagicStaticRoutesResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicStaticRoutesResource($this->http);
	}


	public function magicSites(): Resources\MagicSitesResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicSitesResource($this->http);
	}


	public function magicSiteAcls(): Resources\MagicSiteAclsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicSiteAclsResource($this->http);
	}


	public function magicSiteAppConfigs(): Resources\MagicSiteAppConfigsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicSiteAppConfigsResource($this->http);
	}


	public function magicSiteLans(): Resources\MagicSiteLansResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicSiteLansResource($this->http);
	}


	public function magicSiteNetflowConfig(): Resources\MagicSiteNetflowConfigResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicSiteNetflowConfigResource($this->http);
	}


	public function magicSiteWans(): Resources\MagicSiteWansResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicSiteWansResource($this->http);
	}


	public function members(): Resources\AccountMembersResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountMembersResource($this->http);
	}


	public function magicNetworkMonitoringConfiguration(): Resources\MagicNetworkMonitoringConfigurationResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicNetworkMonitoringConfigurationResource($this->http);
	}


	public function magicNetworkMonitoringRules(): Resources\MagicNetworkMonitoringRulesResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicNetworkMonitoringRulesResource($this->http);
	}


	public function magicNetworkMonitoringVPCFlowLogs(): Resources\MagicNetworkMonitoringVPCFlowLogsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicNetworkMonitoringVPCFlowLogsResource($this->http);
	}


	public function moqRelays(): Resources\MoqRelaysResource
	{
		return new \FoundryCo\Cloudflare\Resources\MoqRelaysResource($this->http);
	}


	public function mtlsCertificateManagement(): Resources\MtlsCertificateManagementResource
	{
		return new \FoundryCo\Cloudflare\Resources\MtlsCertificateManagementResource($this->http);
	}


	public function oauthClients(): Resources\OauthClientsResource
	{
		return new \FoundryCo\Cloudflare\Resources\OauthClientsResource($this->http);
	}


	public function pagesProject(): Resources\PagesProjectResource
	{
		return new \FoundryCo\Cloudflare\Resources\PagesProjectResource($this->http);
	}


	public function pagesDeployment(): Resources\PagesDeploymentResource
	{
		return new \FoundryCo\Cloudflare\Resources\PagesDeploymentResource($this->http);
	}


	public function pagesDomains(): Resources\PagesDomainsResource
	{
		return new \FoundryCo\Cloudflare\Resources\PagesDomainsResource($this->http);
	}


	public function pagesBuildCache(): Resources\PagesBuildCacheResource
	{
		return new \FoundryCo\Cloudflare\Resources\PagesBuildCacheResource($this->http);
	}


	public function ppcStripe(): Resources\PpcStripeResource
	{
		return new \FoundryCo\Cloudflare\Resources\PpcStripeResource($this->http);
	}


	public function ppcConfig(): Resources\PpcConfigResource
	{
		return new \FoundryCo\Cloudflare\Resources\PpcConfigResource($this->http);
	}


	public function billable(): Resources\BillableResource
	{
		return new \FoundryCo\Cloudflare\Resources\BillableResource($this->http);
	}


	public function magicPCAPCollection(): Resources\MagicPCAPCollectionResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicPCAPCollectionResource($this->http);
	}


	public function workersPipelinesOther(): Resources\WorkersPipelinesOtherResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersPipelinesOtherResource($this->http);
	}


	public function r2CatalogManagement(): Resources\R2CatalogManagementResource
	{
		return new \FoundryCo\Cloudflare\Resources\R2CatalogManagementResource($this->http);
	}


	public function credentialManagement(): Resources\CredentialManagementResource
	{
		return new \FoundryCo\Cloudflare\Resources\CredentialManagementResource($this->http);
	}


	public function maintenanceConfiguration(): Resources\MaintenanceConfigurationResource
	{
		return new \FoundryCo\Cloudflare\Resources\MaintenanceConfigurationResource($this->http);
	}


	public function namespaceManagement(): Resources\NamespaceManagementResource
	{
		return new \FoundryCo\Cloudflare\Resources\NamespaceManagementResource($this->http);
	}


	public function tableManagement(): Resources\TableManagementResource
	{
		return new \FoundryCo\Cloudflare\Resources\TableManagementResource($this->http);
	}


	public function tableMaintenanceConfiguration(): Resources\TableMaintenanceConfigurationResource
	{
		return new \FoundryCo\Cloudflare\Resources\TableMaintenanceConfigurationResource($this->http);
	}


	public function r2Object(): Resources\R2ObjectResource
	{
		return new \FoundryCo\Cloudflare\Resources\R2ObjectResource($this->http);
	}


	public function r2(): Resources\R2Resource
	{
		return new \FoundryCo\Cloudflare\Resources\R2Resource($this->http);
	}


	public function analytics(): Resources\AnalyticsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AnalyticsResource($this->http);
	}


	public function liveStreams(): Resources\LiveStreamsResource
	{
		return new \FoundryCo\Cloudflare\Resources\LiveStreamsResource($this->http);
	}


	public function meetings(): Resources\MeetingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MeetingsResource($this->http);
	}


	public function activeSession(): Resources\ActiveSessionResource
	{
		return new \FoundryCo\Cloudflare\Resources\ActiveSessionResource($this->http);
	}


	public function presets(): Resources\PresetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\PresetsResource($this->http);
	}


	public function recordings(): Resources\RecordingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RecordingsResource($this->http);
	}


	public function sessions(): Resources\SessionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\SessionsResource($this->http);
	}


	public function webhooks(): Resources\WebhooksResource
	{
		return new \FoundryCo\Cloudflare\Resources\WebhooksResource($this->http);
	}


	public function domainDiscovery(): Resources\DomainDiscoveryResource
	{
		return new \FoundryCo\Cloudflare\Resources\DomainDiscoveryResource($this->http);
	}


	public function registrarDomains(): Resources\RegistrarDomainsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RegistrarDomainsResource($this->http);
	}


	public function registrarRegistration(): Resources\RegistrarRegistrationResource
	{
		return new \FoundryCo\Cloudflare\Resources\RegistrarRegistrationResource($this->http);
	}


	public function requestTracer(): Resources\AccountRequestTracerResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountRequestTracerResource($this->http);
	}


	public function roles(): Resources\AccountRolesResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountRolesResource($this->http);
	}


	public function lists(): Resources\ListsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ListsResource($this->http);
	}


	public function rulesets(): Resources\AccountRulesetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountRulesetsResource($this->http);
	}


	public function webAnalytics(): Resources\WebAnalyticsResource
	{
		return new \FoundryCo\Cloudflare\Resources\WebAnalyticsResource($this->http);
	}


	public function scimGroups(): Resources\SCIMGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\SCIMGroupsResource($this->http);
	}


	public function scimDiscovery(): Resources\SCIMDiscoveryResource
	{
		return new \FoundryCo\Cloudflare\Resources\SCIMDiscoveryResource($this->http);
	}


	public function scimUsers(): Resources\SCIMUsersResource
	{
		return new \FoundryCo\Cloudflare\Resources\SCIMUsersResource($this->http);
	}


	public function secondaryDNSACL(): Resources\SecondaryDNSACLResource
	{
		return new \FoundryCo\Cloudflare\Resources\SecondaryDNSACLResource($this->http);
	}


	public function secondaryDNSPeer(): Resources\SecondaryDNSPeerResource
	{
		return new \FoundryCo\Cloudflare\Resources\SecondaryDNSPeerResource($this->http);
	}


	public function secondaryDNSTSIG(): Resources\SecondaryDNSTSIGResource
	{
		return new \FoundryCo\Cloudflare\Resources\SecondaryDNSTSIGResource($this->http);
	}


	public function secretsStore(): Resources\SecretsStoreResource
	{
		return new \FoundryCo\Cloudflare\Resources\SecretsStoreResource($this->http);
	}


	public function securityCenterAuditLog(): Resources\SecurityCenterAuditLogResource
	{
		return new \FoundryCo\Cloudflare\Resources\SecurityCenterAuditLogResource($this->http);
	}


	public function securityCenterScans(): Resources\SecurityCenterScansResource
	{
		return new \FoundryCo\Cloudflare\Resources\SecurityCenterScansResource($this->http);
	}


	public function resourceSharing(): Resources\ResourceSharingResource
	{
		return new \FoundryCo\Cloudflare\Resources\ResourceSharingResource($this->http);
	}


	public function r2SuperSlurper(): Resources\R2SuperSlurperResource
	{
		return new \FoundryCo\Cloudflare\Resources\R2SuperSlurperResource($this->http);
	}


	public function sso(): Resources\SSOResource
	{
		return new \FoundryCo\Cloudflare\Resources\SSOResource($this->http);
	}


	public function workersKVNamespace(): Resources\WorkersKVNamespaceResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersKVNamespaceResource($this->http);
	}


	public function streamVideos(): Resources\StreamVideosResource
	{
		return new \FoundryCo\Cloudflare\Resources\StreamVideosResource($this->http);
	}


	public function streamVideoClipping(): Resources\StreamVideoClippingResource
	{
		return new \FoundryCo\Cloudflare\Resources\StreamVideoClippingResource($this->http);
	}


	public function streamSigningKeys(): Resources\StreamSigningKeysResource
	{
		return new \FoundryCo\Cloudflare\Resources\StreamSigningKeysResource($this->http);
	}


	public function streamLiveInputs(): Resources\StreamLiveInputsResource
	{
		return new \FoundryCo\Cloudflare\Resources\StreamLiveInputsResource($this->http);
	}


	public function streamWatermarkProfile(): Resources\StreamWatermarkProfileResource
	{
		return new \FoundryCo\Cloudflare\Resources\StreamWatermarkProfileResource($this->http);
	}


	public function streamWebhook(): Resources\StreamWebhookResource
	{
		return new \FoundryCo\Cloudflare\Resources\StreamWebhookResource($this->http);
	}


	public function streamAudioTracks(): Resources\StreamAudioTracksResource
	{
		return new \FoundryCo\Cloudflare\Resources\StreamAudioTracksResource($this->http);
	}


	public function streamSubtitlescaptions(): Resources\StreamSubtitlescaptionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\StreamSubtitlescaptionsResource($this->http);
	}


	public function streamMp4Downloads(): Resources\StreamMp4DownloadsResource
	{
		return new \FoundryCo\Cloudflare\Resources\StreamMp4DownloadsResource($this->http);
	}


	public function subscriptions(): Resources\AccountSubscriptionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountSubscriptionsResource($this->http);
	}


	public function resourceTagging(): Resources\ResourceTaggingResource
	{
		return new \FoundryCo\Cloudflare\Resources\ResourceTaggingResource($this->http);
	}


	public function tunnelRouting(): Resources\TunnelRoutingResource
	{
		return new \FoundryCo\Cloudflare\Resources\TunnelRoutingResource($this->http);
	}


	public function tunnelVirtualNetwork(): Resources\TunnelVirtualNetworkResource
	{
		return new \FoundryCo\Cloudflare\Resources\TunnelVirtualNetworkResource($this->http);
	}


	public function ownedAPITokens(): Resources\AccountOwnedAPITokensResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountOwnedAPITokensResource($this->http);
	}


	public function urlScannerDeprecated(): Resources\URLScannerDeprecatedResource
	{
		return new \FoundryCo\Cloudflare\Resources\URLScannerDeprecatedResource($this->http);
	}


	public function urlScanner(): Resources\URLScannerResource
	{
		return new \FoundryCo\Cloudflare\Resources\URLScannerResource($this->http);
	}


	public function vectorizeBetaDeprecated(): Resources\VectorizeBetaDeprecatedResource
	{
		return new \FoundryCo\Cloudflare\Resources\VectorizeBetaDeprecatedResource($this->http);
	}


	public function vectorize(): Resources\VectorizeResource
	{
		return new \FoundryCo\Cloudflare\Resources\VectorizeResource($this->http);
	}


	public function credentialSets(): Resources\CredentialSetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CredentialSetsResource($this->http);
	}


	public function credentials(): Resources\CredentialsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CredentialsResource($this->http);
	}


	public function targetEnvironments(): Resources\TargetEnvironmentsResource
	{
		return new \FoundryCo\Cloudflare\Resources\TargetEnvironmentsResource($this->http);
	}


	public function waitingRoom(): Resources\WaitingRoomResource
	{
		return new \FoundryCo\Cloudflare\Resources\WaitingRoomResource($this->http);
	}


	public function workerAccountSettings(): Resources\WorkerAccountSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkerAccountSettingsResource($this->http);
	}


	public function workerScript(): Resources\WorkerScriptResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkerScriptResource($this->http);
	}


	public function workersForPlatforms(): Resources\WorkersForPlatformsResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersForPlatformsResource($this->http);
	}


	public function domains(): Resources\DomainsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DomainsResource($this->http);
	}


	public function durableObjectsNamespace(): Resources\DurableObjectsNamespaceResource
	{
		return new \FoundryCo\Cloudflare\Resources\DurableObjectsNamespaceResource($this->http);
	}


	public function destinations(): Resources\DestinationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DestinationsResource($this->http);
	}


	public function savedQueries(): Resources\SavedQueriesResource
	{
		return new \FoundryCo\Cloudflare\Resources\SavedQueriesResource($this->http);
	}


	public function shared(): Resources\SharedResource
	{
		return new \FoundryCo\Cloudflare\Resources\SharedResource($this->http);
	}


	public function keys(): Resources\KeysResource
	{
		return new \FoundryCo\Cloudflare\Resources\KeysResource($this->http);
	}


	public function liveTail(): Resources\LiveTailResource
	{
		return new \FoundryCo\Cloudflare\Resources\LiveTailResource($this->http);
	}


	public function queryRun(): Resources\QueryRunResource
	{
		return new \FoundryCo\Cloudflare\Resources\QueryRunResource($this->http);
	}


	public function values(): Resources\ValuesResource
	{
		return new \FoundryCo\Cloudflare\Resources\ValuesResource($this->http);
	}


	public function usage(): Resources\UsageResource
	{
		return new \FoundryCo\Cloudflare\Resources\UsageResource($this->http);
	}


	public function workerPlacement(): Resources\WorkerPlacementResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkerPlacementResource($this->http);
	}


	public function workerDeployments(): Resources\WorkerDeploymentsResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkerDeploymentsResource($this->http);
	}


	public function workerCronTrigger(): Resources\WorkerCronTriggerResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkerCronTriggerResource($this->http);
	}


	public function workerTailLogs(): Resources\WorkerTailLogsResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkerTailLogsResource($this->http);
	}


	public function workerVersions(): Resources\WorkerVersionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkerVersionsResource($this->http);
	}


	public function workerEnvironment(): Resources\WorkerEnvironmentResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkerEnvironmentResource($this->http);
	}


	public function workerSubdomain(): Resources\WorkerSubdomainResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkerSubdomainResource($this->http);
	}


	public function versions(): Resources\VersionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\VersionsResource($this->http);
	}


	public function workflows(): Resources\WorkflowsResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkflowsResource($this->http);
	}


	public function zeroTrustConnectivitySettings(): Resources\ZeroTrustConnectivitySettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustConnectivitySettingsResource($this->http);
	}


	public function zeroTrustHostnameRoute(): Resources\ZeroTrustHostnameRouteResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustHostnameRouteResource($this->http);
	}


	public function zeroTrustSubnets(): Resources\ZeroTrustSubnetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustSubnetsResource($this->http);
	}


	public function zeroTrustRiskScoring(): Resources\ZeroTrustRiskScoringResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustRiskScoringResource($this->http);
	}


	public function zeroTrustRiskScoringIntegrations(): Resources\ZeroTrustRiskScoringIntegrationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustRiskScoringIntegrationsResource($this->http);
	}


	public function originCA(): Resources\OriginCAResource
	{
		return new \FoundryCo\Cloudflare\Resources\OriginCAResource($this->http);
	}


	public function cloudflareIps(): Resources\CloudflareIpsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CloudflareIpsResource($this->http);
	}


	public function usersAccountMemberships(): Resources\UsersAccountMembershipsResource
	{
		return new \FoundryCo\Cloudflare\Resources\UsersAccountMembershipsResource($this->http);
	}


	public function organizations(): Resources\OrganizationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\OrganizationsResource($this->http);
	}


	public function organizationmembers(): Resources\OrganizationmembersResource
	{
		return new \FoundryCo\Cloudflare\Resources\OrganizationmembersResource($this->http);
	}


	public function radarAgentReadiness(): Resources\RadarAgentReadinessResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarAgentReadinessResource($this->http);
	}


	public function radarAIBots(): Resources\RadarAIBotsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarAIBotsResource($this->http);
	}


	public function radarAIInference(): Resources\RadarAIInferenceResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarAIInferenceResource($this->http);
	}


	public function radarMarkdownForAgents(): Resources\RadarMarkdownForAgentsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarMarkdownForAgentsResource($this->http);
	}


	public function radarAnnotations(): Resources\RadarAnnotationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarAnnotationsResource($this->http);
	}


	public function radarAs112(): Resources\RadarAs112Resource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarAs112Resource($this->http);
	}


	public function radarLayer3Attacks(): Resources\RadarLayer3AttacksResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarLayer3AttacksResource($this->http);
	}


	public function radarLayer7Attacks(): Resources\RadarLayer7AttacksResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarLayer7AttacksResource($this->http);
	}


	public function radarBGP(): Resources\RadarBGPResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarBGPResource($this->http);
	}


	public function radarBots(): Resources\RadarBotsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarBotsResource($this->http);
	}


	public function radarWebCrawlers(): Resources\RadarWebCrawlersResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarWebCrawlersResource($this->http);
	}


	public function radarCertificateTransparency(): Resources\RadarCertificateTransparencyResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarCertificateTransparencyResource($this->http);
	}


	public function radarDatasets(): Resources\RadarDatasetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarDatasetsResource($this->http);
	}


	public function radarDNS(): Resources\RadarDNSResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarDNSResource($this->http);
	}


	public function radarEmailRouting(): Resources\RadarEmailRoutingResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarEmailRoutingResource($this->http);
	}


	public function radarEmailSecurity(): Resources\RadarEmailSecurityResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarEmailSecurityResource($this->http);
	}


	public function radarAutonomousSystems(): Resources\RadarAutonomousSystemsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarAutonomousSystemsResource($this->http);
	}


	public function radarIP(): Resources\RadarIPResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarIPResource($this->http);
	}


	public function radarLocations(): Resources\RadarLocationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarLocationsResource($this->http);
	}


	public function radarGeolocations(): Resources\RadarGeolocationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarGeolocationsResource($this->http);
	}


	public function radarHTTP(): Resources\RadarHTTPResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarHTTPResource($this->http);
	}


	public function radarLeakedCredentialChecks(): Resources\RadarLeakedCredentialChecksResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarLeakedCredentialChecksResource($this->http);
	}


	public function radarNetflows(): Resources\RadarNetflowsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarNetflowsResource($this->http);
	}


	public function radarOrigins(): Resources\RadarOriginsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarOriginsResource($this->http);
	}


	public function radarPostQuantum(): Resources\RadarPostQuantumResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarPostQuantumResource($this->http);
	}


	public function radarQuality(): Resources\RadarQualityResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarQualityResource($this->http);
	}


	public function radarDomainsRanking(): Resources\RadarDomainsRankingResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarDomainsRankingResource($this->http);
	}


	public function radarInternetServicesRanking(): Resources\RadarInternetServicesRankingResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarInternetServicesRankingResource($this->http);
	}


	public function radarRobotstxt(): Resources\RadarRobotstxtResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarRobotstxtResource($this->http);
	}


	public function radarSearch(): Resources\RadarSearchResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarSearchResource($this->http);
	}


	public function radarTCPResetsAndTimeouts(): Resources\RadarTCPResetsAndTimeoutsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarTCPResetsAndTimeoutsResource($this->http);
	}


	public function radarTopLevelDomains(): Resources\RadarTopLevelDomainsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarTopLevelDomainsResource($this->http);
	}


	public function radarTrafficAnomalies(): Resources\RadarTrafficAnomaliesResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarTrafficAnomaliesResource($this->http);
	}


	public function radarVerifiedBots(): Resources\RadarVerifiedBotsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RadarVerifiedBotsResource($this->http);
	}


	public function tenants(): Resources\TenantsResource
	{
		return new \FoundryCo\Cloudflare\Resources\TenantsResource($this->http);
	}


	public function tenantLevelCustomNameservers(): Resources\TenantLevelCustomNameserversResource
	{
		return new \FoundryCo\Cloudflare\Resources\TenantLevelCustomNameserversResource($this->http);
	}


	public function user(): Resources\UserResource
	{
		return new \FoundryCo\Cloudflare\Resources\UserResource($this->http);
	}


	public function userBillingHistory(): Resources\UserBillingHistoryResource
	{
		return new \FoundryCo\Cloudflare\Resources\UserBillingHistoryResource($this->http);
	}


	public function userBillingProfile(): Resources\UserBillingProfileResource
	{
		return new \FoundryCo\Cloudflare\Resources\UserBillingProfileResource($this->http);
	}


	public function ipAccessRulesUser(): Resources\IPAccessRulesUserResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPAccessRulesUserResource($this->http);
	}


	public function usersInvites(): Resources\UsersInvitesResource
	{
		return new \FoundryCo\Cloudflare\Resources\UsersInvitesResource($this->http);
	}


	public function loadBalancerHealthcheckEvents(): Resources\LoadBalancerHealthcheckEventsResource
	{
		return new \FoundryCo\Cloudflare\Resources\LoadBalancerHealthcheckEventsResource($this->http);
	}


	public function usersOrganizations(): Resources\UsersOrganizationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\UsersOrganizationsResource($this->http);
	}


	public function userSubscription(): Resources\UserSubscriptionResource
	{
		return new \FoundryCo\Cloudflare\Resources\UserSubscriptionResource($this->http);
	}


	public function userAPITokens(): Resources\UserAPITokensResource
	{
		return new \FoundryCo\Cloudflare\Resources\UserAPITokensResource($this->http);
	}


	public function zone(?string $zoneId = null): Resources\ZoneResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZoneResource($this->http, $zoneId);
	}


	public function analyticsDeprecated(): Resources\ZoneAnalyticsDeprecatedResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZoneAnalyticsDeprecatedResource($this->http);
	}
}
