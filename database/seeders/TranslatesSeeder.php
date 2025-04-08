<?php

namespace Database\Seeders;

use App\Models\Translate;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
                "ma" => [
                    "form_title" => "साइन इन करा",
                    "inputs" => [
                        "email" => [
                            "lable" => "ईमेल",
                            "placeholder" => "ईमेल प्रविष्ट करा"
                        ],
                        "password" => [
                            "lable" => "पासवर्ड",
                            "placeholder" => "पासवर्ड टाका"
                        ]
                    ],
                    "button_lable" => "लॉगिन"
                ],
                "ha" => [
                    "form_title" => "लॉग इन करें",
                    "inputs" => [
                        "email" => [
                            "lable" => "मेल पता",
                            "placeholder" => "ईमेल पता दर्ज करें"
                        ],
                        "password" => [
                            "lable" => "पासवर्ड",
                            "placeholder" => "पासवर्ड दर्ज करें"
                        ]
                    ],
                    "button_lable" => "लॉग इन करें"
                ],
                "ta" => [
                    "form_title" => "உள்நுழையவும்",
                    "inputs" => [
                        "email" => [
                            "lable" => "மின்னஞ்சல் முகவரி",
                            "placeholder" => "மின்னஞ்சல் முகவரியை உள்ளிடவும்"
                        ],
                        "password" => [
                            "lable" => "கடவுச்சொல்",
                            "placeholder" => "கடவுச்சொல்லை உள்ளிடவும்"
                        ]
                    ],
                    "button_lable" => "உள்நுழை"
                ],
            ],
            "signup" => [
                "ma" => [
                    "form_title" => "साइन अप करा",
                    "inputs" => [
                        "name" => [
                            "lable" => "तुमचे नाव",
                            "placeholder" => "आपले नाव प्रविष्ट करा"
                        ],
                        "email" => [
                            "lable" => "ईमेल पत्ता",
                            "placeholder" => "ईमेल पत्ता प्रविष्ट करा"
                        ],
                        "password" => [
                            "lable" => "पासवर्ड",
                            "placeholder" => "पासवर्ड टाका"
                        ]
                    ],
                    "button_lable" => "साइन अप करा"
                ],
                "ha" => [
                    "form_title" => "साइन अप करें",
                    "inputs" => [
                        "name" => [
                            "lable" => "आपका नाम",
                            "placeholder" => "अपना नाम दर्ज करें"
                        ],
                        "email" => [
                            "lable" => "मेल पता",
                            "placeholder" => "ईमेल पता दर्ज करें"
                        ],
                        "password" => [
                            "lable" => "पासवर्ड",
                            "placeholder" => "पासवर्ड दर्ज करें"
                        ]
                    ],
                    "button_lable" => "साइन अप"
                ],
                "ta" => [
                    "form_title" => "பதிவு செய்யவும்",
                    "inputs" => [
                        "name" => [
                            "lable" => "உங்கள் பெயர்",
                            "placeholder" => "உங்கள் பெயரை உள்ளிடவும்"
                        ],
                        "email" => [
                            "lable" => "மின்னஞ்சல் முகவரி",
                            "placeholder" => "உங்கள் மின்னஞ்சல் முகவரியை உள்ளிடவும்"
                        ],
                        "password" => [
                            "lable" => "கடவுச்சொல்",
                            "placeholder" => "கடவுச்சொல்லை உள்ளிடவும்"
                        ]
                    ],
                    "button_lable" => "பதிவு செய்யவும்"
                ],
                "en" => [
                    "form_title" => "Sign up",
                    "inputs" => [
                        "name" => [
                            "lable" => "Your name",
                            "placeholder" => "Enter your name"
                        ],
                        "email" => [
                            "lable" => "Email address",
                            "placeholder" => "Enter your email address"
                        ],
                        "password" => [
                            "lable" => "Password",
                            "placeholder" => "Enter password"
                        ]
                    ],
                    "button_lable" => "Sign up"
                ],
            ],
            "nav-bar" => [
                "ma" => [
                    "brand_title" => "कार्य",
                    "create_task_label" => "कार्य तयार करा",
                    "profile_label" => "प्रोफाईल",
                    "view_profile_label" => "प्रोफाईल पहा",
                    "update_profile_label" => "प्रोफाईल अपडेट करा",
                    "logout_label" => "लॉगआउट"
                ],
                "ha" => [
                    "brand_title" => "कार्य",
                    "create_task_label" => "कार्य बनाएं",
                    "profile_label" => "प्रोफ़ाइल",
                    "view_profile_label" => "प्रोफ़ाइल देखें",
                    "update_profile_label" => "प्रोफ़ाइल अपडेट करें",
                    "logout_label" => "लॉग आउट"
                ],
                "ta" => [
                    "brand_title" => "பணி",
                    "create_task_label" => "பணியை உருவாக்கு",
                    "profile_label" => "சுயவிவரம்",
                    "view_profile_label" => "சுயவிவரத்தை காண்க",
                    "update_profile_label" => "சுயவிவரத்தை புதுப்பிக்கவும்",
                    "logout_label" => "வெளியேறு"
                ],
                "en" => [
                    "brand_title" => "Task",
                    "create_task_label" => "Create Task",
                    "profile_label" => "Profile",
                    "view_profile_label" => "View Profile",
                    "update_profile_label" => "Update Profile",
                    "logout_label" => "Logout"
                ],
            ],
            "create-task" => [
                "ma" => [
                    "title_label" => "शीर्षक",
                    "title_placeholder" => "कार्याचे शीर्षक प्रविष्ट करा",
                    "description_label" => "वर्णन",
                    "description_placeholder" => "कार्याचे वर्णन प्रविष्ट करा",
                    "button_label" => "सबमिट करा"

                ],
                "ha" => [
                    "title_label" => "शीर्षक",
                    "title_placeholder" => "कार्य का शीर्षक दर्ज करें",
                    "description_label" => "विवरण",
                    "description_placeholder" => "कार्य का विवरण दर्ज करें",
                    "button_label" => "जमा करें"
                ],

                "ta" => [
                    "title_label" => "தலைப்பு",
                    "title_placeholder" => "பணியின் தலைப்பை உள்ளிடவும்",
                    "description_label" => "விளக்கம்",
                    "description_placeholder" => "பணியின் விளக்கத்தை உள்ளிடவும்",
                    "button_label" => "சமர்ப்பிக்கவும்"
                ],
                "en" => [
                    "title_label" => "Title",
                    "title_placeholder" => "Enter task title",
                    "description_label" => "Description",
                    "description_placeholder" => "Enter task description",
                    "button_label" => "Submit"
                ],
            ],
            "edit-task" => [
                "ma" => [
                    "title_label" => "शीर्षक",
                    "title_placeholder" => "अपडेट केलेले शीर्षक प्रविष्ट करा",
                    "button_label" => "अपडेट करा"
                ],
                "ha" => [
                    "title_label" => "शीर्षक",
                    "title_placeholder" => "अपडेट किया गया शीर्षक दर्ज करें",
                    "button_label" => "अपडेट करें"
                ],
                "ta" => [
                    "title_label" => "தலைப்பு",
                    "title_placeholder" => "புதுப்பிக்கப்பட்ட தலைப்பை உள்ளிடவும்",
                    "button_label" => "புதுப்பிக்கவும்"
                ],
                "en" => [
                    "title_label" => "Title",
                    "title_placeholder" => "Enter updated title",
                    "button_label" => "Update"
                ],
            ],
            "view-profile" => [
                "ma" => [
                    "form_title" => "प्रोफाइल पहा",
                    "inputs" => [
                        "name" => [
                            "label" => "नाव",
                            "placeholder" => "वापरकर्त्याचे नाव"
                        ],
                        "email" => [
                            "label" => "ईमेल",
                            "placeholder" => "वापरकर्त्याचा ईमेल"
                        ]
                    ]
                ],
                "ha" => [
                    "form_title" => "प्रोफ़ाइल देखें",
                    "inputs" => [
                        "name" => [
                            "label" => "नाम",
                            "placeholder" => "उपयोगकर्ता का नाम"
                        ],
                        "email" => [
                            "label" => "ईमेल",
                            "placeholder" => "उपयोगकर्ता का ईमेल"
                        ]
                    ]
                ],
                "ta" => [
                    "form_title" => "சுயவிவரத்தை காண்க",
                    "inputs" => [
                        "name" => [
                            "label" => "பெயர்",
                            "placeholder" => "பயனர் பெயர்"
                        ],
                        "email" => [
                            "label" => "மின்னஞ்சல்",
                            "placeholder" => "பயனர் மின்னஞ்சல்"
                        ]
                    ]
                ],
                "en" => [
                    "form_title" => "View Profile",
                    "inputs" => [
                        "name" => [
                            "label" => "Name",
                            "placeholder" => "User Name",
                        ],
                        "email" => [
                            "label" => "Email",
                            "placeholder" => "User Email",
                        ]
                    ]
                ],
            ],
            "profile-update" => [
                "ma" => [
                    "form_title" => "प्रोफाइल अपडेट करा",
                    "inputs" => [
                        "name" => [
                            "label" => "नाव",
                            "placeholder" => "तुमचे नाव प्रविष्ट करा"
                        ],
                        "email" => [
                            "label" => "ईमेल",
                            "placeholder" => "तुमचा ईमेल प्रविष्ट करा"
                        ],
                        "password" => [
                            "label" => "पासवर्ड",
                            "placeholder" => "नवीन पासवर्ड प्रविष्ट करा"
                        ]
                    ],
                    "button_label" => "सबमिट करा"
                ],
                "ha" => [
                    "form_title" => "प्रोफ़ाइल अपडेट करें",
                    "inputs" => [
                        "name" => [
                            "label" => "नाम",
                            "placeholder" => "अपना नाम दर्ज करें"
                        ],
                        "email" => [
                            "label" => "ईमेल",
                            "placeholder" => "अपना ईमेल दर्ज करें"
                        ],
                        "password" => [
                            "label" => "पासवर्ड",
                            "placeholder" => "नया पासवर्ड दर्ज करें"
                        ]
                    ],
                    "button_label" => "सबमिट करें"
                ],
                "ta" => [
                    "form_title" => "சுயவிவரத்தை புதுப்பிக்கவும்",
                    "inputs" => [
                        "name" => [
                            "label" => "பெயர்",
                            "placeholder" => "உங்கள் பெயரை உள்ளிடவும்"
                        ],
                        "email" => [
                            "label" => "மின்னஞ்சல்",
                            "placeholder" => "உங்கள் மின்னஞ்சலை உள்ளிடவும்"
                        ],
                        "password" => [
                            "label" => "கடவுச்சொல்",
                            "placeholder" => "புதிய கடவுச்சொல்லை உள்ளிடவும்"
                        ]
                    ],
                    "button_label" => "சமர்ப்பிக்கவும்"
                ],
                "en" => [
                    "form_title" => "Update Profile",
                    "inputs" => [
                        "name" => [
                            "label" => "Name",
                            "placeholder" => "Enter your name"
                        ],
                        "email" => [
                            "label" => "Email",
                            "placeholder" => "Enter your email"
                        ],
                        "password" => [
                            "label" => "Password",
                            "placeholder" => "Enter new password"
                        ]
                    ],
                    "button_label" => "Submit"
                ],
            ],
            "task-info" => [
                "ma" => [
                    "buttons" => [
                        "task_info_label" => "कार्य माहिती",
                        "delete_label" => "हटवा"
                    ],
                    "footer" => [
                        "text" => "द्वारा तयार केले"
                    ]
                ],
                "ha" => [
                    "buttons" => [
                        "task_info_label" => "कार्य जानकारी",
                        "delete_label" => "हटाएँ"
                    ],
                    "footer" => [
                        "text" => "द्वारा बनाया गया"
                    ]
                ],
                "ta" => [
                    "buttons" => [
                        "task_info_label" => "பணி தகவல்",
                        "delete_label" => "அழிக்க"
                    ],
                    "footer" => [
                        "text" => "உருவாக்கியது"
                    ]
                ],
                "en" => [
                    "buttons" => [
                        "task_info_label" => "Task Info",
                        "delete_label" => "Delete"
                    ],
                    "footer" => [
                        "text" => "created by"
                    ]
                ],
            ],
            "task-show" => [
                "ma" => ["buttons" => [
                    "back_label" => "मुख्यपृष्ठावर परत जा",
                    "edit_label" => "संपादन करा",
                    "delete_label" => "हटवा"
                ]],
                "ha" => ["buttons" => [
                    "back_label" => "मुखपृष्ठ पर वापस जाएं",
                    "edit_label" => "संपादित करें",
                    "delete_label" => "हटाएँ"
                ]],
                "ta" => ["buttons" => [
                    "back_label" => "முகப்புப்பக்கத்திற்கு திரும்பு",
                    "edit_label" => "திருத்து",
                    "delete_label" => "அழிக்க"
                ]],
                "en" => ["buttons" => [
                    "back_label" => "Back to Home",
                    "edit_label" => "Edit",
                    "delete_label" => "Delete"
                ]],
            ],
        ];


        foreach ($components as $key => $value) {

            $params = [];

            $params["component"] = $key;

            foreach ($value as $key => $value) {

                $params['lang'] = $key;

                $params['data'] = json_encode($value);
                Translate::create($params);
            }
        }
    }
}
