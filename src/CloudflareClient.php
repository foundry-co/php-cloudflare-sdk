<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare;

class CloudflareClient
{
	private readonly Http\HttpClient $http;
	private readonly ?string $accountId;


	public function __construct(
		string $apiToken,
		?string $accountId = null,
		string $baseUrl = 'https://api.cloudflare.com/client/v4',
		?Http\HttpClient $http = null,
	) {
		$this->http = $http ?? new \FoundryCo\Cloudflare\Http\HttpClient($apiToken, $baseUrl);
		$this->accountId = $accountId;
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
		return new \FoundryCo\Cloudflare\Resources\TsengAbuseComplaintProcessorOtherResource($this->http, $this->accountId);
	}


	public function mcpPortal(): Resources\MCPPortalResource
	{
		return new \FoundryCo\Cloudflare\Resources\MCPPortalResource($this->http, $this->accountId);
	}


	public function mcpPortalServers(): Resources\MCPPortalServersResource
	{
		return new \FoundryCo\Cloudflare\Resources\MCPPortalServersResource($this->http, $this->accountId);
	}


	public function accessApplications(): Resources\AccessApplicationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessApplicationsResource($this->http, $this->accountId);
	}


	public function accessShortLivedCertificateCas(): Resources\AccessShortLivedCertificateCasResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessShortLivedCertificateCasResource($this->http, $this->accountId);
	}


	public function accessApplicationScopedPolicies(): Resources\AccessApplicationScopedPoliciesResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessApplicationScopedPoliciesResource($this->http, $this->accountId);
	}


	public function accessAuthenticatorDeviceAaguids(): Resources\AccessAuthenticatorDeviceAaguidsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessAuthenticatorDeviceAaguidsResource($this->http, $this->accountId);
	}


	public function accessBookmarkApplicationsDeprecated(): Resources\AccessBookmarkApplicationsDeprecatedResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessBookmarkApplicationsDeprecatedResource($this->http, $this->accountId);
	}


	public function accessMtlsAuthentication(): Resources\AccessMtlsAuthenticationResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessMtlsAuthenticationResource($this->http, $this->accountId);
	}


	public function accessCustomPages(): Resources\AccessCustomPagesResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessCustomPagesResource($this->http, $this->accountId);
	}


	public function gatewayCA(): Resources\GatewayCAResource
	{
		return new \FoundryCo\Cloudflare\Resources\GatewayCAResource($this->http, $this->accountId);
	}


	public function accessGroups(): Resources\AccessGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessGroupsResource($this->http, $this->accountId);
	}


	public function accessIdentityProviders(): Resources\AccessIdentityProvidersResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessIdentityProvidersResource($this->http, $this->accountId);
	}


	public function accessIdpFederationGrants(): Resources\AccessIdpFederationGrantsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessIdpFederationGrantsResource($this->http, $this->accountId);
	}


	public function accessKeyConfiguration(): Resources\AccessKeyConfigurationResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessKeyConfigurationResource($this->http, $this->accountId);
	}


	public function accessAuthenticationLogs(): Resources\AccessAuthenticationLogsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessAuthenticationLogsResource($this->http, $this->accountId);
	}


	public function accessSCIMUpdateLogs(): Resources\AccessSCIMUpdateLogsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessSCIMUpdateLogsResource($this->http, $this->accountId);
	}


	public function zeroTrustOrganization(): Resources\ZeroTrustOrganizationResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustOrganizationResource($this->http, $this->accountId);
	}


	public function accessReusablePolicies(): Resources\AccessReusablePoliciesResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessReusablePoliciesResource($this->http, $this->accountId);
	}


	public function accessPolicyTester(): Resources\AccessPolicyTesterResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessPolicyTesterResource($this->http, $this->accountId);
	}


	public function accessSAMLEncryptionCertificates(): Resources\AccessSAMLEncryptionCertificatesResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessSAMLEncryptionCertificatesResource($this->http, $this->accountId);
	}


	public function zeroTrustSeats(): Resources\ZeroTrustSeatsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustSeatsResource($this->http, $this->accountId);
	}


	public function accessServiceTokens(): Resources\AccessServiceTokensResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessServiceTokensResource($this->http, $this->accountId);
	}


	public function accessTags(): Resources\AccessTagsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccessTagsResource($this->http, $this->accountId);
	}


	public function zeroTrustUsers(): Resources\ZeroTrustUsersResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustUsersResource($this->http, $this->accountId);
	}


	public function ipAddressManagementAddressMaps(): Resources\IPAddressManagementAddressMapsResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPAddressManagementAddressMapsResource($this->http, $this->accountId);
	}


	public function ipAddressManagementLeases(): Resources\IPAddressManagementLeasesResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPAddressManagementLeasesResource($this->http, $this->accountId);
	}


	public function ipAddressManagementPrefixes(): Resources\IPAddressManagementPrefixesResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPAddressManagementPrefixesResource($this->http, $this->accountId);
	}


	public function ipAddressManagementBGPPrefixes(): Resources\IPAddressManagementBGPPrefixesResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPAddressManagementBGPPrefixesResource($this->http, $this->accountId);
	}


	public function ipAddressManagementDynamicAdvertisement(): Resources\IPAddressManagementDynamicAdvertisementResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPAddressManagementDynamicAdvertisementResource($this->http, $this->accountId);
	}


	public function ipAddressManagementServiceBindings(): Resources\IPAddressManagementServiceBindingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPAddressManagementServiceBindingsResource($this->http, $this->accountId);
	}


	public function ipAddressManagementPrefixDelegation(): Resources\IPAddressManagementPrefixDelegationResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPAddressManagementPrefixDelegationResource($this->http, $this->accountId);
	}


	public function dlsRegionalServices(): Resources\DLSRegionalServicesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLSRegionalServicesResource($this->http);
	}


	public function aiGateway(): Resources\AIGatewayResource
	{
		return new \FoundryCo\Cloudflare\Resources\AIGatewayResource($this->http, $this->accountId);
	}


	public function aiGatewayAccountProviders(): Resources\AIGatewayAccountProvidersResource
	{
		return new \FoundryCo\Cloudflare\Resources\AIGatewayAccountProvidersResource($this->http, $this->accountId);
	}


	public function aiGatewayAccountProviderCosts(): Resources\AIGatewayAccountProviderCostsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AIGatewayAccountProviderCostsResource($this->http, $this->accountId);
	}


	public function aiGatewayEvaluations(): Resources\AIGatewayEvaluationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AIGatewayEvaluationsResource($this->http, $this->accountId);
	}


	public function aiGatewayGateways(): Resources\AIGatewayGatewaysResource
	{
		return new \FoundryCo\Cloudflare\Resources\AIGatewayGatewaysResource($this->http, $this->accountId);
	}


	public function aiGatewayDatasets(): Resources\AIGatewayDatasetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AIGatewayDatasetsResource($this->http, $this->accountId);
	}


	public function aiGatewayLogs(): Resources\AIGatewayLogsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AIGatewayLogsResource($this->http, $this->accountId);
	}


	public function aiGatewayProviderConfigs(): Resources\AIGatewayProviderConfigsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AIGatewayProviderConfigsResource($this->http, $this->accountId);
	}


	public function aiGatewayDynamicRoutes(): Resources\AIGatewayDynamicRoutesResource
	{
		return new \FoundryCo\Cloudflare\Resources\AIGatewayDynamicRoutesResource($this->http, $this->accountId);
	}


	public function aiSearchInstances(): Resources\AISearchInstancesResource
	{
		return new \FoundryCo\Cloudflare\Resources\AISearchInstancesResource($this->http, $this->accountId);
	}


	public function aiSearchInstancesJobs(): Resources\AISearchInstancesJobsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AISearchInstancesJobsResource($this->http, $this->accountId);
	}


	public function aiSearchNamespaces(): Resources\AISearchNamespacesResource
	{
		return new \FoundryCo\Cloudflare\Resources\AISearchNamespacesResource($this->http, $this->accountId);
	}


	public function aiSearchAccountSearch(): Resources\AISearchAccountSearchResource
	{
		return new \FoundryCo\Cloudflare\Resources\AISearchAccountSearchResource($this->http, $this->accountId);
	}


	public function aiSearchInstancesItems(): Resources\AISearchInstancesItemsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AISearchInstancesItemsResource($this->http, $this->accountId);
	}


	public function aiSearchTokens(): Resources\AISearchTokensResource
	{
		return new \FoundryCo\Cloudflare\Resources\AISearchTokensResource($this->http, $this->accountId);
	}


	public function workersAI(): Resources\WorkersAIResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAIResource($this->http, $this->accountId);
	}


	public function workersAIFinetune(): Resources\WorkersAIFinetuneResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAIFinetuneResource($this->http, $this->accountId);
	}


	public function workersAITranslation(): Resources\WorkersAITranslationResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAITranslationResource($this->http, $this->accountId);
	}


	public function workersAITextGeneration(): Resources\WorkersAITextGenerationResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAITextGenerationResource($this->http, $this->accountId);
	}


	public function workersAITextEmbeddings(): Resources\WorkersAITextEmbeddingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAITextEmbeddingsResource($this->http, $this->accountId);
	}


	public function workersAITextClassification(): Resources\WorkersAITextClassificationResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAITextClassificationResource($this->http, $this->accountId);
	}


	public function workersAITextToImage(): Resources\WorkersAITextToImageResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAITextToImageResource($this->http, $this->accountId);
	}


	public function workersAITextToSpeech(): Resources\WorkersAITextToSpeechResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAITextToSpeechResource($this->http, $this->accountId);
	}


	public function workersAIAutomaticSpeechRecognition(): Resources\WorkersAIAutomaticSpeechRecognitionResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAIAutomaticSpeechRecognitionResource($this->http, $this->accountId);
	}


	public function workersAISummarization(): Resources\WorkersAISummarizationResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAISummarizationResource($this->http, $this->accountId);
	}


	public function workersAIObjectDetection(): Resources\WorkersAIObjectDetectionResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAIObjectDetectionResource($this->http, $this->accountId);
	}


	public function workersAIImageClassification(): Resources\WorkersAIImageClassificationResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAIImageClassificationResource($this->http, $this->accountId);
	}


	public function workersAIDumbPipe(): Resources\WorkersAIDumbPipeResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersAIDumbPipeResource($this->http, $this->accountId);
	}


	public function notificationAlertTypes(): Resources\NotificationAlertTypesResource
	{
		return new \FoundryCo\Cloudflare\Resources\NotificationAlertTypesResource($this->http, $this->accountId);
	}


	public function notificationMechanismEligibility(): Resources\NotificationMechanismEligibilityResource
	{
		return new \FoundryCo\Cloudflare\Resources\NotificationMechanismEligibilityResource($this->http, $this->accountId);
	}


	public function notificationDestinationsWithPagerduty(): Resources\NotificationDestinationsWithPagerdutyResource
	{
		return new \FoundryCo\Cloudflare\Resources\NotificationDestinationsWithPagerdutyResource($this->http, $this->accountId);
	}


	public function notificationWebhooks(): Resources\NotificationWebhooksResource
	{
		return new \FoundryCo\Cloudflare\Resources\NotificationWebhooksResource($this->http, $this->accountId);
	}


	public function notificationHistory(): Resources\NotificationHistoryResource
	{
		return new \FoundryCo\Cloudflare\Resources\NotificationHistoryResource($this->http, $this->accountId);
	}


	public function notificationPolicies(): Resources\NotificationPoliciesResource
	{
		return new \FoundryCo\Cloudflare\Resources\NotificationPoliciesResource($this->http, $this->accountId);
	}


	public function notificationSilences(): Resources\NotificationSilencesResource
	{
		return new \FoundryCo\Cloudflare\Resources\NotificationSilencesResource($this->http, $this->accountId);
	}


	public function artifacts(): Resources\ArtifactsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ArtifactsResource($this->http, $this->accountId);
	}


	public function auditLogs(): Resources\AuditLogsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AuditLogsResource($this->http);
	}


	public function autoragRAGSearch(): Resources\AutoragRAGSearchResource
	{
		return new \FoundryCo\Cloudflare\Resources\AutoragRAGSearchResource($this->http, $this->accountId);
	}


	public function autoragRAG(): Resources\AutoragRAGResource
	{
		return new \FoundryCo\Cloudflare\Resources\AutoragRAGResource($this->http, $this->accountId);
	}


	public function autoragJobs(): Resources\AutoragJobsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AutoragJobsResource($this->http, $this->accountId);
	}


	public function billableUsageV2(): Resources\BillableUsageV2Resource
	{
		return new \FoundryCo\Cloudflare\Resources\BillableUsageV2Resource($this->http);
	}


	public function billingProfile(): Resources\AccountBillingProfileResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountBillingProfileResource($this->http, $this->accountId);
	}


	public function botnetThreatFeed(): Resources\BotnetThreatFeedResource
	{
		return new \FoundryCo\Cloudflare\Resources\BotnetThreatFeedResource($this->http, $this->accountId);
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
		return new \FoundryCo\Cloudflare\Resources\DomainSearchResource($this->http, $this->accountId);
	}


	public function brapi(): Resources\BrapiResource
	{
		return new \FoundryCo\Cloudflare\Resources\BrapiResource($this->http, $this->accountId);
	}


	public function account(): Resources\AccountResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountResource($this->http, $this->accountId);
	}


	public function builds(): Resources\BuildsResource
	{
		return new \FoundryCo\Cloudflare\Resources\BuildsResource($this->http, $this->accountId);
	}


	public function repositoryConnections(): Resources\RepositoryConnectionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RepositoryConnectionsResource($this->http, $this->accountId);
	}


	public function githubIntegration(): Resources\GithubIntegrationResource
	{
		return new \FoundryCo\Cloudflare\Resources\GithubIntegrationResource($this->http, $this->accountId);
	}


	public function buildTokens(): Resources\BuildTokensResource
	{
		return new \FoundryCo\Cloudflare\Resources\BuildTokensResource($this->http, $this->accountId);
	}


	public function triggers(): Resources\TriggersResource
	{
		return new \FoundryCo\Cloudflare\Resources\TriggersResource($this->http, $this->accountId);
	}


	public function environmentVariables(): Resources\EnvironmentVariablesResource
	{
		return new \FoundryCo\Cloudflare\Resources\EnvironmentVariablesResource($this->http, $this->accountId);
	}


	public function workers(): Resources\WorkersResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersResource($this->http, $this->accountId);
	}


	public function deployHooks(): Resources\DeployHooksResource
	{
		return new \FoundryCo\Cloudflare\Resources\DeployHooksResource($this->http);
	}


	public function callsApps(): Resources\CallsAppsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CallsAppsResource($this->http, $this->accountId);
	}


	public function callsTURNKeys(): Resources\CallsTURNKeysResource
	{
		return new \FoundryCo\Cloudflare\Resources\CallsTURNKeysResource($this->http, $this->accountId);
	}


	public function cloudflareTunnel(): Resources\CloudflareTunnelResource
	{
		return new \FoundryCo\Cloudflare\Resources\CloudflareTunnelResource($this->http, $this->accountId);
	}


	public function cloudflareTunnelConfiguration(): Resources\CloudflareTunnelConfigurationResource
	{
		return new \FoundryCo\Cloudflare\Resources\CloudflareTunnelConfigurationResource($this->http, $this->accountId);
	}


	public function turnstile(): Resources\TurnstileResource
	{
		return new \FoundryCo\Cloudflare\Resources\TurnstileResource($this->http, $this->accountId);
	}


	public function bindb(): Resources\BindbResource
	{
		return new \FoundryCo\Cloudflare\Resources\BindbResource($this->http, $this->accountId);
	}


	public function event(): Resources\EventResource
	{
		return new \FoundryCo\Cloudflare\Resources\EventResource($this->http, $this->accountId);
	}


	public function attacker(): Resources\AttackerResource
	{
		return new \FoundryCo\Cloudflare\Resources\AttackerResource($this->http, $this->accountId);
	}


	public function category(): Resources\CategoryResource
	{
		return new \FoundryCo\Cloudflare\Resources\CategoryResource($this->http, $this->accountId);
	}


	public function country(): Resources\CountryResource
	{
		return new \FoundryCo\Cloudflare\Resources\CountryResource($this->http, $this->accountId);
	}


	public function dataset(): Resources\DatasetResource
	{
		return new \FoundryCo\Cloudflare\Resources\DatasetResource($this->http, $this->accountId);
	}


	public function groups(): Resources\GroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\GroupsResource($this->http, $this->accountId);
	}


	public function indicators(): Resources\IndicatorsResource
	{
		return new \FoundryCo\Cloudflare\Resources\IndicatorsResource($this->http, $this->accountId);
	}


	public function indicator(): Resources\IndicatorResource
	{
		return new \FoundryCo\Cloudflare\Resources\IndicatorResource($this->http, $this->accountId);
	}


	public function permissions(): Resources\PermissionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\PermissionsResource($this->http, $this->accountId);
	}


	public function tag(): Resources\TagResource
	{
		return new \FoundryCo\Cloudflare\Resources\TagResource($this->http, $this->accountId);
	}


	public function targetIndustry(): Resources\TargetIndustryResource
	{
		return new \FoundryCo\Cloudflare\Resources\TargetIndustryResource($this->http, $this->accountId);
	}


	public function datasets(): Resources\DatasetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DatasetsResource($this->http, $this->accountId);
	}


	public function indicatorTypes(): Resources\IndicatorTypesResource
	{
		return new \FoundryCo\Cloudflare\Resources\IndicatorTypesResource($this->http, $this->accountId);
	}


	public function tagcategory(): Resources\TagcategoryResource
	{
		return new \FoundryCo\Cloudflare\Resources\TagcategoryResource($this->http, $this->accountId);
	}


	public function requestForInformationRFI(): Resources\RequestForInformationRFIResource
	{
		return new \FoundryCo\Cloudflare\Resources\RequestForInformationRFIResource($this->http, $this->accountId);
	}


	public function priorityIntelligenceRequirementsPIR(): Resources\PriorityIntelligenceRequirementsPIRResource
	{
		return new \FoundryCo\Cloudflare\Resources\PriorityIntelligenceRequirementsPIRResource($this->http, $this->accountId);
	}


	public function rules(): Resources\RulesResource
	{
		return new \FoundryCo\Cloudflare\Resources\RulesResource($this->http, $this->accountId);
	}


	public function scans(): Resources\ScansResource
	{
		return new \FoundryCo\Cloudflare\Resources\ScansResource($this->http, $this->accountId);
	}


	public function collections(): Resources\CollectionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CollectionsResource($this->http, $this->accountId);
	}


	public function collectionsItems(): Resources\CollectionsItemsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CollectionsItemsResource($this->http, $this->accountId);
	}


	public function cnis(): Resources\CnisResource
	{
		return new \FoundryCo\Cloudflare\Resources\CnisResource($this->http, $this->accountId);
	}


	public function interconnects(): Resources\InterconnectsResource
	{
		return new \FoundryCo\Cloudflare\Resources\InterconnectsResource($this->http, $this->accountId);
	}


	public function settings(): Resources\SettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\SettingsResource($this->http, $this->accountId);
	}


	public function slots(): Resources\SlotsResource
	{
		return new \FoundryCo\Cloudflare\Resources\SlotsResource($this->http, $this->accountId);
	}


	public function connectivityServices(): Resources\ConnectivityServicesResource
	{
		return new \FoundryCo\Cloudflare\Resources\ConnectivityServicesResource($this->http, $this->accountId);
	}


	public function applications(): Resources\ApplicationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ApplicationsResource($this->http, $this->accountId);
	}


	public function deployments(): Resources\DeploymentsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DeploymentsResource($this->http, $this->accountId);
	}


	public function imageRegistries(): Resources\ImageRegistriesResource
	{
		return new \FoundryCo\Cloudflare\Resources\ImageRegistriesResource($this->http, $this->accountId);
	}


	public function customCsrs(): Resources\CustomCsrsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CustomCsrsResource($this->http, $this->accountId);
	}


	public function customNameservers(): Resources\CustomNameserversResource
	{
		return new \FoundryCo\Cloudflare\Resources\CustomNameserversResource($this->http, $this->accountId);
	}


	public function d1(): Resources\D1Resource
	{
		return new \FoundryCo\Cloudflare\Resources\D1Resource($this->http, $this->accountId);
	}


	public function devices(): Resources\DevicesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DevicesResource($this->http);
	}


	public function clientVersions(): Resources\ClientVersionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ClientVersionsResource($this->http, $this->accountId);
	}


	public function deploymentGroups(): Resources\DeploymentGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DeploymentGroupsResource($this->http, $this->accountId);
	}


	public function ipProfiles(): Resources\IPProfilesResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPProfilesResource($this->http, $this->accountId);
	}


	public function deviceManagedNetworks(): Resources\DeviceManagedNetworksResource
	{
		return new \FoundryCo\Cloudflare\Resources\DeviceManagedNetworksResource($this->http, $this->accountId);
	}


	public function physicalDevices(): Resources\PhysicalDevicesResource
	{
		return new \FoundryCo\Cloudflare\Resources\PhysicalDevicesResource($this->http, $this->accountId);
	}


	public function devicePostureRules(): Resources\DevicePostureRulesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DevicePostureRulesResource($this->http, $this->accountId);
	}


	public function devicePostureIntegrations(): Resources\DevicePostureIntegrationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DevicePostureIntegrationsResource($this->http, $this->accountId);
	}


	public function registrations(): Resources\RegistrationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RegistrationsResource($this->http, $this->accountId);
	}


	public function warpTeamsDeviceApiOther(): Resources\WarpTeamsDeviceApiOtherResource
	{
		return new \FoundryCo\Cloudflare\Resources\WarpTeamsDeviceApiOtherResource($this->http, $this->accountId);
	}


	public function devicesResilience(): Resources\DevicesResilienceResource
	{
		return new \FoundryCo\Cloudflare\Resources\DevicesResilienceResource($this->http, $this->accountId);
	}


	public function zeroTrustAccounts(): Resources\ZeroTrustAccountsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustAccountsResource($this->http, $this->accountId);
	}


	public function dexSyntheticApplicationMonitoring(): Resources\DEXSyntheticApplicationMonitoringResource
	{
		return new \FoundryCo\Cloudflare\Resources\DEXSyntheticApplicationMonitoringResource($this->http, $this->accountId);
	}


	public function dexRemoteCommands(): Resources\DEXRemoteCommandsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DEXRemoteCommandsResource($this->http, $this->accountId);
	}


	public function dexRules(): Resources\DEXRulesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DEXRulesResource($this->http, $this->accountId);
	}


	public function warpChangeEvents(): Resources\WARPChangeEventsResource
	{
		return new \FoundryCo\Cloudflare\Resources\WARPChangeEventsResource($this->http, $this->accountId);
	}


	public function endpointHealthChecks(): Resources\EndpointHealthChecksResource
	{
		return new \FoundryCo\Cloudflare\Resources\EndpointHealthChecksResource($this->http, $this->accountId);
	}


	public function diagnostics(): Resources\DiagnosticsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DiagnosticsResource($this->http, $this->accountId);
	}


	public function dlpCustomPromptTopics(): Resources\DLPCustomPromptTopicsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPCustomPromptTopicsResource($this->http, $this->accountId);
	}


	public function dlpDataClasses(): Resources\DLPDataClassesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPDataClassesResource($this->http, $this->accountId);
	}


	public function dlpDataTagCategories(): Resources\DLPDataTagCategoriesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPDataTagCategoriesResource($this->http, $this->accountId);
	}


	public function dlpDataTags(): Resources\DLPDataTagsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPDataTagsResource($this->http, $this->accountId);
	}


	public function dlpDataTagCategoryTemplates(): Resources\DLPDataTagCategoryTemplatesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPDataTagCategoryTemplatesResource($this->http, $this->accountId);
	}


	public function dlpDatasets(): Resources\DLPDatasetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPDatasetsResource($this->http, $this->accountId);
	}


	public function dlpDocumentFingerprints(): Resources\DLPDocumentFingerprintsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPDocumentFingerprintsResource($this->http, $this->accountId);
	}


	public function dlpEmail(): Resources\DLPEmailResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPEmailResource($this->http, $this->accountId);
	}


	public function dlpEntries(): Resources\DLPEntriesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPEntriesResource($this->http, $this->accountId);
	}


	public function dlpIntegrationEntries(): Resources\DLPIntegrationEntriesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPIntegrationEntriesResource($this->http, $this->accountId);
	}


	public function dlpPredefinedEntries(): Resources\DLPPredefinedEntriesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPPredefinedEntriesResource($this->http, $this->accountId);
	}


	public function dlpSettings(): Resources\DLPSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPSettingsResource($this->http, $this->accountId);
	}


	public function dlpProfiles(): Resources\DLPProfilesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPProfilesResource($this->http, $this->accountId);
	}


	public function dlpSensitivityGroups(): Resources\DLPSensitivityGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPSensitivityGroupsResource($this->http, $this->accountId);
	}


	public function dlpSensitivityGroupTemplates(): Resources\DLPSensitivityGroupTemplatesResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPSensitivityGroupTemplatesResource($this->http, $this->accountId);
	}


	public function dlpSensitivityLevels(): Resources\DLPSensitivityLevelsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DLPSensitivityLevelsResource($this->http, $this->accountId);
	}


	public function prefixBindings(): Resources\PrefixBindingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\PrefixBindingsResource($this->http, $this->accountId);
	}


	public function regions(): Resources\RegionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RegionsResource($this->http, $this->accountId);
	}


	public function dnsFirewall(): Resources\DNSFirewallResource
	{
		return new \FoundryCo\Cloudflare\Resources\DNSFirewallResource($this->http, $this->accountId);
	}


	public function dnsFirewallAnalytics(): Resources\DNSFirewallAnalyticsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DNSFirewallAnalyticsResource($this->http, $this->accountId);
	}


	public function dnsRecords(): Resources\DNSRecordsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DNSRecordsResource($this->http, $this->accountId);
	}


	public function dnsSettings(): Resources\DNSSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DNSSettingsResource($this->http, $this->accountId);
	}


	public function dnsInternalViews(): Resources\DNSInternalViewsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DNSInternalViewsResource($this->http, $this->accountId);
	}


	public function emailSecurity(): Resources\EmailSecurityResource
	{
		return new \FoundryCo\Cloudflare\Resources\EmailSecurityResource($this->http, $this->accountId);
	}


	public function emailSecuritySettings(): Resources\EmailSecuritySettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\EmailSecuritySettingsResource($this->http, $this->accountId);
	}


	public function emailRoutingDestinationAddresses(): Resources\EmailRoutingDestinationAddressesResource
	{
		return new \FoundryCo\Cloudflare\Resources\EmailRoutingDestinationAddressesResource($this->http, $this->accountId);
	}


	public function public(): Resources\PublicResource
	{
		return new \FoundryCo\Cloudflare\Resources\PublicResource($this->http);
	}


	public function emailSending(): Resources\EmailSendingResource
	{
		return new \FoundryCo\Cloudflare\Resources\EmailSendingResource($this->http, $this->accountId);
	}


	public function r2Bucket(): Resources\R2BucketResource
	{
		return new \FoundryCo\Cloudflare\Resources\R2BucketResource($this->http, $this->accountId);
	}


	public function queue(): Resources\QueueResource
	{
		return new \FoundryCo\Cloudflare\Resources\QueueResource($this->http, $this->accountId);
	}


	public function ipAccessRules(): Resources\IPAccessRulesResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPAccessRulesResource($this->http, $this->accountId);
	}


	public function apps(): Resources\AppsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AppsResource($this->http, $this->accountId);
	}


	public function evaluation(): Resources\EvaluationResource
	{
		return new \FoundryCo\Cloudflare\Resources\EvaluationResource($this->http, $this->accountId);
	}


	public function flags(): Resources\FlagsResource
	{
		return new \FoundryCo\Cloudflare\Resources\FlagsResource($this->http, $this->accountId);
	}


	public function changelog(): Resources\ChangelogResource
	{
		return new \FoundryCo\Cloudflare\Resources\ChangelogResource($this->http, $this->accountId);
	}


	public function zeroTrustGatewayApplicationAndApplicationTypeMappings(
	): Resources\ZeroTrustGatewayApplicationAndApplicationTypeMappingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustGatewayApplicationAndApplicationTypeMappingsResource($this->http, $this->accountId);
	}


	public function zeroTrustApplicationsReviewStatus(): Resources\ZeroTrustApplicationsReviewStatusResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustApplicationsReviewStatusResource($this->http, $this->accountId);
	}


	public function zeroTrustSSHSettings(): Resources\ZeroTrustSSHSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustSSHSettingsResource($this->http, $this->accountId);
	}


	public function zeroTrustGatewayCategories(): Resources\ZeroTrustGatewayCategoriesResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustGatewayCategoriesResource($this->http, $this->accountId);
	}


	public function zeroTrustCertificates(): Resources\ZeroTrustCertificatesResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustCertificatesResource($this->http, $this->accountId);
	}


	public function zeroTrustGatewayDNSDestinationIpv4AddressPairs(
	): Resources\ZeroTrustGatewayDNSDestinationIpv4AddressPairsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustGatewayDNSDestinationIpv4AddressPairsResource($this->http, $this->accountId);
	}


	public function zeroTrustLists(): Resources\ZeroTrustListsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustListsResource($this->http, $this->accountId);
	}


	public function zeroTrustGatewayLocations(): Resources\ZeroTrustGatewayLocationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustGatewayLocationsResource($this->http, $this->accountId);
	}


	public function zeroTrustGatewayOperations(): Resources\ZeroTrustGatewayOperationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustGatewayOperationsResource($this->http, $this->accountId);
	}


	public function zeroTrustGatewayPACFiles(): Resources\ZeroTrustGatewayPACFilesResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustGatewayPACFilesResource($this->http, $this->accountId);
	}


	public function zeroTrustGatewayProxyEndpoints(): Resources\ZeroTrustGatewayProxyEndpointsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustGatewayProxyEndpointsResource($this->http, $this->accountId);
	}


	public function zeroTrustGatewayRules(): Resources\ZeroTrustGatewayRulesResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustGatewayRulesResource($this->http, $this->accountId);
	}


	public function hyperdrive(): Resources\HyperdriveResource
	{
		return new \FoundryCo\Cloudflare\Resources\HyperdriveResource($this->http, $this->accountId);
	}


	public function permissionGroups(): Resources\AccountPermissionGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountPermissionGroupsResource($this->http, $this->accountId);
	}


	public function resourceGroups(): Resources\AccountResourceGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountResourceGroupsResource($this->http, $this->accountId);
	}


	public function userGroups(): Resources\AccountUserGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountUserGroupsResource($this->http, $this->accountId);
	}


	public function userGroupMembers(): Resources\AccountUserGroupMembersResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountUserGroupMembersResource($this->http, $this->accountId);
	}


	public function cloudflareImages(): Resources\CloudflareImagesResource
	{
		return new \FoundryCo\Cloudflare\Resources\CloudflareImagesResource($this->http, $this->accountId);
	}


	public function cloudflareImagesKeys(): Resources\CloudflareImagesKeysResource
	{
		return new \FoundryCo\Cloudflare\Resources\CloudflareImagesKeysResource($this->http, $this->accountId);
	}


	public function cloudflareImagesVariants(): Resources\CloudflareImagesVariantsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CloudflareImagesVariantsResource($this->http, $this->accountId);
	}


	public function infrastructureAccessTargets(): Resources\InfrastructureAccessTargetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\InfrastructureAccessTargetsResource($this->http, $this->accountId);
	}


	public function asnIntelligence(): Resources\ASNIntelligenceResource
	{
		return new \FoundryCo\Cloudflare\Resources\ASNIntelligenceResource($this->http, $this->accountId);
	}


	public function securityCenterInsights(): Resources\SecurityCenterInsightsResource
	{
		return new \FoundryCo\Cloudflare\Resources\SecurityCenterInsightsResource($this->http);
	}


	public function passiveDNSByIP(): Resources\PassiveDNSByIPResource
	{
		return new \FoundryCo\Cloudflare\Resources\PassiveDNSByIPResource($this->http, $this->accountId);
	}


	public function domainIntelligence(): Resources\DomainIntelligenceResource
	{
		return new \FoundryCo\Cloudflare\Resources\DomainIntelligenceResource($this->http, $this->accountId);
	}


	public function domainHistory(): Resources\DomainHistoryResource
	{
		return new \FoundryCo\Cloudflare\Resources\DomainHistoryResource($this->http, $this->accountId);
	}


	public function customIndicatorFeeds(): Resources\CustomIndicatorFeedsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CustomIndicatorFeedsResource($this->http, $this->accountId);
	}


	public function ipIntelligence(): Resources\IPIntelligenceResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPIntelligenceResource($this->http, $this->accountId);
	}


	public function ipList(): Resources\IPListResource
	{
		return new \FoundryCo\Cloudflare\Resources\IPListResource($this->http, $this->accountId);
	}


	public function miscategorization(): Resources\MiscategorizationResource
	{
		return new \FoundryCo\Cloudflare\Resources\MiscategorizationResource($this->http, $this->accountId);
	}


	public function sinkholeConfig(): Resources\SinkholeConfigResource
	{
		return new \FoundryCo\Cloudflare\Resources\SinkholeConfigResource($this->http);
	}


	public function urlIntelligence(): Resources\URLIntelligenceResource
	{
		return new \FoundryCo\Cloudflare\Resources\URLIntelligenceResource($this->http, $this->accountId);
	}


	public function whoisRecord(): Resources\WHOISRecordResource
	{
		return new \FoundryCo\Cloudflare\Resources\WHOISRecordResource($this->http, $this->accountId);
	}


	public function loadBalancerMonitorGroups(): Resources\AccountLoadBalancerMonitorGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountLoadBalancerMonitorGroupsResource($this->http, $this->accountId);
	}


	public function loadBalancerMonitors(): Resources\AccountLoadBalancerMonitorsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountLoadBalancerMonitorsResource($this->http, $this->accountId);
	}


	public function loadBalancerPools(): Resources\AccountLoadBalancerPoolsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountLoadBalancerPoolsResource($this->http, $this->accountId);
	}


	public function loadBalancerRegions(): Resources\LoadBalancerRegionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\LoadBalancerRegionsResource($this->http, $this->accountId);
	}


	public function loadBalancerSearch(): Resources\AccountLoadBalancerSearchResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountLoadBalancerSearchResource($this->http, $this->accountId);
	}


	public function logpushJobs(): Resources\LogpushJobsResource
	{
		return new \FoundryCo\Cloudflare\Resources\LogpushJobsResource($this->http, $this->accountId);
	}


	public function logcontrolCMBConfig(): Resources\LogcontrolCMBConfigResource
	{
		return new \FoundryCo\Cloudflare\Resources\LogcontrolCMBConfigResource($this->http, $this->accountId);
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
		return new \FoundryCo\Cloudflare\Resources\DosFlowtrackdApiOtherResource($this->http, $this->accountId);
	}


	public function magicAccountApps(): Resources\MagicAccountAppsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicAccountAppsResource($this->http, $this->accountId);
	}


	public function magicCf1Sites(): Resources\MagicCf1SitesResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicCf1SitesResource($this->http, $this->accountId);
	}


	public function magicCf1SiteRamps(): Resources\MagicCf1SiteRampsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicCf1SiteRampsResource($this->http, $this->accountId);
	}


	public function magicInterconnects(): Resources\MagicInterconnectsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicInterconnectsResource($this->http, $this->accountId);
	}


	public function catalogSync(): Resources\CatalogSyncResource
	{
		return new \FoundryCo\Cloudflare\Resources\CatalogSyncResource($this->http, $this->accountId);
	}


	public function onRamps(): Resources\OnRampsResource
	{
		return new \FoundryCo\Cloudflare\Resources\OnRampsResource($this->http, $this->accountId);
	}


	public function cloudIntegrations(): Resources\CloudIntegrationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CloudIntegrationsResource($this->http, $this->accountId);
	}


	public function resources(): Resources\ResourcesResource
	{
		return new \FoundryCo\Cloudflare\Resources\ResourcesResource($this->http, $this->accountId);
	}


	public function magicConnectors(): Resources\MagicConnectorsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicConnectorsResource($this->http, $this->accountId);
	}


	public function magicGRETunnels(): Resources\MagicGRETunnelsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicGRETunnelsResource($this->http, $this->accountId);
	}


	public function magicIpsecTunnels(): Resources\MagicIpsecTunnelsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicIpsecTunnelsResource($this->http, $this->accountId);
	}


	public function magicRedundancyGroups(): Resources\MagicRedundancyGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicRedundancyGroupsResource($this->http, $this->accountId);
	}


	public function magicStaticRoutes(): Resources\MagicStaticRoutesResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicStaticRoutesResource($this->http, $this->accountId);
	}


	public function magicSites(): Resources\MagicSitesResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicSitesResource($this->http, $this->accountId);
	}


	public function magicSiteAcls(): Resources\MagicSiteAclsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicSiteAclsResource($this->http, $this->accountId);
	}


	public function magicSiteAppConfigs(): Resources\MagicSiteAppConfigsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicSiteAppConfigsResource($this->http, $this->accountId);
	}


	public function magicSiteLans(): Resources\MagicSiteLansResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicSiteLansResource($this->http, $this->accountId);
	}


	public function magicSiteNetflowConfig(): Resources\MagicSiteNetflowConfigResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicSiteNetflowConfigResource($this->http, $this->accountId);
	}


	public function magicSiteWans(): Resources\MagicSiteWansResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicSiteWansResource($this->http, $this->accountId);
	}


	public function members(): Resources\AccountMembersResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountMembersResource($this->http, $this->accountId);
	}


	public function magicNetworkMonitoringConfiguration(): Resources\MagicNetworkMonitoringConfigurationResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicNetworkMonitoringConfigurationResource($this->http, $this->accountId);
	}


	public function magicNetworkMonitoringRules(): Resources\MagicNetworkMonitoringRulesResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicNetworkMonitoringRulesResource($this->http, $this->accountId);
	}


	public function magicNetworkMonitoringVPCFlowLogs(): Resources\MagicNetworkMonitoringVPCFlowLogsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicNetworkMonitoringVPCFlowLogsResource($this->http, $this->accountId);
	}


	public function moqRelays(): Resources\MoqRelaysResource
	{
		return new \FoundryCo\Cloudflare\Resources\MoqRelaysResource($this->http, $this->accountId);
	}


	public function mtlsCertificateManagement(): Resources\MtlsCertificateManagementResource
	{
		return new \FoundryCo\Cloudflare\Resources\MtlsCertificateManagementResource($this->http, $this->accountId);
	}


	public function oauthClients(): Resources\OauthClientsResource
	{
		return new \FoundryCo\Cloudflare\Resources\OauthClientsResource($this->http);
	}


	public function pagesProject(): Resources\PagesProjectResource
	{
		return new \FoundryCo\Cloudflare\Resources\PagesProjectResource($this->http, $this->accountId);
	}


	public function pagesDeployment(): Resources\PagesDeploymentResource
	{
		return new \FoundryCo\Cloudflare\Resources\PagesDeploymentResource($this->http, $this->accountId);
	}


	public function pagesDomains(): Resources\PagesDomainsResource
	{
		return new \FoundryCo\Cloudflare\Resources\PagesDomainsResource($this->http, $this->accountId);
	}


	public function pagesBuildCache(): Resources\PagesBuildCacheResource
	{
		return new \FoundryCo\Cloudflare\Resources\PagesBuildCacheResource($this->http, $this->accountId);
	}


	public function ppcStripe(): Resources\PpcStripeResource
	{
		return new \FoundryCo\Cloudflare\Resources\PpcStripeResource($this->http, $this->accountId);
	}


	public function ppcConfig(): Resources\PpcConfigResource
	{
		return new \FoundryCo\Cloudflare\Resources\PpcConfigResource($this->http);
	}


	public function billable(): Resources\BillableResource
	{
		return new \FoundryCo\Cloudflare\Resources\BillableResource($this->http, $this->accountId);
	}


	public function magicPCAPCollection(): Resources\MagicPCAPCollectionResource
	{
		return new \FoundryCo\Cloudflare\Resources\MagicPCAPCollectionResource($this->http, $this->accountId);
	}


	public function workersPipelinesOther(): Resources\WorkersPipelinesOtherResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersPipelinesOtherResource($this->http, $this->accountId);
	}


	public function r2CatalogManagement(): Resources\R2CatalogManagementResource
	{
		return new \FoundryCo\Cloudflare\Resources\R2CatalogManagementResource($this->http, $this->accountId);
	}


	public function credentialManagement(): Resources\CredentialManagementResource
	{
		return new \FoundryCo\Cloudflare\Resources\CredentialManagementResource($this->http, $this->accountId);
	}


	public function maintenanceConfiguration(): Resources\MaintenanceConfigurationResource
	{
		return new \FoundryCo\Cloudflare\Resources\MaintenanceConfigurationResource($this->http, $this->accountId);
	}


	public function namespaceManagement(): Resources\NamespaceManagementResource
	{
		return new \FoundryCo\Cloudflare\Resources\NamespaceManagementResource($this->http, $this->accountId);
	}


	public function tableManagement(): Resources\TableManagementResource
	{
		return new \FoundryCo\Cloudflare\Resources\TableManagementResource($this->http, $this->accountId);
	}


	public function tableMaintenanceConfiguration(): Resources\TableMaintenanceConfigurationResource
	{
		return new \FoundryCo\Cloudflare\Resources\TableMaintenanceConfigurationResource($this->http, $this->accountId);
	}


	public function r2Object(): Resources\R2ObjectResource
	{
		return new \FoundryCo\Cloudflare\Resources\R2ObjectResource($this->http, $this->accountId);
	}


	public function r2(): Resources\R2Resource
	{
		return new \FoundryCo\Cloudflare\Resources\R2Resource($this->http, $this->accountId);
	}


	public function analytics(): Resources\AnalyticsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AnalyticsResource($this->http, $this->accountId);
	}


	public function liveStreams(): Resources\LiveStreamsResource
	{
		return new \FoundryCo\Cloudflare\Resources\LiveStreamsResource($this->http, $this->accountId);
	}


	public function meetings(): Resources\MeetingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\MeetingsResource($this->http, $this->accountId);
	}


	public function activeSession(): Resources\ActiveSessionResource
	{
		return new \FoundryCo\Cloudflare\Resources\ActiveSessionResource($this->http, $this->accountId);
	}


	public function presets(): Resources\PresetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\PresetsResource($this->http, $this->accountId);
	}


	public function recordings(): Resources\RecordingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RecordingsResource($this->http, $this->accountId);
	}


	public function sessions(): Resources\SessionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\SessionsResource($this->http, $this->accountId);
	}


	public function webhooks(): Resources\WebhooksResource
	{
		return new \FoundryCo\Cloudflare\Resources\WebhooksResource($this->http, $this->accountId);
	}


	public function domainDiscovery(): Resources\DomainDiscoveryResource
	{
		return new \FoundryCo\Cloudflare\Resources\DomainDiscoveryResource($this->http, $this->accountId);
	}


	public function registrarDomains(): Resources\RegistrarDomainsResource
	{
		return new \FoundryCo\Cloudflare\Resources\RegistrarDomainsResource($this->http, $this->accountId);
	}


	public function registrarRegistration(): Resources\RegistrarRegistrationResource
	{
		return new \FoundryCo\Cloudflare\Resources\RegistrarRegistrationResource($this->http, $this->accountId);
	}


	public function requestTracer(): Resources\AccountRequestTracerResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountRequestTracerResource($this->http, $this->accountId);
	}


	public function roles(): Resources\AccountRolesResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountRolesResource($this->http, $this->accountId);
	}


	public function lists(): Resources\ListsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ListsResource($this->http, $this->accountId);
	}


	public function rulesets(): Resources\AccountRulesetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountRulesetsResource($this->http, $this->accountId);
	}


	public function webAnalytics(): Resources\WebAnalyticsResource
	{
		return new \FoundryCo\Cloudflare\Resources\WebAnalyticsResource($this->http);
	}


	public function scimGroups(): Resources\SCIMGroupsResource
	{
		return new \FoundryCo\Cloudflare\Resources\SCIMGroupsResource($this->http, $this->accountId);
	}


	public function scimDiscovery(): Resources\SCIMDiscoveryResource
	{
		return new \FoundryCo\Cloudflare\Resources\SCIMDiscoveryResource($this->http, $this->accountId);
	}


	public function scimUsers(): Resources\SCIMUsersResource
	{
		return new \FoundryCo\Cloudflare\Resources\SCIMUsersResource($this->http, $this->accountId);
	}


	public function secondaryDNSACL(): Resources\SecondaryDNSACLResource
	{
		return new \FoundryCo\Cloudflare\Resources\SecondaryDNSACLResource($this->http, $this->accountId);
	}


	public function secondaryDNSPeer(): Resources\SecondaryDNSPeerResource
	{
		return new \FoundryCo\Cloudflare\Resources\SecondaryDNSPeerResource($this->http, $this->accountId);
	}


	public function secondaryDNSTSIG(): Resources\SecondaryDNSTSIGResource
	{
		return new \FoundryCo\Cloudflare\Resources\SecondaryDNSTSIGResource($this->http, $this->accountId);
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
		return new \FoundryCo\Cloudflare\Resources\R2SuperSlurperResource($this->http, $this->accountId);
	}


	public function sso(): Resources\SSOResource
	{
		return new \FoundryCo\Cloudflare\Resources\SSOResource($this->http, $this->accountId);
	}


	public function workersKVNamespace(): Resources\WorkersKVNamespaceResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersKVNamespaceResource($this->http, $this->accountId);
	}


	public function streamVideos(): Resources\StreamVideosResource
	{
		return new \FoundryCo\Cloudflare\Resources\StreamVideosResource($this->http, $this->accountId);
	}


	public function streamVideoClipping(): Resources\StreamVideoClippingResource
	{
		return new \FoundryCo\Cloudflare\Resources\StreamVideoClippingResource($this->http, $this->accountId);
	}


	public function streamSigningKeys(): Resources\StreamSigningKeysResource
	{
		return new \FoundryCo\Cloudflare\Resources\StreamSigningKeysResource($this->http, $this->accountId);
	}


	public function streamLiveInputs(): Resources\StreamLiveInputsResource
	{
		return new \FoundryCo\Cloudflare\Resources\StreamLiveInputsResource($this->http, $this->accountId);
	}


	public function streamWatermarkProfile(): Resources\StreamWatermarkProfileResource
	{
		return new \FoundryCo\Cloudflare\Resources\StreamWatermarkProfileResource($this->http, $this->accountId);
	}


	public function streamWebhook(): Resources\StreamWebhookResource
	{
		return new \FoundryCo\Cloudflare\Resources\StreamWebhookResource($this->http, $this->accountId);
	}


	public function streamAudioTracks(): Resources\StreamAudioTracksResource
	{
		return new \FoundryCo\Cloudflare\Resources\StreamAudioTracksResource($this->http, $this->accountId);
	}


	public function streamSubtitlescaptions(): Resources\StreamSubtitlescaptionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\StreamSubtitlescaptionsResource($this->http, $this->accountId);
	}


	public function streamMp4Downloads(): Resources\StreamMp4DownloadsResource
	{
		return new \FoundryCo\Cloudflare\Resources\StreamMp4DownloadsResource($this->http, $this->accountId);
	}


	public function subscriptions(): Resources\AccountSubscriptionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountSubscriptionsResource($this->http, $this->accountId);
	}


	public function resourceTagging(): Resources\ResourceTaggingResource
	{
		return new \FoundryCo\Cloudflare\Resources\ResourceTaggingResource($this->http);
	}


	public function tunnelRouting(): Resources\TunnelRoutingResource
	{
		return new \FoundryCo\Cloudflare\Resources\TunnelRoutingResource($this->http, $this->accountId);
	}


	public function tunnelVirtualNetwork(): Resources\TunnelVirtualNetworkResource
	{
		return new \FoundryCo\Cloudflare\Resources\TunnelVirtualNetworkResource($this->http, $this->accountId);
	}


	public function ownedAPITokens(): Resources\AccountOwnedAPITokensResource
	{
		return new \FoundryCo\Cloudflare\Resources\AccountOwnedAPITokensResource($this->http, $this->accountId);
	}


	public function urlScannerDeprecated(): Resources\URLScannerDeprecatedResource
	{
		return new \FoundryCo\Cloudflare\Resources\URLScannerDeprecatedResource($this->http, $this->accountId);
	}


	public function urlScanner(): Resources\URLScannerResource
	{
		return new \FoundryCo\Cloudflare\Resources\URLScannerResource($this->http, $this->accountId);
	}


	public function vectorizeBetaDeprecated(): Resources\VectorizeBetaDeprecatedResource
	{
		return new \FoundryCo\Cloudflare\Resources\VectorizeBetaDeprecatedResource($this->http, $this->accountId);
	}


	public function vectorize(): Resources\VectorizeResource
	{
		return new \FoundryCo\Cloudflare\Resources\VectorizeResource($this->http, $this->accountId);
	}


	public function credentialSets(): Resources\CredentialSetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CredentialSetsResource($this->http, $this->accountId);
	}


	public function credentials(): Resources\CredentialsResource
	{
		return new \FoundryCo\Cloudflare\Resources\CredentialsResource($this->http, $this->accountId);
	}


	public function targetEnvironments(): Resources\TargetEnvironmentsResource
	{
		return new \FoundryCo\Cloudflare\Resources\TargetEnvironmentsResource($this->http, $this->accountId);
	}


	public function waitingRoom(): Resources\WaitingRoomResource
	{
		return new \FoundryCo\Cloudflare\Resources\WaitingRoomResource($this->http);
	}


	public function workerAccountSettings(): Resources\WorkerAccountSettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkerAccountSettingsResource($this->http, $this->accountId);
	}


	public function workerScript(): Resources\WorkerScriptResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkerScriptResource($this->http, $this->accountId);
	}


	public function workersForPlatforms(): Resources\WorkersForPlatformsResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkersForPlatformsResource($this->http, $this->accountId);
	}


	public function domains(): Resources\DomainsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DomainsResource($this->http, $this->accountId);
	}


	public function durableObjectsNamespace(): Resources\DurableObjectsNamespaceResource
	{
		return new \FoundryCo\Cloudflare\Resources\DurableObjectsNamespaceResource($this->http, $this->accountId);
	}


	public function destinations(): Resources\DestinationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\DestinationsResource($this->http, $this->accountId);
	}


	public function savedQueries(): Resources\SavedQueriesResource
	{
		return new \FoundryCo\Cloudflare\Resources\SavedQueriesResource($this->http, $this->accountId);
	}


	public function shared(): Resources\SharedResource
	{
		return new \FoundryCo\Cloudflare\Resources\SharedResource($this->http, $this->accountId);
	}


	public function keys(): Resources\KeysResource
	{
		return new \FoundryCo\Cloudflare\Resources\KeysResource($this->http, $this->accountId);
	}


	public function liveTail(): Resources\LiveTailResource
	{
		return new \FoundryCo\Cloudflare\Resources\LiveTailResource($this->http, $this->accountId);
	}


	public function queryRun(): Resources\QueryRunResource
	{
		return new \FoundryCo\Cloudflare\Resources\QueryRunResource($this->http, $this->accountId);
	}


	public function values(): Resources\ValuesResource
	{
		return new \FoundryCo\Cloudflare\Resources\ValuesResource($this->http, $this->accountId);
	}


	public function usage(): Resources\UsageResource
	{
		return new \FoundryCo\Cloudflare\Resources\UsageResource($this->http, $this->accountId);
	}


	public function workerPlacement(): Resources\WorkerPlacementResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkerPlacementResource($this->http, $this->accountId);
	}


	public function workerDeployments(): Resources\WorkerDeploymentsResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkerDeploymentsResource($this->http, $this->accountId);
	}


	public function workerCronTrigger(): Resources\WorkerCronTriggerResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkerCronTriggerResource($this->http, $this->accountId);
	}


	public function workerTailLogs(): Resources\WorkerTailLogsResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkerTailLogsResource($this->http, $this->accountId);
	}


	public function workerVersions(): Resources\WorkerVersionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkerVersionsResource($this->http, $this->accountId);
	}


	public function workerEnvironment(): Resources\WorkerEnvironmentResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkerEnvironmentResource($this->http, $this->accountId);
	}


	public function workerSubdomain(): Resources\WorkerSubdomainResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkerSubdomainResource($this->http, $this->accountId);
	}


	public function versions(): Resources\VersionsResource
	{
		return new \FoundryCo\Cloudflare\Resources\VersionsResource($this->http, $this->accountId);
	}


	public function workflows(): Resources\WorkflowsResource
	{
		return new \FoundryCo\Cloudflare\Resources\WorkflowsResource($this->http, $this->accountId);
	}


	public function zeroTrustConnectivitySettings(): Resources\ZeroTrustConnectivitySettingsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustConnectivitySettingsResource($this->http, $this->accountId);
	}


	public function zeroTrustHostnameRoute(): Resources\ZeroTrustHostnameRouteResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustHostnameRouteResource($this->http, $this->accountId);
	}


	public function zeroTrustSubnets(): Resources\ZeroTrustSubnetsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustSubnetsResource($this->http, $this->accountId);
	}


	public function zeroTrustRiskScoring(): Resources\ZeroTrustRiskScoringResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustRiskScoringResource($this->http, $this->accountId);
	}


	public function zeroTrustRiskScoringIntegrations(): Resources\ZeroTrustRiskScoringIntegrationsResource
	{
		return new \FoundryCo\Cloudflare\Resources\ZeroTrustRiskScoringIntegrationsResource($this->http, $this->accountId);
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
