<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        # connect to database
        $conn = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'));

        # create database if not exist & select database
        if ($conn) {
            $createDB = "CREATE DATABASE IF NOT EXISTS " . env('DB_DATABASE');
            $query = mysqli_query($conn, $createDB);
            if (!$query) {
                echo mysqli_error($conn);
            }
        } else {
            echo mysqli_connect_error();
        }
    }
}
