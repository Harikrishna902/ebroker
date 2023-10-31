<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/storagetransfer/v1/transfer_types.proto

namespace Google\Cloud\StorageTransfer\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An AzureBlobStorageData resource can be a data source, but not a data sink.
 * An AzureBlobStorageData resource represents one Azure container. The storage
 * account determines the [Azure
 * endpoint](https://docs.microsoft.com/en-us/azure/storage/common/storage-create-storage-account#storage-account-endpoints).
 * In an AzureBlobStorageData resource, a blobs's name is the [Azure Blob
 * Storage blob's key
 * name](https://docs.microsoft.com/en-us/rest/api/storageservices/naming-and-referencing-containers--blobs--and-metadata#blob-names).
 *
 * Generated from protobuf message <code>google.storagetransfer.v1.AzureBlobStorageData</code>
 */
class AzureBlobStorageData extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the Azure Storage account.
     *
     * Generated from protobuf field <code>string storage_account = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $storage_account = '';
    /**
     * Required. Input only. Credentials used to authenticate API requests to
     * Azure.
     * For information on our data retention policy for user credentials, see
     * [User credentials](https://cloud.google.com/storage-transfer/docs/data-retention#user-credentials).
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AzureCredentials azure_credentials = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY];</code>
     */
    private $azure_credentials = null;
    /**
     * Required. The container to transfer from the Azure Storage account.
     *
     * Generated from protobuf field <code>string container = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $container = '';
    /**
     * Root path to transfer objects.
     * Must be an empty string or full path name that ends with a '/'. This field
     * is treated as an object prefix. As such, it should generally not begin with
     * a '/'.
     *
     * Generated from protobuf field <code>string path = 5;</code>
     */
    private $path = '';
    /**
     * Optional. The Resource name of a secret in Secret Manager.
     * The Azure SAS token must be stored in Secret Manager in JSON format:
     * <pre>{
     *  "sas_token" : "<var>SAS_TOKEN</var>"
     * }</pre>
     * [GoogleServiceAccount][google.storagetransfer.v1.GoogleServiceAccount] must
     * be granted `roles/secretmanager.secretAccessor` for the resource.
     * See [Configure access to a source: Microsoft Azure Blob Storage]
     * (https://cloud.google.com/storage-transfer/docs/source-microsoft-azure#secret_manager)
     * for more information.
     * If `credentials_secret` is specified, do not specify
     * [azure_credentials][google.storagetransfer.v1.AzureBlobStorageData.azure_credentials].
     * This feature is in
     * [preview](https://cloud.google.com/terms/service-terms#1).
     * Format: `projects/{project_number}/secrets/{secret_name}`
     *
     * Generated from protobuf field <code>string credentials_secret = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $credentials_secret = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $storage_account
     *           Required. The name of the Azure Storage account.
     *     @type \Google\Cloud\StorageTransfer\V1\AzureCredentials $azure_credentials
     *           Required. Input only. Credentials used to authenticate API requests to
     *           Azure.
     *           For information on our data retention policy for user credentials, see
     *           [User credentials](https://cloud.google.com/storage-transfer/docs/data-retention#user-credentials).
     *     @type string $container
     *           Required. The container to transfer from the Azure Storage account.
     *     @type string $path
     *           Root path to transfer objects.
     *           Must be an empty string or full path name that ends with a '/'. This field
     *           is treated as an object prefix. As such, it should generally not begin with
     *           a '/'.
     *     @type string $credentials_secret
     *           Optional. The Resource name of a secret in Secret Manager.
     *           The Azure SAS token must be stored in Secret Manager in JSON format:
     *           <pre>{
     *            "sas_token" : "<var>SAS_TOKEN</var>"
     *           }</pre>
     *           [GoogleServiceAccount][google.storagetransfer.v1.GoogleServiceAccount] must
     *           be granted `roles/secretmanager.secretAccessor` for the resource.
     *           See [Configure access to a source: Microsoft Azure Blob Storage]
     *           (https://cloud.google.com/storage-transfer/docs/source-microsoft-azure#secret_manager)
     *           for more information.
     *           If `credentials_secret` is specified, do not specify
     *           [azure_credentials][google.storagetransfer.v1.AzureBlobStorageData.azure_credentials].
     *           This feature is in
     *           [preview](https://cloud.google.com/terms/service-terms#1).
     *           Format: `projects/{project_number}/secrets/{secret_name}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Storagetransfer\V1\TransferTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the Azure Storage account.
     *
     * Generated from protobuf field <code>string storage_account = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getStorageAccount()
    {
        return $this->storage_account;
    }

    /**
     * Required. The name of the Azure Storage account.
     *
     * Generated from protobuf field <code>string storage_account = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setStorageAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->storage_account = $var;

        return $this;
    }

    /**
     * Required. Input only. Credentials used to authenticate API requests to
     * Azure.
     * For information on our data retention policy for user credentials, see
     * [User credentials](https://cloud.google.com/storage-transfer/docs/data-retention#user-credentials).
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AzureCredentials azure_credentials = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY];</code>
     * @return \Google\Cloud\StorageTransfer\V1\AzureCredentials|null
     */
    public function getAzureCredentials()
    {
        return $this->azure_credentials;
    }

    public function hasAzureCredentials()
    {
        return isset($this->azure_credentials);
    }

    public function clearAzureCredentials()
    {
        unset($this->azure_credentials);
    }

    /**
     * Required. Input only. Credentials used to authenticate API requests to
     * Azure.
     * For information on our data retention policy for user credentials, see
     * [User credentials](https://cloud.google.com/storage-transfer/docs/data-retention#user-credentials).
     *
     * Generated from protobuf field <code>.google.storagetransfer.v1.AzureCredentials azure_credentials = 2 [(.google.api.field_behavior) = REQUIRED, (.google.api.field_behavior) = INPUT_ONLY];</code>
     * @param \Google\Cloud\StorageTransfer\V1\AzureCredentials $var
     * @return $this
     */
    public function setAzureCredentials($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\StorageTransfer\V1\AzureCredentials::class);
        $this->azure_credentials = $var;

        return $this;
    }

    /**
     * Required. The container to transfer from the Azure Storage account.
     *
     * Generated from protobuf field <code>string container = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * Required. The container to transfer from the Azure Storage account.
     *
     * Generated from protobuf field <code>string container = 4 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setContainer($var)
    {
        GPBUtil::checkString($var, True);
        $this->container = $var;

        return $this;
    }

    /**
     * Root path to transfer objects.
     * Must be an empty string or full path name that ends with a '/'. This field
     * is treated as an object prefix. As such, it should generally not begin with
     * a '/'.
     *
     * Generated from protobuf field <code>string path = 5;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Root path to transfer objects.
     * Must be an empty string or full path name that ends with a '/'. This field
     * is treated as an object prefix. As such, it should generally not begin with
     * a '/'.
     *
     * Generated from protobuf field <code>string path = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

    /**
     * Optional. The Resource name of a secret in Secret Manager.
     * The Azure SAS token must be stored in Secret Manager in JSON format:
     * <pre>{
     *  "sas_token" : "<var>SAS_TOKEN</var>"
     * }</pre>
     * [GoogleServiceAccount][google.storagetransfer.v1.GoogleServiceAccount] must
     * be granted `roles/secretmanager.secretAccessor` for the resource.
     * See [Configure access to a source: Microsoft Azure Blob Storage]
     * (https://cloud.google.com/storage-transfer/docs/source-microsoft-azure#secret_manager)
     * for more information.
     * If `credentials_secret` is specified, do not specify
     * [azure_credentials][google.storagetransfer.v1.AzureBlobStorageData.azure_credentials].
     * This feature is in
     * [preview](https://cloud.google.com/terms/service-terms#1).
     * Format: `projects/{project_number}/secrets/{secret_name}`
     *
     * Generated from protobuf field <code>string credentials_secret = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getCredentialsSecret()
    {
        return $this->credentials_secret;
    }

    /**
     * Optional. The Resource name of a secret in Secret Manager.
     * The Azure SAS token must be stored in Secret Manager in JSON format:
     * <pre>{
     *  "sas_token" : "<var>SAS_TOKEN</var>"
     * }</pre>
     * [GoogleServiceAccount][google.storagetransfer.v1.GoogleServiceAccount] must
     * be granted `roles/secretmanager.secretAccessor` for the resource.
     * See [Configure access to a source: Microsoft Azure Blob Storage]
     * (https://cloud.google.com/storage-transfer/docs/source-microsoft-azure#secret_manager)
     * for more information.
     * If `credentials_secret` is specified, do not specify
     * [azure_credentials][google.storagetransfer.v1.AzureBlobStorageData.azure_credentials].
     * This feature is in
     * [preview](https://cloud.google.com/terms/service-terms#1).
     * Format: `projects/{project_number}/secrets/{secret_name}`
     *
     * Generated from protobuf field <code>string credentials_secret = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setCredentialsSecret($var)
    {
        GPBUtil::checkString($var, True);
        $this->credentials_secret = $var;

        return $this;
    }

}

