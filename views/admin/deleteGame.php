<?php
$steamId = "k0rlak";
$base_url = "api.steampowered.com";
$interface = "ISteamWebAPIUtil";
$method = "GetSupportedAPIList";
$version = "v1";
$parameters = $key;

$link1 = "https://{$base_url}/{$interface}/{$method}/{$version}";
$link2 = "https://{$base_url}/{$interface}/{$method}/{$version}?{$parameters}";
define('STEAM_API_KEY', $key);
$sid64 = "76561198951455714";
//$res = file_get_contents("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=" . STEAM_API_KEY . "&steamids=$sid64");
echo "<pre>";
//var_dump($res);
echo "</pre>";
//$res = json_decode($res, true)['response']['players'][0];

//
//$nick = $res['personaname'];
//$profile = $res['profileurl'];
//$avatar = $res['avatarfull']; // 184x184
////$avatar = $res['avatarmedium']; // 64x64
////$avatar = $res['avatar']; // 32x32
//$status = $res['personastate']; // 0 - не в сети, 1 - в сети, 2 - занят, 3 - нет дома, 4 - спит, 5 - ищет с кем обменяться, 6 - ищет с кем поиграть
//$visibility = $res['communityvisibilitystate']; // 3 - открытый профиль
//$logoff = date('d.m.Y H:i', $res['lastlogoff']); // был онлайн
//$comments = $res['commentpermission']; // 1 - публичные комментарии разрешены, 0 - нет



$app_id = 814380;
$res = file_get_contents("http://api.steampowered.com/ISteamUserStats/GetGlobalAchievementPercentagesForApp/v0002/?gameid=$app_id");
$res = json_decode($res, true)['achievementpercentages'];

var_dump($res);

foreach ($res['achievements'] as $a) {
    echo $a['name'].PHP_EOL; // техническое имя достижения
    echo '~'.round($a['percent']).'%'.PHP_EOL."<br>"; // процент игроков, получивших достижение
}

