<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/cloudbuild/v1/cloudbuild.proto

namespace Google\Cloud\Build\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A step in the build pipeline.
 *
 * Generated from protobuf message <code>google.devtools.cloudbuild.v1.BuildStep</code>
 */
class BuildStep extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name of the container image that will run this particular
     * build step.
     * If the image is available in the host's Docker daemon's cache, it
     * will be run directly. If not, the host will attempt to pull the image
     * first, using the builder service account's credentials if necessary.
     * The Docker daemon's cache will already have the latest versions of all of
     * the officially supported build steps
     * ([https://github.com/GoogleCloudPlatform/cloud-builders](https://github.com/GoogleCloudPlatform/cloud-builders)).
     * The Docker daemon will also have cached many of the layers for some popular
     * images, like "ubuntu", "debian", but they will be refreshed at the time you
     * attempt to use them.
     * If you built an image in a previous build step, it will be stored in the
     * host's Docker daemon's cache and is available to use as the name for a
     * later build step.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * A list of environment variable definitions to be used when running a step.
     * The elements are of the form "KEY=VALUE" for the environment variable "KEY"
     * being given the value "VALUE".
     *
     * Generated from protobuf field <code>repeated string env = 2;</code>
     */
    private $env;
    /**
     * A list of arguments that will be presented to the step when it is started.
     * If the image used to run the step's container has an entrypoint, the `args`
     * are used as arguments to that entrypoint. If the image does not define
     * an entrypoint, the first element in args is used as the entrypoint,
     * and the remainder will be used as arguments.
     *
     * Generated from protobuf field <code>repeated string args = 3;</code>
     */
    private $args;
    /**
     * Working directory to use when running this step's container.
     * If this value is a relative path, it is relative to the build's working
     * directory. If this value is absolute, it may be outside the build's working
     * directory, in which case the contents of the path may not be persisted
     * across build step executions, unless a `volume` for that path is specified.
     * If the build specifies a `RepoSource` with `dir` and a step with a `dir`,
     * which specifies an absolute path, the `RepoSource` `dir` is ignored for
     * the step's execution.
     *
     * Generated from protobuf field <code>string dir = 4;</code>
     */
    private $dir = '';
    /**
     * Unique identifier for this build step, used in `wait_for` to
     * reference this build step as a dependency.
     *
     * Generated from protobuf field <code>string id = 5;</code>
     */
    private $id = '';
    /**
     * The ID(s) of the step(s) that this build step depends on.
     * This build step will not start until all the build steps in `wait_for`
     * have completed successfully. If `wait_for` is empty, this build step will
     * start when all previous build steps in the `Build.Steps` list have
     * completed successfully.
     *
     * Generated from protobuf field <code>repeated string wait_for = 6;</code>
     */
    private $wait_for;
    /**
     * Entrypoint to be used instead of the build step image's default entrypoint.
     * If unset, the image's default entrypoint is used.
     *
     * Generated from protobuf field <code>string entrypoint = 7;</code>
     */
    private $entrypoint = '';
    /**
     * A list of environment variables which are encrypted using a Cloud Key
     * Management Service crypto key. These values must be specified in the
     * build's `Secret`.
     *
     * Generated from protobuf field <code>repeated string secret_env = 8;</code>
     */
    private $secret_env;
    /**
     * List of volumes to mount into the build step.
     * Each volume is created as an empty volume prior to execution of the
     * build step. Upon completion of the build, volumes and their contents are
     * discarded.
     * Using a named volume in only one step is not valid as it is indicative
     * of a build request with an incorrect configuration.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.Volume volumes = 9;</code>
     */
    private $volumes;
    /**
     * Output only. Stores timing information for executing this build step.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.TimeSpan timing = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $timing = null;
    /**
     * Output only. Stores timing information for pulling this build step's
     * builder image only.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.TimeSpan pull_timing = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $pull_timing = null;
    /**
     * Time limit for executing this build step. If not defined, the step has no
     * time limit and will be allowed to continue to run until either it completes
     * or the build itself times out.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 11;</code>
     */
    private $timeout = null;
    /**
     * Output only. Status of the build step. At this time, build step status is
     * only updated on build completion; step status is not updated in real-time
     * as the build progresses.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build.Status status = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $status = 0;
    /**
     * Allow this build step to fail without failing the entire build.
     * If false, the entire build will fail if this step fails. Otherwise, the
     * build will succeed, but this step will still have a failure status.
     * Error information will be reported in the failure_detail field.
     *
     * Generated from protobuf field <code>bool allow_failure = 14;</code>
     */
    private $allow_failure = false;
    /**
     * Output only. Return code from running the step.
     *
     * Generated from protobuf field <code>int32 exit_code = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $exit_code = 0;
    /**
     * Allow this build step to fail without failing the entire build if and
     * only if the exit code is one of the specified codes. If allow_failure
     * is also specified, this field will take precedence.
     *
     * Generated from protobuf field <code>repeated int32 allow_exit_codes = 18;</code>
     */
    private $allow_exit_codes;
    /**
     * A shell script to be executed in the step.
     * When script is provided, the user cannot specify the entrypoint or args.
     *
     * Generated from protobuf field <code>string script = 19;</code>
     */
    private $script = '';
    /**
     * Option to include built-in and custom substitutions as env variables
     * for this build step. This option will override the global option
     * in BuildOption.
     *
     * Generated from protobuf field <code>optional bool automap_substitutions = 20;</code>
     */
    private $automap_substitutions = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name of the container image that will run this particular
     *           build step.
     *           If the image is available in the host's Docker daemon's cache, it
     *           will be run directly. If not, the host will attempt to pull the image
     *           first, using the builder service account's credentials if necessary.
     *           The Docker daemon's cache will already have the latest versions of all of
     *           the officially supported build steps
     *           ([https://github.com/GoogleCloudPlatform/cloud-builders](https://github.com/GoogleCloudPlatform/cloud-builders)).
     *           The Docker daemon will also have cached many of the layers for some popular
     *           images, like "ubuntu", "debian", but they will be refreshed at the time you
     *           attempt to use them.
     *           If you built an image in a previous build step, it will be stored in the
     *           host's Docker daemon's cache and is available to use as the name for a
     *           later build step.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $env
     *           A list of environment variable definitions to be used when running a step.
     *           The elements are of the form "KEY=VALUE" for the environment variable "KEY"
     *           being given the value "VALUE".
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $args
     *           A list of arguments that will be presented to the step when it is started.
     *           If the image used to run the step's container has an entrypoint, the `args`
     *           are used as arguments to that entrypoint. If the image does not define
     *           an entrypoint, the first element in args is used as the entrypoint,
     *           and the remainder will be used as arguments.
     *     @type string $dir
     *           Working directory to use when running this step's container.
     *           If this value is a relative path, it is relative to the build's working
     *           directory. If this value is absolute, it may be outside the build's working
     *           directory, in which case the contents of the path may not be persisted
     *           across build step executions, unless a `volume` for that path is specified.
     *           If the build specifies a `RepoSource` with `dir` and a step with a `dir`,
     *           which specifies an absolute path, the `RepoSource` `dir` is ignored for
     *           the step's execution.
     *     @type string $id
     *           Unique identifier for this build step, used in `wait_for` to
     *           reference this build step as a dependency.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $wait_for
     *           The ID(s) of the step(s) that this build step depends on.
     *           This build step will not start until all the build steps in `wait_for`
     *           have completed successfully. If `wait_for` is empty, this build step will
     *           start when all previous build steps in the `Build.Steps` list have
     *           completed successfully.
     *     @type string $entrypoint
     *           Entrypoint to be used instead of the build step image's default entrypoint.
     *           If unset, the image's default entrypoint is used.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $secret_env
     *           A list of environment variables which are encrypted using a Cloud Key
     *           Management Service crypto key. These values must be specified in the
     *           build's `Secret`.
     *     @type array<\Google\Cloud\Build\V1\Volume>|\Google\Protobuf\Internal\RepeatedField $volumes
     *           List of volumes to mount into the build step.
     *           Each volume is created as an empty volume prior to execution of the
     *           build step. Upon completion of the build, volumes and their contents are
     *           discarded.
     *           Using a named volume in only one step is not valid as it is indicative
     *           of a build request with an incorrect configuration.
     *     @type \Google\Cloud\Build\V1\TimeSpan $timing
     *           Output only. Stores timing information for executing this build step.
     *     @type \Google\Cloud\Build\V1\TimeSpan $pull_timing
     *           Output only. Stores timing information for pulling this build step's
     *           builder image only.
     *     @type \Google\Protobuf\Duration $timeout
     *           Time limit for executing this build step. If not defined, the step has no
     *           time limit and will be allowed to continue to run until either it completes
     *           or the build itself times out.
     *     @type int $status
     *           Output only. Status of the build step. At this time, build step status is
     *           only updated on build completion; step status is not updated in real-time
     *           as the build progresses.
     *     @type bool $allow_failure
     *           Allow this build step to fail without failing the entire build.
     *           If false, the entire build will fail if this step fails. Otherwise, the
     *           build will succeed, but this step will still have a failure status.
     *           Error information will be reported in the failure_detail field.
     *     @type int $exit_code
     *           Output only. Return code from running the step.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $allow_exit_codes
     *           Allow this build step to fail without failing the entire build if and
     *           only if the exit code is one of the specified codes. If allow_failure
     *           is also specified, this field will take precedence.
     *     @type string $script
     *           A shell script to be executed in the step.
     *           When script is provided, the user cannot specify the entrypoint or args.
     *     @type bool $automap_substitutions
     *           Option to include built-in and custom substitutions as env variables
     *           for this build step. This option will override the global option
     *           in BuildOption.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Devtools\Cloudbuild\V1\Cloudbuild::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name of the container image that will run this particular
     * build step.
     * If the image is available in the host's Docker daemon's cache, it
     * will be run directly. If not, the host will attempt to pull the image
     * first, using the builder service account's credentials if necessary.
     * The Docker daemon's cache will already have the latest versions of all of
     * the officially supported build steps
     * ([https://github.com/GoogleCloudPlatform/cloud-builders](https://github.com/GoogleCloudPlatform/cloud-builders)).
     * The Docker daemon will also have cached many of the layers for some popular
     * images, like "ubuntu", "debian", but they will be refreshed at the time you
     * attempt to use them.
     * If you built an image in a previous build step, it will be stored in the
     * host's Docker daemon's cache and is available to use as the name for a
     * later build step.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the container image that will run this particular
     * build step.
     * If the image is available in the host's Docker daemon's cache, it
     * will be run directly. If not, the host will attempt to pull the image
     * first, using the builder service account's credentials if necessary.
     * The Docker daemon's cache will already have the latest versions of all of
     * the officially supported build steps
     * ([https://github.com/GoogleCloudPlatform/cloud-builders](https://github.com/GoogleCloudPlatform/cloud-builders)).
     * The Docker daemon will also have cached many of the layers for some popular
     * images, like "ubuntu", "debian", but they will be refreshed at the time you
     * attempt to use them.
     * If you built an image in a previous build step, it will be stored in the
     * host's Docker daemon's cache and is available to use as the name for a
     * later build step.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * A list of environment variable definitions to be used when running a step.
     * The elements are of the form "KEY=VALUE" for the environment variable "KEY"
     * being given the value "VALUE".
     *
     * Generated from protobuf field <code>repeated string env = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * A list of environment variable definitions to be used when running a step.
     * The elements are of the form "KEY=VALUE" for the environment variable "KEY"
     * being given the value "VALUE".
     *
     * Generated from protobuf field <code>repeated string env = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEnv($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->env = $arr;

        return $this;
    }

    /**
     * A list of arguments that will be presented to the step when it is started.
     * If the image used to run the step's container has an entrypoint, the `args`
     * are used as arguments to that entrypoint. If the image does not define
     * an entrypoint, the first element in args is used as the entrypoint,
     * and the remainder will be used as arguments.
     *
     * Generated from protobuf field <code>repeated string args = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * A list of arguments that will be presented to the step when it is started.
     * If the image used to run the step's container has an entrypoint, the `args`
     * are used as arguments to that entrypoint. If the image does not define
     * an entrypoint, the first element in args is used as the entrypoint,
     * and the remainder will be used as arguments.
     *
     * Generated from protobuf field <code>repeated string args = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArgs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->args = $arr;

        return $this;
    }

    /**
     * Working directory to use when running this step's container.
     * If this value is a relative path, it is relative to the build's working
     * directory. If this value is absolute, it may be outside the build's working
     * directory, in which case the contents of the path may not be persisted
     * across build step executions, unless a `volume` for that path is specified.
     * If the build specifies a `RepoSource` with `dir` and a step with a `dir`,
     * which specifies an absolute path, the `RepoSource` `dir` is ignored for
     * the step's execution.
     *
     * Generated from protobuf field <code>string dir = 4;</code>
     * @return string
     */
    public function getDir()
    {
        return $this->dir;
    }

    /**
     * Working directory to use when running this step's container.
     * If this value is a relative path, it is relative to the build's working
     * directory. If this value is absolute, it may be outside the build's working
     * directory, in which case the contents of the path may not be persisted
     * across build step executions, unless a `volume` for that path is specified.
     * If the build specifies a `RepoSource` with `dir` and a step with a `dir`,
     * which specifies an absolute path, the `RepoSource` `dir` is ignored for
     * the step's execution.
     *
     * Generated from protobuf field <code>string dir = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDir($var)
    {
        GPBUtil::checkString($var, True);
        $this->dir = $var;

        return $this;
    }

    /**
     * Unique identifier for this build step, used in `wait_for` to
     * reference this build step as a dependency.
     *
     * Generated from protobuf field <code>string id = 5;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Unique identifier for this build step, used in `wait_for` to
     * reference this build step as a dependency.
     *
     * Generated from protobuf field <code>string id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * The ID(s) of the step(s) that this build step depends on.
     * This build step will not start until all the build steps in `wait_for`
     * have completed successfully. If `wait_for` is empty, this build step will
     * start when all previous build steps in the `Build.Steps` list have
     * completed successfully.
     *
     * Generated from protobuf field <code>repeated string wait_for = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWaitFor()
    {
        return $this->wait_for;
    }

    /**
     * The ID(s) of the step(s) that this build step depends on.
     * This build step will not start until all the build steps in `wait_for`
     * have completed successfully. If `wait_for` is empty, this build step will
     * start when all previous build steps in the `Build.Steps` list have
     * completed successfully.
     *
     * Generated from protobuf field <code>repeated string wait_for = 6;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWaitFor($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->wait_for = $arr;

        return $this;
    }

    /**
     * Entrypoint to be used instead of the build step image's default entrypoint.
     * If unset, the image's default entrypoint is used.
     *
     * Generated from protobuf field <code>string entrypoint = 7;</code>
     * @return string
     */
    public function getEntrypoint()
    {
        return $this->entrypoint;
    }

    /**
     * Entrypoint to be used instead of the build step image's default entrypoint.
     * If unset, the image's default entrypoint is used.
     *
     * Generated from protobuf field <code>string entrypoint = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setEntrypoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->entrypoint = $var;

        return $this;
    }

    /**
     * A list of environment variables which are encrypted using a Cloud Key
     * Management Service crypto key. These values must be specified in the
     * build's `Secret`.
     *
     * Generated from protobuf field <code>repeated string secret_env = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSecretEnv()
    {
        return $this->secret_env;
    }

    /**
     * A list of environment variables which are encrypted using a Cloud Key
     * Management Service crypto key. These values must be specified in the
     * build's `Secret`.
     *
     * Generated from protobuf field <code>repeated string secret_env = 8;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSecretEnv($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->secret_env = $arr;

        return $this;
    }

    /**
     * List of volumes to mount into the build step.
     * Each volume is created as an empty volume prior to execution of the
     * build step. Upon completion of the build, volumes and their contents are
     * discarded.
     * Using a named volume in only one step is not valid as it is indicative
     * of a build request with an incorrect configuration.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.Volume volumes = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVolumes()
    {
        return $this->volumes;
    }

    /**
     * List of volumes to mount into the build step.
     * Each volume is created as an empty volume prior to execution of the
     * build step. Upon completion of the build, volumes and their contents are
     * discarded.
     * Using a named volume in only one step is not valid as it is indicative
     * of a build request with an incorrect configuration.
     *
     * Generated from protobuf field <code>repeated .google.devtools.cloudbuild.v1.Volume volumes = 9;</code>
     * @param array<\Google\Cloud\Build\V1\Volume>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVolumes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Build\V1\Volume::class);
        $this->volumes = $arr;

        return $this;
    }

    /**
     * Output only. Stores timing information for executing this build step.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.TimeSpan timing = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Build\V1\TimeSpan|null
     */
    public function getTiming()
    {
        return $this->timing;
    }

    public function hasTiming()
    {
        return isset($this->timing);
    }

    public function clearTiming()
    {
        unset($this->timing);
    }

    /**
     * Output only. Stores timing information for executing this build step.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.TimeSpan timing = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Build\V1\TimeSpan $var
     * @return $this
     */
    public function setTiming($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V1\TimeSpan::class);
        $this->timing = $var;

        return $this;
    }

    /**
     * Output only. Stores timing information for pulling this build step's
     * builder image only.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.TimeSpan pull_timing = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Build\V1\TimeSpan|null
     */
    public function getPullTiming()
    {
        return $this->pull_timing;
    }

    public function hasPullTiming()
    {
        return isset($this->pull_timing);
    }

    public function clearPullTiming()
    {
        unset($this->pull_timing);
    }

    /**
     * Output only. Stores timing information for pulling this build step's
     * builder image only.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.TimeSpan pull_timing = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Build\V1\TimeSpan $var
     * @return $this
     */
    public function setPullTiming($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Build\V1\TimeSpan::class);
        $this->pull_timing = $var;

        return $this;
    }

    /**
     * Time limit for executing this build step. If not defined, the step has no
     * time limit and will be allowed to continue to run until either it completes
     * or the build itself times out.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 11;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    public function hasTimeout()
    {
        return isset($this->timeout);
    }

    public function clearTimeout()
    {
        unset($this->timeout);
    }

    /**
     * Time limit for executing this build step. If not defined, the step has no
     * time limit and will be allowed to continue to run until either it completes
     * or the build itself times out.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 11;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->timeout = $var;

        return $this;
    }

    /**
     * Output only. Status of the build step. At this time, build step status is
     * only updated on build completion; step status is not updated in real-time
     * as the build progresses.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build.Status status = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Output only. Status of the build step. At this time, build step status is
     * only updated on build completion; step status is not updated in real-time
     * as the build progresses.
     *
     * Generated from protobuf field <code>.google.devtools.cloudbuild.v1.Build.Status status = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Build\V1\Build\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Allow this build step to fail without failing the entire build.
     * If false, the entire build will fail if this step fails. Otherwise, the
     * build will succeed, but this step will still have a failure status.
     * Error information will be reported in the failure_detail field.
     *
     * Generated from protobuf field <code>bool allow_failure = 14;</code>
     * @return bool
     */
    public function getAllowFailure()
    {
        return $this->allow_failure;
    }

    /**
     * Allow this build step to fail without failing the entire build.
     * If false, the entire build will fail if this step fails. Otherwise, the
     * build will succeed, but this step will still have a failure status.
     * Error information will be reported in the failure_detail field.
     *
     * Generated from protobuf field <code>bool allow_failure = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowFailure($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_failure = $var;

        return $this;
    }

    /**
     * Output only. Return code from running the step.
     *
     * Generated from protobuf field <code>int32 exit_code = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getExitCode()
    {
        return $this->exit_code;
    }

    /**
     * Output only. Return code from running the step.
     *
     * Generated from protobuf field <code>int32 exit_code = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setExitCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->exit_code = $var;

        return $this;
    }

    /**
     * Allow this build step to fail without failing the entire build if and
     * only if the exit code is one of the specified codes. If allow_failure
     * is also specified, this field will take precedence.
     *
     * Generated from protobuf field <code>repeated int32 allow_exit_codes = 18;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAllowExitCodes()
    {
        return $this->allow_exit_codes;
    }

    /**
     * Allow this build step to fail without failing the entire build if and
     * only if the exit code is one of the specified codes. If allow_failure
     * is also specified, this field will take precedence.
     *
     * Generated from protobuf field <code>repeated int32 allow_exit_codes = 18;</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAllowExitCodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->allow_exit_codes = $arr;

        return $this;
    }

    /**
     * A shell script to be executed in the step.
     * When script is provided, the user cannot specify the entrypoint or args.
     *
     * Generated from protobuf field <code>string script = 19;</code>
     * @return string
     */
    public function getScript()
    {
        return $this->script;
    }

    /**
     * A shell script to be executed in the step.
     * When script is provided, the user cannot specify the entrypoint or args.
     *
     * Generated from protobuf field <code>string script = 19;</code>
     * @param string $var
     * @return $this
     */
    public function setScript($var)
    {
        GPBUtil::checkString($var, True);
        $this->script = $var;

        return $this;
    }

    /**
     * Option to include built-in and custom substitutions as env variables
     * for this build step. This option will override the global option
     * in BuildOption.
     *
     * Generated from protobuf field <code>optional bool automap_substitutions = 20;</code>
     * @return bool
     */
    public function getAutomapSubstitutions()
    {
        return isset($this->automap_substitutions) ? $this->automap_substitutions : false;
    }

    public function hasAutomapSubstitutions()
    {
        return isset($this->automap_substitutions);
    }

    public function clearAutomapSubstitutions()
    {
        unset($this->automap_substitutions);
    }

    /**
     * Option to include built-in and custom substitutions as env variables
     * for this build step. This option will override the global option
     * in BuildOption.
     *
     * Generated from protobuf field <code>optional bool automap_substitutions = 20;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutomapSubstitutions($var)
    {
        GPBUtil::checkBool($var);
        $this->automap_substitutions = $var;

        return $this;
    }

}

