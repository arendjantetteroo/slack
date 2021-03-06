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

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 *         
 * @see Official documentation at https://api.slack.com/methods/search.files
 */
class SearchFilesPayload extends AbstractSearchPayload
{
    /**
     * {@inheritdoc}
     */
    public function getMethod()
    {
        return 'search.files';
    }
}
