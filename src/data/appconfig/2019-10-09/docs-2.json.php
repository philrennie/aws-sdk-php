<?php
// This file was auto-generated from sdk-root/src/data/appconfig/2019-10-09/docs-2.json
return [ 'version' => '2.0', 'service' => '<fullname>AWS AppConfig</fullname> <p>Use AWS AppConfig, a capability of AWS Systems Manager, to create, manage, and quickly deploy application configurations. AppConfig supports controlled deployments to applications of any size and includes built-in validation checks and monitoring. You can use AppConfig with applications hosted on Amazon EC2 instances, AWS Lambda, containers, mobile applications, or IoT devices.</p> <p>To prevent errors when deploying application configurations, especially for production systems where a simple typo could cause an unexpected outage, AppConfig includes validators. A validator provides a syntactic or semantic check to ensure that the configuration you want to deploy works as intended. To validate your application configuration data, you provide a schema or a Lambda function that runs against the configuration. The configuration deployment or update can only proceed when the configuration data is valid.</p> <p>During a configuration deployment, AppConfig monitors the application to ensure that the deployment is successful. If the system encounters an error, AppConfig rolls back the change to minimize impact for your application users. You can configure a deployment strategy for each application or environment that includes deployment criteria, including velocity, bake time, and alarms to monitor. Similar to error monitoring, if a deployment triggers an alarm, AppConfig automatically rolls back to the previous version. </p> <p>AppConfig supports multiple use cases. Here are some examples.</p> <ul> <li> <p> <b>Application tuning</b>: Use AppConfig to carefully introduce changes to your application that can only be tested with production traffic.</p> </li> <li> <p> <b>Feature toggle</b>: Use AppConfig to turn on new features that require a timely deployment, such as a product launch or announcement. </p> </li> <li> <p> <b>User membership</b>: Use AppConfig to allow premium subscribers to access paid content. </p> </li> <li> <p> <b>Operational issues</b>: Use AppConfig to reduce stress on your application when a dependency or other external factor impacts the system.</p> </li> </ul> <p>This reference is intended to be used with the <a href="http://docs.aws.amazon.com/systems-manager/latest/userguide/appconfig.html">AWS AppConfig User Guide</a>.</p>', 'operations' => [ 'CreateApplication' => '<p>An application in AppConfig is a logical unit of code that provides capabilities for your customers. For example, an application can be a microservice that runs on Amazon EC2 instances, a mobile application installed by your users, a serverless application using Amazon API Gateway and AWS Lambda, or any system you run on behalf of others.</p>', 'CreateConfigurationProfile' => '<p>Information that enables AppConfig to access the configuration source. Valid configuration sources include Systems Manager (SSM) documents, SSM Parameter Store parameters, and Amazon S3 objects. A configuration profile includes the following information.</p> <ul> <li> <p>The Uri location of the configuration data.</p> </li> <li> <p>The AWS Identity and Access Management (IAM) role that provides access to the configuration data.</p> </li> <li> <p>A validator for the configuration data. Available validators include either a JSON Schema or an AWS Lambda function.</p> </li> </ul> <p>For more information, see <a href="http://docs.aws.amazon.com/systems-manager/latest/userguide/appconfig-creating-configuration-and-profile.html">Create a Configuration and a Configuration Profile</a> in the <i>AWS AppConfig User Guide</i>.</p>', 'CreateDeploymentStrategy' => '<p>A deployment strategy defines important criteria for rolling out your configuration to the designated targets. A deployment strategy includes: the overall duration required, a percentage of targets to receive the deployment during each interval, an algorithm that defines how percentage grows, and bake time.</p>', 'CreateEnvironment' => '<p>For each application, you define one or more environments. An environment is a logical deployment group of AppConfig targets, such as applications in a <code>Beta</code> or <code>Production</code> environment. You can also define environments for application subcomponents such as the <code>Web</code>, <code>Mobile</code> and <code>Back-end</code> components for your application. You can configure Amazon CloudWatch alarms for each environment. The system monitors alarms during a configuration deployment. If an alarm is triggered, the system rolls back the configuration.</p>', 'DeleteApplication' => '<p>Delete an application. Deleting an application does not delete a configuration from a host.</p>', 'DeleteConfigurationProfile' => '<p>Delete a configuration profile. Deleting a configuration profile does not delete a configuration from a host.</p>', 'DeleteDeploymentStrategy' => '<p>Delete a deployment strategy. Deleting a deployment strategy does not delete a configuration from a host.</p>', 'DeleteEnvironment' => '<p>Delete an environment. Deleting an environment does not delete a configuration from a host.</p>', 'GetApplication' => '<p>Retrieve information about an application.</p>', 'GetConfiguration' => '<p>Retrieve information about a configuration.</p>', 'GetConfigurationProfile' => '<p>Retrieve information about a configuration profile.</p>', 'GetDeployment' => '<p>Retrieve information about a configuration deployment.</p>', 'GetDeploymentStrategy' => '<p>Retrieve information about a deployment strategy. A deployment strategy defines important criteria for rolling out your configuration to the designated targets. A deployment strategy includes: the overall duration required, a percentage of targets to receive the deployment during each interval, an algorithm that defines how percentage grows, and bake time.</p>', 'GetEnvironment' => '<p>Retrieve information about an environment. An environment is a logical deployment group of AppConfig applications, such as applications in a <code>Production</code> environment or in an <code>EU_Region</code> environment. Each configuration deployment targets an environment. You can enable one or more Amazon CloudWatch alarms for an environment. If an alarm is triggered during a deployment, AppConfig roles back the configuration.</p>', 'ListApplications' => '<p>List all applications in your AWS account.</p>', 'ListConfigurationProfiles' => '<p>Lists the configuration profiles for an application.</p>', 'ListDeploymentStrategies' => '<p>List deployment strategies.</p>', 'ListDeployments' => '<p>Lists the deployments for an environment.</p>', 'ListEnvironments' => '<p>List the environments for an application.</p>', 'ListTagsForResource' => '<p>Retrieves the list of key-value tags assigned to the resource.</p>', 'StartDeployment' => '<p>Starts a deployment.</p>', 'StopDeployment' => '<p>Stops a deployment. This API action works only on deployments that have a status of <code>DEPLOYING</code>. This action moves the deployment to a status of <code>ROLLED_BACK</code>.</p>', 'TagResource' => '<p>Metadata to assign to an AppConfig resource. Tags help organize and categorize your AppConfig resources. Each tag consists of a key and an optional value, both of which you define. You can specify a maximum of 50 tags for a resource.</p>', 'UntagResource' => '<p>Deletes a tag key and value from an AppConfig resource.</p>', 'UpdateApplication' => '<p>Updates an application.</p>', 'UpdateConfigurationProfile' => '<p>Updates a configuration profile.</p>', 'UpdateDeploymentStrategy' => '<p>Updates a deployment strategy.</p>', 'UpdateEnvironment' => '<p>Updates an environment.</p>', 'ValidateConfiguration' => '<p>Uses the validators in a configuration profile to validate a configuration.</p>', ], 'shapes' => [ 'Application' => [ 'base' => NULL, 'refs' => [ 'ApplicationList$member' => NULL, ], ], 'ApplicationList' => [ 'base' => NULL, 'refs' => [ 'Applications$Items' => '<p>The elements from this collection.</p>', ], ], 'Applications' => [ 'base' => NULL, 'refs' => [], ], 'Arn' => [ 'base' => NULL, 'refs' => [ 'ConfigurationProfile$RetrievalRoleArn' => '<p>The ARN of an IAM role with permission to access the configuration at the specified LocationUri.</p>', 'CreateConfigurationProfileRequest$RetrievalRoleArn' => '<p>The ARN of an IAM role with permission to access the configuration at the specified LocationUri.</p>', 'ListTagsForResourceRequest$ResourceArn' => '<p>The resource ARN.</p>', 'Monitor$AlarmArn' => '<p>ARN of the Amazon CloudWatch alarm.</p>', 'Monitor$AlarmRoleArn' => '<p>ARN of an IAM role for AppConfig to monitor <code>AlarmArn</code>.</p>', 'TagResourceRequest$ResourceArn' => '<p>The ARN of the resource for which to retrieve tags.</p>', 'UntagResourceRequest$ResourceArn' => '<p>The ARN of the resource for which to remove tags.</p>', 'UpdateConfigurationProfileRequest$RetrievalRoleArn' => '<p>The ARN of an IAM role with permission to access the configuration at the specified LocationUri.</p>', ], ], 'BadRequestException' => [ 'base' => '<p>The input fails to satisfy the constraints specified by an AWS service.</p>', 'refs' => [], ], 'Blob' => [ 'base' => NULL, 'refs' => [ 'Configuration$Content' => '<p>The content of the configuration or the configuration data.</p>', ], ], 'Configuration' => [ 'base' => NULL, 'refs' => [], ], 'ConfigurationProfile' => [ 'base' => NULL, 'refs' => [], ], 'ConfigurationProfileSummary' => [ 'base' => '<p>A summary of a configuration profile.</p>', 'refs' => [ 'ConfigurationProfileSummaryList$member' => NULL, ], ], 'ConfigurationProfileSummaryList' => [ 'base' => NULL, 'refs' => [ 'ConfigurationProfiles$Items' => '<p>The elements from this collection.</p>', ], ], 'ConfigurationProfiles' => [ 'base' => NULL, 'refs' => [], ], 'ConflictException' => [ 'base' => '<p>The request could not be processed because of conflict in the current state of the resource.</p>', 'refs' => [], ], 'CreateApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateConfigurationProfileRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateDeploymentStrategyRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateEnvironmentRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteConfigurationProfileRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteDeploymentStrategyRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteEnvironmentRequest' => [ 'base' => NULL, 'refs' => [], ], 'Deployment' => [ 'base' => NULL, 'refs' => [], ], 'DeploymentEvent' => [ 'base' => '<p>An object that describes a deployment event.</p>', 'refs' => [ 'DeploymentEvents$member' => NULL, ], ], 'DeploymentEventType' => [ 'base' => NULL, 'refs' => [ 'DeploymentEvent$EventType' => '<p>The type of deployment event. Deployment event types include the start, stop, or completion of a deployment; a percentage update; the start or stop of a bake period; the start or completion of a rollback.</p>', ], ], 'DeploymentEvents' => [ 'base' => NULL, 'refs' => [ 'Deployment$EventLog' => '<p>A list containing all events related to a deployment. The most recent events are displayed first.</p>', ], ], 'DeploymentList' => [ 'base' => NULL, 'refs' => [ 'Deployments$Items' => '<p>The elements from this collection.</p>', ], ], 'DeploymentState' => [ 'base' => NULL, 'refs' => [ 'Deployment$State' => '<p>The state of the deployment.</p>', 'DeploymentSummary$State' => '<p>The state of the deployment.</p>', ], ], 'DeploymentStrategies' => [ 'base' => NULL, 'refs' => [], ], 'DeploymentStrategy' => [ 'base' => NULL, 'refs' => [ 'DeploymentStrategyList$member' => NULL, ], ], 'DeploymentStrategyId' => [ 'base' => NULL, 'refs' => [ 'DeleteDeploymentStrategyRequest$DeploymentStrategyId' => '<p>The ID of the deployment strategy you want to delete.</p>', 'GetDeploymentStrategyRequest$DeploymentStrategyId' => '<p>The ID of the deployment strategy to get.</p>', 'StartDeploymentRequest$DeploymentStrategyId' => '<p>The deployment strategy ID.</p>', 'UpdateDeploymentStrategyRequest$DeploymentStrategyId' => '<p>The deployment strategy ID.</p>', ], ], 'DeploymentStrategyList' => [ 'base' => NULL, 'refs' => [ 'DeploymentStrategies$Items' => '<p>The elements from this collection.</p>', ], ], 'DeploymentSummary' => [ 'base' => '<p>Information about the deployment.</p>', 'refs' => [ 'DeploymentList$member' => NULL, ], ], 'Deployments' => [ 'base' => NULL, 'refs' => [], ], 'Description' => [ 'base' => NULL, 'refs' => [ 'Application$Description' => '<p>The description of the application.</p>', 'ConfigurationProfile$Description' => '<p>The configuration profile description.</p>', 'CreateApplicationRequest$Description' => '<p>A description of the application.</p>', 'CreateConfigurationProfileRequest$Description' => '<p>A description of the configuration profile.</p>', 'CreateDeploymentStrategyRequest$Description' => '<p>A description of the deployment strategy.</p>', 'CreateEnvironmentRequest$Description' => '<p>A description of the environment.</p>', 'Deployment$Description' => '<p>The description of the deployment.</p>', 'DeploymentEvent$Description' => '<p>A description of the deployment event. Descriptions include, but are not limited to, the user account or the CloudWatch alarm ARN that initiated a rollback, the percentage of hosts that received the deployment, or in the case of an internal error, a recommendation to attempt a new deployment.</p>', 'DeploymentStrategy$Description' => '<p>The description of the deployment strategy.</p>', 'Environment$Description' => '<p>The description of the environment.</p>', 'StartDeploymentRequest$Description' => '<p>A description of the deployment.</p>', 'UpdateApplicationRequest$Description' => '<p>A description of the application.</p>', 'UpdateConfigurationProfileRequest$Description' => '<p>A description of the configuration profile.</p>', 'UpdateDeploymentStrategyRequest$Description' => '<p>A description of the deployment strategy.</p>', 'UpdateEnvironmentRequest$Description' => '<p>A description of the environment.</p>', ], ], 'Environment' => [ 'base' => NULL, 'refs' => [ 'EnvironmentList$member' => NULL, ], ], 'EnvironmentList' => [ 'base' => NULL, 'refs' => [ 'Environments$Items' => '<p>The elements from this collection.</p>', ], ], 'EnvironmentState' => [ 'base' => NULL, 'refs' => [ 'Environment$State' => '<p>The state of the environment. An environment can be in one of the following states: <code>READY_FOR_DEPLOYMENT</code>, <code>DEPLOYING</code>, <code>ROLLING_BACK</code>, or <code>ROLLED_BACK</code> </p>', ], ], 'Environments' => [ 'base' => NULL, 'refs' => [], ], 'GetApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetConfigurationProfileRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetDeploymentRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetDeploymentStrategyRequest' => [ 'base' => NULL, 'refs' => [], ], 'GetEnvironmentRequest' => [ 'base' => NULL, 'refs' => [], ], 'GrowthFactor' => [ 'base' => NULL, 'refs' => [ 'CreateDeploymentStrategyRequest$GrowthFactor' => '<p>The percentage of targets to receive a deployed configuration during each interval.</p>', 'UpdateDeploymentStrategyRequest$GrowthFactor' => '<p>The percentage of targets to receive a deployed configuration during each interval.</p>', ], ], 'GrowthType' => [ 'base' => NULL, 'refs' => [ 'CreateDeploymentStrategyRequest$GrowthType' => '<p>The algorithm used to define how percentage grows over time. AWS AppConfig supports the following growth types:</p> <p> <b>Linear</b>: For this type, AppConfig processes the deployment by dividing the total number of targets by the value specified for <code>Step percentage</code>. For example, a linear deployment that uses a <code>Step percentage</code> of 10 deploys the configuration to 10 percent of the hosts. After those deployments are complete, the system deploys the configuration to the next 10 percent. This continues until 100% of the targets have successfully received the configuration.</p> <p> <b>Exponential</b>: For this type, AppConfig processes the deployment exponentially using the following formula: <code>G*(2^N)</code>. In this formula, <code>G</code> is the growth factor specified by the user and <code>N</code> is the number of steps until the configuration is deployed to all targets. For example, if you specify a growth factor of 2, then the system rolls out the configuration as follows:</p> <p> <code>2*(2^0)</code> </p> <p> <code>2*(2^1)</code> </p> <p> <code>2*(2^2)</code> </p> <p>Expressed numerically, the deployment rolls out as follows: 2% of the targets, 4% of the targets, 8% of the targets, and continues until the configuration has been deployed to all targets.</p>', 'Deployment$GrowthType' => '<p>The algorithm used to define how percentage grew over time.</p>', 'DeploymentStrategy$GrowthType' => '<p>The algorithm used to define how percentage grew over time.</p>', 'DeploymentSummary$GrowthType' => '<p>The algorithm used to define how percentage grows over time.</p>', 'UpdateDeploymentStrategyRequest$GrowthType' => '<p>The algorithm used to define how percentage grows over time. AWS AppConfig supports the following growth types:</p> <p> <b>Linear</b>: For this type, AppConfig processes the deployment by increments of the growth factor evenly distributed over the deployment time. For example, a linear deployment that uses a growth factor of 20 initially makes the configuration available to 20 percent of the targets. After 1/5th of the deployment time has passed, the system updates the percentage to 40 percent. This continues until 100% of the targets are set to receive the deployed configuration.</p> <p> <b>Exponential</b>: For this type, AppConfig processes the deployment exponentially using the following formula: <code>G*(2^N)</code>. In this formula, <code>G</code> is the growth factor specified by the user and <code>N</code> is the number of steps until the configuration is deployed to all targets. For example, if you specify a growth factor of 2, then the system rolls out the configuration as follows:</p> <p> <code>2*(2^0)</code> </p> <p> <code>2*(2^1)</code> </p> <p> <code>2*(2^2)</code> </p> <p>Expressed numerically, the deployment rolls out as follows: 2% of the targets, 4% of the targets, 8% of the targets, and continues until the configuration has been deployed to all targets.</p>', ], ], 'Id' => [ 'base' => NULL, 'refs' => [ 'Application$Id' => '<p>The application ID.</p>', 'ConfigurationProfile$ApplicationId' => '<p>The application ID.</p>', 'ConfigurationProfile$Id' => '<p>The configuration profile ID.</p>', 'ConfigurationProfileSummary$ApplicationId' => '<p>The application ID.</p>', 'ConfigurationProfileSummary$Id' => '<p>The ID of the configuration profile.</p>', 'CreateConfigurationProfileRequest$ApplicationId' => '<p>The application ID.</p>', 'CreateEnvironmentRequest$ApplicationId' => '<p>The application ID.</p>', 'DeleteApplicationRequest$ApplicationId' => '<p>The ID of the application to delete.</p>', 'DeleteConfigurationProfileRequest$ApplicationId' => '<p>The application ID that includes the configuration profile you want to delete.</p>', 'DeleteConfigurationProfileRequest$ConfigurationProfileId' => '<p>The ID of the configuration profile you want to delete.</p>', 'DeleteEnvironmentRequest$ApplicationId' => '<p>The application ID that includes the environment you want to delete.</p>', 'DeleteEnvironmentRequest$EnvironmentId' => '<p>The ID of the environment you want to delete.</p>', 'Deployment$ApplicationId' => '<p>The ID of the application that was deployed.</p>', 'Deployment$EnvironmentId' => '<p>The ID of the environment that was deployed.</p>', 'Deployment$DeploymentStrategyId' => '<p>The ID of the deployment strategy that was deployed.</p>', 'Deployment$ConfigurationProfileId' => '<p>The ID of the configuration profile that was deployed.</p>', 'DeploymentStrategy$Id' => '<p>The deployment strategy ID.</p>', 'Environment$ApplicationId' => '<p>The application ID.</p>', 'Environment$Id' => '<p>The environment ID.</p>', 'GetApplicationRequest$ApplicationId' => '<p>The ID of the application you want to get.</p>', 'GetConfigurationProfileRequest$ApplicationId' => '<p>The ID of the application that includes the configuration profile you want to get.</p>', 'GetConfigurationProfileRequest$ConfigurationProfileId' => '<p>The ID of the configuration profile you want to get.</p>', 'GetDeploymentRequest$ApplicationId' => '<p>The ID of the application that includes the deployment you want to get. </p>', 'GetDeploymentRequest$EnvironmentId' => '<p>The ID of the environment that includes the deployment you want to get. </p>', 'GetEnvironmentRequest$ApplicationId' => '<p>The ID of the application that includes the environment you want to get.</p>', 'GetEnvironmentRequest$EnvironmentId' => '<p>The ID of the environment you wnat to get.</p>', 'ListConfigurationProfilesRequest$ApplicationId' => '<p>The application ID.</p>', 'ListDeploymentsRequest$ApplicationId' => '<p>The application ID.</p>', 'ListDeploymentsRequest$EnvironmentId' => '<p>The environment ID.</p>', 'ListEnvironmentsRequest$ApplicationId' => '<p>The application ID.</p>', 'StartDeploymentRequest$ApplicationId' => '<p>The application ID.</p>', 'StartDeploymentRequest$EnvironmentId' => '<p>The environment ID.</p>', 'StartDeploymentRequest$ConfigurationProfileId' => '<p>The configuration profile ID.</p>', 'StopDeploymentRequest$ApplicationId' => '<p>The application ID.</p>', 'StopDeploymentRequest$EnvironmentId' => '<p>The environment ID.</p>', 'UpdateApplicationRequest$ApplicationId' => '<p>The application ID.</p>', 'UpdateConfigurationProfileRequest$ApplicationId' => '<p>The application ID.</p>', 'UpdateConfigurationProfileRequest$ConfigurationProfileId' => '<p>The ID of the configuration profile.</p>', 'UpdateEnvironmentRequest$ApplicationId' => '<p>The application ID.</p>', 'UpdateEnvironmentRequest$EnvironmentId' => '<p>The environment ID.</p>', 'ValidateConfigurationRequest$ApplicationId' => '<p>The application ID.</p>', 'ValidateConfigurationRequest$ConfigurationProfileId' => '<p>The configuration profile ID.</p>', ], ], 'Integer' => [ 'base' => NULL, 'refs' => [ 'Deployment$DeploymentNumber' => '<p>The sequence number of the deployment.</p>', 'DeploymentSummary$DeploymentNumber' => '<p>The sequence number of the deployment.</p>', 'GetDeploymentRequest$DeploymentNumber' => '<p>The sequence number of the deployment.</p>', 'StopDeploymentRequest$DeploymentNumber' => '<p>The sequence number of the deployment.</p>', ], ], 'InternalServerException' => [ 'base' => '<p>There was an internal failure in the AppConfig service.</p>', 'refs' => [], ], 'Iso8601DateTime' => [ 'base' => NULL, 'refs' => [ 'Deployment$StartedAt' => '<p>The time the deployment started.</p>', 'Deployment$CompletedAt' => '<p>The time the deployment completed. </p>', 'DeploymentEvent$OccurredAt' => '<p>The date and time the event occurred.</p>', 'DeploymentSummary$StartedAt' => '<p>Time the deployment started.</p>', 'DeploymentSummary$CompletedAt' => '<p>Time the deployment completed.</p>', ], ], 'ListApplicationsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListConfigurationProfilesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListDeploymentStrategiesRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListDeploymentsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListEnvironmentsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'MaxResults' => [ 'base' => NULL, 'refs' => [ 'ListApplicationsRequest$MaxResults' => '<p>The maximum number of items to return for this call. The call also returns a token that you can specify in a subsequent call to get the next set of results.</p>', 'ListConfigurationProfilesRequest$MaxResults' => '<p>The maximum number of items to return for this call. The call also returns a token that you can specify in a subsequent call to get the next set of results.</p>', 'ListDeploymentStrategiesRequest$MaxResults' => '<p>The maximum number of items to return for this call. The call also returns a token that you can specify in a subsequent call to get the next set of results.</p>', 'ListDeploymentsRequest$MaxResults' => '<p>The maximum number of items to return for this call. The call also returns a token that you can specify in a subsequent call to get the next set of results.</p>', 'ListEnvironmentsRequest$MaxResults' => '<p>The maximum number of items to return for this call. The call also returns a token that you can specify in a subsequent call to get the next set of results.</p>', ], ], 'MinutesBetween0And24Hours' => [ 'base' => NULL, 'refs' => [ 'CreateDeploymentStrategyRequest$DeploymentDurationInMinutes' => '<p>Total amount of time for a deployment to last.</p>', 'CreateDeploymentStrategyRequest$FinalBakeTimeInMinutes' => '<p>The amount of time AppConfig monitors for alarms before considering the deployment to be complete and no longer eligible for automatic roll back.</p>', 'Deployment$DeploymentDurationInMinutes' => '<p>Total amount of time the deployment lasted.</p>', 'Deployment$FinalBakeTimeInMinutes' => '<p>The amount of time AppConfig monitored for alarms before considering the deployment to be complete and no longer eligible for automatic roll back.</p>', 'DeploymentStrategy$DeploymentDurationInMinutes' => '<p>Total amount of time the deployment lasted.</p>', 'DeploymentStrategy$FinalBakeTimeInMinutes' => '<p>The amount of time AppConfig monitored for alarms before considering the deployment to be complete and no longer eligible for automatic roll back.</p>', 'DeploymentSummary$DeploymentDurationInMinutes' => '<p>Total amount of time the deployment lasted.</p>', 'DeploymentSummary$FinalBakeTimeInMinutes' => '<p>The amount of time AppConfig monitors for alarms before considering the deployment to be complete and no longer eligible for automatic roll back.</p>', 'UpdateDeploymentStrategyRequest$DeploymentDurationInMinutes' => '<p>Total amount of time for a deployment to last.</p>', 'UpdateDeploymentStrategyRequest$FinalBakeTimeInMinutes' => '<p>The amount of time AppConfig monitors for alarms before considering the deployment to be complete and no longer eligible for automatic roll back.</p>', ], ], 'Monitor' => [ 'base' => '<p>Amazon CloudWatch alarms to monitor during the deployment process.</p>', 'refs' => [ 'MonitorList$member' => NULL, ], ], 'MonitorList' => [ 'base' => NULL, 'refs' => [ 'CreateEnvironmentRequest$Monitors' => '<p>Amazon CloudWatch alarms to monitor during the deployment process.</p>', 'Environment$Monitors' => '<p>Amazon CloudWatch alarms monitored during the deployment.</p>', 'UpdateEnvironmentRequest$Monitors' => '<p>Amazon CloudWatch alarms to monitor during the deployment process.</p>', ], ], 'Name' => [ 'base' => NULL, 'refs' => [ 'Application$Name' => '<p>The application name.</p>', 'ConfigurationProfile$Name' => '<p>The name of the configuration profile.</p>', 'ConfigurationProfileSummary$Name' => '<p>The name of the configuration profile.</p>', 'CreateApplicationRequest$Name' => '<p>A name for the application.</p>', 'CreateConfigurationProfileRequest$Name' => '<p>A name for the configuration profile.</p>', 'CreateDeploymentStrategyRequest$Name' => '<p>A name for the deployment strategy.</p>', 'CreateEnvironmentRequest$Name' => '<p>A name for the environment.</p>', 'Deployment$ConfigurationName' => '<p>The name of the configuration.</p>', 'DeploymentStrategy$Name' => '<p>The name of the deployment strategy.</p>', 'DeploymentSummary$ConfigurationName' => '<p>The name of the configuration.</p>', 'Environment$Name' => '<p>The name of the environment.</p>', 'UpdateApplicationRequest$Name' => '<p>The name of the application.</p>', 'UpdateConfigurationProfileRequest$Name' => '<p>The name of the configuration profile.</p>', 'UpdateEnvironmentRequest$Name' => '<p>The name of the environment.</p>', ], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'Applications$NextToken' => '<p>The token for the next set of items to return. Use this token to get the next set of results.</p>', 'ConfigurationProfiles$NextToken' => '<p>The token for the next set of items to return. Use this token to get the next set of results.</p>', 'DeploymentStrategies$NextToken' => '<p>The token for the next set of items to return. Use this token to get the next set of results.</p>', 'Deployments$NextToken' => '<p>The token for the next set of items to return. Use this token to get the next set of results.</p>', 'Environments$NextToken' => '<p>The token for the next set of items to return. Use this token to get the next set of results.</p>', 'ListApplicationsRequest$NextToken' => '<p>A token to start the list. Use this token to get the next set of results.</p>', 'ListConfigurationProfilesRequest$NextToken' => '<p>A token to start the list. Use this token to get the next set of results.</p>', 'ListDeploymentStrategiesRequest$NextToken' => '<p>A token to start the list. Use this token to get the next set of results.</p>', 'ListDeploymentsRequest$NextToken' => '<p>A token to start the list. Use this token to get the next set of results.</p>', 'ListEnvironmentsRequest$NextToken' => '<p>A token to start the list. Use this token to get the next set of results.</p>', ], ], 'Percentage' => [ 'base' => NULL, 'refs' => [ 'Deployment$GrowthFactor' => '<p>The percentage of targets to receive a deployed configuration during each interval.</p>', 'Deployment$PercentageComplete' => '<p>The percentage of targets for which the deployment is available.</p>', 'DeploymentStrategy$GrowthFactor' => '<p>The percentage of targets that received a deployed configuration during each interval.</p>', 'DeploymentSummary$GrowthFactor' => '<p>The percentage of targets to receive a deployed configuration during each interval.</p>', 'DeploymentSummary$PercentageComplete' => '<p>The percentage of targets for which the deployment is available.</p>', ], ], 'ReplicateTo' => [ 'base' => NULL, 'refs' => [ 'CreateDeploymentStrategyRequest$ReplicateTo' => '<p>Save the deployment strategy to a Systems Manager (SSM) document.</p>', 'DeploymentStrategy$ReplicateTo' => '<p>Save the deployment strategy to a Systems Manager (SSM) document.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The requested resource could not be found.</p>', 'refs' => [], ], 'ResourceTags' => [ 'base' => NULL, 'refs' => [], ], 'StartDeploymentRequest' => [ 'base' => NULL, 'refs' => [], ], 'StopDeploymentRequest' => [ 'base' => NULL, 'refs' => [], ], 'String' => [ 'base' => NULL, 'refs' => [ 'BadRequestException$Message' => NULL, 'Configuration$ContentType' => '<p>A standard MIME type describing the format of the configuration content. For more information, see <a href="http://www.w3.org/Protocols/rfc2616/rfc2616-sec14.html#sec14.17">Content-Type</a>.</p>', 'ConflictException$Message' => NULL, 'InternalServerException$Message' => NULL, 'ResourceNotFoundException$Message' => NULL, 'ResourceNotFoundException$ResourceName' => NULL, ], ], 'StringWithLengthBetween0And32768' => [ 'base' => NULL, 'refs' => [ 'Validator$Content' => '<p>Either the JSON Schema content or the Amazon Resource Name (ARN) of an AWS Lambda function.</p>', ], ], 'StringWithLengthBetween1And64' => [ 'base' => NULL, 'refs' => [ 'GetConfigurationRequest$Application' => '<p>The application to get. Specify either the application name or the application ID.</p>', 'GetConfigurationRequest$Environment' => '<p>The environment to get. Specify either the environment name or the environment ID.</p>', 'GetConfigurationRequest$Configuration' => '<p>The configuration to get. Specify either the configuration name or the configuration ID.</p>', 'GetConfigurationRequest$ClientId' => '<p>A unique ID to identify the client for the configuration. This ID enables AppConfig to deploy the configuration in intervals, as defined in the deployment strategy.</p>', ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'TagKeyList$member' => NULL, 'TagMap$key' => NULL, ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$TagKeys' => '<p>The tag keys to delete.</p>', ], ], 'TagMap' => [ 'base' => NULL, 'refs' => [ 'CreateApplicationRequest$Tags' => '<p>Metadata to assign to the application. Tags help organize and categorize your AppConfig resources. Each tag consists of a key and an optional value, both of which you define.</p>', 'CreateConfigurationProfileRequest$Tags' => '<p>Metadata to assign to the configuration profile. Tags help organize and categorize your AppConfig resources. Each tag consists of a key and an optional value, both of which you define.</p>', 'CreateDeploymentStrategyRequest$Tags' => '<p>Metadata to assign to the deployment strategy. Tags help organize and categorize your AppConfig resources. Each tag consists of a key and an optional value, both of which you define.</p>', 'CreateEnvironmentRequest$Tags' => '<p>Metadata to assign to the environment. Tags help organize and categorize your AppConfig resources. Each tag consists of a key and an optional value, both of which you define.</p>', 'ResourceTags$Tags' => '<p>Metadata to assign to AppConfig resources. Tags help organize and categorize your AppConfig resources. Each tag consists of a key and an optional value, both of which you define.</p>', 'StartDeploymentRequest$Tags' => '<p>Metadata to assign to the deployment. Tags help organize and categorize your AppConfig resources. Each tag consists of a key and an optional value, both of which you define.</p>', 'TagResourceRequest$Tags' => '<p>The key-value string map. The valid character set is [a-zA-Z+-=._:/]. The tag key can be up to 128 characters and must not start with <code>aws:</code>. The tag value can be up to 256 characters.</p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'TagMap$value' => NULL, ], ], 'TriggeredBy' => [ 'base' => NULL, 'refs' => [ 'DeploymentEvent$TriggeredBy' => '<p>The entity that triggered the deployment event. Events can be triggered by a user, AWS AppConfig, an Amazon CloudWatch alarm, or an internal error.</p>', ], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateConfigurationProfileRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateDeploymentStrategyRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateEnvironmentRequest' => [ 'base' => NULL, 'refs' => [], ], 'Uri' => [ 'base' => NULL, 'refs' => [ 'ConfigurationProfile$LocationUri' => '<p>The URI location of the configuration.</p>', 'ConfigurationProfileSummary$LocationUri' => '<p>The URI location of the configuration.</p>', 'CreateConfigurationProfileRequest$LocationUri' => '<p>A URI to locate the configuration. You can specify a Systems Manager (SSM) document, an SSM Parameter Store parameter, or an Amazon S3 object. For an SSM document, specify either the document name in the format <code>ssm-document://&lt;Document_name&gt;</code> or the Amazon Resource Name (ARN). For a parameter, specify either the parameter name in the format <code>ssm-parameter://&lt;Parameter_name&gt;</code> or the ARN. For an Amazon S3 object, specify the URI in the following format: <code>s3://&lt;bucket&gt;/&lt;objectKey&gt; </code>. Here is an example: s3://my-bucket/my-app/us-east-1/my-config.json</p>', 'Deployment$ConfigurationLocationUri' => '<p>Information about the source location of the configuration.</p>', ], ], 'ValidateConfigurationRequest' => [ 'base' => NULL, 'refs' => [], ], 'Validator' => [ 'base' => '<p>A validator provides a syntactic or semantic check to ensure the configuration you want to deploy functions as intended. To validate your application configuration data, you provide a schema or a Lambda function that runs against the configuration. The configuration deployment or update can only proceed when the configuration data is valid.</p>', 'refs' => [ 'ValidatorList$member' => NULL, ], ], 'ValidatorList' => [ 'base' => NULL, 'refs' => [ 'ConfigurationProfile$Validators' => '<p>A list of methods for validating the configuration.</p>', 'CreateConfigurationProfileRequest$Validators' => '<p>A list of methods for validating the configuration.</p>', 'UpdateConfigurationProfileRequest$Validators' => '<p>A list of methods for validating the configuration.</p>', ], ], 'ValidatorType' => [ 'base' => NULL, 'refs' => [ 'Validator$Type' => '<p>AppConfig supports validators of type <code>JSON_SCHEMA</code> and <code>LAMBDA</code> </p>', 'ValidatorTypeList$member' => NULL, ], ], 'ValidatorTypeList' => [ 'base' => NULL, 'refs' => [ 'ConfigurationProfileSummary$ValidatorTypes' => '<p>The types of validators in the configuration profile.</p>', ], ], 'Version' => [ 'base' => NULL, 'refs' => [ 'Configuration$ConfigurationVersion' => '<p>The configuration version.</p>', 'Deployment$ConfigurationVersion' => '<p>The configuration version that was deployed.</p>', 'DeploymentSummary$ConfigurationVersion' => '<p>The version of the configuration.</p>', 'GetConfigurationRequest$ClientConfigurationVersion' => '<p>The configuration version returned in the most recent GetConfiguration response.</p>', 'StartDeploymentRequest$ConfigurationVersion' => '<p>The configuration version to deploy.</p>', 'ValidateConfigurationRequest$ConfigurationVersion' => '<p>The version of the configuration to validate.</p>', ], ], ],];
