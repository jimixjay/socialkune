<?php

namespace App\Http\Controllers;

use App\Repositories\DonationRepository;
use App\Repositories\MatchRepository;
use App\Repositories\PartnerRepository;
use App\Repositories\PostRepository;
use App\Repositories\UserRepository;
use App\Services\MockCreator;
use Faker\Factory;
use Illuminate\Support\Facades\DB;
use Symfony\Component\String\Slugger\AsciiSlugger;

class MockController extends Controller
{
    public function __construct()
    {
    }

    public function execute(UserRepository $userRepo, PartnerRepository $partnerRepo, MatchRepository $matchRepo, DonationRepository $donationRepo, PostRepository $postRepo)
    {
        DB::table('badge')->truncate();

        DB::table('badge')->insert(
            [
                [
                    'name' => 'Colaborador Nivel 1',
                    'description' => 'Colaborador Nivel 1',
                    'given_points' => '10',
                    'code' => 'col-1',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => '1-col.png',
                    'type' => 'user',
                ],
                [
                    'name' => 'Colaborador Nivel 2',
                    'description' => 'Colaborador Nivel 2',
                    'given_points' => '20',
                    'code' => 'col-2',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => '2-col.png',
                    'type' => 'user',
                ],
                [
                    'name' => 'Colaborador Nivel 3',
                    'description' => 'Colaborador Nivel 3',
                    'given_points' => '30',
                    'code' => 'col-3',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => '3-col.png',
                    'type' => 'user',
                ],
                [
                    'name' => 'Colaborador Nivel 4',
                    'description' => 'Colaborador Nivel 4',
                    'given_points' => '40',
                    'code' => 'col-4',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => '4-col.png',
                    'type' => 'user',
                ],
                [
                    'name' => 'Colaborador Nivel 5',
                    'description' => 'Colaborador Nivel 5',
                    'given_points' => '50',
                    'code' => 'col-5',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => '5-col.png',
                    'type' => 'user',
                ],
                [
                    'name' => 'Donante Nivel 1',
                    'description' => 'Donante Nivel 1',
                    'given_points' => '10',
                    'code' => 'don-1',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'don-1.png',
                    'type' => 'user',
                ],
                [
                    'name' => 'Donante Nivel 2',
                    'description' => 'Donante Nivel 2',
                    'given_points' => '20',
                    'code' => 'don-2',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'don-2.png',
                    'type' => 'user',
                ],
                [
                    'name' => 'Donante Nivel 3',
                    'description' => 'Donante Nivel 3',
                    'given_points' => '30',
                    'code' => 'don-3',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'don-3.png',
                    'type' => 'user',
                ],
                [
                    'name' => 'Donante Nivel 4',
                    'description' => 'Donante Nivel 4',
                    'given_points' => '40',
                    'code' => 'don-4',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'don-4.png',
                    'type' => 'user',
                ],
                [
                    'name' => 'Donante Nivel 5',
                    'description' => 'Donante Nivel 5',
                    'given_points' => '50',
                    'code' => 'don-5',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'don-5.png',
                    'type' => 'user',
                ],
                [
                    'name' => 'Fin de la pobreza',
                    'description' => 'Fin de la pobreza',
                    'given_points' => '50',
                    'code' => 'ag2030-01',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'S-WEB-Goal-01.png',
                    'type' => 'partner',
                ],
                [
                    'name' => 'Hambre cero',
                    'description' => 'Hambre cero',
                    'given_points' => '50',
                    'code' => 'ag2030-02',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'S-WEB-Goal-02.png',
                    'type' => 'partner',
                ],
                [
                    'name' => 'Salud y bienestar',
                    'description' => 'Salud y bienestar',
                    'given_points' => '50',
                    'code' => 'ag2030-03',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'S-WEB-Goal-03.png',
                    'type' => 'partner',
                ],
                [
                    'name' => 'Educación de calidad',
                    'description' => 'Educación de calidad',
                    'given_points' => '50',
                    'code' => 'ag2030-04',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'S-WEB-Goal-04.png',
                    'type' => 'partner',
                ],
                [
                    'name' => 'Igualdad de género',
                    'description' => 'Igualdad de género',
                    'given_points' => '50',
                    'code' => 'ag2030-05',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'S-WEB-Goal-05.png',
                    'type' => 'partner',
                ],
                [
                    'name' => 'Agua limpia y saneamiento',
                    'description' => 'Agua limpia y saneamiento',
                    'given_points' => '50',
                    'code' => 'ag2030-06',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'S-WEB-Goal-06.png',
                    'type' => 'partner',
                ],
                [
                    'name' => 'Energía asequible y no contaminante',
                    'description' => 'Energía asequible y no contaminante',
                    'given_points' => '50',
                    'code' => 'ag2030-07',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'S-WEB-Goal-07.png',
                    'type' => 'partner',
                ],
                [
                    'name' => 'Trabajo decente y crecimiento económico',
                    'description' => 'Trabajo decente y crecimiento económico',
                    'given_points' => '50',
                    'code' => 'ag2030-08',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'S-WEB-Goal-08.png',
                    'type' => 'partner',
                ],
                [
                    'name' => 'Industria, innovación e infraestructura',
                    'description' => 'Industria, innovación e infraestructura',
                    'given_points' => '50',
                    'code' => 'ag2030-09',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'S-WEB-Goal-09.png',
                    'type' => 'partner',
                ],
                [
                    'name' => 'Reducción de las desigualdades',
                    'description' => 'Reducción de las desigualdades',
                    'given_points' => '50',
                    'code' => 'ag2030-10',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'S-WEB-Goal-10.png',
                    'type' => 'partner',
                ],
                [
                    'name' => 'Ciudades y comunidades sostenibles',
                    'description' => 'Ciudades y comunidades sostenibles',
                    'given_points' => '50',
                    'code' => 'ag2030-11',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'S-WEB-Goal-11.png',
                    'type' => 'partner',
                ],
                [
                    'name' => 'Producción y consumo responsables',
                    'description' => 'Producción y consumo responsables',
                    'given_points' => '50',
                    'code' => 'ag2030-12',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'S-WEB-Goal-12.png',
                    'type' => 'partner',
                ],
                [
                    'name' => 'Acción por el clima',
                    'description' => 'Acción por el clima',
                    'given_points' => '50',
                    'code' => 'ag2030-13',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'S-WEB-Goal-13.png',
                    'type' => 'partner',
                ],
                [
                    'name' => 'Vida submarina',
                    'description' => 'Vida submarina',
                    'given_points' => '50',
                    'code' => 'ag2030-14',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'S-WEB-Goal-14.png',
                    'type' => 'partner',
                ],
                [
                    'name' => 'Vida de ecosistemas terrestres',
                    'description' => 'Vida de ecosistemas terrestres',
                    'given_points' => '50',
                    'code' => 'ag2030-15',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'S-WEB-Goal-15.png',
                    'type' => 'partner',
                ],
                [
                    'name' => 'Paz, justicia e instituciones sólidas',
                    'description' => 'Paz, justicia e instituciones sólidas',
                    'given_points' => '50',
                    'code' => 'ag2030-16',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'S-WEB-Goal-16.png',
                    'type' => 'partner',
                ],
                [
                    'name' => 'Alianzas para lograr los objetivos',
                    'description' => 'Alianzas para lograr los objetivos',
                    'given_points' => '50',
                    'code' => 'ag2030-17',
                    'active' => true,
                    'created_at' => '2021-02-14 10:00:00',
                    'updated_at' => '2021-02-14 10:00:00',
                    'src' => 'S-WEB-Goal-17.png',
                    'type' => 'partner',
                ]
            ]
        );

        DB::table('badge_user')->truncate();

        $data = [];

        $badgeIdCol = rand(1, 5);
        $badgeIdDon = rand(6, 10);
        for ($userId = 1; $userId <= 100; $userId++) {
            $data[] = [
                'user_id' => $userId,
                'badge_id' => $badgeIdCol,
                'created_at' => '2021-02-14 10:00:00',
                'updated_at' => '2021-02-14 10:00:00',
            ];

            $data[] = [
                'user_id' => $userId,
                'badge_id' => $badgeIdDon,
                'created_at' => '2021-02-14 10:00:00',
                'updated_at' => '2021-02-14 10:00:00',
            ];
        }

        DB::table('badge_user')->insert(
            $data
        );

        DB::table('badge_partner')->truncate();

        $data = [];

        $used = [];

        for ($i = 0; $i < 200; $i++) {
            $badgeId = rand(11, 28);
            $partnerId = rand(4, 43);
            if (array_key_exists($partnerId . '-' . $badgeId, $used)) {
                continue;
            }

            $data[] = [
                'partner_id' => $partnerId,
                'badge_id' => $badgeId,
                'created_at' => '2021-02-14 10:00:00',
                'updated_at' => '2021-02-14 10:00:00',
            ];

            $used[$partnerId . '-' . $badgeId] = 1;
        }

        DB::table('badge_partner')->insert(
            $data
        );

        return response()->json([]);
        try {
            $mockCreator = new MockCreator($userRepo);
            $mockCreator->execute($this->generateDataForUser());

            return response()->json(['msg' => 'OK']);

            $mockCreator = new MockCreator($partnerRepo);
            $mockCreator->execute($this->generateDataForPartner());

            $mockCreator = new MockCreator($matchRepo);
            $mockCreator->execute($this->generateDataForMatch());

            $mockCreator = new MockCreator($donationRepo);
            $mockCreator->execute($this->generateDataForDonations());

            $mockCreator = new MockCreator($postRepo);
            $mockCreator->execute($this->generateDataForPosts());

            return response()->json(['msg' => 'OK']);

        } catch (\Exception $e) {
            return $this->exceptionErrorResponse($e, 500, 'mock500', 'No se ha podido hacer la ingesta de datos mockeados');
        }
    }

