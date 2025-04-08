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
                ],
                "ma" => [],
                "ha" => [],
                "ta" => [],
            ],
            "signup" => [
                "ma" => [],
                "ha" => [],
                "ta" => [],
                "en" => [],
            ],
            "nav-bar" => [
                "ma" => [],
                "ha" => [],
                "ta" => [],
                "en" => [],
            ],
            "create-task" => [
                "ma" => [],
                "ha" => [],
                "ta" => [],
                "en" => [],
            ],
            "edit-task" => [
                "ma" => [],
                "ha" => [],
                "ta" => [],
                "en" => [],
            ],
            "view-profile" => [
                "ma" => [],
                "ha" => [],
                "ta" => [],
                "en" => [],
            ],
            "profile-update" => [
                "ma" => [],
                "ha" => [],
                "ta" => [],
                "en" => [],
            ],
            "task-info" => [
                "ma" => [],
                "ha" => [],
                "ta" => [],
                "en" => [],
            ],
            "task-show" => [
                "ma" => [],
                "ha" => [],
                "ta" => [],
                "en" => [],
            ],
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
