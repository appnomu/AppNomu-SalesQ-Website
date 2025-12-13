<?php
// Country-specific content configuration
$countryContent = [
    'GLOBAL' => [
        'welcome_message' => 'Welcome to AppNomu SalesQ - Global',
        'pricing_currency' => 'USD',
        'pricing_symbol' => 'USD',
        'pricing_plans' => [
            'enterprise' => 25, // UGX 95,000 = ~$25
            'smtp_setup' => 15, // UGX 56,000 = ~$15
            'ai_email' => 7, // UGX 25,000 = ~$7
            'sms_rate' => 0.008, // UGX 30 = ~$0.008
            'sender_id_mtn' => 67, // UGX 250,000 = ~$67
            'sender_id_airtel' => 67, // UGX 250,000 = ~$67
            'setup_fee' => 107 // UGX 400,000 = ~$107
        ],
        'contact_number' => '+1 (555) 123-4567',
        'default_language' => 'en',
        'features' => [
            'Multi-currency support',
            'Global payment gateways',
            '24/7 support'
        ],
        'hero' => [
            'title' => 'Grow Sales 40% with Africa\'s #1 Affordable CRM',
            'subtitle' => 'All-in-one CRM with SMS marketing and inventory management. Join 25,000+ businesses automating sales and saving 15 hours weekly.',
            'recent_signup' => 'Alex from Global',
            'cta_text' => 'Start Your Free 14-Day Trial',
            'guarantee' => '30-Day Money Back Guarantee • Setup in 5 Minutes',
            'urgency_banner' => 'Limited Time: 50% Off First 3 Months - Ends in 5 Days!'
        ],
        'impact' => [
            'clients' => 25000,
            'messages' => 20000000,
            'funding' => 90000,
            'trees' => 1000,
            'team_members' => 25,
            'airtime_ugx' => 240000000,
            'women_developers' => 30,
            'website_visitors' => 2500000,
            'page_views' => 65000000,
            'products_added' => 34000000,
            'transactions' => 2000000,
            'receipts_printed' => 13000000,
            'api_calls' => 120000000
        ]
    ],
    'KE' => [
        'welcome_message' => 'Karibu kwa AppNomu SalesQ Kenya',
        'pricing_currency' => 'KES',
        'pricing_symbol' => 'KES',
        'pricing_plans' => [
            'enterprise' => 12250, // UGX 95,000 = ~KES 12,250
            'smtp_setup' => 7200, // UGX 56,000 = ~KES 7,200
            'ai_email' => 3200, // UGX 25,000 = ~KES 3,200
            'sms_rate' => 4, // UGX 30 = ~KES 4
            'sender_id_mtn' => 32000, // UGX 250,000 = ~KES 32,000
            'sender_id_airtel' => 32000, // UGX 250,000 = ~KES 32,000
            'setup_fee' => 51500 // UGX 400,000 = ~KES 51,500
        ],
        'contact_number' => '+254 700 000000',
        'default_language' => 'sw',
        'features' => [
            'M-Pesa integration',
            'Local support',
            'KES billing'
        ],
        'hero' => [
            'title' => 'Ongeza Mauzo 40% na CRM Rahisi Zaidi Kenya',
            'subtitle' => 'Mfumo kamili wa CRM na SMS marketing kwa biashara za Kenya. Jiunge na biashara 25,000+ zinazotumia mfumo wetu.',
            'recent_signup' => 'Sarah kutoka Nairobi',
            'cta_text' => 'Anza Jaribio Lako la Siku 14 Bure',
            'guarantee' => 'Dhamana ya Kurudishiwa Pesa Siku 30 • Uwekaji wa Dakika 5',
            'urgency_banner' => 'Muda Mfupi: Punguzo 50% Miezi 3 ya Kwanza - Inaisha Siku 5!'
        ],
        'impact' => [
            'clients' => 8500,
            'messages' => 5200000,
            'funding' => 60000,
            'trees' => 350,
            'team_members' => 8,
            'airtime_kes' => 31200000, // KES equivalent of UGX 240M
            'women_developers' => 12,
            'website_visitors' => 680000,
            'page_views' => 17000000,
            'products_added' => 10200000,
            'transactions' => 340000,
            'receipts_printed' => 4420000,
            'api_calls' => 34000000
        ]
    ],
    'NG' => [
        'welcome_message' => 'Welcome to AppNomu SalesQ Nigeria',
        'pricing_currency' => 'NGN',
        'pricing_plans' => [
            'basic' => 14999,
            'pro' => 29999,
            'enterprise' => 'Contact Us'
        ],
        'contact_number' => '+234 800 000 0000',
        'default_language' => 'en',
        'features' => [
            'Paystack integration',
            'Local support',
            'NGN billing'
        ],
        'hero' => [
            'title' => 'Kua Azman Ka na Nigeria da SalesQ',
            'subtitle' => 'Cikakken tsarin sarrafa tallace-tallace da kayayyaki da aka tsara don \'yan kasuwa na Nigeria',
            'recent_signup' => 'Adebayo daga Lagos',
            'cta_text' => 'Fara Gwajin Ka na Kyauta',
            'guarantee' => 'Garantin dawo da kudi na kwana 30',
            'urgency_banner' => 'Shiga cikin kasuwanci 800+ na Nigeria da ke amfani da SalesQ'
        ]
    ],
    'ZA' => [
        'welcome_message' => 'Welkom by AppNomu SalesQ Suid-Afrika',
        'pricing_currency' => 'ZAR',
        'pricing_plans' => [
            'basic' => 499,
            'pro' => 999,
            'enterprise' => 'Kontak Ons'
        ],
        'contact_number' => '+27 11 000 0000',
        'default_language' => 'en',
        'features' => [
            'PayFast integration',
            'Local support',
            'ZAR billing'
        ],
        'hero' => [
            'title' => 'Groei Jou Suid-Afrikaanse Besigheid met SalesQ',
            'subtitle' => 'Volledige verkope en voorraadbestuur oplossing ontwerp vir Suid-Afrikaanse entrepreneurs',
            'recent_signup' => 'Thabo van Kaapstad',
            'cta_text' => 'Begin Jou Gratis Toets',
            'guarantee_text' => '30-dag geld-terug waarborg',
            'urgency_banner' => 'Sluit aan by 500+ Suid-Afrikaanse besighede wat reeds SalesQ gebruik'
        ]
    ],
    'TZ' => [
        'welcome_message' => 'Karibu kwa AppNomu SalesQ Tanzania',
        'pricing_currency' => 'TZS',
        'pricing_symbol' => 'TZS',
        'pricing_plans' => [
            'enterprise' => 220000, // UGX 95,000 = ~TZS 220,000
            'smtp_setup' => 130000, // UGX 56,000 = ~TZS 130,000
            'ai_email' => 58000, // UGX 25,000 = ~TZS 58,000
            'sms_rate' => 70, // UGX 30 = ~TZS 70
            'sender_id_mtn' => 580000, // UGX 250,000 = ~TZS 580,000
            'sender_id_airtel' => 580000, // UGX 250,000 = ~TZS 580,000
            'setup_fee' => 930000 // UGX 400,000 = ~TZS 930,000
        ],
        'contact_number' => '+255 700 000000',
        'default_language' => 'sw',
        'features' => [
            'M-Pesa integration',
            'Local support',
            'TZS billing'
        ],
        'hero' => [
            'title' => 'Kua Biashara Yako Tanzania na SalesQ',
            'subtitle' => 'Suluhisho kamili la usimamizi wa mauzo na hesabu iliyoundwa kwa wafanyabiashara wa Tanzania',
            'recent_signup' => 'Amina kutoka Dar es Salaam',
            'cta_text' => 'Anza Jaribio Lako la Bure',
            'guarantee' => 'Dhamana ya kurudisha pesa kwa siku 30 • Uwekaji wa Dakika 5',
            'urgency_banner' => 'Jiunge na biashara 300+ za Tanzania zinazotumia SalesQ'
        ]
    ],
    'RW' => [
        'welcome_message' => 'Murakaza neza kuri AppNomu SalesQ Rwanda',
        'pricing_currency' => 'RWF',
        'pricing_symbol' => 'RWF',
        'pricing_plans' => [
            'enterprise' => 110000, // UGX 95,000 = ~RWF 110,000
            'smtp_setup' => 65000, // UGX 56,000 = ~RWF 65,000
            'ai_email' => 29000, // UGX 25,000 = ~RWF 29,000
            'sms_rate' => 35, // UGX 30 = ~RWF 35
            'sender_id_mtn' => 290000, // UGX 250,000 = ~RWF 290,000
            'sender_id_airtel' => 290000, // UGX 250,000 = ~RWF 290,000
            'setup_fee' => 465000 // UGX 400,000 = ~RWF 465,000
        ],
        'contact_number' => '+250 700 000000',
        'default_language' => 'rw',
        'features' => [
            'MTN MoMo integration',
            'Local support',
            'RWF billing'
        ],
        'hero' => [
            'title' => 'Kura Ubucuruzi Bwawe mu Rwanda na SalesQ',
            'subtitle' => 'Sisitemu yuzuye yo gucuruza no kubungabunga ibicuruzwa byakozwe kubacuruzi bo mu Rwanda',
            'recent_signup' => 'Jean wo i Kigali',
            'cta_text' => 'Tangira Ikizamini Cyawe Cya Ubuntu',
            'guarantee' => 'Garanti yo gusubiza amafaranga mu minsi 30 • Gushyiraho mu Minota 5',
            'urgency_banner' => 'Injira mu bucuruzi 200+ bwo mu Rwanda bukoresha SalesQ'
        ]
    ]
];

// Function to get content for current country
function get_country_content($key, $default = '') {
    global $countryContent;
    $country = get_user_country();
    $country = in_array($country, array_keys($countryContent)) ? $country : 'GLOBAL';
    
    // Handle nested keys like 'hero.title'
    $keys = explode('.', $key);
    $value = $countryContent[$country] ?? null;
    
    foreach ($keys as $k) {
        if (isset($value[$k])) {
            $value = $value[$k];
        } else {
            $value = null;
            break;
        }
    }
    
    // If not found in country, try GLOBAL
    if ($value === null && $country !== 'GLOBAL') {
        $value = $countryContent['GLOBAL'] ?? null;
        foreach ($keys as $k) {
            if (isset($value[$k])) {
                $value = $value[$k];
            } else {
                $value = null;
                break;
            }
        }
    }
    
    return $value !== null ? $value : $default;
}

// Function to get all content for current country
function get_all_country_content() {
    global $countryContent;
    $country = get_user_country();
    $country = in_array($country, array_keys($countryContent)) ? $country : 'GLOBAL';
    
    return array_merge(
        $countryContent['GLOBAL'],
        $countryContent[$country]
    );
}
?>
