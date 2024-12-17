<?php

namespace Jacob\Playground\Api\Controller;

use Flarum\Api\Controller\AbstractListController;
use Flarum\Http\RequestUtil;
use Flarum\Http\UrlGenerator;
use Illuminate\Support\Arr;
use Jacob\Playground\UserRating;
use Jacob\Playground\UserRatingRepository;
use Psr\Http\Message\ServerRequestInterface;
use Tobscure\JsonApi\Document;
use Jacob\Playground\Api\Serializer\UserRatingSerializer;

class ListUserRatingsController extends AbstractListController
{
    /**
     * {@inheritdoc}
     */
    public $serializer = UserRatingSerializer::class;

    /**
     * @var UrlGenerator
     */
    protected $url;

    /**
     * @param UrlGenerator $url
     */
    public function __construct(UrlGenerator $url)
    {
        $this->url = $url;
    }

    /**
     * {@inheritdoc}
     */
    protected function data(ServerRequestInterface $request, Document $document)
    {
        // See https://docs.flarum.org/extend/api.html#api-endpoints for more information.

        $actor = RequestUtil::getActor($request);
        return $actor->ratings;

        $filters = $this->extractFilter($request);
        $sort = $this->extractSort($request);

        $limit = $this->extractLimit($request);
        $offset = $this->extractOffset($request);
        $include = $this->extractInclude($request);

        return UserRating::all();
        $results = UserRatingRepository::findByUser($actor);
/*
        $document->addPaginationLinks(
            $this->url->to('api')->route('...'),
            $request->getQueryParams(),
            $offset,
            $limit,
            $results->areMoreResults() ? null : 0
        );
*/
        return $results;
    }
}
