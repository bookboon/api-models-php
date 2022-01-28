<?php

namespace Bookboon\ApiModels\Tests;

use Bookboon\ApiModels\Author;
use Bookboon\ApiModels\Book;
use Bookboon\ApiModels\BookChapter;
use Bookboon\ApiModels\BookTimeTag;
use Bookboon\ApiModels\Category;
use Bookboon\ApiModels\Exam;
use Bookboon\ApiModels\FrontPage;
use Bookboon\ApiModels\Journey;
use Bookboon\ApiModels\Language;
use Bookboon\ApiModels\MetricsResult;
use Bookboon\ApiModels\ProfileRequest;
use Bookboon\ApiModels\Question;
use Bookboon\ApiModels\Review;
use Bookboon\ApiModels\ReviewRequest;
use Bookboon\ApiModels\RotationVariant;
use Bookboon\ApiModels\Subscription;
use Bookboon\ApiModels\SubscriptionRequest;
use Bookboon\JsonLDClient\Client\JsonLDClient;
use Bookboon\JsonLDClient\Mapping\MappingCollection;
use Bookboon\JsonLDClient\Mapping\MappingEndpoint;
use Bookboon\JsonLDClient\Models\ApiIterable;
use GuzzleHttp\Client;
use League\OAuth2\Client\Token\AccessToken;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Yaml\Yaml;

class ApiModelsTest extends TestCase
{
    public const ACCESS_TOKEN = "eyJhbGciOiJSUzI1NiIsImtpZCI6IkozUjEwaGlINGhiYmVnIiwidHlwIjoiSldUIn0.eyJhdWQiOiJwcmVtaXVtLmxvY2FsLmJvb2tib29uLmlvIiwiY2lkIjoiMDc3YzkyMmEtMWFiOC00M2MwLThiZGYtYTNlZDAxMWE4MmEzIiwiZXhwIjoxNjQzOTkxNjc0LCJqdGkiOiI0NDM2YmQxNGM5YjU2YzlhYmNhMjJkMjU1YWNiMGEzZjgwZDBiYjYyYWM2ODRjODhiNjE0NzFlZjE5MDc5NDg4ZTI5YmVhYWFjMzQyYTI2MiIsImlhdCI6MTY0MzkwNTI3NCwiaXNzIjoiaHR0cHM6Ly9hdXRoLXNlcnZpY2UubG9jYWwuYm9va2Jvb24uaW8vbG9naW4iLCJuYmYiOjE2NDM5MDUyNzQsInNjcCI6WyJiYXNpYyIsImFwaS5ib29rLnByb2Zlc3Npb25hbCIsImFwaS5ib29rLmFjYWRlbWljIiwiYXBpLmJvb2suYXVkaW8iLCJhcGkuZXhhbXMiLCJhcGkuam91cm5leXMiLCJhcGkuYm9vay5jbGFzc3Jvb20iXX0.cc2smKNAbYFAWAX8Qh-nHaetdkTFZkCR8x14QYpbYSR3Fha9ly8_PBFwfPCmNq35hRJe3U_v8f90tuMb08vY4ATRon-VqKso8gGtbhGxSjTgkGdLrygWm0BCB1bTm4uZu_UWy0ENqu-c_Rlr_P7FAOiJ675UsPNfO2kmu9qHHi9qj23rFlfklGtSrv3OVqph5uIMawZgpfiDrpCsdWIWoOAqRg7bzdXSHhgLuwVinUxgte3_Hx5sxQZhBW9L1oNQ9NzqH_iSNBEDEVtabtSsOtvZ_iqi9AtUxYpZ1QfHtmVZGiePtLPkoZhlawXmiQTfDGd755Bd7pdqFvPXJF5WhQ";

