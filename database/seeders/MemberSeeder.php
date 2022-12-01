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
                "id" => 1,
                "name" => "Barr. Emeka Mgbudem",
                "regno" => "AUF2211001"
            ],
            [
                "id" => 2,
                "name" => "Mr. Boniface Nwaorisa",
                "regno" => "AUF2211002"
            ],
            [
                "id" => 3,
                "name" => "Dr. Okey Onyejiaka",
                "regno" => "AUF2211003"
            ],
            [
                "id" => 4,
                "name" => "Mr. Donatus Ejiogu",
                "regno" => "AUF2211004"
            ],
            [
                "id" => 5,
                "name" => "Chief Vincent Ndupu",
                "regno" => "AUF2211005"
            ],
            [
                "id" => 6,
                "name" => "Chief. Mike Onuoha",
                "regno" => "AUF2211006"
            ],
            [
                "id" => 7,
                "name" => "Mr. Sydney Mmeka",
                "regno" => "AUF2211007"
            ],
            [
                "id" => 8,
                "name" => "Mr. Okey Uzoma",
                "regno" => "AUF2211008"
            ],
            [
                "id" => 9,
                "name" => "Mr. Charles Mbachu",
                "regno" => "AUF2211009"
            ],
            [
                "id" => 10,
                "name" => "Sir Charles Iwunze",
                "regno" => "AUF2211010"
            ],
            [
                "id" => 11,
                "name" => "Chief. Chris Anyiam ",
                "regno" => "AUF2211011"
            ],
            [
                "id" => 12,
                "name" => "Chief Chibuike Onyejiaka",
                "regno" => "AUF2211012"
            ],
            [
                "id" => 13,
                "name" => "Engr. Chris Ukommadu",
                "regno" => "AUF2211013"
            ],
            [
                "id" => 14,
                "name" => "Mr.  Chijioke Nwosu",
                "regno" => "AUF2211014"
            ],
            [
                "id" => 15,
                "name" => "Mr. Chris Isiguzo",
                "regno" => "AUF2211015"
            ],
            [
                "id" => 16,
                "name" => "Mr. Chukwuka Nwihim",
                "regno" => "AUF2211016"
            ],
            [
                "id" => 17,
                "name" => "Mr. Kingsley Ekenulo",
                "regno" => "AUF2211017"
            ],
            [
                "id" => 18,
                "name" => "Mr. Ambrose Ejiogu",
                "regno" => "AUF2211018"
            ],
            [
                "id" => 19,
                "name" => "Mr. Dozie Onyenufo",
                "regno" => "AUF2211019"
            ],
            [
                "id" => 20,
                "name" => "Mr. Nonye Odoemenam",
                "regno" => "AUF2211020"
            ],
            [
                "id" => 21,
                "name" => "Engr. Patrick Obialor",
                "regno" => "AUF2211021"
            ],
            [
                "id" => 22,
                "name" => "Mr. Frank Osuji",
                "regno" => "AUF2211022"
            ],
            [
                "id" => 23,
                "name" => "Mr. Victor Igbokwe",
                "regno" => "AUF2211023"
            ],
            [
                "id" => 24,
                "name" => "Mr. Charles Igbokwe",
                "regno" => "AUF2211024"
            ],
            [
                "id" => 25,
                "name" => "Nze Chimezie Osuala",
                "regno" => "AUF2211025"
            ],
            [
                "id" => 26,
                "name" => "Mr. Yadima Onwu",
                "regno" => "AUF2211026"
            ],
            [
                "id" => 27,
                "name" => "Chief. CSC Mbagwu",
                "regno" => "AUF2211027"
            ],
            [
                "id" => 28,
                "name" => "Hon. Nwoha Amaechi",
                "regno" => "AUF2211028"
            ],
            [
                "id" => 29,
                "name" => "Mr. Eugene Achinulo",
                "regno" => "AUF2211029"
            ],
            [
                "id" => 30,
                "name" => "Dr. Emeka Oguike",
                "regno" => "AUF2211030"
            ],
            [
                "id" => 31,
                "name" => "Dr. Emmanuel Iwueke",
                "regno" => "AUF2211031"
            ],
            [
                "id" => 32,
                "name" => "Mr. Charles Duru",
                "regno" => "AUF2211032"
            ],
            [
                "id" => 33,
                "name" => "Engr. Cletus Egbuzie",
                "regno" => "AUF2211033"
            ],
            [
                "id" => 34,
                "name" => "Mr. Nathan Osuchukwu",
                "regno" => "AUF2211034"
            ],
            [
                "id" => 35,
                "name" => "Chief. Pope Agbarakwe",
                "regno" => "AUF2211035"
            ],
            [
                "id" => 36,
                "name" => "Chief O.K Eso",
                "regno" => "AUF2211036"
            ],
            [
                "id" => 37,
                "name" => "Chief Eze Chukwukere",
                "regno" => "AUF2211037"
            ],
            [
                "id" => 38,
                "name" => "Dr. Nicholas Ohaya",
                "regno" => "AUF2211038"
            ],
            [
                "id" => 39,
                "name" => "Dr. Chijioke Ukadike",
                "regno" => "AUF2211039"
            ],
            [
                "id" => 40,
                "name" => "Mr. Henry Nwozuzu",
                "regno" => "AUF2211040"
            ],
            [
                "id" => 41,
                "name" => "Mr. Chigozie Aguguo",
                "regno" => "AUF2211041"
            ],
            [
                "id" => 42,
                "name" => "Mr. Aloysius Osuiwu",
                "regno" => "AUF2211042"
            ],
            [
                "id" => 43,
                "name" => "Mr. Cyril Unanka",
                "regno" => "AUF2211043"
            ],
            [
                "id" => 44,
                "name" => "Sir Fyne Madumere",
                "regno" => "AUF2211044"
            ],
            [
                "id" => 45,
                "name" => "Mr. Theo Ajoku",
                "regno" => "AUF2211045"
            ],
            [
                "id" => 46,
                "name" => "Engr. Kenneth Nwagbara",
                "regno" => "AUF2211046"
            ],
            [
                "id" => 47,
                "name" => "Sir  Philip Ofoegbu",
                "regno" => "AUF2211047"
            ],
            [
                "id" => 48,
                "name" => "Dr. Johnbosco Nkpadobi",
                "regno" => "AUF2211048"
            ],
            [
                "id" => 49,
                "name" => "Pharm Kenneth Onuegbu",
                "regno" => "AUF2211049"
            ],
            [
                "id" => 50,
                "name" => "Sir Kenneth Egenti",
                "regno" => "AUF2211050"
            ],
            [
                "id" => 51,
                "name" => "Mr. Stanley Emeanuo",
                "regno" => "AUF2211051"
            ],
            [
                "id" => 52,
                "name" => "Engr. Frank Jude Nkpadobi",
                "regno" => "AUF2211052"
            ],
            [
                "id" => 53,
                "name" => "Chief Oliver Osuala",
                "regno" => "AUF2211053"
            ],
            [
                "id" => 54,
                "name" => "Chief Athan Iwuchukwu",
                "regno" => "AUF2211054"
            ],
            [
                "id" => 55,
                "name" => "Mr. Okechukwu Ikeme",
                "regno" => "AUF2211055"
            ],
            [
                "id" => 56,
                "name" => "Mr. Kingsley Okechukwu",
                "regno" => "AUF2211056"
            ],
            [
                "id" => 57,
                "name" => "Mr. Edward Emeanuo",
                "regno" => "AUF2211057"
            ],
            [
                "id" => 58,
                "name" => "Engr, Anselem U. Onwuanaku",
                "regno" => "AUF2211058"
            ],
            [
                "id" => 59,
                "name" => "Sir Emeka Nwosu",
                "regno" => "AUF2211059"
            ],
            [
                "id" => 60,
                "name" => "Chief Chigozie Anyiam",
                "regno" => "AUF2211060"
            ],
            [
                "id" => 61,
                "name" => "Major D. I. Azubuike (Rtd)",
                "regno" => "AUF2211061"
            ],
            [
                "id" => 62,
                "name" => "Mr. Felix Ihegworo",
                "regno" => "AUF2211062"
            ],
            [
                "id" => 63,
                "name" => "Chief Okey Aloy Oluigbo",
                "regno" => "AUF2211063"
            ],
            [
                "id" => 64,
                "name" => "Sir Chinonso Leonard Ihenetu",
                "regno" => "AUF2211064"
            ],
            [
                "id" => 65,
                "name" => "Mr. Anthony Mbakwe",
                "regno" => "AUF2211065"
            ],
            [
                "id" => 66,
                "name" => "Barr. Ezekanachi Onwuka Nnadozie",
                "regno" => "AUF2211066"
            ],
            [
                "id" => 67,
                "name" => "Mr. Kelechi Nwabueze Duru",
                "regno" => "AUF2211067"
            ],
            [
                "id" => 68,
                "name" => "Dr. Chidi Uzoma",
                "regno" => "AUF2211068"
            ],
            [
                "id" => 69,
                "name" => "Sir Chijioke Uzoma",
                "regno" => "AUF2211069"
            ],
            [
                "id" => 70,
                "name" => "Mr. Chinenye Nmezi",
                "regno" => "AUF2211070"
            ],
            [
                "id" => 71,
                "name" => "Sir Obinna Francis Chukwunyere",
                "regno" => "AUF2211071"
            ],
            [
                "id" => 72,
                "name" => "Mr. Vincent Okechukwu Egbuzie",
                "regno" => "AUF2211072"
            ],
            [
                "id" => 73,
                "name" => "Mr. George Emeka Anyiam",
                "regno" => "AUF2211073"
            ],
            [
                "id" => 74,
                "name" => "Mr. Benson Unanka",
                "regno" => "AUF2211074"
            ],
            [
                "id" => 75,
                "name" => "Barr. Justus Kelechukwu Ukaga",
                "regno" => "AUF2211075"
            ],
            [
                "id" => 76,
                "name" => "Dr. Chidi Nwoha King",
                "regno" => "AUF2211076"
            ],
            [
                "id" => 77,
                "name" => "HRM Eze Dr. Chukwudi Ihetu",
                "regno" => "AUF2211077"
            ],
            [
                "id" => 78,
                "name" => "Mr. Stanley Ozurumba",
                "regno" => "AUF2211078"
            ],
            [
                "id" => 79,
                "name" => "Mr. Ikechukwu Henry Etumnu",
                "regno" => "AUF2211079"
            ],
            [
                "id" => 80,
                "name" => "Engr. Kingsley Achonu",
                "regno" => "AUF2211080"
            ],
            [
                "id" => 81,
                "name" => "Barr Uche Olewunne",
                "regno" => "AUF2211081"
            ],
            [
                "id" => 82,
                "name" => "Chief Emmanuel Nwokedi Ibewuike",
                "regno" => "AUF2211082"
            ],
            [
                "id" => 83,
                "name" => "Mr. Bede Iheanyi Egbufor",
                "regno" => "AUF2211083"
            ],
            [
                "id" => 84,
                "name" => "Chief Joseph Chukwuma Ndupu",
                "regno" => "AUF2211084"
            ],
            [
                "id" => 85,
                "name" => "Engr. Amobi Larry Onyejiaka",
                "regno" => "AUF2211085"
            ],
            [
                "id" => 86,
                "name" => "Mr. Kingsley Nmeka",
                "regno" => "AUF2211086"
            ],
            [
                "id" => 87,
                "name" => "Mr. Jude O. Duru",
                "regno" => "AUF2211087"
            ],
            [
                "id" => 88,
                "name" => "Prince Ike Etuba Nwosu",
                "regno" => "AUF2211088"
            ],
            [
                "id" => 89,
                "name" => "Mr. Chris Osuala",
                "regno" => "AUF2211089"
            ],
            [
                "id" => 90,
                "name" => "Chief Ken Iwualla",
                "regno" => "AUF2211090"
            ],
            [
                "id" => 91,
                "name" => "Sir Frank Ikejiofor",
                "regno" => "AUF2211091"
            ],
            [
                "id" => 92,
                "name" => "Mr. Chidi Alex Anyadike",
                "regno" => "AUF2211092"
            ],
            [
                "id" => 93,
                "name" => "Dr. Dominic Chimezie Amaechi",
                "regno" => "AUF2211093"
            ],
            [
                "id" => 94,
                "name" => "Dr.George Duru",
                "regno" => "AUF2211094"
            ],
            [
                "id" => 95,
                "name" => "Mr. Solomon Mgbokwere",
                "regno" => "AUF2211095"
            ],
            [
                "id" => 96,
                "name" => "Engr. Basil Onunwa",
                "regno" => "AUF2211096"
            ],
            [
                "id" => 97,
                "name" => "Dr. Godfrey Ohadugha",
                "regno" => "AUF2211097"
            ],
            [
                "id" => 98,
                "name" => "Mr. Chigozie H. Agubata",
                "regno" => "AUF2211098"
            ],
            [
                "id" => 99,
                "name" => "Dr. Chikwe Ihekweazu",
                "regno" => "AUF2211099"
            ],
            [
                "id" => 100,
                "name" => "Chief Anthony Olemgbe",
                "regno" => "AUF2211100"
            ],
            [
                "id" => 101,
                "name" => "Chief Dr. Collins Okehie",
                "regno" => "AUF2211101"
            ],
            [
                "id" => 102,
                "name" => "Mr. Timothy Eze",
                "regno" => "AUF2211102"
            ],
            [
                "id" => 103,
                "name" => "Engr. Eso celestine Ugoeze",
                "regno" => "AUF2211103"
            ],
            [
                "id" => 104,
                "name" => "Sir Jude Mbadiwe Chinyere",
                "regno" => "AUF2211104"
            ],
            [
                "id" => 105,
                "name" => "Mr. Ben Ihegboro",
                "regno" => "AUF2211105"
            ],
            [
                "id" => 106,
                "name" => "Mr. Amobi Pascal Anochirim",
                "regno" => "AUF2211106"
            ],
            [
                "id" => 107,
                "name" => "Mr. Chigozie Victor Osuchukwu",
                "regno" => "AUF2211107"
            ],
            [
                "id" => 108,
                "name" => "Mr. Amaraegbu Kingsley Ozurumba",
                "regno" => "AUF2211108"
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
