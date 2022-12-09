<?php

namespace Database\Seeders;

use App\Models\Member;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $members = [
            [
                "id"=> 1,
                "name"=> "Barr. Emeka Mgbudem",
                "fin_status"=> 1
            ],
            [
                "id"=> 2,
                "name"=> "Mr. Boniface Nwaorisa",
                "fin_status"=> 0
            ],
            [
                "id"=> 3,
                "name"=> "Dr. Okey Onyejiaka",
                "fin_status"=> 1
            ],
            [
                "id"=> 4,
                "name"=> "Mr. Donatus Ejiogu",
                "fin_status"=> 1
            ],
            [
                "id"=> 5,
                "name"=> "Chief Vincent Ndupu",
                "fin_status"=> 1
            ],
            [
                "id"=> 6,
                "name"=> "Chief. Mike Onuoha",
                "fin_status"=> 0
            ],
            [
                "id"=> 7,
                "name"=> "Mr. Sydney Mmeka",
                "fin_status"=> 0
            ],
            [
                "id"=> 8,
                "name"=> "Mr. Okey Uzoma",
                "fin_status"=> 1
            ],
            [
                "id"=> 9,
                "name"=> "Mr. Charles Mbachu",
                "fin_status"=> 0
            ],
            [
                "id"=> 10,
                "name"=> "Sir Charles Iwunze",
                "fin_status"=> 1
            ],
            [
                "id"=> 11,
                "name"=> "Chief. Chris Anyiam",
                "fin_status"=> 0
            ],
            [
                "id"=> 12,
                "name"=> "Chief Chibuike Onyejiaka",
                "fin_status"=> 0
            ],
            [
                "id"=> 13,
                "name"=> "Engr. Chris Ukommadu",
                "fin_status"=> 1
            ],
            [
                "id"=> 14,
                "name"=> "Mr.  Chijioke Nwosu",
                "fin_status"=> 0
            ],
            [
                "id"=> 15,
                "name"=> "Mr. Chris Isiguzo",
                "fin_status"=> 0
            ],
            [
                "id"=> 16,
                "name"=> "Mr. Chukwuka Nwihim",
                "fin_status"=> 0
            ],
            [
                "id"=> 17,
                "name"=> "Mr. Kingsley Ekenulo",
                "fin_status"=> 1
            ],
            [
                "id"=> 18,
                "name"=> "Mr. Ambrose Ejiogu",
                "fin_status"=> 0
            ],
            [
                "id"=> 19,
                "name"=> "Mr. Dozie Onyenufo",
                "fin_status"=> 0
            ],
            [
                "id"=> 20,
                "name"=> "Mr. 0nye Odoemenam",
                "fin_status"=> 0
            ],
            [
                "id"=> 21,
                "name"=> "Engr. Patrick Obialor",
                "fin_status"=> 1
            ],
            [
                "id"=> 22,
                "name"=> "Mr. Frank Osuji",
                "fin_status"=> 1
            ],
            [
                "id"=> 23,
                "name"=> "Mr. Victor Igbokwe",
                "fin_status"=> 0
            ],
            [
                "id"=> 24,
                "name"=> "Mr. Charles Igbokwe",
                "fin_status"=> 0
            ],
            [
                "id"=> 25,
                "name"=> "Nze Chimezie Osuala",
                "fin_status"=> 1
            ],
            [
                "id"=> 26,
                "name"=> "Mr. Yadima Onwu",
                "fin_status"=> 1
            ],
            [
                "id"=> 27,
                "name"=> "Chief. CSC Mbagwu",
                "fin_status"=> 0
            ],
            [
                "id"=> 28,
                "name"=> "Hon. Nwoha Amaechi",
                "fin_status"=> 1
            ],
            [
                "id"=> 29,
                "name"=> "Mr. Eugene Achinulo",
                "fin_status"=> 1
            ],
            [
                "id"=> 30,
                "name"=> "Dr. Emeka Oguike",
                "fin_status"=> 0
            ],
            [
                "id"=> 31,
                "name"=> "Dr. Emmanuel Iwueke",
                "fin_status"=> 1
            ],
            [
                "id"=> 32,
                "name"=> "Mr. Charles Duru",
                "fin_status"=> 0
            ],
            [
                "id"=> 33,
                "name"=> "Engr. Cletus Egbuzie",
                "fin_status"=> 1
            ],
            [
                "id"=> 34,
                "name"=> "Mr. Nathan Osuchukwu",
                "fin_status"=> 0
            ],
            [
                "id"=> 35,
                "name"=> "Chief. Pope Agbarakwe",
                "fin_status"=> 0
            ],
            [
                "id"=> 36,
                "name"=> "Chief Eze Chukwukere",
                "fin_status"=> 0
            ],
            [
                "id"=> 37,
                "name"=> "Dr. Nicholas Ohaya",
                "fin_status"=> 1
            ],
            [
                "id"=> 38,
                "name"=> "Dr. Chijioke Ukadike",
                "fin_status"=> 1
            ],
            [
                "id"=> 39,
                "name"=> "Mr. Henry Nwozuzu",
                "fin_status"=> 1
            ],
            [
                "id"=> 40,
                "name"=> "Mr. Chigozie Aguguo",
                "fin_status"=> 1
            ],
            [
                "id"=> 41,
                "name"=> "Mr. Aloysius Osuiwu",
                "fin_status"=> 1
            ],
            [
                "id"=> 42,
                "name"=> "Mr. Cyril Unanka",
                "fin_status"=> 0
            ],
            [
                "id"=> 43,
                "name"=> "Sir Fyne Madumere",
                "fin_status"=> 1
            ],
            [
                "id"=> 44,
                "name"=> "Mr. Theo Ajoku",
                "fin_status"=> 1
            ],
            [
                "id"=> 45,
                "name"=> "Engr. Kenneth Nwagbara",
                "fin_status"=> 1
            ],
            [
                "id"=> 46,
                "name"=> "Sir  Philip Ofoegbu",
                "fin_status"=> 1
            ],
            [
                "id"=> 47,
                "name"=> "Dr. Johnbosco Nkpadobi",
                "fin_status"=> 1
            ],
            [
                "id"=> 48,
                "name"=> "Pharm Kenneth Onuegbu",
                "fin_status"=> 1
            ],
            [
                "id"=> 49,
                "name"=> "Sir Kenneth Egenti",
                "fin_status"=> 1
            ],
            [
                "id"=> 50,
                "name"=> "Mr. Stanley Emeanuo",
                "fin_status"=> 1
            ],
            [
                "id"=> 51,
                "name"=> "Engr. Frank Jude Nkpadobi",
                "fin_status"=> 1
            ],
            [
                "id"=> 52,
                "name"=> "Chief Oliver Osuala",
                "fin_status"=> 1
            ],
            [
                "id"=> 53,
                "name"=> "Chief Athan Iwuchukwu",
                "fin_status"=> 0
            ],
            [
                "id"=> 54,
                "name"=> "Mr. Okechukwu Ikeme",
                "fin_status"=> 1
            ],
            [
                "id"=> 55,
                "name"=> "Mr. Kingsley Okechukwu Ukonu",
                "fin_status"=> 0
            ],
            [
                "id"=> 56,
                "name"=> "Mr. Edward Emeanuo",
                "fin_status"=> 1
            ],
            [
                "id"=> 57,
                "name"=> "Engr, Anselem U. Onwuanaku",
                "fin_status"=> 1
            ],
            [
                "id"=> 58,
                "name"=> "Sir Emeka Nwosu",
                "fin_status"=> 1
            ],
            [
                "id"=> 59,
                "name"=> "Chief Chigozie Anyiam",
                "fin_status"=> 1
            ],
            [
                "id"=> 60,
                "name"=> "Major D. I. Azubuike (Rtd)",
                "fin_status"=> 1
            ],
            [
                "id"=> 61,
                "name"=> "Mr. Felix Ihegworo",
                "fin_status"=> 1
            ],
            [
                "id"=> 62,
                "name"=> "Chief Okey Aloy Oluigbo",
                "fin_status"=> 1
            ],
            [
                "id"=> 63,
                "name"=> "Sir Chi0nso Leonard Ihenetu",
                "fin_status"=> 1
            ],
            [
                "id"=> 64,
                "name"=> "Mr. Anthony Mbakwe",
                "fin_status"=> 1
            ],
            [
                "id"=> 65,
                "name"=> "Barr. Ezekanachi Onwuka Nna",
                "fin_status"=> 1
            ],
            [
                "id"=> 66,
                "name"=> "Mr. Kelechi Nwabueze Duru",
                "fin_status"=> 1
            ],
            [
                "id"=> 67,
                "name"=> "Dr. Chidi Uzoma",
                "fin_status"=> 1
            ],
            [
                "id"=> 68,
                "name"=> "Sir Chijioke Uzoma",
                "fin_status"=> 1
            ],
            [
                "id"=> 69,
                "name"=> "Mr. Chinenye Nmezi",
                "fin_status"=> 1
            ],
            [
                "id"=> 70,
                "name"=> "Sir Obinna Francis Chukwuny",
                "fin_status"=> 1
            ],
            [
                "id"=> 71,
                "name"=> "Mr. Vincent Okechukwu Egbu",
                "fin_status"=> 1
            ],
            [
                "id"=> 72,
                "name"=> "Mr. George Emeka Anyiam",
                "fin_status"=> 1
            ],
            [
                "id"=> 73,
                "name"=> "Mr. Benson Unanka",
                "fin_status"=> 0
            ],
            [
                "id"=> 74,
                "name"=> "Barr. Justus Kelechukwu Ukag",
                "fin_status"=> 1
            ],
            [
                "id"=> 75,
                "name"=> "Dr. Chidi Nwoha King",
                "fin_status"=> 1
            ],
            [
                "id"=> 76,
                "name"=> "HRM Eze Dr. Chukwudi Ihetu",
                "fin_status"=> 1
            ],
            [
                "id"=> 77,
                "name"=> "Mr. Stanley Ozurumba",
                "fin_status"=> 1
            ],
            [
                "id"=> 78,
                "name"=> "Mr. Ikechukwu Henry Etumnu",
                "fin_status"=> 1
            ],
            [
                "id"=> 79,
                "name"=> "Engr. Kingsley Achonu",
                "fin_status"=> 1
            ],
            [
                "id"=> 80,
                "name"=> "Barr Uche Olewunne",
                "fin_status"=> 1
            ],
            [
                "id"=> 81,
                "name"=> "Chief Emmanuel Nwokedi Ibe",
                "fin_status"=> 1
            ],
            [
                "id"=> 82,
                "name"=> "Mr. Bede Iheanyi Egbufor",
                "fin_status"=> 1
            ],
            [
                "id"=> 83,
                "name"=> "Chief Joseph Chukwuma Ndu",
                "fin_status"=> 1
            ],
            [
                "id"=> 84,
                "name"=> "Engr. Amobi Larry Onyejiaka",
                "fin_status"=> 1
            ],
            [
                "id"=> 85,
                "name"=> "Mr. Kingsley Nmeka",
                "fin_status"=> 1
            ],
            [
                "id"=> 86,
                "name"=> "Mr. Jude O. Duru",
                "fin_status"=> 1
            ],
            [
                "id"=> 87,
                "name"=> "Prince Ike Etuba Nwosu",
                "fin_status"=> 1
            ],
            [
                "id"=> 88,
                "name"=> "Mr. Chris Osuala",
                "fin_status"=> 1
            ],
            [
                "id"=> 89,
                "name"=> "Chief Ken Iwualla",
                "fin_status"=> 1
            ],
            [
                "id"=> 90,
                "name"=> "Sir Frank Ikejiofor",
                "fin_status"=> 1
            ],
            [
                "id"=> 91,
                "name"=> "Mr. Chidi Alex Anyadike",
                "fin_status"=> 1
            ],
            [
                "id"=> 92,
                "name"=> "Dr. Dominic Chimezie Amaech",
                "fin_status"=> 1
            ],
            [
                "id"=> 93,
                "name"=> "Dr.George Duru",
                "fin_status"=> 1
            ],
            [
                "id"=> 94,
                "name"=> "Mr. Solomon Mgbokwere",
                "fin_status"=> 1
            ],
            [
                "id"=> 95,
                "name"=> "Engr. Basil Onunwa",
                "fin_status"=> 1
            ],
            [
                "id"=> 96,
                "name"=> "Dr. Godfrey Ohadugha",
                "fin_status"=> 1
            ],
            [
                "id"=> 97,
                "name"=> "Mr. Chigozie H. Agubata",
                "fin_status"=> 1
            ],
            [
                "id"=> 98,
                "name"=> "Dr. Chikwe Ihekweazu",
                "fin_status"=> 1
            ],
            [
                "id"=> 99,
                "name"=> "Chief Anthony Olemgbe",
                "fin_status"=> 1
            ],
            [
                "id"=> 100,
                "name"=> "Chief Dr. Collins Okehie",
                "fin_status"=> 1
            ],
            [
                "id"=> 101,
                "name"=> "Mr. Timothy Eze",
                "fin_status"=> 1
            ],
            [
                "id"=> 102,
                "name"=> "Engr. Eso celestine Ugoeze",
                "fin_status"=> 1
            ],
            [
                "id"=> 103,
                "name"=> "Sir Jude Mbadiwe Chinyere",
                "fin_status"=> 1
            ],
            [
                "id"=> 104,
                "name"=> "Mr. Ben Ihegboro",
                "fin_status"=> 1
            ],
            [
                "id"=> 105,
                "name"=> "Mr. Amobi Pascal A0chirim",
                "fin_status"=> 1
            ],
            [
                "id"=> 106,
                "name"=> "Mr. Chigozie Victor Osuchukw",
                "fin_status"=> 1
            ],
            [
                "id"=> 107,
                "name"=> "Mr. Amaraegbu Kingsley Ozur",
                "fin_status"=> 1
            ],
            [
                "id"=> 108,
                "name"=> "Engr. Chris Kelechi Amaeachi",
                "fin_status"=> 1
            ]
        ];

        foreach($members as $member)
        {
            $member['pin'] = random_int(1000, 9999);
            $member['regno'] = random_int(10000, 99999);
            Member::create($member);


        }
    }
}
