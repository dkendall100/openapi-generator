<?php
/**
 * PetApiInterfaceTest
 * PHP version 7.1.3
 *
 * @category Class
 * @package  OpenAPI\Server\Tests\Api
 * @author   openapi-generator contributors
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * OpenAPI Petstore
 *
 * This is a sample server Petstore server. For this sample, you can use the api key `special-key` to test the authorization filters.
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the endpoint.
 */

namespace OpenAPI\Server\Tests\Api;

use OpenAPI\Server\Configuration;
use OpenAPI\Server\ApiClient;
use OpenAPI\Server\ApiException;
use OpenAPI\Server\ObjectSerializer;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;

/**
 * PetApiInterfaceTest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Server\Tests\Api
 * @author   openapi-generator contributors
 * @link     https://github.com/openapitools/openapi-generator
 */
class PetApiInterfaceTest extends WebTestCase
{
    private static ?KernelBrowser $client = null;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        if (null === self::$client) {
            self::$client = static::createClient();
        }
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test case for addPet
     *
     * Add a new pet to the store.
     *
     */
    public function testAddPet()
    {
        $client = self::$client;

        $path = '/pet';

        $crawler = $client->request('POST', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
    }

    /**
     * Test case for deletePet
     *
     * Deletes a pet.
     *
     */
    public function testDeletePet()
    {
        $client = self::$client;

        $path = '/pet/{petId}';
        $pattern = '{petId}';
        $data = $this->genTestData('\d+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('DELETE', $path);
    }

    /**
     * Test case for findPetsByStatus
     *
     * Finds Pets by status.
     *
     */
    public function testFindPetsByStatus()
    {
        $client = self::$client;

        $path = '/pet/findByStatus';

        $crawler = $client->request('GET', $path);
    }

    /**
     * Test case for findPetsByTags
     *
     * Finds Pets by tags.
     *
     */
    public function testFindPetsByTags()
    {
        $client = self::$client;

        $path = '/pet/findByTags';

        $crawler = $client->request('GET', $path);
    }

    /**
     * Test case for getPetById
     *
     * Find pet by ID.
     *
     */
    public function testGetPetById()
    {
        $client = self::$client;

        $path = '/pet/{petId}';
        $pattern = '{petId}';
        $data = $this->genTestData('\d+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('GET', $path);
    }

    /**
     * Test case for updatePet
     *
     * Update an existing pet.
     *
     */
    public function testUpdatePet()
    {
        $client = self::$client;

        $path = '/pet';

        $crawler = $client->request('PUT', $path, [], [], ['CONTENT_TYPE' => 'application/json']);
    }

    /**
     * Test case for updatePetWithForm
     *
     * Updates a pet in the store with form data.
     *
     */
    public function testUpdatePetWithForm()
    {
        $client = self::$client;

        $path = '/pet/{petId}';
        $pattern = '{petId}';
        $data = $this->genTestData('\d+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('POST', $path);
    }

    /**
     * Test case for uploadFile
     *
     * uploads an image.
     *
     */
    public function testUploadFile()
    {
        $client = self::$client;

        $path = '/pet/{petId}/uploadImage';
        $pattern = '{petId}';
        $data = $this->genTestData('\d+');
        $path = str_replace($pattern, $data, $path);

        $crawler = $client->request('POST', $path);
    }

    protected function genTestData($regexp)
    {
        $grammar  = new \Hoa\File\Read('hoa://Library/Regex/Grammar.pp');
        $compiler = \Hoa\Compiler\Llk\Llk::load($grammar);
        $ast      = $compiler->parse($regexp);
        $generator = new \Hoa\Regex\Visitor\Isotropic(new \Hoa\Math\Sampler\Random());

        return $generator->visit($ast); 
    }
}
