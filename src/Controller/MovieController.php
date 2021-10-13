<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MovieController extends AbstractController
{
    private $config;

    public function __construct()
    {
        $this->config = \json_decode('{"images":{"base_url":"http://image.tmdb.org/t/p/","secure_base_url":"https://image.tmdb.org/t/p/","backdrop_sizes":["w300","w780","w1280","original"],"logo_sizes":["w45","w92","w154","w185","w300","w500","original"],"poster_sizes":["w92","w154","w185","w342","w500","w780","original"],"profile_sizes":["w45","w185","h632","original"],"still_sizes":["w92","w185","w300","original"]},"change_keys":["adult","air_date","also_known_as","alternative_titles","biography","birthday","budget","cast","certifications","character_names","created_by","crew","deathday","episode","episode_number","episode_run_time","freebase_id","freebase_mid","general","genres","guest_stars","homepage","images","imdb_id","languages","name","network","origin_country","original_name","original_title","overview","parts","place_of_birth","plot_keywords","production_code","production_companies","production_countries","releases","revenue","runtime","season","season_number","season_regular","spoken_languages","status","tagline","title","translations","tvdb_id","tvrage_id","type","video","videos"]}', true);
    }
    
    /**
     * @Route("/", name="homepage")
     */
    public function list(): Response
    {
        $response = <<<MOVIES
{
  "page": 1,
  "results": [
    {
      "adult": false,
      "backdrop_path": "/t9nyF3r0WAlJ7Kr6xcRYI4jr9jm.jpg",
      "genre_ids": [
        878,
        28
      ],
      "id": 580489,
      "original_language": "en",
      "original_title": "Venom: Let There Be Carnage",
      "overview": "After finding a host body in investigative reporter Eddie Brock, the alien symbiote must face a new enemy, Carnage, the alter ego of serial killer Cletus Kasady.",
      "popularity": 10722.316,
      "poster_path": "/rjkmN1dniUHVYAtwuV3Tji7FsDO.jpg",
      "release_date": "2021-09-30",
      "title": "Venom: Let There Be Carnage",
      "video": false,
      "vote_average": 7.2,
      "vote_count": 477
    },
    {
      "adult": false,
      "backdrop_path": "/8Y43POKjjKDGI9MH89NW0NAzzp8.jpg",
      "genre_ids": [
        35,
        28,
        12,
        878
      ],
      "id": 550988,
      "original_language": "en",
      "original_title": "Free Guy",
      "overview": "A bank teller called Guy realizes he is a background character in an open world video game called Free City that will soon go offline.",
      "popularity": 5864.226,
      "poster_path": "/xmbU4JTUm8rsdtn7Y3Fcm30GpeT.jpg",
      "release_date": "2021-08-11",
      "title": "Free Guy",
      "video": false,
      "vote_average": 7.9,
      "vote_count": 2562
    },
    {
      "adult": false,
      "backdrop_path": "/VuukZLgaCrho2Ar8Scl9HtV3yD.jpg",
      "genre_ids": [
        878,
        28
      ],
      "id": 335983,
      "original_language": "en",
      "original_title": "Venom",
      "overview": "Investigative journalist Eddie Brock attempts a comeback following a scandal, but accidentally becomes the host of Venom, a violent, super powerful alien symbiote. Soon, he must rely on his newfound powers to protect the world from a shadowy organization looking for a symbiote of their own.",
      "popularity": 3890.331,
      "poster_path": "/2uNW4WbgBXL25BAbXGLnLqX71Sw.jpg",
      "release_date": "2018-09-28",
      "title": "Venom",
      "video": false,
      "vote_average": 6.8,
      "vote_count": 11650
    },
    {
      "adult": false,
      "backdrop_path": "/aO9Nnv9GdwiPdkNO79TISlQ5bbG.jpg",
      "genre_ids": [
        28,
        12
      ],
      "id": 568620,
      "original_language": "en",
      "original_title": "Snake Eyes: G.I. Joe Origins",
      "overview": "After saving the life of their heir apparent, tenacious loner Snake Eyes is welcomed into an ancient Japanese clan called the Arashikage where he is taught the ways of the ninja warrior. But, when secrets from his past are revealed, Snake Eyes' honor and allegiance will be tested – even if that means losing the trust of those closest to him.",
      "popularity": 3146.571,
      "poster_path": "/uIXF0sQGXOxQhbaEaKOi2VYlIL0.jpg",
      "release_date": "2021-07-22",
      "title": "Snake Eyes: G.I. Joe Origins",
      "video": false,
      "vote_average": 6.9,
      "vote_count": 626
    },
    {
      "adult": false,
      "backdrop_path": "/kTOheVmqSBDIRGrQLv2SiSc89os.jpg",
      "genre_ids": [
        16,
        35,
        10751
      ],
      "id": 639721,
      "original_language": "en",
      "original_title": "The Addams Family 2",
      "overview": "The Addams get tangled up in more wacky adventures and find themselves involved in hilarious run-ins with all sorts of unsuspecting characters.",
      "popularity": 2861.106,
      "poster_path": "/xYLBgw7dHyEqmcrSk2Sq3asuSq5.jpg",
      "release_date": "2021-10-01",
      "title": "The Addams Family 2",
      "video": false,
      "vote_average": 7.6,
      "vote_count": 239
    },
    {
      "adult": false,
      "backdrop_path": "/owraiceOKtSOa3t8sp3wA9K2Ox6.jpg",
      "genre_ids": [
        16,
        28,
        12,
        878
      ],
      "id": 703771,
      "original_language": "en",
      "original_title": "Deathstroke: Knights & Dragons - The Movie",
      "overview": "The assassin Deathstroke tries to save his family from the wrath of H.I.V.E. and the murderous Jackal.",
      "popularity": 2643.105,
      "poster_path": "/vFIHbiy55smzi50RmF8LQjmpGcx.jpg",
      "release_date": "2020-08-04",
      "title": "Deathstroke: Knights & Dragons - The Movie",
      "video": false,
      "vote_average": 7,
      "vote_count": 263
    },
    {
      "adult": false,
      "backdrop_path": "/umAoDwLZMBrYeCDfbJYFRMuXWAr.jpg",
      "genre_ids": [
        878
      ],
      "id": 681887,
      "original_language": "en",
      "original_title": "Cosmic Sin",
      "overview": "In the year 2524, four centuries after humans started colonizing the outer planets, retired General James Ford gets called back into service when a hostile alien fleet attacks soldiers on a remote planet. The threat against mankind soon escalates into an interstellar war as Ford and a team of elite soldiers try to stop the imminent attack before it's too late.",
      "popularity": 2214.236,
      "poster_path": "/6Wm7P6y22UZA40QuPYHyWyJ6leI.jpg",
      "release_date": "2021-03-12",
      "title": "Cosmic Sin",
      "video": false,
      "vote_average": 4.5,
      "vote_count": 328
    },
    {
      "adult": false,
      "backdrop_path": "/hrzoy8vvUrxQixOM11pwW9AX7Bu.jpg",
      "genre_ids": [
        80,
        18
      ],
      "id": 524369,
      "original_language": "en",
      "original_title": "The Many Saints of Newark",
      "overview": "Young Anthony Soprano is growing up in one of the most tumultuous eras in Newark, N.J., history, becoming a man just as rival gangsters start to rise up and challenge the all-powerful DiMeo crime family. Caught up in the changing times is the uncle he idolizes, Dickie Moltisanti, whose influence over his nephew will help shape the impressionable teenager into the all-powerful mob boss, Tony Soprano.",
      "popularity": 1901.851,
      "poster_path": "/1UkbPQspPbq1FPbFP4VV1ELCfSN.jpg",
      "release_date": "2021-09-22",
      "title": "The Many Saints of Newark",
      "video": false,
      "vote_average": 6.7,
      "vote_count": 100
    },
    {
      "adult": false,
      "backdrop_path": "/vkIJ2QgcKMJRvi6pBW4Tr2kgLdy.jpg",
      "genre_ids": [
        80,
        53
      ],
      "id": 637534,
      "original_language": "fr",
      "original_title": "BAC Nord",
      "overview": "A police brigade working in the dangerous northern neighborhoods of Marseille, where the level of crime is higher than anywhere else in France.",
      "popularity": 1900.756,
      "poster_path": "/nLanxl7Xhfbd5s8FxPy8jWZw4rv.jpg",
      "release_date": "2021-08-18",
      "title": "The Stronghold",
      "video": false,
      "vote_average": 7.7,
      "vote_count": 409
    },
    {
      "adult": false,
      "backdrop_path": "/dIibeeq4QMay5bTJ2vjr72IFFRo.jpg",
      "genre_ids": [
        14,
        12,
        35
      ],
      "id": 589754,
      "original_language": "ru",
      "original_title": "Последний богатырь: Корень зла",
      "overview": "Peace and tranquility have set in Belogorie. The evil was defeated and Ivan is now enjoying his well-deserved fame. He is surrounded by his family, friends and small wonders from the modern world that help him lead a comfortable life. Luckily, he has his Magic Sword to cut a gap between the worlds to get some supplies quite regularly. But when an ancient evil rises and the existence of the magic world is put to danger, Ivan has to team up with his old friends and his new rivals. They will set out on a long journey beyond the known world to find a way to defeat the enemies and to return peace to Belogorie.",
      "popularity": 1874.787,
      "poster_path": "/5VJSIAhSn4qUsg5nOj4MhQhF5wQ.jpg",
      "release_date": "2021-01-01",
      "title": "The Last Warrior: Root of Evil",
      "video": false,
      "vote_average": 7.2,
      "vote_count": 47
    },
    {
      "adult": false,
      "backdrop_path": "/vQ9YlITvVFdbFXYX6qwTNgIP85u.jpg",
      "genre_ids": [
        16,
        28
      ],
      "id": 843241,
      "original_language": "ja",
      "original_title": "劇場版 七つの大罪 光に呪われし者たち",
      "overview": "With the help of the \"Dragon Sin of Wrath\" Meliodas and the worst rebels in history, the Seven Deadly Sins, the \"Holy War\", in which four races, including Humans, Goddesses, Fairies and Giants fought against the Demons, is finally over. At the cost of the \"Lion Sin of Pride\" Escanor's life, the Demon King was defeated and the world regained peace. After that, each of the Sins take their own path.",
      "popularity": 1830.423,
      "poster_path": "/k0ThmZQl5nHe4JefC2bXjqtgYp0.jpg",
      "release_date": "2021-07-02",
      "title": "The Seven Deadly Sins: Cursed by Light",
      "video": false,
      "vote_average": 8.5,
      "vote_count": 152
    },
    {
      "adult": false,
      "backdrop_path": "/cinER0ESG0eJ49kXlExM0MEWGxW.jpg",
      "genre_ids": [
        28,
        12,
        14
      ],
      "id": 566525,
      "original_language": "en",
      "original_title": "Shang-Chi and the Legend of the Ten Rings",
      "overview": "Shang-Chi must confront the past he thought he left behind when he is drawn into the web of the mysterious Ten Rings organization.",
      "popularity": 1430.517,
      "poster_path": "/1BIoJGKbXjdFDAqUEiA2VHqkK1Z.jpg",
      "release_date": "2021-09-01",
      "title": "Shang-Chi and the Legend of the Ten Rings",
      "video": false,
      "vote_average": 7.8,
      "vote_count": 1246
    },
    {
      "adult": false,
      "backdrop_path": "/5PQhNs4M3RxIqaNAdBI6mXlXyYh.jpg",
      "genre_ids": [
        27,
        14,
        9648
      ],
      "id": 839436,
      "original_language": "en",
      "original_title": "Dragon Fury",
      "overview": "A group of soldiers are taken to the mountains of Wales to investigate a strange beast.",
      "popularity": 1358.319,
      "poster_path": "/6WcJ4cV2Y3gnTYp5zHu968TYmTJ.jpg",
      "release_date": "2021-06-15",
      "title": "Dragon Fury",
      "video": false,
      "vote_average": 5.9,
      "vote_count": 17
    },
    {
      "adult": false,
      "backdrop_path": "/iDLtDgxLiYsarfdQ4msUhUqoNPp.jpg",
      "genre_ids": [
        878
      ],
      "id": 725273,
      "original_language": "en",
      "original_title": "Solitary",
      "overview": "A man wakes up inside a room to discover he's a prisoner sent into space to form Earth's first colony, and worse - his cell mate Alana is hell bent on destroying everything.",
      "popularity": 1243.325,
      "poster_path": "/ApwmbrMlsuOay5rXQA4Kbz7qJAl.jpg",
      "release_date": "2021-09-24",
      "title": "Solitary",
      "video": false,
      "vote_average": 6.5,
      "vote_count": 35
    },
    {
      "adult": false,
      "backdrop_path": "/jlGmlFOcfo8n5tURmhC7YVd4Iyy.jpg",
      "genre_ids": [
        28,
        12,
        14
      ],
      "id": 436969,
      "original_language": "en",
      "original_title": "The Suicide Squad",
      "overview": "Supervillains Harley Quinn, Bloodsport, Peacemaker and a collection of nutty cons at Belle Reve prison join the super-secret, super-shady Task Force X as they are dropped off at the remote, enemy-infused island of Corto Maltese.",
      "popularity": 1236.844,
      "poster_path": "/kb4s0ML0iVZlG6wAKbbs9NAm6X.jpg",
      "release_date": "2021-07-28",
      "title": "The Suicide Squad",
      "video": false,
      "vote_average": 7.8,
      "vote_count": 4340
    },
    {
      "adult": false,
      "backdrop_path": "/uRkRJjrxVa04w7k83Hy20FKot4G.jpg",
      "genre_ids": [
        28
      ],
      "id": 859041,
      "original_language": "zh",
      "original_title": "疯狂的拳头",
      "overview": "After an opponent dies mid-match, a prominent MMA champion swore never to fight again and retired to run his family's company. But when his best friend dies under suspicious circumstances, he has no choice but to step back in the ring.",
      "popularity": 1147.607,
      "poster_path": "/jVAEVDNdUPRKJ7hJ4zt6lGcLATD.jpg",
      "release_date": "2017-05-25",
      "title": "Crazy Fist",
      "video": false,
      "vote_average": 7.6,
      "vote_count": 32
    },
    {
      "adult": false,
      "backdrop_path": "/xPpXYnCWfjkt3zzE0dpCNME1pXF.jpg",
      "genre_ids": [
        16,
        28,
        12,
        14
      ],
      "id": 635302,
      "original_language": "ja",
      "original_title": "劇場版「鬼滅の刃」無限列車編",
      "overview": "Tanjirō Kamado, joined with Inosuke Hashibira, a boy raised by boars who wears a boar's head, and Zenitsu Agatsuma, a scared boy who reveals his true power when he sleeps, boards the Infinity Train on a new mission with the Fire Hashira, Kyōjurō Rengoku, to defeat a demon who has been tormenting the people and killing the demon slayers who oppose it!",
      "popularity": 1105.201,
      "poster_path": "/h8Rb9gBr48ODIwYUttZNYeMWeUU.jpg",
      "release_date": "2020-10-16",
      "title": "Demon Slayer -Kimetsu no Yaiba- The Movie: Mugen Train",
      "video": false,
      "vote_average": 8.4,
      "vote_count": 1724
    },
    {
      "adult": false,
      "backdrop_path": "/xXHZeb1yhJvnSHPzZDqee0zfMb6.jpg",
      "genre_ids": [
        28,
        80,
        53
      ],
      "id": 385128,
      "original_language": "en",
      "original_title": "F9",
      "overview": "Dominic Toretto and his crew battle the most skilled assassin and high-performance driver they've ever encountered: his forsaken brother.",
      "popularity": 1086.853,
      "poster_path": "/bOFaAXmWWXC3Rbv4u4uM9ZSzRXP.jpg",
      "release_date": "2021-05-19",
      "title": "F9",
      "video": false,
      "vote_average": 7.4,
      "vote_count": 4028
    },
    {
      "adult": false,
      "backdrop_path": "/7WJjFviFBffEJvkAms4uWwbcVUk.jpg",
      "genre_ids": [
        12,
        14,
        35,
        28
      ],
      "id": 451048,
      "original_language": "en",
      "original_title": "Jungle Cruise",
      "overview": "Dr. Lily Houghton enlists the aid of wisecracking skipper Frank Wolff to take her down the Amazon in his dilapidated boat. Together, they search for an ancient tree that holds the power to heal – a discovery that will change the future of medicine.",
      "popularity": 1084.754,
      "poster_path": "/9dKCd55IuTT5QRs989m9Qlb7d2B.jpg",
      "release_date": "2021-07-28",
      "title": "Jungle Cruise",
      "video": false,
      "vote_average": 7.8,
      "vote_count": 2912
    },
    {
      "adult": false,
      "backdrop_path": "/MDYanFolbT76dj0gsCbhS2GM5A.jpg",
      "genre_ids": [
        37,
        28
      ],
      "id": 859860,
      "original_language": "en",
      "original_title": "Catch the Bullet",
      "overview": "U.S. marshal Britt MacMasters returns from a mission to find his father wounded and his son kidnapped by the outlaw Jed Blake. Hot on their trail, Britt forms a posse with a gunslinging deputy and a stoic Pawnee tracker. But Jed and Britt tread dangerously close to the Red Desert’s Sioux territory.",
      "popularity": 980.994,
      "poster_path": "/7PoomidF9HlMKXcAyOJ87lGkhSp.jpg",
      "release_date": "2021-09-10",
      "title": "Catch the Bullet",
      "video": false,
      "vote_average": 5.5,
      "vote_count": 54
    }
  ],
  "total_pages": 500,
  "total_results": 10000
}
MOVIES;
        $response = \json_decode($response, true);

        return $this->render('movie/list.html.twig', [
            'movies' => $response['results'],
            'config' => $this->config
        ]);
    }
}