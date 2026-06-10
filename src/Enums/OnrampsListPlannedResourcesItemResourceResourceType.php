<?php

/**
 * This file is auto-generated. Do not edit manually.
 * Generated: 2026-06-10 02:24:37 UTC
 * Spec: https://raw.githubusercontent.com/cloudflare/api-schemas/main/openapi.json
 */

declare(strict_types=1);

namespace FoundryCo\Cloudflare\Enums;

enum OnrampsListPlannedResourcesItemResourceResourceType: string
{
	case AwsCustomerGateway = 'aws_customer_gateway';
	case AwsEgressOnlyInternetGateway = 'aws_egress_only_internet_gateway';
	case AwsInternetGateway = 'aws_internet_gateway';
	case AwsInstance = 'aws_instance';
	case AwsNetworkInterface = 'aws_network_interface';
	case AwsRoute = 'aws_route';
	case AwsRouteTable = 'aws_route_table';
	case AwsRouteTableAssociation = 'aws_route_table_association';
	case AwsSubnet = 'aws_subnet';
	case AwsVpc = 'aws_vpc';
	case AwsVpcIpv4CidrBlockAssociation = 'aws_vpc_ipv4_cidr_block_association';
	case AwsVpnConnection = 'aws_vpn_connection';
	case AwsVpnConnectionRoute = 'aws_vpn_connection_route';
	case AwsVpnGateway = 'aws_vpn_gateway';
	case AwsSecurityGroup = 'aws_security_group';
	case AwsVpcSecurityGroupIngressRule = 'aws_vpc_security_group_ingress_rule';
	case AwsVpcSecurityGroupEgressRule = 'aws_vpc_security_group_egress_rule';
	case AwsEc2ManagedPrefixList = 'aws_ec2_managed_prefix_list';
	case AwsEc2TransitGateway = 'aws_ec2_transit_gateway';
	case AwsEc2TransitGatewayPrefixListReference = 'aws_ec2_transit_gateway_prefix_list_reference';
	case AwsEc2TransitGatewayVpcAttachment = 'aws_ec2_transit_gateway_vpc_attachment';
	case AzurermApplicationSecurityGroup = 'azurerm_application_security_group';
	case AzurermLb = 'azurerm_lb';
	case AzurermLbBackendAddressPool = 'azurerm_lb_backend_address_pool';
	case AzurermLbNatPool = 'azurerm_lb_nat_pool';
	case AzurermLbNatRule = 'azurerm_lb_nat_rule';
	case AzurermLbRule = 'azurerm_lb_rule';
	case AzurermLocalNetworkGateway = 'azurerm_local_network_gateway';
	case AzurermNetworkInterface = 'azurerm_network_interface';
	case AzurermNetworkInterfaceApplicationSecurityGroupAssociation = 'azurerm_network_interface_application_security_group_association';
	case AzurermNetworkInterfaceBackendAddressPoolAssociation = 'azurerm_network_interface_backend_address_pool_association';
	case AzurermNetworkInterfaceSecurityGroupAssociation = 'azurerm_network_interface_security_group_association';
	case AzurermNetworkSecurityGroup = 'azurerm_network_security_group';
	case AzurermPublicIp = 'azurerm_public_ip';
	case AzurermRoute = 'azurerm_route';
	case AzurermRouteTable = 'azurerm_route_table';
	case AzurermSubnet = 'azurerm_subnet';
	case AzurermSubnetRouteTableAssociation = 'azurerm_subnet_route_table_association';
	case AzurermVirtualMachine = 'azurerm_virtual_machine';
	case AzurermVirtualNetworkGatewayConnection = 'azurerm_virtual_network_gateway_connection';
	case AzurermVirtualNetwork = 'azurerm_virtual_network';
	case AzurermVirtualNetworkGateway = 'azurerm_virtual_network_gateway';
	case GoogleComputeNetwork = 'google_compute_network';
	case GoogleComputeSubnetwork = 'google_compute_subnetwork';
	case GoogleComputeVpnGateway = 'google_compute_vpn_gateway';
	case GoogleComputeVpnTunnel = 'google_compute_vpn_tunnel';
	case GoogleComputeRoute = 'google_compute_route';
	case GoogleComputeAddress = 'google_compute_address';
	case GoogleComputeGlobalAddress = 'google_compute_global_address';
	case GoogleComputeRouter = 'google_compute_router';
	case GoogleComputeInterconnectAttachment = 'google_compute_interconnect_attachment';
	case GoogleComputeHaVpnGateway = 'google_compute_ha_vpn_gateway';
	case GoogleComputeForwardingRule = 'google_compute_forwarding_rule';
	case GoogleComputeNetworkFirewallPolicy = 'google_compute_network_firewall_policy';
	case GoogleComputeNetworkFirewallPolicyRule = 'google_compute_network_firewall_policy_rule';
	case CloudflareStaticRoute = 'cloudflare_static_route';
	case CloudflareIpsecTunnel = 'cloudflare_ipsec_tunnel';
}
