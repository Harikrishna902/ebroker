<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/offers.proto

namespace GPBMetadata\Google\Cloud\Channel\V1;

class Offers
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Cloud\Channel\V1\Common::initOnce();
        \GPBMetadata\Google\Cloud\Channel\V1\Products::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Type\Money::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
$google/cloud/channel/v1/offers.protogoogle.cloud.channel.v1google/api/resource.proto$google/cloud/channel/v1/common.proto&google/cloud/channel/v1/products.protogoogle/protobuf/timestamp.protogoogle/type/money.proto"�
Offer
name (	>
marketing_info (2&.google.cloud.channel.v1.MarketingInfo)
sku (2.google.cloud.channel.v1.Sku+
plan (2.google.cloud.channel.v1.Plan9
constraints (2$.google.cloud.channel.v1.ConstraintsD
price_by_resources (2(.google.cloud.channel.v1.PriceByResource.

start_time (2.google.protobuf.Timestamp1
end_time (2.google.protobuf.TimestampB�AK
parameter_definitions	 (2,.google.cloud.channel.v1.ParameterDefinition
	deal_code (	:I�AF
!cloudchannel.googleapis.com/Offer!accounts/{account}/offers/{offer}"�
ParameterDefinition
name (	R
parameter_type (2:.google.cloud.channel.v1.ParameterDefinition.ParameterType1
	min_value (2.google.cloud.channel.v1.Value1
	max_value (2.google.cloud.channel.v1.Value6
allowed_values (2.google.cloud.channel.v1.Value
optional ("R
ParameterType
PARAMETER_TYPE_UNSPECIFIED 	
INT64

STRING

DOUBLE"Y
ConstraintsJ
customer_constraints (2,.google.cloud.channel.v1.CustomerConstraints"�
CustomerConstraints
allowed_regions (	W
allowed_customer_types (27.google.cloud.channel.v1.CloudIdentityInfo.CustomerTypeN
promotional_order_types (2-.google.cloud.channel.v1.PromotionalOrderType"�
Plan:
payment_plan (2$.google.cloud.channel.v1.PaymentPlan:
payment_type (2$.google.cloud.channel.v1.PaymentType6
payment_cycle (2.google.cloud.channel.v1.Period5
trial_period (2.google.cloud.channel.v1.Period
billing_account (	"�
PriceByResource<
resource_type (2%.google.cloud.channel.v1.ResourceType-
price (2.google.cloud.channel.v1.Price9
price_phases (2#.google.cloud.channel.v1.PricePhase"�
Price&

base_price (2.google.type.Money
discount (+
effective_price (2.google.type.Money
external_price_uri (	"�

PricePhase8
period_type (2#.google.cloud.channel.v1.PeriodType
first_period (
last_period (-
price (2.google.cloud.channel.v1.Price7
price_tiers (2".google.cloud.channel.v1.PriceTier"i
	PriceTier
first_resource (
last_resource (-
price (2.google.cloud.channel.v1.Price"T
Period
duration (8
period_type (2#.google.cloud.channel.v1.PeriodType*m
PromotionalOrderType 
PROMOTIONAL_TYPE_UNSPECIFIED 
NEW_UPGRADE
TRANSFER
PROMOTION_SWITCH*k
PaymentPlan
PAYMENT_PLAN_UNSPECIFIED 

COMMITMENT
FLEXIBLE
FREE	
TRIAL
OFFLINE*D
PaymentType
PAYMENT_TYPE_UNSPECIFIED 

PREPAY
POSTPAY*�
ResourceType
RESOURCE_TYPE_UNSPECIFIED 
SEAT
MAU
GB
LICENSED_USER
MINUTES

IAAS_USAGE
SUBSCRIPTION*G

PeriodType
PERIOD_TYPE_UNSPECIFIED 
DAY	
MONTH
YEARBc
com.google.cloud.channel.v1BOffersProtoPZ5cloud.google.com/go/channel/apiv1/channelpb;channelpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

