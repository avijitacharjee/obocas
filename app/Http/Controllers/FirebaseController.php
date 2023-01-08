<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use Kreait\Firebase\Database;
use Kreait\Firebase\Exception\Auth\FailedToVerifyToken;

class FirebaseController extends Controller
{
    public function index(){
        $factory = (new Factory)->withServiceAccount(__DIR__.'/../../../obocas-42c54-2207975b4958.json');
        // $firebase = (new Factory)
        //     ->withServiceAccount($serviceAccount)
        //     ->withDatabaseUri('https://obocas-42c54-default-rtdb.firebaseio.com/')
        //     ->create();
        $database = $factory->withDatabaseUri('https://obocas-42c54-default-rtdb.firebaseio.com/')->createDatabase();
        $newPost = $database
            ->getReference('blog/posts')
            ->push([
                'title' => 'Post title',
                'body' => 'This should probably be longer.'
            ]);
        //$newPost->getKey(); // => -KVr5eu8gcTv7_AHb-3-
        //$newPost->getUri(); // => https://my-project.firebaseio.com/blog/posts/-KVr5eu8gcTv7_AHb-3-
        //$newPost->getChild('title')->set('Changed post title');
        //$newPost->getValue(); // Fetches the data from the realtime database
        //$newPost->remove();
        echo"<pre>";
        print_r($newPost->getvalue());
    }
    public function auth(){
        $factory = (new Factory)->withServiceAccount(__DIR__.'/../../../obocas-42c54-2207975b4958.json');
        $auth = $factory->createAuth();
        $idTokenString = 'JZmxsufPSbMeNdOCbqx12YePctO2';
        $verifiedIdToken = null;
        try {
            $verifiedIdToken = $auth->verifyIdToken($idTokenString);
        } catch (FailedToVerifyToken $e) {
            echo 'The token is invalid: '.$e->getMessage();
        }

        $uid = $verifiedIdToken->claims()->get('sub');

        $user = $auth->getUser($uid);
        dd($user);
    }
}
