<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the settings associated with a project, folder, organization,
 * billing account, or flexible resource.
 *
 * Generated from protobuf message <code>google.logging.v2.Settings</code>
 */
class Settings extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The resource name of the settings.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Optional. The resource name for the configured Cloud KMS key.
     * KMS key name format:
     *     "projects/[PROJECT_ID]/locations/[LOCATION]/keyRings/[KEYRING]/cryptoKeys/[KEY]"
     * For example:
     *   `"projects/my-project/locations/us-central1/keyRings/my-ring/cryptoKeys/my-key"`
     * To enable CMEK for the Log Router, set this field to a valid
     * `kms_key_name` for which the associated service account has the required
     * `roles/cloudkms.cryptoKeyEncrypterDecrypter` role assigned for the key.
     * The Cloud KMS key used by the Log Router can be updated by changing the
     * `kms_key_name` to a new valid key name. Encryption operations that are in
     * progress will be completed with the key that was in use when they started.
     * Decryption operations will be completed using the key that was used at the
     * time of encryption unless access to that key has been revoked.
     * To disable CMEK for the Log Router, set this field to an empty string.
     * See [Enabling CMEK for Log
     * Router](https://cloud.google.com/logging/docs/routing/managed-encryption)
     * for more information.
     *
     * Generated from protobuf field <code>string kms_key_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $kms_key_name = '';
    /**
     * Output only. The service account that will be used by the Log Router to
     * access your Cloud KMS key.
     * Before enabling CMEK for Log Router, you must first assign the role
     * `roles/cloudkms.cryptoKeyEncrypterDecrypter` to the service account that
     * the Log Router will use to access your Cloud KMS key. Use
     * [GetSettings][google.logging.v2.ConfigServiceV2.GetSettings] to
     * obtain the service account ID.
     * See [Enabling CMEK for Log
     * Router](https://cloud.google.com/logging/docs/routing/managed-encryption)
     * for more information.
     *
     * Generated from protobuf field <code>string kms_service_account_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $kms_service_account_id = '';
    /**
     * Optional. The Cloud region that will be used for _Default and _Required log
     * buckets for newly created projects and folders. For example `europe-west1`.
     * This setting does not affect the location of custom log buckets.
     *
     * Generated from protobuf field <code>string storage_location = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $storage_location = '';
    /**
     * Optional. If set to true, the _Default sink in newly created projects and
     * folders will created in a disabled state. This can be used to automatically
     * disable log ingestion if there is already an aggregated sink configured in
     * the hierarchy. The _Default sink can be re-enabled manually if needed.
     *
     * Generated from protobuf field <code>bool disable_default_sink = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $disable_default_sink = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The resource name of the settings.
     *     @type string $kms_key_name
     *           Optional. The resource name for the configured Cloud KMS key.
     *           KMS key name format:
     *               "projects/[PROJECT_ID]/locations/[LOCATION]/keyRings/[KEYRING]/cryptoKeys/[KEY]"
     *           For example:
     *             `"projects/my-project/locations/us-central1/keyRings/my-ring/cryptoKeys/my-key"`
     *           To enable CMEK for the Log Router, set this field to a valid
     *           `kms_key_name` for which the associated service account has the required
     *           `roles/cloudkms.cryptoKeyEncrypterDecrypter` role assigned for the key.
     *           The Cloud KMS key used by the Log Router can be updated by changing the
     *           `kms_key_name` to a new valid key name. Encryption operations that are in
     *           progress will be completed with the key that was in use when they started.
     *           Decryption operations will be completed using the key that was used at the
     *           time of encryption unless access to that key has been revoked.
     *           To disable CMEK for the Log Router, set this field to an empty string.
     *           See [Enabling CMEK for Log
     *           Router](https://cloud.google.com/logging/docs/routing/managed-encryption)
     *           for more information.
     *     @type string $kms_service_account_id
     *           Output only. The service account that will be used by the Log Router to
     *           access your Cloud KMS key.
     *           Before enabling CMEK for Log Router, you must first assign the role
     *           `roles/cloudkms.cryptoKeyEncrypterDecrypter` to the service account that
     *           the Log Router will use to access your Cloud KMS key. Use
     *           [GetSettings][google.logging.v2.ConfigServiceV2.GetSettings] to
     *           obtain the service account ID.
     *           See [Enabling CMEK for Log
     *           Router](https://cloud.google.com/logging/docs/routing/managed-encryption)
     *           for more information.
     *     @type string $storage_location
     *           Optional. The Cloud region that will be used for _Default and _Required log
     *           buckets for newly created projects and folders. For example `europe-west1`.
     *           This setting does not affect the location of custom log buckets.
     *     @type bool $disable_default_sink
     *           Optional. If set to true, the _Default sink in newly created projects and
     *           folders will created in a disabled state. This can be used to automatically
     *           disable log ingestion if there is already an aggregated sink configured in
     *           the hierarchy. The _Default sink can be re-enabled manually if needed.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The resource name of the settings.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The resource name of the settings.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. The resource name for the configured Cloud KMS key.
     * KMS key name format:
     *     "projects/[PROJECT_ID]/locations/[LOCATION]/keyRings/[KEYRING]/cryptoKeys/[KEY]"
     * For example:
     *   `"projects/my-project/locations/us-central1/keyRings/my-ring/cryptoKeys/my-key"`
     * To enable CMEK for the Log Router, set this field to a valid
     * `kms_key_name` for which the associated service account has the required
     * `roles/cloudkms.cryptoKeyEncrypterDecrypter` role assigned for the key.
     * The Cloud KMS key used by the Log Router can be updated by changing the
     * `kms_key_name` to a new valid key name. Encryption operations that are in
     * progress will be completed with the key that was in use when they started.
     * Decryption operations will be completed using the key that was used at the
     * time of encryption unless access to that key has been revoked.
     * To disable CMEK for the Log Router, set this field to an empty string.
     * See [Enabling CMEK for Log
     * Router](https://cloud.google.com/logging/docs/routing/managed-encryption)
     * for more information.
     *
     * Generated from protobuf field <code>string kms_key_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * Optional. The resource name for the configured Cloud KMS key.
     * KMS key name format:
     *     "projects/[PROJECT_ID]/locations/[LOCATION]/keyRings/[KEYRING]/cryptoKeys/[KEY]"
     * For example:
     *   `"projects/my-project/locations/us-central1/keyRings/my-ring/cryptoKeys/my-key"`
     * To enable CMEK for the Log Router, set this field to a valid
     * `kms_key_name` for which the associated service account has the required
     * `roles/cloudkms.cryptoKeyEncrypterDecrypter` role assigned for the key.
     * The Cloud KMS key used by the Log Router can be updated by changing the
     * `kms_key_name` to a new valid key name. Encryption operations that are in
     * progress will be completed with the key that was in use when they started.
     * Decryption operations will be completed using the key that was used at the
     * time of encryption unless access to that key has been revoked.
     * To disable CMEK for the Log Router, set this field to an empty string.
     * See [Enabling CMEK for Log
     * Router](https://cloud.google.com/logging/docs/routing/managed-encryption)
     * for more information.
     *
     * Generated from protobuf field <code>string kms_key_name = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

    /**
     * Output only. The service account that will be used by the Log Router to
     * access your Cloud KMS key.
     * Before enabling CMEK for Log Router, you must first assign the role
     * `roles/cloudkms.cryptoKeyEncrypterDecrypter` to the service account that
     * the Log Router will use to access your Cloud KMS key. Use
     * [GetSettings][google.logging.v2.ConfigServiceV2.GetSettings] to
     * obtain the service account ID.
     * See [Enabling CMEK for Log
     * Router](https://cloud.google.com/logging/docs/routing/managed-encryption)
     * for more information.
     *
     * Generated from protobuf field <code>string kms_service_account_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getKmsServiceAccountId()
    {
        return $this->kms_service_account_id;
    }

    /**
     * Output only. The service account that will be used by the Log Router to
     * access your Cloud KMS key.
     * Before enabling CMEK for Log Router, you must first assign the role
     * `roles/cloudkms.cryptoKeyEncrypterDecrypter` to the service account that
     * the Log Router will use to access your Cloud KMS key. Use
     * [GetSettings][google.logging.v2.ConfigServiceV2.GetSettings] to
     * obtain the service account ID.
     * See [Enabling CMEK for Log
     * Router](https://cloud.google.com/logging/docs/routing/managed-encryption)
     * for more information.
     *
     * Generated from protobuf field <code>string kms_service_account_id = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setKmsServiceAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_service_account_id = $var;

        return $this;
    }

    /**
     * Optional. The Cloud region that will be used for _Default and _Required log
     * buckets for newly created projects and folders. For example `europe-west1`.
     * This setting does not affect the location of custom log buckets.
     *
     * Generated from protobuf field <code>string storage_location = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getStorageLocation()
    {
        return $this->storage_location;
    }

    /**
     * Optional. The Cloud region that will be used for _Default and _Required log
     * buckets for newly created projects and folders. For example `europe-west1`.
     * This setting does not affect the location of custom log buckets.
     *
     * Generated from protobuf field <code>string storage_location = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setStorageLocation($var)
    {
        GPBUtil::checkString($var, True);
        $this->storage_location = $var;

        return $this;
    }

    /**
     * Optional. If set to true, the _Default sink in newly created projects and
     * folders will created in a disabled state. This can be used to automatically
     * disable log ingestion if there is already an aggregated sink configured in
     * the hierarchy. The _Default sink can be re-enabled manually if needed.
     *
     * Generated from protobuf field <code>bool disable_default_sink = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getDisableDefaultSink()
    {
        return $this->disable_default_sink;
    }

    /**
     * Optional. If set to true, the _Default sink in newly created projects and
     * folders will created in a disabled state. This can be used to automatically
     * disable log ingestion if there is already an aggregated sink configured in
     * the hierarchy. The _Default sink can be re-enabled manually if needed.
     *
     * Generated from protobuf field <code>bool disable_default_sink = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableDefaultSink($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_default_sink = $var;

        return $this;
    }

}

