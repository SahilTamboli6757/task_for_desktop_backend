<?php

namespace Database\Seeders;

use App\Models\Translate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TranslatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $components = [
            "signin" => [
                "en" => [
                    "form_title" => "Sign In",
                    "inputs" => [
                        "email" => [
                            "lable" => "Email Address",
                            "placeholder" => "Enter Email Address"
                        ],
                        "password" => [
                            "lable" => "password",
                            "placeholder" => "Enter password"
                        ]
                    ],
                    "button_lable" => "login"
                ]
            ]
        ];


        foreach ($components as $key => $value) {

            $params = [];

            $params["component"] = $key;

            foreach ($value as $key => $value) {

                $params['lang'] = $key;

                $params['data'] = json_encode($value);
            }

            Translate::create($params);
        }
    }
}
