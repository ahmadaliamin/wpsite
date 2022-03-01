<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/resources/detail_placement_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Resources;

class DetailPlacementView
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
        $pool->internalAddGeneratedFile(
            '
�
2google/ads/googleads/v8/enums/placement_type.protogoogle.ads.googleads.v8.enums"�
PlacementTypeEnum"�
PlacementType
UNSPECIFIED 
UNKNOWN
WEBSITE
MOBILE_APP_CATEGORY
MOBILE_APPLICATION
YOUTUBE_VIDEO
YOUTUBE_CHANNELB�
!com.google.ads.googleads.v8.enumsBPlacementTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v8/enums;enums�GAA�Google.Ads.GoogleAds.V8.Enums�Google\\Ads\\GoogleAds\\V8\\Enums�!Google::Ads::GoogleAds::V8::Enumsbproto3
�
=google/ads/googleads/v8/resources/detail_placement_view.proto!google.ads.googleads.v8.resourcesgoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
DetailPlacementViewK
resource_name (	B4�A�A.
,googleads.googleapis.com/DetailPlacementView
	placement (	B�AH �
display_name (	B�AH�,
group_placement_target_url	 (	B�AH�

target_url
 (	B�AH�[
placement_type (2>.google.ads.googleads.v8.enums.PlacementTypeEnum.PlacementTypeB�A:��A}
,googleads.googleapis.com/DetailPlacementViewMcustomers/{customer_id}/detailPlacementViews/{ad_group_id}~{base64_placement}B

_placementB
_display_nameB
_group_placement_target_urlB
_target_urlB�
%com.google.ads.googleads.v8.resourcesBDetailPlacementViewProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v8/resources;resources�GAA�!Google.Ads.GoogleAds.V8.Resources�!Google\\Ads\\GoogleAds\\V8\\Resources�%Google::Ads::GoogleAds::V8::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

