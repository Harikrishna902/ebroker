<?php
/*
 * Copyright 2023 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/google/cloud/dialogflow/v2/environment.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Google\Cloud\Dialogflow\V2\Client\BaseClient;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Google\Cloud\Dialogflow\V2\CreateEnvironmentRequest;
use Google\Cloud\Dialogflow\V2\DeleteEnvironmentRequest;
use Google\Cloud\Dialogflow\V2\Environment;
use Google\Cloud\Dialogflow\V2\GetEnvironmentHistoryRequest;
use Google\Cloud\Dialogflow\V2\GetEnvironmentRequest;
use Google\Cloud\Dialogflow\V2\ListEnvironmentsRequest;
use Google\Cloud\Dialogflow\V2\UpdateEnvironmentRequest;
use Google\Cloud\Location\GetLocationRequest;
use Google\Cloud\Location\ListLocationsRequest;
use Google\Cloud\Location\Location;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: Service for managing [Environments][google.cloud.dialogflow.v2.Environment].
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * This class is currently experimental and may be subject to changes. See {@see
 * \Google\Cloud\Dialogflow\V2\EnvironmentsClient} for the stable implementation
 *
 * @experimental
 *
 * @internal
 *
 * @method PromiseInterface createEnvironmentAsync(CreateEnvironmentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteEnvironmentAsync(DeleteEnvironmentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getEnvironmentAsync(GetEnvironmentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getEnvironmentHistoryAsync(GetEnvironmentHistoryRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listEnvironmentsAsync(ListEnvironmentsRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateEnvironmentAsync(UpdateEnvironmentRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getLocationAsync(GetLocationRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listLocationsAsync(ListLocationsRequest $request, array $optionalArgs = [])
 */
