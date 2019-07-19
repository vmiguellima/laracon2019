<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Trip;
use Faker\Generator as Faker;

$factory->define(Trip::class, function (Faker $faker) {
    return [
        'went_at' => $faker->dateTimeBetween('-1 years', 'now'),
        'lake' => $faker->randomElement([
            'Agnew Lake',
            'Ahmic Lake',
            'Allard Lake',
            'Allumette Lake',
            'Arrowhead Lake',
            'Astrolabe Lake',
            'Attawapiskat Lake',
            'Balsam Lake',
            'Baptiste Lake',
            'Belleau Lake',
            'Bolton Lakes',
            'Brampton Lake',
            'Branch Lake',
            'Bruce Lake',
            'Buck Lake',
            'Buckhorn Lake',
            'Calabogie Lake',
            'Caledon lake',
            'Cameron Lake',
            'Canning Lake',
            'Canoe Lake',
            'Canonto Lake',
            'Caribou Lake',
            'Carson Lake',
            'Cat Lake',
            'Catchacoma Lake',
            'Cedar Lake',
            'Centennial Lake',
            'Champlain Trail Lakes',
            'Chandos Lake',
            'Charleston Lake',
            'Chats Lake',
            'Clearwater Lake',
            'Commanda Lake',
            'Corn Lake',
            'Cranberry Lake',
            'Crane Lake',
            'Crawford Lake',
            'Crotch Lake',
            'Crowe Lake',
            'Crystal Lake',
            'Dalhousie Lake',
            'Deer Lake',
            'Denbigh Lake',
            'Devork Lake',
            'Diamond Lake',
            'Dickey Lake',
            'Dog Lake',
            'Dogtooth Lake',
            'Dow\'s Lake',
            'Drag Lake',
            'Eagle Lake',
            'Echo Lake',
            'Eels Lake',
            'Elephant Lake',
            'Elizabeth Lake',
            'Ena Lake',
            'Esnagi Lake',
            'Fairbank Lake',
            'Fairy Lake',
            'Ferguson Lake',
            'Found Lake',
            'Four Mile Lake',
            'Fraser Lake',
            'Gananoque Lake',
            'Garson Lake',
            'Gathering Lake',
            'Ghost Lake',
            'Gibson Lake',
            'Gloucester Pool',
            'Go Home Lake',
            'Golden Lake',
            'Gordon Lake',
            'Gould Lake',
            'Green Lake',
            'Grundy Lake',
            'Guelph Lake',
            'Gull Lake',
            'Gullrock Lake',
            'Halls Lake',
            'Hammer Lake',
            'Head Lake',
            'Heart Lake',
            'Herbert Lake',
            'Holden Lake',
            'Indian Lake',
            'Inn Lake',
            'Irwin Lake',
            'Jack Lake',
            'Jumping Cariboo Lake',
            'Kabinakagami Lake',
            'Kahshe Lake',
            'Kamaniskeg Lake',
            'Kashagawigamog Lake',
            'Kashwakamak Lake',
            'Kasshabog Lake',
            'Kawagama Lake',
            'Kawartha Lakes',
            'Kennisis Lake',
            'Kesagami Lake',
            'Kimber Lake',
            'Kushog Lake',
            'Lac des Mille Lacs',
            'Lac Seul',
            'Lady Evelyn Lake',
            'Lake Abitibi',
            'Lake Cecebe',
            'Lake Chemong',
            'Lake Couchiching',
            'Lake Erie',
            'Lake Eugenia',
            'Lake Huron',
            'Lake Joseph',
            'Lake Kagawong',
            'Lake Kairiskons',
            'Lake Kelso',
            'Lake Kishkatina',
            'Lake Madawaska',
            'Lake Manitou',
            'Lake Matinenda',
            'Lake Mindemoya',
            'Lake Muskoka',
            'Lake Nipigon',
            'Lake Nipissing',
            'Lake Nosbonsing',
            'Lake of Bays',
            'Lake of the Woods',
            'Lake of Two Islands',
            'Lake Ogoki',
            'Lake Ontario',
            'Lake Panache',
            'Lake Ramsey',
            'Lake Rosalind',
            'Lake Rosseau',
            'Lake Saint Clair',
            'Lake Scugog',
            'Lake Simcoe',
            'Lake St. Joseph',
            'Lake Superior',
            'Lake Temagami',
            'Lake Timiskaming',
            'Lake Wolsey',
            'Larder Lake',
            'Limerick Lake',
            'Little Branch Lake',
            'Little Lake',
            'Little Sachigo Lake',
            'Little Yirkie Lake',
            'Long Lake',
            'Loughborough Lake',
            'Lower Beverley Lake',
            'Lower Buckhorn Lake',
            'Mabel Lake',
            'MacDowell Lake',
            'Madawaska Lake',
            'Mameigwess Lake',
            'Maple Lake',
            'Marmion Lake',
            'Mary Lake',
            'Maul Lake',
            'Maynard Lake',
            'Mazinaw Lake',
            'McArthur Lake',
            'Minnitaki Lake',
            'Missisa Lake',
            'Mississauga Lake',
            'Mississippi Lake',
            'Mojikit Lake',
            'Morrison Lake',
            'Mountain Lake',
            'Mozhabong Lake',
            'Mud Lake',
            'Muskrat Lake',
            'Net Lake',
            'Nettleton Lake',
            'Night Hawk Lake',
            'Nishin Lake',
            'North Caribou Lake',
            'Nungesser Lake',
            'Oak Lake',
            'Oba Lake - North',
            'Oba Lake - South',
            'Octopus Lake',
            'Old Man\'s Lake',
            'Onaman Lake',
            'Onigam Lake',
            'Onion Lake',
            'Opeongo Lake',
            'Opinicon Lake',
            'Otter Tail Lake',
            'Otty Lake',
            'Ozhiski Lake',
            'Paint Lake',
            'Pakeshkag Lake',
            'Papineau Lake',
            'Paudash Lake',
            'Peninsula Lake',
            'Perch Lake',
            'Percy Lake',
            'Pierce Lake',
            'Pierre Lake',
            'Pigeon Lake',
            'Pike Lake',
            'Pine Lake',
            'Pokei Lake',
            'Professor\'s Lake',
            'Puslinch Lake',
            'Rainy Lake',
            'Red Cedar Lake',
            'Red lake',
            'Red Squirrel Lake',
            'Redstone Lake',
            'Restoule Lake',
            'Rice Lake',
            'Ril Lake',
            'Riley Lake',
            'Rock Lake',
            'Round Lake',
            'Ruth Lake',
            'Sachigo Lake',
            'Saint Francis',
            'Salerno Lake',
            'Salmon Lake',
            'Sand Lake',
            'Sandy Lake',
            'Saskatchewan Lake',
            'Savant Lake',
            'Sawyer lake',
            'Seseganaga Lake',
            'Severn Lake',
            'Seymour Lake',
            'Sharbot Lake',
            'Shibogama Lake',
            'Shoal Lake',
            'Shutze Lake',
            'Six Mile Lake',
            'Skeleton Lake',
            'Skootamatta Lake',
            'Smoothrock Lake',
            'Soap Lake',
            'Sparrow Lake',
            'Spring Lake',
            'St. Joe Lake',
            'Steel Lake',
            'Stoco Lake',
            'Stony Lake',
            'Sturgeon Lake',
            'Sunfish Lake',
            'Sydenham Lake',
            'Syrette Lake',
            'Talon Lake',
            'Tangamong Lake',
            'Tetapaga Lake',
            'Tetu Lake',
            'Thirty Island Lake',
            'Triangle Lake',
            'Trout Lake',
            'Tunnel Lake',
            'Turtle Lake',
            'Twelve Mile Lake',
            'Umfreville Lake',
            'Upper Beverley Lake',
            'Upper Nishin Lake',
            'Upper Redwater Lake',
            'Upper Rideau Lake',
            'Wabatongushi Lake',
            'Wabigoon Lake',
            'Wahwashkesh Lake',
            'Wanapitei Lake',
            'Wapikopa Lake',
            'Wawa Lake',
            'Weagamow Lake',
            'West Shining Tree Lake',
            'White Lake',
            'White Otter Lake',
            'Whiteclay Lake',
            'Whitewater Lake',
            'Windermere Lake',
            'Windigo Lake',
            'Windy Lake',
            'Winisk Lake',
            'Wintering Lake',
            'Wolfe Lake',
            'Wood Lake',
            'Wunnummin Lake',
        ]),
    ];
});