<?php
namespace Country;

use Countries;
use DurianSoftware\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the countries table
        DB::table('dim_countries')->delete();
        
        $countries = [
            [
                "id"=> 1,
                "name"=> "Afghanistan",
                "description"=> "Islamic Republic of Afghanistan",
                "code"=> "AF",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 2,
                "name"=> "Albania",
                "description"=> "Republic of Albania",
                "code"=> "AL",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 3,
                "name"=> "Antarctica",
                "description"=> "Antarctica",
                "code"=> "AQ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 4,
                "name"=> "Algeria",
                "description"=> "People’s Democratic Republic of Algeria",
                "code"=> "DZ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 5,
                "name"=> "American Samoa",
                "description"=> "Territory of American",
                "code"=> "AS",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 6,
                "name"=> "Andorra",
                "description"=> "Principality of Andorra",
                "code"=> "AD",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 7,
                "name"=> "Angola",
                "description"=> "Republic of Angola",
                "code"=> "AO",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 8,
                "name"=> "Antigua and Barbuda",
                "description"=> "Antigua and Barbuda",
                "code"=> "AG",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 9,
                "name"=> "Azerbaijan",
                "description"=> "Republic of Azerbaijan",
                "code"=> "AZ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 10,
                "name"=> "Argentina",
                "description"=> "Argentine Republic",
                "code"=> "AR",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 11,
                "name"=> "Australia",
                "description"=> "Commonwealth of Australia",
                "code"=> "AU",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 12,
                "name"=> "Austria",
                "description"=> "Republic of Austria",
                "code"=> "AT",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 13,
                "name"=> "Bahamas",
                "description"=> "Commonwealth of the Bahamas",
                "code"=> "BS",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 14,
                "name"=> "Bahrain",
                "description"=> "Kingdom of Bahrain",
                "code"=> "BH",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 15,
                "name"=> "Bangladesh",
                "description"=> "People’s Republic of Bangladesh",
                "code"=> "BD",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 16,
                "name"=> "Armenia",
                "description"=> "Republic of Armenia",
                "code"=> "AM",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 17,
                "name"=> "Barbados",
                "description"=> "Barbados",
                "code"=> "BB",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 18,
                "name"=> "Belgium",
                "description"=> "Kingdom of Belgium",
                "code"=> "BE",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 19,
                "name"=> "Bermuda",
                "description"=> "Bermuda",
                "code"=> "BM",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 20,
                "name"=> "Bhutan",
                "description"=> "Kingdom of Bhutan",
                "code"=> "BT",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 21,
                "name"=> "Bolivia, Plurinational State of",
                "description"=> "Plurinational State of Bolivia",
                "code"=> "BO",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 22,
                "name"=> "Bosnia and Herzegovina",
                "description"=> "Bosnia and Herzegovina",
                "code"=> "BA",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 23,
                "name"=> "Botswana",
                "description"=> "Republic of Botswana",
                "code"=> "BW",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 24,
                "name"=> "Bouvet Island",
                "description"=> "Bouvet Island",
                "code"=> "BV",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 25,
                "name"=> "Brazil",
                "description"=> "Federative Republic of Brazil",
                "code"=> "BR",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 26,
                "name"=> "Belize",
                "description"=> "Belize",
                "code"=> "BZ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 27,
                "name"=> "British Indian Ocean Territory",
                "description"=> "British Indian Ocean Territory",
                "code"=> "IO",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 28,
                "name"=> "Solomon Islands",
                "description"=> "Solomon Islands",
                "code"=> "SB",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 29,
                "name"=> "Virgin Islands, British",
                "description"=> "British Virgin Islands",
                "code"=> "VG",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 30,
                "name"=> "Brunei Darussalam",
                "description"=> "Brunei Darussalam",
                "code"=> "BN",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 31,
                "name"=> "Bulgaria",
                "description"=> "Republic of Bulgaria",
                "code"=> "BG",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 32,
                "name"=> "Myanmar",
                "description"=> "Union of Myanmar/",
                "code"=> "MM",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 33,
                "name"=> "Burundi",
                "description"=> "Republic of Burundi",
                "code"=> "BI",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 34,
                "name"=> "Belarus",
                "description"=> "Republic of Belarus",
                "code"=> "BY",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 35,
                "name"=> "Cambodia",
                "description"=> "Kingdom of Cambodia",
                "code"=> "KH",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 36,
                "name"=> "Cameroon",
                "description"=> "Republic of Cameroon",
                "code"=> "CM",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 37,
                "name"=> "Canada",
                "description"=> "Canada",
                "code"=> "CA",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 38,
                "name"=> "Cape Verde",
                "description"=> "Republic of Cape Verde",
                "code"=> "CV",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 39,
                "name"=> "Cayman Islands",
                "description"=> "Cayman Islands",
                "code"=> "KY",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 40,
                "name"=> "Central African Republic",
                "description"=> "Central African Republic",
                "code"=> "CF",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 41,
                "name"=> "Sri Lanka",
                "description"=> "Democratic Socialist Republic of Sri Lanka",
                "code"=> "LK",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 42,
                "name"=> "Chad",
                "description"=> "Republic of Chad",
                "code"=> "TD",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 43,
                "name"=> "Chile",
                "description"=> "Republic of Chile",
                "code"=> "CL",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 44,
                "name"=> "China",
                "description"=> "People’s Republic of China",
                "code"=> "CN",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 45,
                "name"=> "Taiwan, Province of China",
                "description"=> "Republic of China, Taiwan (TW1)",
                "code"=> "TW",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 46,
                "name"=> "Christmas Island",
                "description"=> "Christmas Island Territory",
                "code"=> "CX",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 47,
                "name"=> "Cocos (Keeling) Islands",
                "description"=> "Territory of Cocos (Keeling) Islands",
                "code"=> "CC",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 48,
                "name"=> "Colombia",
                "description"=> "Republic of Colombia",
                "code"=> "CO",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 49,
                "name"=> "Comoros",
                "description"=> "Union of the Comoros",
                "code"=> "KM",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 50,
                "name"=> "Mayotte",
                "description"=> "Departmental Collectivity of Mayotte",
                "code"=> "YT",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 51,
                "name"=> "Congo",
                "description"=> "Republic of the Congo",
                "code"=> "CG",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 52,
                "name"=> "Congo, the Democratic Republic of the",
                "description"=> "Democratic Republic of the Congo",
                "code"=> "CD",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 53,
                "name"=> "Cook Islands",
                "description"=> "Cook Islands",
                "code"=> "CK",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 54,
                "name"=> "Costa Rica",
                "description"=> "Republic of Costa Rica",
                "code"=> "CR",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 55,
                "name"=> "Croatia",
                "description"=> "Republic of Croatia",
                "code"=> "HR",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 56,
                "name"=> "Cuba",
                "description"=> "Republic of Cuba",
                "code"=> "CU",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 57,
                "name"=> "Cyprus",
                "description"=> "Republic of Cyprus",
                "code"=> "CY",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 58,
                "name"=> "Czech Republic",
                "description"=> "Czech Republic",
                "code"=> "CZ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 59,
                "name"=> "Benin",
                "description"=> "Republic of Benin",
                "code"=> "BJ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 60,
                "name"=> "Denmark",
                "description"=> "Kingdom of Denmark",
                "code"=> "DK",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 61,
                "name"=> "Dominica",
                "description"=> "Commonwealth of Dominica",
                "code"=> "DM",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 62,
                "name"=> "Dominican Republic",
                "description"=> "Dominican Republic",
                "code"=> "DO",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 63,
                "name"=> "Ecuador",
                "description"=> "Republic of Ecuador",
                "code"=> "EC",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 64,
                "name"=> "El Salvador",
                "description"=> "Republic of El Salvador",
                "code"=> "SV",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 65,
                "name"=> "Equatorial Guinea",
                "description"=> "Republic of Equatorial Guinea",
                "code"=> "GQ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 66,
                "name"=> "Ethiopia",
                "description"=> "Federal Democratic Republic of Ethiopia",
                "code"=> "ET",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 67,
                "name"=> "Eritrea",
                "description"=> "State of Eritrea",
                "code"=> "ER",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 68,
                "name"=> "Estonia",
                "description"=> "Republic of Estonia",
                "code"=> "EE",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 69,
                "name"=> "Faroe Islands",
                "description"=> "Faeroe Islands",
                "code"=> "FO",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 70,
                "name"=> "Falkland Islands (Malvinas)",
                "description"=> "Falkland Islands",
                "code"=> "FK",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 71,
                "name"=> "South Georgia and the South Sandwich Islands",
                "description"=> "South Georgia and the South Sandwich Islands",
                "code"=> "GS",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 72,
                "name"=> "Fiji",
                "description"=> "Republic of Fiji",
                "code"=> "FJ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 73,
                "name"=> "Finland",
                "description"=> "Republic of Finland",
                "code"=> "FI",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 74,
                "name"=> "Åland Islands",
                "description"=> "Åland Islands",
                "code"=> "AX",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 75,
                "name"=> "France",
                "description"=> "French Republic",
                "code"=> "FR",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 76,
                "name"=> "French Guiana",
                "description"=> "French Guiana",
                "code"=> "GF",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 77,
                "name"=> "French Polynesia",
                "description"=> "French Polynesia",
                "code"=> "PF",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 78,
                "name"=> "French Southern Territories",
                "description"=> "French Southern and Antarctic Lands",
                "code"=> "TF",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 79,
                "name"=> "Djibouti",
                "description"=> "Republic of Djibouti",
                "code"=> "DJ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 80,
                "name"=> "Gabon",
                "description"=> "Gabonese Republic",
                "code"=> "GA",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 81,
                "name"=> "Georgia",
                "description"=> "Georgia",
                "code"=> "GE",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 82,
                "name"=> "Gambia",
                "description"=> "Republic of the Gambia",
                "code"=> "GM",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 83,
                "name"=> "Palestinian Territory, Occupied",
                "description"=> "",
                "code"=> "PS",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 84,
                "name"=> "Germany",
                "description"=> "Federal Republic of Germany",
                "code"=> "DE",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 85,
                "name"=> "Ghana",
                "description"=> "Republic of Ghana",
                "code"=> "GH",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 86,
                "name"=> "Gibraltar",
                "description"=> "Gibraltar",
                "code"=> "GI",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 87,
                "name"=> "Kiribati",
                "description"=> "Republic of Kiribati",
                "code"=> "KI",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 88,
                "name"=> "Greece",
                "description"=> "Hellenic Republic",
                "code"=> "GR",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 89,
                "name"=> "Greenland",
                "description"=> "Greenland",
                "code"=> "GL",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 90,
                "name"=> "Grenada",
                "description"=> "Grenada",
                "code"=> "GD",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 91,
                "name"=> "Guadeloupe",
                "description"=> "Guadeloupe",
                "code"=> "GP",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 92,
                "name"=> "Guam",
                "description"=> "Territory of Guam",
                "code"=> "GU",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 93,
                "name"=> "Guatemala",
                "description"=> "Republic of Guatemala",
                "code"=> "GT",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 94,
                "name"=> "Guinea",
                "description"=> "Republic of Guinea",
                "code"=> "GN",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 95,
                "name"=> "Guyana",
                "description"=> "Cooperative Republic of Guyana",
                "code"=> "GY",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 96,
                "name"=> "Haiti",
                "description"=> "Republic of Haiti",
                "code"=> "HT",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 97,
                "name"=> "Heard Island and McDonald Islands",
                "description"=> "Territory of Heard Island and McDonald Islands",
                "code"=> "HM",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 98,
                "name"=> "Holy See (Vatican City State)",
                "description"=> "the Holy See/ Vatican City State",
                "code"=> "VA",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 99,
                "name"=> "Honduras",
                "description"=> "Republic of Honduras",
                "code"=> "HN",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 100,
                "name"=> "Hong Kong",
                "description"=> "Hong Kong Special Administrative Region of the People’s Republic of China (HK2)",
                "code"=> "HK",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 101,
                "name"=> "Hungary",
                "description"=> "Republic of Hungary",
                "code"=> "HU",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 102,
                "name"=> "Iceland",
                "description"=> "Republic of Iceland",
                "code"=> "IS",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 103,
                "name"=> "India",
                "description"=> "Republic of India",
                "code"=> "IN",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 104,
                "name"=> "Indonesia",
                "description"=> "Republic of Indonesia",
                "code"=> "ID",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 105,
                "name"=> "Iran, Islamic Republic of",
                "description"=> "Islamic Republic of Iran",
                "code"=> "IR",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 106,
                "name"=> "Iraq",
                "description"=> "Republic of Iraq",
                "code"=> "IQ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 107,
                "name"=> "Ireland",
                "description"=> "Ireland (IE1)",
                "code"=> "IE",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 108,
                "name"=> "Israel",
                "description"=> "State of Israel",
                "code"=> "IL",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 109,
                "name"=> "Italy",
                "description"=> "Italian Republic",
                "code"=> "IT",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 110,
                "name"=> "Côte d'Ivoire",
                "description"=> "Republic of Côte d’Ivoire",
                "code"=> "CI",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 111,
                "name"=> "Jamaica",
                "description"=> "Jamaica",
                "code"=> "JM",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 112,
                "name"=> "Japan",
                "description"=> "Japan",
                "code"=> "JP",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 113,
                "name"=> "Kazakhstan",
                "description"=> "Republic of Kazakhstan",
                "code"=> "KZ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 114,
                "name"=> "Jordan",
                "description"=> "Hashemite Kingdom of Jordan",
                "code"=> "JO",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 115,
                "name"=> "Kenya",
                "description"=> "Republic of Kenya",
                "code"=> "KE",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 116,
                "name"=> "Korea, Democratic People's Republic of",
                "description"=> "Democratic People’s Republic of Korea",
                "code"=> "KP",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 117,
                "name"=> "Korea, Republic of",
                "description"=> "Republic of Korea",
                "code"=> "KR",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 118,
                "name"=> "Kuwait",
                "description"=> "State of Kuwait",
                "code"=> "KW",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 119,
                "name"=> "Kyrgyzstan",
                "description"=> "Kyrgyz Republic",
                "code"=> "KG",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 120,
                "name"=> "Lao People's Democratic Republic",
                "description"=> "Lao People’s Democratic Republic",
                "code"=> "LA",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 121,
                "name"=> "Lebanon",
                "description"=> "Lebanese Republic",
                "code"=> "LB",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 122,
                "name"=> "Lesotho",
                "description"=> "Kingdom of Lesotho",
                "code"=> "LS",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 123,
                "name"=> "Latvia",
                "description"=> "Republic of Latvia",
                "code"=> "LV",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 124,
                "name"=> "Liberia",
                "description"=> "Republic of Liberia",
                "code"=> "LR",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 125,
                "name"=> "Libya",
                "description"=> "Socialist People’s Libyan Arab Jamahiriya",
                "code"=> "LY",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 126,
                "name"=> "Liechtenstein",
                "description"=> "Principality of Liechtenstein",
                "code"=> "LI",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 127,
                "name"=> "Lithuania",
                "description"=> "Republic of Lithuania",
                "code"=> "LT",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 128,
                "name"=> "Luxembourg",
                "description"=> "Grand Duchy of Luxembourg",
                "code"=> "LU",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 129,
                "name"=> "Macao",
                "description"=> "Macao Special Administrative Region of the People’s Republic of China (MO2)",
                "code"=> "MO",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 130,
                "name"=> "Madagascar",
                "description"=> "Republic of Madagascar",
                "code"=> "MG",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 131,
                "name"=> "Malawi",
                "description"=> "Republic of Malawi",
                "code"=> "MW",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 132,
                "name"=> "Malaysia",
                "description"=> "Malaysia",
                "code"=> "MY",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 133,
                "name"=> "Maldives",
                "description"=> "Republic of Maldives",
                "code"=> "MV",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 134,
                "name"=> "Mali",
                "description"=> "Republic of Mali",
                "code"=> "ML",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 135,
                "name"=> "Malta",
                "description"=> "Republic of Malta",
                "code"=> "MT",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 136,
                "name"=> "Martinique",
                "description"=> "Martinique",
                "code"=> "MQ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 137,
                "name"=> "Mauritania",
                "description"=> "Islamic Republic of Mauritania",
                "code"=> "MR",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 138,
                "name"=> "Mauritius",
                "description"=> "Republic of Mauritius",
                "code"=> "MU",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 139,
                "name"=> "Mexico",
                "description"=> "United Mexican States",
                "code"=> "MX",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 140,
                "name"=> "Monaco",
                "description"=> "Principality of Monaco",
                "code"=> "MC",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 141,
                "name"=> "Mongolia",
                "description"=> "Mongolia",
                "code"=> "MN",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 142,
                "name"=> "Moldova, Republic of",
                "description"=> "Republic of Moldova",
                "code"=> "MD",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 143,
                "name"=> "Montenegro",
                "description"=> "Montenegro",
                "code"=> "ME",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 144,
                "name"=> "Montserrat",
                "description"=> "Montserrat",
                "code"=> "MS",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 145,
                "name"=> "Morocco",
                "description"=> "Kingdom of Morocco",
                "code"=> "MA",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 146,
                "name"=> "Mozambique",
                "description"=> "Republic of Mozambique",
                "code"=> "MZ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 147,
                "name"=> "Oman",
                "description"=> "Sultanate of Oman",
                "code"=> "OM",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 148,
                "name"=> "Namibia",
                "description"=> "Republic of Namibia",
                "code"=> "NA",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 149,
                "name"=> "Nauru",
                "description"=> "Republic of Nauru",
                "code"=> "NR",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 150,
                "name"=> "Nepal",
                "description"=> "Nepal",
                "code"=> "NP",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 151,
                "name"=> "Netherlands",
                "description"=> "Kingdom of the Netherlands",
                "code"=> "NL",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 152,
                "name"=> "Curaçao",
                "description"=> "Curaçao",
                "code"=> "CW",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 153,
                "name"=> "Aruba",
                "description"=> "Aruba",
                "code"=> "AW",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 154,
                "name"=> "Sint Maarten (Dutch part)",
                "description"=> "Sint Maarten",
                "code"=> "SX",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 155,
                "name"=> "Bonaire, Sint Eustatius and Saba",
                "description"=> "",
                "code"=> "BQ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 156,
                "name"=> "New Caledonia",
                "description"=> "New Caledonia",
                "code"=> "NC",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 157,
                "name"=> "Vanuatu",
                "description"=> "Republic of Vanuatu",
                "code"=> "VU",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 158,
                "name"=> "New Zealand",
                "description"=> "New Zealand",
                "code"=> "NZ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 159,
                "name"=> "Nicaragua",
                "description"=> "Republic of Nicaragua",
                "code"=> "NI",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 160,
                "name"=> "Niger",
                "description"=> "Republic of Niger",
                "code"=> "NE",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 161,
                "name"=> "Nigeria",
                "description"=> "Federal Republic of Nigeria",
                "code"=> "NG",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 162,
                "name"=> "Niue",
                "description"=> "Niue",
                "code"=> "NU",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 163,
                "name"=> "Norfolk Island",
                "description"=> "Territory of Norfolk Island",
                "code"=> "NF",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 164,
                "name"=> "Norway",
                "description"=> "Kingdom of Norway",
                "code"=> "NO",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 165,
                "name"=> "Northern Mariana Islands",
                "description"=> "Commonwealth of the Northern Mariana Islands",
                "code"=> "MP",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 166,
                "name"=> "United States Minor Outlying Islands",
                "description"=> "United States Minor Outlying Islands",
                "code"=> "UM",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 167,
                "name"=> "Micronesia, Federated States of",
                "description"=> "Federated States of Micronesia",
                "code"=> "FM",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 168,
                "name"=> "Marshall Islands",
                "description"=> "Republic of the Marshall Islands",
                "code"=> "MH",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 169,
                "name"=> "Palau",
                "description"=> "Republic of Palau",
                "code"=> "PW",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 170,
                "name"=> "Pakistan",
                "description"=> "Islamic Republic of Pakistan",
                "code"=> "PK",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 171,
                "name"=> "Panama",
                "description"=> "Republic of Panama",
                "code"=> "PA",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 172,
                "name"=> "Papua New Guinea",
                "description"=> "Independent State of Papua New Guinea",
                "code"=> "PG",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 173,
                "name"=> "Paraguay",
                "description"=> "Republic of Paraguay",
                "code"=> "PY",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 174,
                "name"=> "Peru",
                "description"=> "Republic of Peru",
                "code"=> "PE",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 175,
                "name"=> "Philippines",
                "description"=> "Republic of the Philippines",
                "code"=> "PH",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 176,
                "name"=> "Pitcairn",
                "description"=> "Pitcairn Islands",
                "code"=> "PN",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 177,
                "name"=> "Poland",
                "description"=> "Republic of Poland",
                "code"=> "PL",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 178,
                "name"=> "Portugal",
                "description"=> "Portuguese Republic",
                "code"=> "PT",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 179,
                "name"=> "Guinea-Bissau",
                "description"=> "Republic of Guinea-Bissau",
                "code"=> "GW",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 180,
                "name"=> "Timor-Leste",
                "description"=> "Democratic Republic of East Timor",
                "code"=> "TL",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 181,
                "name"=> "Puerto Rico",
                "description"=> "Commonwealth of Puerto Rico",
                "code"=> "PR",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 182,
                "name"=> "Qatar",
                "description"=> "State of Qatar",
                "code"=> "QA",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 183,
                "name"=> "Réunion",
                "description"=> "Réunion",
                "code"=> "RE",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 184,
                "name"=> "Romania",
                "description"=> "Romania",
                "code"=> "RO",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 185,
                "name"=> "Russian Federation",
                "description"=> "Russian Federation",
                "code"=> "RU",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 186,
                "name"=> "Rwanda",
                "description"=> "Republic of Rwanda",
                "code"=> "RW",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 187,
                "name"=> "Saint Barthélemy",
                "description"=> "Collectivity of Saint Barthélemy",
                "code"=> "BL",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 188,
                "name"=> "Saint Helena, Ascension and Tristan da Cunha",
                "description"=> "Saint Helena, Ascension and Tristan da Cunha",
                "code"=> "SH",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 189,
                "name"=> "Saint Kitts and Nevis",
                "description"=> "Federation of Saint Kitts and Nevis",
                "code"=> "KN",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 190,
                "name"=> "Anguilla",
                "description"=> "Anguilla",
                "code"=> "AI",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 191,
                "name"=> "Saint Lucia",
                "description"=> "Saint Lucia",
                "code"=> "LC",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 192,
                "name"=> "Saint Martin (French part)",
                "description"=> "Collectivity of Saint Martin",
                "code"=> "MF",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 193,
                "name"=> "Saint Pierre and Miquelon",
                "description"=> "Territorial Collectivity of Saint Pierre and Miquelon",
                "code"=> "PM",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 194,
                "name"=> "Saint Vincent and the Grenadines",
                "description"=> "Saint Vincent and the Grenadines",
                "code"=> "VC",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 195,
                "name"=> "San Marino",
                "description"=> "Republic of San Marino",
                "code"=> "SM",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 196,
                "name"=> "Sao Tome and Principe",
                "description"=> "Democratic Republic of São Tomé and Príncipe",
                "code"=> "ST",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 197,
                "name"=> "Saudi Arabia",
                "description"=> "Kingdom of Saudi Arabia",
                "code"=> "SA",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 198,
                "name"=> "Senegal",
                "description"=> "Republic of Senegal",
                "code"=> "SN",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 199,
                "name"=> "Serbia",
                "description"=> "Republic of Serbia",
                "code"=> "RS",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 200,
                "name"=> "Seychelles",
                "description"=> "Republic of Seychelles",
                "code"=> "SC",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 201,
                "name"=> "Sierra Leone",
                "description"=> "Republic of Sierra Leone",
                "code"=> "SL",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 202,
                "name"=> "Singapore",
                "description"=> "Republic of Singapore",
                "code"=> "SG",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 203,
                "name"=> "Slovakia",
                "description"=> "Slovak Republic",
                "code"=> "SK",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 204,
                "name"=> "Viet Nam",
                "description"=> "Socialist Republic of Vietnam",
                "code"=> "VN",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 205,
                "name"=> "Slovenia",
                "description"=> "Republic of Slovenia",
                "code"=> "SI",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 206,
                "name"=> "Somalia",
                "description"=> "Somali Republic",
                "code"=> "SO",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 207,
                "name"=> "South Africa",
                "description"=> "Republic of South Africa",
                "code"=> "ZA",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 208,
                "name"=> "Zimbabwe",
                "description"=> "Republic of Zimbabwe",
                "code"=> "ZW",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 209,
                "name"=> "Spain",
                "description"=> "Kingdom of Spain",
                "code"=> "ES",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 210,
                "name"=> "South Sudan",
                "description"=> "Republic of South Sudan",
                "code"=> "SS",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 211,
                "name"=> "Sudan",
                "description"=> "Republic of the Sudan",
                "code"=> "SD",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 212,
                "name"=> "Western Sahara",
                "description"=> "Western Sahara",
                "code"=> "EH",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 213,
                "name"=> "Suriname",
                "description"=> "Republic of Suriname",
                "code"=> "SR",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 214,
                "name"=> "Svalbard and Jan Mayen",
                "description"=> "Svalbard and Jan Mayen",
                "code"=> "SJ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 215,
                "name"=> "Swaziland",
                "description"=> "Kingdom of Swaziland",
                "code"=> "SZ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 216,
                "name"=> "Sweden",
                "description"=> "Kingdom of Sweden",
                "code"=> "SE",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 217,
                "name"=> "Switzerland",
                "description"=> "Swiss Confederation",
                "code"=> "CH",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 218,
                "name"=> "Syrian Arab Republic",
                "description"=> "Syrian Arab Republic",
                "code"=> "SY",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 219,
                "name"=> "Tajikistan",
                "description"=> "Republic of Tajikistan",
                "code"=> "TJ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 220,
                "name"=> "Thailand",
                "description"=> "Kingdom of Thailand",
                "code"=> "TH",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 221,
                "name"=> "Togo",
                "description"=> "Togolese Republic",
                "code"=> "TG",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 222,
                "name"=> "Tokelau",
                "description"=> "Tokelau",
                "code"=> "TK",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 223,
                "name"=> "Tonga",
                "description"=> "Kingdom of Tonga",
                "code"=> "TO",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 224,
                "name"=> "Trinidad and Tobago",
                "description"=> "Republic of Trinidad and Tobago",
                "code"=> "TT",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 225,
                "name"=> "United Arab Emirates",
                "description"=> "United Arab Emirates",
                "code"=> "AE",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 226,
                "name"=> "Tunisia",
                "description"=> "Republic of Tunisia",
                "code"=> "TN",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 227,
                "name"=> "Turkey",
                "description"=> "Republic of Turkey",
                "code"=> "TR",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 228,
                "name"=> "Turkmenistan",
                "description"=> "Turkmenistan",
                "code"=> "TM",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 229,
                "name"=> "Turks and Caicos Islands",
                "description"=> "Turks and Caicos Islands",
                "code"=> "TC",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 230,
                "name"=> "Tuvalu",
                "description"=> "Tuvalu",
                "code"=> "TV",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 231,
                "name"=> "Uganda",
                "description"=> "Republic of Uganda",
                "code"=> "UG",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 232,
                "name"=> "Ukraine",
                "description"=> "Ukraine",
                "code"=> "UA",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 233,
                "name"=> "Macedonia, the former Yugoslav Republic of",
                "description"=> "the former Yugoslav Republic of Macedonia",
                "code"=> "MK",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 234,
                "name"=> "Egypt",
                "description"=> "Arab Republic of Egypt",
                "code"=> "EG",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 235,
                "name"=> "United Kingdom",
                "description"=> "United Kingdom of Great Britain and Northern Ireland",
                "code"=> "GB",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 236,
                "name"=> "Guernsey",
                "description"=> "Bailiwick of Guernsey",
                "code"=> "GG",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 237,
                "name"=> "Jersey",
                "description"=> "Bailiwick of Jersey",
                "code"=> "JE",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 238,
                "name"=> "Isle of Man",
                "description"=> "Isle of Man",
                "code"=> "IM",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 239,
                "name"=> "Tanzania, United Republic of",
                "description"=> "United Republic of Tanzania",
                "code"=> "TZ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 240,
                "name"=> "United States",
                "description"=> "United States of America",
                "code"=> "US",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 241,
                "name"=> "Virgin Islands, U.S.",
                "description"=> "United States Virgin Islands",
                "code"=> "VI",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 242,
                "name"=> "Burkina Faso",
                "description"=> "Burkina Faso",
                "code"=> "BF",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 243,
                "name"=> "Uruguay",
                "description"=> "Eastern Republic of Uruguay",
                "code"=> "UY",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 244,
                "name"=> "Uzbekistan",
                "description"=> "Republic of Uzbekistan",
                "code"=> "UZ",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 245,
                "name"=> "Venezuela, Bolivarian Republic of",
                "description"=> "Bolivarian Republic of Venezuela",
                "code"=> "VE",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 246,
                "name"=> "Wallis and Futuna",
                "description"=> "Wallis and Futuna",
                "code"=> "WF",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 247,
                "name"=> "Samoa",
                "description"=> "Independent State of Samoa",
                "code"=> "WS",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 248,
                "name"=> "Yemen",
                "description"=> "Republic of Yemen",
                "code"=> "YE",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ],
            [
                "id"=> 249,
                "name"=> "Zambia",
                "description"=> "Republic of Zambia",
                "code"=> "ZM",
                "created_at"=> null,
                "updated_at"=> null,
                "deleted_at"=> null
            ]
        ];

        foreach ($countries as $country) {
            $new_country = new Country($country);
            $new_country->save();
        }
    }
}