abstract class EnvironmentsBaseClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'google.cloud.dialogflow.v2.Environments';

    /** The default address of the service. */
    private const SERVICE_ADDRESS = 'dialogflow.googleapis.com';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [
        'https://www.googleapis.com/auth/cloud-platform',
        'https://www.googleapis.com/auth/dialogflow',
    ];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../../resources/environments_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../../resources/environments_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../../resources/environments_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../../resources/environments_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a agent
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted agent resource.
     */
    public static function agentName(string $project): string
    {
        return self::getPathTemplate('agent')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a environment
     * resource.
     *
     * @param string $project
     * @param string $environment
     *
     * @return string The formatted environment resource.
     */
    public static function environmentName(string $project, string $environment): string
    {
        return self::getPathTemplate('environment')->render([
            'project' => $project,
            'environment' => $environment,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a fulfillment
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted fulfillment resource.
     */
    public static function fulfillmentName(string $project): string
    {
        return self::getPathTemplate('fulfillment')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_agent resource.
     *
     * @param string $project
     *
     * @return string The formatted project_agent resource.
     */
    public static function projectAgentName(string $project): string
    {
        return self::getPathTemplate('projectAgent')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_environment resource.
     *
     * @param string $project
     * @param string $environment
     *
     * @return string The formatted project_environment resource.
     */
    public static function projectEnvironmentName(string $project, string $environment): string
    {
        return self::getPathTemplate('projectEnvironment')->render([
            'project' => $project,
            'environment' => $environment,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_fulfillment resource.
     *
     * @param string $project
     *
     * @return string The formatted project_fulfillment resource.
     */
    public static function projectFulfillmentName(string $project): string
    {
        return self::getPathTemplate('projectFulfillment')->render([
            'project' => $project,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_agent resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted project_location_agent resource.
     */
    public static function projectLocationAgentName(string $project, string $location): string
    {
        return self::getPathTemplate('projectLocationAgent')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_environment resource.
     *
     * @param string $project
     * @param string $location
     * @param string $environment
     *
     * @return string The formatted project_location_environment resource.
     */
    public static function projectLocationEnvironmentName(string $project, string $location, string $environment): string
    {
        return self::getPathTemplate('projectLocationEnvironment')->render([
            'project' => $project,
            'location' => $location,
            'environment' => $environment,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_fulfillment resource.
     *
     * @param string $project
     * @param string $location
     *
     * @return string The formatted project_location_fulfillment resource.
     */
    public static function projectLocationFulfillmentName(string $project, string $location): string
    {
        return self::getPathTemplate('projectLocationFulfillment')->render([
            'project' => $project,
            'location' => $location,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_location_version resource.
     *
     * @param string $project
     * @param string $location
     * @param string $version
     *
     * @return string The formatted project_location_version resource.
     */
    public static function projectLocationVersionName(string $project, string $location, string $version): string
    {
        return self::getPathTemplate('projectLocationVersion')->render([
            'project' => $project,
            'location' => $location,
            'version' => $version,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a
     * project_version resource.
     *
     * @param string $project
     * @param string $version
     *
     * @return string The formatted project_version resource.
     */
    public static function projectVersionName(string $project, string $version): string
    {
        return self::getPathTemplate('projectVersion')->render([
            'project' => $project,
            'version' => $version,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a version
     * resource.
     *
     * @param string $project
     * @param string $version
     *
     * @return string The formatted version resource.
     */
    public static function versionName(string $project, string $version): string
    {
        return self::getPathTemplate('version')->render([
            'project' => $project,
            'version' => $version,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - agent: projects/{project}/agent
     * - environment: projects/{project}/agent/environments/{environment}
     * - fulfillment: projects/{project}/agent/fulfillment
     * - projectAgent: projects/{project}/agent
     * - projectEnvironment: projects/{project}/agent/environments/{environment}
     * - projectFulfillment: projects/{project}/agent/fulfillment
     * - projectLocationAgent: projects/{project}/locations/{location}/agent
     * - projectLocationEnvironment: projects/{project}/locations/{location}/agent/environments/{environment}
     * - projectLocationFulfillment: projects/{project}/locations/{location}/agent/fulfillment
     * - projectLocationVersion: projects/{project}/locations/{location}/agent/versions/{version}
     * - projectVersion: projects/{project}/agent/versions/{version}
     * - version: projects/{project}/agent/versions/{version}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'dialogflow.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates an agent environment.
     *
     * The async variant is {@see self::createEnvironmentAsync()} .
     *
     * @param CreateEnvironmentRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Environment
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createEnvironment(CreateEnvironmentRequest $request, array $callOptions = []): Environment
    {
        return $this->startApiCall('CreateEnvironment', $request, $callOptions)->wait();
    }

    /**
     * Deletes the specified agent environment.
     *
     * The async variant is {@see self::deleteEnvironmentAsync()} .
     *
     * @param DeleteEnvironmentRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteEnvironment(DeleteEnvironmentRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteEnvironment', $request, $callOptions)->wait();
    }

    /**
     * Retrieves the specified agent environment.
     *
     * The async variant is {@see self::getEnvironmentAsync()} .
     *
     * @param GetEnvironmentRequest $request     A request to house fields associated with the call.
     * @param array                 $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Environment
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getEnvironment(GetEnvironmentRequest $request, array $callOptions = []): Environment
    {
        return $this->startApiCall('GetEnvironment', $request, $callOptions)->wait();
    }

    /**
     * Gets the history of the specified environment.
     *
     * The async variant is {@see self::getEnvironmentHistoryAsync()} .
     *
     * @param GetEnvironmentHistoryRequest $request     A request to house fields associated with the call.
     * @param array                        $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getEnvironmentHistory(GetEnvironmentHistoryRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('GetEnvironmentHistory', $request, $callOptions);
    }

    /**
     * Returns the list of all non-default environments of the specified agent.
     *
     * The async variant is {@see self::listEnvironmentsAsync()} .
     *
     * @param ListEnvironmentsRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listEnvironments(ListEnvironmentsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListEnvironments', $request, $callOptions);
    }

    /**
     * Updates the specified agent environment.
     *
     * This method allows you to deploy new agent versions into the environment.
     * When an environment is pointed to a new agent version by setting
     * `environment.agent_version`, the environment is temporarily set to the
     * `LOADING` state. During that time, the environment continues serving the
     * previous version of the agent. After the new agent version is done loading,
     * the environment is set back to the `RUNNING` state.
     * You can use "-" as Environment ID in environment name to update an agent
     * version in the default environment. WARNING: this will negate all recent
     * changes to the draft agent and can't be undone. You may want to save the
     * draft agent to a version before calling this method.
     *
     * The async variant is {@see self::updateEnvironmentAsync()} .
     *
     * @param UpdateEnvironmentRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Environment
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateEnvironment(UpdateEnvironmentRequest $request, array $callOptions = []): Environment
    {
        return $this->startApiCall('UpdateEnvironment', $request, $callOptions)->wait();
    }

    /**
     * Gets information about a location.
     *
     * The async variant is {@see self::getLocationAsync()} .
     *
     * @param GetLocationRequest $request     A request to house fields associated with the call.
     * @param array              $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Location
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getLocation(GetLocationRequest $request, array $callOptions = []): Location
    {
        return $this->startApiCall('GetLocation', $request, $callOptions)->wait();
    }

    /**
     * Lists information about the supported locations for this service.
     *
     * The async variant is {@see self::listLocationsAsync()} .
     *
     * @param ListLocationsRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listLocations(ListLocationsRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListLocations', $request, $callOptions);
    }
}
