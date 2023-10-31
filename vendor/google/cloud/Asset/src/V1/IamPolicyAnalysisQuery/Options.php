<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/asset/v1/asset_service.proto

namespace Google\Cloud\Asset\V1\IamPolicyAnalysisQuery;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Contains query options.
 *
 * Generated from protobuf message <code>google.cloud.asset.v1.IamPolicyAnalysisQuery.Options</code>
 */
class Options extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. If true, the identities section of the result will expand any
     * Google groups appearing in an IAM policy binding.
     * If
     * [IamPolicyAnalysisQuery.identity_selector][google.cloud.asset.v1.IamPolicyAnalysisQuery.identity_selector]
     * is specified, the identity in the result will be determined by the
     * selector, and this flag is not allowed to set.
     * If true, the default max expansion per group is 1000 for
     * AssetService.AnalyzeIamPolicy][].
     * Default is false.
     *
     * Generated from protobuf field <code>bool expand_groups = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $expand_groups = false;
    /**
     * Optional. If true, the access section of result will expand any roles
     * appearing in IAM policy bindings to include their permissions.
     * If
     * [IamPolicyAnalysisQuery.access_selector][google.cloud.asset.v1.IamPolicyAnalysisQuery.access_selector]
     * is specified, the access section of the result will be determined by the
     * selector, and this flag is not allowed to set.
     * Default is false.
     *
     * Generated from protobuf field <code>bool expand_roles = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $expand_roles = false;
    /**
     * Optional. If true and
     * [IamPolicyAnalysisQuery.resource_selector][google.cloud.asset.v1.IamPolicyAnalysisQuery.resource_selector]
     * is not specified, the resource section of the result will expand any
     * resource attached to an IAM policy to include resources lower in the
     * resource hierarchy.
     * For example, if the request analyzes for which resources user A has
     * permission P, and the results include an IAM policy with P on a Google
     * Cloud folder, the results will also include resources in that folder with
     * permission P.
     * If true and
     * [IamPolicyAnalysisQuery.resource_selector][google.cloud.asset.v1.IamPolicyAnalysisQuery.resource_selector]
     * is specified, the resource section of the result will expand the
     * specified resource to include resources lower in the resource hierarchy.
     * Only project or lower resources are supported. Folder and organization
     * resources cannot be used together with this option.
     * For example, if the request analyzes for which users have permission P on
     * a Google Cloud project with this option enabled, the results will include
     * all users who have permission P on that project or any lower resource.
     * If true, the default max expansion per resource is 1000 for
     * AssetService.AnalyzeIamPolicy][] and 100000 for
     * AssetService.AnalyzeIamPolicyLongrunning][].
     * Default is false.
     *
     * Generated from protobuf field <code>bool expand_resources = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $expand_resources = false;
    /**
     * Optional. If true, the result will output the relevant parent/child
     * relationships between resources. Default is false.
     *
     * Generated from protobuf field <code>bool output_resource_edges = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $output_resource_edges = false;
    /**
     * Optional. If true, the result will output the relevant membership
     * relationships between groups and other groups, and between groups and
     * principals. Default is false.
     *
     * Generated from protobuf field <code>bool output_group_edges = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $output_group_edges = false;
    /**
     * Optional. If true, the response will include access analysis from
     * identities to resources via service account impersonation. This is a very
     * expensive operation, because many derived queries will be executed. We
     * highly recommend you use
     * [AssetService.AnalyzeIamPolicyLongrunning][google.cloud.asset.v1.AssetService.AnalyzeIamPolicyLongrunning]
     * RPC instead.
     * For example, if the request analyzes for which resources user A has
     * permission P, and there's an IAM policy states user A has
     * iam.serviceAccounts.getAccessToken permission to a service account SA,
     * and there's another IAM policy states service account SA has permission P
     * to a Google Cloud folder F, then user A potentially has access to the
     * Google Cloud folder F. And those advanced analysis results will be
     * included in
     * [AnalyzeIamPolicyResponse.service_account_impersonation_analysis][google.cloud.asset.v1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis].
     * Another example, if the request analyzes for who has
     * permission P to a Google Cloud folder F, and there's an IAM policy states
     * user A has iam.serviceAccounts.actAs permission to a service account SA,
     * and there's another IAM policy states service account SA has permission P
     * to the Google Cloud folder F, then user A potentially has access to the
     * Google Cloud folder F. And those advanced analysis results will be
     * included in
     * [AnalyzeIamPolicyResponse.service_account_impersonation_analysis][google.cloud.asset.v1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis].
     * Only the following permissions are considered in this analysis:
     * * `iam.serviceAccounts.actAs`
     * * `iam.serviceAccounts.signBlob`
     * * `iam.serviceAccounts.signJwt`
     * * `iam.serviceAccounts.getAccessToken`
     * * `iam.serviceAccounts.getOpenIdToken`
     * * `iam.serviceAccounts.implicitDelegation`
     * Default is false.
     *
     * Generated from protobuf field <code>bool analyze_service_account_impersonation = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $analyze_service_account_impersonation = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $expand_groups
     *           Optional. If true, the identities section of the result will expand any
     *           Google groups appearing in an IAM policy binding.
     *           If
     *           [IamPolicyAnalysisQuery.identity_selector][google.cloud.asset.v1.IamPolicyAnalysisQuery.identity_selector]
     *           is specified, the identity in the result will be determined by the
     *           selector, and this flag is not allowed to set.
     *           If true, the default max expansion per group is 1000 for
     *           AssetService.AnalyzeIamPolicy][].
     *           Default is false.
     *     @type bool $expand_roles
     *           Optional. If true, the access section of result will expand any roles
     *           appearing in IAM policy bindings to include their permissions.
     *           If
     *           [IamPolicyAnalysisQuery.access_selector][google.cloud.asset.v1.IamPolicyAnalysisQuery.access_selector]
     *           is specified, the access section of the result will be determined by the
     *           selector, and this flag is not allowed to set.
     *           Default is false.
     *     @type bool $expand_resources
     *           Optional. If true and
     *           [IamPolicyAnalysisQuery.resource_selector][google.cloud.asset.v1.IamPolicyAnalysisQuery.resource_selector]
     *           is not specified, the resource section of the result will expand any
     *           resource attached to an IAM policy to include resources lower in the
     *           resource hierarchy.
     *           For example, if the request analyzes for which resources user A has
     *           permission P, and the results include an IAM policy with P on a Google
     *           Cloud folder, the results will also include resources in that folder with
     *           permission P.
     *           If true and
     *           [IamPolicyAnalysisQuery.resource_selector][google.cloud.asset.v1.IamPolicyAnalysisQuery.resource_selector]
     *           is specified, the resource section of the result will expand the
     *           specified resource to include resources lower in the resource hierarchy.
     *           Only project or lower resources are supported. Folder and organization
     *           resources cannot be used together with this option.
     *           For example, if the request analyzes for which users have permission P on
     *           a Google Cloud project with this option enabled, the results will include
     *           all users who have permission P on that project or any lower resource.
     *           If true, the default max expansion per resource is 1000 for
     *           AssetService.AnalyzeIamPolicy][] and 100000 for
     *           AssetService.AnalyzeIamPolicyLongrunning][].
     *           Default is false.
     *     @type bool $output_resource_edges
     *           Optional. If true, the result will output the relevant parent/child
     *           relationships between resources. Default is false.
     *     @type bool $output_group_edges
     *           Optional. If true, the result will output the relevant membership
     *           relationships between groups and other groups, and between groups and
     *           principals. Default is false.
     *     @type bool $analyze_service_account_impersonation
     *           Optional. If true, the response will include access analysis from
     *           identities to resources via service account impersonation. This is a very
     *           expensive operation, because many derived queries will be executed. We
     *           highly recommend you use
     *           [AssetService.AnalyzeIamPolicyLongrunning][google.cloud.asset.v1.AssetService.AnalyzeIamPolicyLongrunning]
     *           RPC instead.
     *           For example, if the request analyzes for which resources user A has
     *           permission P, and there's an IAM policy states user A has
     *           iam.serviceAccounts.getAccessToken permission to a service account SA,
     *           and there's another IAM policy states service account SA has permission P
     *           to a Google Cloud folder F, then user A potentially has access to the
     *           Google Cloud folder F. And those advanced analysis results will be
     *           included in
     *           [AnalyzeIamPolicyResponse.service_account_impersonation_analysis][google.cloud.asset.v1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis].
     *           Another example, if the request analyzes for who has
     *           permission P to a Google Cloud folder F, and there's an IAM policy states
     *           user A has iam.serviceAccounts.actAs permission to a service account SA,
     *           and there's another IAM policy states service account SA has permission P
     *           to the Google Cloud folder F, then user A potentially has access to the
     *           Google Cloud folder F. And those advanced analysis results will be
     *           included in
     *           [AnalyzeIamPolicyResponse.service_account_impersonation_analysis][google.cloud.asset.v1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis].
     *           Only the following permissions are considered in this analysis:
     *           * `iam.serviceAccounts.actAs`
     *           * `iam.serviceAccounts.signBlob`
     *           * `iam.serviceAccounts.signJwt`
     *           * `iam.serviceAccounts.getAccessToken`
     *           * `iam.serviceAccounts.getOpenIdToken`
     *           * `iam.serviceAccounts.implicitDelegation`
     *           Default is false.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Asset\V1\AssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. If true, the identities section of the result will expand any
     * Google groups appearing in an IAM policy binding.
     * If
     * [IamPolicyAnalysisQuery.identity_selector][google.cloud.asset.v1.IamPolicyAnalysisQuery.identity_selector]
     * is specified, the identity in the result will be determined by the
     * selector, and this flag is not allowed to set.
     * If true, the default max expansion per group is 1000 for
     * AssetService.AnalyzeIamPolicy][].
     * Default is false.
     *
     * Generated from protobuf field <code>bool expand_groups = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getExpandGroups()
    {
        return $this->expand_groups;
    }

    /**
     * Optional. If true, the identities section of the result will expand any
     * Google groups appearing in an IAM policy binding.
     * If
     * [IamPolicyAnalysisQuery.identity_selector][google.cloud.asset.v1.IamPolicyAnalysisQuery.identity_selector]
     * is specified, the identity in the result will be determined by the
     * selector, and this flag is not allowed to set.
     * If true, the default max expansion per group is 1000 for
     * AssetService.AnalyzeIamPolicy][].
     * Default is false.
     *
     * Generated from protobuf field <code>bool expand_groups = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setExpandGroups($var)
    {
        GPBUtil::checkBool($var);
        $this->expand_groups = $var;

        return $this;
    }

    /**
     * Optional. If true, the access section of result will expand any roles
     * appearing in IAM policy bindings to include their permissions.
     * If
     * [IamPolicyAnalysisQuery.access_selector][google.cloud.asset.v1.IamPolicyAnalysisQuery.access_selector]
     * is specified, the access section of the result will be determined by the
     * selector, and this flag is not allowed to set.
     * Default is false.
     *
     * Generated from protobuf field <code>bool expand_roles = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getExpandRoles()
    {
        return $this->expand_roles;
    }

    /**
     * Optional. If true, the access section of result will expand any roles
     * appearing in IAM policy bindings to include their permissions.
     * If
     * [IamPolicyAnalysisQuery.access_selector][google.cloud.asset.v1.IamPolicyAnalysisQuery.access_selector]
     * is specified, the access section of the result will be determined by the
     * selector, and this flag is not allowed to set.
     * Default is false.
     *
     * Generated from protobuf field <code>bool expand_roles = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setExpandRoles($var)
    {
        GPBUtil::checkBool($var);
        $this->expand_roles = $var;

        return $this;
    }

    /**
     * Optional. If true and
     * [IamPolicyAnalysisQuery.resource_selector][google.cloud.asset.v1.IamPolicyAnalysisQuery.resource_selector]
     * is not specified, the resource section of the result will expand any
     * resource attached to an IAM policy to include resources lower in the
     * resource hierarchy.
     * For example, if the request analyzes for which resources user A has
     * permission P, and the results include an IAM policy with P on a Google
     * Cloud folder, the results will also include resources in that folder with
     * permission P.
     * If true and
     * [IamPolicyAnalysisQuery.resource_selector][google.cloud.asset.v1.IamPolicyAnalysisQuery.resource_selector]
     * is specified, the resource section of the result will expand the
     * specified resource to include resources lower in the resource hierarchy.
     * Only project or lower resources are supported. Folder and organization
     * resources cannot be used together with this option.
     * For example, if the request analyzes for which users have permission P on
     * a Google Cloud project with this option enabled, the results will include
     * all users who have permission P on that project or any lower resource.
     * If true, the default max expansion per resource is 1000 for
     * AssetService.AnalyzeIamPolicy][] and 100000 for
     * AssetService.AnalyzeIamPolicyLongrunning][].
     * Default is false.
     *
     * Generated from protobuf field <code>bool expand_resources = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getExpandResources()
    {
        return $this->expand_resources;
    }

    /**
     * Optional. If true and
     * [IamPolicyAnalysisQuery.resource_selector][google.cloud.asset.v1.IamPolicyAnalysisQuery.resource_selector]
     * is not specified, the resource section of the result will expand any
     * resource attached to an IAM policy to include resources lower in the
     * resource hierarchy.
     * For example, if the request analyzes for which resources user A has
     * permission P, and the results include an IAM policy with P on a Google
     * Cloud folder, the results will also include resources in that folder with
     * permission P.
     * If true and
     * [IamPolicyAnalysisQuery.resource_selector][google.cloud.asset.v1.IamPolicyAnalysisQuery.resource_selector]
     * is specified, the resource section of the result will expand the
     * specified resource to include resources lower in the resource hierarchy.
     * Only project or lower resources are supported. Folder and organization
     * resources cannot be used together with this option.
     * For example, if the request analyzes for which users have permission P on
     * a Google Cloud project with this option enabled, the results will include
     * all users who have permission P on that project or any lower resource.
     * If true, the default max expansion per resource is 1000 for
     * AssetService.AnalyzeIamPolicy][] and 100000 for
     * AssetService.AnalyzeIamPolicyLongrunning][].
     * Default is false.
     *
     * Generated from protobuf field <code>bool expand_resources = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setExpandResources($var)
    {
        GPBUtil::checkBool($var);
        $this->expand_resources = $var;

        return $this;
    }

    /**
     * Optional. If true, the result will output the relevant parent/child
     * relationships between resources. Default is false.
     *
     * Generated from protobuf field <code>bool output_resource_edges = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getOutputResourceEdges()
    {
        return $this->output_resource_edges;
    }

    /**
     * Optional. If true, the result will output the relevant parent/child
     * relationships between resources. Default is false.
     *
     * Generated from protobuf field <code>bool output_resource_edges = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setOutputResourceEdges($var)
    {
        GPBUtil::checkBool($var);
        $this->output_resource_edges = $var;

        return $this;
    }

    /**
     * Optional. If true, the result will output the relevant membership
     * relationships between groups and other groups, and between groups and
     * principals. Default is false.
     *
     * Generated from protobuf field <code>bool output_group_edges = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getOutputGroupEdges()
    {
        return $this->output_group_edges;
    }

    /**
     * Optional. If true, the result will output the relevant membership
     * relationships between groups and other groups, and between groups and
     * principals. Default is false.
     *
     * Generated from protobuf field <code>bool output_group_edges = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setOutputGroupEdges($var)
    {
        GPBUtil::checkBool($var);
        $this->output_group_edges = $var;

        return $this;
    }

    /**
     * Optional. If true, the response will include access analysis from
     * identities to resources via service account impersonation. This is a very
     * expensive operation, because many derived queries will be executed. We
     * highly recommend you use
     * [AssetService.AnalyzeIamPolicyLongrunning][google.cloud.asset.v1.AssetService.AnalyzeIamPolicyLongrunning]
     * RPC instead.
     * For example, if the request analyzes for which resources user A has
     * permission P, and there's an IAM policy states user A has
     * iam.serviceAccounts.getAccessToken permission to a service account SA,
     * and there's another IAM policy states service account SA has permission P
     * to a Google Cloud folder F, then user A potentially has access to the
     * Google Cloud folder F. And those advanced analysis results will be
     * included in
     * [AnalyzeIamPolicyResponse.service_account_impersonation_analysis][google.cloud.asset.v1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis].
     * Another example, if the request analyzes for who has
     * permission P to a Google Cloud folder F, and there's an IAM policy states
     * user A has iam.serviceAccounts.actAs permission to a service account SA,
     * and there's another IAM policy states service account SA has permission P
     * to the Google Cloud folder F, then user A potentially has access to the
     * Google Cloud folder F. And those advanced analysis results will be
     * included in
     * [AnalyzeIamPolicyResponse.service_account_impersonation_analysis][google.cloud.asset.v1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis].
     * Only the following permissions are considered in this analysis:
     * * `iam.serviceAccounts.actAs`
     * * `iam.serviceAccounts.signBlob`
     * * `iam.serviceAccounts.signJwt`
     * * `iam.serviceAccounts.getAccessToken`
     * * `iam.serviceAccounts.getOpenIdToken`
     * * `iam.serviceAccounts.implicitDelegation`
     * Default is false.
     *
     * Generated from protobuf field <code>bool analyze_service_account_impersonation = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getAnalyzeServiceAccountImpersonation()
    {
        return $this->analyze_service_account_impersonation;
    }

    /**
     * Optional. If true, the response will include access analysis from
     * identities to resources via service account impersonation. This is a very
     * expensive operation, because many derived queries will be executed. We
     * highly recommend you use
     * [AssetService.AnalyzeIamPolicyLongrunning][google.cloud.asset.v1.AssetService.AnalyzeIamPolicyLongrunning]
     * RPC instead.
     * For example, if the request analyzes for which resources user A has
     * permission P, and there's an IAM policy states user A has
     * iam.serviceAccounts.getAccessToken permission to a service account SA,
     * and there's another IAM policy states service account SA has permission P
     * to a Google Cloud folder F, then user A potentially has access to the
     * Google Cloud folder F. And those advanced analysis results will be
     * included in
     * [AnalyzeIamPolicyResponse.service_account_impersonation_analysis][google.cloud.asset.v1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis].
     * Another example, if the request analyzes for who has
     * permission P to a Google Cloud folder F, and there's an IAM policy states
     * user A has iam.serviceAccounts.actAs permission to a service account SA,
     * and there's another IAM policy states service account SA has permission P
     * to the Google Cloud folder F, then user A potentially has access to the
     * Google Cloud folder F. And those advanced analysis results will be
     * included in
     * [AnalyzeIamPolicyResponse.service_account_impersonation_analysis][google.cloud.asset.v1.AnalyzeIamPolicyResponse.service_account_impersonation_analysis].
     * Only the following permissions are considered in this analysis:
     * * `iam.serviceAccounts.actAs`
     * * `iam.serviceAccounts.signBlob`
     * * `iam.serviceAccounts.signJwt`
     * * `iam.serviceAccounts.getAccessToken`
     * * `iam.serviceAccounts.getOpenIdToken`
     * * `iam.serviceAccounts.implicitDelegation`
     * Default is false.
     *
     * Generated from protobuf field <code>bool analyze_service_account_impersonation = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setAnalyzeServiceAccountImpersonation($var)
    {
        GPBUtil::checkBool($var);
        $this->analyze_service_account_impersonation = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Options::class, \Google\Cloud\Asset\V1\IamPolicyAnalysisQuery_Options::class);

