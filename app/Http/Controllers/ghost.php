<?php

namespace App\Http\Controllers;

use App\Mail\FoloSupportTeam;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Http;

class ghost extends Controller
{
    private $isOnline;
    private $botToken;
    private $endPoints;

    public function __construct()
    {
        $this->isOnline = true;
        $this->botToken = 'Bearer xoxb-3725987236561-3717503003300-8pGSVbWJacnGdOjYpBgTN0E4';
        $this->endPoints = [
            'channels' => 'https://slack.com/api/conversations.list',
            'sendMessage' => 'https://slack.com/api/chat.postMessage',
        ];
    }

    // Testing bot
    public function test()
    {
        // get & select bot channel
        $channels = $this->getChannels();
        if ($channels['ok']) {
            // get bot channel id
            $botChannelId =  $channels['channels'][0]['id'];
            foreach ($channels['channels'] as $channel) {
                if ($channel['name'] == 'bots') {
                    $botChannelId =  $channel['id'];
                    break;
                }
            }
            // send log message
            return "Je suis opérationnel !";
        } else {
            return "Désolé, il y'a un petit soucis technique. Je n'ai pas pu récupérer les canaux de discussion.";
        }
    }

    // Get conversations list
    public function getChannels()
    {
        if ($this->isOnline) {
            $headers = [
                'Authorization' => $this->botToken,
            ];
            // sending request...
            $response = Http::withHeaders($headers)->post($this->endPoints['channels']);
            // get results
            $statusCode = $response->status();
            $responseBody = json_decode($response->getBody(), true);
            $responseBody['called_function'] = 'getChannels';

            // visualize response
            return $responseBody;
        }
    }

    // Send message ton a channel

    public function sendMessage(string $channelId = null, string $msg = "Oups ! J'ai envoyé un message par erreur")
    {
        if ($this->isOnline) {
            $headers = [
                'Content-type' => 'application/json',
                'Authorization' => $this->botToken,
            ];

            $body = [
                // select by default [bot] channel if channelId isn't given
                'channel' => $channelId ?? $this->getChannels()['channels'][0]['id'],
                'text' => $msg,
            ];

            $response = Http::withHeaders($headers)->post($this->endPoints['sendMessage'], $body);

            $statusCode = $response->status();
            $responseBody = json_decode($response->getBody(), true);
            $responseBody['called_function'] = 'sendMessage';

            return $responseBody;
        }
    }

    // Handle all events in the slack workspace
    public function events()
    {
        return response()->json([
            "challenge" => 'ok',
        ]);
    }
}
