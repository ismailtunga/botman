<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
$botman->hears('Selam', function ($bot) {
    $bot->reply('Merhaba');
});
$botman->hears('Nasılsın', function ($bot) {
    $bot->reply('İyi seni sormalı');
});


$botman->hears('Start conversation', BotManController::class.'@startConversation');
