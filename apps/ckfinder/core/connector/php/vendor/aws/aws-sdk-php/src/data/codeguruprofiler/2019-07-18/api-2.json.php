<?php
// This file was auto-generated from sdk-root/src/data/codeguruprofiler/2019-07-18/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2019-07-18', 'endpointPrefix' => 'codeguru-profiler', 'jsonVersion' => '1.1', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon CodeGuru Profiler', 'serviceId' => 'CodeGuruProfiler', 'signatureVersion' => 'v4', 'signingName' => 'codeguru-profiler', 'uid' => 'codeguruprofiler-2019-07-18', ], 'operations' => [ 'ConfigureAgent' => [ 'name' => 'ConfigureAgent', 'http' => [ 'method' => 'POST', 'requestUri' => '/profilingGroups/{profilingGroupName}/configureAgent', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ConfigureAgentRequest', ], 'output' => [ 'shape' => 'ConfigureAgentResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'CreateProfilingGroup' => [ 'name' => 'CreateProfilingGroup', 'http' => [ 'method' => 'POST', 'requestUri' => '/profilingGroups', 'responseCode' => 201, ], 'input' => [ 'shape' => 'CreateProfilingGroupRequest', ], 'output' => [ 'shape' => 'CreateProfilingGroupResponse', ], 'errors' => [ [ 'shape' => 'ServiceQuotaExceededException', ], [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], ], 'idempotent' => true, ], 'DeleteProfilingGroup' => [ 'name' => 'DeleteProfilingGroup', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/profilingGroups/{profilingGroupName}', 'responseCode' => 204, ], 'input' => [ 'shape' => 'DeleteProfilingGroupRequest', ], 'output' => [ 'shape' => 'DeleteProfilingGroupResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], 'DescribeProfilingGroup' => [ 'name' => 'DescribeProfilingGroup', 'http' => [ 'method' => 'GET', 'requestUri' => '/profilingGroups/{profilingGroupName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeProfilingGroupRequest', ], 'output' => [ 'shape' => 'DescribeProfilingGroupResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetPolicy' => [ 'name' => 'GetPolicy', 'http' => [ 'method' => 'GET', 'requestUri' => '/profilingGroups/{profilingGroupName}/policy', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetPolicyRequest', ], 'output' => [ 'shape' => 'GetPolicyResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'GetProfile' => [ 'name' => 'GetProfile', 'http' => [ 'method' => 'GET', 'requestUri' => '/profilingGroups/{profilingGroupName}/profile', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetProfileRequest', ], 'output' => [ 'shape' => 'GetProfileResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListProfileTimes' => [ 'name' => 'ListProfileTimes', 'http' => [ 'method' => 'GET', 'requestUri' => '/profilingGroups/{profilingGroupName}/profileTimes', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListProfileTimesRequest', ], 'output' => [ 'shape' => 'ListProfileTimesResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'ListProfilingGroups' => [ 'name' => 'ListProfilingGroups', 'http' => [ 'method' => 'GET', 'requestUri' => '/profilingGroups', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListProfilingGroupsRequest', ], 'output' => [ 'shape' => 'ListProfilingGroupsResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ThrottlingException', ], ], ], 'PostAgentProfile' => [ 'name' => 'PostAgentProfile', 'http' => [ 'method' => 'POST', 'requestUri' => '/profilingGroups/{profilingGroupName}/agentProfile', 'responseCode' => 204, ], 'input' => [ 'shape' => 'PostAgentProfileRequest', ], 'output' => [ 'shape' => 'PostAgentProfileResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'PutPermission' => [ 'name' => 'PutPermission', 'http' => [ 'method' => 'PUT', 'requestUri' => '/profilingGroups/{profilingGroupName}/policy/{actionGroup}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'PutPermissionRequest', ], 'output' => [ 'shape' => 'PutPermissionResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], 'RemovePermission' => [ 'name' => 'RemovePermission', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/profilingGroups/{profilingGroupName}/policy/{actionGroup}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'RemovePermissionRequest', ], 'output' => [ 'shape' => 'RemovePermissionResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ResourceNotFoundException', ], ], ], 'UpdateProfilingGroup' => [ 'name' => 'UpdateProfilingGroup', 'http' => [ 'method' => 'PUT', 'requestUri' => '/profilingGroups/{profilingGroupName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'UpdateProfilingGroupRequest', ], 'output' => [ 'shape' => 'UpdateProfilingGroupResponse', ], 'errors' => [ [ 'shape' => 'InternalServerException', ], [ 'shape' => 'ConflictException', ], [ 'shape' => 'ValidationException', ], [ 'shape' => 'ThrottlingException', ], [ 'shape' => 'ResourceNotFoundException', ], ], 'idempotent' => true, ], ], 'shapes' => [ 'ActionGroup' => [ 'type' => 'string', 'enum' => [ 'agentPermissions', ], ], 'AgentConfiguration' => [ 'type' => 'structure', 'required' => [ 'periodInSeconds', 'shouldProfile', ], 'members' => [ 'periodInSeconds' => [ 'shape' => 'Integer', ], 'shouldProfile' => [ 'shape' => 'Boolean', ], ], ], 'AgentOrchestrationConfig' => [ 'type' => 'structure', 'required' => [ 'profilingEnabled', ], 'members' => [ 'profilingEnabled' => [ 'shape' => 'Boolean', ], ], ], 'AgentProfile' => [ 'type' => 'blob', ], 'AggregatedProfile' => [ 'type' => 'blob', ], 'AggregatedProfileTime' => [ 'type' => 'structure', 'members' => [ 'period' => [ 'shape' => 'AggregationPeriod', ], 'start' => [ 'shape' => 'Timestamp', ], ], ], 'AggregationPeriod' => [ 'type' => 'string', 'enum' => [ 'P1D', 'PT1H', 'PT5M', ], ], 'Boolean' => [ 'type' => 'boolean', 'box' => true, ], 'ClientToken' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^[\\w-]+$', ], 'ConfigureAgentRequest' => [ 'type' => 'structure', 'required' => [ 'profilingGroupName', ], 'members' => [ 'fleetInstanceId' => [ 'shape' => 'FleetInstanceId', ], 'profilingGroupName' => [ 'shape' => 'ProfilingGroupName', 'location' => 'uri', 'locationName' => 'profilingGroupName', ], ], ], 'ConfigureAgentResponse' => [ 'type' => 'structure', 'required' => [ 'configuration', ], 'members' => [ 'configuration' => [ 'shape' => 'AgentConfiguration', ], ], 'payload' => 'configuration', ], 'ConflictException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 409, 'senderFault' => true, ], 'exception' => true, ], 'CreateProfilingGroupRequest' => [ 'type' => 'structure', 'required' => [ 'clientToken', 'profilingGroupName', ], 'members' => [ 'agentOrchestrationConfig' => [ 'shape' => 'AgentOrchestrationConfig', ], 'clientToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, 'location' => 'querystring', 'locationName' => 'clientToken', ], 'profilingGroupName' => [ 'shape' => 'ProfilingGroupName', ], ], ], 'CreateProfilingGroupResponse' => [ 'type' => 'structure', 'required' => [ 'profilingGroup', ], 'members' => [ 'profilingGroup' => [ 'shape' => 'ProfilingGroupDescription', ], ], 'payload' => 'profilingGroup', ], 'DeleteProfilingGroupRequest' => [ 'type' => 'structure', 'required' => [ 'profilingGroupName', ], 'members' => [ 'profilingGroupName' => [ 'shape' => 'ProfilingGroupName', 'location' => 'uri', 'locationName' => 'profilingGroupName', ], ], ], 'DeleteProfilingGroupResponse' => [ 'type' => 'structure', 'members' => [], ], 'DescribeProfilingGroupRequest' => [ 'type' => 'structure', 'required' => [ 'profilingGroupName', ], 'members' => [ 'profilingGroupName' => [ 'shape' => 'ProfilingGroupName', 'location' => 'uri', 'locationName' => 'profilingGroupName', ], ], ], 'DescribeProfilingGroupResponse' => [ 'type' => 'structure', 'required' => [ 'profilingGroup', ], 'members' => [ 'profilingGroup' => [ 'shape' => 'ProfilingGroupDescription', ], ], 'payload' => 'profilingGroup', ], 'FleetInstanceId' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '^[\\w-.:/]+$', ], 'GetPolicyRequest' => [ 'type' => 'structure', 'required' => [ 'profilingGroupName', ], 'members' => [ 'profilingGroupName' => [ 'shape' => 'ProfilingGroupName', 'location' => 'uri', 'locationName' => 'profilingGroupName', ], ], ], 'GetPolicyResponse' => [ 'type' => 'structure', 'required' => [ 'policy', 'revisionId', ], 'members' => [ 'policy' => [ 'shape' => 'String', ], 'revisionId' => [ 'shape' => 'RevisionId', ], ], ], 'GetProfileRequest' => [ 'type' => 'structure', 'required' => [ 'profilingGroupName', ], 'members' => [ 'accept' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'Accept', ], 'endTime' => [ 'shape' => 'Timestamp', 'location' => 'querystring', 'locationName' => 'endTime', ], 'maxDepth' => [ 'shape' => 'MaxDepth', 'location' => 'querystring', 'locationName' => 'maxDepth', ], 'period' => [ 'shape' => 'Period', 'location' => 'querystring', 'locationName' => 'period', ], 'profilingGroupName' => [ 'shape' => 'ProfilingGroupName', 'location' => 'uri', 'locationName' => 'profilingGroupName', ], 'startTime' => [ 'shape' => 'Timestamp', 'location' => 'querystring', 'locationName' => 'startTime', ], ], ], 'GetProfileResponse' => [ 'type' => 'structure', 'required' => [ 'contentType', 'profile', ], 'members' => [ 'contentEncoding' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'Content-Encoding', ], 'contentType' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'Content-Type', ], 'profile' => [ 'shape' => 'AggregatedProfile', ], ], 'payload' => 'profile', ], 'Integer' => [ 'type' => 'integer', 'box' => true, ], 'InternalServerException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'ListProfileTimesRequest' => [ 'type' => 'structure', 'required' => [ 'endTime', 'period', 'profilingGroupName', 'startTime', ], 'members' => [ 'endTime' => [ 'shape' => 'Timestamp', 'location' => 'querystring', 'locationName' => 'endTime', ], 'maxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], 'orderBy' => [ 'shape' => 'OrderBy', 'location' => 'querystring', 'locationName' => 'orderBy', ], 'period' => [ 'shape' => 'AggregationPeriod', 'location' => 'querystring', 'locationName' => 'period', ], 'profilingGroupName' => [ 'shape' => 'ProfilingGroupName', 'location' => 'uri', 'locationName' => 'profilingGroupName', ], 'startTime' => [ 'shape' => 'Timestamp', 'location' => 'querystring', 'locationName' => 'startTime', ], ], ], 'ListProfileTimesResponse' => [ 'type' => 'structure', 'required' => [ 'profileTimes', ], 'members' => [ 'nextToken' => [ 'shape' => 'PaginationToken', ], 'profileTimes' => [ 'shape' => 'ProfileTimes', ], ], ], 'ListProfilingGroupsRequest' => [ 'type' => 'structure', 'members' => [ 'includeDescription' => [ 'shape' => 'Boolean', 'location' => 'querystring', 'locationName' => 'includeDescription', ], 'maxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'maxResults', ], 'nextToken' => [ 'shape' => 'PaginationToken', 'location' => 'querystring', 'locationName' => 'nextToken', ], ], ], 'ListProfilingGroupsResponse' => [ 'type' => 'structure', 'required' => [ 'profilingGroupNames', ], 'members' => [ 'nextToken' => [ 'shape' => 'PaginationToken', ], 'profilingGroupNames' => [ 'shape' => 'ProfilingGroupNames', ], 'profilingGroups' => [ 'shape' => 'ProfilingGroupDescriptions', ], ], ], 'MaxDepth' => [ 'type' => 'integer', 'box' => true, 'max' => 10000, 'min' => 1, ], 'MaxResults' => [ 'type' => 'integer', 'box' => true, 'max' => 1000, 'min' => 1, ], 'OrderBy' => [ 'type' => 'string', 'enum' => [ 'TimestampAscending', 'TimestampDescending', ], ], 'PaginationToken' => [ 'type' => 'string', 'max' => 64, 'min' => 1, 'pattern' => '^[\\w-]+$', ], 'Period' => [ 'type' => 'string', 'max' => 64, 'min' => 1, ], 'PostAgentProfileRequest' => [ 'type' => 'structure', 'required' => [ 'agentProfile', 'contentType', 'profilingGroupName', ], 'members' => [ 'agentProfile' => [ 'shape' => 'AgentProfile', ], 'contentType' => [ 'shape' => 'String', 'location' => 'header', 'locationName' => 'Content-Type', ], 'profileToken' => [ 'shape' => 'ClientToken', 'idempotencyToken' => true, 'location' => 'querystring', 'locationName' => 'profileToken', ], 'profilingGroupName' => [ 'shape' => 'ProfilingGroupName', 'location' => 'uri', 'locationName' => 'profilingGroupName', ], ], 'payload' => 'agentProfile', ], 'PostAgentProfileResponse' => [ 'type' => 'structure', 'members' => [], ], 'Principal' => [ 'type' => 'string', ], 'Principals' => [ 'type' => 'list', 'member' => [ 'shape' => 'Principal', ], 'max' => 50, 'min' => 1, ], 'ProfileTime' => [ 'type' => 'structure', 'members' => [ 'start' => [ 'shape' => 'Timestamp', ], ], ], 'ProfileTimes' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProfileTime', ], ], 'ProfilingGroupArn' => [ 'type' => 'string', ], 'ProfilingGroupDescription' => [ 'type' => 'structure', 'members' => [ 'agentOrchestrationConfig' => [ 'shape' => 'AgentOrchestrationConfig', ], 'arn' => [ 'shape' => 'ProfilingGroupArn', ], 'createdAt' => [ 'shape' => 'Timestamp', ], 'name' => [ 'shape' => 'ProfilingGroupName', ], 'profilingStatus' => [ 'shape' => 'ProfilingStatus', ], 'updatedAt' => [ 'shape' => 'Timestamp', ], ], ], 'ProfilingGroupDescriptions' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProfilingGroupDescription', ], ], 'ProfilingGroupName' => [ 'type' => 'string', 'max' => 255, 'min' => 1, 'pattern' => '^[\\w-]+$', ], 'ProfilingGroupNames' => [ 'type' => 'list', 'member' => [ 'shape' => 'ProfilingGroupName', ], ], 'ProfilingStatus' => [ 'type' => 'structure', 'members' => [ 'latestAgentOrchestratedAt' => [ 'shape' => 'Timestamp', ], 'latestAgentProfileReportedAt' => [ 'shape' => 'Timestamp', ], 'latestAggregatedProfile' => [ 'shape' => 'AggregatedProfileTime', ], ], ], 'PutPermissionRequest' => [ 'type' => 'structure', 'required' => [ 'actionGroup', 'principals', 'profilingGroupName', ], 'members' => [ 'actionGroup' => [ 'shape' => 'ActionGroup', 'location' => 'uri', 'locationName' => 'actionGroup', ], 'principals' => [ 'shape' => 'Principals', ], 'profilingGroupName' => [ 'shape' => 'ProfilingGroupName', 'location' => 'uri', 'locationName' => 'profilingGroupName', ], 'revisionId' => [ 'shape' => 'RevisionId', ], ], ], 'PutPermissionResponse' => [ 'type' => 'structure', 'required' => [ 'policy', 'revisionId', ], 'members' => [ 'policy' => [ 'shape' => 'String', ], 'revisionId' => [ 'shape' => 'RevisionId', ], ], ], 'RemovePermissionRequest' => [ 'type' => 'structure', 'required' => [ 'actionGroup', 'profilingGroupName', 'revisionId', ], 'members' => [ 'actionGroup' => [ 'shape' => 'ActionGroup', 'location' => 'uri', 'locationName' => 'actionGroup', ], 'profilingGroupName' => [ 'shape' => 'ProfilingGroupName', 'location' => 'uri', 'locationName' => 'profilingGroupName', ], 'revisionId' => [ 'shape' => 'RevisionId', 'location' => 'querystring', 'locationName' => 'revisionId', ], ], ], 'RemovePermissionResponse' => [ 'type' => 'structure', 'required' => [ 'policy', 'revisionId', ], 'members' => [ 'policy' => [ 'shape' => 'String', ], 'revisionId' => [ 'shape' => 'RevisionId', ], ], ], 'ResourceNotFoundException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 404, 'senderFault' => true, ], 'exception' => true, ], 'RevisionId' => [ 'type' => 'string', 'pattern' => '[a-f0-9]{8}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{4}-[a-f0-9]{12}', ], 'ServiceQuotaExceededException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 402, 'senderFault' => true, ], 'exception' => true, ], 'String' => [ 'type' => 'string', ], 'ThrottlingException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 429, 'senderFault' => true, ], 'exception' => true, ], 'Timestamp' => [ 'type' => 'timestamp', 'timestampFormat' => 'iso8601', ], 'UpdateProfilingGroupRequest' => [ 'type' => 'structure', 'required' => [ 'agentOrchestrationConfig', 'profilingGroupName', ], 'members' => [ 'agentOrchestrationConfig' => [ 'shape' => 'AgentOrchestrationConfig', ], 'profilingGroupName' => [ 'shape' => 'ProfilingGroupName', 'location' => 'uri', 'locationName' => 'profilingGroupName', ], ], ], 'UpdateProfilingGroupResponse' => [ 'type' => 'structure', 'required' => [ 'profilingGroup', ], 'members' => [ 'profilingGroup' => [ 'shape' => 'ProfilingGroupDescription', ], ], 'payload' => 'profilingGroup', ], 'ValidationException' => [ 'type' => 'structure', 'required' => [ 'message', ], 'members' => [ 'message' => [ 'shape' => 'String', ], ], 'error' => [ 'httpStatusCode' => 400, 'senderFault' => true, ], 'exception' => true, ], ],];