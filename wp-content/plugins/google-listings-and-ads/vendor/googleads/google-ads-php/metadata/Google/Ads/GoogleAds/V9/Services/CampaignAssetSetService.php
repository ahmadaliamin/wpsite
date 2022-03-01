<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/services/campaign_asset_set_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Services;

class CampaignAssetSetService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
9google/ads/googleads/v9/enums/asset_set_link_status.protogoogle.ads.googleads.v9.enums"f
AssetSetLinkStatusEnum"L
AssetSetLinkStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
!com.google.ads.googleads.v9.enumsBAssetSetLinkStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
9google/ads/googleads/v9/enums/response_content_type.protogoogle.ads.googleads.v9.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
!com.google.ads.googleads.v9.enumsBResponseContentTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
:google/ads/googleads/v9/resources/campaign_asset_set.proto!google.ads.googleads.v9.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
CampaignAssetSetH
resource_name (	B1�A�A+
)googleads.googleapis.com/CampaignAssetSet;
campaign (	B)�A�A#
!googleads.googleapis.com/Campaign<
	asset_set (	B)�A�A#
!googleads.googleapis.com/AssetSet]
status (2H.google.ads.googleads.v9.enums.AssetSetLinkStatusEnum.AssetSetLinkStatusB�A:v�As
)googleads.googleapis.com/CampaignAssetSetFcustomers/{customer_id}/campaignAssetSets/{campaign_id}~{asset_set_id}B�
%com.google.ads.googleads.v9.resourcesBCampaignAssetSetProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3
�
Agoogle/ads/googleads/v9/services/campaign_asset_set_service.proto google.ads.googleads.v9.services:google/ads/googleads/v9/resources/campaign_asset_set.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/rpc/status.proto"�
MutateCampaignAssetSetsRequest
customer_id (	B�AT

operations (2;.google.ads.googleads.v9.services.CampaignAssetSetOperationB�A
partial_failure (
validate_only (i
response_content_type (2J.google.ads.googleads.v9.enums.ResponseContentTypeEnum.ResponseContentType"�
CampaignAssetSetOperationE
create (23.google.ads.googleads.v9.resources.CampaignAssetSetH 
remove (	H B
	operation"�
MutateCampaignAssetSetsResponseO
results (2>.google.ads.googleads.v9.services.MutateCampaignAssetSetResult1
partial_failure_error (2.google.rpc.Status"�
MutateCampaignAssetSetResult
resource_name (	O
campaign_asset_set (23.google.ads.googleads.v9.resources.CampaignAssetSet2�
CampaignAssetSetService�
MutateCampaignAssetSets@.google.ads.googleads.v9.services.MutateCampaignAssetSetsRequestA.google.ads.googleads.v9.services.MutateCampaignAssetSetsResponse"Z���;"6/v9/customers/{customer_id=*}/campaignAssetSets:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
$com.google.ads.googleads.v9.servicesBCampaignAssetSetServiceProtoPZHgoogle.golang.org/genproto/googleapis/ads/googleads/v9/services;services�GAA� Google.Ads.GoogleAds.V9.Services� Google\\Ads\\GoogleAds\\V9\\Services�$Google::Ads::GoogleAds::V9::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