    const TEST_DATA = [
        [
            'class' => Author::class,
            'id' => '723c0bca-8259-4f63-ad5a-018b1ea7812a',
            'method' => 'getName',
            'expected' => 'Dr. John Liptak',

            /**
             * currently skipping author collection test because it's incredibly slow (~20s)
             * this is probably because the authors endpoint isn't paginated
             */
            'noCollection' => true,
        ],
        [
            'class' => Book::class,
            'id' => '9fb1bdd0-5820-4f43-8455-0f44a6ff8d3c',
            'method' => 'getTitle',
            'expected' => '101 Ways to Engage your Talent',
        ],
        /**
         * There is no endpoint to get an individual language!
         */
        [
            'class' => Language::class,
        ],
        [
            'class' => Review::class,
        ],
        [
            'class' => BookChapter::class,
            'params' => ['bookId' => '5e446579-4d38-4e6d-ab3b-52bfa79dc010'],
        ],
        /**
         * This does not post because the JSONLD client can't send a POST
         * if the object does not have a getId method. Also, this ProfileRequest
         * object is ambiguous, there are many different endpoints it is sent to,
         * none of which is the "correct" one. We need to update the OpenAPI spec if
         * we want it to be useful.
         */
        [
            'class' => ProfileRequest::class,
            'id' => '',
            'params' => ['segmentId' => '2e77a247-422a-445f-8725-9774b8da4b02'],
            'noCollection' => true,
            'returnType' => Question::class . '[]'
        ],
        [
            'class' => Exam::class,
            'id' => '54ad6b06-e704-4cba-b60f-2645880432a6',
            'method' => 'getTitle',
            'expected' => 'CCNA in 21 Hours'
        ],
        [
            'class' => Journey::class,
            'id' => '47e6c781-a46b-4422-86a8-76e3afa80158',
            'method' => 'getTitle',
            'expected' => 'Personal Development: Knowing Yourself'
        ],
        /**
         * Can't test this, we need a book with a pending review request (does not reliably exist)
         */
//        [
//            'class' => ReviewRequest::class,
//            'params' => ['bookId' => '37de37c4-d15c-4399-9212-2019d52a6f19'],
//            'id' => '',
//            'returnType' => Review::class . '[]',
//            'noCollection' => true,
//        ],
        [
            'class' => BookTimeTag::class,
            'params' => ['bookId' => '37de37c4-d15c-4399-9212-2019d52a6f19'],
        ],
        /**
         * Collection test disabled here for a similar reason to Authors, above
         * With the additional problem that even a single category can cause a significant
         * delay, due to the fact that it comes back with all the books in the category, and
         * all the books in its direct subcategories (easily thousands of books if you choose unwisely)
         */
        [
            'class' => Category::class,
            'id' => '48a2a101-d036-46f3-a83a-376e20fe7c29',
            'method' => 'getTitle',
            'expected' => 'Editors\' picks',
            'noCollection' => true,
        ],
        /**
         * can't get a single frontpage because they have no "id" property (limitation of jsonld client,
         * we could use "slug" as an identifier if we needed to)
         */
        [
            'class' => FrontPage::class,
            'id' => 'most-popular',
            'idMethod' => 'getSlug',
        ],
        /**
         * can't get an individual question by ID because there's no endpoint for it
         */
        [
            'class' => Question::class,
        ],
        [
            'class' => RotationVariant::class,
            'id' => '86e5aa25-1a24-4dd4-b271-ace486e2fe22',
            'noCollection' => true,
        ],
        /**
         * These can't be used because they have to be POSTed, and the JSONLD client can't send a POST
         * if the object does not have a getId method.
         */
//        [
//            'class' => SubscriptionRequest::class,
//            'id' => '',
//            'create' => true,
//            'noCollection' => true,
//        ],
//        [
//            'class' => MetricsResult::class,
//        ],
    ];

    public function testModels(): void
    {
        $client = $this->getClient();

        foreach (self::TEST_DATA as $testCase) {
            $class = $testCase['class'];
            try {
                $this->runModelTest($client, $testCase);
            } catch (\Exception $e) {
                throw new \Exception("Test failed for class $class", 0, $e);
            }
        }
    }

    protected function runModelTest(JsonLDClient $client, array $testCase): void {
        if (isset($testCase['id'])) {

            if ($testCase['create'] ?? false) {
                $obj = new $testCase['class'];
                $obj = $client->create($obj);
            } else {
                $obj = $client->getById($testCase['id'], $testCase['class'], $testCase['params'] ?? []);
            }

            $returnType = $testCase['returnType'] ?? $testCase['class'];

            if (str_ends_with($returnType, '[]')) {
                $innerType = substr($returnType, 0, -2);
                self::assertIsArray($obj);
                foreach ($obj as $subObj) {
                    self::assertInstanceOf($innerType, $subObj);
                }
            } else {
                self::assertInstanceOf($returnType, $obj);
            }

            if (!empty($testCase['id'])) {
                $idMethod = $testCase['idMethod'] ?? 'getID';
                self::assertEquals($testCase['id'], $obj->$idMethod());
            }

            if (isset($testCase['method'])) {
                self::assertEquals($testCase['expected'], $obj->{$testCase['method']}());
            }
        }

        if (!empty($testCase['noCollection'])) {
            return;
        }

        $params = $testCase['params'] ?? [];
        $params[ApiIterable::LIMIT] = 1;
        $objs = $client->getMany($testCase['class'], $params);
        self::assertInstanceOf($testCase['class'], $objs->current());
    }

    protected function getClient() : JsonLDClient
    {

        $client = new Client(
            [
                'headers' => [
                    'User-Agent' => 'TestClient/0.3'
                ]
            ]
        );

        $yaml = Yaml::parseFile(__DIR__ . "/../config.yaml");
        $mappingSpec = $yaml['jsonldclient']['mappings'];
        $mappings = [];

        foreach ($mappingSpec as $spec) {
            $mappings[] = new MappingEndpoint(
                $spec['type'],
                str_replace('%env(BOOKBOON_API_HOST)%', 'http://api.local.bookboon.io/api', $spec['uri']),
                $spec['renamed_properties'] ?? []
            );
        }

        $client = new JsonLDClient(
            $client,
            SerializerHelper::create([]),
            new MappingCollection($mappings),
            null
        );

        $client->setAccessToken(new AccessToken(['access_token' => self::ACCESS_TOKEN]));
        return $client;
    }
}