    private function generateDataForUser()
    {
        $slugger = new AsciiSlugger();

        $rows = [];
        for ($i = 0; $i < 50; $i++) {
            $faker = Factory::create('es_ES');
            $data = [];
            $createdAt = $faker->dateTimeThisYear->format('Y-m-d H:i:s');
            $days = rand(0, 10);
            $updatedAt = $faker->dateTimeThisYear->add(new \DateInterval('P' . $days . 'D'))->format('Y-m-d H:i:s');
            $data['name'] = $faker->firstName . ' ' . $faker->lastName;
            $data['username'] = $faker->userName;
            $data['slug'] = $slugger->slug($data['username']);
            $data['password'] = password_hash($faker->password, PASSWORD_DEFAULT, [20]);
            $data['email'] = $faker->email;
            $data['avatar'] = $faker->imageUrl(200, 200, 'people');
            $data['created_at'] = $createdAt;
            $data['updated_at'] = $updatedAt;

            $rows[] = $data;
        }

        return $rows;
    }

    private function generateDataForPartner()
    {
        $slugger = new AsciiSlugger();

        $rows = [];
        for ($i = 0; $i < 20; $i++) {
            $faker = Factory::create('es_ES');
            $data = [];
            $createdAt = $faker->dateTimeThisYear->format('Y-m-d H:i:s');
            $days = rand(0, 10);
            $updatedAt = $faker->dateTimeThisYear->add(new \DateInterval('P' . $days . 'D'))->format('Y-m-d H:i:s');
            $data['name'] = $faker->company;
            $data['username'] = $faker->userName;
            $data['slug'] = $slugger->slug($data['username']);
            $data['password'] = password_hash($faker->password, PASSWORD_DEFAULT, [20]);
            $data['email'] = $faker->companyEmail;
            $data['logo'] = $faker->imageUrl(200, 200, 'people');
            $data['description'] = $faker->paragraph(2) . '<br><br>' . $faker->paragraph(5) . '<br><br>' . $faker->paragraph(3);
            $data['created_at'] = $createdAt;
            $data['updated_at'] = $updatedAt;

            $rows[] = $data;
        }

        return $rows;
    }

