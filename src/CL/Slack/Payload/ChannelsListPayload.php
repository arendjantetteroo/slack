<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Payload;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 *
 * @see Official documentation at https://api.slack.com/methods/channels.list
 */
class ChannelsListPayload extends AbstractPayload
{
    /**
     * @var bool
     *
     * @Serializer\Type("boolean")
     */
    private $excludeArchived;

    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'channels.list';
    }

    /**
     * @param bool $excludeArchived
     */
    public function setExcludeArchived($excludeArchived)
    {
        $this->excludeArchived = $excludeArchived;
    }

    /**
     * @return bool
     */
    public function getExcludeArchived()
    {
        return $this->excludeArchived;
    }
}
