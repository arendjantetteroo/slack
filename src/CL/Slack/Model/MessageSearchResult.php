<?php

/*
 * This file is part of the Slack API library.
 *
 * (c) Cas Leentfaar <info@casleentfaar.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CL\Slack\Model;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Cas Leentfaar <info@casleentfaar.com>
 */
class MessageSearchResult extends AbstractSearchResultModel
{
    /**
     * @var SearchMessage[]
     *
     * @Serializer\Type("array<CL\Slack\Model\SearchMessage>")
     */
    private $matches;

    /**
     * @return SearchMessage[]
     */
    public function getMatches()
    {
        return $this->matches;
    }
}