    private function generateDataForMatch()
    {
        $query = '
            SELECT user_id FROM "user"
        ';

        $users = DB::select($query);

        $rows = [];
        foreach ($users as $user) {
            $numMatches = rand(0, 20);
            $query = '
                SELECT partner_id
                FROM partner
                ORDER BY RANDOM() LIMIT ' . $numMatches;

            $partners = DB::select($query);

            foreach ($partners as $partner) {
                $faker = Factory::create('es_ES');
                $days = rand(0, 10);
                $rows[] = [
                    'user_id' => $user->user_id,
                    'partner_id' => $partner->partner_id,
                    'created_at' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
                    'updated_at' => $faker->dateTimeThisYear->add(new \DateInterval('P' . $days . 'D'))->format('Y-m-d H:i:s')
                ];
            }
        }

        return $rows;
    }

    private function generateDataForDonations()
    {
        $query = '
            SELECT user_id FROM "user"
        ';

        $users = DB::select($query);

        $rows = [];
        foreach ($users as $user) {
            $numDonations = rand(0, 10);
            $query = '
                SELECT partner_id
                FROM partner
                ORDER BY RANDOM() LIMIT ' . $numDonations;

            $partners = DB::select($query);

            foreach ($partners as $partner) {
                $faker = Factory::create('es_ES');
                $amount = rand(10, 1000);
                $rows[] = [
                    'user_id' => $user->user_id,
                    'partner_id' => $partner->partner_id,
                    'amount' => $amount,
                    'is_public' => ($user->user_id + $partner->partner_id) % 2,
                    'is_public_amount' => ($user->user_id + $partner->partner_id * 3) % 2,
                    'payload' => 'payloadstring',
                    'created_at' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
                    'updated_at' => $faker->dateTimeThisYear->format('Y-m-d H:i:s')
                ];
            }
        }

        return $rows;
    }

    private function generateDataForPosts()
    {
        $slugger = new AsciiSlugger();

        $query = '
            SELECT partner_id FROM "partner"
        ';

        $partners = DB::select($query);

        $rows = [];
        foreach ($partners as $partner) {
            $numPosts = rand(0, 10);
            for ($i = 0; $i < $numPosts; $i++) {
                $faker = Factory::create('es_ES');
                $numWords = rand(3, 15);
                $numWordsContent = rand(100, 200);
                $title = $faker->sentence($numWords);
                $slug = $slugger->slug($title);
                $rows[] = [
                    'title' => $title,
                    'slug' => $slug,
                    'partner_id' => $partner->partner_id,
                    'content' => $faker->text($numWordsContent),
                    'published' => true,
                    'published_at' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
                    'created_at' => $faker->dateTimeThisYear->format('Y-m-d H:i:s'),
                    'updated_at' => $faker->dateTimeThisYear->format('Y-m-d H:i:s')
                ];
            }
        }

        return $rows;
    }
}