<?php

namespace Svix;

use Svix\BaseApi\EndpointsGroup;
use Svix\Internal\Model\BackgroundTaskOut;
use Svix\Internal\Model\ListResponseBackgroundTaskOut;

/**
 * The background tasks that have been executed for your environment.
 */
readonly class BackgroundTasks extends EndpointsGroup
{
    /**
     * List background tasks executed in the past 90 days.
     *
     * @param array{
     *     limit: ?int,
     *     iterator: ?string,
     *     order: ?string,
     *     task: ?string,
     *     status: ?string,
     * } $options
     *
     * @return ListResponseBackgroundTaskOut
     */
    public function list(array $options): ListResponseBackgroundTaskOut
    {
        return $this->client->listBackgroundTasks(
            queryParameters: $options,
        );
    }

    /**
     * Get a background task by ID.
     *
     * @param string $taskID
     * @return BackgroundTaskOut
     */
    public function get(string $taskID): BackgroundTaskOut
    {
        return $this->client->getBackgroundTask($taskID);
    }
}