<? php

namespace Drupal\graphql_mutations\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;

/**
 * Provides an example Resource for DCCR 2019.
 *
 * @RestResource(
 *   id = "example_resource",
 *   label = @Translation("Example Resource"),
 *   uri_paths = {
 *     "canonical" = "/example_rest_api/example_resource"
 *   }
 * )
 */
class ExampleResource extends ResourceBase
{
    /**
     * Responds to entity GET requests.
     * @return \Drupal\rest\ResourceResponse
     */
    public function get()
    {
        $response = ['message' => 'Drupal no está tan mal como la gente dice :)'];
        return new ResourceResponse($response);
    }
}
