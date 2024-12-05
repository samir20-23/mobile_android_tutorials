<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash ;
use Illuminate\Support\Str ;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    protected static ?string $password ;
    public function definition(): array
    {
        return [
            //
            'firstName' => fake()->firstName() ,
            'lastName' => fake()->lastName(),
            'email' => fake()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10) ,

        ];
    }
    public function unverefied(): static{
        return $this->state(fn (array $attributes)=> [
            'email_verified_at' => null ,
        ]);
    }
}
