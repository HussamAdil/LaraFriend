<?php

namespace App\Jobs\Api\Auth;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class CreateUserJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $name;
    private $email;
    private $password;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->name = $request['name'];
        $this->email = $request['email'];
        $this->password = $request['password'];
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $createdUser = User::create([
            'name' => $this->name, 
            'email' => $this->email, 
            'password' => bcrypt($this->password)
        ]);
 
        return $createdUser;
       
    }
}
