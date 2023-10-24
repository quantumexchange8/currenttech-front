<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Jobs\SubscriberJoinJob;
use App\Http\Requests\NewsletterRequest;

class SubscribeController extends Controller 
{
    // public function post(NewsletterRequest $request)
    // {
    //     $validated = $request->validated();

    //     // Maybe you need more validation rules???

    //     $Subscriber = Subscriber::create([
    //         'email' => $validated['email']
    //     ]);

    //     SubscriberJoinJob::dispatch($Subscriber);

    //     return redirect('support')->with('success', 'You have successfully subscribed. Please check your email spam folder.');
    // }


    public function post(NewsletterRequest $request )
{
    // dd($request->all());
    // $validated = $request->validated();
    
    // $existingSubscriber = Subscriber::where('email', $validated['email'])->first();

    // if ($existingSubscriber) {
        // already subscribed email
        // return redirect('support')->with('error', 'This email address is already subscribed.');
    // }

    // new subscriber
    // $newSubscriber = Subscriber::create([
    //     'email' => $validated['email']
    // ]);

    // SubscriberJoinJob::dispatch($newSubscriber);

    $test = Subscriber::create([
        'email' => $request->email,
    ]);

    return redirect('support')->with('success', 'You have successfully subscribed. Please check your email spam folder.');
}


    public function show(string $hash)
    {
        $subscriber = Subscriber::where('hash', $hash)->firstOrFail();

        $subscriber->update([
            'hash' => null,
            'verified_at' => now()
        ]);

        return redirect(route('support'))
            ->with('success', 'You have successfully verified your email.');
    }
}
